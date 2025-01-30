/* compact [
	../prive/javascript/jquery.js?1733220530
	../prive/javascript/jquery.form.js?1733220530
	../prive/javascript/jquery.autosave.js?1733220530
	../prive/javascript/jquery.placeholder-label.js?1733220530
	../prive/javascript/ajaxCallback.js?1733220530
	../prive/javascript/js.cookie.js?1733220530
	../prive/javascript/spip_barre.js?1733220530
	../plugins-dist/bigup/javascript/bigup.utils.js?1733220530
	../local/cache-js/jsdyn-javascript_bigup_trads_js-12af3dad.js?1737975822
	../plugins-dist/bigup/lib/flow/flow.js?1733220530
	../plugins-dist/bigup/javascript/bigup.js?1733220530
	../plugins-dist/bigup/javascript/bigup.loader.js?1733220530
	../prive/lib/bootstrap/js/popper.js?1733220530
	../prive/lib/bootstrap/js/util.js?1733220530
	../prive/lib/bootstrap/js/dropdown.js?1733220530
	../prive/javascript/layer.js?1733220530
	../prive/javascript/presentation.js?1733220530
	../prive/javascript/gadgets.js?1733220530
	../prive/javascript/prefixfree.js?1733220530
	../plugins-dist/medias/javascript/medias_edit.js?1733220532
	../plugins-dist/mediabox/lib/lity/lity.js?1733220532
	../plugins-dist/mediabox/lity/js/lity.mediabox.js?1733220532
	../plugins-dist/mediabox/javascript/spip.mediabox.js?1733220532
	../plugins-dist/porte_plume/javascript/jquery.markitup_pour_spip.js?1733220532
	../plugins-dist/porte_plume/javascript/jquery.previsu_spip.js?1733220532
	../local/cache-js/jsdyn-javascript_porte_plume_start_js-9eb29a83.js?1737975823
	../plugins-dist/porte_plume/javascript/porte_plume_forcer_hauteur.js?1733220532
] 54.5% */

/* ../prive/javascript/jquery.js?1733220530 */

(function(global,factory){
"use strict";
if(typeof module==="object"&&typeof module.exports==="object"){
module.exports=global.document?
factory(global,true):
function(w){
if(!w.document){
throw new Error("jQuery requires a window with a document");
}
return factory(w);
};
}else{
factory(global);
}
})(typeof window!=="undefined"?window:this,function(window,noGlobal){
"use strict";
var arr=[];
var getProto=Object.getPrototypeOf;
var slice=arr.slice;
var flat=arr.flat?function(array){
return arr.flat.call(array);
}:function(array){
return arr.concat.apply([],array);
};
var push=arr.push;
var indexOf=arr.indexOf;
var class2type={};
var toString=class2type.toString;
var hasOwn=class2type.hasOwnProperty;
var fnToString=hasOwn.toString;
var ObjectFunctionString=fnToString.call(Object);
var support={};
var isFunction=function isFunction(obj){
return typeof obj==="function"&&typeof obj.nodeType!=="number"&&
typeof obj.item!=="function";
};
var isWindow=function isWindow(obj){
return obj!=null&&obj===obj.window;
};
var document=window.document;
var preservedScriptAttributes={
type:true,
src:true,
nonce:true,
noModule:true
};
function DOMEval(code,node,doc){
doc=doc||document;
var i,val,
script=doc.createElement("script");
script.text=code;
if(node){
for(i in preservedScriptAttributes){
val=node[i]||node.getAttribute&&node.getAttribute(i);
if(val){
script.setAttribute(i,val);
}
}
}
doc.head.appendChild(script).parentNode.removeChild(script);
}
function toType(obj){
if(obj==null){
return obj+"";
}
return typeof obj==="object"||typeof obj==="function"?
class2type[toString.call(obj)]||"object":
typeof obj;
}
var version="3.7.1",
rhtmlSuffix=/HTML$/i,
jQuery=function(selector,context){
return new jQuery.fn.init(selector,context);
};
jQuery.fn=jQuery.prototype={
jquery:version,
constructor:jQuery,
length:0,
toArray:function(){
return slice.call(this);
},
get:function(num){
if(num==null){
return slice.call(this);
}
return num<0?this[num+this.length]:this[num];
},
pushStack:function(elems){
var ret=jQuery.merge(this.constructor(),elems);
ret.prevObject=this;
return ret;
},
each:function(callback){
return jQuery.each(this,callback);
},
map:function(callback){
return this.pushStack(jQuery.map(this,function(elem,i){
return callback.call(elem,i,elem);
}));
},
slice:function(){
return this.pushStack(slice.apply(this,arguments));
},
first:function(){
return this.eq(0);
},
last:function(){
return this.eq(-1);
},
even:function(){
return this.pushStack(jQuery.grep(this,function(_elem,i){
return(i+1)%2;
}));
},
odd:function(){
return this.pushStack(jQuery.grep(this,function(_elem,i){
return i%2;
}));
},
eq:function(i){
var len=this.length,
j=+i+(i<0?len:0);
return this.pushStack(j>=0&&j<len?[this[j]]:[]);
},
end:function(){
return this.prevObject||this.constructor();
},
push:push,
sort:arr.sort,
splice:arr.splice
};
jQuery.extend=jQuery.fn.extend=function(){
var options,name,src,copy,copyIsArray,clone,
target=arguments[0]||{},
i=1,
length=arguments.length,
deep=false;
if(typeof target==="boolean"){
deep=target;
target=arguments[i]||{};
i++;
}
if(typeof target!=="object"&&!isFunction(target)){
target={};
}
if(i===length){
target=this;
i--;
}
for(;i<length;i++){
if((options=arguments[i])!=null){
for(name in options){
copy=options[name];
if(name==="__proto__"||target===copy){
continue;
}
if(deep&&copy&&(jQuery.isPlainObject(copy)||
(copyIsArray=Array.isArray(copy)))){
src=target[name];
if(copyIsArray&&!Array.isArray(src)){
clone=[];
}else if(!copyIsArray&&!jQuery.isPlainObject(src)){
clone={};
}else{
clone=src;
}
copyIsArray=false;
target[name]=jQuery.extend(deep,clone,copy);
}else if(copy!==undefined){
target[name]=copy;
}
}
}
}
return target;
};
jQuery.extend({
expando:"jQuery"+(version+Math.random()).replace(/\D/g,""),
isReady:true,
error:function(msg){
throw new Error(msg);
},
noop:function(){},
isPlainObject:function(obj){
var proto,Ctor;
if(!obj||toString.call(obj)!=="[object Object]"){
return false;
}
proto=getProto(obj);
if(!proto){
return true;
}
Ctor=hasOwn.call(proto,"constructor")&&proto.constructor;
return typeof Ctor==="function"&&fnToString.call(Ctor)===ObjectFunctionString;
},
isEmptyObject:function(obj){
var name;
for(name in obj){
return false;
}
return true;
},
globalEval:function(code,options,doc){
DOMEval(code,{nonce:options&&options.nonce},doc);
},
each:function(obj,callback){
var length,i=0;
if(isArrayLike(obj)){
length=obj.length;
for(;i<length;i++){
if(callback.call(obj[i],i,obj[i])===false){
break;
}
}
}else{
for(i in obj){
if(callback.call(obj[i],i,obj[i])===false){
break;
}
}
}
return obj;
},
text:function(elem){
var node,
ret="",
i=0,
nodeType=elem.nodeType;
if(!nodeType){
while((node=elem[i++])){
ret+=jQuery.text(node);
}
}
if(nodeType===1||nodeType===11){
return elem.textContent;
}
if(nodeType===9){
return elem.documentElement.textContent;
}
if(nodeType===3||nodeType===4){
return elem.nodeValue;
}
return ret;
},
makeArray:function(arr,results){
var ret=results||[];
if(arr!=null){
if(isArrayLike(Object(arr))){
jQuery.merge(ret,
typeof arr==="string"?
[arr]:arr
);
}else{
push.call(ret,arr);
}
}
return ret;
},
inArray:function(elem,arr,i){
return arr==null?-1:indexOf.call(arr,elem,i);
},
isXMLDoc:function(elem){
var namespace=elem&&elem.namespaceURI,
docElem=elem&&(elem.ownerDocument||elem).documentElement;
return!rhtmlSuffix.test(namespace||docElem&&docElem.nodeName||"HTML");
},
merge:function(first,second){
var len=+second.length,
j=0,
i=first.length;
for(;j<len;j++){
first[i++]=second[j];
}
first.length=i;
return first;
},
grep:function(elems,callback,invert){
var callbackInverse,
matches=[],
i=0,
length=elems.length,
callbackExpect=!invert;
for(;i<length;i++){
callbackInverse=!callback(elems[i],i);
if(callbackInverse!==callbackExpect){
matches.push(elems[i]);
}
}
return matches;
},
map:function(elems,callback,arg){
var length,value,
i=0,
ret=[];
if(isArrayLike(elems)){
length=elems.length;
for(;i<length;i++){
value=callback(elems[i],i,arg);
if(value!=null){
ret.push(value);
}
}
}else{
for(i in elems){
value=callback(elems[i],i,arg);
if(value!=null){
ret.push(value);
}
}
}
return flat(ret);
},
guid:1,
support:support
});
if(typeof Symbol==="function"){
jQuery.fn[Symbol.iterator]=arr[Symbol.iterator];
}
jQuery.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),
function(_i,name){
class2type["[object "+name+"]"]=name.toLowerCase();
});
function isArrayLike(obj){
var length=!!obj&&"length"in obj&&obj.length,
type=toType(obj);
if(isFunction(obj)||isWindow(obj)){
return false;
}
return type==="array"||length===0||
typeof length==="number"&&length>0&&(length-1)in obj;
}
function nodeName(elem,name){
return elem.nodeName&&elem.nodeName.toLowerCase()===name.toLowerCase();
}
var pop=arr.pop;
var sort=arr.sort;
var splice=arr.splice;
var whitespace="[\\x20\\t\\r\\n\\f]";
var rtrimCSS=new RegExp(
"^"+whitespace+"+|((?:^|[^\\\\])(?:\\\\.)*)"+whitespace+"+$",
"g"
);
jQuery.contains=function(a,b){
var bup=b&&b.parentNode;
return a===bup||!!(bup&&bup.nodeType===1&&(
a.contains?
a.contains(bup):
a.compareDocumentPosition&&a.compareDocumentPosition(bup)&16
));
};
var rcssescape=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g;
function fcssescape(ch,asCodePoint){
if(asCodePoint){
if(ch==="\0"){
return"\uFFFD";
}
return ch.slice(0,-1)+"\\"+ch.charCodeAt(ch.length-1).toString(16)+" ";
}
return"\\"+ch;
}
jQuery.escapeSelector=function(sel){
return(sel+"").replace(rcssescape,fcssescape);
};
var preferredDoc=document,
pushNative=push;
(function(){
var i,
Expr,
outermostContext,
sortInput,
hasDuplicate,
push=pushNative,
document,
documentElement,
documentIsHTML,
rbuggyQSA,
matches,
expando=jQuery.expando,
dirruns=0,
done=0,
classCache=createCache(),
tokenCache=createCache(),
compilerCache=createCache(),
nonnativeSelectorCache=createCache(),
sortOrder=function(a,b){
if(a===b){
hasDuplicate=true;
}
return 0;
},
booleans="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|"+
"loop|multiple|open|readonly|required|scoped",
identifier="(?:\\\\[\\da-fA-F]{1,6}"+whitespace+
"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
attributes="\\["+whitespace+"*("+identifier+")(?:"+whitespace+
"*([*^$|!~]?=)"+whitespace+
"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+identifier+"))|)"+
whitespace+"*\\]",
pseudos=":("+identifier+")(?:\\(("+
"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|"+
"((?:\\\\.|[^\\\\()[\\]]|"+attributes+")*)|"+
".*"+
")\\)|)",
rwhitespace=new RegExp(whitespace+"+","g"),
rcomma=new RegExp("^"+whitespace+"*,"+whitespace+"*"),
rleadingCombinator=new RegExp("^"+whitespace+"*([>+~]|"+whitespace+")"+
whitespace+"*"),
rdescend=new RegExp(whitespace+"|>"),
rpseudo=new RegExp(pseudos),
ridentifier=new RegExp("^"+identifier+"$"),
matchExpr={
ID:new RegExp("^#("+identifier+")"),
CLASS:new RegExp("^\\.("+identifier+")"),
TAG:new RegExp("^("+identifier+"|[*])"),
ATTR:new RegExp("^"+attributes),
PSEUDO:new RegExp("^"+pseudos),
CHILD:new RegExp(
"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+
whitespace+"*(even|odd|(([+-]|)(\\d*)n|)"+whitespace+"*(?:([+-]|)"+
whitespace+"*(\\d+)|))"+whitespace+"*\\)|)","i"),
bool:new RegExp("^(?:"+booleans+")$","i"),
needsContext:new RegExp("^"+whitespace+
"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+whitespace+
"*((?:-\\d)?\\d*)"+whitespace+"*\\)|)(?=[^-]|$)","i")
},
rinputs=/^(?:input|select|textarea|button)$/i,
rheader=/^h\d$/i,
rquickExpr=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
rsibling=/[+~]/,
runescape=new RegExp("\\\\[\\da-fA-F]{1,6}"+whitespace+
"?|\\\\([^\\r\\n\\f])","g"),
funescape=function(escape,nonHex){
var high="0x"+escape.slice(1)-0x10000;
if(nonHex){
return nonHex;
}
return high<0?
String.fromCharCode(high+0x10000):
String.fromCharCode(high>>10|0xD800,high&0x3FF|0xDC00);
},
unloadHandler=function(){
setDocument();
},
inDisabledFieldset=addCombinator(
function(elem){
return elem.disabled===true&&nodeName(elem,"fieldset");
},
{dir:"parentNode",next:"legend"}
);
function safeActiveElement(){
try{
return document.activeElement;
}catch(err){}
}
try{
push.apply(
(arr=slice.call(preferredDoc.childNodes)),
preferredDoc.childNodes
);
arr[preferredDoc.childNodes.length].nodeType;
}catch(e){
push={
apply:function(target,els){
pushNative.apply(target,slice.call(els));
},
call:function(target){
pushNative.apply(target,slice.call(arguments,1));
}
};
}
function find(selector,context,results,seed){
var m,i,elem,nid,match,groups,newSelector,
newContext=context&&context.ownerDocument,
nodeType=context?context.nodeType:9;
results=results||[];
if(typeof selector!=="string"||!selector||
nodeType!==1&&nodeType!==9&&nodeType!==11){
return results;
}
if(!seed){
setDocument(context);
context=context||document;
if(documentIsHTML){
if(nodeType!==11&&(match=rquickExpr.exec(selector))){
if((m=match[1])){
if(nodeType===9){
if((elem=context.getElementById(m))){
if(elem.id===m){
push.call(results,elem);
return results;
}
}else{
return results;
}
}else{
if(newContext&&(elem=newContext.getElementById(m))&&
find.contains(context,elem)&&
elem.id===m){
push.call(results,elem);
return results;
}
}
}else if(match[2]){
push.apply(results,context.getElementsByTagName(selector));
return results;
}else if((m=match[3])&&context.getElementsByClassName){
push.apply(results,context.getElementsByClassName(m));
return results;
}
}
if(!nonnativeSelectorCache[selector+" "]&&
(!rbuggyQSA||!rbuggyQSA.test(selector))){
newSelector=selector;
newContext=context;
if(nodeType===1&&
(rdescend.test(selector)||rleadingCombinator.test(selector))){
newContext=rsibling.test(selector)&&testContext(context.parentNode)||
context;
if(newContext!=context||!support.scope){
if((nid=context.getAttribute("id"))){
nid=jQuery.escapeSelector(nid);
}else{
context.setAttribute("id",(nid=expando));
}
}
groups=tokenize(selector);
i=groups.length;
while(i--){
groups[i]=(nid?"#"+nid:":scope")+" "+
toSelector(groups[i]);
}
newSelector=groups.join(",");
}
try{
push.apply(results,
newContext.querySelectorAll(newSelector)
);
return results;
}catch(qsaError){
nonnativeSelectorCache(selector,true);
}finally{
if(nid===expando){
context.removeAttribute("id");
}
}
}
}
}
return select(selector.replace(rtrimCSS,"$1"),context,results,seed);
}
function createCache(){
var keys=[];
function cache(key,value){
if(keys.push(key+" ")>Expr.cacheLength){
delete cache[keys.shift()];
}
return(cache[key+" "]=value);
}
return cache;
}
function markFunction(fn){
fn[expando]=true;
return fn;
}
function assert(fn){
var el=document.createElement("fieldset");
try{
return!!fn(el);
}catch(e){
return false;
}finally{
if(el.parentNode){
el.parentNode.removeChild(el);
}
el=null;
}
}
function createInputPseudo(type){
return function(elem){
return nodeName(elem,"input")&&elem.type===type;
};
}
function createButtonPseudo(type){
return function(elem){
return(nodeName(elem,"input")||nodeName(elem,"button"))&&
elem.type===type;
};
}
function createDisabledPseudo(disabled){
return function(elem){
if("form"in elem){
if(elem.parentNode&&elem.disabled===false){
if("label"in elem){
if("label"in elem.parentNode){
return elem.parentNode.disabled===disabled;
}else{
return elem.disabled===disabled;
}
}
return elem.isDisabled===disabled||
elem.isDisabled!==!disabled&&
inDisabledFieldset(elem)===disabled;
}
return elem.disabled===disabled;
}else if("label"in elem){
return elem.disabled===disabled;
}
return false;
};
}
function createPositionalPseudo(fn){
return markFunction(function(argument){
argument=+argument;
return markFunction(function(seed,matches){
var j,
matchIndexes=fn([],seed.length,argument),
i=matchIndexes.length;
while(i--){
if(seed[(j=matchIndexes[i])]){
seed[j]=!(matches[j]=seed[j]);
}
}
});
});
}
function testContext(context){
return context&&typeof context.getElementsByTagName!=="undefined"&&context;
}
function setDocument(node){
var subWindow,
doc=node?node.ownerDocument||node:preferredDoc;
if(doc==document||doc.nodeType!==9||!doc.documentElement){
return document;
}
document=doc;
documentElement=document.documentElement;
documentIsHTML=!jQuery.isXMLDoc(document);
matches=documentElement.matches||
documentElement.webkitMatchesSelector||
documentElement.msMatchesSelector;
if(documentElement.msMatchesSelector&&
preferredDoc!=document&&
(subWindow=document.defaultView)&&subWindow.top!==subWindow){
subWindow.addEventListener("unload",unloadHandler);
}
support.getById=assert(function(el){
documentElement.appendChild(el).id=jQuery.expando;
return!document.getElementsByName||
!document.getElementsByName(jQuery.expando).length;
});
support.disconnectedMatch=assert(function(el){
return matches.call(el,"*");
});
support.scope=assert(function(){
return document.querySelectorAll(":scope");
});
support.cssHas=assert(function(){
try{
document.querySelector(":has(*,:jqfake)");
return false;
}catch(e){
return true;
}
});
if(support.getById){
Expr.filter.ID=function(id){
var attrId=id.replace(runescape,funescape);
return function(elem){
return elem.getAttribute("id")===attrId;
};
};
Expr.find.ID=function(id,context){
if(typeof context.getElementById!=="undefined"&&documentIsHTML){
var elem=context.getElementById(id);
return elem?[elem]:[];
}
};
}else{
Expr.filter.ID=function(id){
var attrId=id.replace(runescape,funescape);
return function(elem){
var node=typeof elem.getAttributeNode!=="undefined"&&
elem.getAttributeNode("id");
return node&&node.value===attrId;
};
};
Expr.find.ID=function(id,context){
if(typeof context.getElementById!=="undefined"&&documentIsHTML){
var node,i,elems,
elem=context.getElementById(id);
if(elem){
node=elem.getAttributeNode("id");
if(node&&node.value===id){
return[elem];
}
elems=context.getElementsByName(id);
i=0;
while((elem=elems[i++])){
node=elem.getAttributeNode("id");
if(node&&node.value===id){
return[elem];
}
}
}
return[];
}
};
}
Expr.find.TAG=function(tag,context){
if(typeof context.getElementsByTagName!=="undefined"){
return context.getElementsByTagName(tag);
}else{
return context.querySelectorAll(tag);
}
};
Expr.find.CLASS=function(className,context){
if(typeof context.getElementsByClassName!=="undefined"&&documentIsHTML){
return context.getElementsByClassName(className);
}
};
rbuggyQSA=[];
assert(function(el){
var input;
documentElement.appendChild(el).innerHTML=
"<a id='"+expando+"' href='' disabled='disabled'></a>"+
"<select id='"+expando+"-\r\\' disabled='disabled'>"+
"<option selected=''></option></select>";
if(!el.querySelectorAll("[selected]").length){
rbuggyQSA.push("\\["+whitespace+"*(?:value|"+booleans+")");
}
if(!el.querySelectorAll("[id~="+expando+"-]").length){
rbuggyQSA.push("~=");
}
if(!el.querySelectorAll("a#"+expando+"+*").length){
rbuggyQSA.push(".#.+[+~]");
}
if(!el.querySelectorAll(":checked").length){
rbuggyQSA.push(":checked");
}
input=document.createElement("input");
input.setAttribute("type","hidden");
el.appendChild(input).setAttribute("name","D");
documentElement.appendChild(el).disabled=true;
if(el.querySelectorAll(":disabled").length!==2){
rbuggyQSA.push(":enabled",":disabled");
}
input=document.createElement("input");
input.setAttribute("name","");
el.appendChild(input);
if(!el.querySelectorAll("[name='']").length){
rbuggyQSA.push("\\["+whitespace+"*name"+whitespace+"*="+
whitespace+"*(?:''|\"\")");
}
});
if(!support.cssHas){
rbuggyQSA.push(":has");
}
rbuggyQSA=rbuggyQSA.length&&new RegExp(rbuggyQSA.join("|"));
sortOrder=function(a,b){
if(a===b){
hasDuplicate=true;
return 0;
}
var compare=!a.compareDocumentPosition-!b.compareDocumentPosition;
if(compare){
return compare;
}
compare=(a.ownerDocument||a)==(b.ownerDocument||b)?
a.compareDocumentPosition(b):
1;
if(compare&1||
(!support.sortDetached&&b.compareDocumentPosition(a)===compare)){
if(a===document||a.ownerDocument==preferredDoc&&
find.contains(preferredDoc,a)){
return-1;
}
if(b===document||b.ownerDocument==preferredDoc&&
find.contains(preferredDoc,b)){
return 1;
}
return sortInput?
(indexOf.call(sortInput,a)-indexOf.call(sortInput,b)):
0;
}
return compare&4?-1:1;
};
return document;
}
find.matches=function(expr,elements){
return find(expr,null,null,elements);
};
find.matchesSelector=function(elem,expr){
setDocument(elem);
if(documentIsHTML&&
!nonnativeSelectorCache[expr+" "]&&
(!rbuggyQSA||!rbuggyQSA.test(expr))){
try{
var ret=matches.call(elem,expr);
if(ret||support.disconnectedMatch||
elem.document&&elem.document.nodeType!==11){
return ret;
}
}catch(e){
nonnativeSelectorCache(expr,true);
}
}
return find(expr,document,null,[elem]).length>0;
};
find.contains=function(context,elem){
if((context.ownerDocument||context)!=document){
setDocument(context);
}
return jQuery.contains(context,elem);
};
find.attr=function(elem,name){
if((elem.ownerDocument||elem)!=document){
setDocument(elem);
}
var fn=Expr.attrHandle[name.toLowerCase()],
val=fn&&hasOwn.call(Expr.attrHandle,name.toLowerCase())?
fn(elem,name,!documentIsHTML):
undefined;
if(val!==undefined){
return val;
}
return elem.getAttribute(name);
};
find.error=function(msg){
throw new Error("Syntax error, unrecognized expression: "+msg);
};
jQuery.uniqueSort=function(results){
var elem,
duplicates=[],
j=0,
i=0;
hasDuplicate=!support.sortStable;
sortInput=!support.sortStable&&slice.call(results,0);
sort.call(results,sortOrder);
if(hasDuplicate){
while((elem=results[i++])){
if(elem===results[i]){
j=duplicates.push(i);
}
}
while(j--){
splice.call(results,duplicates[j],1);
}
}
sortInput=null;
return results;
};
jQuery.fn.uniqueSort=function(){
return this.pushStack(jQuery.uniqueSort(slice.apply(this)));
};
Expr=jQuery.expr={
cacheLength:50,
createPseudo:markFunction,
match:matchExpr,
attrHandle:{},
find:{},
relative:{
">":{dir:"parentNode",first:true},
" ":{dir:"parentNode"},
"+":{dir:"previousSibling",first:true},
"~":{dir:"previousSibling"}
},
preFilter:{
ATTR:function(match){
match[1]=match[1].replace(runescape,funescape);
match[3]=(match[3]||match[4]||match[5]||"")
.replace(runescape,funescape);
if(match[2]==="~="){
match[3]=" "+match[3]+" ";
}
return match.slice(0,4);
},
CHILD:function(match){
match[1]=match[1].toLowerCase();
if(match[1].slice(0,3)==="nth"){
if(!match[3]){
find.error(match[0]);
}
match[4]=+(match[4]?
match[5]+(match[6]||1):
2*(match[3]==="even"||match[3]==="odd")
);
match[5]=+((match[7]+match[8])||match[3]==="odd");
}else if(match[3]){
find.error(match[0]);
}
return match;
},
PSEUDO:function(match){
var excess,
unquoted=!match[6]&&match[2];
if(matchExpr.CHILD.test(match[0])){
return null;
}
if(match[3]){
match[2]=match[4]||match[5]||"";
}else if(unquoted&&rpseudo.test(unquoted)&&
(excess=tokenize(unquoted,true))&&
(excess=unquoted.indexOf(")",unquoted.length-excess)-unquoted.length)){
match[0]=match[0].slice(0,excess);
match[2]=unquoted.slice(0,excess);
}
return match.slice(0,3);
}
},
filter:{
TAG:function(nodeNameSelector){
var expectedNodeName=nodeNameSelector.replace(runescape,funescape).toLowerCase();
return nodeNameSelector==="*"?
function(){
return true;
}:
function(elem){
return nodeName(elem,expectedNodeName);
};
},
CLASS:function(className){
var pattern=classCache[className+" "];
return pattern||
(pattern=new RegExp("(^|"+whitespace+")"+className+
"("+whitespace+"|$)"))&&
classCache(className,function(elem){
return pattern.test(
typeof elem.className==="string"&&elem.className||
typeof elem.getAttribute!=="undefined"&&
elem.getAttribute("class")||
""
);
});
},
ATTR:function(name,operator,check){
return function(elem){
var result=find.attr(elem,name);
if(result==null){
return operator==="!=";
}
if(!operator){
return true;
}
result+="";
if(operator==="="){
return result===check;
}
if(operator==="!="){
return result!==check;
}
if(operator==="^="){
return check&&result.indexOf(check)===0;
}
if(operator==="*="){
return check&&result.indexOf(check)>-1;
}
if(operator==="$="){
return check&&result.slice(-check.length)===check;
}
if(operator==="~="){
return(" "+result.replace(rwhitespace," ")+" ")
.indexOf(check)>-1;
}
if(operator==="|="){
return result===check||result.slice(0,check.length+1)===check+"-";
}
return false;
};
},
CHILD:function(type,what,_argument,first,last){
var simple=type.slice(0,3)!=="nth",
forward=type.slice(-4)!=="last",
ofType=what==="of-type";
return first===1&&last===0?
function(elem){
return!!elem.parentNode;
}:
function(elem,_context,xml){
var cache,outerCache,node,nodeIndex,start,
dir=simple!==forward?"nextSibling":"previousSibling",
parent=elem.parentNode,
name=ofType&&elem.nodeName.toLowerCase(),
useCache=!xml&&!ofType,
diff=false;
if(parent){
if(simple){
while(dir){
node=elem;
while((node=node[dir])){
if(ofType?
nodeName(node,name):
node.nodeType===1){
return false;
}
}
start=dir=type==="only"&&!start&&"nextSibling";
}
return true;
}
start=[forward?parent.firstChild:parent.lastChild];
if(forward&&useCache){
outerCache=parent[expando]||(parent[expando]={});
cache=outerCache[type]||[];
nodeIndex=cache[0]===dirruns&&cache[1];
diff=nodeIndex&&cache[2];
node=nodeIndex&&parent.childNodes[nodeIndex];
while((node=++nodeIndex&&node&&node[dir]||
(diff=nodeIndex=0)||start.pop())){
if(node.nodeType===1&&++diff&&node===elem){
outerCache[type]=[dirruns,nodeIndex,diff];
break;
}
}
}else{
if(useCache){
outerCache=elem[expando]||(elem[expando]={});
cache=outerCache[type]||[];
nodeIndex=cache[0]===dirruns&&cache[1];
diff=nodeIndex;
}
if(diff===false){
while((node=++nodeIndex&&node&&node[dir]||
(diff=nodeIndex=0)||start.pop())){
if((ofType?
nodeName(node,name):
node.nodeType===1)&&
++diff){
if(useCache){
outerCache=node[expando]||
(node[expando]={});
outerCache[type]=[dirruns,diff];
}
if(node===elem){
break;
}
}
}
}
}
diff-=last;
return diff===first||(diff%first===0&&diff/first>=0);
}
};
},
PSEUDO:function(pseudo,argument){
var args,
fn=Expr.pseudos[pseudo]||Expr.setFilters[pseudo.toLowerCase()]||
find.error("unsupported pseudo: "+pseudo);
if(fn[expando]){
return fn(argument);
}
if(fn.length>1){
args=[pseudo,pseudo,"",argument];
return Expr.setFilters.hasOwnProperty(pseudo.toLowerCase())?
markFunction(function(seed,matches){
var idx,
matched=fn(seed,argument),
i=matched.length;
while(i--){
idx=indexOf.call(seed,matched[i]);
seed[idx]=!(matches[idx]=matched[i]);
}
}):
function(elem){
return fn(elem,0,args);
};
}
return fn;
}
},
pseudos:{
not:markFunction(function(selector){
var input=[],
results=[],
matcher=compile(selector.replace(rtrimCSS,"$1"));
return matcher[expando]?
markFunction(function(seed,matches,_context,xml){
var elem,
unmatched=matcher(seed,null,xml,[]),
i=seed.length;
while(i--){
if((elem=unmatched[i])){
seed[i]=!(matches[i]=elem);
}
}
}):
function(elem,_context,xml){
input[0]=elem;
matcher(input,null,xml,results);
input[0]=null;
return!results.pop();
};
}),
has:markFunction(function(selector){
return function(elem){
return find(selector,elem).length>0;
};
}),
contains:markFunction(function(text){
text=text.replace(runescape,funescape);
return function(elem){
return(elem.textContent||jQuery.text(elem)).indexOf(text)>-1;
};
}),
lang:markFunction(function(lang){
if(!ridentifier.test(lang||"")){
find.error("unsupported lang: "+lang);
}
lang=lang.replace(runescape,funescape).toLowerCase();
return function(elem){
var elemLang;
do{
if((elemLang=documentIsHTML?
elem.lang:
elem.getAttribute("xml:lang")||elem.getAttribute("lang"))){
elemLang=elemLang.toLowerCase();
return elemLang===lang||elemLang.indexOf(lang+"-")===0;
}
}while((elem=elem.parentNode)&&elem.nodeType===1);
return false;
};
}),
target:function(elem){
var hash=window.location&&window.location.hash;
return hash&&hash.slice(1)===elem.id;
},
root:function(elem){
return elem===documentElement;
},
focus:function(elem){
return elem===safeActiveElement()&&
document.hasFocus()&&
!!(elem.type||elem.href||~elem.tabIndex);
},
enabled:createDisabledPseudo(false),
disabled:createDisabledPseudo(true),
checked:function(elem){
return(nodeName(elem,"input")&&!!elem.checked)||
(nodeName(elem,"option")&&!!elem.selected);
},
selected:function(elem){
if(elem.parentNode){
elem.parentNode.selectedIndex;
}
return elem.selected===true;
},
empty:function(elem){
for(elem=elem.firstChild;elem;elem=elem.nextSibling){
if(elem.nodeType<6){
return false;
}
}
return true;
},
parent:function(elem){
return!Expr.pseudos.empty(elem);
},
header:function(elem){
return rheader.test(elem.nodeName);
},
input:function(elem){
return rinputs.test(elem.nodeName);
},
button:function(elem){
return nodeName(elem,"input")&&elem.type==="button"||
nodeName(elem,"button");
},
text:function(elem){
var attr;
return nodeName(elem,"input")&&elem.type==="text"&&
((attr=elem.getAttribute("type"))==null||
attr.toLowerCase()==="text");
},
first:createPositionalPseudo(function(){
return[0];
}),
last:createPositionalPseudo(function(_matchIndexes,length){
return[length-1];
}),
eq:createPositionalPseudo(function(_matchIndexes,length,argument){
return[argument<0?argument+length:argument];
}),
even:createPositionalPseudo(function(matchIndexes,length){
var i=0;
for(;i<length;i+=2){
matchIndexes.push(i);
}
return matchIndexes;
}),
odd:createPositionalPseudo(function(matchIndexes,length){
var i=1;
for(;i<length;i+=2){
matchIndexes.push(i);
}
return matchIndexes;
}),
lt:createPositionalPseudo(function(matchIndexes,length,argument){
var i;
if(argument<0){
i=argument+length;
}else if(argument>length){
i=length;
}else{
i=argument;
}
for(;--i>=0;){
matchIndexes.push(i);
}
return matchIndexes;
}),
gt:createPositionalPseudo(function(matchIndexes,length,argument){
var i=argument<0?argument+length:argument;
for(;++i<length;){
matchIndexes.push(i);
}
return matchIndexes;
})
}
};
Expr.pseudos.nth=Expr.pseudos.eq;
for(i in{radio:true,checkbox:true,file:true,password:true,image:true}){
Expr.pseudos[i]=createInputPseudo(i);
}
for(i in{submit:true,reset:true}){
Expr.pseudos[i]=createButtonPseudo(i);
}
function setFilters(){}
setFilters.prototype=Expr.filters=Expr.pseudos;
Expr.setFilters=new setFilters();
function tokenize(selector,parseOnly){
var matched,match,tokens,type,
soFar,groups,preFilters,
cached=tokenCache[selector+" "];
if(cached){
return parseOnly?0:cached.slice(0);
}
soFar=selector;
groups=[];
preFilters=Expr.preFilter;
while(soFar){
if(!matched||(match=rcomma.exec(soFar))){
if(match){
soFar=soFar.slice(match[0].length)||soFar;
}
groups.push((tokens=[]));
}
matched=false;
if((match=rleadingCombinator.exec(soFar))){
matched=match.shift();
tokens.push({
value:matched,
type:match[0].replace(rtrimCSS," ")
});
soFar=soFar.slice(matched.length);
}
for(type in Expr.filter){
if((match=matchExpr[type].exec(soFar))&&(!preFilters[type]||
(match=preFilters[type](match)))){
matched=match.shift();
tokens.push({
value:matched,
type:type,
matches:match
});
soFar=soFar.slice(matched.length);
}
}
if(!matched){
break;
}
}
if(parseOnly){
return soFar.length;
}
return soFar?
find.error(selector):
tokenCache(selector,groups).slice(0);
}
function toSelector(tokens){
var i=0,
len=tokens.length,
selector="";
for(;i<len;i++){
selector+=tokens[i].value;
}
return selector;
}
function addCombinator(matcher,combinator,base){
var dir=combinator.dir,
skip=combinator.next,
key=skip||dir,
checkNonElements=base&&key==="parentNode",
doneName=done++;
return combinator.first?
function(elem,context,xml){
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
return matcher(elem,context,xml);
}
}
return false;
}:
function(elem,context,xml){
var oldCache,outerCache,
newCache=[dirruns,doneName];
if(xml){
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
if(matcher(elem,context,xml)){
return true;
}
}
}
}else{
while((elem=elem[dir])){
if(elem.nodeType===1||checkNonElements){
outerCache=elem[expando]||(elem[expando]={});
if(skip&&nodeName(elem,skip)){
elem=elem[dir]||elem;
}else if((oldCache=outerCache[key])&&
oldCache[0]===dirruns&&oldCache[1]===doneName){
return(newCache[2]=oldCache[2]);
}else{
outerCache[key]=newCache;
if((newCache[2]=matcher(elem,context,xml))){
return true;
}
}
}
}
}
return false;
};
}
function elementMatcher(matchers){
return matchers.length>1?
function(elem,context,xml){
var i=matchers.length;
while(i--){
if(!matchers[i](elem,context,xml)){
return false;
}
}
return true;
}:
matchers[0];
}
function multipleContexts(selector,contexts,results){
var i=0,
len=contexts.length;
for(;i<len;i++){
find(selector,contexts[i],results);
}
return results;
}
function condense(unmatched,map,filter,context,xml){
var elem,
newUnmatched=[],
i=0,
len=unmatched.length,
mapped=map!=null;
for(;i<len;i++){
if((elem=unmatched[i])){
if(!filter||filter(elem,context,xml)){
newUnmatched.push(elem);
if(mapped){
map.push(i);
}
}
}
}
return newUnmatched;
}
function setMatcher(preFilter,selector,matcher,postFilter,postFinder,postSelector){
if(postFilter&&!postFilter[expando]){
postFilter=setMatcher(postFilter);
}
if(postFinder&&!postFinder[expando]){
postFinder=setMatcher(postFinder,postSelector);
}
return markFunction(function(seed,results,context,xml){
var temp,i,elem,matcherOut,
preMap=[],
postMap=[],
preexisting=results.length,
elems=seed||
multipleContexts(selector||"*",
context.nodeType?[context]:context,[]),
matcherIn=preFilter&&(seed||!selector)?
condense(elems,preMap,preFilter,context,xml):
elems;
if(matcher){
matcherOut=postFinder||(seed?preFilter:preexisting||postFilter)?
[]:
results;
matcher(matcherIn,matcherOut,context,xml);
}else{
matcherOut=matcherIn;
}
if(postFilter){
temp=condense(matcherOut,postMap);
postFilter(temp,[],context,xml);
i=temp.length;
while(i--){
if((elem=temp[i])){
matcherOut[postMap[i]]=!(matcherIn[postMap[i]]=elem);
}
}
}
if(seed){
if(postFinder||preFilter){
if(postFinder){
temp=[];
i=matcherOut.length;
while(i--){
if((elem=matcherOut[i])){
temp.push((matcherIn[i]=elem));
}
}
postFinder(null,(matcherOut=[]),temp,xml);
}
i=matcherOut.length;
while(i--){
if((elem=matcherOut[i])&&
(temp=postFinder?indexOf.call(seed,elem):preMap[i])>-1){
seed[temp]=!(results[temp]=elem);
}
}
}
}else{
matcherOut=condense(
matcherOut===results?
matcherOut.splice(preexisting,matcherOut.length):
matcherOut
);
if(postFinder){
postFinder(null,results,matcherOut,xml);
}else{
push.apply(results,matcherOut);
}
}
});
}
function matcherFromTokens(tokens){
var checkContext,matcher,j,
len=tokens.length,
leadingRelative=Expr.relative[tokens[0].type],
implicitRelative=leadingRelative||Expr.relative[" "],
i=leadingRelative?1:0,
matchContext=addCombinator(function(elem){
return elem===checkContext;
},implicitRelative,true),
matchAnyContext=addCombinator(function(elem){
return indexOf.call(checkContext,elem)>-1;
},implicitRelative,true),
matchers=[function(elem,context,xml){
var ret=(!leadingRelative&&(xml||context!=outermostContext))||(
(checkContext=context).nodeType?
matchContext(elem,context,xml):
matchAnyContext(elem,context,xml));
checkContext=null;
return ret;
}];
for(;i<len;i++){
if((matcher=Expr.relative[tokens[i].type])){
matchers=[addCombinator(elementMatcher(matchers),matcher)];
}else{
matcher=Expr.filter[tokens[i].type].apply(null,tokens[i].matches);
if(matcher[expando]){
j=++i;
for(;j<len;j++){
if(Expr.relative[tokens[j].type]){
break;
}
}
return setMatcher(
i>1&&elementMatcher(matchers),
i>1&&toSelector(
tokens.slice(0,i-1)
.concat({value:tokens[i-2].type===" "?"*":""})
).replace(rtrimCSS,"$1"),
matcher,
i<j&&matcherFromTokens(tokens.slice(i,j)),
j<len&&matcherFromTokens((tokens=tokens.slice(j))),
j<len&&toSelector(tokens)
);
}
matchers.push(matcher);
}
}
return elementMatcher(matchers);
}
function matcherFromGroupMatchers(elementMatchers,setMatchers){
var bySet=setMatchers.length>0,
byElement=elementMatchers.length>0,
superMatcher=function(seed,context,xml,results,outermost){
var elem,j,matcher,
matchedCount=0,
i="0",
unmatched=seed&&[],
setMatched=[],
contextBackup=outermostContext,
elems=seed||byElement&&Expr.find.TAG("*",outermost),
dirrunsUnique=(dirruns+=contextBackup==null?1:Math.random()||0.1),
len=elems.length;
if(outermost){
outermostContext=context==document||context||outermost;
}
for(;i!==len&&(elem=elems[i])!=null;i++){
if(byElement&&elem){
j=0;
if(!context&&elem.ownerDocument!=document){
setDocument(elem);
xml=!documentIsHTML;
}
while((matcher=elementMatchers[j++])){
if(matcher(elem,context||document,xml)){
push.call(results,elem);
break;
}
}
if(outermost){
dirruns=dirrunsUnique;
}
}
if(bySet){
if((elem=!matcher&&elem)){
matchedCount--;
}
if(seed){
unmatched.push(elem);
}
}
}
matchedCount+=i;
if(bySet&&i!==matchedCount){
j=0;
while((matcher=setMatchers[j++])){
matcher(unmatched,setMatched,context,xml);
}
if(seed){
if(matchedCount>0){
while(i--){
if(!(unmatched[i]||setMatched[i])){
setMatched[i]=pop.call(results);
}
}
}
setMatched=condense(setMatched);
}
push.apply(results,setMatched);
if(outermost&&!seed&&setMatched.length>0&&
(matchedCount+setMatchers.length)>1){
jQuery.uniqueSort(results);
}
}
if(outermost){
dirruns=dirrunsUnique;
outermostContext=contextBackup;
}
return unmatched;
};
return bySet?
markFunction(superMatcher):
superMatcher;
}
function compile(selector,match){
var i,
setMatchers=[],
elementMatchers=[],
cached=compilerCache[selector+" "];
if(!cached){
if(!match){
match=tokenize(selector);
}
i=match.length;
while(i--){
cached=matcherFromTokens(match[i]);
if(cached[expando]){
setMatchers.push(cached);
}else{
elementMatchers.push(cached);
}
}
cached=compilerCache(selector,
matcherFromGroupMatchers(elementMatchers,setMatchers));
cached.selector=selector;
}
return cached;
}
function select(selector,context,results,seed){
var i,tokens,token,type,find,
compiled=typeof selector==="function"&&selector,
match=!seed&&tokenize((selector=compiled.selector||selector));
results=results||[];
if(match.length===1){
tokens=match[0]=match[0].slice(0);
if(tokens.length>2&&(token=tokens[0]).type==="ID"&&
context.nodeType===9&&documentIsHTML&&Expr.relative[tokens[1].type]){
context=(Expr.find.ID(
token.matches[0].replace(runescape,funescape),
context
)||[])[0];
if(!context){
return results;
}else if(compiled){
context=context.parentNode;
}
selector=selector.slice(tokens.shift().value.length);
}
i=matchExpr.needsContext.test(selector)?0:tokens.length;
while(i--){
token=tokens[i];
if(Expr.relative[(type=token.type)]){
break;
}
if((find=Expr.find[type])){
if((seed=find(
token.matches[0].replace(runescape,funescape),
rsibling.test(tokens[0].type)&&
testContext(context.parentNode)||context
))){
tokens.splice(i,1);
selector=seed.length&&toSelector(tokens);
if(!selector){
push.apply(results,seed);
return results;
}
break;
}
}
}
}
(compiled||compile(selector,match))(
seed,
context,
!documentIsHTML,
results,
!context||rsibling.test(selector)&&testContext(context.parentNode)||context
);
return results;
}
support.sortStable=expando.split("").sort(sortOrder).join("")===expando;
setDocument();
support.sortDetached=assert(function(el){
return el.compareDocumentPosition(document.createElement("fieldset"))&1;
});
jQuery.find=find;
jQuery.expr[":"]=jQuery.expr.pseudos;
jQuery.unique=jQuery.uniqueSort;
find.compile=compile;
find.select=select;
find.setDocument=setDocument;
find.tokenize=tokenize;
find.escape=jQuery.escapeSelector;
find.getText=jQuery.text;
find.isXML=jQuery.isXMLDoc;
find.selectors=jQuery.expr;
find.support=jQuery.support;
find.uniqueSort=jQuery.uniqueSort;
})();
var dir=function(elem,dir,until){
var matched=[],
truncate=until!==undefined;
while((elem=elem[dir])&&elem.nodeType!==9){
if(elem.nodeType===1){
if(truncate&&jQuery(elem).is(until)){
break;
}
matched.push(elem);
}
}
return matched;
};
var siblings=function(n,elem){
var matched=[];
for(;n;n=n.nextSibling){
if(n.nodeType===1&&n!==elem){
matched.push(n);
}
}
return matched;
};
var rneedsContext=jQuery.expr.match.needsContext;
var rsingleTag=(/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i);
function winnow(elements,qualifier,not){
if(isFunction(qualifier)){
return jQuery.grep(elements,function(elem,i){
return!!qualifier.call(elem,i,elem)!==not;
});
}
if(qualifier.nodeType){
return jQuery.grep(elements,function(elem){
return(elem===qualifier)!==not;
});
}
if(typeof qualifier!=="string"){
return jQuery.grep(elements,function(elem){
return(indexOf.call(qualifier,elem)>-1)!==not;
});
}
return jQuery.filter(qualifier,elements,not);
}
jQuery.filter=function(expr,elems,not){
var elem=elems[0];
if(not){
expr=":not("+expr+")";
}
if(elems.length===1&&elem.nodeType===1){
return jQuery.find.matchesSelector(elem,expr)?[elem]:[];
}
return jQuery.find.matches(expr,jQuery.grep(elems,function(elem){
return elem.nodeType===1;
}));
};
jQuery.fn.extend({
find:function(selector){
var i,ret,
len=this.length,
self=this;
if(typeof selector!=="string"){
return this.pushStack(jQuery(selector).filter(function(){
for(i=0;i<len;i++){
if(jQuery.contains(self[i],this)){
return true;
}
}
}));
}
ret=this.pushStack([]);
for(i=0;i<len;i++){
jQuery.find(selector,self[i],ret);
}
return len>1?jQuery.uniqueSort(ret):ret;
},
filter:function(selector){
return this.pushStack(winnow(this,selector||[],false));
},
not:function(selector){
return this.pushStack(winnow(this,selector||[],true));
},
is:function(selector){
return!!winnow(
this,
typeof selector==="string"&&rneedsContext.test(selector)?
jQuery(selector):
selector||[],
false
).length;
}
});
var rootjQuery,
rquickExpr=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,
init=jQuery.fn.init=function(selector,context,root){
var match,elem;
if(!selector){
return this;
}
root=root||rootjQuery;
if(typeof selector==="string"){
if(selector[0]==="<"&&
selector[selector.length-1]===">"&&
selector.length>=3){
match=[null,selector,null];
}else{
match=rquickExpr.exec(selector);
}
if(match&&(match[1]||!context)){
if(match[1]){
context=context instanceof jQuery?context[0]:context;
jQuery.merge(this,jQuery.parseHTML(
match[1],
context&&context.nodeType?context.ownerDocument||context:document,
true
));
if(rsingleTag.test(match[1])&&jQuery.isPlainObject(context)){
for(match in context){
if(isFunction(this[match])){
this[match](context[match]);
}else{
this.attr(match,context[match]);
}
}
}
return this;
}else{
elem=document.getElementById(match[2]);
if(elem){
this[0]=elem;
this.length=1;
}
return this;
}
}else if(!context||context.jquery){
return(context||root).find(selector);
}else{
return this.constructor(context).find(selector);
}
}else if(selector.nodeType){
this[0]=selector;
this.length=1;
return this;
}else if(isFunction(selector)){
return root.ready!==undefined?
root.ready(selector):
selector(jQuery);
}
return jQuery.makeArray(selector,this);
};
init.prototype=jQuery.fn;
rootjQuery=jQuery(document);
var rparentsprev=/^(?:parents|prev(?:Until|All))/,
guaranteedUnique={
children:true,
contents:true,
next:true,
prev:true
};
jQuery.fn.extend({
has:function(target){
var targets=jQuery(target,this),
l=targets.length;
return this.filter(function(){
var i=0;
for(;i<l;i++){
if(jQuery.contains(this,targets[i])){
return true;
}
}
});
},
closest:function(selectors,context){
var cur,
i=0,
l=this.length,
matched=[],
targets=typeof selectors!=="string"&&jQuery(selectors);
if(!rneedsContext.test(selectors)){
for(;i<l;i++){
for(cur=this[i];cur&&cur!==context;cur=cur.parentNode){
if(cur.nodeType<11&&(targets?
targets.index(cur)>-1:
cur.nodeType===1&&
jQuery.find.matchesSelector(cur,selectors))){
matched.push(cur);
break;
}
}
}
}
return this.pushStack(matched.length>1?jQuery.uniqueSort(matched):matched);
},
index:function(elem){
if(!elem){
return(this[0]&&this[0].parentNode)?this.first().prevAll().length:-1;
}
if(typeof elem==="string"){
return indexOf.call(jQuery(elem),this[0]);
}
return indexOf.call(this,
elem.jquery?elem[0]:elem
);
},
add:function(selector,context){
return this.pushStack(
jQuery.uniqueSort(
jQuery.merge(this.get(),jQuery(selector,context))
)
);
},
addBack:function(selector){
return this.add(selector==null?
this.prevObject:this.prevObject.filter(selector)
);
}
});
function sibling(cur,dir){
while((cur=cur[dir])&&cur.nodeType!==1){}
return cur;
}
jQuery.each({
parent:function(elem){
var parent=elem.parentNode;
return parent&&parent.nodeType!==11?parent:null;
},
parents:function(elem){
return dir(elem,"parentNode");
},
parentsUntil:function(elem,_i,until){
return dir(elem,"parentNode",until);
},
next:function(elem){
return sibling(elem,"nextSibling");
},
prev:function(elem){
return sibling(elem,"previousSibling");
},
nextAll:function(elem){
return dir(elem,"nextSibling");
},
prevAll:function(elem){
return dir(elem,"previousSibling");
},
nextUntil:function(elem,_i,until){
return dir(elem,"nextSibling",until);
},
prevUntil:function(elem,_i,until){
return dir(elem,"previousSibling",until);
},
siblings:function(elem){
return siblings((elem.parentNode||{}).firstChild,elem);
},
children:function(elem){
return siblings(elem.firstChild);
},
contents:function(elem){
if(elem.contentDocument!=null&&
getProto(elem.contentDocument)){
return elem.contentDocument;
}
if(nodeName(elem,"template")){
elem=elem.content||elem;
}
return jQuery.merge([],elem.childNodes);
}
},function(name,fn){
jQuery.fn[name]=function(until,selector){
var matched=jQuery.map(this,fn,until);
if(name.slice(-5)!=="Until"){
selector=until;
}
if(selector&&typeof selector==="string"){
matched=jQuery.filter(selector,matched);
}
if(this.length>1){
if(!guaranteedUnique[name]){
jQuery.uniqueSort(matched);
}
if(rparentsprev.test(name)){
matched.reverse();
}
}
return this.pushStack(matched);
};
});
var rnothtmlwhite=(/[^\x20\t\r\n\f]+/g);
function createOptions(options){
var object={};
jQuery.each(options.match(rnothtmlwhite)||[],function(_,flag){
object[flag]=true;
});
return object;
}
jQuery.Callbacks=function(options){
options=typeof options==="string"?
createOptions(options):
jQuery.extend({},options);
var
firing,
memory,
fired,
locked,
list=[],
queue=[],
firingIndex=-1,
fire=function(){
locked=locked||options.once;
fired=firing=true;
for(;queue.length;firingIndex=-1){
memory=queue.shift();
while(++firingIndex<list.length){
if(list[firingIndex].apply(memory[0],memory[1])===false&&
options.stopOnFalse){
firingIndex=list.length;
memory=false;
}
}
}
if(!options.memory){
memory=false;
}
firing=false;
if(locked){
if(memory){
list=[];
}else{
list="";
}
}
},
self={
add:function(){
if(list){
if(memory&&!firing){
firingIndex=list.length-1;
queue.push(memory);
}
(function add(args){
jQuery.each(args,function(_,arg){
if(isFunction(arg)){
if(!options.unique||!self.has(arg)){
list.push(arg);
}
}else if(arg&&arg.length&&toType(arg)!=="string"){
add(arg);
}
});
})(arguments);
if(memory&&!firing){
fire();
}
}
return this;
},
remove:function(){
jQuery.each(arguments,function(_,arg){
var index;
while((index=jQuery.inArray(arg,list,index))>-1){
list.splice(index,1);
if(index<=firingIndex){
firingIndex--;
}
}
});
return this;
},
has:function(fn){
return fn?
jQuery.inArray(fn,list)>-1:
list.length>0;
},
empty:function(){
if(list){
list=[];
}
return this;
},
disable:function(){
locked=queue=[];
list=memory="";
return this;
},
disabled:function(){
return!list;
},
lock:function(){
locked=queue=[];
if(!memory&&!firing){
list=memory="";
}
return this;
},
locked:function(){
return!!locked;
},
fireWith:function(context,args){
if(!locked){
args=args||[];
args=[context,args.slice?args.slice():args];
queue.push(args);
if(!firing){
fire();
}
}
return this;
},
fire:function(){
self.fireWith(this,arguments);
return this;
},
fired:function(){
return!!fired;
}
};
return self;
};
function Identity(v){
return v;
}
function Thrower(ex){
throw ex;
}
function adoptValue(value,resolve,reject,noValue){
var method;
try{
if(value&&isFunction((method=value.promise))){
method.call(value).done(resolve).fail(reject);
}else if(value&&isFunction((method=value.then))){
method.call(value,resolve,reject);
}else{
resolve.apply(undefined,[value].slice(noValue));
}
}catch(value){
reject.apply(undefined,[value]);
}
}
jQuery.extend({
Deferred:function(func){
var tuples=[
["notify","progress",jQuery.Callbacks("memory"),
jQuery.Callbacks("memory"),2],
["resolve","done",jQuery.Callbacks("once memory"),
jQuery.Callbacks("once memory"),0,"resolved"],
["reject","fail",jQuery.Callbacks("once memory"),
jQuery.Callbacks("once memory"),1,"rejected"]
],
state="pending",
promise={
state:function(){
return state;
},
always:function(){
deferred.done(arguments).fail(arguments);
return this;
},
"catch":function(fn){
return promise.then(null,fn);
},
pipe:function(){
var fns=arguments;
return jQuery.Deferred(function(newDefer){
jQuery.each(tuples,function(_i,tuple){
var fn=isFunction(fns[tuple[4]])&&fns[tuple[4]];
deferred[tuple[1]](function(){
var returned=fn&&fn.apply(this,arguments);
if(returned&&isFunction(returned.promise)){
returned.promise()
.progress(newDefer.notify)
.done(newDefer.resolve)
.fail(newDefer.reject);
}else{
newDefer[tuple[0]+"With"](
this,
fn?[returned]:arguments
);
}
});
});
fns=null;
}).promise();
},
then:function(onFulfilled,onRejected,onProgress){
var maxDepth=0;
function resolve(depth,deferred,handler,special){
return function(){
var that=this,
args=arguments,
mightThrow=function(){
var returned,then;
if(depth<maxDepth){
return;
}
returned=handler.apply(that,args);
if(returned===deferred.promise()){
throw new TypeError("Thenable self-resolution");
}
then=returned&&
(typeof returned==="object"||
typeof returned==="function")&&
returned.then;
if(isFunction(then)){
if(special){
then.call(
returned,
resolve(maxDepth,deferred,Identity,special),
resolve(maxDepth,deferred,Thrower,special)
);
}else{
maxDepth++;
then.call(
returned,
resolve(maxDepth,deferred,Identity,special),
resolve(maxDepth,deferred,Thrower,special),
resolve(maxDepth,deferred,Identity,
deferred.notifyWith)
);
}
}else{
if(handler!==Identity){
that=undefined;
args=[returned];
}
(special||deferred.resolveWith)(that,args);
}
},
process=special?
mightThrow:
function(){
try{
mightThrow();
}catch(e){
if(jQuery.Deferred.exceptionHook){
jQuery.Deferred.exceptionHook(e,
process.error);
}
if(depth+1>=maxDepth){
if(handler!==Thrower){
that=undefined;
args=[e];
}
deferred.rejectWith(that,args);
}
}
};
if(depth){
process();
}else{
if(jQuery.Deferred.getErrorHook){
process.error=jQuery.Deferred.getErrorHook();
}else if(jQuery.Deferred.getStackHook){
process.error=jQuery.Deferred.getStackHook();
}
window.setTimeout(process);
}
};
}
return jQuery.Deferred(function(newDefer){
tuples[0][3].add(
resolve(
0,
newDefer,
isFunction(onProgress)?
onProgress:
Identity,
newDefer.notifyWith
)
);
tuples[1][3].add(
resolve(
0,
newDefer,
isFunction(onFulfilled)?
onFulfilled:
Identity
)
);
tuples[2][3].add(
resolve(
0,
newDefer,
isFunction(onRejected)?
onRejected:
Thrower
)
);
}).promise();
},
promise:function(obj){
return obj!=null?jQuery.extend(obj,promise):promise;
}
},
deferred={};
jQuery.each(tuples,function(i,tuple){
var list=tuple[2],
stateString=tuple[5];
promise[tuple[1]]=list.add;
if(stateString){
list.add(
function(){
state=stateString;
},
tuples[3-i][2].disable,
tuples[3-i][3].disable,
tuples[0][2].lock,
tuples[0][3].lock
);
}
list.add(tuple[3].fire);
deferred[tuple[0]]=function(){
deferred[tuple[0]+"With"](this===deferred?undefined:this,arguments);
return this;
};
deferred[tuple[0]+"With"]=list.fireWith;
});
promise.promise(deferred);
if(func){
func.call(deferred,deferred);
}
return deferred;
},
when:function(singleValue){
var
remaining=arguments.length,
i=remaining,
resolveContexts=Array(i),
resolveValues=slice.call(arguments),
primary=jQuery.Deferred(),
updateFunc=function(i){
return function(value){
resolveContexts[i]=this;
resolveValues[i]=arguments.length>1?slice.call(arguments):value;
if(!(--remaining)){
primary.resolveWith(resolveContexts,resolveValues);
}
};
};
if(remaining<=1){
adoptValue(singleValue,primary.done(updateFunc(i)).resolve,primary.reject,
!remaining);
if(primary.state()==="pending"||
isFunction(resolveValues[i]&&resolveValues[i].then)){
return primary.then();
}
}
while(i--){
adoptValue(resolveValues[i],updateFunc(i),primary.reject);
}
return primary.promise();
}
});
var rerrorNames=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
jQuery.Deferred.exceptionHook=function(error,asyncError){
if(window.console&&window.console.warn&&error&&rerrorNames.test(error.name)){
window.console.warn("jQuery.Deferred exception: "+error.message,
error.stack,asyncError);
}
};
jQuery.readyException=function(error){
window.setTimeout(function(){
throw error;
});
};
var readyList=jQuery.Deferred();
jQuery.fn.ready=function(fn){
readyList
.then(fn)
.catch(function(error){
jQuery.readyException(error);
});
return this;
};
jQuery.extend({
isReady:false,
readyWait:1,
ready:function(wait){
if(wait===true?--jQuery.readyWait:jQuery.isReady){
return;
}
jQuery.isReady=true;
if(wait!==true&&--jQuery.readyWait>0){
return;
}
readyList.resolveWith(document,[jQuery]);
}
});
jQuery.ready.then=readyList.then;
function completed(){
document.removeEventListener("DOMContentLoaded",completed);
window.removeEventListener("load",completed);
jQuery.ready();
}
if(document.readyState==="complete"||
(document.readyState!=="loading"&&!document.documentElement.doScroll)){
window.setTimeout(jQuery.ready);
}else{
document.addEventListener("DOMContentLoaded",completed);
window.addEventListener("load",completed);
}
var access=function(elems,fn,key,value,chainable,emptyGet,raw){
var i=0,
len=elems.length,
bulk=key==null;
if(toType(key)==="object"){
chainable=true;
for(i in key){
access(elems,fn,i,key[i],true,emptyGet,raw);
}
}else if(value!==undefined){
chainable=true;
if(!isFunction(value)){
raw=true;
}
if(bulk){
if(raw){
fn.call(elems,value);
fn=null;
}else{
bulk=fn;
fn=function(elem,_key,value){
return bulk.call(jQuery(elem),value);
};
}
}
if(fn){
for(;i<len;i++){
fn(
elems[i],key,raw?
value:
value.call(elems[i],i,fn(elems[i],key))
);
}
}
}
if(chainable){
return elems;
}
if(bulk){
return fn.call(elems);
}
return len?fn(elems[0],key):emptyGet;
};
var rmsPrefix=/^-ms-/,
rdashAlpha=/-([a-z])/g;
function fcamelCase(_all,letter){
return letter.toUpperCase();
}
function camelCase(string){
return string.replace(rmsPrefix,"ms-").replace(rdashAlpha,fcamelCase);
}
var acceptData=function(owner){
return owner.nodeType===1||owner.nodeType===9||!(+owner.nodeType);
};
function Data(){
this.expando=jQuery.expando+Data.uid++;
}
Data.uid=1;
Data.prototype={
cache:function(owner){
var value=owner[this.expando];
if(!value){
value={};
if(acceptData(owner)){
if(owner.nodeType){
owner[this.expando]=value;
}else{
Object.defineProperty(owner,this.expando,{
value:value,
configurable:true
});
}
}
}
return value;
},
set:function(owner,data,value){
var prop,
cache=this.cache(owner);
if(typeof data==="string"){
cache[camelCase(data)]=value;
}else{
for(prop in data){
cache[camelCase(prop)]=data[prop];
}
}
return cache;
},
get:function(owner,key){
return key===undefined?
this.cache(owner):
owner[this.expando]&&owner[this.expando][camelCase(key)];
},
access:function(owner,key,value){
if(key===undefined||
((key&&typeof key==="string")&&value===undefined)){
return this.get(owner,key);
}
this.set(owner,key,value);
return value!==undefined?value:key;
},
remove:function(owner,key){
var i,
cache=owner[this.expando];
if(cache===undefined){
return;
}
if(key!==undefined){
if(Array.isArray(key)){
key=key.map(camelCase);
}else{
key=camelCase(key);
key=key in cache?
[key]:
(key.match(rnothtmlwhite)||[]);
}
i=key.length;
while(i--){
delete cache[key[i]];
}
}
if(key===undefined||jQuery.isEmptyObject(cache)){
if(owner.nodeType){
owner[this.expando]=undefined;
}else{
delete owner[this.expando];
}
}
},
hasData:function(owner){
var cache=owner[this.expando];
return cache!==undefined&&!jQuery.isEmptyObject(cache);
}
};
var dataPriv=new Data();
var dataUser=new Data();
var rbrace=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
rmultiDash=/[A-Z]/g;
function getData(data){
if(data==="true"){
return true;
}
if(data==="false"){
return false;
}
if(data==="null"){
return null;
}
if(data===+data+""){
return+data;
}
if(rbrace.test(data)){
return JSON.parse(data);
}
return data;
}
function dataAttr(elem,key,data){
var name;
if(data===undefined&&elem.nodeType===1){
name="data-"+key.replace(rmultiDash,"-$&").toLowerCase();
data=elem.getAttribute(name);
if(typeof data==="string"){
try{
data=getData(data);
}catch(e){}
dataUser.set(elem,key,data);
}else{
data=undefined;
}
}
return data;
}
jQuery.extend({
hasData:function(elem){
return dataUser.hasData(elem)||dataPriv.hasData(elem);
},
data:function(elem,name,data){
return dataUser.access(elem,name,data);
},
removeData:function(elem,name){
dataUser.remove(elem,name);
},
_data:function(elem,name,data){
return dataPriv.access(elem,name,data);
},
_removeData:function(elem,name){
dataPriv.remove(elem,name);
}
});
jQuery.fn.extend({
data:function(key,value){
var i,name,data,
elem=this[0],
attrs=elem&&elem.attributes;
if(key===undefined){
if(this.length){
data=dataUser.get(elem);
if(elem.nodeType===1&&!dataPriv.get(elem,"hasDataAttrs")){
i=attrs.length;
while(i--){
if(attrs[i]){
name=attrs[i].name;
if(name.indexOf("data-")===0){
name=camelCase(name.slice(5));
dataAttr(elem,name,data[name]);
}
}
}
dataPriv.set(elem,"hasDataAttrs",true);
}
}
return data;
}
if(typeof key==="object"){
return this.each(function(){
dataUser.set(this,key);
});
}
return access(this,function(value){
var data;
if(elem&&value===undefined){
data=dataUser.get(elem,key);
if(data!==undefined){
return data;
}
data=dataAttr(elem,key);
if(data!==undefined){
return data;
}
return;
}
this.each(function(){
dataUser.set(this,key,value);
});
},null,value,arguments.length>1,null,true);
},
removeData:function(key){
return this.each(function(){
dataUser.remove(this,key);
});
}
});
jQuery.extend({
queue:function(elem,type,data){
var queue;
if(elem){
type=(type||"fx")+"queue";
queue=dataPriv.get(elem,type);
if(data){
if(!queue||Array.isArray(data)){
queue=dataPriv.access(elem,type,jQuery.makeArray(data));
}else{
queue.push(data);
}
}
return queue||[];
}
},
dequeue:function(elem,type){
type=type||"fx";
var queue=jQuery.queue(elem,type),
startLength=queue.length,
fn=queue.shift(),
hooks=jQuery._queueHooks(elem,type),
next=function(){
jQuery.dequeue(elem,type);
};
if(fn==="inprogress"){
fn=queue.shift();
startLength--;
}
if(fn){
if(type==="fx"){
queue.unshift("inprogress");
}
delete hooks.stop;
fn.call(elem,next,hooks);
}
if(!startLength&&hooks){
hooks.empty.fire();
}
},
_queueHooks:function(elem,type){
var key=type+"queueHooks";
return dataPriv.get(elem,key)||dataPriv.access(elem,key,{
empty:jQuery.Callbacks("once memory").add(function(){
dataPriv.remove(elem,[type+"queue",key]);
})
});
}
});
jQuery.fn.extend({
queue:function(type,data){
var setter=2;
if(typeof type!=="string"){
data=type;
type="fx";
setter--;
}
if(arguments.length<setter){
return jQuery.queue(this[0],type);
}
return data===undefined?
this:
this.each(function(){
var queue=jQuery.queue(this,type,data);
jQuery._queueHooks(this,type);
if(type==="fx"&&queue[0]!=="inprogress"){
jQuery.dequeue(this,type);
}
});
},
dequeue:function(type){
return this.each(function(){
jQuery.dequeue(this,type);
});
},
clearQueue:function(type){
return this.queue(type||"fx",[]);
},
promise:function(type,obj){
var tmp,
count=1,
defer=jQuery.Deferred(),
elements=this,
i=this.length,
resolve=function(){
if(!(--count)){
defer.resolveWith(elements,[elements]);
}
};
if(typeof type!=="string"){
obj=type;
type=undefined;
}
type=type||"fx";
while(i--){
tmp=dataPriv.get(elements[i],type+"queueHooks");
if(tmp&&tmp.empty){
count++;
tmp.empty.add(resolve);
}
}
resolve();
return defer.promise(obj);
}
});
var pnum=(/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/).source;
var rcssNum=new RegExp("^(?:([+-])=|)("+pnum+")([a-z%]*)$","i");
var cssExpand=["Top","Right","Bottom","Left"];
var documentElement=document.documentElement;
var isAttached=function(elem){
return jQuery.contains(elem.ownerDocument,elem);
},
composed={composed:true};
if(documentElement.getRootNode){
isAttached=function(elem){
return jQuery.contains(elem.ownerDocument,elem)||
elem.getRootNode(composed)===elem.ownerDocument;
};
}
var isHiddenWithinTree=function(elem,el){
elem=el||elem;
return elem.style.display==="none"||
elem.style.display===""&&
isAttached(elem)&&
jQuery.css(elem,"display")==="none";
};
function adjustCSS(elem,prop,valueParts,tween){
var adjusted,scale,
maxIterations=20,
currentValue=tween?
function(){
return tween.cur();
}:
function(){
return jQuery.css(elem,prop,"");
},
initial=currentValue(),
unit=valueParts&&valueParts[3]||(jQuery.cssNumber[prop]?"":"px"),
initialInUnit=elem.nodeType&&
(jQuery.cssNumber[prop]||unit!=="px"&&+initial)&&
rcssNum.exec(jQuery.css(elem,prop));
if(initialInUnit&&initialInUnit[3]!==unit){
initial=initial/2;
unit=unit||initialInUnit[3];
initialInUnit=+initial||1;
while(maxIterations--){
jQuery.style(elem,prop,initialInUnit+unit);
if((1-scale)*(1-(scale=currentValue()/initial||0.5))<=0){
maxIterations=0;
}
initialInUnit=initialInUnit/scale;
}
initialInUnit=initialInUnit*2;
jQuery.style(elem,prop,initialInUnit+unit);
valueParts=valueParts||[];
}
if(valueParts){
initialInUnit=+initialInUnit||+initial||0;
adjusted=valueParts[1]?
initialInUnit+(valueParts[1]+1)*valueParts[2]:
+valueParts[2];
if(tween){
tween.unit=unit;
tween.start=initialInUnit;
tween.end=adjusted;
}
}
return adjusted;
}
var defaultDisplayMap={};
function getDefaultDisplay(elem){
var temp,
doc=elem.ownerDocument,
nodeName=elem.nodeName,
display=defaultDisplayMap[nodeName];
if(display){
return display;
}
temp=doc.body.appendChild(doc.createElement(nodeName));
display=jQuery.css(temp,"display");
temp.parentNode.removeChild(temp);
if(display==="none"){
display="block";
}
defaultDisplayMap[nodeName]=display;
return display;
}
function showHide(elements,show){
var display,elem,
values=[],
index=0,
length=elements.length;
for(;index<length;index++){
elem=elements[index];
if(!elem.style){
continue;
}
display=elem.style.display;
if(show){
if(display==="none"){
values[index]=dataPriv.get(elem,"display")||null;
if(!values[index]){
elem.style.display="";
}
}
if(elem.style.display===""&&isHiddenWithinTree(elem)){
values[index]=getDefaultDisplay(elem);
}
}else{
if(display!=="none"){
values[index]="none";
dataPriv.set(elem,"display",display);
}
}
}
for(index=0;index<length;index++){
if(values[index]!=null){
elements[index].style.display=values[index];
}
}
return elements;
}
jQuery.fn.extend({
show:function(){
return showHide(this,true);
},
hide:function(){
return showHide(this);
},
toggle:function(state){
if(typeof state==="boolean"){
return state?this.show():this.hide();
}
return this.each(function(){
if(isHiddenWithinTree(this)){
jQuery(this).show();
}else{
jQuery(this).hide();
}
});
}
});
var rcheckableType=(/^(?:checkbox|radio)$/i);
var rtagName=(/<([a-z][^\/\0>\x20\t\r\n\f]*)/i);
var rscriptType=(/^$|^module$|\/(?:java|ecma)script/i);
(function(){
var fragment=document.createDocumentFragment(),
div=fragment.appendChild(document.createElement("div")),
input=document.createElement("input");
input.setAttribute("type","radio");
input.setAttribute("checked","checked");
input.setAttribute("name","t");
div.appendChild(input);
support.checkClone=div.cloneNode(true).cloneNode(true).lastChild.checked;
div.innerHTML="<textarea>x</textarea>";
support.noCloneChecked=!!div.cloneNode(true).lastChild.defaultValue;
div.innerHTML="<option></option>";
support.option=!!div.lastChild;
})();
var wrapMap={
thead:[1,"<table>","</table>"],
col:[2,"<table><colgroup>","</colgroup></table>"],
tr:[2,"<table><tbody>","</tbody></table>"],
td:[3,"<table><tbody><tr>","</tr></tbody></table>"],
_default:[0,"",""]
};
wrapMap.tbody=wrapMap.tfoot=wrapMap.colgroup=wrapMap.caption=wrapMap.thead;
wrapMap.th=wrapMap.td;
if(!support.option){
wrapMap.optgroup=wrapMap.option=[1,"<select multiple='multiple'>","</select>"];
}
function getAll(context,tag){
var ret;
if(typeof context.getElementsByTagName!=="undefined"){
ret=context.getElementsByTagName(tag||"*");
}else if(typeof context.querySelectorAll!=="undefined"){
ret=context.querySelectorAll(tag||"*");
}else{
ret=[];
}
if(tag===undefined||tag&&nodeName(context,tag)){
return jQuery.merge([context],ret);
}
return ret;
}
function setGlobalEval(elems,refElements){
var i=0,
l=elems.length;
for(;i<l;i++){
dataPriv.set(
elems[i],
"globalEval",
!refElements||dataPriv.get(refElements[i],"globalEval")
);
}
}
var rhtml=/<|&#?\w+;/;
function buildFragment(elems,context,scripts,selection,ignored){
var elem,tmp,tag,wrap,attached,j,
fragment=context.createDocumentFragment(),
nodes=[],
i=0,
l=elems.length;
for(;i<l;i++){
elem=elems[i];
if(elem||elem===0){
if(toType(elem)==="object"){
jQuery.merge(nodes,elem.nodeType?[elem]:elem);
}else if(!rhtml.test(elem)){
nodes.push(context.createTextNode(elem));
}else{
tmp=tmp||fragment.appendChild(context.createElement("div"));
tag=(rtagName.exec(elem)||["",""])[1].toLowerCase();
wrap=wrapMap[tag]||wrapMap._default;
tmp.innerHTML=wrap[1]+jQuery.htmlPrefilter(elem)+wrap[2];
j=wrap[0];
while(j--){
tmp=tmp.lastChild;
}
jQuery.merge(nodes,tmp.childNodes);
tmp=fragment.firstChild;
tmp.textContent="";
}
}
}
fragment.textContent="";
i=0;
while((elem=nodes[i++])){
if(selection&&jQuery.inArray(elem,selection)>-1){
if(ignored){
ignored.push(elem);
}
continue;
}
attached=isAttached(elem);
tmp=getAll(fragment.appendChild(elem),"script");
if(attached){
setGlobalEval(tmp);
}
if(scripts){
j=0;
while((elem=tmp[j++])){
if(rscriptType.test(elem.type||"")){
scripts.push(elem);
}
}
}
}
return fragment;
}
var rtypenamespace=/^([^.]*)(?:\.(.+)|)/;
function returnTrue(){
return true;
}
function returnFalse(){
return false;
}
function on(elem,types,selector,data,fn,one){
var origFn,type;
if(typeof types==="object"){
if(typeof selector!=="string"){
data=data||selector;
selector=undefined;
}
for(type in types){
on(elem,type,selector,data,types[type],one);
}
return elem;
}
if(data==null&&fn==null){
fn=selector;
data=selector=undefined;
}else if(fn==null){
if(typeof selector==="string"){
fn=data;
data=undefined;
}else{
fn=data;
data=selector;
selector=undefined;
}
}
if(fn===false){
fn=returnFalse;
}else if(!fn){
return elem;
}
if(one===1){
origFn=fn;
fn=function(event){
jQuery().off(event);
return origFn.apply(this,arguments);
};
fn.guid=origFn.guid||(origFn.guid=jQuery.guid++);
}
return elem.each(function(){
jQuery.event.add(this,types,fn,data,selector);
});
}
jQuery.event={
global:{},
add:function(elem,types,handler,data,selector){
var handleObjIn,eventHandle,tmp,
events,t,handleObj,
special,handlers,type,namespaces,origType,
elemData=dataPriv.get(elem);
if(!acceptData(elem)){
return;
}
if(handler.handler){
handleObjIn=handler;
handler=handleObjIn.handler;
selector=handleObjIn.selector;
}
if(selector){
jQuery.find.matchesSelector(documentElement,selector);
}
if(!handler.guid){
handler.guid=jQuery.guid++;
}
if(!(events=elemData.events)){
events=elemData.events=Object.create(null);
}
if(!(eventHandle=elemData.handle)){
eventHandle=elemData.handle=function(e){
return typeof jQuery!=="undefined"&&jQuery.event.triggered!==e.type?
jQuery.event.dispatch.apply(elem,arguments):undefined;
};
}
types=(types||"").match(rnothtmlwhite)||[""];
t=types.length;
while(t--){
tmp=rtypenamespace.exec(types[t])||[];
type=origType=tmp[1];
namespaces=(tmp[2]||"").split(".").sort();
if(!type){
continue;
}
special=jQuery.event.special[type]||{};
type=(selector?special.delegateType:special.bindType)||type;
special=jQuery.event.special[type]||{};
handleObj=jQuery.extend({
type:type,
origType:origType,
data:data,
handler:handler,
guid:handler.guid,
selector:selector,
needsContext:selector&&jQuery.expr.match.needsContext.test(selector),
namespace:namespaces.join(".")
},handleObjIn);
if(!(handlers=events[type])){
handlers=events[type]=[];
handlers.delegateCount=0;
if(!special.setup||
special.setup.call(elem,data,namespaces,eventHandle)===false){
if(elem.addEventListener){
elem.addEventListener(type,eventHandle);
}
}
}
if(special.add){
special.add.call(elem,handleObj);
if(!handleObj.handler.guid){
handleObj.handler.guid=handler.guid;
}
}
if(selector){
handlers.splice(handlers.delegateCount++,0,handleObj);
}else{
handlers.push(handleObj);
}
jQuery.event.global[type]=true;
}
},
remove:function(elem,types,handler,selector,mappedTypes){
var j,origCount,tmp,
events,t,handleObj,
special,handlers,type,namespaces,origType,
elemData=dataPriv.hasData(elem)&&dataPriv.get(elem);
if(!elemData||!(events=elemData.events)){
return;
}
types=(types||"").match(rnothtmlwhite)||[""];
t=types.length;
while(t--){
tmp=rtypenamespace.exec(types[t])||[];
type=origType=tmp[1];
namespaces=(tmp[2]||"").split(".").sort();
if(!type){
for(type in events){
jQuery.event.remove(elem,type+types[t],handler,selector,true);
}
continue;
}
special=jQuery.event.special[type]||{};
type=(selector?special.delegateType:special.bindType)||type;
handlers=events[type]||[];
tmp=tmp[2]&&
new RegExp("(^|\\.)"+namespaces.join("\\.(?:.*\\.|)")+"(\\.|$)");
origCount=j=handlers.length;
while(j--){
handleObj=handlers[j];
if((mappedTypes||origType===handleObj.origType)&&
(!handler||handler.guid===handleObj.guid)&&
(!tmp||tmp.test(handleObj.namespace))&&
(!selector||selector===handleObj.selector||
selector==="**"&&handleObj.selector)){
handlers.splice(j,1);
if(handleObj.selector){
handlers.delegateCount--;
}
if(special.remove){
special.remove.call(elem,handleObj);
}
}
}
if(origCount&&!handlers.length){
if(!special.teardown||
special.teardown.call(elem,namespaces,elemData.handle)===false){
jQuery.removeEvent(elem,type,elemData.handle);
}
delete events[type];
}
}
if(jQuery.isEmptyObject(events)){
dataPriv.remove(elem,"handle events");
}
},
dispatch:function(nativeEvent){
var i,j,ret,matched,handleObj,handlerQueue,
args=new Array(arguments.length),
event=jQuery.event.fix(nativeEvent),
handlers=(
dataPriv.get(this,"events")||Object.create(null)
)[event.type]||[],
special=jQuery.event.special[event.type]||{};
args[0]=event;
for(i=1;i<arguments.length;i++){
args[i]=arguments[i];
}
event.delegateTarget=this;
if(special.preDispatch&&special.preDispatch.call(this,event)===false){
return;
}
handlerQueue=jQuery.event.handlers.call(this,event,handlers);
i=0;
while((matched=handlerQueue[i++])&&!event.isPropagationStopped()){
event.currentTarget=matched.elem;
j=0;
while((handleObj=matched.handlers[j++])&&
!event.isImmediatePropagationStopped()){
if(!event.rnamespace||handleObj.namespace===false||
event.rnamespace.test(handleObj.namespace)){
event.handleObj=handleObj;
event.data=handleObj.data;
ret=((jQuery.event.special[handleObj.origType]||{}).handle||
handleObj.handler).apply(matched.elem,args);
if(ret!==undefined){
if((event.result=ret)===false){
event.preventDefault();
event.stopPropagation();
}
}
}
}
}
if(special.postDispatch){
special.postDispatch.call(this,event);
}
return event.result;
},
handlers:function(event,handlers){
var i,handleObj,sel,matchedHandlers,matchedSelectors,
handlerQueue=[],
delegateCount=handlers.delegateCount,
cur=event.target;
if(delegateCount&&
cur.nodeType&&
!(event.type==="click"&&event.button>=1)){
for(;cur!==this;cur=cur.parentNode||this){
if(cur.nodeType===1&&!(event.type==="click"&&cur.disabled===true)){
matchedHandlers=[];
matchedSelectors={};
for(i=0;i<delegateCount;i++){
handleObj=handlers[i];
sel=handleObj.selector+" ";
if(matchedSelectors[sel]===undefined){
matchedSelectors[sel]=handleObj.needsContext?
jQuery(sel,this).index(cur)>-1:
jQuery.find(sel,this,null,[cur]).length;
}
if(matchedSelectors[sel]){
matchedHandlers.push(handleObj);
}
}
if(matchedHandlers.length){
handlerQueue.push({elem:cur,handlers:matchedHandlers});
}
}
}
}
cur=this;
if(delegateCount<handlers.length){
handlerQueue.push({elem:cur,handlers:handlers.slice(delegateCount)});
}
return handlerQueue;
},
addProp:function(name,hook){
Object.defineProperty(jQuery.Event.prototype,name,{
enumerable:true,
configurable:true,
get:isFunction(hook)?
function(){
if(this.originalEvent){
return hook(this.originalEvent);
}
}:
function(){
if(this.originalEvent){
return this.originalEvent[name];
}
},
set:function(value){
Object.defineProperty(this,name,{
enumerable:true,
configurable:true,
writable:true,
value:value
});
}
});
},
fix:function(originalEvent){
return originalEvent[jQuery.expando]?
originalEvent:
new jQuery.Event(originalEvent);
},
special:{
load:{
noBubble:true
},
click:{
setup:function(data){
var el=this||data;
if(rcheckableType.test(el.type)&&
el.click&&nodeName(el,"input")){
leverageNative(el,"click",true);
}
return false;
},
trigger:function(data){
var el=this||data;
if(rcheckableType.test(el.type)&&
el.click&&nodeName(el,"input")){
leverageNative(el,"click");
}
return true;
},
_default:function(event){
var target=event.target;
return rcheckableType.test(target.type)&&
target.click&&nodeName(target,"input")&&
dataPriv.get(target,"click")||
nodeName(target,"a");
}
},
beforeunload:{
postDispatch:function(event){
if(event.result!==undefined&&event.originalEvent){
event.originalEvent.returnValue=event.result;
}
}
}
}
};
function leverageNative(el,type,isSetup){
if(!isSetup){
if(dataPriv.get(el,type)===undefined){
jQuery.event.add(el,type,returnTrue);
}
return;
}
dataPriv.set(el,type,false);
jQuery.event.add(el,type,{
namespace:false,
handler:function(event){
var result,
saved=dataPriv.get(this,type);
if((event.isTrigger&1)&&this[type]){
if(!saved){
saved=slice.call(arguments);
dataPriv.set(this,type,saved);
this[type]();
result=dataPriv.get(this,type);
dataPriv.set(this,type,false);
if(saved!==result){
event.stopImmediatePropagation();
event.preventDefault();
return result;
}
}else if((jQuery.event.special[type]||{}).delegateType){
event.stopPropagation();
}
}else if(saved){
dataPriv.set(this,type,jQuery.event.trigger(
saved[0],
saved.slice(1),
this
));
event.stopPropagation();
event.isImmediatePropagationStopped=returnTrue;
}
}
});
}
jQuery.removeEvent=function(elem,type,handle){
if(elem.removeEventListener){
elem.removeEventListener(type,handle);
}
};
jQuery.Event=function(src,props){
if(!(this instanceof jQuery.Event)){
return new jQuery.Event(src,props);
}
if(src&&src.type){
this.originalEvent=src;
this.type=src.type;
this.isDefaultPrevented=src.defaultPrevented||
src.defaultPrevented===undefined&&
src.returnValue===false?
returnTrue:
returnFalse;
this.target=(src.target&&src.target.nodeType===3)?
src.target.parentNode:
src.target;
this.currentTarget=src.currentTarget;
this.relatedTarget=src.relatedTarget;
}else{
this.type=src;
}
if(props){
jQuery.extend(this,props);
}
this.timeStamp=src&&src.timeStamp||Date.now();
this[jQuery.expando]=true;
};
jQuery.Event.prototype={
constructor:jQuery.Event,
isDefaultPrevented:returnFalse,
isPropagationStopped:returnFalse,
isImmediatePropagationStopped:returnFalse,
isSimulated:false,
preventDefault:function(){
var e=this.originalEvent;
this.isDefaultPrevented=returnTrue;
if(e&&!this.isSimulated){
e.preventDefault();
}
},
stopPropagation:function(){
var e=this.originalEvent;
this.isPropagationStopped=returnTrue;
if(e&&!this.isSimulated){
e.stopPropagation();
}
},
stopImmediatePropagation:function(){
var e=this.originalEvent;
this.isImmediatePropagationStopped=returnTrue;
if(e&&!this.isSimulated){
e.stopImmediatePropagation();
}
this.stopPropagation();
}
};
jQuery.each({
altKey:true,
bubbles:true,
cancelable:true,
changedTouches:true,
ctrlKey:true,
detail:true,
eventPhase:true,
metaKey:true,
pageX:true,
pageY:true,
shiftKey:true,
view:true,
"char":true,
code:true,
charCode:true,
key:true,
keyCode:true,
button:true,
buttons:true,
clientX:true,
clientY:true,
offsetX:true,
offsetY:true,
pointerId:true,
pointerType:true,
screenX:true,
screenY:true,
targetTouches:true,
toElement:true,
touches:true,
which:true
},jQuery.event.addProp);
jQuery.each({focus:"focusin",blur:"focusout"},function(type,delegateType){
function focusMappedHandler(nativeEvent){
if(document.documentMode){
var handle=dataPriv.get(this,"handle"),
event=jQuery.event.fix(nativeEvent);
event.type=nativeEvent.type==="focusin"?"focus":"blur";
event.isSimulated=true;
handle(nativeEvent);
if(event.target===event.currentTarget){
handle(event);
}
}else{
jQuery.event.simulate(delegateType,nativeEvent.target,
jQuery.event.fix(nativeEvent));
}
}
jQuery.event.special[type]={
setup:function(){
var attaches;
leverageNative(this,type,true);
if(document.documentMode){
attaches=dataPriv.get(this,delegateType);
if(!attaches){
this.addEventListener(delegateType,focusMappedHandler);
}
dataPriv.set(this,delegateType,(attaches||0)+1);
}else{
return false;
}
},
trigger:function(){
leverageNative(this,type);
return true;
},
teardown:function(){
var attaches;
if(document.documentMode){
attaches=dataPriv.get(this,delegateType)-1;
if(!attaches){
this.removeEventListener(delegateType,focusMappedHandler);
dataPriv.remove(this,delegateType);
}else{
dataPriv.set(this,delegateType,attaches);
}
}else{
return false;
}
},
_default:function(event){
return dataPriv.get(event.target,type);
},
delegateType:delegateType
};
jQuery.event.special[delegateType]={
setup:function(){
var doc=this.ownerDocument||this.document||this,
dataHolder=document.documentMode?this:doc,
attaches=dataPriv.get(dataHolder,delegateType);
if(!attaches){
if(document.documentMode){
this.addEventListener(delegateType,focusMappedHandler);
}else{
doc.addEventListener(type,focusMappedHandler,true);
}
}
dataPriv.set(dataHolder,delegateType,(attaches||0)+1);
},
teardown:function(){
var doc=this.ownerDocument||this.document||this,
dataHolder=document.documentMode?this:doc,
attaches=dataPriv.get(dataHolder,delegateType)-1;
if(!attaches){
if(document.documentMode){
this.removeEventListener(delegateType,focusMappedHandler);
}else{
doc.removeEventListener(type,focusMappedHandler,true);
}
dataPriv.remove(dataHolder,delegateType);
}else{
dataPriv.set(dataHolder,delegateType,attaches);
}
}
};
});
jQuery.each({
mouseenter:"mouseover",
mouseleave:"mouseout",
pointerenter:"pointerover",
pointerleave:"pointerout"
},function(orig,fix){
jQuery.event.special[orig]={
delegateType:fix,
bindType:fix,
handle:function(event){
var ret,
target=this,
related=event.relatedTarget,
handleObj=event.handleObj;
if(!related||(related!==target&&!jQuery.contains(target,related))){
event.type=handleObj.origType;
ret=handleObj.handler.apply(this,arguments);
event.type=fix;
}
return ret;
}
};
});
jQuery.fn.extend({
on:function(types,selector,data,fn){
return on(this,types,selector,data,fn);
},
one:function(types,selector,data,fn){
return on(this,types,selector,data,fn,1);
},
off:function(types,selector,fn){
var handleObj,type;
if(types&&types.preventDefault&&types.handleObj){
handleObj=types.handleObj;
jQuery(types.delegateTarget).off(
handleObj.namespace?
handleObj.origType+"."+handleObj.namespace:
handleObj.origType,
handleObj.selector,
handleObj.handler
);
return this;
}
if(typeof types==="object"){
for(type in types){
this.off(type,selector,types[type]);
}
return this;
}
if(selector===false||typeof selector==="function"){
fn=selector;
selector=undefined;
}
if(fn===false){
fn=returnFalse;
}
return this.each(function(){
jQuery.event.remove(this,types,fn,selector);
});
}
});
var
rnoInnerhtml=/<script|<style|<link/i,
rchecked=/checked\s*(?:[^=]|=\s*.checked.)/i,
rcleanScript=/^\s*<!\[CDATA\[|\]\]>\s*$/g;
function manipulationTarget(elem,content){
if(nodeName(elem,"table")&&
nodeName(content.nodeType!==11?content:content.firstChild,"tr")){
return jQuery(elem).children("tbody")[0]||elem;
}
return elem;
}
function disableScript(elem){
elem.type=(elem.getAttribute("type")!==null)+"/"+elem.type;
return elem;
}
function restoreScript(elem){
if((elem.type||"").slice(0,5)==="true/"){
elem.type=elem.type.slice(5);
}else{
elem.removeAttribute("type");
}
return elem;
}
function cloneCopyEvent(src,dest){
var i,l,type,pdataOld,udataOld,udataCur,events;
if(dest.nodeType!==1){
return;
}
if(dataPriv.hasData(src)){
pdataOld=dataPriv.get(src);
events=pdataOld.events;
if(events){
dataPriv.remove(dest,"handle events");
for(type in events){
for(i=0,l=events[type].length;i<l;i++){
jQuery.event.add(dest,type,events[type][i]);
}
}
}
}
if(dataUser.hasData(src)){
udataOld=dataUser.access(src);
udataCur=jQuery.extend({},udataOld);
dataUser.set(dest,udataCur);
}
}
function fixInput(src,dest){
var nodeName=dest.nodeName.toLowerCase();
if(nodeName==="input"&&rcheckableType.test(src.type)){
dest.checked=src.checked;
}else if(nodeName==="input"||nodeName==="textarea"){
dest.defaultValue=src.defaultValue;
}
}
function domManip(collection,args,callback,ignored){
args=flat(args);
var fragment,first,scripts,hasScripts,node,doc,
i=0,
l=collection.length,
iNoClone=l-1,
value=args[0],
valueIsFunction=isFunction(value);
if(valueIsFunction||
(l>1&&typeof value==="string"&&
!support.checkClone&&rchecked.test(value))){
return collection.each(function(index){
var self=collection.eq(index);
if(valueIsFunction){
args[0]=value.call(this,index,self.html());
}
domManip(self,args,callback,ignored);
});
}
if(l){
fragment=buildFragment(args,collection[0].ownerDocument,false,collection,ignored);
first=fragment.firstChild;
if(fragment.childNodes.length===1){
fragment=first;
}
if(first||ignored){
scripts=jQuery.map(getAll(fragment,"script"),disableScript);
hasScripts=scripts.length;
for(;i<l;i++){
node=fragment;
if(i!==iNoClone){
node=jQuery.clone(node,true,true);
if(hasScripts){
jQuery.merge(scripts,getAll(node,"script"));
}
}
callback.call(collection[i],node,i);
}
if(hasScripts){
doc=scripts[scripts.length-1].ownerDocument;
jQuery.map(scripts,restoreScript);
for(i=0;i<hasScripts;i++){
node=scripts[i];
if(rscriptType.test(node.type||"")&&
!dataPriv.access(node,"globalEval")&&
jQuery.contains(doc,node)){
if(node.src&&(node.type||"").toLowerCase()!=="module"){
if(jQuery._evalUrl&&!node.noModule){
jQuery._evalUrl(node.src,{
nonce:node.nonce||node.getAttribute("nonce")
},doc);
}
}else{
DOMEval(node.textContent.replace(rcleanScript,""),node,doc);
}
}
}
}
}
}
return collection;
}
function remove(elem,selector,keepData){
var node,
nodes=selector?jQuery.filter(selector,elem):elem,
i=0;
for(;(node=nodes[i])!=null;i++){
if(!keepData&&node.nodeType===1){
jQuery.cleanData(getAll(node));
}
if(node.parentNode){
if(keepData&&isAttached(node)){
setGlobalEval(getAll(node,"script"));
}
node.parentNode.removeChild(node);
}
}
return elem;
}
jQuery.extend({
htmlPrefilter:function(html){
return html;
},
clone:function(elem,dataAndEvents,deepDataAndEvents){
var i,l,srcElements,destElements,
clone=elem.cloneNode(true),
inPage=isAttached(elem);
if(!support.noCloneChecked&&(elem.nodeType===1||elem.nodeType===11)&&
!jQuery.isXMLDoc(elem)){
destElements=getAll(clone);
srcElements=getAll(elem);
for(i=0,l=srcElements.length;i<l;i++){
fixInput(srcElements[i],destElements[i]);
}
}
if(dataAndEvents){
if(deepDataAndEvents){
srcElements=srcElements||getAll(elem);
destElements=destElements||getAll(clone);
for(i=0,l=srcElements.length;i<l;i++){
cloneCopyEvent(srcElements[i],destElements[i]);
}
}else{
cloneCopyEvent(elem,clone);
}
}
destElements=getAll(clone,"script");
if(destElements.length>0){
setGlobalEval(destElements,!inPage&&getAll(elem,"script"));
}
return clone;
},
cleanData:function(elems){
var data,elem,type,
special=jQuery.event.special,
i=0;
for(;(elem=elems[i])!==undefined;i++){
if(acceptData(elem)){
if((data=elem[dataPriv.expando])){
if(data.events){
for(type in data.events){
if(special[type]){
jQuery.event.remove(elem,type);
}else{
jQuery.removeEvent(elem,type,data.handle);
}
}
}
elem[dataPriv.expando]=undefined;
}
if(elem[dataUser.expando]){
elem[dataUser.expando]=undefined;
}
}
}
}
});
jQuery.fn.extend({
detach:function(selector){
return remove(this,selector,true);
},
remove:function(selector){
return remove(this,selector);
},
text:function(value){
return access(this,function(value){
return value===undefined?
jQuery.text(this):
this.empty().each(function(){
if(this.nodeType===1||this.nodeType===11||this.nodeType===9){
this.textContent=value;
}
});
},null,value,arguments.length);
},
append:function(){
return domManip(this,arguments,function(elem){
if(this.nodeType===1||this.nodeType===11||this.nodeType===9){
var target=manipulationTarget(this,elem);
target.appendChild(elem);
}
});
},
prepend:function(){
return domManip(this,arguments,function(elem){
if(this.nodeType===1||this.nodeType===11||this.nodeType===9){
var target=manipulationTarget(this,elem);
target.insertBefore(elem,target.firstChild);
}
});
},
before:function(){
return domManip(this,arguments,function(elem){
if(this.parentNode){
this.parentNode.insertBefore(elem,this);
}
});
},
after:function(){
return domManip(this,arguments,function(elem){
if(this.parentNode){
this.parentNode.insertBefore(elem,this.nextSibling);
}
});
},
empty:function(){
var elem,
i=0;
for(;(elem=this[i])!=null;i++){
if(elem.nodeType===1){
jQuery.cleanData(getAll(elem,false));
elem.textContent="";
}
}
return this;
},
clone:function(dataAndEvents,deepDataAndEvents){
dataAndEvents=dataAndEvents==null?false:dataAndEvents;
deepDataAndEvents=deepDataAndEvents==null?dataAndEvents:deepDataAndEvents;
return this.map(function(){
return jQuery.clone(this,dataAndEvents,deepDataAndEvents);
});
},
html:function(value){
return access(this,function(value){
var elem=this[0]||{},
i=0,
l=this.length;
if(value===undefined&&elem.nodeType===1){
return elem.innerHTML;
}
if(typeof value==="string"&&!rnoInnerhtml.test(value)&&
!wrapMap[(rtagName.exec(value)||["",""])[1].toLowerCase()]){
value=jQuery.htmlPrefilter(value);
try{
for(;i<l;i++){
elem=this[i]||{};
if(elem.nodeType===1){
jQuery.cleanData(getAll(elem,false));
elem.innerHTML=value;
}
}
elem=0;
}catch(e){}
}
if(elem){
this.empty().append(value);
}
},null,value,arguments.length);
},
replaceWith:function(){
var ignored=[];
return domManip(this,arguments,function(elem){
var parent=this.parentNode;
if(jQuery.inArray(this,ignored)<0){
jQuery.cleanData(getAll(this));
if(parent){
parent.replaceChild(elem,this);
}
}
},ignored);
}
});
jQuery.each({
appendTo:"append",
prependTo:"prepend",
insertBefore:"before",
insertAfter:"after",
replaceAll:"replaceWith"
},function(name,original){
jQuery.fn[name]=function(selector){
var elems,
ret=[],
insert=jQuery(selector),
last=insert.length-1,
i=0;
for(;i<=last;i++){
elems=i===last?this:this.clone(true);
jQuery(insert[i])[original](elems);
push.apply(ret,elems.get());
}
return this.pushStack(ret);
};
});
var rnumnonpx=new RegExp("^("+pnum+")(?!px)[a-z%]+$","i");
var rcustomProp=/^--/;
var getStyles=function(elem){
var view=elem.ownerDocument.defaultView;
if(!view||!view.opener){
view=window;
}
return view.getComputedStyle(elem);
};
var swap=function(elem,options,callback){
var ret,name,
old={};
for(name in options){
old[name]=elem.style[name];
elem.style[name]=options[name];
}
ret=callback.call(elem);
for(name in options){
elem.style[name]=old[name];
}
return ret;
};
var rboxStyle=new RegExp(cssExpand.join("|"),"i");
(function(){
function computeStyleTests(){
if(!div){
return;
}
container.style.cssText="position:absolute;left:-11111px;width:60px;"+
"margin-top:1px;padding:0;border:0";
div.style.cssText=
"position:relative;display:block;box-sizing:border-box;overflow:scroll;"+
"margin:auto;border:1px;padding:1px;"+
"width:60%;top:1%";
documentElement.appendChild(container).appendChild(div);
var divStyle=window.getComputedStyle(div);
pixelPositionVal=divStyle.top!=="1%";
reliableMarginLeftVal=roundPixelMeasures(divStyle.marginLeft)===12;
div.style.right="60%";
pixelBoxStylesVal=roundPixelMeasures(divStyle.right)===36;
boxSizingReliableVal=roundPixelMeasures(divStyle.width)===36;
div.style.position="absolute";
scrollboxSizeVal=roundPixelMeasures(div.offsetWidth/3)===12;
documentElement.removeChild(container);
div=null;
}
function roundPixelMeasures(measure){
return Math.round(parseFloat(measure));
}
var pixelPositionVal,boxSizingReliableVal,scrollboxSizeVal,pixelBoxStylesVal,
reliableTrDimensionsVal,reliableMarginLeftVal,
container=document.createElement("div"),
div=document.createElement("div");
if(!div.style){
return;
}
div.style.backgroundClip="content-box";
div.cloneNode(true).style.backgroundClip="";
support.clearCloneStyle=div.style.backgroundClip==="content-box";
jQuery.extend(support,{
boxSizingReliable:function(){
computeStyleTests();
return boxSizingReliableVal;
},
pixelBoxStyles:function(){
computeStyleTests();
return pixelBoxStylesVal;
},
pixelPosition:function(){
computeStyleTests();
return pixelPositionVal;
},
reliableMarginLeft:function(){
computeStyleTests();
return reliableMarginLeftVal;
},
scrollboxSize:function(){
computeStyleTests();
return scrollboxSizeVal;
},
reliableTrDimensions:function(){
var table,tr,trChild,trStyle;
if(reliableTrDimensionsVal==null){
table=document.createElement("table");
tr=document.createElement("tr");
trChild=document.createElement("div");
table.style.cssText="position:absolute;left:-11111px;border-collapse:separate";
tr.style.cssText="box-sizing:content-box;border:1px solid";
tr.style.height="1px";
trChild.style.height="9px";
trChild.style.display="block";
documentElement
.appendChild(table)
.appendChild(tr)
.appendChild(trChild);
trStyle=window.getComputedStyle(tr);
reliableTrDimensionsVal=(parseInt(trStyle.height,10)+
parseInt(trStyle.borderTopWidth,10)+
parseInt(trStyle.borderBottomWidth,10))===tr.offsetHeight;
documentElement.removeChild(table);
}
return reliableTrDimensionsVal;
}
});
})();
function curCSS(elem,name,computed){
var width,minWidth,maxWidth,ret,
isCustomProp=rcustomProp.test(name),
style=elem.style;
computed=computed||getStyles(elem);
if(computed){
ret=computed.getPropertyValue(name)||computed[name];
if(isCustomProp&&ret){
ret=ret.replace(rtrimCSS,"$1")||undefined;
}
if(ret===""&&!isAttached(elem)){
ret=jQuery.style(elem,name);
}
if(!support.pixelBoxStyles()&&rnumnonpx.test(ret)&&rboxStyle.test(name)){
width=style.width;
minWidth=style.minWidth;
maxWidth=style.maxWidth;
style.minWidth=style.maxWidth=style.width=ret;
ret=computed.width;
style.width=width;
style.minWidth=minWidth;
style.maxWidth=maxWidth;
}
}
return ret!==undefined?
ret+"":
ret;
}
function addGetHookIf(conditionFn,hookFn){
return{
get:function(){
if(conditionFn()){
delete this.get;
return;
}
return(this.get=hookFn).apply(this,arguments);
}
};
}
var cssPrefixes=["Webkit","Moz","ms"],
emptyStyle=document.createElement("div").style,
vendorProps={};
function vendorPropName(name){
var capName=name[0].toUpperCase()+name.slice(1),
i=cssPrefixes.length;
while(i--){
name=cssPrefixes[i]+capName;
if(name in emptyStyle){
return name;
}
}
}
function finalPropName(name){
var final=jQuery.cssProps[name]||vendorProps[name];
if(final){
return final;
}
if(name in emptyStyle){
return name;
}
return vendorProps[name]=vendorPropName(name)||name;
}
var
rdisplayswap=/^(none|table(?!-c[ea]).+)/,
cssShow={position:"absolute",visibility:"hidden",display:"block"},
cssNormalTransform={
letterSpacing:"0",
fontWeight:"400"
};
function setPositiveNumber(_elem,value,subtract){
var matches=rcssNum.exec(value);
return matches?
Math.max(0,matches[2]-(subtract||0))+(matches[3]||"px"):
value;
}
function boxModelAdjustment(elem,dimension,box,isBorderBox,styles,computedVal){
var i=dimension==="width"?1:0,
extra=0,
delta=0,
marginDelta=0;
if(box===(isBorderBox?"border":"content")){
return 0;
}
for(;i<4;i+=2){
if(box==="margin"){
marginDelta+=jQuery.css(elem,box+cssExpand[i],true,styles);
}
if(!isBorderBox){
delta+=jQuery.css(elem,"padding"+cssExpand[i],true,styles);
if(box!=="padding"){
delta+=jQuery.css(elem,"border"+cssExpand[i]+"Width",true,styles);
}else{
extra+=jQuery.css(elem,"border"+cssExpand[i]+"Width",true,styles);
}
}else{
if(box==="content"){
delta-=jQuery.css(elem,"padding"+cssExpand[i],true,styles);
}
if(box!=="margin"){
delta-=jQuery.css(elem,"border"+cssExpand[i]+"Width",true,styles);
}
}
}
if(!isBorderBox&&computedVal>=0){
delta+=Math.max(0,Math.ceil(
elem["offset"+dimension[0].toUpperCase()+dimension.slice(1)]-
computedVal-
delta-
extra-
0.5
))||0;
}
return delta+marginDelta;
}
function getWidthOrHeight(elem,dimension,extra){
var styles=getStyles(elem),
boxSizingNeeded=!support.boxSizingReliable()||extra,
isBorderBox=boxSizingNeeded&&
jQuery.css(elem,"boxSizing",false,styles)==="border-box",
valueIsBorderBox=isBorderBox,
val=curCSS(elem,dimension,styles),
offsetProp="offset"+dimension[0].toUpperCase()+dimension.slice(1);
if(rnumnonpx.test(val)){
if(!extra){
return val;
}
val="auto";
}
if((!support.boxSizingReliable()&&isBorderBox||
!support.reliableTrDimensions()&&nodeName(elem,"tr")||
val==="auto"||
!parseFloat(val)&&jQuery.css(elem,"display",false,styles)==="inline")&&
elem.getClientRects().length){
isBorderBox=jQuery.css(elem,"boxSizing",false,styles)==="border-box";
valueIsBorderBox=offsetProp in elem;
if(valueIsBorderBox){
val=elem[offsetProp];
}
}
val=parseFloat(val)||0;
return(val+
boxModelAdjustment(
elem,
dimension,
extra||(isBorderBox?"border":"content"),
valueIsBorderBox,
styles,
val
)
)+"px";
}
jQuery.extend({
cssHooks:{
opacity:{
get:function(elem,computed){
if(computed){
var ret=curCSS(elem,"opacity");
return ret===""?"1":ret;
}
}
}
},
cssNumber:{
animationIterationCount:true,
aspectRatio:true,
borderImageSlice:true,
columnCount:true,
flexGrow:true,
flexShrink:true,
fontWeight:true,
gridArea:true,
gridColumn:true,
gridColumnEnd:true,
gridColumnStart:true,
gridRow:true,
gridRowEnd:true,
gridRowStart:true,
lineHeight:true,
opacity:true,
order:true,
orphans:true,
scale:true,
widows:true,
zIndex:true,
zoom:true,
fillOpacity:true,
floodOpacity:true,
stopOpacity:true,
strokeMiterlimit:true,
strokeOpacity:true
},
cssProps:{},
style:function(elem,name,value,extra){
if(!elem||elem.nodeType===3||elem.nodeType===8||!elem.style){
return;
}
var ret,type,hooks,
origName=camelCase(name),
isCustomProp=rcustomProp.test(name),
style=elem.style;
if(!isCustomProp){
name=finalPropName(origName);
}
hooks=jQuery.cssHooks[name]||jQuery.cssHooks[origName];
if(value!==undefined){
type=typeof value;
if(type==="string"&&(ret=rcssNum.exec(value))&&ret[1]){
value=adjustCSS(elem,name,ret);
type="number";
}
if(value==null||value!==value){
return;
}
if(type==="number"&&!isCustomProp){
value+=ret&&ret[3]||(jQuery.cssNumber[origName]?"":"px");
}
if(!support.clearCloneStyle&&value===""&&name.indexOf("background")===0){
style[name]="inherit";
}
if(!hooks||!("set"in hooks)||
(value=hooks.set(elem,value,extra))!==undefined){
if(isCustomProp){
style.setProperty(name,value);
}else{
style[name]=value;
}
}
}else{
if(hooks&&"get"in hooks&&
(ret=hooks.get(elem,false,extra))!==undefined){
return ret;
}
return style[name];
}
},
css:function(elem,name,extra,styles){
var val,num,hooks,
origName=camelCase(name),
isCustomProp=rcustomProp.test(name);
if(!isCustomProp){
name=finalPropName(origName);
}
hooks=jQuery.cssHooks[name]||jQuery.cssHooks[origName];
if(hooks&&"get"in hooks){
val=hooks.get(elem,true,extra);
}
if(val===undefined){
val=curCSS(elem,name,styles);
}
if(val==="normal"&&name in cssNormalTransform){
val=cssNormalTransform[name];
}
if(extra===""||extra){
num=parseFloat(val);
return extra===true||isFinite(num)?num||0:val;
}
return val;
}
});
jQuery.each(["height","width"],function(_i,dimension){
jQuery.cssHooks[dimension]={
get:function(elem,computed,extra){
if(computed){
return rdisplayswap.test(jQuery.css(elem,"display"))&&
(!elem.getClientRects().length||!elem.getBoundingClientRect().width)?
swap(elem,cssShow,function(){
return getWidthOrHeight(elem,dimension,extra);
}):
getWidthOrHeight(elem,dimension,extra);
}
},
set:function(elem,value,extra){
var matches,
styles=getStyles(elem),
scrollboxSizeBuggy=!support.scrollboxSize()&&
styles.position==="absolute",
boxSizingNeeded=scrollboxSizeBuggy||extra,
isBorderBox=boxSizingNeeded&&
jQuery.css(elem,"boxSizing",false,styles)==="border-box",
subtract=extra?
boxModelAdjustment(
elem,
dimension,
extra,
isBorderBox,
styles
):
0;
if(isBorderBox&&scrollboxSizeBuggy){
subtract-=Math.ceil(
elem["offset"+dimension[0].toUpperCase()+dimension.slice(1)]-
parseFloat(styles[dimension])-
boxModelAdjustment(elem,dimension,"border",false,styles)-
0.5
);
}
if(subtract&&(matches=rcssNum.exec(value))&&
(matches[3]||"px")!=="px"){
elem.style[dimension]=value;
value=jQuery.css(elem,dimension);
}
return setPositiveNumber(elem,value,subtract);
}
};
});
jQuery.cssHooks.marginLeft=addGetHookIf(support.reliableMarginLeft,
function(elem,computed){
if(computed){
return(parseFloat(curCSS(elem,"marginLeft"))||
elem.getBoundingClientRect().left-
swap(elem,{marginLeft:0},function(){
return elem.getBoundingClientRect().left;
})
)+"px";
}
}
);
jQuery.each({
margin:"",
padding:"",
border:"Width"
},function(prefix,suffix){
jQuery.cssHooks[prefix+suffix]={
expand:function(value){
var i=0,
expanded={},
parts=typeof value==="string"?value.split(" "):[value];
for(;i<4;i++){
expanded[prefix+cssExpand[i]+suffix]=
parts[i]||parts[i-2]||parts[0];
}
return expanded;
}
};
if(prefix!=="margin"){
jQuery.cssHooks[prefix+suffix].set=setPositiveNumber;
}
});
jQuery.fn.extend({
css:function(name,value){
return access(this,function(elem,name,value){
var styles,len,
map={},
i=0;
if(Array.isArray(name)){
styles=getStyles(elem);
len=name.length;
for(;i<len;i++){
map[name[i]]=jQuery.css(elem,name[i],false,styles);
}
return map;
}
return value!==undefined?
jQuery.style(elem,name,value):
jQuery.css(elem,name);
},name,value,arguments.length>1);
}
});
function Tween(elem,options,prop,end,easing){
return new Tween.prototype.init(elem,options,prop,end,easing);
}
jQuery.Tween=Tween;
Tween.prototype={
constructor:Tween,
init:function(elem,options,prop,end,easing,unit){
this.elem=elem;
this.prop=prop;
this.easing=easing||jQuery.easing._default;
this.options=options;
this.start=this.now=this.cur();
this.end=end;
this.unit=unit||(jQuery.cssNumber[prop]?"":"px");
},
cur:function(){
var hooks=Tween.propHooks[this.prop];
return hooks&&hooks.get?
hooks.get(this):
Tween.propHooks._default.get(this);
},
run:function(percent){
var eased,
hooks=Tween.propHooks[this.prop];
if(this.options.duration){
this.pos=eased=jQuery.easing[this.easing](
percent,this.options.duration*percent,0,1,this.options.duration
);
}else{
this.pos=eased=percent;
}
this.now=(this.end-this.start)*eased+this.start;
if(this.options.step){
this.options.step.call(this.elem,this.now,this);
}
if(hooks&&hooks.set){
hooks.set(this);
}else{
Tween.propHooks._default.set(this);
}
return this;
}
};
Tween.prototype.init.prototype=Tween.prototype;
Tween.propHooks={
_default:{
get:function(tween){
var result;
if(tween.elem.nodeType!==1||
tween.elem[tween.prop]!=null&&tween.elem.style[tween.prop]==null){
return tween.elem[tween.prop];
}
result=jQuery.css(tween.elem,tween.prop,"");
return!result||result==="auto"?0:result;
},
set:function(tween){
if(jQuery.fx.step[tween.prop]){
jQuery.fx.step[tween.prop](tween);
}else if(tween.elem.nodeType===1&&(
jQuery.cssHooks[tween.prop]||
tween.elem.style[finalPropName(tween.prop)]!=null)){
jQuery.style(tween.elem,tween.prop,tween.now+tween.unit);
}else{
tween.elem[tween.prop]=tween.now;
}
}
}
};
Tween.propHooks.scrollTop=Tween.propHooks.scrollLeft={
set:function(tween){
if(tween.elem.nodeType&&tween.elem.parentNode){
tween.elem[tween.prop]=tween.now;
}
}
};
jQuery.easing={
linear:function(p){
return p;
},
swing:function(p){
return 0.5-Math.cos(p*Math.PI)/2;
},
_default:"swing"
};
jQuery.fx=Tween.prototype.init;
jQuery.fx.step={};
var
fxNow,inProgress,
rfxtypes=/^(?:toggle|show|hide)$/,
rrun=/queueHooks$/;
function schedule(){
if(inProgress){
if(document.hidden===false&&window.requestAnimationFrame){
window.requestAnimationFrame(schedule);
}else{
window.setTimeout(schedule,jQuery.fx.interval);
}
jQuery.fx.tick();
}
}
function createFxNow(){
window.setTimeout(function(){
fxNow=undefined;
});
return(fxNow=Date.now());
}
function genFx(type,includeWidth){
var which,
i=0,
attrs={height:type};
includeWidth=includeWidth?1:0;
for(;i<4;i+=2-includeWidth){
which=cssExpand[i];
attrs["margin"+which]=attrs["padding"+which]=type;
}
if(includeWidth){
attrs.opacity=attrs.width=type;
}
return attrs;
}
function createTween(value,prop,animation){
var tween,
collection=(Animation.tweeners[prop]||[]).concat(Animation.tweeners["*"]),
index=0,
length=collection.length;
for(;index<length;index++){
if((tween=collection[index].call(animation,prop,value))){
return tween;
}
}
}
function defaultPrefilter(elem,props,opts){
var prop,value,toggle,hooks,oldfire,propTween,restoreDisplay,display,
isBox="width"in props||"height"in props,
anim=this,
orig={},
style=elem.style,
hidden=elem.nodeType&&isHiddenWithinTree(elem),
dataShow=dataPriv.get(elem,"fxshow");
if(!opts.queue){
hooks=jQuery._queueHooks(elem,"fx");
if(hooks.unqueued==null){
hooks.unqueued=0;
oldfire=hooks.empty.fire;
hooks.empty.fire=function(){
if(!hooks.unqueued){
oldfire();
}
};
}
hooks.unqueued++;
anim.always(function(){
anim.always(function(){
hooks.unqueued--;
if(!jQuery.queue(elem,"fx").length){
hooks.empty.fire();
}
});
});
}
for(prop in props){
value=props[prop];
if(rfxtypes.test(value)){
delete props[prop];
toggle=toggle||value==="toggle";
if(value===(hidden?"hide":"show")){
if(value==="show"&&dataShow&&dataShow[prop]!==undefined){
hidden=true;
}else{
continue;
}
}
orig[prop]=dataShow&&dataShow[prop]||jQuery.style(elem,prop);
}
}
propTween=!jQuery.isEmptyObject(props);
if(!propTween&&jQuery.isEmptyObject(orig)){
return;
}
if(isBox&&elem.nodeType===1){
opts.overflow=[style.overflow,style.overflowX,style.overflowY];
restoreDisplay=dataShow&&dataShow.display;
if(restoreDisplay==null){
restoreDisplay=dataPriv.get(elem,"display");
}
display=jQuery.css(elem,"display");
if(display==="none"){
if(restoreDisplay){
display=restoreDisplay;
}else{
showHide([elem],true);
restoreDisplay=elem.style.display||restoreDisplay;
display=jQuery.css(elem,"display");
showHide([elem]);
}
}
if(display==="inline"||display==="inline-block"&&restoreDisplay!=null){
if(jQuery.css(elem,"float")==="none"){
if(!propTween){
anim.done(function(){
style.display=restoreDisplay;
});
if(restoreDisplay==null){
display=style.display;
restoreDisplay=display==="none"?"":display;
}
}
style.display="inline-block";
}
}
}
if(opts.overflow){
style.overflow="hidden";
anim.always(function(){
style.overflow=opts.overflow[0];
style.overflowX=opts.overflow[1];
style.overflowY=opts.overflow[2];
});
}
propTween=false;
for(prop in orig){
if(!propTween){
if(dataShow){
if("hidden"in dataShow){
hidden=dataShow.hidden;
}
}else{
dataShow=dataPriv.access(elem,"fxshow",{display:restoreDisplay});
}
if(toggle){
dataShow.hidden=!hidden;
}
if(hidden){
showHide([elem],true);
}
anim.done(function(){
if(!hidden){
showHide([elem]);
}
dataPriv.remove(elem,"fxshow");
for(prop in orig){
jQuery.style(elem,prop,orig[prop]);
}
});
}
propTween=createTween(hidden?dataShow[prop]:0,prop,anim);
if(!(prop in dataShow)){
dataShow[prop]=propTween.start;
if(hidden){
propTween.end=propTween.start;
propTween.start=0;
}
}
}
}
function propFilter(props,specialEasing){
var index,name,easing,value,hooks;
for(index in props){
name=camelCase(index);
easing=specialEasing[name];
value=props[index];
if(Array.isArray(value)){
easing=value[1];
value=props[index]=value[0];
}
if(index!==name){
props[name]=value;
delete props[index];
}
hooks=jQuery.cssHooks[name];
if(hooks&&"expand"in hooks){
value=hooks.expand(value);
delete props[name];
for(index in value){
if(!(index in props)){
props[index]=value[index];
specialEasing[index]=easing;
}
}
}else{
specialEasing[name]=easing;
}
}
}
function Animation(elem,properties,options){
var result,
stopped,
index=0,
length=Animation.prefilters.length,
deferred=jQuery.Deferred().always(function(){
delete tick.elem;
}),
tick=function(){
if(stopped){
return false;
}
var currentTime=fxNow||createFxNow(),
remaining=Math.max(0,animation.startTime+animation.duration-currentTime),
temp=remaining/animation.duration||0,
percent=1-temp,
index=0,
length=animation.tweens.length;
for(;index<length;index++){
animation.tweens[index].run(percent);
}
deferred.notifyWith(elem,[animation,percent,remaining]);
if(percent<1&&length){
return remaining;
}
if(!length){
deferred.notifyWith(elem,[animation,1,0]);
}
deferred.resolveWith(elem,[animation]);
return false;
},
animation=deferred.promise({
elem:elem,
props:jQuery.extend({},properties),
opts:jQuery.extend(true,{
specialEasing:{},
easing:jQuery.easing._default
},options),
originalProperties:properties,
originalOptions:options,
startTime:fxNow||createFxNow(),
duration:options.duration,
tweens:[],
createTween:function(prop,end){
var tween=jQuery.Tween(elem,animation.opts,prop,end,
animation.opts.specialEasing[prop]||animation.opts.easing);
animation.tweens.push(tween);
return tween;
},
stop:function(gotoEnd){
var index=0,
length=gotoEnd?animation.tweens.length:0;
if(stopped){
return this;
}
stopped=true;
for(;index<length;index++){
animation.tweens[index].run(1);
}
if(gotoEnd){
deferred.notifyWith(elem,[animation,1,0]);
deferred.resolveWith(elem,[animation,gotoEnd]);
}else{
deferred.rejectWith(elem,[animation,gotoEnd]);
}
return this;
}
}),
props=animation.props;
propFilter(props,animation.opts.specialEasing);
for(;index<length;index++){
result=Animation.prefilters[index].call(animation,elem,props,animation.opts);
if(result){
if(isFunction(result.stop)){
jQuery._queueHooks(animation.elem,animation.opts.queue).stop=
result.stop.bind(result);
}
return result;
}
}
jQuery.map(props,createTween,animation);
if(isFunction(animation.opts.start)){
animation.opts.start.call(elem,animation);
}
animation
.progress(animation.opts.progress)
.done(animation.opts.done,animation.opts.complete)
.fail(animation.opts.fail)
.always(animation.opts.always);
jQuery.fx.timer(
jQuery.extend(tick,{
elem:elem,
anim:animation,
queue:animation.opts.queue
})
);
return animation;
}
jQuery.Animation=jQuery.extend(Animation,{
tweeners:{
"*":[function(prop,value){
var tween=this.createTween(prop,value);
adjustCSS(tween.elem,prop,rcssNum.exec(value),tween);
return tween;
}]
},
tweener:function(props,callback){
if(isFunction(props)){
callback=props;
props=["*"];
}else{
props=props.match(rnothtmlwhite);
}
var prop,
index=0,
length=props.length;
for(;index<length;index++){
prop=props[index];
Animation.tweeners[prop]=Animation.tweeners[prop]||[];
Animation.tweeners[prop].unshift(callback);
}
},
prefilters:[defaultPrefilter],
prefilter:function(callback,prepend){
if(prepend){
Animation.prefilters.unshift(callback);
}else{
Animation.prefilters.push(callback);
}
}
});
jQuery.speed=function(speed,easing,fn){
var opt=speed&&typeof speed==="object"?jQuery.extend({},speed):{
complete:fn||!fn&&easing||
isFunction(speed)&&speed,
duration:speed,
easing:fn&&easing||easing&&!isFunction(easing)&&easing
};
if(jQuery.fx.off){
opt.duration=0;
}else{
if(typeof opt.duration!=="number"){
if(opt.duration in jQuery.fx.speeds){
opt.duration=jQuery.fx.speeds[opt.duration];
}else{
opt.duration=jQuery.fx.speeds._default;
}
}
}
if(opt.queue==null||opt.queue===true){
opt.queue="fx";
}
opt.old=opt.complete;
opt.complete=function(){
if(isFunction(opt.old)){
opt.old.call(this);
}
if(opt.queue){
jQuery.dequeue(this,opt.queue);
}
};
return opt;
};
jQuery.fn.extend({
fadeTo:function(speed,to,easing,callback){
return this.filter(isHiddenWithinTree).css("opacity",0).show()
.end().animate({opacity:to},speed,easing,callback);
},
animate:function(prop,speed,easing,callback){
var empty=jQuery.isEmptyObject(prop),
optall=jQuery.speed(speed,easing,callback),
doAnimation=function(){
var anim=Animation(this,jQuery.extend({},prop),optall);
if(empty||dataPriv.get(this,"finish")){
anim.stop(true);
}
};
doAnimation.finish=doAnimation;
return empty||optall.queue===false?
this.each(doAnimation):
this.queue(optall.queue,doAnimation);
},
stop:function(type,clearQueue,gotoEnd){
var stopQueue=function(hooks){
var stop=hooks.stop;
delete hooks.stop;
stop(gotoEnd);
};
if(typeof type!=="string"){
gotoEnd=clearQueue;
clearQueue=type;
type=undefined;
}
if(clearQueue){
this.queue(type||"fx",[]);
}
return this.each(function(){
var dequeue=true,
index=type!=null&&type+"queueHooks",
timers=jQuery.timers,
data=dataPriv.get(this);
if(index){
if(data[index]&&data[index].stop){
stopQueue(data[index]);
}
}else{
for(index in data){
if(data[index]&&data[index].stop&&rrun.test(index)){
stopQueue(data[index]);
}
}
}
for(index=timers.length;index--;){
if(timers[index].elem===this&&
(type==null||timers[index].queue===type)){
timers[index].anim.stop(gotoEnd);
dequeue=false;
timers.splice(index,1);
}
}
if(dequeue||!gotoEnd){
jQuery.dequeue(this,type);
}
});
},
finish:function(type){
if(type!==false){
type=type||"fx";
}
return this.each(function(){
var index,
data=dataPriv.get(this),
queue=data[type+"queue"],
hooks=data[type+"queueHooks"],
timers=jQuery.timers,
length=queue?queue.length:0;
data.finish=true;
jQuery.queue(this,type,[]);
if(hooks&&hooks.stop){
hooks.stop.call(this,true);
}
for(index=timers.length;index--;){
if(timers[index].elem===this&&timers[index].queue===type){
timers[index].anim.stop(true);
timers.splice(index,1);
}
}
for(index=0;index<length;index++){
if(queue[index]&&queue[index].finish){
queue[index].finish.call(this);
}
}
delete data.finish;
});
}
});
jQuery.each(["toggle","show","hide"],function(_i,name){
var cssFn=jQuery.fn[name];
jQuery.fn[name]=function(speed,easing,callback){
return speed==null||typeof speed==="boolean"?
cssFn.apply(this,arguments):
this.animate(genFx(name,true),speed,easing,callback);
};
});
jQuery.each({
slideDown:genFx("show"),
slideUp:genFx("hide"),
slideToggle:genFx("toggle"),
fadeIn:{opacity:"show"},
fadeOut:{opacity:"hide"},
fadeToggle:{opacity:"toggle"}
},function(name,props){
jQuery.fn[name]=function(speed,easing,callback){
return this.animate(props,speed,easing,callback);
};
});
jQuery.timers=[];
jQuery.fx.tick=function(){
var timer,
i=0,
timers=jQuery.timers;
fxNow=Date.now();
for(;i<timers.length;i++){
timer=timers[i];
if(!timer()&&timers[i]===timer){
timers.splice(i--,1);
}
}
if(!timers.length){
jQuery.fx.stop();
}
fxNow=undefined;
};
jQuery.fx.timer=function(timer){
jQuery.timers.push(timer);
jQuery.fx.start();
};
jQuery.fx.interval=13;
jQuery.fx.start=function(){
if(inProgress){
return;
}
inProgress=true;
schedule();
};
jQuery.fx.stop=function(){
inProgress=null;
};
jQuery.fx.speeds={
slow:600,
fast:200,
_default:400
};
jQuery.fn.delay=function(time,type){
time=jQuery.fx?jQuery.fx.speeds[time]||time:time;
type=type||"fx";
return this.queue(type,function(next,hooks){
var timeout=window.setTimeout(next,time);
hooks.stop=function(){
window.clearTimeout(timeout);
};
});
};
(function(){
var input=document.createElement("input"),
select=document.createElement("select"),
opt=select.appendChild(document.createElement("option"));
input.type="checkbox";
support.checkOn=input.value!=="";
support.optSelected=opt.selected;
input=document.createElement("input");
input.value="t";
input.type="radio";
support.radioValue=input.value==="t";
})();
var boolHook,
attrHandle=jQuery.expr.attrHandle;
jQuery.fn.extend({
attr:function(name,value){
return access(this,jQuery.attr,name,value,arguments.length>1);
},
removeAttr:function(name){
return this.each(function(){
jQuery.removeAttr(this,name);
});
}
});
jQuery.extend({
attr:function(elem,name,value){
var ret,hooks,
nType=elem.nodeType;
if(nType===3||nType===8||nType===2){
return;
}
if(typeof elem.getAttribute==="undefined"){
return jQuery.prop(elem,name,value);
}
if(nType!==1||!jQuery.isXMLDoc(elem)){
hooks=jQuery.attrHooks[name.toLowerCase()]||
(jQuery.expr.match.bool.test(name)?boolHook:undefined);
}
if(value!==undefined){
if(value===null){
jQuery.removeAttr(elem,name);
return;
}
if(hooks&&"set"in hooks&&
(ret=hooks.set(elem,value,name))!==undefined){
return ret;
}
elem.setAttribute(name,value+"");
return value;
}
if(hooks&&"get"in hooks&&(ret=hooks.get(elem,name))!==null){
return ret;
}
ret=jQuery.find.attr(elem,name);
return ret==null?undefined:ret;
},
attrHooks:{
type:{
set:function(elem,value){
if(!support.radioValue&&value==="radio"&&
nodeName(elem,"input")){
var val=elem.value;
elem.setAttribute("type",value);
if(val){
elem.value=val;
}
return value;
}
}
}
},
removeAttr:function(elem,value){
var name,
i=0,
attrNames=value&&value.match(rnothtmlwhite);
if(attrNames&&elem.nodeType===1){
while((name=attrNames[i++])){
elem.removeAttribute(name);
}
}
}
});
boolHook={
set:function(elem,value,name){
if(value===false){
jQuery.removeAttr(elem,name);
}else{
elem.setAttribute(name,name);
}
return name;
}
};
jQuery.each(jQuery.expr.match.bool.source.match(/\w+/g),function(_i,name){
var getter=attrHandle[name]||jQuery.find.attr;
attrHandle[name]=function(elem,name,isXML){
var ret,handle,
lowercaseName=name.toLowerCase();
if(!isXML){
handle=attrHandle[lowercaseName];
attrHandle[lowercaseName]=ret;
ret=getter(elem,name,isXML)!=null?
lowercaseName:
null;
attrHandle[lowercaseName]=handle;
}
return ret;
};
});
var rfocusable=/^(?:input|select|textarea|button)$/i,
rclickable=/^(?:a|area)$/i;
jQuery.fn.extend({
prop:function(name,value){
return access(this,jQuery.prop,name,value,arguments.length>1);
},
removeProp:function(name){
return this.each(function(){
delete this[jQuery.propFix[name]||name];
});
}
});
jQuery.extend({
prop:function(elem,name,value){
var ret,hooks,
nType=elem.nodeType;
if(nType===3||nType===8||nType===2){
return;
}
if(nType!==1||!jQuery.isXMLDoc(elem)){
name=jQuery.propFix[name]||name;
hooks=jQuery.propHooks[name];
}
if(value!==undefined){
if(hooks&&"set"in hooks&&
(ret=hooks.set(elem,value,name))!==undefined){
return ret;
}
return(elem[name]=value);
}
if(hooks&&"get"in hooks&&(ret=hooks.get(elem,name))!==null){
return ret;
}
return elem[name];
},
propHooks:{
tabIndex:{
get:function(elem){
var tabindex=jQuery.find.attr(elem,"tabindex");
if(tabindex){
return parseInt(tabindex,10);
}
if(
rfocusable.test(elem.nodeName)||
rclickable.test(elem.nodeName)&&
elem.href
){
return 0;
}
return-1;
}
}
},
propFix:{
"for":"htmlFor",
"class":"className"
}
});
if(!support.optSelected){
jQuery.propHooks.selected={
get:function(elem){
var parent=elem.parentNode;
if(parent&&parent.parentNode){
parent.parentNode.selectedIndex;
}
return null;
},
set:function(elem){
var parent=elem.parentNode;
if(parent){
parent.selectedIndex;
if(parent.parentNode){
parent.parentNode.selectedIndex;
}
}
}
};
}
jQuery.each([
"tabIndex",
"readOnly",
"maxLength",
"cellSpacing",
"cellPadding",
"rowSpan",
"colSpan",
"useMap",
"frameBorder",
"contentEditable"
],function(){
jQuery.propFix[this.toLowerCase()]=this;
});
function stripAndCollapse(value){
var tokens=value.match(rnothtmlwhite)||[];
return tokens.join(" ");
}
function getClass(elem){
return elem.getAttribute&&elem.getAttribute("class")||"";
}
function classesToArray(value){
if(Array.isArray(value)){
return value;
}
if(typeof value==="string"){
return value.match(rnothtmlwhite)||[];
}
return[];
}
jQuery.fn.extend({
addClass:function(value){
var classNames,cur,curValue,className,i,finalValue;
if(isFunction(value)){
return this.each(function(j){
jQuery(this).addClass(value.call(this,j,getClass(this)));
});
}
classNames=classesToArray(value);
if(classNames.length){
return this.each(function(){
curValue=getClass(this);
cur=this.nodeType===1&&(" "+stripAndCollapse(curValue)+" ");
if(cur){
for(i=0;i<classNames.length;i++){
className=classNames[i];
if(cur.indexOf(" "+className+" ")<0){
cur+=className+" ";
}
}
finalValue=stripAndCollapse(cur);
if(curValue!==finalValue){
this.setAttribute("class",finalValue);
}
}
});
}
return this;
},
removeClass:function(value){
var classNames,cur,curValue,className,i,finalValue;
if(isFunction(value)){
return this.each(function(j){
jQuery(this).removeClass(value.call(this,j,getClass(this)));
});
}
if(!arguments.length){
return this.attr("class","");
}
classNames=classesToArray(value);
if(classNames.length){
return this.each(function(){
curValue=getClass(this);
cur=this.nodeType===1&&(" "+stripAndCollapse(curValue)+" ");
if(cur){
for(i=0;i<classNames.length;i++){
className=classNames[i];
while(cur.indexOf(" "+className+" ")>-1){
cur=cur.replace(" "+className+" "," ");
}
}
finalValue=stripAndCollapse(cur);
if(curValue!==finalValue){
this.setAttribute("class",finalValue);
}
}
});
}
return this;
},
toggleClass:function(value,stateVal){
var classNames,className,i,self,
type=typeof value,
isValidValue=type==="string"||Array.isArray(value);
if(isFunction(value)){
return this.each(function(i){
jQuery(this).toggleClass(
value.call(this,i,getClass(this),stateVal),
stateVal
);
});
}
if(typeof stateVal==="boolean"&&isValidValue){
return stateVal?this.addClass(value):this.removeClass(value);
}
classNames=classesToArray(value);
return this.each(function(){
if(isValidValue){
self=jQuery(this);
for(i=0;i<classNames.length;i++){
className=classNames[i];
if(self.hasClass(className)){
self.removeClass(className);
}else{
self.addClass(className);
}
}
}else if(value===undefined||type==="boolean"){
className=getClass(this);
if(className){
dataPriv.set(this,"__className__",className);
}
if(this.setAttribute){
this.setAttribute("class",
className||value===false?
"":
dataPriv.get(this,"__className__")||""
);
}
}
});
},
hasClass:function(selector){
var className,elem,
i=0;
className=" "+selector+" ";
while((elem=this[i++])){
if(elem.nodeType===1&&
(" "+stripAndCollapse(getClass(elem))+" ").indexOf(className)>-1){
return true;
}
}
return false;
}
});
var rreturn=/\r/g;
jQuery.fn.extend({
val:function(value){
var hooks,ret,valueIsFunction,
elem=this[0];
if(!arguments.length){
if(elem){
hooks=jQuery.valHooks[elem.type]||
jQuery.valHooks[elem.nodeName.toLowerCase()];
if(hooks&&
"get"in hooks&&
(ret=hooks.get(elem,"value"))!==undefined
){
return ret;
}
ret=elem.value;
if(typeof ret==="string"){
return ret.replace(rreturn,"");
}
return ret==null?"":ret;
}
return;
}
valueIsFunction=isFunction(value);
return this.each(function(i){
var val;
if(this.nodeType!==1){
return;
}
if(valueIsFunction){
val=value.call(this,i,jQuery(this).val());
}else{
val=value;
}
if(val==null){
val="";
}else if(typeof val==="number"){
val+="";
}else if(Array.isArray(val)){
val=jQuery.map(val,function(value){
return value==null?"":value+"";
});
}
hooks=jQuery.valHooks[this.type]||jQuery.valHooks[this.nodeName.toLowerCase()];
if(!hooks||!("set"in hooks)||hooks.set(this,val,"value")===undefined){
this.value=val;
}
});
}
});
jQuery.extend({
valHooks:{
option:{
get:function(elem){
var val=jQuery.find.attr(elem,"value");
return val!=null?
val:
stripAndCollapse(jQuery.text(elem));
}
},
select:{
get:function(elem){
var value,option,i,
options=elem.options,
index=elem.selectedIndex,
one=elem.type==="select-one",
values=one?null:[],
max=one?index+1:options.length;
if(index<0){
i=max;
}else{
i=one?index:0;
}
for(;i<max;i++){
option=options[i];
if((option.selected||i===index)&&
!option.disabled&&
(!option.parentNode.disabled||
!nodeName(option.parentNode,"optgroup"))){
value=jQuery(option).val();
if(one){
return value;
}
values.push(value);
}
}
return values;
},
set:function(elem,value){
var optionSet,option,
options=elem.options,
values=jQuery.makeArray(value),
i=options.length;
while(i--){
option=options[i];
if(option.selected=
jQuery.inArray(jQuery.valHooks.option.get(option),values)>-1
){
optionSet=true;
}
}
if(!optionSet){
elem.selectedIndex=-1;
}
return values;
}
}
}
});
jQuery.each(["radio","checkbox"],function(){
jQuery.valHooks[this]={
set:function(elem,value){
if(Array.isArray(value)){
return(elem.checked=jQuery.inArray(jQuery(elem).val(),value)>-1);
}
}
};
if(!support.checkOn){
jQuery.valHooks[this].get=function(elem){
return elem.getAttribute("value")===null?"on":elem.value;
};
}
});
var location=window.location;
var nonce={guid:Date.now()};
var rquery=(/\?/);
jQuery.parseXML=function(data){
var xml,parserErrorElem;
if(!data||typeof data!=="string"){
return null;
}
try{
xml=(new window.DOMParser()).parseFromString(data,"text/xml");
}catch(e){}
parserErrorElem=xml&&xml.getElementsByTagName("parsererror")[0];
if(!xml||parserErrorElem){
jQuery.error("Invalid XML: "+(
parserErrorElem?
jQuery.map(parserErrorElem.childNodes,function(el){
return el.textContent;
}).join("\n"):
data
));
}
return xml;
};
var rfocusMorph=/^(?:focusinfocus|focusoutblur)$/,
stopPropagationCallback=function(e){
e.stopPropagation();
};
jQuery.extend(jQuery.event,{
trigger:function(event,data,elem,onlyHandlers){
var i,cur,tmp,bubbleType,ontype,handle,special,lastElement,
eventPath=[elem||document],
type=hasOwn.call(event,"type")?event.type:event,
namespaces=hasOwn.call(event,"namespace")?event.namespace.split("."):[];
cur=lastElement=tmp=elem=elem||document;
if(elem.nodeType===3||elem.nodeType===8){
return;
}
if(rfocusMorph.test(type+jQuery.event.triggered)){
return;
}
if(type.indexOf(".")>-1){
namespaces=type.split(".");
type=namespaces.shift();
namespaces.sort();
}
ontype=type.indexOf(":")<0&&"on"+type;
event=event[jQuery.expando]?
event:
new jQuery.Event(type,typeof event==="object"&&event);
event.isTrigger=onlyHandlers?2:3;
event.namespace=namespaces.join(".");
event.rnamespace=event.namespace?
new RegExp("(^|\\.)"+namespaces.join("\\.(?:.*\\.|)")+"(\\.|$)"):
null;
event.result=undefined;
if(!event.target){
event.target=elem;
}
data=data==null?
[event]:
jQuery.makeArray(data,[event]);
special=jQuery.event.special[type]||{};
if(!onlyHandlers&&special.trigger&&special.trigger.apply(elem,data)===false){
return;
}
if(!onlyHandlers&&!special.noBubble&&!isWindow(elem)){
bubbleType=special.delegateType||type;
if(!rfocusMorph.test(bubbleType+type)){
cur=cur.parentNode;
}
for(;cur;cur=cur.parentNode){
eventPath.push(cur);
tmp=cur;
}
if(tmp===(elem.ownerDocument||document)){
eventPath.push(tmp.defaultView||tmp.parentWindow||window);
}
}
i=0;
while((cur=eventPath[i++])&&!event.isPropagationStopped()){
lastElement=cur;
event.type=i>1?
bubbleType:
special.bindType||type;
handle=(dataPriv.get(cur,"events")||Object.create(null))[event.type]&&
dataPriv.get(cur,"handle");
if(handle){
handle.apply(cur,data);
}
handle=ontype&&cur[ontype];
if(handle&&handle.apply&&acceptData(cur)){
event.result=handle.apply(cur,data);
if(event.result===false){
event.preventDefault();
}
}
}
event.type=type;
if(!onlyHandlers&&!event.isDefaultPrevented()){
if((!special._default||
special._default.apply(eventPath.pop(),data)===false)&&
acceptData(elem)){
if(ontype&&isFunction(elem[type])&&!isWindow(elem)){
tmp=elem[ontype];
if(tmp){
elem[ontype]=null;
}
jQuery.event.triggered=type;
if(event.isPropagationStopped()){
lastElement.addEventListener(type,stopPropagationCallback);
}
elem[type]();
if(event.isPropagationStopped()){
lastElement.removeEventListener(type,stopPropagationCallback);
}
jQuery.event.triggered=undefined;
if(tmp){
elem[ontype]=tmp;
}
}
}
}
return event.result;
},
simulate:function(type,elem,event){
var e=jQuery.extend(
new jQuery.Event(),
event,
{
type:type,
isSimulated:true
}
);
jQuery.event.trigger(e,null,elem);
}
});
jQuery.fn.extend({
trigger:function(type,data){
return this.each(function(){
jQuery.event.trigger(type,data,this);
});
},
triggerHandler:function(type,data){
var elem=this[0];
if(elem){
return jQuery.event.trigger(type,data,elem,true);
}
}
});
var
rbracket=/\[\]$/,
rCRLF=/\r?\n/g,
rsubmitterTypes=/^(?:submit|button|image|reset|file)$/i,
rsubmittable=/^(?:input|select|textarea|keygen)/i;
function buildParams(prefix,obj,traditional,add){
var name;
if(Array.isArray(obj)){
jQuery.each(obj,function(i,v){
if(traditional||rbracket.test(prefix)){
add(prefix,v);
}else{
buildParams(
prefix+"["+(typeof v==="object"&&v!=null?i:"")+"]",
v,
traditional,
add
);
}
});
}else if(!traditional&&toType(obj)==="object"){
for(name in obj){
buildParams(prefix+"["+name+"]",obj[name],traditional,add);
}
}else{
add(prefix,obj);
}
}
jQuery.param=function(a,traditional){
var prefix,
s=[],
add=function(key,valueOrFunction){
var value=isFunction(valueOrFunction)?
valueOrFunction():
valueOrFunction;
s[s.length]=encodeURIComponent(key)+"="+
encodeURIComponent(value==null?"":value);
};
if(a==null){
return"";
}
if(Array.isArray(a)||(a.jquery&&!jQuery.isPlainObject(a))){
jQuery.each(a,function(){
add(this.name,this.value);
});
}else{
for(prefix in a){
buildParams(prefix,a[prefix],traditional,add);
}
}
return s.join("&");
};
jQuery.fn.extend({
serialize:function(){
return jQuery.param(this.serializeArray());
},
serializeArray:function(){
return this.map(function(){
var elements=jQuery.prop(this,"elements");
return elements?jQuery.makeArray(elements):this;
}).filter(function(){
var type=this.type;
return this.name&&!jQuery(this).is(":disabled")&&
rsubmittable.test(this.nodeName)&&!rsubmitterTypes.test(type)&&
(this.checked||!rcheckableType.test(type));
}).map(function(_i,elem){
var val=jQuery(this).val();
if(val==null){
return null;
}
if(Array.isArray(val)){
return jQuery.map(val,function(val){
return{name:elem.name,value:val.replace(rCRLF,"\r\n")};
});
}
return{name:elem.name,value:val.replace(rCRLF,"\r\n")};
}).get();
}
});
var
r20=/%20/g,
rhash=/#.*$/,
rantiCache=/([?&])_=[^&]*/,
rheaders=/^(.*?):[ \t]*([^\r\n]*)$/mg,
rlocalProtocol=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
rnoContent=/^(?:GET|HEAD)$/,
rprotocol=/^\/\//,
prefilters={},
transports={},
allTypes="*/".concat("*"),
originAnchor=document.createElement("a");
originAnchor.href=location.href;
function addToPrefiltersOrTransports(structure){
return function(dataTypeExpression,func){
if(typeof dataTypeExpression!=="string"){
func=dataTypeExpression;
dataTypeExpression="*";
}
var dataType,
i=0,
dataTypes=dataTypeExpression.toLowerCase().match(rnothtmlwhite)||[];
if(isFunction(func)){
while((dataType=dataTypes[i++])){
if(dataType[0]==="+"){
dataType=dataType.slice(1)||"*";
(structure[dataType]=structure[dataType]||[]).unshift(func);
}else{
(structure[dataType]=structure[dataType]||[]).push(func);
}
}
}
};
}
function inspectPrefiltersOrTransports(structure,options,originalOptions,jqXHR){
var inspected={},
seekingTransport=(structure===transports);
function inspect(dataType){
var selected;
inspected[dataType]=true;
jQuery.each(structure[dataType]||[],function(_,prefilterOrFactory){
var dataTypeOrTransport=prefilterOrFactory(options,originalOptions,jqXHR);
if(typeof dataTypeOrTransport==="string"&&
!seekingTransport&&!inspected[dataTypeOrTransport]){
options.dataTypes.unshift(dataTypeOrTransport);
inspect(dataTypeOrTransport);
return false;
}else if(seekingTransport){
return!(selected=dataTypeOrTransport);
}
});
return selected;
}
return inspect(options.dataTypes[0])||!inspected["*"]&&inspect("*");
}
function ajaxExtend(target,src){
var key,deep,
flatOptions=jQuery.ajaxSettings.flatOptions||{};
for(key in src){
if(src[key]!==undefined){
(flatOptions[key]?target:(deep||(deep={})))[key]=src[key];
}
}
if(deep){
jQuery.extend(true,target,deep);
}
return target;
}
function ajaxHandleResponses(s,jqXHR,responses){
var ct,type,finalDataType,firstDataType,
contents=s.contents,
dataTypes=s.dataTypes;
while(dataTypes[0]==="*"){
dataTypes.shift();
if(ct===undefined){
ct=s.mimeType||jqXHR.getResponseHeader("Content-Type");
}
}
if(ct){
for(type in contents){
if(contents[type]&&contents[type].test(ct)){
dataTypes.unshift(type);
break;
}
}
}
if(dataTypes[0]in responses){
finalDataType=dataTypes[0];
}else{
for(type in responses){
if(!dataTypes[0]||s.converters[type+" "+dataTypes[0]]){
finalDataType=type;
break;
}
if(!firstDataType){
firstDataType=type;
}
}
finalDataType=finalDataType||firstDataType;
}
if(finalDataType){
if(finalDataType!==dataTypes[0]){
dataTypes.unshift(finalDataType);
}
return responses[finalDataType];
}
}
function ajaxConvert(s,response,jqXHR,isSuccess){
var conv2,current,conv,tmp,prev,
converters={},
dataTypes=s.dataTypes.slice();
if(dataTypes[1]){
for(conv in s.converters){
converters[conv.toLowerCase()]=s.converters[conv];
}
}
current=dataTypes.shift();
while(current){
if(s.responseFields[current]){
jqXHR[s.responseFields[current]]=response;
}
if(!prev&&isSuccess&&s.dataFilter){
response=s.dataFilter(response,s.dataType);
}
prev=current;
current=dataTypes.shift();
if(current){
if(current==="*"){
current=prev;
}else if(prev!=="*"&&prev!==current){
conv=converters[prev+" "+current]||converters["* "+current];
if(!conv){
for(conv2 in converters){
tmp=conv2.split(" ");
if(tmp[1]===current){
conv=converters[prev+" "+tmp[0]]||
converters["* "+tmp[0]];
if(conv){
if(conv===true){
conv=converters[conv2];
}else if(converters[conv2]!==true){
current=tmp[0];
dataTypes.unshift(tmp[1]);
}
break;
}
}
}
}
if(conv!==true){
if(conv&&s.throws){
response=conv(response);
}else{
try{
response=conv(response);
}catch(e){
return{
state:"parsererror",
error:conv?e:"No conversion from "+prev+" to "+current
};
}
}
}
}
}
}
return{state:"success",data:response};
}
jQuery.extend({
active:0,
lastModified:{},
etag:{},
ajaxSettings:{
url:location.href,
type:"GET",
isLocal:rlocalProtocol.test(location.protocol),
global:true,
processData:true,
async:true,
contentType:"application/x-www-form-urlencoded; charset=UTF-8",
accepts:{
"*":allTypes,
text:"text/plain",
html:"text/html",
xml:"application/xml, text/xml",
json:"application/json, text/javascript"
},
contents:{
xml:/\bxml\b/,
html:/\bhtml/,
json:/\bjson\b/
},
responseFields:{
xml:"responseXML",
text:"responseText",
json:"responseJSON"
},
converters:{
"* text":String,
"text html":true,
"text json":JSON.parse,
"text xml":jQuery.parseXML
},
flatOptions:{
url:true,
context:true
}
},
ajaxSetup:function(target,settings){
return settings?
ajaxExtend(ajaxExtend(target,jQuery.ajaxSettings),settings):
ajaxExtend(jQuery.ajaxSettings,target);
},
ajaxPrefilter:addToPrefiltersOrTransports(prefilters),
ajaxTransport:addToPrefiltersOrTransports(transports),
ajax:function(url,options){
if(typeof url==="object"){
options=url;
url=undefined;
}
options=options||{};
var transport,
cacheURL,
responseHeadersString,
responseHeaders,
timeoutTimer,
urlAnchor,
completed,
fireGlobals,
i,
uncached,
s=jQuery.ajaxSetup({},options),
callbackContext=s.context||s,
globalEventContext=s.context&&
(callbackContext.nodeType||callbackContext.jquery)?
jQuery(callbackContext):
jQuery.event,
deferred=jQuery.Deferred(),
completeDeferred=jQuery.Callbacks("once memory"),
statusCode=s.statusCode||{},
requestHeaders={},
requestHeadersNames={},
strAbort="canceled",
jqXHR={
readyState:0,
getResponseHeader:function(key){
var match;
if(completed){
if(!responseHeaders){
responseHeaders={};
while((match=rheaders.exec(responseHeadersString))){
responseHeaders[match[1].toLowerCase()+" "]=
(responseHeaders[match[1].toLowerCase()+" "]||[])
.concat(match[2]);
}
}
match=responseHeaders[key.toLowerCase()+" "];
}
return match==null?null:match.join(", ");
},
getAllResponseHeaders:function(){
return completed?responseHeadersString:null;
},
setRequestHeader:function(name,value){
if(completed==null){
name=requestHeadersNames[name.toLowerCase()]=
requestHeadersNames[name.toLowerCase()]||name;
requestHeaders[name]=value;
}
return this;
},
overrideMimeType:function(type){
if(completed==null){
s.mimeType=type;
}
return this;
},
statusCode:function(map){
var code;
if(map){
if(completed){
jqXHR.always(map[jqXHR.status]);
}else{
for(code in map){
statusCode[code]=[statusCode[code],map[code]];
}
}
}
return this;
},
abort:function(statusText){
var finalText=statusText||strAbort;
if(transport){
transport.abort(finalText);
}
done(0,finalText);
return this;
}
};
deferred.promise(jqXHR);
s.url=((url||s.url||location.href)+"")
.replace(rprotocol,location.protocol+"//");
s.type=options.method||options.type||s.method||s.type;
s.dataTypes=(s.dataType||"*").toLowerCase().match(rnothtmlwhite)||[""];
if(s.crossDomain==null){
urlAnchor=document.createElement("a");
try{
urlAnchor.href=s.url;
urlAnchor.href=urlAnchor.href;
s.crossDomain=originAnchor.protocol+"//"+originAnchor.host!==
urlAnchor.protocol+"//"+urlAnchor.host;
}catch(e){
s.crossDomain=true;
}
}
if(s.data&&s.processData&&typeof s.data!=="string"){
s.data=jQuery.param(s.data,s.traditional);
}
inspectPrefiltersOrTransports(prefilters,s,options,jqXHR);
if(completed){
return jqXHR;
}
fireGlobals=jQuery.event&&s.global;
if(fireGlobals&&jQuery.active++===0){
jQuery.event.trigger("ajaxStart");
}
s.type=s.type.toUpperCase();
s.hasContent=!rnoContent.test(s.type);
cacheURL=s.url.replace(rhash,"");
if(!s.hasContent){
uncached=s.url.slice(cacheURL.length);
if(s.data&&(s.processData||typeof s.data==="string")){
cacheURL+=(rquery.test(cacheURL)?"&":"?")+s.data;
delete s.data;
}
if(s.cache===false){
cacheURL=cacheURL.replace(rantiCache,"$1");
uncached=(rquery.test(cacheURL)?"&":"?")+"_="+(nonce.guid++)+
uncached;
}
s.url=cacheURL+uncached;
}else if(s.data&&s.processData&&
(s.contentType||"").indexOf("application/x-www-form-urlencoded")===0){
s.data=s.data.replace(r20,"+");
}
if(s.ifModified){
if(jQuery.lastModified[cacheURL]){
jqXHR.setRequestHeader("If-Modified-Since",jQuery.lastModified[cacheURL]);
}
if(jQuery.etag[cacheURL]){
jqXHR.setRequestHeader("If-None-Match",jQuery.etag[cacheURL]);
}
}
if(s.data&&s.hasContent&&s.contentType!==false||options.contentType){
jqXHR.setRequestHeader("Content-Type",s.contentType);
}
jqXHR.setRequestHeader(
"Accept",
s.dataTypes[0]&&s.accepts[s.dataTypes[0]]?
s.accepts[s.dataTypes[0]]+
(s.dataTypes[0]!=="*"?", "+allTypes+"; q=0.01":""):
s.accepts["*"]
);
for(i in s.headers){
jqXHR.setRequestHeader(i,s.headers[i]);
}
if(s.beforeSend&&
(s.beforeSend.call(callbackContext,jqXHR,s)===false||completed)){
return jqXHR.abort();
}
strAbort="abort";
completeDeferred.add(s.complete);
jqXHR.done(s.success);
jqXHR.fail(s.error);
transport=inspectPrefiltersOrTransports(transports,s,options,jqXHR);
if(!transport){
done(-1,"No Transport");
}else{
jqXHR.readyState=1;
if(fireGlobals){
globalEventContext.trigger("ajaxSend",[jqXHR,s]);
}
if(completed){
return jqXHR;
}
if(s.async&&s.timeout>0){
timeoutTimer=window.setTimeout(function(){
jqXHR.abort("timeout");
},s.timeout);
}
try{
completed=false;
transport.send(requestHeaders,done);
}catch(e){
if(completed){
throw e;
}
done(-1,e);
}
}
function done(status,nativeStatusText,responses,headers){
var isSuccess,success,error,response,modified,
statusText=nativeStatusText;
if(completed){
return;
}
completed=true;
if(timeoutTimer){
window.clearTimeout(timeoutTimer);
}
transport=undefined;
responseHeadersString=headers||"";
jqXHR.readyState=status>0?4:0;
isSuccess=status>=200&&status<300||status===304;
if(responses){
response=ajaxHandleResponses(s,jqXHR,responses);
}
if(!isSuccess&&
jQuery.inArray("script",s.dataTypes)>-1&&
jQuery.inArray("json",s.dataTypes)<0){
s.converters["text script"]=function(){};
}
response=ajaxConvert(s,response,jqXHR,isSuccess);
if(isSuccess){
if(s.ifModified){
modified=jqXHR.getResponseHeader("Last-Modified");
if(modified){
jQuery.lastModified[cacheURL]=modified;
}
modified=jqXHR.getResponseHeader("etag");
if(modified){
jQuery.etag[cacheURL]=modified;
}
}
if(status===204||s.type==="HEAD"){
statusText="nocontent";
}else if(status===304){
statusText="notmodified";
}else{
statusText=response.state;
success=response.data;
error=response.error;
isSuccess=!error;
}
}else{
error=statusText;
if(status||!statusText){
statusText="error";
if(status<0){
status=0;
}
}
}
jqXHR.status=status;
jqXHR.statusText=(nativeStatusText||statusText)+"";
if(isSuccess){
deferred.resolveWith(callbackContext,[success,statusText,jqXHR]);
}else{
deferred.rejectWith(callbackContext,[jqXHR,statusText,error]);
}
jqXHR.statusCode(statusCode);
statusCode=undefined;
if(fireGlobals){
globalEventContext.trigger(isSuccess?"ajaxSuccess":"ajaxError",
[jqXHR,s,isSuccess?success:error]);
}
completeDeferred.fireWith(callbackContext,[jqXHR,statusText]);
if(fireGlobals){
globalEventContext.trigger("ajaxComplete",[jqXHR,s]);
if(!(--jQuery.active)){
jQuery.event.trigger("ajaxStop");
}
}
}
return jqXHR;
},
getJSON:function(url,data,callback){
return jQuery.get(url,data,callback,"json");
},
getScript:function(url,callback){
return jQuery.get(url,undefined,callback,"script");
}
});
jQuery.each(["get","post"],function(_i,method){
jQuery[method]=function(url,data,callback,type){
if(isFunction(data)){
type=type||callback;
callback=data;
data=undefined;
}
return jQuery.ajax(jQuery.extend({
url:url,
type:method,
dataType:type,
data:data,
success:callback
},jQuery.isPlainObject(url)&&url));
};
});
jQuery.ajaxPrefilter(function(s){
var i;
for(i in s.headers){
if(i.toLowerCase()==="content-type"){
s.contentType=s.headers[i]||"";
}
}
});
jQuery._evalUrl=function(url,options,doc){
return jQuery.ajax({
url:url,
type:"GET",
dataType:"script",
cache:true,
async:false,
global:false,
converters:{
"text script":function(){}
},
dataFilter:function(response){
jQuery.globalEval(response,options,doc);
}
});
};
jQuery.fn.extend({
wrapAll:function(html){
var wrap;
if(this[0]){
if(isFunction(html)){
html=html.call(this[0]);
}
wrap=jQuery(html,this[0].ownerDocument).eq(0).clone(true);
if(this[0].parentNode){
wrap.insertBefore(this[0]);
}
wrap.map(function(){
var elem=this;
while(elem.firstElementChild){
elem=elem.firstElementChild;
}
return elem;
}).append(this);
}
return this;
},
wrapInner:function(html){
if(isFunction(html)){
return this.each(function(i){
jQuery(this).wrapInner(html.call(this,i));
});
}
return this.each(function(){
var self=jQuery(this),
contents=self.contents();
if(contents.length){
contents.wrapAll(html);
}else{
self.append(html);
}
});
},
wrap:function(html){
var htmlIsFunction=isFunction(html);
return this.each(function(i){
jQuery(this).wrapAll(htmlIsFunction?html.call(this,i):html);
});
},
unwrap:function(selector){
this.parent(selector).not("body").each(function(){
jQuery(this).replaceWith(this.childNodes);
});
return this;
}
});
jQuery.expr.pseudos.hidden=function(elem){
return!jQuery.expr.pseudos.visible(elem);
};
jQuery.expr.pseudos.visible=function(elem){
return!!(elem.offsetWidth||elem.offsetHeight||elem.getClientRects().length);
};
jQuery.ajaxSettings.xhr=function(){
try{
return new window.XMLHttpRequest();
}catch(e){}
};
var xhrSuccessStatus={
0:200,
1223:204
},
xhrSupported=jQuery.ajaxSettings.xhr();
support.cors=!!xhrSupported&&("withCredentials"in xhrSupported);
support.ajax=xhrSupported=!!xhrSupported;
jQuery.ajaxTransport(function(options){
var callback,errorCallback;
if(support.cors||xhrSupported&&!options.crossDomain){
return{
send:function(headers,complete){
var i,
xhr=options.xhr();
xhr.open(
options.type,
options.url,
options.async,
options.username,
options.password
);
if(options.xhrFields){
for(i in options.xhrFields){
xhr[i]=options.xhrFields[i];
}
}
if(options.mimeType&&xhr.overrideMimeType){
xhr.overrideMimeType(options.mimeType);
}
if(!options.crossDomain&&!headers["X-Requested-With"]){
headers["X-Requested-With"]="XMLHttpRequest";
}
for(i in headers){
xhr.setRequestHeader(i,headers[i]);
}
callback=function(type){
return function(){
if(callback){
callback=errorCallback=xhr.onload=
xhr.onerror=xhr.onabort=xhr.ontimeout=
xhr.onreadystatechange=null;
if(type==="abort"){
xhr.abort();
}else if(type==="error"){
if(typeof xhr.status!=="number"){
complete(0,"error");
}else{
complete(
xhr.status,
xhr.statusText
);
}
}else{
complete(
xhrSuccessStatus[xhr.status]||xhr.status,
xhr.statusText,
(xhr.responseType||"text")!=="text"||
typeof xhr.responseText!=="string"?
{binary:xhr.response}:
{text:xhr.responseText},
xhr.getAllResponseHeaders()
);
}
}
};
};
xhr.onload=callback();
errorCallback=xhr.onerror=xhr.ontimeout=callback("error");
if(xhr.onabort!==undefined){
xhr.onabort=errorCallback;
}else{
xhr.onreadystatechange=function(){
if(xhr.readyState===4){
window.setTimeout(function(){
if(callback){
errorCallback();
}
});
}
};
}
callback=callback("abort");
try{
xhr.send(options.hasContent&&options.data||null);
}catch(e){
if(callback){
throw e;
}
}
},
abort:function(){
if(callback){
callback();
}
}
};
}
});
jQuery.ajaxPrefilter(function(s){
if(s.crossDomain){
s.contents.script=false;
}
});
jQuery.ajaxSetup({
accepts:{
script:"text/javascript, application/javascript, "+
"application/ecmascript, application/x-ecmascript"
},
contents:{
script:/\b(?:java|ecma)script\b/
},
converters:{
"text script":function(text){
jQuery.globalEval(text);
return text;
}
}
});
jQuery.ajaxPrefilter("script",function(s){
if(s.cache===undefined){
s.cache=false;
}
if(s.crossDomain){
s.type="GET";
}
});
jQuery.ajaxTransport("script",function(s){
if(s.crossDomain||s.scriptAttrs){
var script,callback;
return{
send:function(_,complete){
script=jQuery("<script>")
.attr(s.scriptAttrs||{})
.prop({charset:s.scriptCharset,src:s.url})
.on("load error",callback=function(evt){
script.remove();
callback=null;
if(evt){
complete(evt.type==="error"?404:200,evt.type);
}
});
document.head.appendChild(script[0]);
},
abort:function(){
if(callback){
callback();
}
}
};
}
});
var oldCallbacks=[],
rjsonp=/(=)\?(?=&|$)|\?\?/;
jQuery.ajaxSetup({
jsonp:"callback",
jsonpCallback:function(){
var callback=oldCallbacks.pop()||(jQuery.expando+"_"+(nonce.guid++));
this[callback]=true;
return callback;
}
});
jQuery.ajaxPrefilter("json jsonp",function(s,originalSettings,jqXHR){
var callbackName,overwritten,responseContainer,
jsonProp=s.jsonp!==false&&(rjsonp.test(s.url)?
"url":
typeof s.data==="string"&&
(s.contentType||"")
.indexOf("application/x-www-form-urlencoded")===0&&
rjsonp.test(s.data)&&"data"
);
if(jsonProp||s.dataTypes[0]==="jsonp"){
callbackName=s.jsonpCallback=isFunction(s.jsonpCallback)?
s.jsonpCallback():
s.jsonpCallback;
if(jsonProp){
s[jsonProp]=s[jsonProp].replace(rjsonp,"$1"+callbackName);
}else if(s.jsonp!==false){
s.url+=(rquery.test(s.url)?"&":"?")+s.jsonp+"="+callbackName;
}
s.converters["script json"]=function(){
if(!responseContainer){
jQuery.error(callbackName+" was not called");
}
return responseContainer[0];
};
s.dataTypes[0]="json";
overwritten=window[callbackName];
window[callbackName]=function(){
responseContainer=arguments;
};
jqXHR.always(function(){
if(overwritten===undefined){
jQuery(window).removeProp(callbackName);
}else{
window[callbackName]=overwritten;
}
if(s[callbackName]){
s.jsonpCallback=originalSettings.jsonpCallback;
oldCallbacks.push(callbackName);
}
if(responseContainer&&isFunction(overwritten)){
overwritten(responseContainer[0]);
}
responseContainer=overwritten=undefined;
});
return"script";
}
});
support.createHTMLDocument=(function(){
var body=document.implementation.createHTMLDocument("").body;
body.innerHTML="<form></form><form></form>";
return body.childNodes.length===2;
})();
jQuery.parseHTML=function(data,context,keepScripts){
if(typeof data!=="string"){
return[];
}
if(typeof context==="boolean"){
keepScripts=context;
context=false;
}
var base,parsed,scripts;
if(!context){
if(support.createHTMLDocument){
context=document.implementation.createHTMLDocument("");
base=context.createElement("base");
base.href=document.location.href;
context.head.appendChild(base);
}else{
context=document;
}
}
parsed=rsingleTag.exec(data);
scripts=!keepScripts&&[];
if(parsed){
return[context.createElement(parsed[1])];
}
parsed=buildFragment([data],context,scripts);
if(scripts&&scripts.length){
jQuery(scripts).remove();
}
return jQuery.merge([],parsed.childNodes);
};
jQuery.fn.load=function(url,params,callback){
var selector,type,response,
self=this,
off=url.indexOf(" ");
if(off>-1){
selector=stripAndCollapse(url.slice(off));
url=url.slice(0,off);
}
if(isFunction(params)){
callback=params;
params=undefined;
}else if(params&&typeof params==="object"){
type="POST";
}
if(self.length>0){
jQuery.ajax({
url:url,
type:type||"GET",
dataType:"html",
data:params
}).done(function(responseText){
response=arguments;
self.html(selector?
jQuery("<div>").append(jQuery.parseHTML(responseText)).find(selector):
responseText);
}).always(callback&&function(jqXHR,status){
self.each(function(){
callback.apply(this,response||[jqXHR.responseText,status,jqXHR]);
});
});
}
return this;
};
jQuery.expr.pseudos.animated=function(elem){
return jQuery.grep(jQuery.timers,function(fn){
return elem===fn.elem;
}).length;
};
jQuery.offset={
setOffset:function(elem,options,i){
var curPosition,curLeft,curCSSTop,curTop,curOffset,curCSSLeft,calculatePosition,
position=jQuery.css(elem,"position"),
curElem=jQuery(elem),
props={};
if(position==="static"){
elem.style.position="relative";
}
curOffset=curElem.offset();
curCSSTop=jQuery.css(elem,"top");
curCSSLeft=jQuery.css(elem,"left");
calculatePosition=(position==="absolute"||position==="fixed")&&
(curCSSTop+curCSSLeft).indexOf("auto")>-1;
if(calculatePosition){
curPosition=curElem.position();
curTop=curPosition.top;
curLeft=curPosition.left;
}else{
curTop=parseFloat(curCSSTop)||0;
curLeft=parseFloat(curCSSLeft)||0;
}
if(isFunction(options)){
options=options.call(elem,i,jQuery.extend({},curOffset));
}
if(options.top!=null){
props.top=(options.top-curOffset.top)+curTop;
}
if(options.left!=null){
props.left=(options.left-curOffset.left)+curLeft;
}
if("using"in options){
options.using.call(elem,props);
}else{
curElem.css(props);
}
}
};
jQuery.fn.extend({
offset:function(options){
if(arguments.length){
return options===undefined?
this:
this.each(function(i){
jQuery.offset.setOffset(this,options,i);
});
}
var rect,win,
elem=this[0];
if(!elem){
return;
}
if(!elem.getClientRects().length){
return{top:0,left:0};
}
rect=elem.getBoundingClientRect();
win=elem.ownerDocument.defaultView;
return{
top:rect.top+win.pageYOffset,
left:rect.left+win.pageXOffset
};
},
position:function(){
if(!this[0]){
return;
}
var offsetParent,offset,doc,
elem=this[0],
parentOffset={top:0,left:0};
if(jQuery.css(elem,"position")==="fixed"){
offset=elem.getBoundingClientRect();
}else{
offset=this.offset();
doc=elem.ownerDocument;
offsetParent=elem.offsetParent||doc.documentElement;
while(offsetParent&&
(offsetParent===doc.body||offsetParent===doc.documentElement)&&
jQuery.css(offsetParent,"position")==="static"){
offsetParent=offsetParent.parentNode;
}
if(offsetParent&&offsetParent!==elem&&offsetParent.nodeType===1){
parentOffset=jQuery(offsetParent).offset();
parentOffset.top+=jQuery.css(offsetParent,"borderTopWidth",true);
parentOffset.left+=jQuery.css(offsetParent,"borderLeftWidth",true);
}
}
return{
top:offset.top-parentOffset.top-jQuery.css(elem,"marginTop",true),
left:offset.left-parentOffset.left-jQuery.css(elem,"marginLeft",true)
};
},
offsetParent:function(){
return this.map(function(){
var offsetParent=this.offsetParent;
while(offsetParent&&jQuery.css(offsetParent,"position")==="static"){
offsetParent=offsetParent.offsetParent;
}
return offsetParent||documentElement;
});
}
});
jQuery.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(method,prop){
var top="pageYOffset"===prop;
jQuery.fn[method]=function(val){
return access(this,function(elem,method,val){
var win;
if(isWindow(elem)){
win=elem;
}else if(elem.nodeType===9){
win=elem.defaultView;
}
if(val===undefined){
return win?win[prop]:elem[method];
}
if(win){
win.scrollTo(
!top?val:win.pageXOffset,
top?val:win.pageYOffset
);
}else{
elem[method]=val;
}
},method,val,arguments.length);
};
});
jQuery.each(["top","left"],function(_i,prop){
jQuery.cssHooks[prop]=addGetHookIf(support.pixelPosition,
function(elem,computed){
if(computed){
computed=curCSS(elem,prop);
return rnumnonpx.test(computed)?
jQuery(elem).position()[prop]+"px":
computed;
}
}
);
});
jQuery.each({Height:"height",Width:"width"},function(name,type){
jQuery.each({
padding:"inner"+name,
content:type,
"":"outer"+name
},function(defaultExtra,funcName){
jQuery.fn[funcName]=function(margin,value){
var chainable=arguments.length&&(defaultExtra||typeof margin!=="boolean"),
extra=defaultExtra||(margin===true||value===true?"margin":"border");
return access(this,function(elem,type,value){
var doc;
if(isWindow(elem)){
return funcName.indexOf("outer")===0?
elem["inner"+name]:
elem.document.documentElement["client"+name];
}
if(elem.nodeType===9){
doc=elem.documentElement;
return Math.max(
elem.body["scroll"+name],doc["scroll"+name],
elem.body["offset"+name],doc["offset"+name],
doc["client"+name]
);
}
return value===undefined?
jQuery.css(elem,type,extra):
jQuery.style(elem,type,value,extra);
},type,chainable?margin:undefined,chainable);
};
});
});
jQuery.each([
"ajaxStart",
"ajaxStop",
"ajaxComplete",
"ajaxError",
"ajaxSuccess",
"ajaxSend"
],function(_i,type){
jQuery.fn[type]=function(fn){
return this.on(type,fn);
};
});
jQuery.fn.extend({
bind:function(types,data,fn){
return this.on(types,null,data,fn);
},
unbind:function(types,fn){
return this.off(types,null,fn);
},
delegate:function(selector,types,data,fn){
return this.on(types,selector,data,fn);
},
undelegate:function(selector,types,fn){
return arguments.length===1?
this.off(selector,"**"):
this.off(types,selector||"**",fn);
},
hover:function(fnOver,fnOut){
return this
.on("mouseenter",fnOver)
.on("mouseleave",fnOut||fnOver);
}
});
jQuery.each(
("blur focus focusin focusout resize scroll click dblclick "+
"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave "+
"change select submit keydown keypress keyup contextmenu").split(" "),
function(_i,name){
jQuery.fn[name]=function(data,fn){
return arguments.length>0?
this.on(name,null,data,fn):
this.trigger(name);
};
}
);
var rtrim=/^[\s\uFEFF\xA0]+|([^\s\uFEFF\xA0])[\s\uFEFF\xA0]+$/g;
jQuery.proxy=function(fn,context){
var tmp,args,proxy;
if(typeof context==="string"){
tmp=fn[context];
context=fn;
fn=tmp;
}
if(!isFunction(fn)){
return undefined;
}
args=slice.call(arguments,2);
proxy=function(){
return fn.apply(context||this,args.concat(slice.call(arguments)));
};
proxy.guid=fn.guid=fn.guid||jQuery.guid++;
return proxy;
};
jQuery.holdReady=function(hold){
if(hold){
jQuery.readyWait++;
}else{
jQuery.ready(true);
}
};
jQuery.isArray=Array.isArray;
jQuery.parseJSON=JSON.parse;
jQuery.nodeName=nodeName;
jQuery.isFunction=isFunction;
jQuery.isWindow=isWindow;
jQuery.camelCase=camelCase;
jQuery.type=toType;
jQuery.now=Date.now;
jQuery.isNumeric=function(obj){
var type=jQuery.type(obj);
return(type==="number"||type==="string")&&
!isNaN(obj-parseFloat(obj));
};
jQuery.trim=function(text){
return text==null?
"":
(text+"").replace(rtrim,"$1");
};
if(typeof define==="function"&&define.amd){
define("jquery",[],function(){
return jQuery;
});
}
var
_jQuery=window.jQuery,
_$=window.$;
jQuery.noConflict=function(deep){
if(window.$===jQuery){
window.$=_$;
}
if(deep&&window.jQuery===jQuery){
window.jQuery=_jQuery;
}
return jQuery;
};
if(typeof noGlobal==="undefined"){
window.jQuery=window.$=jQuery;
}
return jQuery;
});


/* ../prive/javascript/jquery.form.js?1733220530 */

(function(factory){
if(typeof define==='function'&&define.amd){
define(['jquery'],factory);
}else if(typeof module==='object'&&module.exports){
module.exports=function(root,jQuery){
if(typeof jQuery==='undefined'){
if(typeof window!=='undefined'){
jQuery=require('jquery');
}
else{
jQuery=require('jquery')(root);
}
}
factory(jQuery);
return jQuery;
};
}else{
factory(jQuery);
}
}(function($){
'use strict';
var rCRLF=/\r?\n/g;
var feature={};
feature.fileapi=$('<input type="file">').get(0).files!==undefined;
feature.formdata=(typeof window.FormData!=='undefined');
var hasProp=!!$.fn.prop;
$.fn.attr2=function(){
if(!hasProp){
return this.attr.apply(this,arguments);
}
var val=this.prop.apply(this,arguments);
if((val&&val.jquery)||typeof val==='string'){
return val;
}
return this.attr.apply(this,arguments);
};
$.fn.ajaxSubmit=function(options,data,dataType,onSuccess){
if(!this.length){
log('ajaxSubmit: skipping submit process - no element selected');
return this;
}
var method,action,url,isMsie,iframeSrc,$form=this;
if(typeof options==='function'){
options={success:options};
}else if(typeof options==='string'||(options===false&&arguments.length>0)){
options={
'url':options,
'data':data,
'dataType':dataType
};
if(typeof onSuccess==='function'){
options.success=onSuccess;
}
}else if(typeof options==='undefined'){
options={};
}
method=options.method||options.type||this.attr2('method');
action=options.url||this.attr2('action');
url=(typeof action==='string')?$.trim(action):'';
url=url||window.location.href||'';
if(url){
url=(url.match(/^([^#]+)/)||[])[1];
}
isMsie=/(MSIE|Trident)/.test(navigator.userAgent||'');
iframeSrc=(isMsie&&/^https/i.test(window.location.href||''))?'javascript:false':'about:blank';
options=$.extend(true,{
url:url,
success:$.ajaxSettings.success,
type:method||$.ajaxSettings.type,
iframeSrc:iframeSrc
},options);
var veto={};
this.trigger('form-pre-serialize',[this,options,veto]);
if(veto.veto){
log('ajaxSubmit: submit vetoed via form-pre-serialize trigger');
return this;
}
if(options.beforeSerialize&&options.beforeSerialize(this,options)===false){
log('ajaxSubmit: submit aborted via beforeSerialize callback');
return this;
}
var traditional=options.traditional;
if(typeof traditional==='undefined'){
traditional=$.ajaxSettings.traditional;
}
var elements=[];
var qx,a=this.formToArray(options.semantic,elements,options.filtering);
if(options.data){
var optionsData=$.isFunction(options.data)?options.data(a):options.data;
options.extraData=optionsData;
qx=$.param(optionsData,traditional);
}
if(options.beforeSubmit&&options.beforeSubmit(a,this,options)===false){
log('ajaxSubmit: submit aborted via beforeSubmit callback');
return this;
}
this.trigger('form-submit-validate',[a,this,options,veto]);
if(veto.veto){
log('ajaxSubmit: submit vetoed via form-submit-validate trigger');
return this;
}
var q=$.param(a,traditional);
if(qx){
q=(q?(q+'&'+qx):qx);
}
if(options.type.toUpperCase()==='GET'){
options.url+=(options.url.indexOf('?')>=0?'&':'?')+q;
options.data=null;
}else{
options.data=q;
}
var callbacks=[];
if(options.resetForm){
callbacks.push(function(){
$form.resetForm();
});
}
if(options.clearForm){
callbacks.push(function(){
$form.clearForm(options.includeHidden);
});
}
if(!options.dataType&&options.target){
var oldSuccess=options.success||function(){};
callbacks.push(function(data,textStatus,jqXHR){
var successArguments=arguments,
fn=options.replaceTarget?'replaceWith':'html';
if(fn=='html'){
data=$.parseHTML($("<div>").text(data).html())
};
$(options.target)[fn](data).each(function(){
oldSuccess.apply(this,successArguments);
});
});
}else if(options.success){
if($.isArray(options.success)){
$.merge(callbacks,options.success);
}else{
callbacks.push(options.success);
}
}
options.success=function(data,status,xhr){
var context=options.context||this;
for(var i=0,max=callbacks.length;i<max;i++){
callbacks[i].apply(context,[data,status,xhr||$form,$form]);
}
};
if(options.error){
var oldError=options.error;
options.error=function(xhr,status,error){
var context=options.context||this;
oldError.apply(context,[xhr,status,error,$form]);
};
}
if(options.complete){
var oldComplete=options.complete;
options.complete=function(xhr,status){
var context=options.context||this;
oldComplete.apply(context,[xhr,status,$form]);
};
}
var fileInputs=$('input[type=file]:enabled',this).filter(function(){
return $(this).val()!=='';
});
var hasFileInputs=fileInputs.length>0;
var mp='multipart/form-data';
var multipart=($form.attr('enctype')===mp||$form.attr('encoding')===mp);
var fileAPI=feature.fileapi&&feature.formdata;
log('fileAPI :'+fileAPI);
var shouldUseFrame=(hasFileInputs||multipart)&&!fileAPI;
var jqxhr;
if(options.iframe!==false&&(options.iframe||shouldUseFrame)){
if(options.closeKeepAlive){
$.get(options.closeKeepAlive,function(){
jqxhr=fileUploadIframe(a);
});
}else{
jqxhr=fileUploadIframe(a);
}
}else if((hasFileInputs||multipart)&&fileAPI){
jqxhr=fileUploadXhr(a);
}else{
jqxhr=$.ajax(options);
}
$form.removeData('jqxhr').data('jqxhr',jqxhr);
for(var k=0;k<elements.length;k++){
elements[k]=null;
}
this.trigger('form-submit-notify',[this,options]);
return this;
function deepSerialize(extraData){
var serialized=$.param(extraData,options.traditional).split('&');
var len=serialized.length;
var result=[];
var i,part;
for(i=0;i<len;i++){
serialized[i]=serialized[i].replace(/\+/g,' ');
part=serialized[i].split('=');
result.push([decodeURIComponent(part[0]),decodeURIComponent(part[1])]);
}
return result;
}
function fileUploadXhr(a){
var formdata=new FormData();
for(var i=0;i<a.length;i++){
formdata.append(a[i].name,a[i].value);
}
if(options.extraData){
var serializedData=deepSerialize(options.extraData);
for(i=0;i<serializedData.length;i++){
if(serializedData[i]){
formdata.append(serializedData[i][0],serializedData[i][1]);
}
}
}
options.data=null;
var s=$.extend(true,{},$.ajaxSettings,options,{
contentType:false,
processData:false,
cache:false,
type:method||'POST'
});
if(options.uploadProgress){
s.xhr=function(){
var xhr=$.ajaxSettings.xhr();
if(xhr.upload){
xhr.upload.addEventListener('progress',function(event){
var percent=0;
var position=event.loaded||event.position;
var total=event.total;
if(event.lengthComputable){
percent=Math.ceil(position/total*100);
}
options.uploadProgress(event,position,total,percent);
},false);
}
return xhr;
};
}
s.data=null;
var beforeSend=s.beforeSend;
s.beforeSend=function(xhr,o){
if(options.formData){
o.data=options.formData;
}else{
o.data=formdata;
}
if(beforeSend){
beforeSend.call(this,xhr,o);
}
};
return $.ajax(s);
}
function fileUploadIframe(a){
var form=$form[0],el,i,s,g,id,$io,io,xhr,sub,n,timedOut,timeoutHandle;
var deferred=$.Deferred();
deferred.abort=function(status){
xhr.abort(status);
};
if(a){
for(i=0;i<elements.length;i++){
el=$(elements[i]);
if(hasProp){
el.prop('disabled',false);
}else{
el.removeAttr('disabled');
}
}
}
s=$.extend(true,{},$.ajaxSettings,options);
s.context=s.context||s;
id='jqFormIO'+new Date().getTime();
var ownerDocument=form.ownerDocument;
var $body=$form.closest('body');
if(s.iframeTarget){
$io=$(s.iframeTarget,ownerDocument);
n=$io.attr2('name');
if(!n){
$io.attr2('name',id);
}else{
id=n;
}
}else{
$io=$('<iframe name="'+id+'" src="'+s.iframeSrc+'">',ownerDocument);
$io.css({position:'absolute',top:'-1000px',left:'-1000px'});
}
io=$io[0];
xhr={
aborted:0,
responseText:null,
responseXML:null,
status:0,
statusText:'n/a',
getAllResponseHeaders:function(){},
getResponseHeader:function(){},
setRequestHeader:function(){},
abort:function(status){
var e=(status==='timeout'?'timeout':'aborted');
log('aborting upload... '+e);
this.aborted=1;
try{
if(io.contentWindow.document.execCommand){
io.contentWindow.document.execCommand('Stop');
}
}catch(ignore){}
$io.attr('src',s.iframeSrc);
xhr.error=e;
if(s.error){
s.error.call(s.context,xhr,e,status);
}
if(g){
$.event.trigger('ajaxError',[xhr,s,e]);
}
if(s.complete){
s.complete.call(s.context,xhr,e);
}
}
};
g=s.global;
if(g&&$.active++===0){
$.event.trigger('ajaxStart');
}
if(g){
$.event.trigger('ajaxSend',[xhr,s]);
}
if(s.beforeSend&&s.beforeSend.call(s.context,xhr,s)===false){
if(s.global){
$.active--;
}
deferred.reject();
return deferred;
}
if(xhr.aborted){
deferred.reject();
return deferred;
}
sub=form.clk;
if(sub){
n=sub.name;
if(n&&!sub.disabled){
s.extraData=s.extraData||{};
s.extraData[n]=sub.value;
if(sub.type==='image'){
s.extraData[n+'.x']=form.clk_x;
s.extraData[n+'.y']=form.clk_y;
}
}
}
var CLIENT_TIMEOUT_ABORT=1;
var SERVER_ABORT=2;
function getDoc(frame){
var doc=null;
try{
if(frame.contentWindow){
doc=frame.contentWindow.document;
}
}catch(err){
log('cannot get iframe.contentWindow document: '+err);
}
if(doc){
return doc;
}
try{
doc=frame.contentDocument?frame.contentDocument:frame.document;
}catch(err){
log('cannot get iframe.contentDocument: '+err);
doc=frame.document;
}
return doc;
}
var csrf_token=$('meta[name=csrf-token]').attr('content');
var csrf_param=$('meta[name=csrf-param]').attr('content');
if(csrf_param&&csrf_token){
s.extraData=s.extraData||{};
s.extraData[csrf_param]=csrf_token;
}
function doSubmit(){
var t=$form.attr2('target'),
a=$form.attr2('action'),
mp='multipart/form-data',
et=$form.attr('enctype')||$form.attr('encoding')||mp;
form.setAttribute('target',id);
if(!method||/post/i.test(method)){
form.setAttribute('method','POST');
}
if(a!==s.url){
form.setAttribute('action',s.url);
}
if(!s.skipEncodingOverride&&(!method||/post/i.test(method))){
$form.attr({
encoding:'multipart/form-data',
enctype:'multipart/form-data'
});
}
if(s.timeout){
timeoutHandle=setTimeout(function(){
timedOut=true;cb(CLIENT_TIMEOUT_ABORT);
},s.timeout);
}
function checkState(){
try{
var state=getDoc(io).readyState;
log('state = '+state);
if(state&&state.toLowerCase()==='uninitialized'){
setTimeout(checkState,50);
}
}catch(e){
log('Server abort: ',e,' (',e.name,')');
cb(SERVER_ABORT);
if(timeoutHandle){
clearTimeout(timeoutHandle);
}
timeoutHandle=undefined;
}
}
var extraInputs=[];
try{
if(s.extraData){
for(var n in s.extraData){
if(s.extraData.hasOwnProperty(n)){
if($.isPlainObject(s.extraData[n])&&s.extraData[n].hasOwnProperty('name')&&s.extraData[n].hasOwnProperty('value')){
extraInputs.push(
$('<input type="hidden" name="'+s.extraData[n].name+'">',ownerDocument).val(s.extraData[n].value)
.appendTo(form)[0]);
}else{
extraInputs.push(
$('<input type="hidden" name="'+n+'">',ownerDocument).val(s.extraData[n])
.appendTo(form)[0]);
}
}
}
}
if(!s.iframeTarget){
$io.appendTo($body);
}
if(io.attachEvent){
io.attachEvent('onload',cb);
}else{
io.addEventListener('load',cb,false);
}
setTimeout(checkState,15);
try{
form.submit();
}catch(err){
var submitFn=document.createElement('form').submit;
submitFn.apply(form);
}
}finally{
form.setAttribute('action',a);
form.setAttribute('enctype',et);
if(t){
form.setAttribute('target',t);
}else{
$form.removeAttr('target');
}
$(extraInputs).remove();
}
}
if(s.forceSync){
doSubmit();
}else{
setTimeout(doSubmit,10);
}
var data,doc,domCheckCount=50,callbackProcessed;
function cb(e){
if(xhr.aborted||callbackProcessed){
return;
}
doc=getDoc(io);
if(!doc){
log('cannot access response document');
e=SERVER_ABORT;
}
if(e===CLIENT_TIMEOUT_ABORT&&xhr){
xhr.abort('timeout');
deferred.reject(xhr,'timeout');
return;
}
if(e===SERVER_ABORT&&xhr){
xhr.abort('server abort');
deferred.reject(xhr,'error','server abort');
return;
}
if(!doc||doc.location.href===s.iframeSrc){
if(!timedOut){
return;
}
}
if(io.detachEvent){
io.detachEvent('onload',cb);
}else{
io.removeEventListener('load',cb,false);
}
var status='success',errMsg;
try{
if(timedOut){
throw'timeout';
}
var isXml=s.dataType==='xml'||doc.XMLDocument||$.isXMLDoc(doc);
log('isXml='+isXml);
if(!isXml&&window.opera&&(doc.body===null||!doc.body.innerHTML)){
if(--domCheckCount){
log('requeing onLoad callback, DOM not available');
setTimeout(cb,250);
return;
}
}
var docRoot=doc.body?doc.body:doc.documentElement;
xhr.responseText=docRoot?docRoot.innerHTML:null;
xhr.responseXML=doc.XMLDocument?doc.XMLDocument:doc;
if(isXml){
s.dataType='xml';
}
xhr.getResponseHeader=function(header){
var headers={'content-type':s.dataType};
return headers[header.toLowerCase()];
};
if(docRoot){
xhr.status=Number(docRoot.getAttribute('status'))||xhr.status;
xhr.statusText=docRoot.getAttribute('statusText')||xhr.statusText;
}
var dt=(s.dataType||'').toLowerCase();
var scr=/(json|script|text)/.test(dt);
if(scr||s.textarea){
var ta=doc.getElementsByTagName('textarea')[0];
if(ta){
xhr.responseText=ta.value;
xhr.status=Number(ta.getAttribute('status'))||xhr.status;
xhr.statusText=ta.getAttribute('statusText')||xhr.statusText;
}else if(scr){
var pre=doc.getElementsByTagName('pre')[0];
var b=doc.getElementsByTagName('body')[0];
if(pre){
xhr.responseText=pre.textContent?pre.textContent:pre.innerText;
}else if(b){
xhr.responseText=b.textContent?b.textContent:b.innerText;
}
}
}else if(dt==='xml'&&!xhr.responseXML&&xhr.responseText){
xhr.responseXML=toXml(xhr.responseText);
}
try{
data=httpData(xhr,dt,s);
}catch(err){
status='parsererror';
xhr.error=errMsg=(err||status);
}
}catch(err){
log('error caught: ',err);
status='error';
xhr.error=errMsg=(err||status);
}
if(xhr.aborted){
log('upload aborted');
status=null;
}
if(xhr.status){
status=((xhr.status>=200&&xhr.status<300)||xhr.status===304)?'success':'error';
}
if(status==='success'){
if(s.success){
s.success.call(s.context,data,'success',xhr);
}
deferred.resolve(xhr.responseText,'success',xhr);
if(g){
$.event.trigger('ajaxSuccess',[xhr,s]);
}
}else if(status){
if(typeof errMsg==='undefined'){
errMsg=xhr.statusText;
}
if(s.error){
s.error.call(s.context,xhr,status,errMsg);
}
deferred.reject(xhr,'error',errMsg);
if(g){
$.event.trigger('ajaxError',[xhr,s,errMsg]);
}
}
if(g){
$.event.trigger('ajaxComplete',[xhr,s]);
}
if(g&&!--$.active){
$.event.trigger('ajaxStop');
}
if(s.complete){
s.complete.call(s.context,xhr,status);
}
callbackProcessed=true;
if(s.timeout){
clearTimeout(timeoutHandle);
}
setTimeout(function(){
if(!s.iframeTarget){
$io.remove();
}else{
$io.attr('src',s.iframeSrc);
}
xhr.responseXML=null;
},100);
}
var toXml=$.parseXML||function(s,doc){
if(window.ActiveXObject){
doc=new ActiveXObject('Microsoft.XMLDOM');
doc.async='false';
doc.loadXML(s);
}else{
doc=(new DOMParser()).parseFromString(s,'text/xml');
}
return(doc&&doc.documentElement&&doc.documentElement.nodeName!=='parsererror')?doc:null;
};
var parseJSON=$.parseJSON||function(s){
window.console.error('jquery.parseJSON is undefined');
return null;
};
var httpData=function(xhr,type,s){
var ct=xhr.getResponseHeader('content-type')||'',
xml=((type==='xml'||!type)&&ct.indexOf('xml')>=0),
data=xml?xhr.responseXML:xhr.responseText;
if(xml&&data.documentElement.nodeName==='parsererror'){
if($.error){
$.error('parsererror');
}
}
if(s&&s.dataFilter){
data=s.dataFilter(data,type);
}
if(typeof data==='string'){
if((type==='json'||!type)&&ct.indexOf('json')>=0){
data=parseJSON(data);
}else if((type==='script'||!type)&&ct.indexOf('javascript')>=0){
$.globalEval(data);
}
}
return data;
};
return deferred;
}
};
$.fn.ajaxForm=function(options,data,dataType,onSuccess){
if(typeof options==='string'||(options===false&&arguments.length>0)){
options={
'url':options,
'data':data,
'dataType':dataType
};
if(typeof onSuccess==='function'){
options.success=onSuccess;
}
}
options=options||{};
options.delegation=options.delegation&&$.isFunction($.fn.on);
if(!options.delegation&&this.length===0){
var o={s:this.selector,c:this.context};
if(!$.isReady&&o.s){
log('DOM not ready, queuing ajaxForm');
$(function(){
$(o.s,o.c).ajaxForm(options);
});
return this;
}
log('terminating; zero elements found by selector'+($.isReady?'':' (DOM not ready)'));
return this;
}
if(options.delegation){
$(document)
.off('submit.form-plugin',this.selector,doAjaxSubmit)
.off('click.form-plugin',this.selector,captureSubmittingElement)
.on('submit.form-plugin',this.selector,options,doAjaxSubmit)
.on('click.form-plugin',this.selector,options,captureSubmittingElement);
return this;
}
if(options.beforeFormUnbind){
options.beforeFormUnbind(this,options);
}
return this.ajaxFormUnbind()
.on('submit.form-plugin',options,doAjaxSubmit)
.on('click.form-plugin',options,captureSubmittingElement);
};
function doAjaxSubmit(e){
var options=e.data;
if(!e.isDefaultPrevented()){
e.preventDefault();
$(e.target).closest('form').ajaxSubmit(options);
}
}
function captureSubmittingElement(e){
var target=e.target;
var $el=$(target);
if(!$el.is('[type=submit],[type=image]')){
var t=$el.closest('[type=submit]');
if(t.length===0){
return;
}
target=t[0];
}
var form=target.form;
form.clk=target;
if(target.type==='image'){
if(typeof e.offsetX!=='undefined'){
form.clk_x=e.offsetX;
form.clk_y=e.offsetY;
}else if(typeof $.fn.offset==='function'){
var offset=$el.offset();
form.clk_x=e.pageX-offset.left;
form.clk_y=e.pageY-offset.top;
}else{
form.clk_x=e.pageX-target.offsetLeft;
form.clk_y=e.pageY-target.offsetTop;
}
}
setTimeout(function(){
form.clk=form.clk_x=form.clk_y=null;
},100);
}
$.fn.ajaxFormUnbind=function(){
return this.off('submit.form-plugin click.form-plugin');
};
$.fn.formToArray=function(semantic,elements,filtering){
var a=[];
if(this.length===0){
return a;
}
var form=this[0];
var formId=this.attr('id');
var els=(semantic||typeof form.elements==='undefined')?form.getElementsByTagName('*'):form.elements;
var els2;
if(els){
els=$.makeArray(els);
}
if(formId&&(semantic||/(Edge|Trident)\//.test(navigator.userAgent))){
els2=$(':input[form="'+formId+'"]').get();
if(els2.length){
els=(els||[]).concat(els2);
}
}
if(!els||!els.length){
return a;
}
if($.isFunction(filtering)){
els=$.map(els,filtering);
}
var i,j,n,v,el,max,jmax;
for(i=0,max=els.length;i<max;i++){
el=els[i];
n=el.name;
if(!n||el.disabled){
continue;
}
if(semantic&&form.clk&&el.type==='image'){
if(form.clk===el){
a.push({name:n,value:$(el).val(),type:el.type});
a.push({name:n+'.x',value:form.clk_x},{name:n+'.y',value:form.clk_y});
}
continue;
}
v=$.fieldValue(el,true);
if(v&&v.constructor===Array){
if(elements){
elements.push(el);
}
for(j=0,jmax=v.length;j<jmax;j++){
a.push({name:n,value:v[j]});
}
}else if(feature.fileapi&&el.type==='file'){
if(elements){
elements.push(el);
}
var files=el.files;
if(files.length){
for(j=0;j<files.length;j++){
a.push({name:n,value:files[j],type:el.type});
}
}else{
a.push({name:n,value:'',type:el.type});
}
}else if(v!==null&&typeof v!=='undefined'){
if(elements){
elements.push(el);
}
a.push({name:n,value:v,type:el.type,required:el.required});
}
}
if(!semantic&&form.clk){
var $input=$(form.clk),input=$input[0];
n=input.name;
if(n&&!input.disabled&&input.type==='image'){
a.push({name:n,value:$input.val()});
a.push({name:n+'.x',value:form.clk_x},{name:n+'.y',value:form.clk_y});
}
}
return a;
};
$.fn.formSerialize=function(semantic){
return $.param(this.formToArray(semantic));
};
$.fn.fieldSerialize=function(successful){
var a=[];
this.each(function(){
var n=this.name;
if(!n){
return;
}
var v=$.fieldValue(this,successful);
if(v&&v.constructor===Array){
for(var i=0,max=v.length;i<max;i++){
a.push({name:n,value:v[i]});
}
}else if(v!==null&&typeof v!=='undefined'){
a.push({name:this.name,value:v});
}
});
return $.param(a);
};
$.fn.fieldValue=function(successful){
for(var val=[],i=0,max=this.length;i<max;i++){
var el=this[i];
var v=$.fieldValue(el,successful);
if(v===null||typeof v==='undefined'||(v.constructor===Array&&!v.length)){
continue;
}
if(v.constructor===Array){
$.merge(val,v);
}else{
val.push(v);
}
}
return val;
};
$.fieldValue=function(el,successful){
var n=el.name,t=el.type,tag=el.tagName.toLowerCase();
if(typeof successful==='undefined'){
successful=true;
}
if(successful&&(!n||el.disabled||t==='reset'||t==='button'||
(t==='checkbox'||t==='radio')&&!el.checked||
(t==='submit'||t==='image')&&el.form&&el.form.clk!==el||
tag==='select'&&el.selectedIndex===-1)){
return null;
}
if(tag==='select'){
var index=el.selectedIndex;
if(index<0){
return null;
}
var a=[],ops=el.options;
var one=(t==='select-one');
var max=(one?index+1:ops.length);
for(var i=(one?index:0);i<max;i++){
var op=ops[i];
if(op.selected&&!op.disabled){
var v=op.value;
if(!v){
v=(op.attributes&&op.attributes.value&&!(op.attributes.value.specified))?op.text:op.value;
}
if(one){
return v;
}
a.push(v);
}
}
return a;
}
return $(el).val().replace(rCRLF,'\r\n');
};
$.fn.clearForm=function(includeHidden){
return this.each(function(){
$('input,select,textarea',this).clearFields(includeHidden);
});
};
$.fn.clearFields=$.fn.clearInputs=function(includeHidden){
var re=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;
return this.each(function(){
var t=this.type,tag=this.tagName.toLowerCase();
if(re.test(t)||tag==='textarea'){
this.value='';
}else if(t==='checkbox'||t==='radio'){
this.checked=false;
}else if(tag==='select'){
this.selectedIndex=-1;
}else if(t==='file'){
if(/MSIE/.test(navigator.userAgent)){
$(this).replaceWith($(this).clone(true));
}else{
$(this).val('');
}
}else if(includeHidden){
if((includeHidden===true&&/hidden/.test(t))||
(typeof includeHidden==='string'&&$(this).is(includeHidden))){
this.value='';
}
}
});
};
$.fn.resetForm=function(){
return this.each(function(){
var el=$(this);
var tag=this.tagName.toLowerCase();
switch(tag){
case'input':
this.checked=this.defaultChecked;
case'textarea':
this.value=this.defaultValue;
return true;
case'option':
case'optgroup':
var select=el.parents('select');
if(select.length&&select[0].multiple){
if(tag==='option'){
this.selected=this.defaultSelected;
}else{
el.find('option').resetForm();
}
}else{
select.resetForm();
}
return true;
case'select':
el.find('option').each(function(i){
this.selected=this.defaultSelected;
if(this.defaultSelected&&!el[0].multiple){
el[0].selectedIndex=i;
return false;
}
});
return true;
case'label':
var forEl=$(el.attr('for'));
var list=el.find('input,select,textarea');
if(forEl[0]){
list.unshift(forEl[0]);
}
list.resetForm();
return true;
case'form':
if(typeof this.reset==='function'||(typeof this.reset==='object'&&!this.reset.nodeType)){
this.reset();
}
return true;
default:
el.find('form,input,label,select,textarea').resetForm();
return true;
}
});
};
$.fn.enable=function(b){
if(typeof b==='undefined'){
b=true;
}
return this.each(function(){
this.disabled=!b;
});
};
$.fn.selected=function(select){
if(typeof select==='undefined'){
select=true;
}
return this.each(function(){
var t=this.type;
if(t==='checkbox'||t==='radio'){
this.checked=select;
}else if(this.tagName.toLowerCase()==='option'){
var $sel=$(this).parent('select');
if(select&&$sel[0]&&$sel[0].type==='select-one'){
$sel.find('option').selected(false);
}
this.selected=select;
}
});
};
$.fn.ajaxSubmit.debug=false;
function log(){
if(!$.fn.ajaxSubmit.debug){
return;
}
var msg='[jquery.form] '+Array.prototype.join.call(arguments,'');
if(window.console&&window.console.log){
window.console.log(msg);
}else if(window.opera&&window.opera.postError){
window.opera.postError(msg);
}
}
}));


/* ../prive/javascript/jquery.autosave.js?1733220530 */

(function($){
$.fn.autosave=function(opt){
opt=$.extend({
url:window.location,
confirm:false,
confirmstring:'Sauvegarder ?'
},opt);
var save_changed=function(){
$('form.autosavechanged')
.each(function(){
if(!opt.confirm||confirm(opt.confirmstring)){
var contenu=$(this).serialize();
var d=new Date();
contenu=contenu+"&__timestamp="+Math.round(d.getTime()/1000);
$.post(opt.url,{
'action':'session',
'var':'autosave_'+$('input[name=autosave]',this).val(),
'val':contenu
});
}
}).removeClass('autosavechanged');
};
$(window).on('unload',save_changed);
return this
.on('keyup',function(){
$(this).addClass('autosavechanged');
})
.on('change',function(){
$(this).addClass('autosavechanged');
save_changed();
})
.on('submit',function(){
save_changed();
});
};
})(jQuery);


/* ../prive/javascript/jquery.placeholder-label.js?1733220530 */

(function($){
$.placeholderLabel={
placeholder_class:null,
add_placeholder:function(){
if($(this).val()==$(this).attr('placeholder')){
$(this).val('').removeClass($.placeholderLabel.placeholder_class);
}
},
remove_placeholder:function(){
if($(this).val()==''){
$(this).val($(this).attr('placeholder')).addClass($.placeholderLabel.placeholder_class);
}
},
disable_placeholder_fields:function(){
$(this).find("input[placeholder]").each(function(){
if($(this).val()==$(this).attr('placeholder')){
$(this).val('');
}
});
return true;
}
};
$.fn.placeholderLabel=function(options){
var dummy=document.createElement('input');
if(dummy.placeholder!=undefined){
return this;
}
var config={
placeholder_class:'placeholder'
};
if(options)$.extend(config,options);
$.placeholderLabel.placeholder_class=config.placeholder_class;
this.each(function(){
var input=$(this);
input.focus($.placeholderLabel.add_placeholder);
input.blur($.placeholderLabel.remove_placeholder);
input.triggerHandler('focus');
input.triggerHandler('blur');
$(this.form).submit($.placeholderLabel.disable_placeholder_fields);
});
return this;
}
})(jQuery);


/* ../prive/javascript/ajaxCallback.js?1733220530 */
jQuery.spip=jQuery.spip||{};
jQuery.spip.log=function(){
if(jQuery.spip.debug&&window.console&&window.console.log)
window.console.log.apply(this,arguments);
}
jQuery.spip.test_espace_prive=function(){
if(typeof spipConfig.core.test_espace_prive!=undefined&&spipConfig.core.test_espace_prive){
return true;
}
return false;
}
if(!jQuery.spip.load_handlers){
jQuery.spip.load_handlers=new Array();
function onAjaxLoad(f){
jQuery.spip.load_handlers.push(f);
};
jQuery.spip.triggerAjaxLoad=function(root){
jQuery.spip.log('triggerAjaxLoad');
jQuery.spip.log(root);
for(var i=0;i<jQuery.spip.load_handlers.length;i++)
jQuery.spip.load_handlers[i].apply(root);
};
jQuery.spip.intercepted={};
jQuery.spip.intercepted.load=jQuery.fn.load;
jQuery.fn.load=function(url,params,callback){
if(typeof url!=="string"){
return jQuery.spip.intercepted.load.apply(this,arguments);
}
callback=callback||function(){};
if(params){
if(params.constructor==Function){
callback=params;
params=null;
}
}
params=jQuery.extend(params,{triggerAjaxLoad:false});
var callback2=function(){jQuery.spip.log('jQuery.load');jQuery.spip.triggerAjaxLoad(this);callback.apply(this,arguments);};
return jQuery.spip.intercepted.load.apply(this,[url,params,callback2]);
};
jQuery.spip.intercepted.ajaxSubmit=jQuery.fn.ajaxSubmit;
jQuery.fn.ajaxSubmit=function(options){
options=options||{};
if(typeof options.onAjaxLoad=="undefined"||options.onAjaxLoad!=false){
var me=jQuery(this).parents('div.ajax');
if(me.length)
me=me.parent();
else
me=document;
if(typeof options=='function')
options={success:options};
var callback=options.success||function(){};
options.success=function(){callback.apply(this,arguments);jQuery.spip.log('jQuery.ajaxSubmit');jQuery.spip.triggerAjaxLoad(me);}
}
return jQuery.spip.intercepted.ajaxSubmit.apply(this,[options]);
}
jQuery.spip.intercepted.ajax=jQuery.ajax;
jQuery.ajax=function(url,settings){
if(typeof settings=='undefined'){
settings={};
if(typeof url=='object'){
settings=url;
url=null;
}
}
if(typeof url=='string'){
settings['url']=url;
}
if(settings.data&&settings.data['triggerAjaxLoad']===false){
settings.data['triggerAjaxLoad']=null;
return jQuery.spip.intercepted.ajax(settings);
}
var s=jQuery.extend(true,{},jQuery.ajaxSettings,settings);
var callbackContext=s.context||s;
try{
if(jQuery.ajax.caller==jQuery.spip.intercepted.load||jQuery.ajax.caller==jQuery.spip.intercepted.ajaxSubmit)
return jQuery.spip.intercepted.ajax(settings);
}
catch(err){}
var orig_complete=s.complete||function(){};
settings.complete=function(res,status){
var dataType=settings.dataType;
var ct=(res&&(typeof res.getResponseHeader=='function'))
?res.getResponseHeader("content-type"):'';
var xml=!dataType&&ct&&ct.indexOf("xml")>=0;
orig_complete.call(callbackContext,res,status);
if((!dataType&&!xml)||dataType=="html"){
jQuery.spip.log('jQuery.ajax');
if(typeof s.onAjaxLoad=="undefined"||s.onAjaxLoad!=false)
jQuery.spip.triggerAjaxLoad(s.ajaxTarget?s.ajaxTarget:document);
}
};
return jQuery.spip.intercepted.ajax(settings);
};
}
jQuery.uaMatch=function(ua){
ua=ua.toLowerCase();
var match=/(chrome)[ \/]([\w.]+)/.exec(ua)||/(webkit)[ \/]([\w.]+)/.exec(ua)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua)||/(msie) ([\w.]+)/.exec(ua)||
ua.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua)||
[];
return{
browser:match[1]||"",
version:match[2]||"0"
};
};
if(!jQuery.browser){
matched=jQuery.uaMatch(navigator.userAgent);
browser={};
if(matched.browser){
browser[matched.browser]=true;
browser.version=matched.version;
}
if(browser.chrome){
browser.webkit=true;
}else if(browser.webkit){
browser.safari=true;
}
jQuery.browser=browser;
}
jQuery.getScript=function(url,callback){
return $.ajax({
url:url,
dataType:"script",
success:callback,
cache:true
});
}
jQuery.fn.positionner=function(force,setfocus){
if(!this.length){
return this;
}
var offset=jQuery(this).offset();
var hauteur=parseInt(jQuery(this).css('height'));
var marge=jQuery.spip.positionner_marge||5;
var scrolltop=self['pageYOffset']||
jQuery.boxModel&&document.documentElement['scrollTop']||
document.body['scrollTop'];
var h=jQuery(window).height();
var scroll=0;
if(force||(offset&&offset['top']-marge<=scrolltop)){
scroll=offset['top']-marge;
}
else if(offset&&offset['top']+hauteur-h+marge>scrolltop){
scroll=Math.min(offset['top']-marge-15,offset['top']+hauteur-h+40);
}
if(scroll)
jQuery('html,body')
.animate({scrollTop:scroll},300);
if(setfocus!==false)
jQuery(jQuery('*',this).filter('input[type=text],textarea')[0]).focus();
return this;
}
jQuery.spip.virtualbuffer_id='spip_virtualbufferupdate';
jQuery.spip.initReaderBuffer=function(){
if(jQuery('#'+jQuery.spip.virtualbuffer_id).length)return;
jQuery('body').append('<div style="float:left;width:0;height:0;position:absolute;left:-5000px;top:-5000px;"><input type="hidden" name="'+jQuery.spip.virtualbuffer_id+'" id="'+jQuery.spip.virtualbuffer_id+'" value="0"></div>');
}
jQuery.spip.updateReaderBuffer=function(){
var i=jQuery('#'+jQuery.spip.virtualbuffer_id);
if(!i.length)return;
i.val(parseInt(i.val())+1);
}
jQuery.fn.formulaire_setContainer=function(){
if(!this.closest('.ajax-form-container').length){
this.find('script').remove();
var aria=this.data('aria');
var $container=jQuery('<div class="ajax-form-container"></div>');
if(aria&&typeof aria==='object'){
for(var i in aria){
$container=$container.attr(i,aria[i]);
}
}
else{
aria=false;
}
this.wrap($container);
if(aria){
jQuery('form',this).not('[aria-live]').attr('aria-live','off');
}
}
return this;
}
jQuery.fn.formulaire_dyn_ajax=function(target){
if(this.length)
jQuery.spip.initReaderBuffer();
return this.each(function(){
var scrollwhensubmit=!jQuery(this).is('.noscroll');
var cible=target||this;
jQuery(cible).formulaire_setContainer();
jQuery('form:not(.noajax):not(.bouton_action_post)',this).each(function(){
var leform=this;
var leclk,leclk_x,leclk_y;
var onError=function(xhr,status,error,$form){
jQuery(leform).ajaxFormUnbind().find('input[name="var_ajax"]').remove();
var msg="Erreur";
if(typeof(error_on_ajaxform)!=="undefined")msg=error_on_ajaxform;
jQuery(leform).prepend("<p class='error ajax-error none'>"+msg+"</p>").find('.ajax-error').show('fast');
jQuery(cible).closest('.ajax-form-container').endLoading(true);
}
jQuery(this).prepend("<input type='hidden' name='var_ajax' value='form'>")
.ajaxForm({
beforeSubmit:function(){
leclk=leform.clk;
var scrollwhensubmit_button=true;
if(leclk){
scrollwhensubmit_button=!jQuery(leclk).is('.noscroll');
var n=leclk.name;
if(n&&!leclk.disabled&&leclk.type==="image"){
leclk_x=leform.clk_x;
leclk_y=leform.clk_y;
}
}
jQuery(cible).wrap('<div />');
cible=jQuery(cible).parent();
jQuery(cible).closest('.ajax-form-container').animateLoading();
if(scrollwhensubmit&&scrollwhensubmit_button){
jQuery(cible).positionner(false,false);
}
},
error:onError,
success:function(c,status,xhr,$form){
if(c.match(/^\s*noajax\s*$/)){
jQuery("input[name=var_ajax]",leform).remove();
if(leclk){
var n=leclk.name;
if(n&&!leclk.disabled){
jQuery(leform).prepend("<input type='hidden' name='"+n+"' value='"+leclk.value+"'>");
if(leclk.type==="image"){
jQuery(leform).prepend("<input type='hidden' name='"+n+".x' value='"+leform.clk_x+"'>");
jQuery(leform).prepend("<input type='hidden' name='"+n+".y' value='"+leform.clk_y+"'>");
}
}
}
jQuery(leform).ajaxFormUnbind().closest('.formulaire_spip').addClass('resubmit-noajax');
try{
leform.submit();
}catch(err){
var submitFn=document.createElement('form').submit;
submitFn.apply(leform);
}
}
else{
if(!c.length||c.indexOf("ajax-form-is-ok")==-1)
return onError.apply(this,[status,xhr,$form]);
var preloaded=jQuery.spip.preloaded_urls;
jQuery.spip.preloaded_urls={};
jQuery(cible).html(c);
var a=jQuery('a:first',cible).eq(0);
var d=jQuery('div.ajax',cible);
if(!d.length){
jQuery(cible).addClass('ajax');
if(!scrollwhensubmit)
jQuery(cible).addClass('noscroll');
}
else{
d.siblings('br.bugajaxie').remove();
cible=jQuery(":first",cible);
cible.unwrap();
}
if(a.length
&&a.is('a[name=ajax_ancre]')
&&jQuery(a.attr('href'),cible).length){
a=a.attr('href');
if(jQuery(a,cible).length)
setTimeout(function(){
jQuery(a,cible).positionner(false);
},10);
jQuery(cible).closest('.ajax-form-container').endLoading(true);
}
else{
if(a.length&&a.is('a[name=ajax_redirect]')){
a=a.get(0).href;
setTimeout(function(){
var cur=window.location.href.split('#');
document.location.replace(a);
if(cur[0]==a.split('#')[0]){
window.location.reload();
}
},10);
jQuery(cible).closest('.ajax-form-container').animateLoading();
}
else{
jQuery(cible).closest('.ajax-form-container').endLoading(true);
}
}
if(!jQuery('.reponse_formulaire_ok',cible).length)
jQuery.spip.preloaded_urls=preloaded;
jQuery.spip.updateReaderBuffer();
}
}
})
.addClass('noajax hasajax');
});
});
}
jQuery.fn.formulaire_verifier=function(callback,champ){
var erreurs={'message_erreur':'form non ajax'};
var me=this;
if(jQuery(me).closest('.ajax-form-container').attr('aria-busy')!='true'){
if(jQuery(me).is('form.hasajax')){
jQuery(me).ajaxSubmit({
dataType:"json",
data:{formulaire_action_verifier_json:true},
success:function(errs){
var args=[errs,champ]
if(jQuery(me).closest('.ajax-form-container').attr('aria-busy')!='true')
callback.apply(me,args);
}
});
}
else
callback.apply(me,[erreurs,champ]);
}
return this;
}
jQuery.fn.formulaire_activer_verif_auto=function(callback){
callback=callback||formulaire_actualiser_erreurs;
var me=jQuery(this).closest('.ajax-form-container');
var check=function(){
var name=jQuery(this).attr('name');
setTimeout(function(){me.find('form').formulaire_verifier(callback,name);},50);
}
var activer=function(){
if(me.find('form').attr('data-verifjson')!='on'){
me
.find('form')
.attr('data-verifjson','on')
.find('input,select,textarea')
.on('change',check);
}
}
jQuery(activer);
onAjaxLoad(function(){setTimeout(activer,150);});
}
function formulaire_actualiser_erreurs(erreurs){
var parent=jQuery(this).closest('.formulaire_spip');
if(!parent.length)return;
parent.find('.reponse_formulaire,.erreur_message').fadeOut().remove();
parent.find('.erreur').removeClass('erreur');
if(erreurs['message_ok'])
parent.find('form').before('<p class="reponse_formulaire reponse_formulaire_ok">'+erreurs['message_ok']+'</p>');
if(erreurs['message_erreur'])
parent.find('form').before('<p class="reponse_formulaire reponse_formulaire_erreur">'+erreurs['message_erreur']+'</p>');
for(var k in erreurs){
var saisie=parent.find('.editer_'+k);
if(saisie.length){
saisie.addClass('erreur');
saisie.find('label').after('<span class="erreur_message">'+erreurs[k]+'</span>');
}
}
}
var ajax_confirm=true;
var ajax_confirm_date=0;
var spip_confirm=window.confirm;
function _confirm(message){
ajax_confirm=spip_confirm(message);
if(!ajax_confirm){
var d=new Date();
ajax_confirm_date=d.getTime();
}
return ajax_confirm;
}
window.confirm=_confirm;
var ajaxbloc_selecteur;
jQuery.spip.preloaded_urls={};
jQuery.spip.on_ajax_loaded=function(blocfrag,c,href,history){
history=history||(history==null);
if(typeof href==undefined||href==null)
history=false;
if(history)
jQuery.spip.setHistoryState(blocfrag);
if(jQuery(blocfrag).attr('data-loaded-callback')){
var callback=eval(jQuery(blocfrag).attr('data-loaded-callback'));
callback.call(blocfrag,c,href,history);
}
else{
jQuery(blocfrag)
.html(c)
.endLoading();
}
if(typeof href!=undefined)
jQuery(blocfrag).attr('data-url',href);
if(history){
jQuery.spip.pushHistoryState(href);
jQuery.spip.setHistoryState(blocfrag);
}
var a=jQuery('a:first',jQuery(blocfrag)).eq(0);
if(a.length
&&a.is('a[name=ajax_ancre]')
&&jQuery(a.attr('href'),blocfrag).length){
a=a.attr('href');
jQuery(a,blocfrag).positionner(false);
}
jQuery.spip.log('on_ajax_loaded');
jQuery.spip.triggerAjaxLoad(blocfrag);
a=jQuery(blocfrag).parents('form.hasajax')
if(a.length)
a.eq(0).removeClass('noajax').parents('div.ajax').formulaire_dyn_ajax();
jQuery.spip.updateReaderBuffer();
}
jQuery.spip.on_ajax_failed=function(blocfrag,statusCode,href,history){
jQuery(blocfrag).addClass('invalid');
jQuery.spip.log("Echec AJAX statusCode "+statusCode)
history=history||(history==null);
if(history){
if(jQuery.spip.debug){
jQuery.spip.log("On redirige sur sur "+href)
}
else{
window.location.href=href;
}
}
}
jQuery.spip.stateId=0;
jQuery.spip.setHistoryState=function(blocfrag){
if(!window.history.replaceState)return;
if(!blocfrag.attr('id')){
while(jQuery('#ghsid'+jQuery.spip.stateId).length)
jQuery.spip.stateId++;
blocfrag.attr('id','ghsid'+jQuery.spip.stateId);
}
var href=blocfrag.attr('data-url')||blocfrag.attr('data-origin');
href=jQuery("<"+"a href='"+href+"'></a>").get(0).href;
var state={
id:blocfrag.attr('id'),
href:href
};
var ajaxid=blocfrag.attr('class').match(/\bajax-id-[\w-]+\b/);
if(ajaxid&&ajaxid.length)
state["ajaxid"]=ajaxid[0];
window.history.replaceState(state,window.document.title,window.document.location);
}
jQuery.spip.pushHistoryState=function(href,title){
if(!window.history.pushState)
return false;
window.history.pushState({},title,href);
}
window.onpopstate=function(popState){
if(popState.state&&popState.state.href){
var blocfrag=false;
if(popState.state.id){
blocfrag=jQuery('#'+popState.state.id);
}
if((!blocfrag||!blocfrag.length)&&popState.state.ajaxid){
blocfrag=jQuery('.ajaxbloc.'+popState.state.ajaxid);
}
if(blocfrag&&blocfrag.length==1){
jQuery.spip.ajaxClick(blocfrag,popState.state.href,{history:false});
return true;
}
else{
window.location.href=popState.state.href;
}
}
}
jQuery.spip.loadAjax=function(blocfrag,url,href,options){
var force=options.force||false;
if(jQuery(blocfrag).attr('data-loading-callback')){
var callback=eval(jQuery(blocfrag).attr('data-loading-callback'));
callback.call(blocfrag,url,href,options);
}
else{
jQuery(blocfrag).animateLoading();
}
if(jQuery.spip.preloaded_urls[url]&&!force){
if(jQuery.spip.preloaded_urls[url]=="<!--loading-->"){
setTimeout(function(){jQuery.spip.loadAjax(blocfrag,url,href,options);},100);
return;
}
jQuery.spip.on_ajax_loaded(blocfrag,jQuery.spip.preloaded_urls[url],href,options.history);
}else{
var d=new Date();
jQuery.spip.preloaded_urls[url]="<!--loading-->";
jQuery.ajax({
url:parametre_url(url,'var_t',d.getTime()),
onAjaxLoad:false,
success:function(c){
jQuery.spip.on_ajax_loaded(blocfrag,c,href,options.history);
jQuery.spip.preloaded_urls[url]=c;
if(options.callback&&typeof options.callback=="function")
options.callback.apply(blocfrag);
},
error:function(e){
jQuery.spip.preloaded_urls[url]='';
jQuery.spip.on_ajax_failed(blocfrag,e.status,href,options.history);
}
});
}
}
jQuery.spip.makeAjaxUrl=function(href,ajax_env,origin){
var url=href.split('#');
url[0]=parametre_url(url[0],'var_ajax',1);
url[0]=parametre_url(url[0],'var_ajax_env',ajax_env);
if(origin){
var p=origin.indexOf('?');
if(p!==-1){
var args=origin.substring(p+1).split('&');
var val;
var arg;
for(var n=0;n<args.length;n++){
arg=args[n].split('=');
arg=decodeURIComponent(arg[0]);
p=arg.indexOf('[');
if(p!==-1)
arg=arg.substring(0,p);
val=parametre_url(href,arg);
if(typeof val=="undefined"||val==null)
url[0]=url[0]+'&'+arg+'=';
}
}
}
if(url[1])
url[0]=parametre_url(url[0],'var_ajax_ancre',url[1]);
return url[0];
}
jQuery.spip.ajaxReload=function(blocfrag,options){
var ajax_env=blocfrag.attr('data-ajax-env');
if(!ajax_env||ajax_env==undefined)return;
var href=options.href||blocfrag.attr('data-url')||blocfrag.attr('data-origin');
if(href&&typeof href!=undefined){
options=options||{};
var callback=options.callback||null;
var history=options.history||false;
var args=options.args||{};
for(var key in args)
href=parametre_url(href,key,args[key]==undefined?'':args[key],'&',args[key]==undefined?false:true);
var url=jQuery.spip.makeAjaxUrl(href,ajax_env,blocfrag.attr('data-origin'));
jQuery.spip.loadAjax(blocfrag,url,href,{force:true,callback:callback,history:history});
return true;
}
}
jQuery.spip.ajaxClick=function(blocfrag,href,options){
var ajax_env=blocfrag.attr('data-ajax-env');
if(!ajax_env||ajax_env==undefined)return;
if(!ajax_confirm){
ajax_confirm=true;
var d=new Date();
if((d.getTime()-ajax_confirm_date)<=2)
return false;
}
var url=jQuery.spip.makeAjaxUrl(href,ajax_env,blocfrag.attr('data-origin'));
jQuery.spip.loadAjax(blocfrag,url,href,options);
return false;
}
jQuery.fn.ajaxbloc=function(){
if(this.length)
jQuery.spip.initReaderBuffer();
if(ajaxbloc_selecteur==undefined)
ajaxbloc_selecteur='.pagination a,a.ajax';
return this.each(function(){
jQuery('div.ajaxbloc',this).ajaxbloc();
var blocfrag=jQuery(this);
var ajax_env=blocfrag.attr('data-ajax-env');
if(!ajax_env||ajax_env==undefined)return;
blocfrag.not('.bind-ajaxReload').on('ajaxReload',function(event,options){
if(jQuery.spip.ajaxReload(blocfrag,options))
event.stopPropagation();
}).addClass('bind-ajaxReload');
jQuery(ajaxbloc_selecteur,this).not('.noajax,.bind-ajax')
.click(function(){return jQuery.spip.ajaxClick(blocfrag,this.href,{force:jQuery(this).is('.nocache'),history:!(jQuery(this).is('.nohistory')||jQuery(this).closest('.box_modalbox').length)});})
.addClass('bind-ajax')
.filter('.preload').each(function(){
var href=this.href;
var url=jQuery.spip.makeAjaxUrl(href,ajax_env,blocfrag.attr('data-origin'));
if(!jQuery.spip.preloaded_urls[url]){
jQuery.spip.preloaded_urls[url]='<!--loading-->';
jQuery.ajax({url:url,onAjaxLoad:false,success:function(r){jQuery.spip.preloaded_urls[url]=r;},error:function(){jQuery.spip.preloaded_urls[url]='';}});
}
});
jQuery('form.bouton_action_post.ajax',this).not('.noajax,.bind-ajax').each(function(){
var leform=this;
var url=jQuery(this).attr('action').split('#');
var scrollwhensubmit=(!jQuery(this).is('.noscroll')&&!jQuery('.submit',this).is('.noscroll'));
jQuery(this)
.prepend("<input type='hidden' name='var_ajax' value='1'><input type='hidden' name='var_ajax_env' value='"+(ajax_env)+"'>"+(url[1]?"<input type='hidden' name='var_ajax_ancre' value='"+url[1]+"'>":""))
.ajaxForm({
beforeSubmit:function(){
jQuery(blocfrag).animateLoading();
if(scrollwhensubmit){
jQuery(blocfrag).positionner(false);
}
},
onAjaxLoad:false,
success:function(c){
jQuery.spip.on_ajax_loaded(blocfrag,c);
jQuery.spip.preloaded_urls={};
},
error:function(e){
jQuery.spip.preloaded_urls={};
var href=parametre_url(url,'redirect');
if(!href){
href=window.location.href;
}
jQuery.spip.on_ajax_failed(blocfrag,e.status,href,e.status===400);
}
})
.addClass('bind-ajax');
});
});
};
jQuery.fn.followLink=function(){
$(this).click();
if(!$(this).is('.bind-ajax'))
window.location.href=$(this).get(0).href;
return this;
}
function ajaxReload(ajaxid,options){
jQuery('div.ajaxbloc.ajax-id-'+ajaxid).ajaxReload(options);
}
jQuery.fn.ajaxReload=function(options){
options=options||{};
jQuery(this).trigger('ajaxReload',[options]);
return this;
}
jQuery.fn.animateLoading=function(){
this.attr('aria-busy','true').addClass('loading').children().css('opacity',0.5);
if(typeof ajax_image_searching!='undefined'){
var i=(this).find('.image_loading');
if(i.length)i.eq(0).html(ajax_image_searching);
else this.prepend('<span class="image_loading">'+ajax_image_searching+'</span>');
}
return this;
}
jQuery.fn.animeajax=jQuery.fn.animateLoading;
jQuery.fn.endLoading=function(hard){
hard=hard||false;
this.attr('aria-busy','false').removeClass('loading');
if(hard){
this.children().css('opacity','');
this.find('.image_loading').html('');
}
return this;
}
jQuery.fn.animateRemove=function(callback){
if(this.length){
var me=this;
var color=$("<div class='remove'></div>").css('background-color');
var sel=$(this);
if(sel.is('tr'))
sel=sel.add('>td',sel);
sel.addClass('remove').css({backgroundColor:color}).animate({opacity:"0.0"},'fast',function(){
sel.removeClass('remove').css({backgroundColor:''});
if(callback)
callback.apply(me);
});
}
return this;
}
jQuery.fn.animateAppend=function(callback){
if(this.length){
var me=this;
var color=$("<div class='append'></div>").css('background-color');
var origin=$(this).css('background-color')||'#ffffff';
if(origin=='transparent')origin='#ffffff';
var sel=$(this);
if(sel.is('tr'))
sel=sel.add('>td',sel);
sel.css('opacity','0.0').addClass('append').css({backgroundColor:color}).animate({opacity:"1.0"},1000,function(){
sel.animate({backgroundColor:origin},3000,function(){
sel.removeClass('append').css({backgroundColor:''});
if(callback)
callback.apply(me);
});
});
}
return this;
}
function parametre_url(url,c,v,sep,force_vide){
if(typeof(url)=='undefined'){
url='';
}
var p;
var ancre='';
var a='./';
var args=[];
p=url.indexOf('#');
if(p!=-1){
ancre=url.substring(p);
url=url.substring(0,p);
}
p=url.indexOf('?');
if(p!==-1){
if(p>0)a=url.substring(0,p);
args=url.substring(p+1).split('&');
}
else
a=url;
var regexp=new RegExp('^('+c.replace('[]','\\[\\]')+'\\[?\\]?)(=.*)?$');
var ajouts=[];
var u=(typeof(v)!=='object')?encodeURIComponent(v):v;
var na=[];
var v_read=null;
for(var n=0;n<args.length;n++){
var val=args[n];
try{
val=decodeURIComponent(val);
}catch(e){}
var r=val.match(regexp);
if(r&&r.length){
if(v==null){
if(r[1].substr(-2)=='[]'){
if(!v_read)v_read=[];
v_read.push((r.length>2&&typeof r[2]!=='undefined')?r[2].substring(1):'');
}
else{
return(r.length>2&&typeof r[2]!=='undefined')?r[2].substring(1):'';
}
}
else if(!v.length){
}
else if(r[1].substr(-2)!='[]'){
na.push(r[1]+'='+u);
ajouts.push(r[1]);
}
}
else
na.push(args[n]);
}
if(v==null)return v_read;
if(v||v.length||force_vide){
ajouts="="+ajouts.join("=")+"=";
var all=c.split('|');
for(n=0;n<all.length;n++){
if(ajouts.search("="+all[n]+"=")==-1){
if(typeof(v)!=='object'){
na.push(all[n]+'='+u);
}
else{
var id=((all[n].substring(-2)=='[]')?all[n]:all[n]+"[]");
for(p=0;p<v.length;p++)
na.push(id+'='+encodeURIComponent(v[p]));
}
}
}
}
if(na.length){
if(!sep)sep='&';
a=a+"?"+na.join(sep);
}
return a+ancre;
}
function spip_logo_survol_hover(){
var me=jQuery(this);
if(me.attr('data-src-hover')){
me.attr('data-src-original',me.attr('src'));
me.attr('src',me.attr('data-src-hover'));
}
}
function spip_logo_survol_out(){
var me=jQuery(this);
if(me.attr('data-src-original')){
me.attr('src',me.attr('data-src-original'));
}
}
function disableClickAfterFormSubmit(){
if(jQuery(this).is('.processing-submitted-form')){
return false;
}
jQuery(this)
.addClass('processing-submitted-form')
.find('button[type="submit"]')
.attr('disabled','disabled')
.addClass('disabled')
}
function puce_enable_survol(){
jQuery('span.puce_objet_popup a',this).not('.puce-survol-enabled').click(function(){
selec_statut(jQuery(this).attr('data-puce-id'),jQuery(this).attr('data-puce-type'),jQuery(this).attr('data-puce-decal'),jQuery('img',this).attr('src'),jQuery(this).attr('data-puce-action'));
return false;
}).addClass('puce-survol-enabled');
jQuery('span.puce_objet',this).not('.puce-survol-enabled').mouseover(function(){
if(!this.puce_loaded){
this.puce_loaded=true;prepare_selec_statut(this,jQuery(this).attr('data-puce-nom'),jQuery(this).attr('data-puce-type'),jQuery(this).attr('data-puce-id'),jQuery(this).attr('data-puce-action'));
}
}).addClass('puce-survol-enabled');
}
if(!window.var_zajax_content)
window.var_zajax_content='contenu';
jQuery(function(){
jQuery('form:not(.bouton_action_post)').parents('div.ajax')
.formulaire_dyn_ajax();
jQuery('div.ajaxbloc').ajaxbloc();
jQuery("input[placeholder]:text").placeholderLabel();
jQuery('.spip_logo_survol').hover(spip_logo_survol_hover,spip_logo_survol_out);
puce_enable_survol.apply(this);
jQuery('body').on('submit','form.bouton_action_post',disableClickAfterFormSubmit);
});
onAjaxLoad(function(){
if(jQuery){
jQuery('form:not(.bouton_action_post)',this).parents('div.ajax')
.formulaire_dyn_ajax();
if(jQuery(this).is('div.ajaxbloc'))
jQuery(this).ajaxbloc();
else if(jQuery(this).closest('div.ajaxbloc').length)
jQuery(this).closest('div.ajaxbloc').ajaxbloc();
else
jQuery('div.ajaxbloc',this).ajaxbloc();
jQuery("input[placeholder]:text",this).placeholderLabel();
jQuery('.spip_logo_survol',this).hover(spip_logo_survol_hover,spip_logo_survol_out);
puce_enable_survol.apply(this);
}
});


/* ../prive/javascript/js.cookie.js?1733220530 */

;
(function(global,factory){
typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory():
typeof define==='function'&&define.amd?define(factory):
(global=typeof globalThis!=='undefined'?globalThis:global||self,(function(){
var current=global.Cookies;
var exports=global.Cookies=factory();
exports.noConflict=function(){global.Cookies=current;return exports;};
})());
})(this,(function(){'use strict';
function assign(target){
for(var i=1;i<arguments.length;i++){
var source=arguments[i];
for(var key in source){
target[key]=source[key];
}
}
return target
}
var defaultConverter={
read:function(value){
if(value[0]==='"'){
value=value.slice(1,-1);
}
return value.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)
},
write:function(value){
return encodeURIComponent(value).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,
decodeURIComponent
)
}
};
function init(converter,defaultAttributes){
function set(name,value,attributes){
if(typeof document==='undefined'){
return
}
attributes=assign({},defaultAttributes,attributes);
if(typeof attributes.expires==='number'){
attributes.expires=new Date(Date.now()+attributes.expires*864e5);
}
if(attributes.expires){
attributes.expires=attributes.expires.toUTCString();
}
name=encodeURIComponent(name)
.replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent)
.replace(/[()]/g,escape);
var stringifiedAttributes='';
for(var attributeName in attributes){
if(!attributes[attributeName]){
continue
}
stringifiedAttributes+='; '+attributeName;
if(attributes[attributeName]===true){
continue
}
stringifiedAttributes+='='+attributes[attributeName].split(';')[0];
}
return(document.cookie=
name+'='+converter.write(value,name)+stringifiedAttributes)
}
function get(name){
if(typeof document==='undefined'||(arguments.length&&!name)){
return
}
var cookies=document.cookie?document.cookie.split('; '):[];
var jar={};
for(var i=0;i<cookies.length;i++){
var parts=cookies[i].split('=');
var value=parts.slice(1).join('=');
try{
var found=decodeURIComponent(parts[0]);
jar[found]=converter.read(value,found);
if(name===found){
break
}
}catch(e){}
}
return name?jar[name]:jar
}
return Object.create(
{
set,
get,
remove:function(name,attributes){
set(
name,
'',
assign({},attributes,{
expires:-1
})
);
},
withAttributes:function(attributes){
return init(this.converter,assign({},this.attributes,attributes))
},
withConverter:function(converter){
return init(assign({},this.converter,converter),this.attributes)
}
},
{
attributes:{value:Object.freeze(defaultAttributes)},
converter:{value:Object.freeze(converter)}
}
)
}
var api=init(defaultConverter,{path:'/'});
return api;
}));


/* ../prive/javascript/spip_barre.js?1733220530 */

function barre_inserer(text,el=document.activeElement){
if(el.setRangeText){
const[start,end]=[el.selectionStart,el.selectionEnd];
el.setRangeText(text,start,end,'select');
const new_caret_pos=start+text.length;
el.setSelectionRange(new_caret_pos,new_caret_pos);
el.focus();
el.dispatchEvent(new Event('input'));
}
}


/* ../plugins-dist/bigup/javascript/bigup.utils.js?1733220530 */

function _T(code,contexte){
return Trads.traduire(code,contexte);
}
function Traductions(){
this.modules={};
};
Traductions.prototype={
set:function(module,couples_cle_traduction){
this.modules[module]=$.extend(this.modules[module]||{},couples_cle_traduction);
},
get:function(module,code,contexte){
if(typeof this.modules[module]==='undefined'){
return'';
}
if(typeof this.modules[module][code]==='undefined'){
return'';
}
var texte=this.modules[module][code];
$.each(contexte,function(cle,val){
texte=texte.replace('@'+cle+'@',val);
});
return texte;
},
traduire:function(code,contexte){
var desc=this.trouver_module_et_code(code);
return this.get(desc.module,desc.code,contexte)||code;
},
trouver_module_et_code:function(code){
var list=code.split(':',2);
var module=list.shift();
var cle=list.shift();
if(cle){
return{module:module,code:cle};
}
return{module:'spip',cle:module};
},
singulier_ou_pluriel:function(nb,code_singulier,code_pluriel){
return parseInt(nb,10)===1
?this.traduire(code_singulier)
:this.traduire(code_pluriel,{nb:nb});
}
};
Trads=new Traductions();
$.enlever_ancre=function(url){
var p=url.indexOf('#');
if(p!==-1){
url=url.substring(0,p);
}
return url;
};
$.nom2classe=function(nom){
return nom.replace(/\/|\[|&#91/g,'_').replace(/\]|&#93/g,'');
};
$.taille_en_octets=function(taille){
var ko=1024;
if(taille<ko){
return _T('unites:taille_octets',{taille:taille});
}else if(taille<ko*ko){
return _T('unites:taille_ko',{taille:Math.round(taille/ko*10)/10});
}else if(taille<ko*ko*ko){
return _T('unites:taille_mo',{taille:Math.round(taille/ko/ko*10)/10});
}else{
return _T('unites:taille_go',{taille:Math.round(taille/ko/ko/ko*10)/10});
}
};
$.trouver_extension=function(name){
const re=/(?:\.([^.]+))?$/;
let extension=re.exec(name)[1];
if(typeof extension==='undefined'){
return'';
}
extension=extension.toLowerCase();
switch(extension){
case'htm':
extension='html';
break;
case'jpeg':
extension='jpg';
break;
case'tiff':
extension='tif';
break;
case'aif':
extension='aiff';
break;
case'mpeg':
extension='mpg';
break;
}
return extension;
};
$.mime_type_image=function(extension){
extension=extension.toLowerCase();
var mime="image/"+extension;
switch(extension){
case'bmp':
mime="image/x-ms-bmp";
break;
case'jpg':
mime="image/jpeg";
break;
case'svg':
mime="image/svg+xml";
break;
case'tif':
mime="image/tiff";
break;
}
return mime;
};
$.escapeHtml=function(unsafe){
return unsafe
.replaceAll('&','&amp;')
.replaceAll('<','&lt;')
.replaceAll('>','&gt;')
.replaceAll('"','&quot;')
.replaceAll("'",'&#039;');
};


/* ../local/cache-js/jsdyn-javascript_bigup_trads_js-12af3dad.js?1737975822 */

Trads.set('unites',{
taille_octets:"@taille@ bytes",
taille_ko:"@taille@ kb",
taille_mo:"@taille@ Mb",
taille_go:"@taille@ Gb"
});
Trads.set('bigup',{
bouton_annuler:"Cancel",
bouton_enlever:"Remove",
choisir:"Choose",
deposer_vos_fichiers_ici:"Drop your files here",
deposer_votre_fichier_ici:"Drop your file here",
deposer_le_logo_ici:"Drop the LOGO here",
deposer_la_vignette_ici:"Drop the thumbnail here",
erreur_de_transfert:"Upload error",
erreur_taille_max:"Maximum file size is @taille@",
erreur_type_fichier:"Wrong file type!",
erreur_probleme_survenu:"A problem occurred…",
ou:"or",
succes_fichier_envoye:"File has been sent",
succes_logo_envoye:"Logo has been sent",
succes_vignette_envoyee:"Thumbnail has been sent",
televerser:"Upload"
});


/* ../plugins-dist/bigup/lib/flow/flow.js?1733220530 */

(function(window,document,undefined){'use strict';
if(!window||!document){
console.warn('Flowjs needs window and document objects to work');
return;
}
var ie10plus=window.navigator.msPointerEnabled;
function Flow(opts){
this.support=(
typeof File!=='undefined'&&
typeof Blob!=='undefined'&&
typeof FileList!=='undefined'&&
(
!!Blob.prototype.slice||!!Blob.prototype.webkitSlice||!!Blob.prototype.mozSlice||
false
)
);
if(!this.support){
return;
}
this.supportDirectory=(/Chrome/.test(window.navigator.userAgent)||/Firefox/.test(window.navigator.userAgent)||/Edge/.test(window.navigator.userAgent)
);
this.files=[];
this.defaults={
chunkSize:1024*1024,
forceChunkSize:false,
simultaneousUploads:3,
singleFile:false,
fileParameterName:'file',
progressCallbacksInterval:500,
speedSmoothingFactor:0.1,
query:{},
headers:{},
withCredentials:false,
preprocess:null,
changeRawDataBeforeSend:null,
method:'multipart',
testMethod:'GET',
uploadMethod:'POST',
prioritizeFirstAndLastChunk:false,
allowDuplicateUploads:false,
target:'/',
testChunks:true,
generateUniqueIdentifier:null,
maxChunkRetries:0,
chunkRetryInterval:null,
permanentErrors:[404,413,415,500,501],
successStatuses:[200,201,202],
onDropStopPropagation:false,
initFileFn:null,
readFileFn:webAPIFileRead
};
this.opts={};
this.events={};
var $=this;
this.onDrop=function(event){
if($.opts.onDropStopPropagation){
event.stopPropagation();
}
event.preventDefault();
var dataTransfer=event.dataTransfer;
if(dataTransfer.items&&dataTransfer.items[0]&&
dataTransfer.items[0].webkitGetAsEntry){
$.webkitReadDataTransfer(event);
}else{
$.addFiles(dataTransfer.files,event);
}
};
this.preventEvent=function(event){
event.preventDefault();
};
this.opts=Flow.extend({},this.defaults,opts||{});
}
Flow.prototype={
on:function(event,callback){
event=event.toLowerCase();
if(!this.events.hasOwnProperty(event)){
this.events[event]=[];
}
this.events[event].push(callback);
},
off:function(event,fn){
if(event!==undefined){
event=event.toLowerCase();
if(fn!==undefined){
if(this.events.hasOwnProperty(event)){
arrayRemove(this.events[event],fn);
}
}else{
delete this.events[event];
}
}else{
this.events={};
}
},
fire:function(event,args){
args=Array.prototype.slice.call(arguments);
event=event.toLowerCase();
var preventDefault=false;
if(this.events.hasOwnProperty(event)){
each(this.events[event],function(callback){
preventDefault=callback.apply(this,args.slice(1))===false||preventDefault;
},this);
}
if(event!='catchall'){
args.unshift('catchAll');
preventDefault=this.fire.apply(this,args)===false||preventDefault;
}
return!preventDefault;
},
webkitReadDataTransfer:function(event){
var $=this;
var queue=event.dataTransfer.items.length;
var files=[];
each(event.dataTransfer.items,function(item){
var entry=item.webkitGetAsEntry();
if(!entry){
decrement();
return;
}
if(entry.isFile){
fileReadSuccess(item.getAsFile(),entry.fullPath);
}else{
readDirectory(entry.createReader());
}
});
function readDirectory(reader){
reader.readEntries(function(entries){
if(entries.length){
queue+=entries.length;
each(entries,function(entry){
if(entry.isFile){
var fullPath=entry.fullPath;
entry.file(function(file){
fileReadSuccess(file,fullPath);
},readError);
}else if(entry.isDirectory){
readDirectory(entry.createReader());
}
});
readDirectory(reader);
}else{
decrement();
}
},readError);
}
function fileReadSuccess(file,fullPath){
file.relativePath=fullPath.substring(1);
files.push(file);
decrement();
}
function readError(fileError){
decrement();
throw fileError;
}
function decrement(){
if(--queue==0){
$.addFiles(files,event);
}
}
},
generateUniqueIdentifier:function(file){
var custom=this.opts.generateUniqueIdentifier;
if(typeof custom==='function'){
return custom(file);
}
var relativePath=file.relativePath||file.webkitRelativePath||file.fileName||file.name;
return file.size+'-'+relativePath.replace(/[^0-9a-zA-Z_-]/img,'');
},
uploadNextChunk:function(preventEvents){
var found=false;
if(this.opts.prioritizeFirstAndLastChunk){
each(this.files,function(file){
if(!file.paused&&file.chunks.length&&
file.chunks[0].status()==='pending'){
file.chunks[0].send();
found=true;
return false;
}
if(!file.paused&&file.chunks.length>1&&
file.chunks[file.chunks.length-1].status()==='pending'){
file.chunks[file.chunks.length-1].send();
found=true;
return false;
}
});
if(found){
return found;
}
}
each(this.files,function(file){
if(!file.paused){
each(file.chunks,function(chunk){
if(chunk.status()==='pending'){
chunk.send();
found=true;
return false;
}
});
}
if(found){
return false;
}
});
if(found){
return true;
}
var outstanding=false;
each(this.files,function(file){
if(!file.isComplete()){
outstanding=true;
return false;
}
});
if(!outstanding&&!preventEvents){
async(function(){
this.fire('complete');
},this);
}
return false;
},
assignBrowse:function(domNodes,isDirectory,singleFile,attributes){
if(domNodes instanceof Element){
domNodes=[domNodes];
}
each(domNodes,function(domNode){
var input;
if(domNode.tagName==='INPUT'&&domNode.type==='file'){
input=domNode;
}else{
input=document.createElement('input');
input.setAttribute('type','file');
extend(input.style,{
visibility:'hidden',
position:'absolute',
width:'1px',
height:'1px'
});
domNode.appendChild(input);
domNode.addEventListener('click',function(){
input.click();
},false);
}
if(!this.opts.singleFile&&!singleFile){
input.setAttribute('multiple','multiple');
}
if(isDirectory){
input.setAttribute('webkitdirectory','webkitdirectory');
}
each(attributes,function(value,key){
input.setAttribute(key,value);
});
var $=this;
input.addEventListener('change',function(e){
if(e.target.value){
$.addFiles(e.target.files,e);
e.target.value='';
}
},false);
},this);
},
assignDrop:function(domNodes){
if(typeof domNodes.length==='undefined'){
domNodes=[domNodes];
}
each(domNodes,function(domNode){
domNode.addEventListener('dragover',this.preventEvent,false);
domNode.addEventListener('dragenter',this.preventEvent,false);
domNode.addEventListener('drop',this.onDrop,false);
},this);
},
unAssignDrop:function(domNodes){
if(typeof domNodes.length==='undefined'){
domNodes=[domNodes];
}
each(domNodes,function(domNode){
domNode.removeEventListener('dragover',this.preventEvent);
domNode.removeEventListener('dragenter',this.preventEvent);
domNode.removeEventListener('drop',this.onDrop);
},this);
},
isUploading:function(){
var uploading=false;
each(this.files,function(file){
if(file.isUploading()){
uploading=true;
return false;
}
});
return uploading;
},
_shouldUploadNext:function(){
var num=0;
var should=true;
var simultaneousUploads=this.opts.simultaneousUploads;
each(this.files,function(file){
each(file.chunks,function(chunk){
if(chunk.status()==='uploading'){
num++;
if(num>=simultaneousUploads){
should=false;
return false;
}
}
});
});
return should&&num;
},
upload:function(){
var ret=this._shouldUploadNext();
if(ret===false){
return;
}
this.fire('uploadStart');
var started=false;
for(var num=1;num<=this.opts.simultaneousUploads-ret;num++){
started=this.uploadNextChunk(true)||started;
}
if(!started){
async(function(){
this.fire('complete');
},this);
}
},
resume:function(){
each(this.files,function(file){
if(!file.isComplete()){
file.resume();
}
});
},
pause:function(){
each(this.files,function(file){
file.pause();
});
},
cancel:function(){
for(var i=this.files.length-1;i>=0;i--){
this.files[i].cancel();
}
},
progress:function(){
var totalDone=0;
var totalSize=0;
each(this.files,function(file){
totalDone+=file.progress()*file.size;
totalSize+=file.size;
});
return totalSize>0?totalDone/totalSize:0;
},
addFile:function(file,event){
this.addFiles([file],event);
},
addFiles:function(fileList,event){
var files=[];
each(fileList,function(file){
if((!ie10plus||ie10plus&&file.size>0)&&!(file.size%4096===0&&(file.name==='.'||file.fileName==='.'))){
var uniqueIdentifier=this.generateUniqueIdentifier(file);
if(this.opts.allowDuplicateUploads||!this.getFromUniqueIdentifier(uniqueIdentifier)){
var f=new FlowFile(this,file,uniqueIdentifier);
if(this.fire('fileAdded',f,event)){
files.push(f);
}
}
}
},this);
if(this.fire('filesAdded',files,event)){
each(files,function(file){
if(this.opts.singleFile&&this.files.length>0){
this.removeFile(this.files[0]);
}
this.files.push(file);
},this);
this.fire('filesSubmitted',files,event);
}
},
removeFile:function(file){
for(var i=this.files.length-1;i>=0;i--){
if(this.files[i]===file){
this.files.splice(i,1);
file.abort();
this.fire('fileRemoved',file);
}
}
},
getFromUniqueIdentifier:function(uniqueIdentifier){
var ret=false;
each(this.files,function(file){
if(file.uniqueIdentifier===uniqueIdentifier){
ret=file;
}
});
return ret;
},
getSize:function(){
var totalSize=0;
each(this.files,function(file){
totalSize+=file.size;
});
return totalSize;
},
sizeUploaded:function(){
var size=0;
each(this.files,function(file){
size+=file.sizeUploaded();
});
return size;
},
timeRemaining:function(){
var sizeDelta=0;
var averageSpeed=0;
each(this.files,function(file){
if(!file.paused&&!file.error){
sizeDelta+=file.size-file.sizeUploaded();
averageSpeed+=file.averageSpeed;
}
});
if(sizeDelta&&!averageSpeed){
return Number.POSITIVE_INFINITY;
}
if(!sizeDelta&&!averageSpeed){
return 0;
}
return Math.floor(sizeDelta/averageSpeed);
}
};
function FlowFile(flowObj,file,uniqueIdentifier){
this.flowObj=flowObj;
this.bytes=null;
this.file=file;
this.name=file.fileName||file.name;
this.size=file.size;
this.relativePath=file.relativePath||file.webkitRelativePath||this.name;
this.uniqueIdentifier=(uniqueIdentifier===undefined?flowObj.generateUniqueIdentifier(file):uniqueIdentifier);
this.chunkSize=0;
this.chunks=[];
this.paused=false;
this.error=false;
this.averageSpeed=0;
this.currentSpeed=0;
this._lastProgressCallback=Date.now();
this._prevUploadedSize=0;
this._prevProgress=0;
this.bootstrap();
}
FlowFile.prototype={
measureSpeed:function(){
var timeSpan=Date.now()-this._lastProgressCallback;
if(!timeSpan){
return;
}
var smoothingFactor=this.flowObj.opts.speedSmoothingFactor;
var uploaded=this.sizeUploaded();
this.currentSpeed=Math.max((uploaded-this._prevUploadedSize)/timeSpan*1000,0);
this.averageSpeed=smoothingFactor*this.currentSpeed+(1-smoothingFactor)*this.averageSpeed;
this._prevUploadedSize=uploaded;
},
chunkEvent:function(chunk,event,message){
switch(event){
case'progress':
if(Date.now()-this._lastProgressCallback<
this.flowObj.opts.progressCallbacksInterval){
break;
}
this.measureSpeed();
this.flowObj.fire('fileProgress',this,chunk);
this.flowObj.fire('progress');
this._lastProgressCallback=Date.now();
break;
case'error':
this.error=true;
this.abort(true);
this.flowObj.fire('fileError',this,message,chunk);
this.flowObj.fire('error',message,this,chunk);
break;
case'success':
if(this.error){
return;
}
this.measureSpeed();
this.flowObj.fire('fileProgress',this,chunk);
this.flowObj.fire('progress');
this._lastProgressCallback=Date.now();
if(this.isComplete()){
this.currentSpeed=0;
this.averageSpeed=0;
this.flowObj.fire('fileSuccess',this,message,chunk);
}
break;
case'retry':
this.flowObj.fire('fileRetry',this,chunk);
break;
}
},
pause:function(){
this.paused=true;
this.abort();
},
resume:function(){
this.paused=false;
this.flowObj.upload();
},
abort:function(reset){
this.currentSpeed=0;
this.averageSpeed=0;
var chunks=this.chunks;
if(reset){
this.chunks=[];
}
each(chunks,function(c){
if(c.status()==='uploading'){
c.abort();
this.flowObj.uploadNextChunk();
}
},this);
},
cancel:function(){
this.flowObj.removeFile(this);
},
retry:function(){
this.bootstrap();
this.flowObj.upload();
},
bootstrap:function(){
if(typeof this.flowObj.opts.initFileFn==="function"){
this.flowObj.opts.initFileFn(this);
}
this.abort(true);
this.error=false;
this._prevProgress=0;
var round=this.flowObj.opts.forceChunkSize?Math.ceil:Math.floor;
this.chunkSize=evalOpts(this.flowObj.opts.chunkSize,this);
var chunks=Math.max(
round(this.size/this.chunkSize),1
);
for(var offset=0;offset<chunks;offset++){
this.chunks.push(
new FlowChunk(this.flowObj,this,offset)
);
}
},
progress:function(){
if(this.error){
return 1;
}
if(this.chunks.length===1){
this._prevProgress=Math.max(this._prevProgress,this.chunks[0].progress());
return this._prevProgress;
}
var bytesLoaded=0;
each(this.chunks,function(c){
bytesLoaded+=c.progress()*(c.endByte-c.startByte);
});
var percent=bytesLoaded/this.size;
this._prevProgress=Math.max(this._prevProgress,percent>0.9999?1:percent);
return this._prevProgress;
},
isUploading:function(){
var uploading=false;
each(this.chunks,function(chunk){
if(chunk.status()==='uploading'){
uploading=true;
return false;
}
});
return uploading;
},
isComplete:function(){
var outstanding=false;
each(this.chunks,function(chunk){
var status=chunk.status();
if(status==='pending'||status==='uploading'||status==='reading'||chunk.preprocessState===1||chunk.readState===1){
outstanding=true;
return false;
}
});
return!outstanding;
},
sizeUploaded:function(){
var size=0;
each(this.chunks,function(chunk){
size+=chunk.sizeUploaded();
});
return size;
},
timeRemaining:function(){
if(this.paused||this.error){
return 0;
}
var delta=this.size-this.sizeUploaded();
if(delta&&!this.averageSpeed){
return Number.POSITIVE_INFINITY;
}
if(!delta&&!this.averageSpeed){
return 0;
}
return Math.floor(delta/this.averageSpeed);
},
getType:function(){
return this.file.type&&this.file.type.split('/')[1];
},
getExtension:function(){
return this.name.substr((~-this.name.lastIndexOf(".")>>>0)+2).toLowerCase();
}
};
function webAPIFileRead(fileObj,startByte,endByte,fileType,chunk){
var function_name='slice';
if(fileObj.file.slice)
function_name='slice';
else if(fileObj.file.mozSlice)
function_name='mozSlice';
else if(fileObj.file.webkitSlice)
function_name='webkitSlice';
chunk.readFinished(fileObj.file[function_name](startByte,endByte,fileType));
}
function FlowChunk(flowObj,fileObj,offset){
this.flowObj=flowObj;
this.fileObj=fileObj;
this.offset=offset;
this.tested=false;
this.retries=0;
this.pendingRetry=false;
this.preprocessState=0;
this.readState=0;
this.loaded=0;
this.total=0;
this.chunkSize=this.fileObj.chunkSize;
this.startByte=this.offset*this.chunkSize;
this.filename=null;
this.computeEndByte=function(){
var endByte=Math.min(this.fileObj.size,(this.offset+1)*this.chunkSize);
if(this.fileObj.size-endByte<this.chunkSize&&!this.flowObj.opts.forceChunkSize){
endByte=this.fileObj.size;
}
return endByte;
}
this.endByte=this.computeEndByte();
this.xhr=null;
var $=this;
this.event=function(event,args){
args=Array.prototype.slice.call(arguments);
args.unshift($);
$.fileObj.chunkEvent.apply($.fileObj,args);
};
this.progressHandler=function(event){
if(event.lengthComputable){
$.loaded=event.loaded;
$.total=event.total;
}
$.event('progress',event);
};
this.testHandler=function(event){
var status=$.status(true);
if(status==='error'){
$.event(status,$.message());
$.flowObj.uploadNextChunk();
}else if(status==='success'){
$.tested=true;
$.event(status,$.message());
$.flowObj.uploadNextChunk();
}else if(!$.fileObj.paused){
$.tested=true;
$.send();
}
};
this.doneHandler=function(event){
var status=$.status();
if(status==='success'||status==='error'){
delete this.data;
$.event(status,$.message());
$.flowObj.uploadNextChunk();
}else if(!$.fileObj.paused){
$.event('retry',$.message());
$.pendingRetry=true;
$.abort();
$.retries++;
var retryInterval=$.flowObj.opts.chunkRetryInterval;
if(retryInterval!==null){
setTimeout(function(){
$.send();
},retryInterval);
}else{
$.send();
}
}
};
}
FlowChunk.prototype={
getParams:function(){
return{
flowChunkNumber:this.offset+1,
flowChunkSize:this.chunkSize,
flowCurrentChunkSize:this.endByte-this.startByte,
flowTotalSize:this.fileObj.size,
flowIdentifier:this.fileObj.uniqueIdentifier,
flowFilename:this.fileObj.name,
flowRelativePath:this.fileObj.relativePath,
flowTotalChunks:this.fileObj.chunks.length
};
},
getTarget:function(target,params){
if(params.length==0){
return target;
}
if(target.indexOf('?')<0){
target+='?';
}else{
target+='&';
}
return target+params.join('&');
},
test:function(){
this.xhr=new XMLHttpRequest();
this.xhr.addEventListener("load",this.testHandler,false);
this.xhr.addEventListener("error",this.testHandler,false);
var testMethod=evalOpts(this.flowObj.opts.testMethod,this.fileObj,this);
var data=this.prepareXhrRequest(testMethod,true);
this.xhr.send(data);
},
preprocessFinished:function(){
this.endByte=this.computeEndByte();
this.preprocessState=2;
this.send();
},
readFinished:function(bytes){
this.readState=2;
this.bytes=bytes;
this.send();
},
send:function(){
var preprocess=this.flowObj.opts.preprocess;
var read=this.flowObj.opts.readFileFn;
if(typeof preprocess==='function'){
switch(this.preprocessState){
case 0:
this.preprocessState=1;
preprocess(this);
return;
case 1:
return;
}
}
switch(this.readState){
case 0:
this.readState=1;
read(this.fileObj,this.startByte,this.endByte,this.fileObj.file.type,this);
return;
case 1:
return;
}
if(this.flowObj.opts.testChunks&&!this.tested){
this.test();
return;
}
this.loaded=0;
this.total=0;
this.pendingRetry=false;
this.xhr=new XMLHttpRequest();
this.xhr.upload.addEventListener('progress',this.progressHandler,false);
this.xhr.addEventListener("load",this.doneHandler,false);
this.xhr.addEventListener("error",this.doneHandler,false);
var uploadMethod=evalOpts(this.flowObj.opts.uploadMethod,this.fileObj,this);
var data=this.prepareXhrRequest(uploadMethod,false,this.flowObj.opts.method,this.bytes);
var changeRawDataBeforeSend=this.flowObj.opts.changeRawDataBeforeSend;
if(typeof changeRawDataBeforeSend==='function'){
data=changeRawDataBeforeSend(this,data);
}
this.xhr.send(data);
},
abort:function(){
var xhr=this.xhr;
this.xhr=null;
if(xhr){
xhr.abort();
}
},
status:function(isTest){
if(this.readState===1){
return'reading';
}else if(this.pendingRetry||this.preprocessState===1){
return'uploading';
}else if(!this.xhr){
return'pending';
}else if(this.xhr.readyState<4){
return'uploading';
}else{
if(this.flowObj.opts.successStatuses.indexOf(this.xhr.status)>-1){
return'success';
}else if(this.flowObj.opts.permanentErrors.indexOf(this.xhr.status)>-1||
!isTest&&this.retries>=this.flowObj.opts.maxChunkRetries){
return'error';
}else{
this.abort();
return'pending';
}
}
},
message:function(){
return this.xhr?this.xhr.responseText:'';
},
progress:function(){
if(this.pendingRetry){
return 0;
}
var s=this.status();
if(s==='success'||s==='error'){
return 1;
}else if(s==='pending'){
return 0;
}else{
return this.total>0?this.loaded/this.total:0;
}
},
sizeUploaded:function(){
var size=this.endByte-this.startByte;
if(this.status()!=='success'){
size=this.progress()*size;
}
return size;
},
prepareXhrRequest:function(method,isTest,paramsMethod,blob){
var query=evalOpts(this.flowObj.opts.query,this.fileObj,this,isTest);
query=extend(query||{},this.getParams());
var target=evalOpts(this.flowObj.opts.target,this.fileObj,this,isTest);
var data=null;
if(method==='GET'||paramsMethod==='octet'){
var params=[];
each(query,function(v,k){
params.push([encodeURIComponent(k),encodeURIComponent(v)].join('='));
});
target=this.getTarget(target,params);
data=blob||null;
}else{
data=new FormData();
each(query,function(v,k){
data.append(k,v);
});
if(typeof blob!=="undefined"){
data.append(this.flowObj.opts.fileParameterName,blob,this.filename||this.fileObj.file.name);
}
}
this.xhr.open(method,target,true);
this.xhr.withCredentials=this.flowObj.opts.withCredentials;
each(evalOpts(this.flowObj.opts.headers,this.fileObj,this,isTest),function(v,k){
this.xhr.setRequestHeader(k,v);
},this);
return data;
}
};
function arrayRemove(array,value){
var index=array.indexOf(value);
if(index>-1){
array.splice(index,1);
}
}
function evalOpts(data,args){
if(typeof data==="function"){
args=Array.prototype.slice.call(arguments);
data=data.apply(null,args.slice(1));
}
return data;
}
Flow.evalOpts=evalOpts;
function async(fn,context){
setTimeout(fn.bind(context),0);
}
function extend(dst,src){
each(arguments,function(obj){
if(obj!==dst){
each(obj,function(value,key){
dst[key]=value;
});
}
});
return dst;
}
Flow.extend=extend;
function each(obj,callback,context){
if(!obj){
return;
}
var key;
if(typeof(obj.length)!=='undefined'){
for(key=0;key<obj.length;key++){
if(callback.call(context,obj[key],key)===false){
return;
}
}
}else{
for(key in obj){
if(obj.hasOwnProperty(key)&&callback.call(context,obj[key],key)===false){
return;
}
}
}
}
Flow.each=each;
Flow.FlowFile=FlowFile;
Flow.FlowChunk=FlowChunk;
Flow.version='2.14.1';
if(typeof module==="object"&&module&&typeof module.exports==="object"){
module.exports=Flow;
}else{
window.Flow=Flow;
if(typeof define==="function"&&define.amd){
define("flow",[],function(){return Flow;});
}
}
})(typeof window!=='undefined'&&window,typeof document!=='undefined'&&document);


/* ../plugins-dist/bigup/javascript/bigup.js?1733220530 */

$.fn.bigup=function(options,callbacks){
var options=options||{};
var callbacks=callbacks||{};
var inputs_a_gerer=$(this)
.not('.bigup_done')
.each(function(){
var $editer=$(this).closest('.editer');
if($editer.length){
$editer.addClass('biguping');
var h=$editer.get(0).offsetHeight;
var s=$editer.attr('style');
if(typeof s==='undefined'){
s='';
}
$editer.attr('data-prev-style',s);
s+='height:'+h+'px;overflow:hidden';
$editer.attr('style',s);
}
$(this).addClass('bigup_done');
var $input=$(this);
var $form=$input.parents('form');
var sinon=function(valeur,defaut){
return valeur?valeur:defaut;
};
var conf=$.extend(
true,
{
maxFileSize:0,
},
$.bigup_config||{}
);
var bigup=new Bigup(
{
form:$form,
input:$input,
formulaire_action:$form.find('input[name=formulaire_action]').val(),
formulaire_action_args:$form.find('input[name=formulaire_action_args]').val(),
token:$input.data('token'),
},
{
contraintes:{
accept:$input.prop('accept'),
maxFiles:$input.prop('multiple')?sinon($input.data('maxfiles'),0):1,
maxFileSize:sinon($input.data('maxfilesize'),conf.maxFileSize),
clientWidth:sinon($input.data('clientwidth'),conf.clientWidth),
clientHeight:sinon($input.data('clientheight'),conf.clientHeight),
clientQuality:sinon($input.data('clientquality'),conf.clientQuality),
},
},
callbacks
);
if(!bigup.support){
return false;
}
bigup.integrer_fichiers_presents();
bigup.gerer_depot_fichiers();
if($editer.length){
$editer.attr('style',$editer.attr('data-prev-style'));
$editer.attr('data-prev-style',null);
$editer.addClass('editer_with_bigup').removeClass('biguping');
}
});
return inputs_a_gerer;
};
function Bigup(params,opts,callbacks){
this.form=params.form;
this.input=params.input;
this.formulaire_action=params.formulaire_action;
this.formulaire_action_args=params.formulaire_action_args;
this.token=params.token;
this.target=$.enlever_ancre(this.form.attr('action'));
this.name=this.input.attr('name');
this.class_name=$.nom2classe(this.name);
this.multiple=this.input.prop('multiple');
this.zones={
depot:null,
depot_etendu:null,
fichiers:null,
};
this.defaults={
contraintes:{
accept:'',
maxFiles:1,
maxFileSize:0,
clientQuality:0.8,
clientWidth:0,
clientHeight:0,
},
options:{
previsualisation:{
activer:!!this.input.data('previsualiser'),
fileSizeMax:10,
},
},
flow:{
simultaneousUploads:2,
permanentErrors:[403,404,413,415,500,501],
chunkRetryInterval:1000,
maxChunkRetries:5,
},
templates:{
zones:{
depot:function(name,multiple){
var template=
'\n<div class="dropfile dropfile_'+
name+
'" style="display:none;">'+
'\n\t<button type="button" class="dropfilebutton bigup-btn btn btn-default">'+
_T('bigup:choisir')+
'</button>'+
'\n\t<span class="dropfileor">'+
_T('bigup:ou')+
'</span>'+
'\n\t<span class="dropfiletext">'+
'\n\t\t'+
Trads.singulier_ou_pluriel(
multiple?2:1,
'bigup:deposer_votre_fichier_ici',
'bigup:deposer_vos_fichiers_ici'
)+
'\n\t</:span:>'+
'\n</div>\n';
return template;
},
fichiers:function(name){
var template="<div class='bigup_fichiers fichiers_"+name+"'></div>";
return template;
},
},
fichier:function(file){
var extension=$.trouver_extension(file.name);
var template=
'\n<div class="fichier">'+
'\n\t<div class="description">'+
'\n\t\t<div class="vignette_extension '+
$.escapeHtml(extension)+
'" title="'+
file.type+
'"><span></span></div>'+
'\n\t\t<div class="infos">'+
'\n\t\t\t<span class="name"><strong>'+
$.escapeHtml(file.name)+
'</strong></span>'+
'\n\t\t\t<span class="size">'+
$.taille_en_octets(file.size)+
'</span>'+
'\n\t\t</div>'+
'\n\t\t<div class="actions">'+
'\n\t\t\t<button type="button" class="bigup-btn btn btn-default cancel" onClick="$.bigup_enlever_fichier(this);">'+
_T('bigup:bouton_annuler')+
'</button>'+
'\n\t\t</div>'+
'\n\t</div>'+
'\n</div>\n';
return template;
},
},
};
this.opts=$.extend(true,this.defaults,opts||{});
this.singleFile=!this.multiple||this.opts.contraintes.maxFiles===1;
var me=this;
$.each(callbacks||{},function(nom,callback){
me.input.on('bigup.'+nom,callback);
});
this.flow=new Flow({
input:this.input,
target:this.target,
testChunks:true,
maxFiles:this.opts.contraintes.maxFiles,
singleFile:this.singleFile,
simultaneousUploads:this.opts.flow.simultaneousUploads,
permanentErrors:this.opts.flow.permanentErrors,
chunkRetryInterval:this.opts.flow.chunkRetryInterval,
maxChunkRetries:this.opts.flow.maxChunkRetries,
onDropStopPropagation:true,
query:{
action:'bigup',
bigup_token:this.token,
formulaire_action:this.formulaire_action,
formulaire_action_args:this.formulaire_action_args,
},
});
this.support=this.flow.support;
this.input.data('bigup',this);
this.onDropExtended=function(event){
if(me.eventHasFiles(event)){
me.flow.onDrop(event);
$('.bigup-extended-drop-zone.drag-over').trigger('dragleave');
}
};
}
Bigup.prototype={
setOptions:function(options){
options=options||{};
this.opts.options=$.extend(true,this.opts.options,options);
},
integrer_fichiers_presents:function(){
this.creer_zone_fichiers();
var me=this;
this.zones.fichiers.find('.fichier').each(function(){
var $button=$(this).find('button[name=bigup_enlever_fichier]');
var identifiant=$button.val();
$button.remove();
$(this).data('bigup',me).data('identifiant',identifiant);
me.ajouter_bouton_enlever(this);
});
this.input.trigger('bigup.ready',[me]);
},
ajouter_bouton_enlever:function(fichier){
var js='$.bigup_enlever_fichier(this);';
var inserer=
'<button type="button" class="bigup-btn btn btn-default" onClick="'+js+'">'+_T('bigup:bouton_enlever')+'</button>';
$(fichier).find('.actions').append(inserer);
return this;
},
gerer_depot_fichiers:function(){
this.definir_zone_depot();
var me=this;
this.flow.on('fileAdded',function(file,event){
me.ajouter_fichier(file);
me.input.trigger('bigup.fileAdded',[file]);
me.adapter_visibilite_zone_depot();
if(!me.accepter_fichier(file)){
me.presenter_erreur(file.emplacement,file.erreur);
return false;
}
});
this.flow.on('filesSubmitted',function(files){
const isFileCompress=
me.defaults.contraintes.clientWidth>0||me.defaults.contraintes.clientHeight>0?true:false;
const Timage=['image/jpeg','image/png','image/webp'];
if(files.length){
$.each(files,function(key,file){
me.progress.ajouter(file.emplacement);
me.input.trigger('bigup.fileSubmitted',[file]);
if(isFileCompress&&Timage.includes(file.file.type)){
const size=file.file.size;
compress(
file,
me.defaults.contraintes.clientWidth,
me.defaults.contraintes.clientHeight,
me.defaults.contraintes.clientQuality
).then((is_compressed)=>{
if(is_compressed){
console.debug('Image d’origine retaillée',{
name:file.name,
old_size:size,
new_size:file.file.size,
});
}
me.flow.upload();
});
}else{
me.flow.upload();
}
});
}
});
this.flow.on('fileProgress',function(file,chunk){
var percent=Math.round((file._prevUploadedSize/file.size)*100);
var progress=file.emplacement.find('progress');
progress.text(percent+' %');
me.progress.animer(progress,percent);
});
this.flow.on('fileSuccess',function(file,message,chunk){
var desc='';
try{
desc=JSON.parse(message);
file.emplacement.find('.cancel').fadeOut('normal',function(){
$(this).remove();
if(desc.bigup.identifiant){
file.emplacement.data('identifiant',desc.bigup.identifiant);
me.ajouter_bouton_enlever(file.emplacement);
}
});
me.progress.retirer(file.emplacement.find('progress'));
me.input.trigger('bigup.fileSuccess',[file,desc]);
}catch(e){
desc=_T('bigup:erreur_de_transfert')+' : '+e;
me.progress.retirer(file.emplacement.find('progress'));
me.presenter_erreur(file.emplacement,desc);
}
});
this.flow.on('fileRemoved',function(file){
if(!file.bigup_deleted){
me.enlever_fichier(file.emplacement);
}
});
this.flow.on('complete',function(){
me.input.trigger('bigup.complete');
});
this.flow.on('fileError',function(file,message,chunk){
var message_erreur=_T('bigup:erreur_de_transfert');
if(message){
try{
data=JSON.parse(message);
if(typeof data.error!=='undefined'){
message_erreur=data.error;
}
}catch(e){
let title=message.match(/<title>(.*)<\/title>/)||message.match(/<h1>(.*)<\/h1>/);
if(title&&title[1]){
message_erreur+='<br>Got HTML titled "'+title[1]+'" instead of JSON';
}else{
message_erreur+='<br>'+e;
}
}
}
me.progress.retirer(file.emplacement.find('progress'));
me.presenter_erreur(file.emplacement,message_erreur);
});
},
definir_zone_depot:function(){
this.input.hide();
this.creer_zone_depot();
this.adapter_visibilite_zone_depot();
this.flow.assignBrowse(this.zones.depot.find('.dropfilebutton'),false,!this.multiple,{
accept:this.opts.contraintes.accept,
});
this.assignDropExtended(this.zones.depot_etendu);
},
creer_zone_depot:function(){
$.bigup_verifier_depots_etendus();
var $zone_depot=this.form.find('.dropfile_'+this.class_name);
if(!$zone_depot.length){
var template=this.opts.templates.zones.depot(this.class_name,!this.singleFile);
this.input.after(template);
$zone_depot=this.form.find('.dropfile_'+this.class_name);
}
var $depot_etendu=$zone_depot;
var depot_etendu=this.input.data('drop-zone-extended');
if(typeof depot_etendu!=='undefined'){
$depot_etendu=jQuery(depot_etendu)
.not('.bigup-extended-drop-zone')
.addClass('bigup-extended-drop-zone')
.data('bigup',this)
.add($zone_depot);
}
var me=this;
$depot_etendu.on('dragenter dragover',function(event){
if(me.eventHasFiles(event.originalEvent)){
$(this).addClass('drag-over');
$zone_depot.addClass('drag-target');
}
});
$depot_etendu.on('dragleave',function(){
$(this).removeClass('drag-over');
$zone_depot.removeClass('drag-target');
});
$depot_etendu.on('drop',function(){
$depot_etendu.removeClass('drag-target').removeClass('drag-over');
});
this.zones.depot=$zone_depot;
this.zones.depot_etendu=$depot_etendu;
},
creer_zone_fichiers:function(){
var $fichiers=this.form.find('.fichiers_'+this.class_name);
if(!$fichiers.length){
var template=this.opts.templates.zones.fichiers(this.class_name);
this.input.before(template);
$fichiers=this.form.find('.fichiers_'+this.class_name);
}
this.zones.fichiers=$fichiers;
},
adapter_visibilite_zone_depot:function(){
var nb=this.zones.fichiers.find('.fichier').length;
if(!this.opts.contraintes.maxFiles||this.opts.contraintes.maxFiles>nb){
this.zones.depot.show();
}else{
this.zones.depot.hide();
}
},
accepter_fichier:function(file){
if(this.opts.contraintes.maxFileSize){
var taille=this.opts.contraintes.maxFileSize*1024*1024;
if(file.size>taille){
file.erreur=_T('bigup:erreur_taille_max',{taille:$.taille_en_octets(taille)});
return false;
}
}
if(this.opts.contraintes.accept){
var accept=this.opts.contraintes.accept;
if(accept&&!this.valider_fichier(file.file,accept)){
file.erreur=_T('bigup:erreur_type_fichier');
return false;
}
}
return true;
},
valider_fichier:function(file,acceptedFiles){
var baseMimeType,mimeType,validType,_i,_len;
if(!acceptedFiles){
return true;
}
acceptedFiles=acceptedFiles.split(',');
mimeType=file.type;
baseMimeType=mimeType.replace(/\/.*$/,'');
for(_i=0,_len=acceptedFiles.length;_i<_len;_i++){
validType=acceptedFiles[_i];
validType=validType.trim();
if(validType.charAt(0)==='.'){
if(
file.name.toLowerCase().indexOf(validType.toLowerCase(),file.name.length-validType.length)!==-1
){
return true;
}
}else if(/\/\*$/.test(validType)){
if(baseMimeType===validType.replace(/\/.*$/,'')){
return true;
}
}else{
if(mimeType===validType){
return true;
}
}
}
return false;
},
ajouter_fichier:function(file){
file.bigup=this;
this.creer_zone_fichiers();
var template=this.opts.templates.fichier(file.file);
this.zones.fichiers.append(template);
var fichier=this.zones.fichiers.find('.fichier:last-child');
file.emplacement=fichier;
this.presenter_previsualisation(file);
fichier.animateAppend().data('file',file).data('bigup',this);
return true;
},
enlever_fichier:function(emplacement){
var me=this;
emplacement.addClass('annuler');
var identifiant=emplacement.data('identifiant');
if((file=emplacement.data('file'))){
file.abort();
file.bigup_deleted=true;
file.cancel();
if(!identifiant){
identifiant=file.uniqueIdentifier;
}
}
this.post({
bigup_action:'effacer',
identifiant:identifiant,
})
.done(function(){
emplacement.animateRemove(function(){
$(this).remove();
me.adapter_visibilite_zone_depot();
me.input.trigger('bigup.fileRemoved',[file]);
});
})
.fail(function(){
emplacement.removeClass('annuler');
me.presenter_erreur(emplacement,_T('bigup:erreur_probleme_survenu'));
});
},
post:function(data){
data=$.extend(
{
action:'bigup',
formulaire_action:this.formulaire_action,
formulaire_action_args:this.formulaire_action_args,
bigup_token:this.token,
},
data
);
return $.post(this.target,data);
},
send:function(data,options){
const ajaxOptions=Object.assign(
{
type:'POST',
url:this.target,
data:data,
processData:false,
contentType:false,
cache:false,
},
options||{}
);
return $.ajax(ajaxOptions);
},
presenter_erreur:function(emplacement,message){
emplacement
.addClass('erreur')
.find('.infos')
.append("<span class='message_erreur'>"+message+'</span>');
return this;
},
presenter_succes:function(emplacement,message){
emplacement
.addClass('succes')
.find('.infos')
.append("<span class='message_ok'>"+message+'</span>');
return this;
},
presenter_previsualisation:function(file){
if(!this.opts.options.previsualisation.activer){
return false;
}
if(this.opts.options.previsualisation.fileSizeMax){
var taille=this.opts.options.previsualisation.fileSizeMax*1024*1024;
if(file.file.size>taille){
return false;
}
}
this.readURL(file.file,function(){
if(this.result){
var title=
file.emplacement.find('.infos .name').text()+
' ('+
file.emplacement.find('.infos .size').text()+
')';
file.emplacement
.find('.vignette_extension')
.removeClass('vignette_extension')
.addClass('previsualisation')
.attr('title',title)
.find('> span')
.css('background-image','url('+this.result+')');
}
});
},
readURL:function(file,callback){
if(file){
var reader=new FileReader();
var imageType=/^image\/(?:bmp|cis\-cod|gif|ief|jpeg|jpeg|jpeg|pipeg|png|svg\+xml|tiff|webp|x\-cmu\-raster|x\-cmx|x\-icon|x\-portable\-anymap|x\-portable\-bitmap|x\-portable\-graymap|x\-portable\-pixmap|x\-rgb|x\-xbitmap|x\-xpixmap|x\-xwindowdump)$/i;
if(!file.type.match(imageType)){
return false;
}
if(typeof callback=='function'){
reader.addEventListener('load',callback);
}
reader.readAsDataURL(file);
return true;
}
return false;
},
progress:{
ajouter:function(emplacement){
var progress=$('<progress value="0" max="100" style="display:none">0 %</progress>');
emplacement.append(progress);
progress.fadeIn(1000);
return this;
},
animer:function(progress,val){
progress.each(function(){
var me=this;
$({percent:me.value}).animate(
{percent:val},
{
duration:200,
step:function(){
me.value=this.percent;
},
}
);
});
return this;
},
retirer:function(progress){
progress.delay(200).fadeOut('normal',function(){
$(this).slideUp('normal',function(){
$(this).remove();
});
});
return this;
},
},
getFormData:function(){
console.info(
'Method `bigup.getFormData` is deprecated and will be removed in future version of Bigup.',
'Please use `bigup.buildFormData` instead and adapt your code (see #4861)'
);
var inputName,inputType;
var data={};
this.form.find('input, textarea, select, button').each(function(){
inputName=$(this).attr('name');
inputType=$(this).attr('type');
if(inputName){
if(this.tagName==='SELECT'&&this.hasAttribute('multiple')){
$.each(this.options,function(key,option){
if(option.selected){
data[inputName]=option.value;
}
});
}else if(
!inputType||
$.inArray(inputType,['file','checkbox','radio','submit'])==-1||
this.checked
){
data[inputName]=this.value;
}
}
});
return data;
},
buildFormData:function(){
const formData=new FormData();
const form=this.form[0];
for(let input of form.querySelectorAll('input, textarea, select, button')){
let inputName=input.getAttribute('name');
let inputType=input.getAttribute('type');
if(inputType)inputType=inputType.toLowerCase();
if(typeof inputName==='undefined'||inputName===null)continue;
if(input.tagName==='SELECT'&&input.hasAttribute('multiple')){
for(let option of input.options){
if(option.selected){
formData.append(inputName,option.value);
}
}
}else if(
!inputType||
(inputType!=='checkbox'&&inputType!=='radio'&&inputType!=='file'&&inputType!=='submit')||
input.checked
){
formData.append(inputName,input.value);
}
}
return formData;
},
assignDropExtended:function(domNodes){
if(typeof domNodes.length==='undefined'){
domNodes=[domNodes];
}
Flow.each(
domNodes,
function(domNode){
domNode.addEventListener('dragover',this.flow.preventEvent,false);
domNode.addEventListener('dragenter',this.flow.preventEvent,false);
domNode.addEventListener('drop',this.onDropExtended,false);
},
this
);
},
unAssignDrop:function(domNodes){
if(typeof domNodes.length==='undefined'){
domNodes=[domNodes];
}
Flow.each(
domNodes,
function(domNode){
domNode.removeEventListener('dragover',this.flow.preventEvent);
domNode.removeEventListener('dragenter',this.flow.preventEvent);
domNode.removeEventListener('drop',this.onDropExtended);
},
this
);
},
removeExtendedDropZone:function(){
$depot_etendu=this.zones.depot_etendu;
this.unAssignDrop($depot_etendu);
$depot_etendu
.removeClass('bigup-extended-drop-zone')
.off('dragenter dragover')
.off('dragleave drop')
.removeData('bigup');
},
eventHasFiles:function(event){
if(event.dataTransfer.types){
for(var i=0;i<event.dataTransfer.types.length;i++){
if(event.dataTransfer.types[i]==='Files'){
return true;
}
}
}
return false;
},
};
$.bigup_enlever_fichier=function(me){
var emplacement=$(me).parents('.fichier');
var bigup=emplacement.data('bigup');
$(me).addClass('btn-disabled');
bigup.enlever_fichier(emplacement);
};
$.bigup_verifier_depots_etendus=function(){
jQuery('.bigup-extended-drop-zone').each(function(){
var bigup=jQuery(this).data('bigup');
if(!bigup){
$(this).removeClass('bigup-extended-drop-zone');
}else if(!document.body.contains(bigup.zones.depot.get(0))){
bigup.removeExtendedDropZone();
}
});
};
async function compress(file,maxWidth=0,maxHeight=0,quality=85){
const opts={};
if(maxWidth===0&&maxHeight===0){
return false;
}
opts.canvas=true;
if(maxWidth>0){
opts.maxWidth=maxWidth;
}
if(maxHeight>0){
opts.maxHeight=maxHeight;
}
opts.meta=true;
const data=await loadImage(file.file,opts);
if(
(maxHeight===0||data.originalHeight<=maxHeight)
&&(maxWidth===0||data.originalWidth<=maxWidth)
){
return false;
}
if(quality>1){
quality=quality/100;
}
const blob=await new Promise(resolve=>data.image.toBlob(
blob=>{
if(data.imageHead){
loadImage.replaceHead(blob,data.imageHead,function(newBlob){
return resolve(newBlob);
})
}else{
return resolve(blob);
}
},
file.file.type,
quality
));
if(blob.size>=file.file.size){
return false;
}
file.file=blob;
file.size=file.file.size;
file.bootstrap();
return true;
}


/* ../plugins-dist/bigup/javascript/bigup.loader.js?1733220530 */
jQuery(function($){
var formulaires_avec_bigup=function(){
$.bigup_verifier_depots_etendus();
setTimeout(function(){$(".formulaire_spip form input[type=file].bigup").bigup();},10)
}
formulaires_avec_bigup();
onAjaxLoad(formulaires_avec_bigup);
});


/* ../prive/lib/bootstrap/js/popper.js?1733220530 */

(function(global,factory){
typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory():
typeof define==='function'&&define.amd?define(factory):
(global.Popper=factory());
}(this,(function(){'use strict';
var isBrowser=typeof window!=='undefined'&&typeof document!=='undefined'&&typeof navigator!=='undefined';
var timeoutDuration=function(){
var longerTimeoutBrowsers=['Edge','Trident','Firefox'];
for(var i=0;i<longerTimeoutBrowsers.length;i+=1){
if(isBrowser&&navigator.userAgent.indexOf(longerTimeoutBrowsers[i])>=0){
return 1;
}
}
return 0;
}();
function microtaskDebounce(fn){
var called=false;
return function(){
if(called){
return;
}
called=true;
window.Promise.resolve().then(function(){
called=false;
fn();
});
};
}
function taskDebounce(fn){
var scheduled=false;
return function(){
if(!scheduled){
scheduled=true;
setTimeout(function(){
scheduled=false;
fn();
},timeoutDuration);
}
};
}
var supportsMicroTasks=isBrowser&&window.Promise;
var debounce=supportsMicroTasks?microtaskDebounce:taskDebounce;
function isFunction(functionToCheck){
var getType={};
return functionToCheck&&getType.toString.call(functionToCheck)==='[object Function]';
}
function getStyleComputedProperty(element,property){
if(element.nodeType!==1){
return[];
}
var window=element.ownerDocument.defaultView;
var css=window.getComputedStyle(element,null);
return property?css[property]:css;
}
function getParentNode(element){
if(element.nodeName==='HTML'){
return element;
}
return element.parentNode||element.host;
}
function getScrollParent(element){
if(!element){
return document.body;
}
switch(element.nodeName){
case'HTML':
case'BODY':
return element.ownerDocument.body;
case'#document':
return element.body;
}
var _getStyleComputedProp=getStyleComputedProperty(element),
overflow=_getStyleComputedProp.overflow,
overflowX=_getStyleComputedProp.overflowX,
overflowY=_getStyleComputedProp.overflowY;
if(/(auto|scroll|overlay)/.test(overflow+overflowY+overflowX)){
return element;
}
return getScrollParent(getParentNode(element));
}
function getReferenceNode(reference){
return reference&&reference.referenceNode?reference.referenceNode:reference;
}
var isIE11=isBrowser&&!!(window.MSInputMethodContext&&document.documentMode);
var isIE10=isBrowser&&/MSIE 10/.test(navigator.userAgent);
function isIE(version){
if(version===11){
return isIE11;
}
if(version===10){
return isIE10;
}
return isIE11||isIE10;
}
function getOffsetParent(element){
if(!element){
return document.documentElement;
}
var noOffsetParent=isIE(10)?document.body:null;
var offsetParent=element.offsetParent||null;
while(offsetParent===noOffsetParent&&element.nextElementSibling){
offsetParent=(element=element.nextElementSibling).offsetParent;
}
var nodeName=offsetParent&&offsetParent.nodeName;
if(!nodeName||nodeName==='BODY'||nodeName==='HTML'){
return element?element.ownerDocument.documentElement:document.documentElement;
}
if(['TH','TD','TABLE'].indexOf(offsetParent.nodeName)!==-1&&getStyleComputedProperty(offsetParent,'position')==='static'){
return getOffsetParent(offsetParent);
}
return offsetParent;
}
function isOffsetContainer(element){
var nodeName=element.nodeName;
if(nodeName==='BODY'){
return false;
}
return nodeName==='HTML'||getOffsetParent(element.firstElementChild)===element;
}
function getRoot(node){
if(node.parentNode!==null){
return getRoot(node.parentNode);
}
return node;
}
function findCommonOffsetParent(element1,element2){
if(!element1||!element1.nodeType||!element2||!element2.nodeType){
return document.documentElement;
}
var order=element1.compareDocumentPosition(element2)&Node.DOCUMENT_POSITION_FOLLOWING;
var start=order?element1:element2;
var end=order?element2:element1;
var range=document.createRange();
range.setStart(start,0);
range.setEnd(end,0);
var commonAncestorContainer=range.commonAncestorContainer;
if(element1!==commonAncestorContainer&&element2!==commonAncestorContainer||start.contains(end)){
if(isOffsetContainer(commonAncestorContainer)){
return commonAncestorContainer;
}
return getOffsetParent(commonAncestorContainer);
}
var element1root=getRoot(element1);
if(element1root.host){
return findCommonOffsetParent(element1root.host,element2);
}else{
return findCommonOffsetParent(element1,getRoot(element2).host);
}
}
function getScroll(element){
var side=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'top';
var upperSide=side==='top'?'scrollTop':'scrollLeft';
var nodeName=element.nodeName;
if(nodeName==='BODY'||nodeName==='HTML'){
var html=element.ownerDocument.documentElement;
var scrollingElement=element.ownerDocument.scrollingElement||html;
return scrollingElement[upperSide];
}
return element[upperSide];
}
function includeScroll(rect,element){
var subtract=arguments.length>2&&arguments[2]!==undefined?arguments[2]:false;
var scrollTop=getScroll(element,'top');
var scrollLeft=getScroll(element,'left');
var modifier=subtract?-1:1;
rect.top+=scrollTop*modifier;
rect.bottom+=scrollTop*modifier;
rect.left+=scrollLeft*modifier;
rect.right+=scrollLeft*modifier;
return rect;
}
function getBordersSize(styles,axis){
var sideA=axis==='x'?'Left':'Top';
var sideB=sideA==='Left'?'Right':'Bottom';
return parseFloat(styles['border'+sideA+'Width'])+parseFloat(styles['border'+sideB+'Width']);
}
function getSize(axis,body,html,computedStyle){
return Math.max(body['offset'+axis],body['scroll'+axis],html['client'+axis],html['offset'+axis],html['scroll'+axis],isIE(10)?parseInt(html['offset'+axis])+parseInt(computedStyle['margin'+(axis==='Height'?'Top':'Left')])+parseInt(computedStyle['margin'+(axis==='Height'?'Bottom':'Right')]):0);
}
function getWindowSizes(document){
var body=document.body;
var html=document.documentElement;
var computedStyle=isIE(10)&&getComputedStyle(html);
return{
height:getSize('Height',body,html,computedStyle),
width:getSize('Width',body,html,computedStyle)
};
}
var classCallCheck=function(instance,Constructor){
if(!(instance instanceof Constructor)){
throw new TypeError("Cannot call a class as a function");
}
};
var createClass=function(){
function defineProperties(target,props){
for(var i=0;i<props.length;i++){
var descriptor=props[i];
descriptor.enumerable=descriptor.enumerable||false;
descriptor.configurable=true;
if("value"in descriptor)descriptor.writable=true;
Object.defineProperty(target,descriptor.key,descriptor);
}
}
return function(Constructor,protoProps,staticProps){
if(protoProps)defineProperties(Constructor.prototype,protoProps);
if(staticProps)defineProperties(Constructor,staticProps);
return Constructor;
};
}();
var defineProperty=function(obj,key,value){
if(key in obj){
Object.defineProperty(obj,key,{
value:value,
enumerable:true,
configurable:true,
writable:true
});
}else{
obj[key]=value;
}
return obj;
};
var _extends=Object.assign||function(target){
for(var i=1;i<arguments.length;i++){
var source=arguments[i];
for(var key in source){
if(Object.prototype.hasOwnProperty.call(source,key)){
target[key]=source[key];
}
}
}
return target;
};
function getClientRect(offsets){
return _extends({},offsets,{
right:offsets.left+offsets.width,
bottom:offsets.top+offsets.height
});
}
function getBoundingClientRect(element){
var rect={};
try{
if(isIE(10)){
rect=element.getBoundingClientRect();
var scrollTop=getScroll(element,'top');
var scrollLeft=getScroll(element,'left');
rect.top+=scrollTop;
rect.left+=scrollLeft;
rect.bottom+=scrollTop;
rect.right+=scrollLeft;
}else{
rect=element.getBoundingClientRect();
}
}catch(e){}
var result={
left:rect.left,
top:rect.top,
width:rect.right-rect.left,
height:rect.bottom-rect.top
};
var sizes=element.nodeName==='HTML'?getWindowSizes(element.ownerDocument):{};
var width=sizes.width||element.clientWidth||result.width;
var height=sizes.height||element.clientHeight||result.height;
var horizScrollbar=element.offsetWidth-width;
var vertScrollbar=element.offsetHeight-height;
if(horizScrollbar||vertScrollbar){
var styles=getStyleComputedProperty(element);
horizScrollbar-=getBordersSize(styles,'x');
vertScrollbar-=getBordersSize(styles,'y');
result.width-=horizScrollbar;
result.height-=vertScrollbar;
}
return getClientRect(result);
}
function getOffsetRectRelativeToArbitraryNode(children,parent){
var fixedPosition=arguments.length>2&&arguments[2]!==undefined?arguments[2]:false;
var isIE10=isIE(10);
var isHTML=parent.nodeName==='HTML';
var childrenRect=getBoundingClientRect(children);
var parentRect=getBoundingClientRect(parent);
var scrollParent=getScrollParent(children);
var styles=getStyleComputedProperty(parent);
var borderTopWidth=parseFloat(styles.borderTopWidth);
var borderLeftWidth=parseFloat(styles.borderLeftWidth);
if(fixedPosition&&isHTML){
parentRect.top=Math.max(parentRect.top,0);
parentRect.left=Math.max(parentRect.left,0);
}
var offsets=getClientRect({
top:childrenRect.top-parentRect.top-borderTopWidth,
left:childrenRect.left-parentRect.left-borderLeftWidth,
width:childrenRect.width,
height:childrenRect.height
});
offsets.marginTop=0;
offsets.marginLeft=0;
if(!isIE10&&isHTML){
var marginTop=parseFloat(styles.marginTop);
var marginLeft=parseFloat(styles.marginLeft);
offsets.top-=borderTopWidth-marginTop;
offsets.bottom-=borderTopWidth-marginTop;
offsets.left-=borderLeftWidth-marginLeft;
offsets.right-=borderLeftWidth-marginLeft;
offsets.marginTop=marginTop;
offsets.marginLeft=marginLeft;
}
if(isIE10&&!fixedPosition?parent.contains(scrollParent):parent===scrollParent&&scrollParent.nodeName!=='BODY'){
offsets=includeScroll(offsets,parent);
}
return offsets;
}
function getViewportOffsetRectRelativeToArtbitraryNode(element){
var excludeScroll=arguments.length>1&&arguments[1]!==undefined?arguments[1]:false;
var html=element.ownerDocument.documentElement;
var relativeOffset=getOffsetRectRelativeToArbitraryNode(element,html);
var width=Math.max(html.clientWidth,window.innerWidth||0);
var height=Math.max(html.clientHeight,window.innerHeight||0);
var scrollTop=!excludeScroll?getScroll(html):0;
var scrollLeft=!excludeScroll?getScroll(html,'left'):0;
var offset={
top:scrollTop-relativeOffset.top+relativeOffset.marginTop,
left:scrollLeft-relativeOffset.left+relativeOffset.marginLeft,
width:width,
height:height
};
return getClientRect(offset);
}
function isFixed(element){
var nodeName=element.nodeName;
if(nodeName==='BODY'||nodeName==='HTML'){
return false;
}
if(getStyleComputedProperty(element,'position')==='fixed'){
return true;
}
var parentNode=getParentNode(element);
if(!parentNode){
return false;
}
return isFixed(parentNode);
}
function getFixedPositionOffsetParent(element){
if(!element||!element.parentElement||isIE()){
return document.documentElement;
}
var el=element.parentElement;
while(el&&getStyleComputedProperty(el,'transform')==='none'){
el=el.parentElement;
}
return el||document.documentElement;
}
function getBoundaries(popper,reference,padding,boundariesElement){
var fixedPosition=arguments.length>4&&arguments[4]!==undefined?arguments[4]:false;
var boundaries={top:0,left:0};
var offsetParent=fixedPosition?getFixedPositionOffsetParent(popper):findCommonOffsetParent(popper,getReferenceNode(reference));
if(boundariesElement==='viewport'){
boundaries=getViewportOffsetRectRelativeToArtbitraryNode(offsetParent,fixedPosition);
}else{
var boundariesNode=void 0;
if(boundariesElement==='scrollParent'){
boundariesNode=getScrollParent(getParentNode(reference));
if(boundariesNode.nodeName==='BODY'){
boundariesNode=popper.ownerDocument.documentElement;
}
}else if(boundariesElement==='window'){
boundariesNode=popper.ownerDocument.documentElement;
}else{
boundariesNode=boundariesElement;
}
var offsets=getOffsetRectRelativeToArbitraryNode(boundariesNode,offsetParent,fixedPosition);
if(boundariesNode.nodeName==='HTML'&&!isFixed(offsetParent)){
var _getWindowSizes=getWindowSizes(popper.ownerDocument),
height=_getWindowSizes.height,
width=_getWindowSizes.width;
boundaries.top+=offsets.top-offsets.marginTop;
boundaries.bottom=height+offsets.top;
boundaries.left+=offsets.left-offsets.marginLeft;
boundaries.right=width+offsets.left;
}else{
boundaries=offsets;
}
}
padding=padding||0;
var isPaddingNumber=typeof padding==='number';
boundaries.left+=isPaddingNumber?padding:padding.left||0;
boundaries.top+=isPaddingNumber?padding:padding.top||0;
boundaries.right-=isPaddingNumber?padding:padding.right||0;
boundaries.bottom-=isPaddingNumber?padding:padding.bottom||0;
return boundaries;
}
function getArea(_ref){
var width=_ref.width,
height=_ref.height;
return width*height;
}
function computeAutoPlacement(placement,refRect,popper,reference,boundariesElement){
var padding=arguments.length>5&&arguments[5]!==undefined?arguments[5]:0;
if(placement.indexOf('auto')===-1){
return placement;
}
var boundaries=getBoundaries(popper,reference,padding,boundariesElement);
var rects={
top:{
width:boundaries.width,
height:refRect.top-boundaries.top
},
right:{
width:boundaries.right-refRect.right,
height:boundaries.height
},
bottom:{
width:boundaries.width,
height:boundaries.bottom-refRect.bottom
},
left:{
width:refRect.left-boundaries.left,
height:boundaries.height
}
};
var sortedAreas=Object.keys(rects).map(function(key){
return _extends({
key:key
},rects[key],{
area:getArea(rects[key])
});
}).sort(function(a,b){
return b.area-a.area;
});
var filteredAreas=sortedAreas.filter(function(_ref2){
var width=_ref2.width,
height=_ref2.height;
return width>=popper.clientWidth&&height>=popper.clientHeight;
});
var computedPlacement=filteredAreas.length>0?filteredAreas[0].key:sortedAreas[0].key;
var variation=placement.split('-')[1];
return computedPlacement+(variation?'-'+variation:'');
}
function getReferenceOffsets(state,popper,reference){
var fixedPosition=arguments.length>3&&arguments[3]!==undefined?arguments[3]:null;
var commonOffsetParent=fixedPosition?getFixedPositionOffsetParent(popper):findCommonOffsetParent(popper,getReferenceNode(reference));
return getOffsetRectRelativeToArbitraryNode(reference,commonOffsetParent,fixedPosition);
}
function getOuterSizes(element){
var window=element.ownerDocument.defaultView;
var styles=window.getComputedStyle(element);
var x=parseFloat(styles.marginTop||0)+parseFloat(styles.marginBottom||0);
var y=parseFloat(styles.marginLeft||0)+parseFloat(styles.marginRight||0);
var result={
width:element.offsetWidth+y,
height:element.offsetHeight+x
};
return result;
}
function getOppositePlacement(placement){
var hash={left:'right',right:'left',bottom:'top',top:'bottom'};
return placement.replace(/left|right|bottom|top/g,function(matched){
return hash[matched];
});
}
function getPopperOffsets(popper,referenceOffsets,placement){
placement=placement.split('-')[0];
var popperRect=getOuterSizes(popper);
var popperOffsets={
width:popperRect.width,
height:popperRect.height
};
var isHoriz=['right','left'].indexOf(placement)!==-1;
var mainSide=isHoriz?'top':'left';
var secondarySide=isHoriz?'left':'top';
var measurement=isHoriz?'height':'width';
var secondaryMeasurement=!isHoriz?'height':'width';
popperOffsets[mainSide]=referenceOffsets[mainSide]+referenceOffsets[measurement]/ 2 - popperRect[measurement] /2;
if(placement===secondarySide){
popperOffsets[secondarySide]=referenceOffsets[secondarySide]-popperRect[secondaryMeasurement];
}else{
popperOffsets[secondarySide]=referenceOffsets[getOppositePlacement(secondarySide)];
}
return popperOffsets;
}
function find(arr,check){
if(Array.prototype.find){
return arr.find(check);
}
return arr.filter(check)[0];
}
function findIndex(arr,prop,value){
if(Array.prototype.findIndex){
return arr.findIndex(function(cur){
return cur[prop]===value;
});
}
var match=find(arr,function(obj){
return obj[prop]===value;
});
return arr.indexOf(match);
}
function runModifiers(modifiers,data,ends){
var modifiersToRun=ends===undefined?modifiers:modifiers.slice(0,findIndex(modifiers,'name',ends));
modifiersToRun.forEach(function(modifier){
if(modifier['function']){
console.warn('`modifier.function` is deprecated, use `modifier.fn`!');
}
var fn=modifier['function']||modifier.fn;
if(modifier.enabled&&isFunction(fn)){
data.offsets.popper=getClientRect(data.offsets.popper);
data.offsets.reference=getClientRect(data.offsets.reference);
data=fn(data,modifier);
}
});
return data;
}
function update(){
if(this.state.isDestroyed){
return;
}
var data={
instance:this,
styles:{},
arrowStyles:{},
attributes:{},
flipped:false,
offsets:{}
};
data.offsets.reference=getReferenceOffsets(this.state,this.popper,this.reference,this.options.positionFixed);
data.placement=computeAutoPlacement(this.options.placement,data.offsets.reference,this.popper,this.reference,this.options.modifiers.flip.boundariesElement,this.options.modifiers.flip.padding);
data.originalPlacement=data.placement;
data.positionFixed=this.options.positionFixed;
data.offsets.popper=getPopperOffsets(this.popper,data.offsets.reference,data.placement);
data.offsets.popper.position=this.options.positionFixed?'fixed':'absolute';
data=runModifiers(this.modifiers,data);
if(!this.state.isCreated){
this.state.isCreated=true;
this.options.onCreate(data);
}else{
this.options.onUpdate(data);
}
}
function isModifierEnabled(modifiers,modifierName){
return modifiers.some(function(_ref){
var name=_ref.name,
enabled=_ref.enabled;
return enabled&&name===modifierName;
});
}
function getSupportedPropertyName(property){
var prefixes=[false,'ms','Webkit','Moz','O'];
var upperProp=property.charAt(0).toUpperCase()+property.slice(1);
for(var i=0;i<prefixes.length;i++){
var prefix=prefixes[i];
var toCheck=prefix?''+prefix+upperProp:property;
if(typeof document.body.style[toCheck]!=='undefined'){
return toCheck;
}
}
return null;
}
function destroy(){
this.state.isDestroyed=true;
if(isModifierEnabled(this.modifiers,'applyStyle')){
this.popper.removeAttribute('x-placement');
this.popper.style.position='';
this.popper.style.top='';
this.popper.style.left='';
this.popper.style.right='';
this.popper.style.bottom='';
this.popper.style.willChange='';
this.popper.style[getSupportedPropertyName('transform')]='';
}
this.disableEventListeners();
if(this.options.removeOnDestroy){
this.popper.parentNode.removeChild(this.popper);
}
return this;
}
function getWindow(element){
var ownerDocument=element.ownerDocument;
return ownerDocument?ownerDocument.defaultView:window;
}
function attachToScrollParents(scrollParent,event,callback,scrollParents){
var isBody=scrollParent.nodeName==='BODY';
var target=isBody?scrollParent.ownerDocument.defaultView:scrollParent;
target.addEventListener(event,callback,{passive:true});
if(!isBody){
attachToScrollParents(getScrollParent(target.parentNode),event,callback,scrollParents);
}
scrollParents.push(target);
}
function setupEventListeners(reference,options,state,updateBound){
state.updateBound=updateBound;
getWindow(reference).addEventListener('resize',state.updateBound,{passive:true});
var scrollElement=getScrollParent(reference);
attachToScrollParents(scrollElement,'scroll',state.updateBound,state.scrollParents);
state.scrollElement=scrollElement;
state.eventsEnabled=true;
return state;
}
function enableEventListeners(){
if(!this.state.eventsEnabled){
this.state=setupEventListeners(this.reference,this.options,this.state,this.scheduleUpdate);
}
}
function removeEventListeners(reference,state){
getWindow(reference).removeEventListener('resize',state.updateBound);
state.scrollParents.forEach(function(target){
target.removeEventListener('scroll',state.updateBound);
});
state.updateBound=null;
state.scrollParents=[];
state.scrollElement=null;
state.eventsEnabled=false;
return state;
}
function disableEventListeners(){
if(this.state.eventsEnabled){
cancelAnimationFrame(this.scheduleUpdate);
this.state=removeEventListeners(this.reference,this.state);
}
}
function isNumeric(n){
return n!==''&&!isNaN(parseFloat(n))&&isFinite(n);
}
function setStyles(element,styles){
Object.keys(styles).forEach(function(prop){
var unit='';
if(['width','height','top','right','bottom','left'].indexOf(prop)!==-1&&isNumeric(styles[prop])){
unit='px';
}
element.style[prop]=styles[prop]+unit;
});
}
function setAttributes(element,attributes){
Object.keys(attributes).forEach(function(prop){
var value=attributes[prop];
if(value!==false){
element.setAttribute(prop,attributes[prop]);
}else{
element.removeAttribute(prop);
}
});
}
function applyStyle(data){
setStyles(data.instance.popper,data.styles);
setAttributes(data.instance.popper,data.attributes);
if(data.arrowElement&&Object.keys(data.arrowStyles).length){
setStyles(data.arrowElement,data.arrowStyles);
}
return data;
}
function applyStyleOnLoad(reference,popper,options,modifierOptions,state){
var referenceOffsets=getReferenceOffsets(state,popper,reference,options.positionFixed);
var placement=computeAutoPlacement(options.placement,referenceOffsets,popper,reference,options.modifiers.flip.boundariesElement,options.modifiers.flip.padding);
popper.setAttribute('x-placement',placement);
setStyles(popper,{position:options.positionFixed?'fixed':'absolute'});
return options;
}
function getRoundedOffsets(data,shouldRound){
var _data$offsets=data.offsets,
popper=_data$offsets.popper,
reference=_data$offsets.reference;
var round=Math.round,
floor=Math.floor;
var noRound=function noRound(v){
return v;
};
var referenceWidth=round(reference.width);
var popperWidth=round(popper.width);
var isVertical=['left','right'].indexOf(data.placement)!==-1;
var isVariation=data.placement.indexOf('-')!==-1;
var sameWidthParity=referenceWidth%2===popperWidth%2;
var bothOddWidth=referenceWidth%2===1&&popperWidth%2===1;
var horizontalToInteger=!shouldRound?noRound:isVertical||isVariation||sameWidthParity?round:floor;
var verticalToInteger=!shouldRound?noRound:round;
return{
left:horizontalToInteger(bothOddWidth&&!isVariation&&shouldRound?popper.left-1:popper.left),
top:verticalToInteger(popper.top),
bottom:verticalToInteger(popper.bottom),
right:horizontalToInteger(popper.right)
};
}
var isFirefox=isBrowser&&/Firefox/i.test(navigator.userAgent);
function computeStyle(data,options){
var x=options.x,
y=options.y;
var popper=data.offsets.popper;
var legacyGpuAccelerationOption=find(data.instance.modifiers,function(modifier){
return modifier.name==='applyStyle';
}).gpuAcceleration;
if(legacyGpuAccelerationOption!==undefined){
console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');
}
var gpuAcceleration=legacyGpuAccelerationOption!==undefined?legacyGpuAccelerationOption:options.gpuAcceleration;
var offsetParent=getOffsetParent(data.instance.popper);
var offsetParentRect=getBoundingClientRect(offsetParent);
var styles={
position:popper.position
};
var offsets=getRoundedOffsets(data,window.devicePixelRatio<2||!isFirefox);
var sideA=x==='bottom'?'top':'bottom';
var sideB=y==='right'?'left':'right';
var prefixedProperty=getSupportedPropertyName('transform');
var left=void 0,
top=void 0;
if(sideA==='bottom'){
if(offsetParent.nodeName==='HTML'){
top=-offsetParent.clientHeight+offsets.bottom;
}else{
top=-offsetParentRect.height+offsets.bottom;
}
}else{
top=offsets.top;
}
if(sideB==='right'){
if(offsetParent.nodeName==='HTML'){
left=-offsetParent.clientWidth+offsets.right;
}else{
left=-offsetParentRect.width+offsets.right;
}
}else{
left=offsets.left;
}
if(gpuAcceleration&&prefixedProperty){
styles[prefixedProperty]='translate3d('+left+'px, '+top+'px, 0)';
styles[sideA]=0;
styles[sideB]=0;
styles.willChange='transform';
}else{
var invertTop=sideA==='bottom'?-1:1;
var invertLeft=sideB==='right'?-1:1;
styles[sideA]=top*invertTop;
styles[sideB]=left*invertLeft;
styles.willChange=sideA+', '+sideB;
}
var attributes={
'x-placement':data.placement
};
data.attributes=_extends({},attributes,data.attributes);
data.styles=_extends({},styles,data.styles);
data.arrowStyles=_extends({},data.offsets.arrow,data.arrowStyles);
return data;
}
function isModifierRequired(modifiers,requestingName,requestedName){
var requesting=find(modifiers,function(_ref){
var name=_ref.name;
return name===requestingName;
});
var isRequired=!!requesting&&modifiers.some(function(modifier){
return modifier.name===requestedName&&modifier.enabled&&modifier.order<requesting.order;
});
if(!isRequired){
var _requesting='`'+requestingName+'`';
var requested='`'+requestedName+'`';
console.warn(requested+' modifier is required by '+_requesting+' modifier in order to work, be sure to include it before '+_requesting+'!');
}
return isRequired;
}
function arrow(data,options){
var _data$offsets$arrow;
if(!isModifierRequired(data.instance.modifiers,'arrow','keepTogether')){
return data;
}
var arrowElement=options.element;
if(typeof arrowElement==='string'){
arrowElement=data.instance.popper.querySelector(arrowElement);
if(!arrowElement){
return data;
}
}else{
if(!data.instance.popper.contains(arrowElement)){
console.warn('WARNING: `arrow.element` must be child of its popper element!');
return data;
}
}
var placement=data.placement.split('-')[0];
var _data$offsets=data.offsets,
popper=_data$offsets.popper,
reference=_data$offsets.reference;
var isVertical=['left','right'].indexOf(placement)!==-1;
var len=isVertical?'height':'width';
var sideCapitalized=isVertical?'Top':'Left';
var side=sideCapitalized.toLowerCase();
var altSide=isVertical?'left':'top';
var opSide=isVertical?'bottom':'right';
var arrowElementSize=getOuterSizes(arrowElement)[len];
if(reference[opSide]-arrowElementSize<popper[side]){
data.offsets.popper[side]-=popper[side]-(reference[opSide]-arrowElementSize);
}
if(reference[side]+arrowElementSize>popper[opSide]){
data.offsets.popper[side]+=reference[side]+arrowElementSize-popper[opSide];
}
data.offsets.popper=getClientRect(data.offsets.popper);
var center=reference[side]+reference[len]/ 2 - arrowElementSize /2;
var css=getStyleComputedProperty(data.instance.popper);
var popperMarginSide=parseFloat(css['margin'+sideCapitalized]);
var popperBorderSide=parseFloat(css['border'+sideCapitalized+'Width']);
var sideValue=center-data.offsets.popper[side]-popperMarginSide-popperBorderSide;
sideValue=Math.max(Math.min(popper[len]-arrowElementSize,sideValue),0);
data.arrowElement=arrowElement;
data.offsets.arrow=(_data$offsets$arrow={},defineProperty(_data$offsets$arrow,side,Math.round(sideValue)),defineProperty(_data$offsets$arrow,altSide,''),_data$offsets$arrow);
return data;
}
function getOppositeVariation(variation){
if(variation==='end'){
return'start';
}else if(variation==='start'){
return'end';
}
return variation;
}
var placements=['auto-start','auto','auto-end','top-start','top','top-end','right-start','right','right-end','bottom-end','bottom','bottom-start','left-end','left','left-start'];
var validPlacements=placements.slice(3);
function clockwise(placement){
var counter=arguments.length>1&&arguments[1]!==undefined?arguments[1]:false;
var index=validPlacements.indexOf(placement);
var arr=validPlacements.slice(index+1).concat(validPlacements.slice(0,index));
return counter?arr.reverse():arr;
}
var BEHAVIORS={
FLIP:'flip',
CLOCKWISE:'clockwise',
COUNTERCLOCKWISE:'counterclockwise'
};
function flip(data,options){
if(isModifierEnabled(data.instance.modifiers,'inner')){
return data;
}
if(data.flipped&&data.placement===data.originalPlacement){
return data;
}
var boundaries=getBoundaries(data.instance.popper,data.instance.reference,options.padding,options.boundariesElement,data.positionFixed);
var placement=data.placement.split('-')[0];
var placementOpposite=getOppositePlacement(placement);
var variation=data.placement.split('-')[1]||'';
var flipOrder=[];
switch(options.behavior){
case BEHAVIORS.FLIP:
flipOrder=[placement,placementOpposite];
break;
case BEHAVIORS.CLOCKWISE:
flipOrder=clockwise(placement);
break;
case BEHAVIORS.COUNTERCLOCKWISE:
flipOrder=clockwise(placement,true);
break;
default:
flipOrder=options.behavior;
}
flipOrder.forEach(function(step,index){
if(placement!==step||flipOrder.length===index+1){
return data;
}
placement=data.placement.split('-')[0];
placementOpposite=getOppositePlacement(placement);
var popperOffsets=data.offsets.popper;
var refOffsets=data.offsets.reference;
var floor=Math.floor;
var overlapsRef=placement==='left'&&floor(popperOffsets.right)>floor(refOffsets.left)||placement==='right'&&floor(popperOffsets.left)<floor(refOffsets.right)||placement==='top'&&floor(popperOffsets.bottom)>floor(refOffsets.top)||placement==='bottom'&&floor(popperOffsets.top)<floor(refOffsets.bottom);
var overflowsLeft=floor(popperOffsets.left)<floor(boundaries.left);
var overflowsRight=floor(popperOffsets.right)>floor(boundaries.right);
var overflowsTop=floor(popperOffsets.top)<floor(boundaries.top);
var overflowsBottom=floor(popperOffsets.bottom)>floor(boundaries.bottom);
var overflowsBoundaries=placement==='left'&&overflowsLeft||placement==='right'&&overflowsRight||placement==='top'&&overflowsTop||placement==='bottom'&&overflowsBottom;
var isVertical=['top','bottom'].indexOf(placement)!==-1;
var flippedVariationByRef=!!options.flipVariations&&(isVertical&&variation==='start'&&overflowsLeft||isVertical&&variation==='end'&&overflowsRight||!isVertical&&variation==='start'&&overflowsTop||!isVertical&&variation==='end'&&overflowsBottom);
var flippedVariationByContent=!!options.flipVariationsByContent&&(isVertical&&variation==='start'&&overflowsRight||isVertical&&variation==='end'&&overflowsLeft||!isVertical&&variation==='start'&&overflowsBottom||!isVertical&&variation==='end'&&overflowsTop);
var flippedVariation=flippedVariationByRef||flippedVariationByContent;
if(overlapsRef||overflowsBoundaries||flippedVariation){
data.flipped=true;
if(overlapsRef||overflowsBoundaries){
placement=flipOrder[index+1];
}
if(flippedVariation){
variation=getOppositeVariation(variation);
}
data.placement=placement+(variation?'-'+variation:'');
data.offsets.popper=_extends({},data.offsets.popper,getPopperOffsets(data.instance.popper,data.offsets.reference,data.placement));
data=runModifiers(data.instance.modifiers,data,'flip');
}
});
return data;
}
function keepTogether(data){
var _data$offsets=data.offsets,
popper=_data$offsets.popper,
reference=_data$offsets.reference;
var placement=data.placement.split('-')[0];
var floor=Math.floor;
var isVertical=['top','bottom'].indexOf(placement)!==-1;
var side=isVertical?'right':'bottom';
var opSide=isVertical?'left':'top';
var measurement=isVertical?'width':'height';
if(popper[side]<floor(reference[opSide])){
data.offsets.popper[opSide]=floor(reference[opSide])-popper[measurement];
}
if(popper[opSide]>floor(reference[side])){
data.offsets.popper[opSide]=floor(reference[side]);
}
return data;
}
function toValue(str,measurement,popperOffsets,referenceOffsets){
var split=str.match(/((?:\-|\+)?\d*\.?\d*)(.*)/);
var value=+split[1];
var unit=split[2];
if(!value){
return str;
}
if(unit.indexOf('%')===0){
var element=void 0;
switch(unit){
case'%p':
element=popperOffsets;
break;
case'%':
case'%r':
default:
element=referenceOffsets;
}
var rect=getClientRect(element);
return rect[measurement]/100*value;
}else if(unit==='vh'||unit==='vw'){
var size=void 0;
if(unit==='vh'){
size=Math.max(document.documentElement.clientHeight,window.innerHeight||0);
}else{
size=Math.max(document.documentElement.clientWidth,window.innerWidth||0);
}
return size/100*value;
}else{
return value;
}
}
function parseOffset(offset,popperOffsets,referenceOffsets,basePlacement){
var offsets=[0,0];
var useHeight=['right','left'].indexOf(basePlacement)!==-1;
var fragments=offset.split(/(\+|\-)/).map(function(frag){
return frag.trim();
});
var divider=fragments.indexOf(find(fragments,function(frag){
return frag.search(/,|\s/)!==-1;
}));
if(fragments[divider]&&fragments[divider].indexOf(',')===-1){
console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');
}
var splitRegex=/\s*,\s*|\s+/;
var ops=divider!==-1?[fragments.slice(0,divider).concat([fragments[divider].split(splitRegex)[0]]),[fragments[divider].split(splitRegex)[1]].concat(fragments.slice(divider+1))]:[fragments];
ops=ops.map(function(op,index){
var measurement=(index===1?!useHeight:useHeight)?'height':'width';
var mergeWithPrevious=false;
return op
.reduce(function(a,b){
if(a[a.length-1]===''&&['+','-'].indexOf(b)!==-1){
a[a.length-1]=b;
mergeWithPrevious=true;
return a;
}else if(mergeWithPrevious){
a[a.length-1]+=b;
mergeWithPrevious=false;
return a;
}else{
return a.concat(b);
}
},[])
.map(function(str){
return toValue(str,measurement,popperOffsets,referenceOffsets);
});
});
ops.forEach(function(op,index){
op.forEach(function(frag,index2){
if(isNumeric(frag)){
offsets[index]+=frag*(op[index2-1]==='-'?-1:1);
}
});
});
return offsets;
}
function offset(data,_ref){
var offset=_ref.offset;
var placement=data.placement,
_data$offsets=data.offsets,
popper=_data$offsets.popper,
reference=_data$offsets.reference;
var basePlacement=placement.split('-')[0];
var offsets=void 0;
if(isNumeric(+offset)){
offsets=[+offset,0];
}else{
offsets=parseOffset(offset,popper,reference,basePlacement);
}
if(basePlacement==='left'){
popper.top+=offsets[0];
popper.left-=offsets[1];
}else if(basePlacement==='right'){
popper.top+=offsets[0];
popper.left+=offsets[1];
}else if(basePlacement==='top'){
popper.left+=offsets[0];
popper.top-=offsets[1];
}else if(basePlacement==='bottom'){
popper.left+=offsets[0];
popper.top+=offsets[1];
}
data.popper=popper;
return data;
}
function preventOverflow(data,options){
var boundariesElement=options.boundariesElement||getOffsetParent(data.instance.popper);
if(data.instance.reference===boundariesElement){
boundariesElement=getOffsetParent(boundariesElement);
}
var transformProp=getSupportedPropertyName('transform');
var popperStyles=data.instance.popper.style;
var top=popperStyles.top,
left=popperStyles.left,
transform=popperStyles[transformProp];
popperStyles.top='';
popperStyles.left='';
popperStyles[transformProp]='';
var boundaries=getBoundaries(data.instance.popper,data.instance.reference,options.padding,boundariesElement,data.positionFixed);
popperStyles.top=top;
popperStyles.left=left;
popperStyles[transformProp]=transform;
options.boundaries=boundaries;
var order=options.priority;
var popper=data.offsets.popper;
var check={
primary:function primary(placement){
var value=popper[placement];
if(popper[placement]<boundaries[placement]&&!options.escapeWithReference){
value=Math.max(popper[placement],boundaries[placement]);
}
return defineProperty({},placement,value);
},
secondary:function secondary(placement){
var mainSide=placement==='right'?'left':'top';
var value=popper[mainSide];
if(popper[placement]>boundaries[placement]&&!options.escapeWithReference){
value=Math.min(popper[mainSide],boundaries[placement]-(placement==='right'?popper.width:popper.height));
}
return defineProperty({},mainSide,value);
}
};
order.forEach(function(placement){
var side=['left','top'].indexOf(placement)!==-1?'primary':'secondary';
popper=_extends({},popper,check[side](placement));
});
data.offsets.popper=popper;
return data;
}
function shift(data){
var placement=data.placement;
var basePlacement=placement.split('-')[0];
var shiftvariation=placement.split('-')[1];
if(shiftvariation){
var _data$offsets=data.offsets,
reference=_data$offsets.reference,
popper=_data$offsets.popper;
var isVertical=['bottom','top'].indexOf(basePlacement)!==-1;
var side=isVertical?'left':'top';
var measurement=isVertical?'width':'height';
var shiftOffsets={
start:defineProperty({},side,reference[side]),
end:defineProperty({},side,reference[side]+reference[measurement]-popper[measurement])
};
data.offsets.popper=_extends({},popper,shiftOffsets[shiftvariation]);
}
return data;
}
function hide(data){
if(!isModifierRequired(data.instance.modifiers,'hide','preventOverflow')){
return data;
}
var refRect=data.offsets.reference;
var bound=find(data.instance.modifiers,function(modifier){
return modifier.name==='preventOverflow';
}).boundaries;
if(refRect.bottom<bound.top||refRect.left>bound.right||refRect.top>bound.bottom||refRect.right<bound.left){
if(data.hide===true){
return data;
}
data.hide=true;
data.attributes['x-out-of-boundaries']='';
}else{
if(data.hide===false){
return data;
}
data.hide=false;
data.attributes['x-out-of-boundaries']=false;
}
return data;
}
function inner(data){
var placement=data.placement;
var basePlacement=placement.split('-')[0];
var _data$offsets=data.offsets,
popper=_data$offsets.popper,
reference=_data$offsets.reference;
var isHoriz=['left','right'].indexOf(basePlacement)!==-1;
var subtractLength=['top','left'].indexOf(basePlacement)===-1;
popper[isHoriz?'left':'top']=reference[basePlacement]-(subtractLength?popper[isHoriz?'width':'height']:0);
data.placement=getOppositePlacement(placement);
data.offsets.popper=getClientRect(popper);
return data;
}
var modifiers={
shift:{
order:100,
enabled:true,
fn:shift
},
offset:{
order:200,
enabled:true,
fn:offset,
offset:0
},
preventOverflow:{
order:300,
enabled:true,
fn:preventOverflow,
priority:['left','right','top','bottom'],
padding:5,
boundariesElement:'scrollParent'
},
keepTogether:{
order:400,
enabled:true,
fn:keepTogether
},
arrow:{
order:500,
enabled:true,
fn:arrow,
element:'[x-arrow]'
},
flip:{
order:600,
enabled:true,
fn:flip,
behavior:'flip',
padding:5,
boundariesElement:'viewport',
flipVariations:false,
flipVariationsByContent:false
},
inner:{
order:700,
enabled:false,
fn:inner
},
hide:{
order:800,
enabled:true,
fn:hide
},
computeStyle:{
order:850,
enabled:true,
fn:computeStyle,
gpuAcceleration:true,
x:'bottom',
y:'right'
},
applyStyle:{
order:900,
enabled:true,
fn:applyStyle,
onLoad:applyStyleOnLoad,
gpuAcceleration:undefined
}
};
var Defaults={
placement:'bottom',
positionFixed:false,
eventsEnabled:true,
removeOnDestroy:false,
onCreate:function onCreate(){},
onUpdate:function onUpdate(){},
modifiers:modifiers
};
var Popper=function(){
function Popper(reference,popper){
var _this=this;
var options=arguments.length>2&&arguments[2]!==undefined?arguments[2]:{};
classCallCheck(this,Popper);
this.scheduleUpdate=function(){
return requestAnimationFrame(_this.update);
};
this.update=debounce(this.update.bind(this));
this.options=_extends({},Popper.Defaults,options);
this.state={
isDestroyed:false,
isCreated:false,
scrollParents:[]
};
this.reference=reference&&reference.jquery?reference[0]:reference;
this.popper=popper&&popper.jquery?popper[0]:popper;
this.options.modifiers={};
Object.keys(_extends({},Popper.Defaults.modifiers,options.modifiers)).forEach(function(name){
_this.options.modifiers[name]=_extends({},Popper.Defaults.modifiers[name]||{},options.modifiers?options.modifiers[name]:{});
});
this.modifiers=Object.keys(this.options.modifiers).map(function(name){
return _extends({
name:name
},_this.options.modifiers[name]);
})
.sort(function(a,b){
return a.order-b.order;
});
this.modifiers.forEach(function(modifierOptions){
if(modifierOptions.enabled&&isFunction(modifierOptions.onLoad)){
modifierOptions.onLoad(_this.reference,_this.popper,_this.options,modifierOptions,_this.state);
}
});
this.update();
var eventsEnabled=this.options.eventsEnabled;
if(eventsEnabled){
this.enableEventListeners();
}
this.state.eventsEnabled=eventsEnabled;
}
createClass(Popper,[{
key:'update',
value:function update$$1(){
return update.call(this);
}
},{
key:'destroy',
value:function destroy$$1(){
return destroy.call(this);
}
},{
key:'enableEventListeners',
value:function enableEventListeners$$1(){
return enableEventListeners.call(this);
}
},{
key:'disableEventListeners',
value:function disableEventListeners$$1(){
return disableEventListeners.call(this);
}
}]);
return Popper;
}();
Popper.Utils=(typeof window!=='undefined'?window:global).PopperUtils;
Popper.placements=placements;
Popper.Defaults=Defaults;
return Popper;
})));


/* ../prive/lib/bootstrap/js/util.js?1733220530 */

(function(global,factory){
typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory(require('jquery')):
typeof define==='function'&&define.amd?define(['jquery'],factory):
(global=typeof globalThis!=='undefined'?globalThis:global||self,global.Util=factory(global.jQuery));
}(this,(function($){'use strict';
function _interopDefaultLegacy(e){return e&&typeof e==='object'&&'default'in e?e:{'default':e};}
var $__default=_interopDefaultLegacy($);
var TRANSITION_END='transitionend';
var MAX_UID=1000000;
var MILLISECONDS_MULTIPLIER=1000;
function toType(obj){
if(obj===null||typeof obj==='undefined'){
return""+obj;
}
return{}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase();
}
function getSpecialTransitionEndEvent(){
return{
bindType:TRANSITION_END,
delegateType:TRANSITION_END,
handle:function handle(event){
if($__default['default'](event.target).is(this)){
return event.handleObj.handler.apply(this,arguments);
}
return undefined;
}
};
}
function transitionEndEmulator(duration){
var _this=this;
var called=false;
$__default['default'](this).one(Util.TRANSITION_END,function(){
called=true;
});
setTimeout(function(){
if(!called){
Util.triggerTransitionEnd(_this);
}
},duration);
return this;
}
function setTransitionEndSupport(){
$__default['default'].fn.emulateTransitionEnd=transitionEndEmulator;
$__default['default'].event.special[Util.TRANSITION_END]=getSpecialTransitionEndEvent();
}
var Util={
TRANSITION_END:'bsTransitionEnd',
getUID:function getUID(prefix){
do{
prefix+=~~(Math.random()*MAX_UID);
}while(document.getElementById(prefix));
return prefix;
},
getSelectorFromElement:function getSelectorFromElement(element){
var selector=element.getAttribute('data-target');
if(!selector||selector==='#'){
var hrefAttr=element.getAttribute('href');
selector=hrefAttr&&hrefAttr!=='#'?hrefAttr.trim():'';
}
try{
return document.querySelector(selector)?selector:null;
}catch(_){
return null;
}
},
getTransitionDurationFromElement:function getTransitionDurationFromElement(element){
if(!element){
return 0;
}
var transitionDuration=$__default['default'](element).css('transition-duration');
var transitionDelay=$__default['default'](element).css('transition-delay');
var floatTransitionDuration=parseFloat(transitionDuration);
var floatTransitionDelay=parseFloat(transitionDelay);
if(!floatTransitionDuration&&!floatTransitionDelay){
return 0;
}
transitionDuration=transitionDuration.split(',')[0];
transitionDelay=transitionDelay.split(',')[0];
return(parseFloat(transitionDuration)+parseFloat(transitionDelay))*MILLISECONDS_MULTIPLIER;
},
reflow:function reflow(element){
return element.offsetHeight;
},
triggerTransitionEnd:function triggerTransitionEnd(element){
$__default['default'](element).trigger(TRANSITION_END);
},
supportsTransitionEnd:function supportsTransitionEnd(){
return Boolean(TRANSITION_END);
},
isElement:function isElement(obj){
return(obj[0]||obj).nodeType;
},
typeCheckConfig:function typeCheckConfig(componentName,config,configTypes){
for(var property in configTypes){
if(Object.prototype.hasOwnProperty.call(configTypes,property)){
var expectedTypes=configTypes[property];
var value=config[property];
var valueType=value&&Util.isElement(value)?'element':toType(value);
if(!new RegExp(expectedTypes).test(valueType)){
throw new Error(componentName.toUpperCase()+": "+("Option \""+property+"\" provided type \""+valueType+"\" ")+("but expected type \""+expectedTypes+"\"."));
}
}
}
},
findShadowRoot:function findShadowRoot(element){
if(!document.documentElement.attachShadow){
return null;
}
if(typeof element.getRootNode==='function'){
var root=element.getRootNode();
return root instanceof ShadowRoot?root:null;
}
if(element instanceof ShadowRoot){
return element;
}
if(!element.parentNode){
return null;
}
return Util.findShadowRoot(element.parentNode);
},
jQueryDetection:function jQueryDetection(){
if(typeof $__default['default']==='undefined'){
throw new TypeError('Bootstrap\'s JavaScript requires jQuery. jQuery must be included before Bootstrap\'s JavaScript.');
}
var version=$__default['default'].fn.jquery.split(' ')[0].split('.');
var minMajor=1;
var ltMajor=2;
var minMinor=9;
var minPatch=1;
var maxMajor=4;
if(version[0]<ltMajor&&version[1]<minMinor||version[0]===minMajor&&version[1]===minMinor&&version[2]<minPatch||version[0]>=maxMajor){
throw new Error('Bootstrap\'s JavaScript requires at least jQuery v1.9.1 but less than v4.0.0');
}
}
};
Util.jQueryDetection();
setTransitionEndSupport();
return Util;
})));


/* ../prive/lib/bootstrap/js/dropdown.js?1733220530 */

(function(global,factory){
typeof exports==='object'&&typeof module!=='undefined'?module.exports=factory(require('jquery'),require('popper.js'),require('./util.js')):
typeof define==='function'&&define.amd?define(['jquery','popper.js','./util.js'],factory):
(global=typeof globalThis!=='undefined'?globalThis:global||self,global.Dropdown=factory(global.jQuery,global.Popper,global.Util));
}(this,(function($,Popper,Util){'use strict';
function _interopDefaultLegacy(e){return e&&typeof e==='object'&&'default'in e?e:{'default':e};}
var $__default=_interopDefaultLegacy($);
var Popper__default=_interopDefaultLegacy(Popper);
var Util__default=_interopDefaultLegacy(Util);
function _extends(){_extends=Object.assign||function(target){for(var i=1;i<arguments.length;i++){var source=arguments[i];for(var key in source){if(Object.prototype.hasOwnProperty.call(source,key)){target[key]=source[key];}}}return target;};return _extends.apply(this,arguments);}
function _defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||false;descriptor.configurable=true;if("value"in descriptor)descriptor.writable=true;Object.defineProperty(target,descriptor.key,descriptor);}}
function _createClass(Constructor,protoProps,staticProps){if(protoProps)_defineProperties(Constructor.prototype,protoProps);if(staticProps)_defineProperties(Constructor,staticProps);return Constructor;}
var NAME='dropdown';
var VERSION='4.5.3';
var DATA_KEY='bs.dropdown';
var EVENT_KEY="."+DATA_KEY;
var DATA_API_KEY='.data-api';
var JQUERY_NO_CONFLICT=$__default['default'].fn[NAME];
var ESCAPE_KEYCODE=27;
var SPACE_KEYCODE=32;
var TAB_KEYCODE=9;
var ARROW_UP_KEYCODE=38;
var ARROW_DOWN_KEYCODE=40;
var RIGHT_MOUSE_BUTTON_WHICH=3;
var REGEXP_KEYDOWN=new RegExp(ARROW_UP_KEYCODE+"|"+ARROW_DOWN_KEYCODE+"|"+ESCAPE_KEYCODE);
var EVENT_HIDE="hide"+EVENT_KEY;
var EVENT_HIDDEN="hidden"+EVENT_KEY;
var EVENT_SHOW="show"+EVENT_KEY;
var EVENT_SHOWN="shown"+EVENT_KEY;
var EVENT_CLICK="click"+EVENT_KEY;
var EVENT_CLICK_DATA_API="click"+EVENT_KEY+DATA_API_KEY;
var EVENT_KEYDOWN_DATA_API="keydown"+EVENT_KEY+DATA_API_KEY;
var EVENT_KEYUP_DATA_API="keyup"+EVENT_KEY+DATA_API_KEY;
var CLASS_NAME_DISABLED='disabled';
var CLASS_NAME_SHOW='show';
var CLASS_NAME_DROPUP='dropup';
var CLASS_NAME_DROPRIGHT='dropright';
var CLASS_NAME_DROPLEFT='dropleft';
var CLASS_NAME_MENURIGHT='dropdown-menu-right';
var CLASS_NAME_POSITION_STATIC='position-static';
var SELECTOR_DATA_TOGGLE='[data-toggle="dropdown"]';
var SELECTOR_FORM_CHILD='.dropdown form';
var SELECTOR_MENU='.dropdown-menu';
var SELECTOR_NAVBAR_NAV='.navbar-nav';
var SELECTOR_VISIBLE_ITEMS='.dropdown-menu .dropdown-item:not(.disabled):not(:disabled)';
var PLACEMENT_TOP='top-start';
var PLACEMENT_TOPEND='top-end';
var PLACEMENT_BOTTOM='bottom-start';
var PLACEMENT_BOTTOMEND='bottom-end';
var PLACEMENT_RIGHT='right-start';
var PLACEMENT_LEFT='left-start';
var Default={
offset:0,
flip:true,
boundary:'scrollParent',
reference:'toggle',
display:'dynamic',
popperConfig:null
};
var DefaultType={
offset:'(number|string|function)',
flip:'boolean',
boundary:'(string|element)',
reference:'(string|element)',
display:'string',
popperConfig:'(null|object)'
};
var Dropdown=function(){
function Dropdown(element,config){
this._element=element;
this._popper=null;
this._config=this._getConfig(config);
this._menu=this._getMenuElement();
this._inNavbar=this._detectNavbar();
this._addEventListeners();
}
var _proto=Dropdown.prototype;
_proto.toggle=function toggle(){
if(this._element.disabled||$__default['default'](this._element).hasClass(CLASS_NAME_DISABLED)){
return;
}
var isActive=$__default['default'](this._menu).hasClass(CLASS_NAME_SHOW);
Dropdown._clearMenus();
if(isActive){
return;
}
this.show(true);
};
_proto.show=function show(usePopper){
if(usePopper===void 0){
usePopper=false;
}
if(this._element.disabled||$__default['default'](this._element).hasClass(CLASS_NAME_DISABLED)||$__default['default'](this._menu).hasClass(CLASS_NAME_SHOW)){
return;
}
var relatedTarget={
relatedTarget:this._element
};
var showEvent=$__default['default'].Event(EVENT_SHOW,relatedTarget);
var parent=Dropdown._getParentFromElement(this._element);
$__default['default'](parent).trigger(showEvent);
if(showEvent.isDefaultPrevented()){
return;
}
if(!this._inNavbar&&usePopper){
if(typeof Popper__default['default']==='undefined'){
throw new TypeError('Bootstrap\'s dropdowns require Popper.js (https://popper.js.org/)');
}
var referenceElement=this._element;
if(this._config.reference==='parent'){
referenceElement=parent;
}else if(Util__default['default'].isElement(this._config.reference)){
referenceElement=this._config.reference;
if(typeof this._config.reference.jquery!=='undefined'){
referenceElement=this._config.reference[0];
}
}
if(this._config.boundary!=='scrollParent'){
$__default['default'](parent).addClass(CLASS_NAME_POSITION_STATIC);
}
this._popper=new Popper__default['default'](referenceElement,this._menu,this._getPopperConfig());
}
if('ontouchstart'in document.documentElement&&$__default['default'](parent).closest(SELECTOR_NAVBAR_NAV).length===0){
$__default['default'](document.body).children().on('mouseover',null,$__default['default'].noop);
}
this._element.focus();
this._element.setAttribute('aria-expanded',true);
$__default['default'](this._menu).toggleClass(CLASS_NAME_SHOW);
$__default['default'](parent).toggleClass(CLASS_NAME_SHOW).trigger($__default['default'].Event(EVENT_SHOWN,relatedTarget));
};
_proto.hide=function hide(){
if(this._element.disabled||$__default['default'](this._element).hasClass(CLASS_NAME_DISABLED)||!$__default['default'](this._menu).hasClass(CLASS_NAME_SHOW)){
return;
}
var relatedTarget={
relatedTarget:this._element
};
var hideEvent=$__default['default'].Event(EVENT_HIDE,relatedTarget);
var parent=Dropdown._getParentFromElement(this._element);
$__default['default'](parent).trigger(hideEvent);
if(hideEvent.isDefaultPrevented()){
return;
}
if(this._popper){
this._popper.destroy();
}
$__default['default'](this._menu).toggleClass(CLASS_NAME_SHOW);
$__default['default'](parent).toggleClass(CLASS_NAME_SHOW).trigger($__default['default'].Event(EVENT_HIDDEN,relatedTarget));
};
_proto.dispose=function dispose(){
$__default['default'].removeData(this._element,DATA_KEY);
$__default['default'](this._element).off(EVENT_KEY);
this._element=null;
this._menu=null;
if(this._popper!==null){
this._popper.destroy();
this._popper=null;
}
};
_proto.update=function update(){
this._inNavbar=this._detectNavbar();
if(this._popper!==null){
this._popper.scheduleUpdate();
}
}
;
_proto._addEventListeners=function _addEventListeners(){
var _this=this;
$__default['default'](this._element).on(EVENT_CLICK,function(event){
event.preventDefault();
event.stopPropagation();
_this.toggle();
});
};
_proto._getConfig=function _getConfig(config){
config=_extends({},this.constructor.Default,$__default['default'](this._element).data(),config);
Util__default['default'].typeCheckConfig(NAME,config,this.constructor.DefaultType);
return config;
};
_proto._getMenuElement=function _getMenuElement(){
if(!this._menu){
var parent=Dropdown._getParentFromElement(this._element);
if(parent){
this._menu=parent.querySelector(SELECTOR_MENU);
}
}
return this._menu;
};
_proto._getPlacement=function _getPlacement(){
var $parentDropdown=$__default['default'](this._element.parentNode);
var placement=PLACEMENT_BOTTOM;
if($parentDropdown.hasClass(CLASS_NAME_DROPUP)){
placement=$__default['default'](this._menu).hasClass(CLASS_NAME_MENURIGHT)?PLACEMENT_TOPEND:PLACEMENT_TOP;
}else if($parentDropdown.hasClass(CLASS_NAME_DROPRIGHT)){
placement=PLACEMENT_RIGHT;
}else if($parentDropdown.hasClass(CLASS_NAME_DROPLEFT)){
placement=PLACEMENT_LEFT;
}else if($__default['default'](this._menu).hasClass(CLASS_NAME_MENURIGHT)){
placement=PLACEMENT_BOTTOMEND;
}
return placement;
};
_proto._detectNavbar=function _detectNavbar(){
return $__default['default'](this._element).closest('.navbar').length>0;
};
_proto._getOffset=function _getOffset(){
var _this2=this;
var offset={};
if(typeof this._config.offset==='function'){
offset.fn=function(data){
data.offsets=_extends({},data.offsets,_this2._config.offset(data.offsets,_this2._element)||{});
return data;
};
}else{
offset.offset=this._config.offset;
}
return offset;
};
_proto._getPopperConfig=function _getPopperConfig(){
var popperConfig={
placement:this._getPlacement(),
modifiers:{
offset:this._getOffset(),
flip:{
enabled:this._config.flip
},
preventOverflow:{
boundariesElement:this._config.boundary
}
}
};
if(this._config.display==='static'){
popperConfig.modifiers.applyStyle={
enabled:false
};
}
return _extends({},popperConfig,this._config.popperConfig);
}
;
Dropdown._jQueryInterface=function _jQueryInterface(config){
return this.each(function(){
var data=$__default['default'](this).data(DATA_KEY);
var _config=typeof config==='object'?config:null;
if(!data){
data=new Dropdown(this,_config);
$__default['default'](this).data(DATA_KEY,data);
}
if(typeof config==='string'){
if(typeof data[config]==='undefined'){
throw new TypeError("No method named \""+config+"\"");
}
data[config]();
}
});
};
Dropdown._clearMenus=function _clearMenus(event){
if(event&&(event.which===RIGHT_MOUSE_BUTTON_WHICH||event.type==='keyup'&&event.which!==TAB_KEYCODE)){
return;
}
var toggles=[].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE));
for(var i=0,len=toggles.length;i<len;i++){
var parent=Dropdown._getParentFromElement(toggles[i]);
var context=$__default['default'](toggles[i]).data(DATA_KEY);
var relatedTarget={
relatedTarget:toggles[i]
};
if(event&&event.type==='click'){
relatedTarget.clickEvent=event;
}
if(!context){
continue;
}
var dropdownMenu=context._menu;
if(!$__default['default'](parent).hasClass(CLASS_NAME_SHOW)){
continue;
}
if(event&&(event.type==='click'&&/input|textarea/i.test(event.target.tagName)||event.type==='keyup'&&event.which===TAB_KEYCODE)&&$__default['default'].contains(parent,event.target)){
continue;
}
var hideEvent=$__default['default'].Event(EVENT_HIDE,relatedTarget);
$__default['default'](parent).trigger(hideEvent);
if(hideEvent.isDefaultPrevented()){
continue;
}
if('ontouchstart'in document.documentElement){
$__default['default'](document.body).children().off('mouseover',null,$__default['default'].noop);
}
toggles[i].setAttribute('aria-expanded','false');
if(context._popper){
context._popper.destroy();
}
$__default['default'](dropdownMenu).removeClass(CLASS_NAME_SHOW);
$__default['default'](parent).removeClass(CLASS_NAME_SHOW).trigger($__default['default'].Event(EVENT_HIDDEN,relatedTarget));
}
};
Dropdown._getParentFromElement=function _getParentFromElement(element){
var parent;
var selector=Util__default['default'].getSelectorFromElement(element);
if(selector){
parent=document.querySelector(selector);
}
return parent||element.parentNode;
}
;
Dropdown._dataApiKeydownHandler=function _dataApiKeydownHandler(event){
if(/input|textarea/i.test(event.target.tagName)?event.which===SPACE_KEYCODE||event.which!==ESCAPE_KEYCODE&&(event.which!==ARROW_DOWN_KEYCODE&&event.which!==ARROW_UP_KEYCODE||$__default['default'](event.target).closest(SELECTOR_MENU).length):!REGEXP_KEYDOWN.test(event.which)){
return;
}
if(this.disabled||$__default['default'](this).hasClass(CLASS_NAME_DISABLED)){
return;
}
var parent=Dropdown._getParentFromElement(this);
var isActive=$__default['default'](parent).hasClass(CLASS_NAME_SHOW);
if(!isActive&&event.which===ESCAPE_KEYCODE){
return;
}
event.preventDefault();
event.stopPropagation();
if(!isActive||event.which===ESCAPE_KEYCODE||event.which===SPACE_KEYCODE){
if(event.which===ESCAPE_KEYCODE){
$__default['default'](parent.querySelector(SELECTOR_DATA_TOGGLE)).trigger('focus');
}
$__default['default'](this).trigger('click');
return;
}
var items=[].slice.call(parent.querySelectorAll(SELECTOR_VISIBLE_ITEMS)).filter(function(item){
return $__default['default'](item).is(':visible');
});
if(items.length===0){
return;
}
var index=items.indexOf(event.target);
if(event.which===ARROW_UP_KEYCODE&&index>0){
index--;
}
if(event.which===ARROW_DOWN_KEYCODE&&index<items.length-1){
index++;
}
if(index<0){
index=0;
}
items[index].focus();
};
_createClass(Dropdown,null,[{
key:"VERSION",
get:function get(){
return VERSION;
}
},{
key:"Default",
get:function get(){
return Default;
}
},{
key:"DefaultType",
get:function get(){
return DefaultType;
}
}]);
return Dropdown;
}();
$__default['default'](document).on(EVENT_KEYDOWN_DATA_API,SELECTOR_DATA_TOGGLE,Dropdown._dataApiKeydownHandler).on(EVENT_KEYDOWN_DATA_API,SELECTOR_MENU,Dropdown._dataApiKeydownHandler).on(EVENT_CLICK_DATA_API+" "+EVENT_KEYUP_DATA_API,Dropdown._clearMenus).on(EVENT_CLICK_DATA_API,SELECTOR_DATA_TOGGLE,function(event){
event.preventDefault();
event.stopPropagation();
Dropdown._jQueryInterface.call($__default['default'](this),'toggle');
}).on(EVENT_CLICK_DATA_API,SELECTOR_FORM_CHILD,function(e){
e.stopPropagation();
});
$__default['default'].fn[NAME]=Dropdown._jQueryInterface;
$__default['default'].fn[NAME].Constructor=Dropdown;
$__default['default'].fn[NAME].noConflict=function(){
$__default['default'].fn[NAME]=JQUERY_NO_CONFLICT;
return Dropdown._jQueryInterface;
};
return Dropdown;
})));


/* ../prive/javascript/layer.js?1733220530 */
var url_chargee=new Array();
var xhr_actifs={};
function slide_horizontal(couche,slide,align,depart,etape){
var obj=jQuery("#"+couche);
if(!obj.length)return;
obj=obj.get(0);
if(!etape){
if(align=='left')depart=obj.scrollLeft;
else depart=obj.firstChild.offsetWidth-obj.scrollLeft;
etape=0;
}
etape=Math.round(etape)+1;
pos=Math.round(depart)+Math.round(((slide-depart)/10)*etape);
if(align=='left')obj.scrollLeft=pos;
else obj.scrollLeft=obj.firstChild.offsetWidth-pos;
if(etape<10)setTimeout("slide_horizontal('"+couche+"', '"+slide+"', '"+align+"', '"+depart+"', '"+etape+"')",60);
}
function changerhighlight(couche){
jQuery(couche)
.addClass('on')
.siblings()
.not(couche)
.removeClass('on');
jQuery('.petite-racine.on').removeClass('on');
}
function aff_selection(arg,idom,url,event){
var noeud=jQuery("#"+idom);
if(noeud.length){
noeud.hide();
charger_node_url(url+arg,noeud.get(0),'','',event);
}
return false;
}
function aff_selection_titre(titre,id,idom,nid)
{
var t=jQuery('#titreparent');
var p=t.closest('form');
t.attr('value',titre);
p.find('#'+nid).attr('value',id).trigger('change');
p.find("#"+idom).hide('fast');
if(p.is('.submit_plongeur'))p.get(p.length-1).submit();
else p.find("#"+idom).prev('div').find('a').eq(0).focus();
}
function aff_selection_provisoire(id,racine,url,col,sens,informer,event){
if(url.href=='javascript:void(0)'){
slide_horizontal(racine+'_principal',((col-1)*150),sens);
aff_selection(id,racine+"_selection",informer);
}
else{
charger_id_url(url.href,
racine+'_col_'+(col+1),
function(){
slide_horizontal(racine+'_principal',((col-1)*150),sens);
aff_selection(id,racine+"_selection",informer);
},
event);
}
return false;
}
function onkey_rechercher(valeur,rac,url,img,nid,init){
var Field=jQuery("#"+rac).get(0);
if(!valeur.length){
init=jQuery("#"+init).get(0);
if(init&&init.href){charger_node_url(init.href,Field);}
}else{
charger_node_url(url+valeur,
Field,
function(){
var n=Field.childNodes.length-1;
if((n==1)){
noeud=Field.childNodes[n].firstChild;
if(noeud.title)
aff_selection_titre(noeud.firstChild.nodeValue,noeud.title,rac,nid);
}
},
img);
}
return false;
}
var verifForm_clicked=false;
function verifForm(racine){
verifForm_clicked=false;
if(!jQuery)return;
if(!jQuery.browser.msie)
jQuery('form:not(.bouton_action_post)',racine||document).not('.verifformok')
.keypress(function(e){
if(
((e.ctrlKey&&(
(((e.charCode||e.keyCode)==115)||((e.charCode||e.keyCode)==83))
||(e.charCode==19&&e.keyCode==19)
)
)
||(e.keyCode==19&&jQuery.browser.opera))
&&!verifForm_clicked
){
verifForm_clicked=true;
jQuery(this).find('input[type=submit]')
.click();
return false;
}
}).addClass('verifformok');
else
jQuery('form:not(.bouton_action_post)',racine||document).not('.verifformok')
.keydown(function(e){
if(!e.charCode&&e.keyCode==119&&!verifForm_clicked){
verifForm_clicked=true;
jQuery(this).find('input[type=submit]')
.click();
return false;
}
}).addClass('verifformok');
}
function AjaxSqueezeNode(trig,target,f,event){
var callback;
if(!f){
callback=function(){verifForm(this);}
}else{
callback=function(res,status){
f.apply(this,[res,status]);
verifForm(this);
}
}
if(typeof(trig)==='string'){
jQuery(target).animeajax();
return jQuery.ajax({
"url":trig,
"complete":function(r,s){
AjaxRet(r,s,target,callback);
jQuery(target).endLoading();
}
});
}
jQuery(target).animeajax();
jQuery(trig).ajaxSubmit({
"target":target,
"success":function(res,status){
if(status==='error'){
return this.html('Erreur HTTP');
}
callback.apply(this,[res,status]);
}
});
return true;
}
function AjaxRet(res,status,target,callback){
if(res.aborted){
return;
}
if(status==='error'){
return jQuery(target).html('HTTP Error');
}
jQuery(target)
.html(res.responseText)
.each(callback,[res.responseText,status]);
}
function charger_id_url(myUrl,myField,jjscript,event){
var Field=jQuery("#"+myField);
if(!Field.length)return true;
if(!myUrl){
Field.empty();
retour_id_url(Field.get(0),jjscript);
return true;
}
else
return charger_node_url(myUrl,Field.get(0),jjscript,jQuery('#'+'img_'+myField).get(0),event);
}
function charger_node_url(myUrl,Field,jjscript,img,event){
if(url_chargee[myUrl]){
var el=jQuery(Field).html(url_chargee[myUrl])[0];
retour_id_url(el,jjscript);
jQuery.spip.triggerAjaxLoad(el);
return false;
}
else{
if(img)img.style.visibility="visible";
if(xhr_actifs[Field]){xhr_actifs[Field].aborted=true;xhr_actifs[Field].abort();}
xhr_actifs[Field]=AjaxSqueezeNode(myUrl,
Field,
function(r){
xhr_actifs[Field]=undefined;
if(img)img.style.visibility="hidden";
url_chargee[myUrl]=r;
retour_id_url(Field,jjscript);
slide_horizontal($(Field).children().attr("id")+'_principal',$(Field).width(),$(Field).css("text-align"));
},
event);
return false;
}
}
function retour_id_url(Field,jjscript){
jQuery(Field).css({'visibility':'visible','display':'block'});
if(jjscript)jjscript();
}
function charger_node_url_si_vide(url,noeud,gifanime,jjscript,event){
if(noeud.style.display!='none'){
noeud.style.display='none';}
else{
if(noeud.innerHTML!=""){
noeud.style.visibility="visible";
noeud.style.display="block";
}else{
charger_node_url(url,noeud,'',gifanime,event);
}
}
return false;
}
jQuery(function(){
verifForm();
onAjaxLoad(verifForm);
});


/* ../prive/javascript/presentation.js?1733220530 */

$.fn.hoverClass=function(c){
return this.each(function(){
$(this).hover(
function(){$(this).addClass(c);},
function(){$(this).removeClass(c);}
);
});
};
var accepter_change_statut=false;
function selec_statut(id,type,decal,puce,script){
node=$('.imgstatut'+type+id);
if(!accepter_change_statut)
accepter_change_statut=confirm(confirm_changer_statut);
if(!accepter_change_statut||!node.length)return;
$('.statutdecal'+type+id)
.css('margin-left',decal+'px')
.removeClass('on');
$.get(script,function(c){
if(!c)
node.attr('src',puce);
else{
r=window.open();
r.document.write(c);
r.document.close();
}
});
}
function prepare_selec_statut(node,nom,type,id,action)
{
$(node)
.hoverClass('on')
.addClass('on')
.load(action+'&type='+type+'&id='+id);
}
jQuery.fn.showother=function(cible){
var me=this;
if(me.is('.replie')){
me.addClass('deplie').removeClass('replie');
jQuery(cible)
.slideDown('fast',
function(){
jQuery(me)
.addClass('blocdeplie')
.removeClass('blocreplie')
.removeClass('togglewait');
}
).trigger('deplie');
}
return this;
}
jQuery.fn.hideother=function(cible){
var me=this;
if(!me.is('.replie')){
me.addClass('replie').removeClass('deplie');
jQuery(cible)
.slideUp('fast',
function(){
jQuery(me)
.addClass('blocreplie')
.removeClass('blocdeplie')
.removeClass('togglewait');
}
).trigger('replie');
}
return this;
}
jQuery.fn.toggleother=function(cible){
if(this.is('.deplie'))
return this.hideother(cible);
else
return this.showother(cible);
}
jQuery.fn.depliant=function(cible){
if(!this.is('.depliant')){
var time=400;
var me=this;
this
.addClass('depliant');
if(!me.is('.deplie')){
me.addClass('hover')
.addClass('togglewait');
var t=setTimeout(function(){
me.toggleother(cible);
t=null;
},time);
}
me
.hover(function(e){
me
.addClass('hover');
if(!me.is('.deplie')){
me.addClass('togglewait');
if(t){clearTimeout(t);t=null;}
t=setTimeout(function(){
me.toggleother(cible);
t=null;
},time);
}
}
,function(e){
if(t){clearTimeout(t);t=null;}
me
.removeClass('hover');
})
.end();
}
return this;
}
jQuery.fn.depliant_clicancre=function(cible){
var me=this.parent();
if(me.is('.togglewait'))return false;
me.toggleother(cible);
return false;
}
function reloadExecPage(exec,blocs){
if(window.jQuery){
jQuery(function(){
if(!blocs)
blocs="#navigation,#extra";
jQuery(blocs).find('>div').ajaxReload({args:{exec:exec}});
if(exec.match(/_edit$/))
jQuery('body').addClass('edition');
else
jQuery('body').removeClass('edition');
})
}
}


/* ../prive/javascript/gadgets.js?1733220530 */
function init_gadgets(url_menu_rubrique){
jQuery('#boutonbandeautoutsite').one('mouseover',function(){
jQuery(this).siblings('ul').find('li:first>a').animeajax();
jQuery.ajax({
url:url_menu_rubrique,
success:function(c){
jQuery('#boutonbandeautoutsite').siblings('ul').remove();
jQuery('#boutonbandeautoutsite')
.after(c)
.parent().find('li').menuFocus();
}
});
});
}
function focus_zone(selecteur){
jQuery(selecteur).eq(0).find('a,input:visible').get(0).focus();
return false;
}
jQuery(function(){
init_gadgets(url_menu_rubrique);
var is_open=0;
jQuery.fn.menuItemOpen=function(){
jQuery(this)
.addClass('actif')
.parents('li').addClass('actif');
jQuery(this).siblings('li').removeClass('actif_tempo');
is_open=true;
return this;
}
jQuery.fn.menuItemClose=function(){
jQuery(this)
.removeClass('actif_tempo');
is_open=(jQuery(this).parents('ul').eq(-1).find('li.actif').length>0);
return this;
}
jQuery.fn.menuFocus=function(){
jQuery(this)
.on('mouseenter',
function(){
if(this.timerout)
clearTimeout(this.timerout);
this.timerout=null;
this.timerin=null;
if(is_open)
jQuery(this).menuItemOpen();
else{
var me=jQuery(this);
this.timerin=setTimeout(function(){
me.menuItemOpen(null);
},200);
}
})
.on('mouseleave',
function(){
if(this.timerin)
clearTimeout(this.timerin);
this.timerin=null;
if(is_open){
var me=jQuery(this).removeClass('actif').addClass('actif_tempo');
this.timerout=setTimeout(function(){
me.menuItemClose();
},400);
}
}
)
.has('ul').find(' > a')
.on('touchend',function(event){
event.preventDefault();
var me=jQuery(this).parent();
if(me.hasClass('actif')){
me.trigger('mouseleave').find('> a').trigger('blur');
}else{
me.siblings('.actif').trigger('mouseleave').find('> a').trigger('blur');
me.trigger('mouseenter').find('> a').trigger('focus');
}
})
.end().end()
.find('> a, li > a')
.on('focus, mouseenter',function(){
jQuery(this).parents('li').siblings('.actif').removeClass('actif');
jQuery(this).parents('li').addClass('actif');
})
.on('blur, mouseleave',function(){
jQuery(this).parents('li').removeClass('actif');
});
return this;
}
jQuery('#bando_navigation').on('hover touchstart',function(){
hauteur=parseInt(jQuery('#bando_navigation .largeur').height())
+parseInt(jQuery('#bando_navigation').css("padding-top"))
+parseInt(jQuery('#bando_navigation').css("padding-bottom"));
jQuery('#bando_navigation ul li>ul').css({'top':hauteur});
});
jQuery('#bando_haut .deroulant > li').menuFocus();
jQuery('#bandeau_haut #formRecherche input').on('hover touchstart',function(){
jQuery('#bandeau_haut ul.actif').trigger('mouseout');
});
jQuery('#bando_liens_rapides a')
.on('focus',function(){
jQuery('#bando_liens_rapides').addClass('actif');
})
.on('blur',function(){
jQuery('#bando_liens_rapides').removeClass('actif');
});
if(typeof window.test_accepte_ajax!="undefined"){
test_accepte_ajax();
}
});


/* ../prive/javascript/prefixfree.js?1733220530 */

(function(){
if(!window.addEventListener){
return;
}
var self=window.StyleFix={
optIn:document.currentScript.hasAttribute("data-prefix"),
link:function(link){
var url=link.href||link.getAttribute('data-href');
try{
if(!url||link.rel!=='stylesheet'||link.hasAttribute('data-noprefix')
||(self.optIn&&!link.hasAttribute('data-prefix'))){
return;
}
}
catch(e){
return;
}
var base=url.replace(/[^\/]+$/,''),
base_scheme=(/^[a-z]{3,10}:/.exec(base)||[''])[0],
base_domain=(/^[a-z]{3,10}:\/\/[^\/]+/.exec(base)||[''])[0],
base_query=/^([^?]*)\??/.exec(url)[1],
parent=link.parentNode,
xhr=new XMLHttpRequest(),
process;
xhr.onreadystatechange=function(){
if(xhr.readyState===4){
process();
}
};
process=function(){
var css=xhr.responseText;
if(css&&link.parentNode&&(!xhr.status||xhr.status<400||xhr.status>600)){
css=self.fix(css,true,link);
if(css&&base){
css=css.replace(/url\(\s*?((?:"|')?)(.+?)\1\s*?\)/gi,function($0,quote,url){
if(/^([a-z]{3,10}:|#)/i.test(url)){
return $0;
}
else if(/^\/\//.test(url)){
return'url("'+base_scheme+url+'")';
}
else if(/^\//.test(url)){
return'url("'+base_domain+url+'")';
}
else if(/^\?/.test(url)){
return'url("'+base_query+url+'")';
}
else{
return'url("'+base+url+'")';
}
});
var escaped_base=base.replace(/([\\\^\$*+[\]?{}.=!:(|)])/g,"\\$1");
css=css.replace(RegExp('\\b(behavior:\\s*?url\\(\'?"?)'+escaped_base,'gi'),'$1');
}
var style=document.createElement('style');
style.textContent='/*# sourceURL='+link.getAttribute('href')+' */\n/*@ sourceURL='+link.getAttribute('href')+' */\n'+css;
style.media=link.media;
style.disabled=link.disabled;
style.setAttribute('data-href',link.getAttribute('href'));
if(link.id)style.id=link.id;
parent.insertBefore(style,link);
parent.removeChild(link);
style.media=link.media;
}
};
try{
xhr.open('GET',url);
xhr.send(null);
}catch(e){
if(typeof XDomainRequest!="undefined"){
xhr=new XDomainRequest();
xhr.onerror=xhr.onprogress=function(){};
xhr.onload=process;
xhr.open("GET",url);
xhr.send(null);
}
}
link.setAttribute('data-inprogress','');
},
styleElement:function(style){
if(style.hasAttribute('data-noprefix')){
return;
}
var disabled=style.disabled;
style.textContent=self.fix(style.textContent,true,style);
style.disabled=disabled;
},
styleAttribute:function(element){
var css=element.getAttribute('style');
css=self.fix(css,false,element);
element.setAttribute('style',css);
},
process:function(){
$('link[rel="stylesheet"]:not([data-inprogress])').forEach(StyleFix.link);
$('style').forEach(StyleFix.styleElement);
$('[style]').forEach(StyleFix.styleAttribute);
var event=document.createEvent('Event');
event.initEvent('StyleFixProcessed',true,true);
document.dispatchEvent(event);
},
register:function(fixer,index){
(self.fixers=self.fixers||[])
.splice(index===undefined?self.fixers.length:index,0,fixer);
},
fix:function(css,raw,element){
if(self.fixers){
for(var i=0;i<self.fixers.length;i++){
css=self.fixers[i](css,raw,element)||css;
}
}
return css;
},
camelCase:function(str){
return str.replace(/-([a-z])/g,function($0,$1){return $1.toUpperCase();}).replace('-','');
},
deCamelCase:function(str){
return str.replace(/[A-Z]/g,function($0){return'-'+$0.toLowerCase()});
}
};
(function(){
setTimeout(function(){
$('link[rel="stylesheet"]').forEach(StyleFix.link);
},10);
document.addEventListener('DOMContentLoaded',StyleFix.process,false);
})();
function $(expr,con){
return[].slice.call((con||document).querySelectorAll(expr));
}
})();
(function(root){
if(!window.StyleFix||!window.getComputedStyle){
return;
}
function fix(what,before,after,replacement,css){
what=self[what];
if(what.length){
var regex=RegExp(before+'('+what.join('|')+')'+after,'gi');
css=css.replace(regex,replacement);
}
return css;
}
var self=window.PrefixFree={
prefixCSS:function(css,raw,element){
var prefix=self.prefix;
if(self.functions.indexOf('linear-gradient')>-1){
css=css.replace(/(\s|:|,)(repeating-)?linear-gradient\(\s*(-?\d*\.?\d*)deg/ig,function($0,delim,repeating,deg){
return delim+(repeating||'')+'linear-gradient('+(90-deg)+'deg';
});
}
css=fix('functions','(\\s|:|,)','\\s*\\(','$1'+prefix+'$2(',css);
css=fix('keywords','(\\s|:)','(\\s|;|\\}|$)','$1'+prefix+'$2$3',css);
css=fix('properties','(^|\\{|\\s|;)','\\s*:','$1'+prefix+'$2:',css);
if(self.properties.length){
var regex=RegExp('\\b('+self.properties.join('|')+')(?!:)','gi');
css=fix('valueProperties','\\b',':(.+?);',function($0){
return $0.replace(regex,prefix+"$1")
},css);
}
if(raw){
css=fix('selectors','','\\b',self.prefixSelector,css);
css=fix('atrules','@','\\b','@'+prefix+'$1',css);
}
css=css.replace(RegExp('-'+prefix,'g'),'-');
css=css.replace(/-\*-(?=[a-z]+)/gi,self.prefix);
return css;
},
property:function(property){
return(self.properties.indexOf(property)>=0?self.prefix:'')+property;
},
value:function(value,property){
value=fix('functions','(^|\\s|,)','\\s*\\(','$1'+self.prefix+'$2(',value);
value=fix('keywords','(^|\\s)','(\\s|$)','$1'+self.prefix+'$2$3',value);
if(self.valueProperties.indexOf(property)>=0){
value=fix('properties','(^|\\s|,)','($|\\s|,)','$1'+self.prefix+'$2$3',value);
}
return value;
},
prefixSelector:function(selector){
return self.selectorMap[selector]||selector
},
prefixProperty:function(property,camelCase){
var prefixed=self.prefix+property;
return camelCase?StyleFix.camelCase(prefixed):prefixed;
}
};
(function(){
var prefixes={},
properties=[],
shorthands={},
style=getComputedStyle(document.documentElement,null),
dummy=document.createElement('div').style;
var iterate=function(property){
if(/^-[^-]/.test(property)){
properties.push(property);
var parts=property.split('-'),
prefix=parts[1];
prefixes[prefix]=++prefixes[prefix]||1;
while(parts.length>3){
parts.pop();
var shorthand=parts.join('-');
if(supported(shorthand)&&properties.indexOf(shorthand)===-1){
properties.push(shorthand);
}
}
}
},
supported=function(property){
return StyleFix.camelCase(property)in dummy;
}
if(style&&style.length>0){
for(var i=0;i<style.length;i++){
iterate(style[i])
}
}
else{
for(var property in style){
iterate(StyleFix.deCamelCase(property));
}
}
var highest={uses:0};
for(var prefix in prefixes){
var uses=prefixes[prefix];
if(highest.uses<uses){
highest={prefix:prefix,uses:uses};
}
}
self.prefix='-'+highest.prefix+'-';
self.Prefix=StyleFix.camelCase(self.prefix);
self.properties=[];
for(var i=0;i<properties.length;i++){
var property=properties[i];
if(property.indexOf(self.prefix)===0){
var unprefixed=property.slice(self.prefix.length);
if(!supported(unprefixed)){
self.properties.push(unprefixed);
}
}
}
if(self.Prefix=='Ms'
&&!('transform'in dummy)
&&!('MsTransform'in dummy)
&&('msTransform'in dummy)){
self.properties.push('transform','transform-origin');
}
self.properties.sort();
})();
(function(){
var functions={
'linear-gradient':{
property:'backgroundImage',
params:'red, teal'
},
'calc':{
property:'width',
params:'1px + 5%'
},
'element':{
property:'backgroundImage',
params:'#foo'
},
'cross-fade':{
property:'backgroundImage',
params:'url(a.png), url(b.png), 50%'
},
'image-set':{
property:'backgroundImage',
params:'url(a.png) 1x, url(b.png) 2x'
}
};
functions['repeating-linear-gradient']=
functions['repeating-radial-gradient']=
functions['radial-gradient']=
functions['linear-gradient'];
var keywords={
'initial':'color',
'grab':'cursor',
'grabbing':'cursor',
'zoom-in':'cursor',
'zoom-out':'cursor',
'box':'display',
'flexbox':'display',
'inline-flexbox':'display',
'flex':'display',
'inline-flex':'display',
'grid':'display',
'inline-grid':'display',
'max-content':'width',
'min-content':'width',
'fit-content':'width',
'fill-available':'width',
'contain-floats':'width'
};
self.functions=[];
self.keywords=[];
var style=document.createElement('div').style;
function supported(value,property){
style[property]='';
style[property]=value;
return!!style[property];
}
for(var func in functions){
var test=functions[func],
property=test.property,
value=func+'('+test.params+')';
if(!supported(value,property)
&&supported(self.prefix+value,property)){
self.functions.push(func);
}
}
for(var keyword in keywords){
var property=keywords[keyword];
if(!supported(keyword,property)
&&supported(self.prefix+keyword,property)){
self.keywords.push(keyword);
}
}
})();
(function(){
var
selectors={
':any-link':null,
'::backdrop':null,
':fullscreen':null,
':full-screen':':fullscreen',
'::placeholder':null,
':placeholder':':placeholder-shown',
'::input-placeholder':'::placeholder',
':input-placeholder':':placeholder-shown',
':read-only':null,
':read-write':null,
'::selection':null
},
atrules={
'keyframes':'name',
'viewport':null,
'document':'regexp(".")'
};
self.selectors=[];
self.selectorMap={};
self.atrules=[];
var style=root.appendChild(document.createElement('style'));
function supported(selector){
style.textContent=selector+'{}';
return!!style.sheet.cssRules.length;
}
for(var selector in selectors){
var standard=selectors[selector]||selector
var prefixed=selector.replace(/::?/,function($0){return $0+self.prefix})
if(!supported(standard)&&supported(prefixed)){
self.selectors.push(standard);
self.selectorMap[standard]=prefixed;
}
}
for(var atrule in atrules){
var test=atrule+' '+(atrules[atrule]||'');
if(!supported('@'+test)&&supported('@'+self.prefix+test)){
self.atrules.push(atrule);
}
}
root.removeChild(style);
})();
self.valueProperties=[
'transition',
'transition-property',
'will-change'
]
root.className+=' '+self.prefix;
StyleFix.register(self.prefixCSS);
})(document.documentElement);


/* ../plugins-dist/medias/javascript/medias_edit.js?1733220532 */
(function(){
function editbox_init(){
jQuery(':where(.formulaire_editer_logo, #documents_joints, #portfolios) a.editbox:not(.nobox)')
.attr("onclick","").addClass('nobox').click(function(){
var casedoc=jQuery(this).parents('div.item').eq(0);
jQuery(casedoc).animateLoading();
jQuery.modalboxload(parametre_url(parametre_url(jQuery(this).attr('href'),'popin','oui'),'var_zajax','contenu'),{
onClose:function(dialog){jQuery(casedoc).ajaxReload();}
});
return false;
});
}
if(window.jQuery){
(function($){
if(typeof onAjaxLoad=="function"){
onAjaxLoad(editbox_init);
}
$(editbox_init);
})(jQuery);
}
})();


/* ../plugins-dist/mediabox/lib/lity/lity.js?1733220532 */

(function(window,factory){
if(typeof define==='function'&&define.amd){
define(['jquery'],function($){
return factory(window,$);
});
}else if(typeof module==='object'&&typeof module.exports==='object'){
module.exports=factory(window,require('jquery'));
}else{
window.lity=factory(window,window.jQuery||window.Zepto);
}
}(typeof window!=="undefined"?window:this,function(window,$){
'use strict';
var document=window.document;
var _win=$(window);
var _deferred=$.Deferred;
var _html=$('html');
var _instances=[];
var _attrAriaHidden='aria-hidden';
var _dataAriaHidden='lity-'+_attrAriaHidden;
var _focusableElementsSelector='a[href],area[href],input:not([disabled]),select:not([disabled]),textarea:not([disabled]),button:not([disabled]),iframe,object,embed,[contenteditable],[tabindex]:not([tabindex^="-"])';
var _defaultOptions={
esc:true,
handler:null,
handlers:{
image:imageHandler,
inline:inlineHandler,
iframe:iframeHandler
},
forceFocusInside:false,
template:'<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"><div class="lity-wrap" data-lity-close role="document"><div class="lity-loader" aria-hidden="true">Loading...</div><div class="lity-container"><div class="lity-content"></div><button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button></div></div></div>'
};
var _imageRegexp=/(^data:image\/)|(\.(png|jpe?g|gif|svg|webp|bmp|ico|tiff?)(\?\S*)?$)/i;
var _transitionEndEvent=(function(){
var el=document.createElement('div');
var transEndEventNames={
WebkitTransition:'webkitTransitionEnd',
MozTransition:'transitionend',
OTransition:'oTransitionEnd otransitionend',
transition:'transitionend'
};
for(var name in transEndEventNames){
if(el.style[name]!==undefined){
return transEndEventNames[name];
}
}
return false;
})();
function transitionEnd(element){
var deferred=_deferred();
if(!_transitionEndEvent||!element.length){
deferred.resolve();
}else{
element.one(_transitionEndEvent,deferred.resolve);
setTimeout(deferred.resolve,500);
}
return deferred.promise();
}
function settings(currSettings,key,value){
if(arguments.length===1){
return $.extend({},currSettings);
}
if(typeof key==='string'){
if(typeof value==='undefined'){
return typeof currSettings[key]==='undefined'
?null
:currSettings[key];
}
currSettings[key]=value;
}else{
$.extend(currSettings,key);
}
return this;
}
function parseQueryParams(params){
var pos=params.indexOf('?');
if(pos>-1){
params=params.substr(pos+1);
}
var pairs=decodeURI(params.split('#')[0]).split('&');
var obj={},p;
for(var i=0,n=pairs.length;i<n;i++){
if(!pairs[i]){
continue;
}
p=pairs[i].split('=');
obj[p[0]]=p[1];
}
return obj;
}
function appendQueryParams(url,params){
if(!params){
return url;
}
if('string'===$.type(params)){
params=parseQueryParams(params);
}
if(url.indexOf('?')>-1){
var split=url.split('?');
url=split.shift();
params=$.extend(
{},
parseQueryParams(split[0]),
params
)
}
return url+'?'+$.param(params);
}
function transferHash(originalUrl,newUrl){
var pos=originalUrl.indexOf('#');
if(-1===pos){
return newUrl;
}
if(pos>0){
originalUrl=originalUrl.substr(pos);
}
return newUrl+originalUrl;
}
function iframe(iframeUrl,instance,queryParams,hashUrl){
instance&&instance.element().addClass('lity-iframe');
if(queryParams){
iframeUrl=appendQueryParams(iframeUrl,queryParams);
}
if(hashUrl){
iframeUrl=transferHash(hashUrl,iframeUrl);
}
return'<div class="lity-iframe-container"><iframe frameborder="0" allowfullscreen allow="autoplay; fullscreen" src="'+iframeUrl+'"/></div>';
}
function error(msg){
return $('<span class="lity-error"></span>').append(msg);
}
function imageHandler(target,instance){
var desc=(instance.opener()&&instance.opener().data('lity-desc'))||'Image with no description';
var img=$('<img src="'+target+'" alt="'+desc+'"/>');
var deferred=_deferred();
var failed=function(){
deferred.reject(error('Failed loading image'));
};
img
.on('load',function(){
if(this.naturalWidth===0){
return failed();
}
deferred.resolve(img);
})
.on('error',failed)
;
return deferred.promise();
}
imageHandler.test=function(target){
return _imageRegexp.test(target);
};
function inlineHandler(target,instance){
var el,placeholder,hasHideClass;
try{
el=$(target);
}catch(e){
return false;
}
if(!el.length){
return false;
}
placeholder=$('<i style="display:none !important"></i>');
hasHideClass=el.hasClass('lity-hide');
instance
.element()
.one('lity:remove',function(){
placeholder
.before(el)
.remove()
;
if(hasHideClass&&!el.closest('.lity-content').length){
el.addClass('lity-hide');
}
})
;
return el
.removeClass('lity-hide')
.after(placeholder)
;
}
function iframeHandler(target,instance){
return iframe(target,instance);
}
function winHeight(){
return document.documentElement.clientHeight
?document.documentElement.clientHeight
:Math.round(_win.height());
}
function keydown(e){
var current=currentInstance();
if(!current){
return;
}
if(e.keyCode===27&&!!current.options('esc')){
current.close();
}
if(e.keyCode===9){
handleTabKey(e,current);
}
}
function handleTabKey(e,instance){
var focusableElements=instance.element().find(_focusableElementsSelector);
var focusedIndex=focusableElements.index(document.activeElement);
if(e.shiftKey&&focusedIndex<=0){
focusableElements.get(focusableElements.length-1).focus();
e.preventDefault();
}else if(!e.shiftKey&&focusedIndex===focusableElements.length-1){
focusableElements.get(0).focus();
e.preventDefault();
}
if(focusedIndex===-1&&instance.options().forceFocusInside){
focusableElements.get(0).focus();
e.preventDefault();
}
}
function resize(){
$.each(_instances,function(i,instance){
instance.resize();
});
}
function registerInstance(instanceToRegister){
if(1===_instances.unshift(instanceToRegister)){
_html.addClass('lity-active');
_win
.on({
resize:resize,
keydown:keydown
})
;
}
$('body > *').not(instanceToRegister.element())
.addClass('lity-hidden')
.each(function(){
var el=$(this);
if(undefined!==el.data(_dataAriaHidden)){
return;
}
el.data(_dataAriaHidden,el.attr(_attrAriaHidden)||null);
})
.attr(_attrAriaHidden,'true')
;
}
function removeInstance(instanceToRemove){
var show;
instanceToRemove
.element()
.attr(_attrAriaHidden,'true')
;
if(1===_instances.length){
_html.removeClass('lity-active');
_win
.off({
resize:resize,
keydown:keydown
})
;
}
_instances=$.grep(_instances,function(instance){
return instanceToRemove!==instance;
});
if(!!_instances.length){
show=_instances[0].element();
}else{
show=$('.lity-hidden');
}
show
.removeClass('lity-hidden')
.each(function(){
var el=$(this),oldAttr=el.data(_dataAriaHidden);
if(!oldAttr){
el.removeAttr(_attrAriaHidden);
}else{
el.attr(_attrAriaHidden,oldAttr);
}
el.removeData(_dataAriaHidden);
})
;
}
function currentInstance(){
if(0===_instances.length){
return null;
}
return _instances[0];
}
function factory(target,instance,handlers,preferredHandler){
var handler='inline',content;
var currentHandlers=$.extend({},handlers);
if(preferredHandler&&currentHandlers[preferredHandler]){
content=currentHandlers[preferredHandler](target,instance);
handler=preferredHandler;
}else{
$.each(['inline','iframe'],function(i,name){
delete currentHandlers[name];
currentHandlers[name]=handlers[name];
});
$.each(currentHandlers,function(name,currentHandler){
if(!currentHandler){
return true;
}
if(
currentHandler.test&&
!currentHandler.test(target,instance)
){
return true;
}
content=currentHandler(target,instance);
if(false!==content){
handler=name;
return false;
}
});
}
return{handler:handler,content:content||''};
}
function Lity(target,options,opener,activeElement){
var self=this;
var result;
var isReady=false;
var isClosed=false;
var element;
var content;
options=$.extend(
{},
_defaultOptions,
options
);
element=$(options.template);
self.element=function(){
return element;
};
self.opener=function(){
return opener;
};
self.content=function(){
return content;
};
self.options=$.proxy(settings,self,options);
self.handlers=$.proxy(settings,self,options.handlers);
self.resize=function(){
if(!isReady||isClosed){
return;
}
content
.css('max-height',winHeight()+'px')
.trigger('lity:resize',[self])
;
};
self.close=function(){
if(isClosed){
return;
}
isClosed=true;
removeInstance(self);
var deferred=_deferred();
if(
activeElement&&
(
document.activeElement===element[0]||
$.contains(element[0],document.activeElement)
)
){
try{
activeElement.focus();
}catch(e){
}
}
var trigerable=(content?content:element);
trigerable.trigger('lity:close',[self]);
element
.removeClass('lity-opened')
.addClass('lity-closed')
;
transitionEnd(trigerable.add(element))
.always(function(){
trigerable.trigger('lity:remove',[self]);
element.remove();
element=undefined;
deferred.resolve();
})
;
return deferred.promise();
};
result=factory(target,self,options.handlers,options.handler);
element
.attr(_attrAriaHidden,'false')
.addClass('lity-loading lity-opened lity-'+result.handler)
.appendTo('body')
.focus()
.on('click','[data-lity-close]',function(e){
if($(e.target).is('[data-lity-close]')){
self.close();
}
})
.trigger('lity:open',[self])
;
registerInstance(self);
$.when(result.content)
.always(ready)
;
function ready(result){
if(isClosed){
return;
}
content=$(result)
.css('max-height',winHeight()+'px')
;
element
.find('.lity-loader')
.each(function(){
var loader=$(this);
transitionEnd(loader)
.always(function(){
loader.remove();
})
;
})
;
element
.removeClass('lity-loading')
.find('.lity-content')
.empty()
.append(content)
;
isReady=true;
content
.trigger('lity:ready',[self])
;
}
}
function lity(target,options,opener){
if(!target.preventDefault){
opener=$(opener);
}else{
target.preventDefault();
opener=$(this);
target=opener.data('lity-target')||opener.attr('href')||opener.attr('src');
}
var instance=new Lity(
target,
$.extend(
{},
opener.data('lity-options')||opener.data('lity'),
options
),
opener,
document.activeElement
);
if(!target.preventDefault){
return instance;
}
}
lity.version='3.0.0-dev';
lity.options=$.proxy(settings,lity,_defaultOptions);
lity.handlers=$.proxy(settings,lity,_defaultOptions.handlers);
lity.current=currentInstance;
lity.iframe=iframe;
$(document).on('click.lity','[data-lity]',lity);
return lity;
}));


/* ../plugins-dist/mediabox/lity/js/lity.mediabox.js?1733220532 */
;
(function($){
var litySpip={
nameSpace:'mediabox',
config:{
forceFocusInside:true,
},
strings:{
},
callbacks:{
onOpen:[],
onShow:[],
onClose:[]
},
focusedItem:[],
isTransition:false,
adjustHeight:function(instance){
var $content=instance.content();
var $containerHeight=instance.element().find('.lity-container').height();
if($containerHeight){
var h=Math.round($containerHeight)+'px';
$content
.css('max-height',h)
.find('[data-'+litySpip.nameSpace+'-force-max-height]')
.css('max-height',h);
}
},
template:function(cfg,type,groupName,groupPosition,groupLength){
var className='';
if(!!cfg.className){
className=' '+cfg.className;
}
if(cfg.transitionOnOpen){
className+=' lity-transition-on-open-'+cfg.transitionOnOpen;
}
if(!!cfg.noTransition){
className+=' lity-no-transition';
}
if(!!cfg.slideShow){
className+=' lity-slideshow';
}
var styles=[];
var styles_container='';
var styles_content='';
if(cfg.sideBar){
className+=' lity-sidebar lity-sidebar-'+cfg.sideBar;
if(cfg.sideBar==='start'||cfg.sideBar==='end'){
className+=' lity-sidebar-inline';
cfg.height='100vh';
cfg.maxHeight='100vh';
}
if(cfg.sideBar==='top'||cfg.sideBar==='bottom'){
className+=' lity-sidebar-block';
cfg.width='100vw';
cfg.maxWidth='100vw';
}
}
if(cfg.maxWidth){
styles.push("max-width:"+cfg.maxWidth.replace("%","vw"));
}
if(cfg.maxHeight){
styles.push("max-height:"+cfg.maxHeight.replace("%","vh"));
}
if(cfg.width){
styles.push("width:"+cfg.width.replace("%","vw"));
className+=' lity-width-set';
}
if(cfg.height){
styles.push("height:"+cfg.height.replace("%","vh"));
className+=' lity-height-set';
if(cfg.minHeight){
styles.push("min-height:"+cfg.minHeight.replace("%","vh"));
}
}
if(styles.length){
styles_container=' style="'+styles.join(';')+'"';
}
styles=[];
var max;
if(cfg.minWidth){
max=(cfg.maxWidth?cfg.maxWidth.replace("%","vw"):'95vw');
styles.push("min-width:min("+max+","+cfg.minWidth.replace("%","vw")+')');
}
if(cfg.minHeight&&!cfg.height){
max=(cfg.maxHeight?cfg.maxHeight.replace("%","vw"):'95vh');
styles.push("min-height:min("+max+","+cfg.minHeight.replace("%","vh")+')');
}
if(styles.length){
styles_content=' style="'+styles.join(';')+'"';
}
var button_next_prev='',
button_start_stop='',
group_info_text='',
group_info='';
if(groupName&&groupLength){
if(groupLength>1){
var newPosition=(groupPosition<=0?groupLength-1:groupPosition-1);
button_next_prev+='<button class="lity-previous" type="button" data-group-name="'+groupName+'" data-group-position="'+newPosition+'" aria-label="'+litySpip.strings.previous+'" data-lity-previous'
+'><b title="'+litySpip.strings.previous+'">❮</b></button>';
newPosition=(groupPosition>=groupLength-1?0:groupPosition+1);
button_next_prev+='<button class="lity-next" type="button" data-group-name="'+groupName+'" data-group-position="'+newPosition+'"  aria-label="'+litySpip.strings.next+'" data-lity-next'
+'><b title="'+litySpip.strings.next+'">❯</b></button>';
}
group_info_text=" "+litySpip.strings.current;
group_info_text=group_info_text.replace('{current}',(groupPosition+1)+'');
group_info_text=group_info_text.replace('{total}',groupLength+'');
button_start_stop+='<button class="lity-start-stop" type="button" data-lity-stop-start>'
+'<b class="lity-start" aria-label="'+litySpip.strings.slideshowStart+'" title="'+litySpip.strings.slideshowStart+'">▶</b>'
+'<b class="lity-stop" aria-label="'+litySpip.strings.slideshowStop+'" title="'+litySpip.strings.slideshowStop+'">□</b>'
+'</button>';
group_info='<div class="lity-group-caption">'
+'<span class="lity-group-start-stop">'+button_start_stop+'</span>'
+'<span class="lity-group-current">'+group_info_text+'</span>'
+'<span class="lity-group-next-prev">'+button_next_prev+'</span>'
+'<span class="lity-group-progress-bar"><span class="lity-group-progress-bar-status" style="width:0"></span></span>'
+'</div>';
}
var close_button_aria_label=litySpip.strings.close+' ('+litySpip.strings.press_escape+')';
var dialog_title=(type==='image'?litySpip.strings.dialog_title_med:litySpip.strings.dialog_title_def);
dialog_title+=group_info_text+' ('+litySpip.strings.press_escape+')';
var t=
'<dialog class="box_mediabox box_modalbox lity'+className+'" role="dialog" aria-label="'+dialog_title+'" tabindex="-1">'
+'<div class="lity-wrap"'+(cfg.overlayClose===false?'':' data-lity-close')+' role="document">'
+'<div class="lity-loader" aria-hidden="true" aria-label="'+litySpip.strings.loading+'"><span class="box-loading"></span></div>'
+'<div class="lity-container"'+styles_container+'>'
+'<button class="lity-close" type="button" aria-label="'+close_button_aria_label+'" data-lity-close><b data-lity-close title="'+litySpip.strings.close+'">&times;</b></button>'
+'<div class="lity-content"'+styles_content+'></div>'
+group_info
+'</div>'
+'</div>'
+'</dialog>';
return t;
},
failHandler:function(target,instance){
return'<div class="error lity-error">Failed loading content</div>';
},
ajaxHandler:function(target,instance){
var selector,
off=target.indexOf(" ");
if(off>-1){
selector=target.slice(off);
selector=selector.match(/[^\x20\t\r\n\f]+/g)||[];
selector=selector.join(" ");
target=target.slice(0,off);
}
if(jQuery.spip.preloaded_urls[target]){
var content=jQuery.spip.preloaded_urls[target];
if(selector){
content=$("<div>").append($.parseHTML(content)).find(selector);
}
return $('<div class="lity-content-inner"></div>').append(content);
}
var _deferred=$.Deferred;
var deferred=_deferred();
var failed=function(){
deferred.reject($('<span class="error lity-error"></span>').append('Failed loading ajax'));
};
$.get(target)
.done(function(content){
jQuery.spip.preloaded_urls[target]=content;
if(selector){
content=$("<div>").append($.parseHTML(content)).find(selector);
}
deferred.resolve($('<div class="lity-content-inner"></div>').append(content));
})
.fail(failed);
return deferred.promise();
},
imageBuildContent:function(img,desc,longdesc,defaultCaptionClass){
img.attr('alt',desc?desc:'');
desc=(longdesc?longdesc:desc);
if(desc){
defaultCaptionClass=(defaultCaptionClass?defaultCaptionClass:'expanded');
var id='lity-image-caption-'+Date.now().toString(36)+Math.random().toString(36).substr(2);
img.attr('aria-describedby',id);
img=$('<figure class="lity-image-figure"></figure>').append(img).append('<figcaption id="'+id+'" class="lity-image-caption '+defaultCaptionClass+'"><div class="lity-image-caption-text">'+desc+'</div></figcaption>');
}
else{
img=$('<figure class="lity-image-figure"></figure>').append(img);
}
return img;
},
imageHandler:function(target,instance){
var _deferred=$.Deferred;
var desc='';
var longdesc='';
var defaultCaptionClass=(instance.options().defaultCaptionState==='min'?'min':'expanded');
var opener=instance.opener();
if(opener){
desc=opener.attr('title')||$('img[alt]',opener).eq(0).attr('alt')||'';
var by=opener.attr('aria-describedby')||$('img[aria-describedby]',opener).eq(0).attr('aria-describedby')||'';
if(by){
longdesc=$('#'+by).html();
longdesc=longdesc.trim();
}
if(!desc){
desc=desc||instance.opener().attr('aria-label')||'';
}
desc=desc.trim();
}
var img;
var cache=opener.data('lity-image-cache')||{};
if(cache[target]){
img=cache[target];
img=litySpip.imageBuildContent(img,desc,longdesc,defaultCaptionClass);
return img;
}
img=$('<img src="'+target+'" class="lity-image-img" data-'+litySpip.nameSpace+'-force-max-height />');
var deferred=_deferred();
var failed=function(){
deferred.reject($('<span class="error lity-error"></span>').append('Failed loading image'));
};
img
.on('load',function(){
if(this.naturalWidth===0){
img.attr("style","width:25vw;");
}
cache[target]=img;
opener.data('lity-image-cache',cache);
deferred.resolve(litySpip.imageBuildContent(img,desc,longdesc,defaultCaptionClass));
})
.on('error',failed)
;
return deferred.promise();
},
groupElements:function(groupName){
return $('.lity-enabled[data-'+litySpip.nameSpace+'-group'+'='+groupName+']');
},
eventSet:{},
setEvents:function(what){
if(!litySpip.eventSet[what]){
switch(what){
case'opener':
$(document).on('click','.lity-enabled',litySpip.onClickOpener);
break;
case'listener':
$(document).on('click','.lity-previous,.lity-next',litySpip.onPrevNext);
$(document).on('click','.lity-start-stop',litySpip.onSlideShowToggle);
$(window).on('keyup',litySpip.onKeyUp);
$(document).on('click','.lity-image-caption',litySpip.onCaptionToggle);
break;
}
litySpip.eventSet[what]=true;
}
},
onKeyUp:function(event){
var c={37:"previous",39:"next"}[event.keyCode];
if(c){
var current=lity.current();
if(current){
jQuery('.lity-'+c,current.element()).trigger('click');
}
}
},
onCaptionToggle:function(event){
var $caption=$(this);
$caption.toggleClass('min expanded');
},
openerFromPrevNext($button){
var groupName=$button.data('group-name');
var groupPosition=$button.data('group-position');
return litySpip.groupElements(groupName).eq(groupPosition);
},
onPrevNext:function(event){
var $button=$(this);
var newEl=litySpip.openerFromPrevNext($button);
if(newEl){
var element=lity.current().element();
litySpip.isTransition={oldClosed:false,newOpened:true};
element.addClass('lity-no-transition').css('visibility','hidden');
litySpip.slideshowStop(element);
var options={transitionOnOpen:$button.is('.lity-next')?'slide-from-right':'slide-from-left'};
if(element.is('.lity-slideshow')){
options.slideShow=true;
}
lity.current().close();
litySpip.elementOpener(newEl,options);
}
},
slideshowStart:function(element){
var $progress=element.find('.lity-group-progress-bar-status');
$progress.attr('style','');
$progress.css('width','100%');
var delay=litySpip.config.slideshowSpeed;
setTimeout(function(){
$progress.css('transition','width '+((delay-200)/1000)+'s linear');
$progress.css('width','0');
},200);
timer=setTimeout(function(){element.find('.lity-next').trigger('click')},delay);
element.data('lity-timer',timer);
$('.lity-start',element).attr('aria-hidden','true');
$('.lity-stop',element).attr('aria-hidden','false');
jQuery('.lity-start-stop',element).focus();
},
slideshowStop:function(element){
timer=element.data('lity-timer');
if(timer){
clearTimeout(timer);
}
},
onSlideShowToggle:function(event){
var $button=$(this);
var element=$button.closest('.lity');
var slideShowState=(element.is('.lity-slideshow')?true:false);
var timer;
if(!slideShowState){
litySpip.slideshowStart(element);
}
else{
litySpip.slideshowStop(element);
$('.lity-start',element).attr('aria-hidden','false');
$('.lity-stop',element).attr('aria-hidden','true');
}
element.toggleClass('lity-slideshow');
},
onClickOpener:function(event){
event.preventDefault();
var opener=$(this);
litySpip.elementOpener(opener);
},
elementOpener:function(opener,options){
var cfg=opener.data('mediabox-options');
if(options){
cfg=$.extend({},cfg,options);
}
var target=opener.data('href-popin')||opener.data('href')||opener.attr('href')||opener.attr('src');
litySpip.lityOpener(target,cfg,opener.get(0));
},
lityOpener:function(target,cfg,opener){
litySpip.setEvents('listener');
if(!litySpip.isTransition){
litySpip.callbacks.onOpen.push(cfg.onOpen||false);
litySpip.callbacks.onShow.push(cfg.onShow||false);
litySpip.callbacks.onClose.push(cfg.onClose||false);
litySpip.focusedItem.push($(document.activeElement));
}
var type=cfg.type||'';
if(!type&&opener){
type=$(opener).data(litySpip.nameSpace+'-type')||'';
}
var handlers=lity.handlers();
if(type==='ajax'){
handlers.ajax=litySpip.ajaxHandler;
}
handlers.image=litySpip.imageHandler;
if(type==='inline'){
var el=[];
try{
el=$(target);
}catch(e){
el=[];
}
if(!el.length){
handlers.inline=litySpip.failHandler;
}
}
cfg=$.extend({handlers:handlers},cfg);
if(type&&['image','inline','ajax','iframe'].indexOf(type)!==-1){
cfg.handler=type;
}
if(opener&&typeof($.parseMediaboxOptions)!=="undefined"){
cfg=$.extend(cfg,$.parseMediaboxOptions(litySpip.nameSpace,opener));
}
if(!!cfg.preloadOnly){
litySpip.lityPreLoader(target,cfg,opener);
}
else{
var groupPosition=0;
var groupLength=0;
if(opener){
var groupName=cfg.rel||(opener?$(opener).data(litySpip.nameSpace+'-group'):'');
if(groupName){
var elements=litySpip.groupElements(groupName);
groupPosition=elements.index($(opener));
groupLength=elements.length;
}
}
cfg=$.extend({template:litySpip.template(cfg,type,groupName,groupPosition,groupLength)},cfg);
if(cfg.samePopin){
var l=lity.current();
if(l){
l.close();
}
}
lity(target,cfg,opener);
}
},
lityPreLoader:function(target,cfg,opener){
if(cfg.handler&&cfg.handlers[cfg.handler]){
if(cfg.handler==='image'||cfg.handler==='ajax'){
var instance={
opener:function(){return $(opener);},
options:function(){return cfg}
};
var content=cfg.handlers[cfg.handler](target,instance);
}
}
}
}
jQuery.fn.extend({
mediabox:function(options){
var cfg=$.extend({},litySpip.config,options);
if(this===jQuery.fn){
var href=cfg.href||"";
litySpip.lityOpener(href,cfg,null);
return this;
}else{
if(cfg.rel){
this.attr('data-'+litySpip.nameSpace+'-group',cfg.rel);
}
else{
this.each(function(){
var rel=$(this).attr('rel');
if(rel){
$(this).attr('data-'+litySpip.nameSpace+'-group',rel);
}
});
}
litySpip.setEvents('opener');
this
.data('mediabox-options',cfg)
.addClass('lity-enabled');
(cfg.preload?this:this.filter('[data-'+litySpip.nameSpace+'-preload]')).each(function(){
litySpip.elementOpener($(this),{preloadOnly:true});
});
return this;
}
},
mediaboxClose:function(){
var $current=lity.current();
if($current){
$current.close();
return true;
}
return false;
}
});
var initConfig=function(){
var b=typeof(mediabox_settings)=='object'?mediabox_settings:{};
litySpip.nameSpace=b.ns?b.ns:'mediabox';
litySpip.strings.slideshowStart=b.str_ssStart;
litySpip.strings.slideshowStop=b.str_ssStop;
litySpip.strings.current=b.str_cur;
litySpip.strings.previous=b.str_prev;
litySpip.strings.next=b.str_next;
litySpip.strings.close=b.str_close;
litySpip.strings.loading=b.str_loading;
litySpip.strings.press_escape=b.str_petc;
litySpip.strings.dialog_title_def=b.str_dialTitDef;
litySpip.strings.dialog_title_med=b.str_dialTitMed;
litySpip.config.slideshowSpeed=(b.lity.slideshow_speed?b.lity.slideshow_speed:5000);
litySpip.config.defaultCaptionState=(b.lity.defaultCaptionState?b.lity.defaultCaptionState:'expanded');
var styles={
'container':'',
'content':'',
};
var max;
if(b.lity.minWidth){
max=(b.lity.maxWidth?b.lity.maxWidth.replace('%','vw'):'95vw');
styles.content+="min-width:min("+max+","+b.lity.minWidth.replace('%','vw')+');';
}
if(b.lity.maxWidth){
styles.container+="max-width:"+b.lity.maxWidth.replace('%','vw')+';';
}
if(b.lity.minHeight){
max=(b.lity.maxHeight?b.lity.maxHeight.replace('%','vw'):'95vh');
styles.content+="min-height:min("+max+","+b.lity.minHeight.replace('%','vh')+');';
}
if(b.lity.maxHeight){
styles.container+="max-height:"+b.lity.maxHeight.replace('%','vh')+';';
}
var insert='';
for(let key in styles){
if(styles[key]){
insert+='.box_mediabox .lity-'+key+'{'+styles[key]+'}';
}
}
if(b.lity.opacite){
insert+='.box_mediabox:before{opacity:'+b.lity.opacite+'}';
}
if(insert){
$('head').append($('<style type="text/css">'+insert+'</style>'));
}
$(document).on('lity:open',function(event,instance){
if(!instance.element().is('.lity-slideshow')){
jQuery('.lity-close',instance.element()).focus();
}
if(!litySpip.isTransition){
var callback=litySpip.callbacks.onOpen.pop();
if(callback){
callback(event,instance);
}
}
});
$(document).on('lity:ready',function(event,instance){
litySpip.adjustHeight(instance);
if(jQuery.spip){
jQuery.spip.triggerAjaxLoad(instance.element().get(0))
}
if(instance.element().addClass('lity-ready').is('.lity-slideshow')){
litySpip.slideshowStart(instance.element());
}
if(!litySpip.isTransition){
var callback=litySpip.callbacks.onShow.pop();
if(callback){
callback(event,instance);
}
}
else{
litySpip.isTransition.newOpened=true;
if(litySpip.isTransition.oldClosed){
litySpip.isTransition=false;
}
instance.content().trigger('lity:resize',[instance]);
}
var $next=instance.element().find('.lity-next');
if($next.length){
$next=litySpip.openerFromPrevNext($next);
if($next){
litySpip.elementOpener($next,{preloadOnly:true});
}
}
});
$(document).on('lity:close',function(event,instance){
if(!litySpip.isTransition){
if(litySpip.callbacks.onShow.length>litySpip.callbacks.onOpen.length){
litySpip.callbacks.onShow.pop();
}
var callback=litySpip.callbacks.onClose.pop();
if(callback){
callback(event,instance);
}
}
});
$(document).on('lity:remove',function(event,instance){
if(!litySpip.isTransition){
var focused=litySpip.focusedItem.pop();
if(focused){
try{
focused.focus();
}catch(e){
}
}
}
else{
litySpip.isTransition.oldClosed=true;
if(litySpip.isTransition.newOpened){
litySpip.isTransition=false;
}
}
});
$(document).on('lity:resize',function(event,instance){
litySpip.adjustHeight(instance);
});
}
initConfig();
})(jQuery);


/* ../plugins-dist/mediabox/javascript/spip.mediabox.js?1733220532 */
(function($){
$.mediabox
=function(options){
if(typeof(mediabox_autodetect_href)=='function'
&&options.href
&&!options.type){
options.type=mediabox_autodetect_href(options.href);
}
$.fn.mediabox(options);
};
$.modalboxload=$.modalbox=function(href,options){$.mediabox($.extend({href:href,overlayClose:true},options));};
$.modalboxclose=$.mediaboxClose=$.fn.mediaboxClose;
$.parseMediaboxOptions=function(nameSpace,opener){
var options={};
var data2options={
"width":"width",
"height":"height",
"min-width":"minWidth",
"min-height":"minHeight",
"max-width":"maxWidth",
"max-height":"maxHeight",
"caption-state":"defaultCaptionState",
"sidebar":"sideBar",
"class":"className"
};
var v;
for(var o in data2options){
v=($(opener).data(nameSpace+'-'+o)||'');
if(v){
options[data2options[o]]=v;
}
}
if(!options.length){
var eltclass=$(opener).prop('class');
if(eltclass){
if(eltclass.indexOf("boxWidth-")!==-1){
var w=eltclass.match(/boxWidth-([^\s'">]*)/);
w=w[1].replace(/pc/,'%');
options["width"]=w;
}
if(eltclass.indexOf("boxHeight-")!==-1){
var h=eltclass.match(/boxHeight-([^\s'">]*)/);
h=h[1].replace(/pc/,'%');
options["height"]=h;
}
if(eltclass.indexOf("boxIframe")!==-1){
options["type"]='iframe';
}
if(eltclass.indexOf("boxInline")!==-1){
options["type"]='inline';
}
}
}
data2options={"same-popin":"samePopin","type":"type"};
for(var o in data2options){
v=($(opener).data(nameSpace+'-'+o)||'');
if(v){
options[data2options[o]]=v;
}
}
return options;
}
})(jQuery);
var mediaboxInit=function(){
var b=$.extend({},mediabox_settings);
if(b.ns!=='box'){
$('[data-box-type]').each(function(i,e){
var $e=$(e);
var d=$e.attr('data-box-type');
$e.removeAttr('data-box-type').attr('data-'+b.ns+'-type',d);
});
}
if(b.auto_detect){
var $popins=$('[data-href-popin],[data-'+b.ns+'-type]'+(window.var_zajax_content?',[data-var_zajax],a.popin':''))
.add(b.sel_c)
.not(ajaxbloc_selecteur,'.ajaxbloc','.hasbox');
$popins.each(function(i,e){
var $e=$(e);
var url=$e.attr('href')||"./";
var popin=$e.attr('data-href-popin');
var type=$e.attr('data-'+b.ns+'-type')||'';
if(!popin){
var env=$e.attr('data-ajax-env');
if(env){
url=parametre_url(parametre_url(url,'var_ajax',1),'var_ajax_env',env)
$e.removeAttr('data-ajax-env');
type='ajax';
}
var za=$e.attr('data-var_zajax');
if(za!==undefined||$e.hasClass('popin')){
if(za==='content'&&window.var_zajax_content){
za=window.var_zajax_content;
}
url=parametre_url(url,'var_zajax',za||window.var_zajax_content);
$e.removeAttr('data-var_zajax');
type='ajax';
}
if((url!==$e.attr('href')||(!popin&&type))&&url!=="./"){
$e.attr('data-href-popin',url);
}
}
url=popin||url;
if(!type){
var attrs=$e.data();
var types=['inline','html','iframe','image','ajax'];
types.some(function(e){
var k=b.ns+e.charAt(0).toUpperCase()+e.slice(1);
if(attrs[k]){
type=e;
return true;
}
});
}
if(!type&&typeof(mediabox_autodetect_href)=='function'){
type=mediabox_autodetect_href(url);
}
if(!type||$e.hasClass('boxIframe')){
type="iframe";
$e.removeClass('boxIframe');
}
$e.attr('data-'+b.ns+'-type',type);
});
}
if(b.sel_g){
var $items=$();
$(b.sel_g).each(function(i,e){
$items=$items.add(
$(this).is('a[type^=\'image\']')
?$(this)
:$(this).find('a[type^=\'image\']')
);
});
$items
.not('.hasbox')
.removeAttr('onclick')
.mediabox({rel:'galerieauto',slideshow:true,slideshowAuto:false,type:'image'})
.addClass('hasbox');
}
if(b.tt_img){
$('a[type^="image"],a[href$=".png"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".svg"],a[href$=".webp"]')
.not('.hasbox')
.removeAttr('onclick')
.mediabox({type:'image'})
.addClass('hasbox')
;
}
$(b.sel_c)
.not('.hasbox')
.mediabox()
.addClass('hasbox')
;
$('[data-href-popin]',this)
.not('.hasbox')
.click(function(){if($.modalbox)$.modalbox($(this).attr('data-href-popin'),$.parseMediaboxOptions(b.ns,this));return false;})
.addClass('hasbox');
};
(function($){
if(typeof onAjaxLoad=='function')onAjaxLoad(mediaboxInit);
$(mediaboxInit);
})(jQuery);
function mediabox_autodetect_href(href,options){
options=$.extend({
breakMode:true,
tests:{
image:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,
inline:/^[#.]\w/,
html:/^\s*<[\w!][^<]*>/,
ajax:/((\?|&(amp;)?)var_z?ajax=|cache-ajaxload\/)/i,
iframe:/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,}))\.?)(?::\d{2,5})?(?:[/?#]\S*)?$/i,
},
},options);
var matched=options.breakMode?false:[];
$.each(options.tests,function(type,regex){
if(href.match(regex)&&!href.match('/File:[^/]+(\\#|[?]|$)')){
if(options.breakMode){
matched=type;
return false;
}else{
matched.push(type);
}
}
});
return matched;
};


/* ../plugins-dist/porte_plume/javascript/jquery.markitup_pour_spip.js?1733220532 */

;(function($){
$.fn.markItUp=function(settings,extraSettings){
var method,params,options,ctrlKey,shiftKey,altKey;ctrlKey=shiftKey=altKey=false;
markitup_prompt=false;
if(typeof settings=='string'){
method=settings;
params=extraSettings;
}
options={id:'',
nameSpace:'',
root:'',
lang:'',
previewHandler:false,
previewInWindow:'',
previewInElement:'',
previewAutoRefresh:true,
previewPosition:'after',
previewTemplatePath:'~/templates/preview.html',
previewParser:false,
previewParserPath:'',
previewParserVar:'data',
previewParserAjaxType:'POST',
resizeHandle:true,
beforeInsert:'',
afterInsert:'',
onEnter:{},
onShiftEnter:{},
onCtrlEnter:{},
onTab:{},
markupSet:[{}]
};
$.extend(options,settings,extraSettings);
if(!options.root){
$('script').each(function(a,tag){
var miuScript=$(tag).get(0).src.match(/(.*)jquery\.markitup(\.pack)?\.js$/);
if(miuScript!==null){
options.root=miuScript[1];
}
});
}
var uaMatch=function(ua){
ua=ua.toLowerCase();
var match=/(chrome)[ \/]([\w.]+)/.exec(ua)||/(webkit)[ \/]([\w.]+)/.exec(ua)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua)||/(msie) ([\w.]+)/.exec(ua)||
ua.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua)||
[];
return{
browser:match[1]||"",
version:match[2]||"0"
};
};
var matched=uaMatch(navigator.userAgent);
var browser={};
if(matched.browser){
browser[matched.browser]=true;
browser.version=matched.version;
}
if(browser.chrome){
browser.webkit=true;
}else if(browser.webkit){
browser.safari=true;
}
return this.each(function(){
var $$,textarea,levels,scrollPosition,caretPosition,
clicked,hash,header,footer,previewWindow,template,iFrame,abort,
before,after;
$$=$(this);
textarea=this;
levels=[];
abort=false;
scrollPosition=caretPosition=0;
caretOffset=-1;
options.previewParserPath=localize(options.previewParserPath);
options.previewTemplatePath=localize(options.previewTemplatePath);
if(method){
switch(method){
case'remove':
remove();
break;
case'insert':
markup(params);
break;
default:
$.error('Method '+method+' does not exist on jQuery.markItUp');
}
return;
}
function localize(data,inText){
if(inText){
return data.replace(/("|')~\//g,"$1"+options.root);
}
return data.replace(/^~\//,options.root);
}
function init(){
id='';nameSpace='';
if(options.id){
id='id="'+options.id+'"';
}else if($$.attr("id")){
id='id="markItUp'+($$.attr("id").substr(0,1).toUpperCase())+($$.attr("id").substr(1))+'"';
}
if(options.nameSpace){
nameSpace='class="'+options.nameSpace+'"';
}
currentScrollPosition=$$.scrollTop();
$$.wrap('<div '+nameSpace+'></div>');
$$.wrap('<div '+id+' class="markItUp"></div>');
$$.wrap('<div class="markItUpContainer"></div>');
$$.addClass("markItUpEditor");
$$.scrollTop(currentScrollPosition);
header=$('<div class="markItUpHeader"></div>').insertBefore($$);
$(dropMenus(options.markupSet)).appendTo(header);
$(header).find("li.markItUpDropMenu ul:empty").parent().remove();
footer=$('<div class="markItUpFooter"></div>').insertAfter($$);
if(options.resizeHandle===true&&browser.safari!==true){
resizeHandle=$('<div class="markItUpResizeHandle"></div>')
.insertAfter($$)
.on("mousedown.markItUp",function(e){
var h=$$.height(),y=e.clientY,mouseMove,mouseUp;
mouseMove=function(e){
$$.css("height",Math.max(20,e.clientY+h-y)+"px");
return false;
};
mouseUp=function(e){
$("html").off("mousemove.markItUp",mouseMove).off("mouseup.markItUp",mouseUp);
return false;
};
$("html").on("mousemove.markItUp",mouseMove).on("mouseup.markItUp",mouseUp);
});
footer.append(resizeHandle);
}
$$.on('keydown.markItUp',keyPressed).on('keyup',keyPressed);
$$.on("insertion.markItUp",function(e,settings){
if(settings.target!==false){
get();
}
if(textarea===$.markItUp.focused){
markup(settings);
}
});
$$.on('focus.markItUp',function(){
$.markItUp.focused=this;
});
if(options.previewInElement){
refreshPreview();
}
}
function dropMenus(markupSet){
var ul=$('<ul></ul>'),i=0;
var lang=($$.attr('lang')||options.lang);
$('li:hover > ul',ul).css('display','block');
$.each(markupSet,function(){
var button=this,t='',title,li,j;
if((!lang||!button.lang||($.inArray(lang,button.lang)!=-1))
&&(!button.lang_not||($.inArray(lang,button.lang_not)==-1))){
button.title?title=(button.key)?(button.title||'')+' [Ctrl+'+button.key+']':(button.title||''):title=(button.key)?(button.name||'')+' [Ctrl+'+button.key+']':(button.name||'');
key=(button.key)?'accesskey="'+button.key+'"':'';
if(button.separator){
li=$('<li class="markItUpSeparator">'+(button.separator||'')+'</li>').appendTo(ul);
}else{
i++;
for(j=levels.length-1;j>=0;j--){
t+=levels[j]+"-";
}
li=$('<li class="markItUpButton markItUpButton'+t+(i)+' '+(button.className||'')+'"><a href="#" '+key+' title="'+title+'"><em>'+(button.name||'')+'</em></a></li>')
.on("contextmenu.markItUp",function(){
return false;
}).on('click.markItUp',function(e){
e.preventDefault();
}).on("focusin.markItUp",function(){
setTimeout(function(){
$$.focus();
},0);
}).on('mouseup',function(e){
if(button.call){
eval(button.call)(e);
}
setTimeout(function(){markup(button)},1);
return false;
}).on('mouseenter.markItUp',function(){
$('> a',this).addClass('active');
$('> ul',this).addClass('expanded');
$(document).one('click',function(){
$('ul a',header).removeClass('active');
$('ul ul',header).removeClass('expanded');
}
);
}).on('mouseleave.markItUp',function(){
$('> a',this).removeClass('active');
$('> ul',this).removeClass('expanded');
}).appendTo(ul);
if(button.dropMenu){
levels.push(i);
$(li).addClass('markItUpDropMenu').append(dropMenus(button.dropMenu));
}
}
}
});
levels.pop();
return ul;
}
function magicMarkups(string){
if(string){
string=string.toString();
string=string.replace(/\(\!\(([\s\S]*?)\)\!\)/g,
function(x,a){
var b=a.split('|!|');
if(altKey===true){
return(b[1]!==undefined)?b[1]:b[0];
}else{
return(b[1]===undefined)?"":b[0];
}
}
);
string=string.replace(/\[\!\[([\s\S]*?)\]\!\]/g,
function(x,a){
var b=a.split(':!:');
if(abort===true){
return false;
}
markitup_prompt=true;
value=prompt(b[0],(b[1])?b[1]:'');
if(value===null){
abort=true;
}
setTimeout(function(){markitup_prompt=false;},500);
return value;
}
);
return string;
}
return"";
}
function prepare(action){
if($.isFunction(action)){
action=action(hash);
}
return magicMarkups(action);
}
function build(string){
var openWith=prepare(clicked.openWith);
var placeHolder=prepare(clicked.placeHolder);
var replaceWith=prepare(clicked.replaceWith);
var closeWith=prepare(clicked.closeWith);
var openBlockWith=prepare(clicked.openBlockWith);
var closeBlockWith=prepare(clicked.closeBlockWith);
var multiline=clicked.multiline;
if(replaceWith!==""){
block=openWith+replaceWith+closeWith;
}else if(selection===''&&placeHolder!==''){
block=openWith+placeHolder+closeWith;
}else if(multiline===true){
string=string||selection;
var lines=[string],blocks=[];
if(multiline===true){
lines=string.split(/\r?\n/);
}
for(var l=0;l<lines.length;l++){
line=lines[l];
var trailingSpaces;
if(trailingSpaces=line.match(/ *$/)){
blocks.push(openWith+line.replace(/ *$/g,'')+closeWith+trailingSpaces);
}else{
blocks.push(openWith+line+closeWith);
}
}
block=blocks.join("\n");
}else{
block=openWith+(string||selection)+closeWith;
}
block=openBlockWith+block+closeBlockWith;
return{block:block,
openBlockWith:openBlockWith,
openWith:openWith,
replaceWith:replaceWith,
placeHolder:placeHolder,
closeWith:closeWith,
closeBlockWith:closeBlockWith
};
}
function selectWord(){
selectionBeforeAfter(/\s|[.,;:!¡?¿()]/);
selectionSave();
}
function selectLine(){
selectionBeforeAfter(/\r?\n/);
selectionSave();
}
function selectionRemoveLast(pattern){
if(!pattern)pattern=/\s/;
last=selection[selection.length-1];
if(last&&last.match(pattern)){
set(caretPosition,selection.length-1);
get();
$.extend(hash,{caretPosition:caretPosition,scrollPosition:scrollPosition});
}
}
function selectionBeforeAfter(pattern){
if(!pattern)pattern=/\s/;
sautAvantIE=sautApresIE=0;
if(browser.msie){
lenSelection=selection.length-fixIeBug(selection);
if(caretPosition){
set(caretPosition-1,2);
sautAvantIE=fixIeBug(document.selection.createRange().text);
}
set(caretPosition,2);
sautApresIE=fixIeBug(document.selection.createRange().text);
set(0,caretPosition);
before=document.selection.createRange().text;
set(caretPosition+lenSelection,textarea.value.length);
after=document.selection.createRange().text;
set(caretPosition,lenSelection);
selection=document.selection.createRange().text;
}else{
before=textarea.value.substring(0,caretPosition);
after=textarea.value.substring(caretPosition+selection.length-fixIeBug(selection));
}
before=before.split(pattern);
after=after.split(pattern);
if(sautAvantIE)before.push("");
if(sautApresIE)after.unshift("");
}
function selectionSave(){
nb_before=before?before[before.length-1].length:0;
nb_after=after?after[0].length:0;
nb=nb_before+selection.length+nb_after-fixIeBug(selection);
caretPosition=caretPosition-nb_before;
set(caretPosition,nb);
get();
$.extend(hash,{selection:selection,caretPosition:caretPosition,scrollPosition:scrollPosition});
}
function markup(button){
var len,j,n,i;
hash=clicked=button;
get();
$.extend(hash,{line:"",
root:options.root,
textarea:textarea,
selection:(selection||''),
caretPosition:caretPosition,
ctrlKey:ctrlKey,
shiftKey:shiftKey,
altKey:altKey
}
);
if(button.selectionType){
if(button.selectionType=="word"){
if(!selection){
selectWord();
}else{
selectionRemoveLast(/\s/);
}
}
if(button.selectionType=="line"){
selectLine();
}
if(button.selectionType=="return"){
if(!browser.msie){
selectionBeforeAfter(/\r?\n/);
before_last=before[before.length-1];
after='';
if(r=before_last.match(/^-([*#]+) ?(.*)$/)){
if(r[2]){
button.replaceWith="\n-"+r[1]+' ';
before_last='';
}else{
button.replaceWith="\n";
}
}else{
before_last='';
button.replaceWith="\n";
}
before[before.length-1]=before_last;
selectionSave();
}
}
}
prepare(options.beforeInsert);
prepare(clicked.beforeInsert);
if((ctrlKey===true&&shiftKey===true)||button.multiline===true){
prepare(clicked.beforeMultiInsert);
}
$.extend(hash,{line:1});
if((ctrlKey===true&&shiftKey===true)||button.forceMultiline===true){
lines=selection.split(/\r?\n/);
for(j=0,n=lines.length,i=0;i<n;i++){
if(n==1||$.trim(lines[i])!==''){
$.extend(hash,{line:++j,selection:lines[i]});
lines[i]=build(lines[i]).block;
}else{
lines[i]="";
}
}
string={block:lines.join('\n')};
start=caretPosition;
len=string.block.length+((browser.opera)?n-1:0);
}else if(ctrlKey===true){
string=build(selection);
start=caretPosition+string.openWith.length;
len=string.block.length-string.openWith.length-string.closeWith.length;
len=len-(string.block.match(/ $/)?1:0);
len-=fixIeBug(string.block);
}else if(shiftKey===true){
string=build(selection);
start=caretPosition;
len=string.block.length;
len-=fixIeBug(string.block);
}else{
string=build(selection);
start=caretPosition+string.block.length;
len=0;
start-=fixIeBug(string.block);
}
if((selection===''&&string.replaceWith==='')){
caretOffset+=fixOperaBug(string.block);
start=caretPosition+string.openBlockWith.length+string.openWith.length;
len=string.block.length-string.openBlockWith.length-string.openWith.length-string.closeWith.length-string.closeBlockWith.length;
caretOffset=$$.val().substring(caretPosition,$$.val().length).length;
caretOffset-=fixOperaBug($$.val().substring(0,caretPosition));
}
$.extend(hash,{caretPosition:caretPosition,scrollPosition:scrollPosition});
if(string.block!==selection&&abort===false){
insert(string.block);
set(start,len);
}else{
caretOffset=-1;
}
get();
$.extend(hash,{line:'',selection:selection});
if((ctrlKey===true&&shiftKey===true)||button.multiline===true){
prepare(clicked.afterMultiInsert);
}
prepare(clicked.afterInsert);
prepare(options.afterInsert);
if(previewWindow&&options.previewAutoRefresh){
refreshPreview();
}
textarea.dispatchEvent(new Event('input'));
shiftKey=altKey=ctrlKey=abort=false;
}
function fixOperaBug(string){
if(browser.opera){
return string.length-string.replace(/\n*/g,'').length;
}
return 0;
}
function fixIeBug(string){
if(browser.msie){
return string.length-string.replace(/\r*/g,'').length;
}
return 0;
}
function insert(block){
if(document.selection){
var newSelection=document.selection.createRange();
newSelection.text=block;
}else{
textarea.value=textarea.value.substring(0,caretPosition)+block+textarea.value.substring(caretPosition+selection.length,textarea.value.length);
}
}
function set(start,len){
if(textarea.createTextRange){
if(browser.opera&&browser.version>=9.5&&len==0){
return false;
}
range=textarea.createTextRange();
range.collapse(true);
range.moveStart('character',start);
range.moveEnd('character',len);
range.select();
}else if(textarea.setSelectionRange){
textarea.setSelectionRange(start,start+len);
}
textarea.scrollTop=scrollPosition;
textarea.focus();
}
function get(){
textarea.focus();
scrollPosition=textarea.scrollTop;
if(document.selection){
selection=document.selection.createRange().text;
if(browser.msie){
var range=document.selection.createRange(),rangeCopy=range.duplicate();
rangeCopy.moveToElementText(textarea);
caretPosition=-1;
while(rangeCopy.inRange(range)){
rangeCopy.moveStart('character');
caretPosition++;
}
}else{
caretPosition=textarea.selectionStart;
}
}else{
caretPosition=textarea.selectionStart;
selection=textarea.value.substring(caretPosition,textarea.selectionEnd);
}
return selection;
}
function preview(){
if(typeof options.previewHandler==='function'){
previewWindow=true;
}else if(options.previewInElement){
previewWindow=$(options.previewInElement);
}else if(!previewWindow||previewWindow.closed){
if(options.previewInWindow){
previewWindow=window.open('','preview',options.previewInWindow);
$(window).unload(function(){
previewWindow.close();
});
}else{
iFrame=$('<iframe class="markItUpPreviewFrame"></iframe>');
if(options.previewPosition=='after'){
iFrame.insertAfter(footer);
}else{
iFrame.insertBefore(header);
}
previewWindow=iFrame[iFrame.length-1].contentWindow||frame[iFrame.length-1];
}
}else if(altKey===true){
if(iFrame){
iFrame.remove();
}else{
previewWindow.close();
}
previewWindow=iFrame=false;
}
if(!options.previewAutoRefresh){
refreshPreview();
}
if(options.previewInWindow){
previewWindow.focus();
}
}
function refreshPreview(){
renderPreview();
}
function renderPreview(){
var phtml;
var parsedData=$$.val();
if(options.previewParser&&typeof options.previewParser==='function'){
parsedData=options.previewParser(parsedData);
}
if(options.previewHandler&&typeof options.previewHandler==='function'){
options.previewHandler(parsedData);
}else if(options.previewParserPath!==''){
$.ajax({
type:options.previewParserAjaxType,
dataType:'text',
global:false,
url:options.previewParserPath,
data:options.previewParserVar+'='+encodeURIComponent(parsedData),
success:function(data){
writeInPreview(localize(data,1));
}
});
}else{
if(!template){
$.ajax({
url:options.previewTemplatePath,
dataType:'text',
global:false,
success:function(data){
writeInPreview(localize(data,1).replace(/<!-- content -->/g,parsedData));
}
});
}
}
return false;
}
function writeInPreview(data){
if(options.previewInElement){
$(options.previewInElement).html(data);
}else if(previewWindow&&previewWindow.document){
try{
sp=previewWindow.document.documentElement.scrollTop
}catch(e){
sp=0;
}
previewWindow.document.open();
previewWindow.document.write(data);
previewWindow.document.close();
previewWindow.document.documentElement.scrollTop=sp;
}
}
function keyPressed(e){
shiftKey=e.shiftKey;
altKey=e.altKey;
ctrlKey=(!(e.altKey&&e.ctrlKey))?(e.ctrlKey||e.metaKey):false;
if(e.type==='keydown'){
if(ctrlKey===true){
li=$('a[accesskey="'+((e.keyCode==13)?'\\n':String.fromCharCode(e.keyCode))+'"]',header).parent('li');
if(li.length!==0){
ctrlKey=false;
setTimeout(function(){
li.triggerHandler('mouseup');
},1);
return false;
}
}
if(!browser.opera){
if(e.keyCode===13||e.keyCode===10){
if(ctrlKey===true){
ctrlKey=false;
markup(options.onCtrlEnter);
if(!options.onCtrlEnter.keepDefault){
textarea.dispatchEvent(new Event('input'));
}
return options.onCtrlEnter.keepDefault;
}else if(shiftKey===true){
shiftKey=false;
markup(options.onShiftEnter);
if(!options.onShiftEnter.keepDefault){
textarea.dispatchEvent(new Event('input'));
}
return options.onShiftEnter.keepDefault;
}else{
markup(options.onEnter);
if(!options.onEnter.keepDefault){
textarea.dispatchEvent(new Event('input'));
}
return options.onEnter.keepDefault;
}
}
if(e.keyCode===9){
if(shiftKey==true||ctrlKey==true||altKey==true){
return false;
}
if(caretOffset!==-1){
get();
caretOffset=$$.val().length-caretOffset;
set(caretOffset,0);
caretOffset=-1;
return false;
}else{
markup(options.onTab);
return options.onTab.keepDefault;
}
}
}
}
}
function remove(){
$$.off(".markItUp").removeClass('markItUpEditor');
$$.parent('div').parent('div.markItUp').parent('div').replaceWith($$);
var relativeRef=$$.parent('div').parent('div.markItUp').parent('div');
if(relativeRef.length){
relativeRef.replaceWith($$);
}
$$.data('markItUp',null);
}
init();
});
};
$.fn.markItUpRemove=function(){
return this.each(function(){
$(this).markItUp('remove');
}
);
};
$.markItUp=function(settings){
var options={target:false};
$.extend(options,settings);
if(options.target){
return $(options.target).each(function(){
$(this).focus();
$(this).trigger('insertion',[options]);
});
}else{
$('textarea').trigger('insertion',[options]);
}
};
})(jQuery);


/* ../plugins-dist/porte_plume/javascript/jquery.previsu_spip.js?1733220532 */
;(function($){
$.fn.previsu_spip=function(settings){
var options;
options={
previewParserPath:'',
previewParserVar:'data',
textEditer:'Editer',
textVoir:'Voir',
textFullScreen:'Plein écran'
};
$.extend(options,settings);
return this.each(function(){
var $$,textarea,tabs,preview;
$$=$(this);
textarea=this;
function init(){
$$.addClass("pp_previsualisation");
if(!$$.parent().has('.markItUpContainer').length){
$$.barre_outils('vide');
}
var mark=$$.parent();
tabs=$('<div class="markItUpTabs"></div>').prependTo(mark);
$(tabs).append(
'<a href="#fullscreen" class="fullscreen">'+options.textFullScreen+'</a>'+
'<a href="#previsuVoir" class="previsuVoir">'+options.textVoir+'</a>'+
'<a href="#previsuEditer" class="previsuEditer on">'+options.textEditer+'</a>'
);
preview=$('<div class="markItUpPreview"></div>').insertAfter(mark.find('.markItUpHeader'));
preview.hide();
var is_full_screen=false;
var objet=mark.parents('.formulaire_spip')[0].className.match(/formulaire_editer_(\w+)/);
objet=(objet?objet[1]:'');
var champ=mark.parents('.editer')[0].className.match(/editer_(\w+)/);
champ=(champ?champ[1].toUpperCase():'');
var textarea=mark.find('textarea.pp_previsualisation');
var preview=mark.find('.markItUpPreview');
var dir=textarea.attr('dir');
if(dir){
preview.attr('dir',dir);
}
tabs.find('.fullscreen').click(function(){
if(!mark.is('.fullscreen')){
textarea.data('height-origin',textarea.css('height'));
}
mark.toggleClass('fullscreen');
if(mark.is('.fullscreen')){
$('body').addClass('markitup-fullscreen');
is_full_screen=true;
mark.find('.markItUpHeader a').show();
if(!mark.is('.livepreview')){
var original_texte="";
function refresh_preview(){
var texte=textarea.val();
if(original_texte==texte){
return;
}
renderPreview(preview.addClass('ajaxLoad'),texte,champ,objet);
original_texte=texte;
}
var timerPreview=null;
mark.addClass('livepreview').find('.markItUpEditor').on('keyup click change focus refreshpreview',function(e){
if(is_full_screen){
if(timerPreview)clearTimeout(timerPreview);
timerPreview=setTimeout(refresh_preview,500);
}
});
$(window).on('keyup',function(e){
if(is_full_screen){
if(e.type=='keyup'&&e.keyCode==27&&!markitup_prompt){
mark.removeClass('fullscreen');
textarea.css('height',textarea.data('height-origin'));
is_full_screen=false;
}
}
});
}
mark.find('.markItUpEditor').trigger('refreshpreview');
}
else{
$('body').removeClass('markitup-fullscreen');
textarea.css('height',textarea.data('height-origin'));
if($(this).next().hasClass('on')){
mark.find('.markItUpHeader a').hide();
}
is_full_screen=false;
}
return false;
});
tabs.find('.previsuVoir').click(function(){
preview.height(
mark.find('.markItUpEditor').height()
+mark.find('.markItUpFooter').height()
);
mark.find('.markItUpHeader a,.markItUpEditor,.markItUpFooter').hide();
$(this).addClass('on').next().removeClass('on');
renderPreview(
preview.show().addClass('ajaxLoad'),
mark.find('textarea.pp_previsualisation').val(),
champ,
objet,
false
);
return false;
});
tabs.find('.previsuEditer').click(function(){
mark.find('.markItUpPreview').hide();
mark.find('.markItUpHeader a,.markItUpEditor,.markItUpFooter').show();
$(this).addClass('on').prev().removeClass('on');
return false;
});
}
function renderPreview(node,val,champ,objet,async){
if(options.previewParserPath!==''){
$.ajax({
type:'POST',
async:typeof(async)=="undefined"?true:async,
url:options.previewParserPath,
data:'champ='+champ
+'&objet='+objet
+'&'+options.previewParserVar+'='+encodeURIComponent(val),
success:function(data){
node.html(data).removeClass('ajaxLoad');
$("a",node).attr("target","blank");
$(":input",node).attr("disabled","disabled");
}
});
}
}
init();
});
};
})(jQuery);


/* ../local/cache-js/jsdyn-javascript_porte_plume_start_js-9eb29a83.js?1737975823 */

barre_outils_edition={
"nameSpace":"edition",
"previewAutoRefresh":false,
"onEnter":{
"keepDefault":false,
"selectionType":"return",
"replaceWith":"\n"
},
"onShiftEnter":{
"keepDefault":false,
"replaceWith":"\n_ "
},
"onCtrlEnter":{
"keepDefault":false,
"replaceWith":"\n\n"
},
"markupSet":[
{
"name":"Turn into a {{{subheading}}}",
"key":"H",
"className":"outil_header1",
"openWith":"\n{{{",
"closeWith":"}}}\n",
"selectionType":"line"
},
{
"name":"{{Bold}}",
"key":"B",
"className":"outil_bold",
"replaceWith":function(h){return espace_si_accolade(h,'{{','}}');},
"selectionType":"word"
},
{
"name":"{Italic}",
"key":"I",
"className":"outil_italic",
"replaceWith":function(h){return espace_si_accolade(h,'{','}');},
"selectionType":"word"
},
{
"name":"Set list",
"className":"outil_liste_ul separateur_avant",
"replaceWith":function(h){return outil_liste(h,'*');},
"selectionType":"line",
"forceMultiline":true,
"dropMenu":[
{
"id":"liste_ol",
"name":"Set numbered list",
"className":"outil_liste_ol",
"replaceWith":function(h){return outil_liste(h,'#');},
"display":true,
"selectionType":"line",
"forceMultiline":true
},
{
"id":"desindenter",
"name":"Unindent a line",
"className":"outil_desindenter",
"replaceWith":function(h){return outil_desindenter(h);},
"display":true,
"selectionType":"line",
"forceMultiline":true
},
{
"id":"indenter",
"name":"Indent a line",
"className":"outil_indenter",
"replaceWith":function(h){return outil_indenter(h);},
"display":true,
"selectionType":"line",
"forceMultiline":true
}
]
},
{
"name":"Turn into a [hyperlink->http:\/\/...]",
"key":"L",
"className":"outil_link separateur separateur_apres sepLink",
"openWith":"[",
"closeWith":"->[![Please enter the target of your hyperlink (you may give an internet URL in the form http:\/\/www.mysite.com or else simply the number of an article on this site).]!]]"
},
{
"name":"Turn into a [[Footnote]]",
"className":"outil_notes separateur_avant",
"openWith":"[[",
"closeWith":"]]",
"selectionType":"word"
},
{
"name":"<quote>Quote a message<\/quote>",
"key":"Q",
"className":"outil_quote separateur separateur_apres sepGuillemets",
"openWith":"\n<quote>",
"closeWith":"<\/quote>\n",
"selectionType":"word",
"dropMenu":[
{
"id":"barre_poesie",
"name":"Edit as a <poesie>poetry<\/poesie>",
"className":"outil_poesie",
"openWith":"\n<poesie>",
"closeWith":"<\/poesie>\n",
"display":true,
"selectionType":"line"
}
]
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets",
"openWith":"«",
"closeWith":"»",
"lang":[
"fr",
"eo",
"cpf",
"ar",
"es"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_simples",
"openWith":"“",
"closeWith":"”",
"display":true,
"lang":[
"fr",
"eo",
"cpf",
"ar",
"es"
],
"selectionType":"word"
}
]
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets_de",
"openWith":"„",
"closeWith":"“",
"lang":[
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_de_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_de_simples",
"openWith":"&sbquo;",
"closeWith":"‘",
"display":true,
"lang":[
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word"
}
]
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets_simples separateur_avant",
"openWith":"“",
"closeWith":"”",
"lang_not":[
"fr",
"eo",
"cpf",
"ar",
"es",
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_autres_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_uniques",
"openWith":"‘",
"closeWith":"’",
"display":true,
"lang_not":[
"fr",
"eo",
"cpf",
"ar",
"es",
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word"
}
]
},
{
"name":"Insert special characters",
"className":"outil_caracteres separateur separateur_apres sepCaracteres separateur_avant",
"dropMenu":[
{
"id":"A_grave",
"name":"Insert \u00c0",
"className":"outil_a_maj_grave",
"replaceWith":"À",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"E_aigu",
"name":"Insert \u00c9",
"className":"outil_e_maj_aigu",
"replaceWith":"É",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"E_grave",
"name":"Insert \u00c8",
"className":"outil_e_maj_grave",
"replaceWith":"È",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"aelig",
"name":"Insert \u00e6",
"className":"outil_aelig",
"replaceWith":"æ",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"AElig",
"name":"Insert \u00c6",
"className":"outil_aelig_maj",
"replaceWith":"Æ",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"oe",
"name":"Insert \u0153",
"className":"outil_oe",
"replaceWith":"œ",
"display":true,
"lang":[
"fr"
]
},
{
"id":"OE",
"name":"Insert \u0152",
"className":"outil_oe_maj",
"replaceWith":"Œ",
"display":true,
"lang":[
"fr"
]
},
{
"id":"Ccedil",
"name":"Insert \u00c7",
"className":"outil_ccedil_maj",
"replaceWith":"Ç",
"display":true,
"lang":[
"fr",
"eo",
"cpf"
]
},
{
"id":"uppercase",
"name":"Convert to upper case",
"className":"outil_uppercase",
"replaceWith":function(markitup){return markitup.selection.toUpperCase()},
"display":true,
"lang":[
"fr",
"en"
]
},
{
"id":"lowercase",
"name":"Convert to lower case",
"className":"outil_lowercase",
"replaceWith":function(markitup){return markitup.selection.toLowerCase()},
"display":true,
"lang":[
"fr",
"en"
]
}
]
},
{
"name":"Insert a computer code (`)",
"className":"outil_code separateur separateur_apres sepCode",
"openWith":"`",
"closeWith":"`",
"dropMenu":[
{
"id":"cadre",
"name":"Insert a preformatted code (```)",
"className":"outil_cadre",
"openWith":"```\n",
"closeWith":"\n```",
"display":true
}
]
}
]
}
function outil_liste(h,c){
if((s=h.selection)&&(r=s.match(/^-([*#]+) (.*)$/))){
r[1]=r[1].replace(/[#*]/g,c);
s='-'+r[1]+' '+r[2];
}else{
s='-'+c+' '+s;
}
return s;
}
function outil_indenter(h){
if(s=h.selection){
if(s.substr(0,2)=='-*'){
s='-**'+s.substr(2);
}else if(s.substr(0,2)=='-#'){
s='-##'+s.substr(2);
}else{
s='-* '+s;
}
}
return s;
}
function outil_desindenter(h){
if(s=h.selection){
if(s.substr(0,3)=='-**'){
s='-*'+s.substr(3);
}else if(s.substr(0,3)=='-* '){
s=s.substr(3);
}else if(s.substr(0,3)=='-##'){
s='-#'+s.substr(3);
}else if(s.substr(0,3)=='-# '){
s=s.substr(3);
}
}
return s;
}
function espace_si_accolade(h,openWith,closeWith){
if(s=h.selection){
if(s.charAt(0)=='{'){
return openWith+' '+s+' '+closeWith;
}
else if(c=h.textarea.selectionStart){
if(h.textarea.value.charAt(c-1)=='{'){
return' '+openWith+s+closeWith+' ';
}
}
}
return openWith+s+closeWith;
}
barre_outils_forum={
"nameSpace":"forum",
"previewAutoRefresh":false,
"onEnter":{
"keepDefault":false,
"selectionType":"return",
"replaceWith":"\n"
},
"onShiftEnter":{
"keepDefault":false,
"replaceWith":"\n_ "
},
"onCtrlEnter":{
"keepDefault":false,
"replaceWith":"\n\n"
},
"markupSet":[
{
"name":"{{Bold}}",
"key":"B",
"className":"outil_bold",
"replaceWith":function(h){return espace_si_accolade(h,'{{','}}');},
"selectionType":"word"
},
{
"name":"{Italic}",
"key":"I",
"className":"outil_italic separateur_avant",
"replaceWith":function(h){return espace_si_accolade(h,'{','}');},
"selectionType":"word"
},
{
"name":"Turn into a [hyperlink->http:\/\/...]",
"key":"L",
"className":"outil_link separateur separateur_apres sepLink separateur_avant",
"openWith":"[",
"closeWith":"->[![Please enter the target of your hyperlink (you may give an internet URL in the form http:\/\/www.mysite.com or else simply the number of an article on this site).]!]]"
},
{
"name":"<quote>Quote a message<\/quote>",
"key":"Q",
"className":"outil_quote separateur separateur_apres sepGuillemets",
"openWith":"\n<quote>",
"closeWith":"<\/quote>\n",
"selectionType":"word"
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets",
"openWith":"«",
"closeWith":"»",
"lang":[
"fr",
"eo",
"cpf",
"ar",
"es"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_simples",
"openWith":"“",
"closeWith":"”",
"display":true,
"lang":[
"fr",
"eo",
"cpf",
"ar",
"es"
],
"selectionType":"word"
}
]
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets_de",
"openWith":"„",
"closeWith":"“",
"lang":[
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_de_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_de_simples",
"openWith":"&sbquo;",
"closeWith":"‘",
"display":true,
"lang":[
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word"
}
]
},
{
"name":"Place between \u00abdouble quotes\u00ab",
"className":"outil_guillemets_simples separateur_avant",
"openWith":"“",
"closeWith":"”",
"lang_not":[
"fr",
"eo",
"cpf",
"ar",
"es",
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word",
"dropMenu":[
{
"id":"guillemets_autres_simples",
"name":"Place between \u201csingle quotes\u201c",
"className":"outil_guillemets_uniques",
"openWith":"‘",
"closeWith":"’",
"display":true,
"lang_not":[
"fr",
"eo",
"cpf",
"ar",
"es",
"bg",
"de",
"pl",
"hr",
"src"
],
"selectionType":"word"
}
]
}
]
}
function outil_liste(h,c){
if((s=h.selection)&&(r=s.match(/^-([*#]+) (.*)$/))){
r[1]=r[1].replace(/[#*]/g,c);
s='-'+r[1]+' '+r[2];
}else{
s='-'+c+' '+s;
}
return s;
}
function outil_indenter(h){
if(s=h.selection){
if(s.substr(0,2)=='-*'){
s='-**'+s.substr(2);
}else if(s.substr(0,2)=='-#'){
s='-##'+s.substr(2);
}else{
s='-* '+s;
}
}
return s;
}
function outil_desindenter(h){
if(s=h.selection){
if(s.substr(0,3)=='-**'){
s='-*'+s.substr(3);
}else if(s.substr(0,3)=='-* '){
s=s.substr(3);
}else if(s.substr(0,3)=='-##'){
s='-#'+s.substr(3);
}else if(s.substr(0,3)=='-# '){
s=s.substr(3);
}
}
return s;
}
function espace_si_accolade(h,openWith,closeWith){
if(s=h.selection){
if(s.charAt(0)=='{'){
return openWith+' '+s+' '+closeWith;
}
else if(c=h.textarea.selectionStart){
if(h.textarea.value.charAt(c-1)=='{'){
return' '+openWith+s+closeWith+' ';
}
}
}
return openWith+s+closeWith;
}
barre_outils_vide={
"nameSpace":"vide",
"previewAutoRefresh":false,
"markupSet":[]
}
;(function($){
$.fn.barre_outils=function(nom,settings){
options={
lang:'en'
};
$.extend(options,settings);
return $(this)
.not('.markItUpEditor, .no_barre')
.markItUp(eval('barre_outils_'+nom),{lang:options.lang})
.trigger('markItUpEditor.loaded')
.parent().find('.markItUpButton a').attr('tabindex',-1)
.end();
};
$.fn.barre_previsualisation=function(settings){
options={
previewParserPath:"index.php?action=porte_plume_previsu",
textEditer:"Modify",
textVoir:"Preview"
};
$.extend(options,settings);
return $(this)
.not('.pp_previsualisation, .no_previsualisation')
.previsu_spip(options)
.trigger('markItUpPreview.loaded')
.parent().find('.markItUpTabs a').attr('tabindex',-1)
.end();
};
$(window).on('load',function(){
function barrebouilles(){
$('.formulaire_spip textarea.inserer_barre_forum').barre_outils('forum');
$('.formulaire_spip textarea.inserer_barre_edition').barre_outils('edition');
$('.formulaire_spip textarea.inserer_previsualisation').barre_previsualisation();
$('textarea.textarea_forum').barre_outils('forum');
$('.formulaire_forum textarea[name=texte]').barre_outils('forum');
$('.formulaire_spip textarea[name=texte]')
.barre_outils('edition').end()
.barre_previsualisation();
}
barrebouilles();
onAjaxLoad(barrebouilles);
});
})(jQuery);


/* ../plugins-dist/porte_plume/javascript/porte_plume_forcer_hauteur.js?1733220532 */
function barre_forcer_hauteur(){
jQuery(".markItUpEditor",this==window?null:this).each(function(){
var hauteur_min=jQuery(this).height();
var hauteur_max=parseInt(jQuery(window).height())-200;
var hauteur=hauteur_min;
var signes=jQuery(this).val().length;
if(signes){
var hauteur_signes=Math.round(signes/4)+50;
if(hauteur_signes>hauteur_min&&hauteur_signes<hauteur_max){
hauteur=hauteur_signes;
}else{
if(hauteur_signes>hauteur_max){
hauteur=hauteur_max;
}
}
jQuery(this).height(hauteur);
}
});
}
jQuery(window).on("load",function(){
barre_forcer_hauteur();
onAjaxLoad(barre_forcer_hauteur);
});


