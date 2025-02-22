
/**
 * Affiche le graphique ou le tableau
 *
 * @param node btn html du bouton
 * @param string id identifiant du graphique
 * @param string to 'svg' ou 'table'
 */
function spip_d3_statistiques_toggle_svg_table(btn, id, to) {
	jQuery(btn).parent().find('.btn').removeClass('btn_on');
	jQuery(btn).addClass('btn_on');
	if (to === 'table') {
		jQuery(id).find('.spip_d3_svg').hide().end().find('.spip_d3_table').show();
	} else {
		jQuery(id).find('.spip_d3_table').hide().end().find('.spip_d3_svg').show();
	}
	const url = parametre_url(window.document.location.href, 'vue', to);
	window.history.replaceState({}, window.document.title, url);
}

/**
 * Recharge le graphique avec cette url json
 *
 * @param node btn html du bouton
 * @param string $id identifiant du graphique
 */
function spip_d3_statistiques_load_json(btn, id) {
	const $btn = jQuery(btn);
	$btn.parent().find('.btn').removeClass('btn_on');
	$btn.addClass('btn_on');

	$btn.closest('.spip_d3_nav').find('.btn--stats-json').attr('href', btn.dataset.jsonAuteur);
	$btn.closest('.spip_d3_nav').find('.btn--stats-csv').attr('href', btn.dataset.csvAuteur);
	$btn.closest('.spip_d3_nav').find('.spip_d3_nav_caption').text(btn.dataset.title);

	const url = parametre_url(window.document.location.href, 'graph', btn.dataset.graph);
	window.history.replaceState({}, window.document.title, url);

	const $id = jQuery(id);
	$id[0].dataset.json = btn.dataset.json;
	$id[0].dataset.title = btn.dataset.title;
	const graph = $id.data('graph');

	graph.updateJson();
}


/**
 * Déclare et crée le graphique et tableau html de l'id demandé.
 *
 * L'url du json de ses données est dans l'attribut data-json.
*/
function spip_d3_statistiques_create(id, options = {}) {
	if (jQuery(id).data('graph')) {
		return;
	}
	const $nav = jQuery(id).parent().find('.spip_d3_nav');
	if ($nav.find('.groupe-btns--stats-graph .btn.btn_on').length) {
		jQuery(id)[0].dataset.json = $nav.find('.groupe-btns--stats-graph .btn.btn_on').data('json');
	}
	const table_visible = !!$nav.find('.btn--stats-to-table.btn_on').length;

	const graph = new Spip_d3_graph(id, {
		language: options.language || 'fr',
		d3_directory: options.d3_directory,
	});
	jQuery(id).data('graph', graph);
	graph.set_dataLoader(data => {
		// ici on peuple les dates manquantes du json
		data.data = graph.fillInDates(data.meta, data.data, currentDate => {
			return {"date": currentDate, "visites": 0};
		});
		graph.update_table(data, true);
		spip_d3_statistiques_update_graph(id, data);
	});

	graph.loading_start();
	Promise.resolve()
	// charger la locale de date avant de créer les axes… sinon ils ne sont pas traduits
	.then(d => graph.localize_d3_time(d))
	.then(() => {
		graph.prepare_table(table_visible);
		spip_d3_statistiques_prepare_graph(id, !table_visible);
		graph.updateJson();
	});

}

/**
 * On prépare le svg, les définitions d'axes, d'histogrammes, etc...
 *
 * On stocke ces infos dans l'objet "modele" que l'on attribut à svg.datum()
 * pour être exploité plus tard dans la fonction d'update
 *
 * Cette fonction n'a pas connaissance encore des données du json.
 */
