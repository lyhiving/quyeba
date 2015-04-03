//这js到底做什么的，如何替代 ？
//真让人越看越郁闷

var Quyeba = {
  url : 'http://www.quyeba.com',
  
  include : function() {
    this._init();
    this._getScript()
  },
  
  //初始化函数
  _init : function() {
    for(var i = 0; i < document.scripts.length; i++) {
      var script = document.scripts[i].src;

      if(!script) {
        re = new RegExp("(" + this.url + ")(/.*\\.js)(\\?.*)", 'g');
        script = script.replace(re, '$2');
      }
      if(script) {
        this.pageScripts.push(script);
      }
    }
  },
  //获取脚本函数
  _getScript:function() {
    this.currentScript = Quyeba.scripts.shift();
    if(!this.currentScript) {
      for(var i = 0; i < this.callbacks.length; i++) {
        this.callbacks[i]();
      }
      return;
    }
    jQuery.getScript(this.url + this.currentScript, function() {
      Quyeba.pageScripts.push(Quyeba.currentScript);
      Quyeba.currentScript = false;
      if(Quyeba.scripts) {
        Quyeba._getScript()
      }
    });
  },
  pageScripts:[],
  scripts: [],
  currentScript:false,
  callbacks:[],
  
  
};





