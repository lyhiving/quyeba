var DragDropPlus=new Class({Implements:[Options,Events],options:{},initialize:function(a,b,c){this.dragSelecterString=a;this.dropSelecterString=b;this.drags=$$(a);this.drops=$$(b);this.setOptions(c);if(this.drag_operate_box=$("drag_operate_box"))this.drag_operate_box.store("lock",!1),this.drag_handle_box=this.drag_operate_box.getElement(".drag_handle_box"),this.scrollFx=new Fx.Scroll(document,{fps:50,duration:200,link:"cancel"}),this.dobFx=new Fx.Morph(this.drag_operate_box,{fps:50,duration:200,link:"cancel"}),
this.dhbFx=new Fx.Morph(this.drag_handle_box,{fps:50,duration:200,link:"cancel"}),this.dragSign=$("drag_ghost_box").inject(document.body),this.fireEvent("onInit",this),this.initDOBBase(this.drops),this.initDrags(this.drags),this.initDrops(this.drops)},checkEmptyDropPanel:function(a){if(a&&a.hasClass(this.dropSelecterString.substring(1,this.dropSelecterString.length)))if(a.getElement(this.dragSelecterString))a.getElement(".empty_drop_box")&&a.getElement(".empty_drop_box").destroy();else if(!a.getElement(".empty_drop_box")){var b=
(new Element("div.empty_drop_box")).set("html",'&nbsp;<button type="button" class="btn btn-add-widgets"><span><span><i class="icon"></i>\u6dfb\u52a0\u6302\u4ef6</span></span></button>').inject(a);b.addEvent("click",function(){this.fireEvent("add",[b],this)}.bind(this));this.dragmoveInstance&&(a.store("droppanel",!0),this.dragmoveInstance.droppables.include(a))}},dragLeave:function(){},dargInject:function(a,b){var c=this.dragging;if(c){var d="inside";b.retrieve("droppanel")||(d=c.getAllPrevious().contains(b)?
"before":"after");c.inject(b,d);this.checkEmptyDropPanel(a.retrieve("droped"));this.checkEmptyDropPanel(b);a.store("droped",b);this.dragSign.setStyles(c.getCoordinates())}},getDropables:function(){var a=this.dragging;return Array.from(this.drags).erase(a).combine(this.drops.filter(function(b){if(b.getElement(this.dragSelecterString))return b.store("droppanel",!1),!1;b.store("droppanel",!0);return!0}.bind(this)))},initDOBBase:function(a){var b=this.drag_operate_box,c=this.drag_handle_box,d=this;a&&
(c.getElements(".btn-up-slot,.btn-down-slot").addEvent("click",function(a){var c=b.retrieve("drag"),g=c.getParent().getChildren(),h=c[this.hasClass("btn-up-slot")?"getPrevious":"getNext"]();if(h){a.stop();var i=(new Fx.Sort(g,{duration:250,mode:"vertical",link:"chain",onComplete:function(){i.rearrangeDOM();document.body.fireEvent("mouseover",{target:c});d.fireEvent("upDown",[b.retrieve("drag")],d)}})).swap(c,h)}}),c.getElement(".btn-edit-widgets").addEvent("click",function(a){a.stop();this.fireEvent("edit",
[b.retrieve("drag")],this)}.bind(this)),b.addEvent("dblclick",function(a){a.stop();this.fireEvent("edit",[b.retrieve("drag")],this)}.bind(this)),c.addEvent("dblclick",function(a){a.stop()}.bind(this)),c.getElement(".btn-del-widgets").addEvent("click",function(a){a.stop();this.fireEvent("delete",[b.retrieve("drag")],this)}.bind(this)),c.getElements("li").addEvent("click",function(a){a.stop();this.fireEvent("add",[b.retrieve("drag"),$(a.target)],this)}.bind(this)))},initDrags:function(a){var b=this;
document.body.addEvents({mouseover:function(c){var c=$(c.target),d=c.getParent(b.dragSelecterString),e=b.drag_operate_box,f=b.drag_handle_box;if((d||c.hasClass(b.dragSelecterString.substr(1)))&&!e.retrieve("lock")){d=d||c;b.fireEvent("initDrags",[d,a],b);f.set("title",d.get("title")||"&nbsp;");e.setStyle("visibility","visible");e.store("drag",d);c=d.getCoordinates();c=Object.append(c,{top:c.top-f.getSize().y,height:c.height-e.getPatch().y+f.getSize().y,width:c.width-e.getPatch().x});delete c.bottom;
delete c.right;var g=235+e.getPatch().x;b.dhbFx.set({left:c.left+g+e.getStyle("border-left").toInt()>document.body.getSize().x&&!Browser.ie6?c.width-g:0});b.dobFx.set(c);f.getElements(".btn-up-slot,.btn-down-slot").removeClass("disabled");d.getPrevious()||f.getElement(".btn-up-slot").addClass("disabled");d.getNext()||f.getElement(".btn-down-slot").addClass("disabled")}}});a.each(function(a){b.checkEmptyDrag(a);a.getElements("form").removeEvents().addEvent("submit",function(a){a.stop()});a.getElements("a").removeEvents().addEvent("click",
function(a){a.stop()})})},checkEmptyDrag:function(a){window.addEvent("load",function(){a.offsetHeight||this.fireEvent("emptyDrag",[a],this)}.bind(this))},initDrops:function(a){a.each(function(b){this.checkEmptyDropPanel(b);this.fireEvent("initDrops",[b,a],this)},this)}}),Widgetsinsance=new Class({Extends:DragDropPlus,initialize:function(a,b,c){this.parent(a,b,c);this.drags.each(function(a){a.getProperty("ishtml")&&a.getElement(".content-html").set("html",a.getElement(".content-textarea").get("value"))})},
inject:function(a,b){this.addWidget(this.curEl,a,b?b:this.theme)},ghostDrop:function(a,b){this.drag_operate_box.setStyle("visibility","hidden").store("lock",!0);$("tempDropBox")&&$("tempDropBox").destroy();this.tempDropBox=(new Element("div",{id:"tempDropBox"})).inject(document.body);try{this.drops.each(function(c){if(c){var e=this,f=c.getCoordinates();5<f.height&&5<f.width&&(f.height-=5,f.width-=5);(new Element("div",{"class":"widgets_drop_ghost",styles:Object.merge(f,{opacity:0.3}),title:LANG_shopwidgets.dropghostTitle1+
a.name+LANG_shopwidgets.dropghostTitle2})).addEvents({mouseover:function(){this.addClass("widgets_drop_ghost_on")},mouseleave:function(){this.removeClass("widgets_drop_ghost_on")},click:function(){e.tempDropBox.empty();e.addWidget(c,a,b);e.drag_operate_box.store("lock",false)}}).inject(e.tempDropBox)}},this)}catch(c){alert(JSON.encode(c))}document.body.addEvent("contextmenu",function(a){a.stop();$("tempDropBox")&&$("tempDropBox").destroy();this.drag_operate_box.store("lock",!1);document.body.removeEvent("contextmenu",
arguments.callee)}.bind(this))},copyWidgets:function(){},addWidget:function(a,b,c){this.curdialog=new top.Dialog(top.SHOPADMINDIR+"index.php?&app=site&ctl=admin_widget_proinstance&act=do_add_widgets&widgets="+b.name+"&widgets_app="+b.app+"&widgets_theme="+b.theme+"&theme="+c,{modal:!0,title:LANG_shopwidgets.addWidget+(b.label||""),ajaxoptions:{render:!1},width:0.7,height:0.7});this.curDrop=a},editWidget:function(a){var b={modal:!0,title:LANG_shopwidgets.editWidget+(a.label||""),ajaksable:!1,width:0.7,
height:0.7};this.curWidget=$(a);return this.curdialog=new top.Dialog(top.SHOPADMINDIR+"index.php?app=site&ctl=admin_widget_proinstance&act=do_edit_widgets&widgets_id="+a.get("widgets_id")+"&theme="+a.get("widgets_theme"),b)}});
window.addEvent("domready",function(){document.body.style.cssText="background:#FFFFFF!important;padding:10px 90px 0 90px!important;";this.shopWidgets=new Widgetsinsance(".shopWidgets_box",".shopWidgets_panel",{onEdit:function(a){shopWidgets.editWidget(a)},onDelete:function(a,b){if(b||confirm(LANG_shopwidgets.comfirmDel)){var c=this.drag_operate_box,d=this;c.setStyle("visibility","hidden").store("lock",!0);var e=a.getParent();(new Fx.Tween(a)).start("opacity",0).chain(function(){a.destroy();c.store("lock",
!1);d.checkEmptyDropPanel(e);b&&b.call(top)})}},onAdd:function(a,b){b.widgetsDialog=new top.Dialog("index.php?app=site&ctl=admin_theme_widget&act=add_widgets_page&theme="+a.get("widgets_theme"),{width:770,height:500,title:"\u6dfb\u52a0\u6302\u4ef6",modal:!0,resizeable:!1,onShow:function(){this.dialog_body.id="dialogContent"}})}})});