function spip_d3_statistiques_prepare_graph(id, visible = true) {

	const inner = d3.select(id).select('.spip_d3_graph_inner');

	const dimensions = {
		height: 300,
		width: 800,
		margin: {
			top: 30,
			right: 30,
			bottom: 30,
			left: 60
		}
	};
	dimensions.inner = {
		width: dimensions.width - dimensions.margin.left - dimensions.margin.right,
		height: dimensions.height - dimensions.margin.top - dimensions.margin.bottom,
	}

	const modele = {}
	modele.dimensions = dimensions;
	modele.parseTime = d3.timeParse("%Y-%m-%d");
	modele.dateFormat = d3.timeFormat("%d %B %Y");

	const x = d3.scaleTime().range([0, dimensions.inner.width ]);
	const y = d3.scaleLinear().range([dimensions.inner.height, 0]);
	modele.x = x;
	modele.y = y;

	modele.xAxis = g => g
		.attr("transform", "translate(0, " + dimensions.inner.height + ")")
		.call(d3.axisBottom(x).ticks(dimensions.width / 80)/*.tickSizeOuter(0)*/)

	modele.yAxis = g => g
		.call(d3.axisLeft(y).ticks(dimensions.inner.height / 40));

	modele.line = d3.line()
		.curve(d3.curveBasis)
		.x(d => modele.x(d.date))
		.y(d => modele.y(d.moyenne_mobile))

	// Create one bin per month, use an offset to include the first and last months
	modele.histogram = d3.bin()
		.value(d => d.date);

	modele.rollingSum = (data, windowSize = 7) => {
		const summed = data.map((d, i) => {
			const start = Math.max(0, i - windowSize)
			const end = i + 1;
			d.moyenne_mobile = Math.round(d3.sum(data.slice(start, end), d => d.visites) / (end - start));
			return d;
		})
		return summed;
	}

	const svg_outer = inner
		.append('svg')
		.attr("viewBox", `0 0 ${dimensions.width} ${dimensions.height}`)
		.attr("class", "spip_d3_svg");

	if (!visible) {
		svg_outer.style("display", "none");
	}

	const svg = svg_outer
		.append("g")
		.attr("class", "spip_d3_svg_inner")
		.attr("transform", "translate(" + dimensions.margin.left + ", " + dimensions.margin.top + ")");
	svg
		.append("g")
		.attr("class", "spip_d3_svg_grid spip_d3_svg_grid--horizontal")
		.call(
			d3.axisLeft(modele.y)
			.ticks(dimensions.inner.height / 40)
			.tickSize(-dimensions.inner.width)
			.tickFormat("")
		)

	const tooltip = inner
		.append("div")
		.attr("class", "spip_d3_tooltip")
		.style("opacity", 0);
	tooltip
		.append("ul")
		.attr("class", "spip_d3_tooltip_list");


	modele.tooltip = {
		show: () => {
			tooltip
				.transition()
				.duration(200)
				.style("opacity", 1)
		},
		hide: () => {
			tooltip
				.transition()
				.duration(200)
				.style("opacity", 0)
		},
		empty: () => {
			tooltip.select('ul').html("");
		},
		add: (key, label, value) => {
			const item = tooltip.select('ul')
				.append('li')
				.attr("class", "spip_d3_tooltip_data spip_d3_tooltip_data--" + key);
			item
				.append("strong")
				.attr("class", "spip_d3_tooltip_label")
				.text(label + " :");
			item
				.append("span")
				.attr("class", "spip_d3_tooltip_value")
				.text(value);
		},
		update: (event) => {
			const data = modele.data;
			const xp = d3.pointer(event)[0];
			const x0 = x.invert(xp);
			const i = d3.bisector(d => d.date).left(data, x0);
			d = data[i - 1];

			const pos = inner.node().getBoundingClientRect();
			tooltip.style("top", (event.clientY - pos.y - 30) + "px");

			if (xp < dimensions.inner.width / 2) {
				tooltip.style("right", "").style("left", (event.clientX - pos.x + 30) + "px");
			} else {
				tooltip.style("left", "").style("right", (pos.right - event.clientX + 30) + "px");
			}
			modele.tooltip.empty();
			if (d) {
				modele.tooltip.add('date', modele.meta.translations.date, d.label);
				modele.tooltip.add('visites', modele.meta.translations.visites, d.visites);
				modele.tooltip.add('moyenne', modele.meta.translations.moyenne + " (MM" + modele.rollingSumWindowSize + ")", d.moyenne_mobile);
			} else {
				modele.tooltip.add('date', modele.meta.translations.date, '?');
			}
		}
	}

	svg
		.append("rect")
		.attr("class", "spip_d3_svg_overlay")
		.attr("width", modele.dimensions.inner.width)
		.attr("height", modele.dimensions.inner.height)
		.on("mouseover", modele.tooltip.show)
		.on("mouseout", modele.tooltip.hide)
		.on("mousemove", modele.tooltip.update);

	svg
		.append('g')
		.attr("class", "spip_d3_svg_histogram")
		.on("mouseover", modele.tooltip.show)
		.on("mouseout", modele.tooltip.hide)
		.on("mousemove", modele.tooltip.update);

	svg
		.append('path')
		.attr("class", "spip_d3_svg_line spip_d3_svg_line--average");

	svg
		.append('g')
		.attr("class", "spip_d3_svg_xaxis");

	svg
		.append('g')
		.attr("class", "spip_d3_svg_yaxis")

	svg.datum(modele);
	return svg;
}


