(function(){var n={sortKeys:function(a){var b=Object.keys(a).sort(),c={};Object.each(b,function(b){c[b]=a[b]});return c},filterSpec:function(a,b){var c=[],d=Object.values(this.selectedHS);this.pid=null;Object.each(this.PRODUCT_HASH,function(b,e){var g=Object.values(b.spec_private_value_id).sort(),k=":"+g.join(":")+":";a.test(k)&&c.include(g);d.length==this.specNum&&d.every(function(a){return g.contains(a)},this)&&(this.pid=e)},this);c.sort();return b?this.merge(c):c},merge:function(a){var b=[],c=
[];a&&a[0]&&a[0].length&&a[0].each(function(d,f){a.each(function(a){c.include(a[f])});b.push(c)});return b},collect:function(a,b,c,d,f){var e=[],g=Object.keys(c);a.each(function(c,i){var h=[];d!=i&&g.contains(i.toString())&&g.length!=a.length&&!f?h.combine(a[i].include(b[i])):b&&b[i]&&h.combine(b[i].filter(function(a){return c.contains(a)}));e.include(h)});e[d]=a[d];return e},to_find:function(a,b){var c=Object.values(a),d=Object.keys(a),f=":"+c.join(":(\\d+:)*")+":",f=RegExp(""+f.split("(:\\d+:)*")+
""),e=Object.keyOf(a,b),g,k=$H(a);if(2<d.length){var i="";k.erase(e).each(function(a,c){var d=$H(k).erase(c).set(e,b),d=Object.values(this.sortKeys(d));i+=":"+d.join(":(\\d+:)*")+":|"},this);i=RegExp(""+i.substr(0,i.length-1)+"");k&&(g=arguments.callee.call(this,k,k.getValues()[0]));c=this.filterSpec(i,!0);g=this.collect(g,c,a,e,!0)}else g=this.filterSpec(RegExp(""+c.join("|")+""),!0);if(d.length==this.specNum)return g;d=this.filterSpec(f,!0);return this.collect(g,d,a,e)},init:function(a,b,c){var d=
this.selectedHS=this.sortKeys(a.selectedHS),f;this.PRODUCT_HASH=a.productData;this.specNum=a.specItems.length;1<Object.keys(d).length?f=this.to_find(d,b).flatten():(f=this.filterSpec(RegExp(":"+b+":")).flatten(),c.each(function(a){a.contains(b)&&f.combine(a)}));return f}},m=function(a,b){var c=a.retrieve("handle"),d;d=b?b.getElement("img")?b.getElement("img").alt:b.getElement("span").get("text"):LANG_spec.select;c.getElement("span").set("text",d).addClass("select");if(d=c.getParent(".dialog-specauto")){d=
Browser.ie6?d.getParent():d.getElement(".spec-content");d=d.getSize().x;var f=c.getSize().x,e=c.getElement(".inner");e&&e.setStyles(f>d?"overflow:hidden;width:"+(d-c.getPatch().x-e.getPatch().x)+"px;":"")}c.removeClass("curr");a.removeClass("content-curr")},o=function(a){if(!Browser.ie6&&(a=a.getParent(".popup-container")))a=a.retrieve("instance"),a.body.setStyle("height",""),a.content.setStyle("height",a.content.getElement(".ec-spec-box").measure(function(){return this.getSize().y}))},j=this.Goods_spec=
new Class({Implements:[Events,Options],options:{onLoad:function(a){var b=a.getElements(".spec-item .handle"),c=a.getElements(".spec-item .content"),d=-1;b.length&&b.each(function(a,e){var g=c[e];g.store("handle",a);a.addEvent("click",function(){0<=d&&d!=e&&(b[d].removeClass("curr"),c[d].removeClass("content-curr"));d=e;this.toggleClass("curr");var a=this.getPosition(this.getOffsetParent()),f=this.getSize().y-this.getPatch("border").y;g.setStyles({top:a.y+f});g.toggleClass("content-curr");if(g.isDisplay()){var h=
this.getParent(".dialog-specauto"),l,f=g.getPatch().x,j;if(h&&(h=Browser.ie6?h.getParent():h.getElement(".spec-content"),h=h.getSize().x-h.getPatch().x,l=g.getSize().x,a=a.x+this.getSize().x,h!=l)){if(a>h||a>=l||Browser.ie6&&a==l-f)j=a-f;j&&g.setStyle("width",j)}}})})},productData:{},spec_hash:{},selectItems:[],lockCls:"lock",selectedCls:"selected",specBtn:"a[specvid]",specItems:".specItem",isDefault:!1,isSelected:!0},initialize:function(a,b){if($(a)){a=this.contains=$(a);this.setOptions(b);var c=
this.options,d=a.getElement("input[data-type-product]").value,f=a.getElement("input[data-type-spec]").value;this.productData=d?JSON.decode(d):c.productData;this.spec_hash=f?JSON.decode(f):c.spec_hash;this.specData=c.specData;this.specItems=a.getElements(c.specItems);this.specBtn=a.getElements(c.specBtn);this.fireEvent("load",a).attach();j._selectUpdate.updateBtn(a)}},attach:function(){var a=this;o(this.contains);this.specBtn.addEvent("click",function(b){b&&b.stop();a.selectspec.call(a,this);o(this)});
Browser.ie6&&this.contains.getElement("div[data-sync-type]")&&this.specItems.setStyle("width",this.contains.getElement(".spec-item").getSize().x-this.specItems[0].getPatch().x);this.specItems.each(function(b){var c=b.getElement(".spec-values"),d=b.getParent(".dialog-specwrap");if(c&&d){var d=d.measure(function(){return this.getSize().x-this.getPatch().x}),f=c.measure(function(){return this.getSize().x});c.getElement("span")&&c.getElement("span").setStyles(d<f?"overflow:hidden;width:"+(d-c.getPatch().x-
c.getElement("ul").getPatch().x-c.getElement("li").getPatch().x-c.getElement("a").getPatch().x-c.getElement("span").getPatch().x)+"px;":"")}b=b.getElements(this.options.specBtn);b=b.length?b.filter(function(b){return!b.hasClass(a.options.lockCls)}):[];1<=b.length&&this.options.isDefault&&b[0].fireEvent("click",{stop:function(){}})},this)},selectspec:function(a){var b=this.options,c=b.lockCls;if(a.hasClass(c))return null;var d=a.get("specid"),f=a.get("specvid"),e=b.selectedCls,g=this.contains,b=a.getParent(this.options.specItems)||
a.getParent("ul"),k=b.retrieve("handle",b).getElement("em");k&&k.removeClass("warn");if(a.hasClass(e))return a.removeClass(e),e=this.selected=g.getElements("."+e),g=e.length,b.hasClass("content")&&m(b),1>=g&&(this.specSelectedCall(f,d,a),this.specBtn.removeClass(c)),g&&(f=e[0].get("specvid"),d=e[0].get("specid"),this.specSelectedCall(f,d,a)),this;c=b.retrieve("ts",a);c!=a&&c.removeClass(e);b.store("ts",a.addClass(e));b.hasClass("content")&&m(b,a);this.selected=g.getElements("."+e);this.specSelectedCall(f,
d,a)},specSelectedCall:function(a,b,c){var d=this.selectedHS={},f=this.specItems,e=this.options,g=e.selectedCls,k=e.specBtn,b=this.selected,i=e.lockCls,e=this.specItems.length,h=this.selectedBtn=[];f.each(function(a,b){var c;if(c=a.getElement("."+g))h.push(c),d[b]=c.get("specvid")});if(!this.specArr){var j;this.specArr=[];this.specItems.each(function(a){(j=a.getElements(k))&&this.specArr.push(j.get("specvid"))},this)}var m=n.init.call(n,this,a,this.specArr),a=this.pid=n.pid;this.specBtn.each(function(a){var b=
-1!=m.indexOf(a.get("specvid"));a[b?"removeClass":"addClass"](i)});this.fireEvent("selected",c).selectedcall(c,b);if(!h.length)return this.fireEvent("updatedefault",this).updatedefault();e==b.length&&this.update(a,this.productData).complete(a,this.productData);return this},selectedcall:function(a,b){this.options.selectItems.combine(["selectedItem","updateBtn","updatePic"]).each(function(c){var d;(d=j._selectUpdate[c])&&d.call(this,a,b)},this)},update:function(a,b){var c=this.specUpdate=this.contains.getElements("[updatespec]");
c.length&&a&&c.each(function(c){var f=c.get("updatespec").split("_"),e,g=b[a][f[1]];(e=j._selectedUpdate[f[0]])&&e.call(this,c,g,a,b)},this);return this},updatedefault:function(){var a;this.contains.getElements("[updatespec]").each(function(b){if(a=b.retrieve("default:html"))b.set("INPUT"==b.tagName?"value":"html",a);(a=b.retrieve("default:callback"))&&a()})},complete:function(a,b){return this.fireEvent("complete",this,a,b)}});j._selectUpdate={selectedItem:function(a){(a.getParent(".content")&&a.getParent(".content").retrieve("handle")||
a.getParent(".spec-item")).getElement("em")[a.hasClass("selected")?"addClass":"removeClass"]("check")},check:function(a){var b=[],c=[],d=[],f=[];a.getElements(".spec-item em").each(function(e,g){e.hasClass("check")?d.push(e.get("text")):(b.push(e.get("text")),c.push(e));f.push(a.getElements(".spec-item .selected")[g])});return{check:d,nocheck:b,nocheckel:c,selected:f}},updateBtn:function(a){var a=a||this.contains,b=a.getElements(".updateBtn").eliminate("tip:text");b&&b.addEvent("click",function(b){b.stop();
this.blur();var d=j._selectUpdate.check(a,this),f=this.getParent("form");d.nocheck.length?($$(d.nocheckel).length&&$$(d.nocheckel).addClass("warn"),Message.error(LANG_spec.select_spec+d.nocheck.join(","))):f?"_dialog_minicart"===f.target?f.fireEvent("submit",[b,this]):f.submit():this.fireEvent("_update_spec",[d.check,d.selected])})}};j._selectedUpdate={text:function(a,b){var c="INPUT"==a.tagName?"value":"html",d=a.retrieve("default:html",a.get(c));return a.store("default:html",d).set(c,b)},updatepid:function(a,
b,c){a.store("default:html",a.get("value")).set("value",c)}}})();