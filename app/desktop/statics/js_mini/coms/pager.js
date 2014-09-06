var Pager=new Class({Implements:[Options,Events],options:{onShow:$empty,onHide:$empty,format:function(a){return{tag_id:a.tagId||"",tag_name:a.tagName||"",type:a.type||""}},pageNum:10,current:1,curClass:"current",pageClass:"pagernum",nextBtn:"next",preBtn:"prev",pageMainClass:"pager"},initialize:function(a,b,c){a&&(this.data=b||[],this.setOptions(c),this.tpl=a,this.initFormat(),this.total=this.getTotal(),this.goPage(this.options.current),this.preCur=0)},initFormat:function(){this.data.each(function(a,
b){this.options.format.call(this,this.data[b])},this)},getTotal:function(a){return Math.ceil(a||this.data.length/this.options.pageNum)},updateContent:function(a,b){var c=[],d=this.data,e=[];if(!b||!a)return $(this.options.updateMain).empty();var g=b+1;if(b<=d.length)for(var f=a;f<g;f++)e.push(d[f-1]),c.push(this.tpl.substitute(d[f-1]));this.curdata=e;$(this.options.updateMain).empty();$(this.options.updateMain).set("html",c.join(""));this.updatePageList.call(this);return this.fireEvent("show",this.data)},
pageLink:function(a,b){for(var c=[],d=a,e=b+1;d<e;d++)this.options.current==d?c.push('<span class="'+this.options.curClass+'">'+d+"</span>"):c.push('<a class="'+this.options.pageClass+'" href="javascript:void(0)">'+d+"</a>");return c.join(" ")},bindLink:function(){var a=[],b=this.total,c=this.options.current;11>b?a.push(this.pageLink(1,b)):8>b-c?(a.push(this.pageLink(1,3)),a.push(this.pageLink(b-8,b))):(10>c?a.push(this.pageLink(1,Math.max(c+3,10))):(a.push(this.pageLink(1,3)),a.push(this.pageLink(c-
2,c+3))),a.push(this.pageLink(b-1,b)));return a.join("...")},updatePageList:function(){var a=$E("."+this.options.pageMainClass)||new Element("div",{"class":""+this.options.pageMainClass+""});if(1>=this.total)return a.destroy();var b="TBODY"==$(this.options.updateMain).tagName?$(this.options.updateMain).getParent():$(this.options.updateMain);b.hasClass("gridlist")&&!a.getParent(".gridlist-footer")&&a.addClass("gridlist-footer");a.inject(b,"after");a.empty();a.innerHTML=this.prePage.call(this)+this.bindLink.call(this)+
this.nextPage.call(this);return this.attach.call(this)},attach:function(){var a=this;$ES("a."+this.options.pageClass,"."+this.options.pageMainClass).addEvent("click",function(){a.goPage(this.get("text").toInt())});$E("a."+this.options.nextBtn)&&$E("."+this.options.nextBtn).addEvent("click",function(){this.goPage(this.options.current+1)}.bind(this));$E("a."+this.options.preBtn)&&$E("."+this.options.preBtn).addEvent("click",function(){this.goPage(this.options.current-1)}.bind(this))},goPage:function(a){var b=
a*this.options.pageNum,c=b-this.options.pageNum+1,b=b<this.data.length?b:this.data.length;this.fireEvent("hide",this.options.current);this.preCur=this.options.current;this.options.current=a;this.updateContent.apply(this,[c,b])},nextPage:function(){return this.total>this.options.current?'<a href="javascript:void(0)" class="'+this.options.nextBtn+'" title='+LANG_Pager.nextpage+">"+LANG_Pager.nextpage+"&gt;</a>":"&nbsp;"},prePage:function(){return 1<this.options.current?'<a href="javascript:void(0)" class="'+
this.options.preBtn+'" title='+LANG_Pager.prevpage+">&lt;"+LANG_Pager.prevpage+"</a>":"&nbsp;"}}),PageData=new Class({Extends:Pager,options:{PRIMARY_ID:"product_id"},initialize:function(a,b,c){this.parent(a,b,c);this.PRIMARY_ID=this.options.PRIMARY_ID;this.lastId=this.data.getLast()?this.data.getLast()[this.PRIMARY_ID]:0},editData:function(a,b){this.data.each(function(c){c[this.PRIMARY_ID]==a&&(c[b[0]]=b[1])},this)},selectData:function(a,b){var c,d;this.data.each(function(b,g){b[this.PRIMARY_ID]==
a&&(c=b,d=g)},this);return b?d:c},clearData:function(a){var b=arguments.callee,c=new Hash;$H(a).each(function(a,e){"object"==$type(a)||"hash"==$type(a)?c.set(e,b(a)):c.set(e,"")});return c},getAddTpl:function(a){return this.clearData(a)},addData:function(a){a=a||this.getAddTpl(this.data[0]);this.options.format.call(this,a);this.lastId=a[this.PRIMARY_ID]="new_"+((isNaN(this.lastId)?this.lastId.substring(4):this.lastId).toInt()+1);this.data.push(a);this.render("add")},delData:function(a){for(var b=
0,c=this.data.length;b<c;b++)if(this.data[b][this.PRIMARY_ID]==a){this.data.splice(b,1);break}this.render("del")},sort:function(a,b){if(a&&b){var c=b.className=b.hasClass("desc")?"asc":"desc";this.data.sort(function(b,e){return"asc"==c?b[a].localeCompare(e[a]):e[a].localeCompare(b[a])});this.render(1)}},render:function(a){this.total=this.getTotal();switch(a){case "add":a=this.total;break;case "del":a=this.total>this.options.current?this.options.current:this.total;break}this.goPage(a)},filter:function(a){var b=
new Hash;a&&a.getElements("input").length&&a.getElements("input").each(function(a){b.set(a.get("key"),a.get("tname"))});return b},toHideInput:function(a){var b=this.filter(a),a=new Element("div"),c=document.createDocumentFragment();this.data.each(function(a){var d=a[this.PRIMARY_ID];b.each(function(b,h){if($chk(a[h])&&b){var i=b.replace(/_PRIMARY_/g,d);c.appendChild(new Element("input",{type:"hidden",name:i,value:a[h]}))}})},this);a.empty().appendChild(c);var d=a.toQueryString(),a=null;return d}});