/**
 * On crée les dessins sur le svg, grace aux données obtenues
 */
function spip_d3_statistiques_update_graph(id, _data) {

	if (d3.select(id).select('.spip_d3_svg_inner').empty()) {
		spip_d3_statistiques_prepare_graph(id);
	}

	const svg = d3.select(id).select('.spip_d3_svg_inner');
	const modele = svg.datum();
	const x = modele.x;
	const y = modele.y;

	const data = _data.data;
	const meta = _data.meta;
	modele.data = data; // pour tooltip
	modele.meta = meta; // pour tooltip

	// format the data
	data.forEach(d => {
		d.label = d.date;
		d.date = luxon.DateTime.fromISO(d.date);
		d.visites = +d.visites;
	});

	x.domain(d3.extent(data, d => d.date));

	modele.histogram.domain(x.domain())

	let rollingSumWindowSize = 7;
	if (meta.unite === 'day') {
		modele.histogram.thresholds(x.ticks(d3.timeDay));
	}  else if (meta.unite === 'week') {
		rollingSumWindowSize = 4;
		modele.histogram.thresholds(x.ticks(d3.timeWeek));
	} else if (meta.unite === 'month') {
		rollingSumWindowSize = 6;
		modele.histogram.thresholds(x.ticks(d3.timeMonth));
	} else if (meta.unite === 'year') {
		rollingSumWindowSize = 3;
		modele.histogram.thresholds(x.ticks(d3.timeYear));
	} else {
		throw "meta.unite not in day|month|year";
	}

	modele.rollingSumWindowSize = rollingSumWindowSize;
	modele.rollingSum(data, rollingSumWindowSize);

	// group the data for the bars
	const bins = modele.histogram(data);

	// format the sum
	bins.forEach((d, i) => {
		d.visites = +0;
		d.moyenne_mobile = +0;
		if (d.length) {
			for (let j = 0; j < d.length; j++) {
				d.visites += d[j].visites;
				d.moyenne_mobile += d[j].moyenne_mobile;
			}
			d.label = d[0].label;
			d.date = d[0].date;
		}
	});

	y.domain([0, d3.max(bins, d => d.visites)]);

	svg
		.select('.spip_d3_svg_histogram')
		.selectAll("rect")
		.data(bins)
		.join('rect')
		.attr("class", "spip_d3_svg_bar spip_d3_svg_bar--primary")
		.attr("x", 1)
		.attr("transform", d =>  "translate(" + x(d.x0) + "," + y(d.visites) + ")")
		.attr("width", d => x(d.x1) - x(d.x0) - .5)
		.attr("height", d => modele.dimensions.inner.height - y(d.visites))

	svg
		.select('.spip_d3_svg_line')
		.datum(data)
		.attr("d", modele.line);

	svg.select('.spip_d3_svg_xaxis').call(modele.xAxis);
	svg.select('.spip_d3_svg_yaxis').call(modele.yAxis);
}
