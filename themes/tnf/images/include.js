var Quyeba = {
  url : 'http://www.quyeba.com',
  surl : 'http://s.qybimg.com',
  include : function(optionsArray) {
    this._init();
    for(var i in optionsArray) {
      this._includeStyle(optionsArray[i]);
    }
    this._getScript()
  },
  _init : function() {
    for(var i = 0; i < document.scripts.length; i++) {
      var script = document.scripts[i].src;
      var re = new RegExp("(" + this.surl + ")(/.*\\.js)(\\?.*)", 'g');
      script = script.replace(re, '$2');
      if(!script) {
        re = new RegExp("(" + this.url + ")(/.*\\.js)(\\?.*)", 'g');
        script = script.replace(re, '$2');
      }
      if(script) {
        this.pageScripts.push(script);
      }
    }
  },
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
  _queueScripts: function(scripts, callback) {
    for(var i = 0; i < scripts.length; i++) {
      var script = scripts[i].replace(/(.*\.js)(\?.*)/g, '$1');
      if(jQuery.inArray(script, this.pageScripts) == -1) {
        this.scripts.push(script);
      }
    }
    this.callbacks.push(callback);
  },
  _urlReplace: function(str) {
    str = str.replace(/href="\/(.*?)"/g, "href=\"" + this.url + "/$1\"");
    str = str.replace(/dialog-url="\/(.*?)"/g, "dialog-url=\"" + this.url + "/$1\"");
    str = str.replace(/update-url="\/(.*?)"/g, "update-url=\"" + this.url + "/$1\"");
    str = str.replace(/url:'(.*?)'/g, "url:'" + this.url + "$1'");
    return str;
  },
  _isCrossdomain: function(url) {
    var hostname = window.location.hostname, port = window.location.port, protocol = window.location.protocol;
    return url != (protocol + "//" + hostname + port);
  },
  _loadTopbar: function($container) {
    var dataType = Quyeba._isCrossdomain(this.url) ? 'jsonp' : 'html';
    jQuery.ajax({
      url:this.url + '/ajax/block/view/isystem/topbar',
      async:false,
      cache:false,
      crossDomain:Quyeba._isCrossdomain(Quyeba.url),
      dataType: dataType,
      success:function(data) {
        $container.prepend(Quyeba._urlReplace(data));
//        $container.attr('style', '');
        jQuery.attachBehaviors(jQuery("#topbar", $container));
      }
    })
  },
  _loadUserinfo:function($container, uid) {
    var dataType = Quyeba._isCrossdomain(this.url) ? 'jsonp' : 'html';
    jQuery.ajax({
      url:this.url + '/ajax/block/view/iuser/account_setting?__args[uid]=' + uid,
      async:false,
      cache:false,
      crossDomain:Quyeba._isCrossdomain(Quyeba.url),
      dataType: dataType,
      success:function(data) {
        $container.prepend(Quyeba._urlReplace(data));
      }
    })
  },
  _loadNavbar:function($container) {
    var dataType = Quyeba._isCrossdomain(this.url) ? 'jsonp' : 'html';
    jQuery.ajax({
      url:this.url + '/ajax/block/view/isystem/header',
      async:false,
      crossDomain:Quyeba._isCrossdomain(Quyeba.url),
      dataType: dataType,
      success:function(data) {
        $container.attr('style', '');
        $container.prepend(Quyeba._urlReplace(data));
        jQuery.attachBehaviors(jQuery('#header', $container));
      }
    })
  },
  _loadFooter:function($container) {
    var dataType = Quyeba._isCrossdomain(this.url) ? 'jsonp' : 'html';
    jQuery.ajax({
      url:this.url + '/ajax/block/view/isystem/footer',
      async:false,
      crossDomain:true,
      dataType: dataType,
      success:function(data) {
        $container.attr('style', '');
        $container.prepend(Quyeba._urlReplace(data));
      }
    })
  },
  _loadTracking:function($container) {
    var dataType = Quyeba._isCrossdomain(this.url) ? 'jsonp' : 'html';
    jQuery.ajax({
      url:this.url + '/ajax/block/view/isystem/tracking',
      async:false,
      crossDomain:true,
      dataType: dataType,
      success:function(data) {
        $container.attr('style', '');
        $container.append(Quyeba._urlReplace(data));
      }
    })
  },
  _includeStyle : function(opts) {
    var $container = jQuery(opts.container);
    if(!opts.container) {
      $container = jQuery('body');
    }
    if ($container.length == 0) return;

    switch(opts.name) {
      case 'topbar':
        $container.css({
          'height' : '35px',
          'width' : '100%',
          'top' : '0',
		      'z-index' : '1000',
          'position' : 'absolute'
        });
        this._queueScripts([
          "/sites/all/libraries/js/jquery-ui-1.8.24.custom.min.js?v=1.8.24",
          "/sites/all/libraries/js/jquery.cookie.js",
          "/sites/all/libraries/js/base.js?v=20130207",
          "/sites/all/libraries/js/jquery.vticker.min.js"
        ], function() {
          jQuery.noConflict();
          Quyeba._loadTopbar($container);
        })
        break;
      case 'userinfo':
        this._queueScripts([], function() {
          jQuery.noConflict();
          Quyeba._loadUserinfo($container, opts.args.uid);
        })
        break;
      case 'navbar':
        $container.css({
          'background' : 'url(' + this.url +'/sites/all/themes/custom/img/fake_navbar.png?v=20130207) no-repeat center 0',
          'height' : '167px',
          'width' : '100%'
        })
        this._queueScripts([/*
          "/sites/all/libraries/js/base.js?v=20130207",
          "/sites/all/libraries/js/cufon/cufon-yui.js?v=20130207",
          "/sites/all/libraries/js/cufon/hyk2gj_400.font.js?v=20130318"*/
        ], function() {
          jQuery.noConflict();
          Quyeba._loadNavbar($container);
        })
        break;
      case 'footer':
        this._queueScripts([], function() {
          jQuery.noConflict();
          Quyeba._loadFooter($container);
        })
        break;
      case 'tracking':
        this._queueScripts([], function() {
          jQuery.noConflict();
          Quyeba._loadTracking($container);
        })
    }
  }
};





