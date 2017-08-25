<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
   
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
      <title>SNEAKER RELEASE DATES | Kixify Marketplace</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <link rel="canonical" href="upcoming.html" />
      <meta http-equiv="x-dns-prefetch-control" content="on" />
      <link rel="dns-prefetch" href="http://cdn.kixify.com/" />
      <link rel="dns-prefetch" href="http://0.kixify.com/" />
      <link rel="dns-prefetch" href="http://1.kixify.com/" />
      <link rel="dns-prefetch" href="http://2.kixify.com/" />
      <link rel="dns-prefetch" href="http://3.kixify.com/" />
      <link rel="dns-prefetch" href="http://4.kixify.com/" />
      <link rel="dns-prefetch" href="http://5.kixify.com/" />
      <link rel="next" href="upcoming2679.html?page=1" />
      <link rel="schema.dc" href="http://purl.org/dc/elements/1.1/" />
      <link rel="logo" href="../sites/all/themes/cargoh/images/logo.png" type="image/svg" />
      <meta name="description" content="The world's largest sneaker marketplace. We’re changing the way people buy and sell sneakers online." />
      <meta name="dcterms.description" content="The world's largest sneaker marketplace. We’re changing the way people buy and sell sneakers online." />
      <meta name="keywords" content="kixify,shoe,shop,sneaker,authentic,puma,nike,supra,vans,air jordan,adidias,release,calendar,converse,men,women,kids,fila,ewing,retro,air,fly,buy,sell,size" />
      <meta name="dcterms.date" content="2013-09-21T00:00:00Z" />
      <meta name="dcterms.creator" content="Kixify Marketplace" />
      <meta name="copyright" content="2013 Kixify.com" />
      <link rel="canonical" href="upcoming.html" />
      <meta name="revisit-after" content="5 days" />
      <meta name="dcterms.publisher" content="Kixify Marketplace" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:creator" content="@kixify" />
      <meta name="twitter:domain" content="kixify.com" />
      <meta name="twitter:site" content="@kixify" />
      <meta name="twitter:title" content="SNEAKER RELEASE DATES" />
      <!-- CSS aggregated by CDN module. -->
      <meta http-equiv="x-dns-prefetch-control" content="on" />
      <link rel="schema.dc" href="http://purl.org/dc/elements/1.1/" />
      <link type="text/css" rel="stylesheet" media="all" href="{{asset('pages/css/cdn_css_http_1d182f7bf56c16a03a27225e99353377.css')}}" />
      <link type="text/css" rel="stylesheet" media="all" href="{{asset('pages/css/cdn_css_http_e90f07709306361ba419945804f4fc95_search.css')}}" />
      <link type="text/css" rel="stylesheet" media="all" href="{{asset('pages/css/royalslider.css')}}" />
      <link rel="apple-touch-icon" href="touch/touch-icon-iphone-60x60.png" />
      <link rel="apple-touch-icon" sizes="60x60" href="touch/touch-icon-ipad-76x76.png"/>
      <link rel="apple-touch-icon" sizes="114x114" href="touch/touch-icon-iphone-retina-120x120.png"/>
      <link rel="apple-touch-icon" sizes="144x144" href="touch/touch-icon-ipad-retina-152x152.png"/>
      <link type="text/css" rel="stylesheet" media="all" href="{{asset('pages/css/cdn_css_http_e90f07709306361ba419945804f4fc95_search.css')}}" />
      <link type="text/css" rel="stylesheet" media="all" href="{{asset('pages/css/cdn_css_http_cb0009886accaaea17426e67e815c055.css')}}" />
      <link rel="stylesheet" href="{{asset('pages/font-awesome/css/font-awesome.min.css')}}">
      <script type="text/javascript" src="{{asset('pages/js/handlebars.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('pages/js/js_3e790a33ff6e05237f7370ad0de794c6.js')}}"></script>
      <script src="{{asset('pages/js/jquery-1.9.1.js')}}"> </script>
      <script src="{{asset('pages/js/jquery.royalslider.min.js')}}"> </script>
      <link rel="stylesheet" href="{{asset('pages/css/css-fix.css')}}">
      <script type="text/javascript">
         
          var $jq = jQuery.noConflict(true); window.jq = $jq
        
      </script>
      <script type="text/javascript">
         (function (b, r, a, n, c, h, _, s, d, k) {
             if (!b[n] || !b[n]._q) {
                 for (; s < _.length; )
                     c(h, _[s++]);
                 d = r.createElement(a);
                 d.async = 1;
                 d.src = "{{asset('pages/js/branch-latest.min.js')}}";
                 k = r.getElementsByTagName(a)[0];
                 k.parentNode.insertBefore(d, k);
                 b[n] = h
             }
         })(window, document, "script", "branch", function (b, r) {
             b[r] = function () {
                 b._q.push([r, arguments])
             }
         }, {_q: [], _v: 1}, "addListener applyCode banner closeBanner creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setIdentity track validateCode".split(" "), 0);
         branch.init('key_live_ohn1VqruxE0dCzAlIR4WCancDwkI0Akc');
         branch.banner({
             icon: 'http://a4.mzstatic.com/us/r30/Purple49/v4/95/10/2e/95102e88-673f-7ffa-3bfc-147b7f4f3a7a/icon175x175.png', //'http://icons.iconarchive.com/icons/wineass/ios7-redesign/512/Appstore-icon.png',
             title: 'Kixify - Buy & Sell Sneakers',
             description: 'The World’s Largest Sneaker Marketplace.',
             position: 'top',
             showDesktop: false
         }, {});
      </script>
     
      <script type="text/javascript">
         (function (i, s, o, g, r, a, m) {
             i['GoogleAnalyticsObject'] = r;
             i[r] = i[r] || function () {
                 (i[r].q = i[r].q || []).push(arguments)
             }, i[r].l = 1 * new Date();
             a = s.createElement(o),
                     m = s.getElementsByTagName(o)[0];
             a.async = 1;
             a.src = g;
             m.parentNode.insertBefore(a, m)
         })(window, document, 'script', '{{asset("pages/js/analytics.js")}}', 'ga');
         ga('create', 'UA-959820-10', 'auto');
         ga('send', 'pageview');
      </script>
      <!-- start Mixpanel -->
      <script type="text/javascript">
         (function (e, a) {
             if (!a.__SV) {
                 var b = window;
                 try {
                     var c, l, i, j = b.location, g = j.hash;
                     c = function (a, b) {
                         return(l = a.match(RegExp(b + "=([^&]*)"))) ? l[1] : null
                     };
                     g && c(g, "state") && (i = JSON.parse(decodeURIComponent(c(g, "state"))), "mpeditor" === i.action && (b.sessionStorage.setItem("_mpcehash", g), history.replaceState(i.desiredHash || "", e.title, j.pathname + j.search)))
                 } catch (m) {
                 }
                 var k, h;
                 window.mixpanel = a;
                 a._i = [];
                 a.init = function (b, c, f) {
                     function e(b, a) {
                         var c = a.split(".");
                         2 == c.length && (b = b[c[0]], a = c[1]);
                         b[a] = function () {
                             b.push([a].concat(Array.prototype.slice.call(arguments,
                                     0)))
                         }
                     }
                     var d = a;
                     "undefined" !== typeof f ? d = a[f] = [] : f = "mixpanel";
                     d.people = d.people || [];
                     d.toString = function (b) {
                         var a = "mixpanel";
                         "mixpanel" !== f && (a += "." + f);
                         b || (a += " (stub)");
                         return a
                     };
                     d.people.toString = function () {
                         return d.toString(1) + ".people (stub)"
                     };
                     k = "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
                     for (h = 0; h < k.length; h++)
                         e(d, k[h]);
                     a._i.push([b, c, f])
                 };
                 a.__SV = 1.2;
                 b = e.createElement("script");
                 b.type = "text/javascript";
                 b.async = !0;
                 b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";
                 c = e.getElementsByTagName("script")[0];
                 c.parentNode.insertBefore(b, c)
             }
         })(document, window.mixpanel || []);
         mixpanel.init("5e72c2ed051aefa7f2ed6b518fe8861b");
      </script>
      <!-- end Mixpanel -->
      <script  type="application/ld+json">
         [{"@context":"http:\/\/schema.org","@type":"WebSite","name":"Kixify Marketplace","alternateName":"Buy & Sell Sneakers","url":"https:\/\/www.kixify.com"},{"@context":"http:\/\/schema.org","@type":"Organization","logo":"https:\/\/www.kixify.com\/sites\/all\/themes\/cargoh\/images\/logo.png","url":"https:\/\/www.kixify.com"}]        
      </script>
   </head>
   <body class="page not-front not-logged-in no-sidebars page-release-dates-upcoming section-release-dates">
      <div id="page-wrapper">
         <!-- header -->
         @include('pages/layouts/header/header')
         <!-- End header -->
         <div id="page" class="container">
            <!-- Action nav -->
            @include('pages/layouts/nav/nav-search')
            <!-- End Action nav -->
            <div id="main-wrapper">
               <!--Content  -->
               @yield('content')
               <!-- End content -->
            </div>
            <!-- /#main, /#main-wrapper -->
            <div class="clearfix"></div>
         </div>
         <!-- footer -->
          @include('pages/layouts/footer/footer')
         <!-- End footer -->
      </div>
      <!-- /#page, /#page-wrapper -->
     <!-- Nav -->
      @include('pages/layouts/nav/nav')
     <!-- End Nav -->
      <div id="kixifyLoader"></div>
    <!--   <script type="text/javascript" src="{{asset('pages/js/js_0a8b0ed1ba4d7935d2220482b314eaa4.js')}}"></script> -->
     <!--  <script type="text/javascript" src="{{asset('pages/js/js_475f4cfe60a7f735adc24f762fc7062d.js')}}"></script> -->
      <script type="text/javascript" src="{{asset('pages/js/js_f2089168f0c8cbafaefb59f6d1e5e2f5.js')}}"></script>
      <script type="text/javascript">
         <!--//--><![CDATA[//><!--
         jQuery.extend(Drupal.settings, {"basePath":"\/","user_identify":{},"nice_menus_options":{"delay":"100","speed":0.001},"unbxd_site_key":"kixify_com-u1461762715083","unbxd_api_key":"5aba3ba448e4352c832974f561dcefe3","fbconnect":{"user_pictures":"allow","language_code":"en_US","app_id":"153714688114505","debug":0,"connect_js":"document.location.protocol + '\/\/connect.facebook.net\/en_US\/all.js'","loginout_mode":"manual","invite_name":"Kixify","fast_reg_mode":1,"fast_reg_autoname":1,"fbuid":null,"user":{"uid":0,"fbuid":null}},"CToolsUrlIsAjaxTrusted":{"\/release-dates\/upcoming":true,"\/release-dates\/upcoming?destination=release-dates%2Fupcoming":true},"popups":{"originalCSS":{"\/modules\/node\/node.css":1,"\/modules\/system\/defaults.css":1,"\/modules\/system\/system.css":1,"\/modules\/system\/system-menus.css":1,"\/modules\/user\/user.css":1,"\/sites\/all\/modules\/contrib\/cck\/theme\/content-module.css":1,"\/sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"\/sites\/all\/modules\/contrib\/date\/date.css":1,"\/sites\/all\/libraries\/jquery.ui\/themes\/base\/jquery-ui.css":1,"\/sites\/all\/libraries\/jquery.ui\/themes\/base\/ui.datepicker.css":1,"\/sites\/all\/modules\/contrib\/date\/date_popup\/themes\/jquery.timeentry.css":1,"\/sites\/all\/modules\/contrib\/filefield\/filefield.css":1,"\/sites\/all\/modules\/contrib\/logintoboggan\/logintoboggan.css":1,"\/sites\/all\/modules\/contrib\/nice_menus\/nice_menus.css":1,"\/sites\/all\/modules\/contrib\/nice_menus\/nice_menus_default.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/shipping\/uc_quote\/uc_quote.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_attribute\/uc_attribute.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_file\/uc_file.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_order\/uc_order.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_product\/uc_product.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_roles\/uc_roles.css":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_store\/uc_store.css":1,"\/sites\/all\/modules\/custom\/shipping_label\/assets\/css\/shipping_label.css":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/owl.carousel\/assets\/owl.carousel.css":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/unbxdsearch_search.css":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/assets\/jquery-unbxdautosuggest.css":1,"\/sites\/all\/modules\/contrib\/cck\/modules\/fieldgroup\/fieldgroup.css":1,"\/sites\/all\/modules\/contrib\/views\/css\/views.css":1,"\/sites\/all\/modules\/contrib\/fbconnect\/fbconnect.css":1,"\/sites\/all\/modules\/api\/release_dates\/assets\/css\/release_dates.css":1,"\/sites\/all\/modules\/contrib\/taxonomy_super_select\/taxonomy_super_select.css":1,"\/sites\/all\/themes\/cargoh\/css\/tabs.css":1,"\/sites\/all\/themes\/cargoh\/css\/block-editing.css":1,"\/sites\/all\/themes\/cargoh\/libs\/bootstrap\/css\/bootstrap.min.css":1,"\/sites\/all\/themes\/cargoh\/libs\/line-awesome\/css\/line-awesome-font-awesome.min.css":1,"\/sites\/all\/themes\/cargoh\/libs\/menu\/css\/jquery.mmenu.all.css":1,"\/sites\/all\/themes\/cargoh\/css\/kixify-overide.css":1},"originalJS":{"\/sites\/all\/modules\/api\/mixpanel_api\/assets\/js\/mixpanel_api.js":1,"\/sites\/all\/modules\/contrib\/nice_menus\/superfish\/js\/superfish.js":1,"\/sites\/all\/modules\/contrib\/nice_menus\/superfish\/js\/jquery.bgiframe.min.js":1,"\/sites\/all\/modules\/contrib\/nice_menus\/superfish\/js\/jquery.hoverIntent.minified.js":1,"\/sites\/all\/modules\/contrib\/nice_menus\/nice_menus.js":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_file\/uc_file.js":1,"\/sites\/all\/modules\/contrib\/ubercart\/uc_roles\/uc_roles.js":1,"\/sites\/all\/modules\/custom\/shipping_label\/assets\/js\/shipping_label.js":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/owl.carousel\/owl.carousel.min.js":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/unbxdsearch.recommendations.js":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/assets\/jquery-unbxdautosuggest.js":1,"\/sites\/all\/modules\/contrib\/fbconnect\/fbconnect.js":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/unbxdsearch_search.js":1,"\/sites\/all\/modules\/custom\/unbxdsearch\/unbxdsearch_search.autocomplete.js":1,"\/sites\/all\/themes\/cargoh\/libs\/detectmobilebrowser\/detectmobilebrowser.js":1,"\/sites\/all\/themes\/cargoh\/libs\/bootstrap\/js\/bootstrap.min.js":1,"\/sites\/all\/themes\/cargoh\/libs\/bootbox\/bootbox.min.js":1,"\/sites\/all\/themes\/cargoh\/libs\/menu\/js\/jquery.mmenu.all.min.js":1,"\/sites\/all\/themes\/cargoh\/js\/cargoh.js":1,"\/sites\/all\/themes\/cargoh\/js\/bootstrap.comp.js":1,"\/sites\/all\/themes\/cargoh\/libs\/cookie\/jquery.cookie.js":1}}});
         //--><!]]>
      </script>
      <script type="text/javascript">
         <!--//--><![CDATA[//><!--
         var UnbxdSiteName = "kixify_com-u1461762715083";var UnbxdApiKey = "5aba3ba448e4352c832974f561dcefe3";
         
               var ubx = document.createElement('script'); ubx.type = 'text/javascript'; ubx.async = true;
               ubx.src = '{{asset("pages/js/unbxdAnalytics.js")}}';
               (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ubx);
         //--><!]]>
      </script>
      <div class="hidden">
         <form action="https://www.kixify.com/release-dates/upcoming?destination=release-dates%2Fupcoming"  accept-charset="UTF-8" method="post" id="fbconnect-autoconnect-form" class="form-horizontal ">
            <div><input type="submit" name="op" id="edit-connect" value="Connect"  class="btn btn-default form-submit"/>
               <input type="hidden" name="form_build_id" id="form-HUkFrbGi7SeTZ_pS385lPi5ynqAzlY6M0vtzEUIN1hE" value="form-HUkFrbGi7SeTZ_pS385lPi5ynqAzlY6M0vtzEUIN1hE"  />
               <input type="hidden" name="form_id" id="edit-fbconnect-autoconnect-form" value="fbconnect_autoconnect_form"  />
            </div>
         </form>
      </div>
      <script type="text/javascript" src="{{asset('pages/js/js_e295d3597dc818dcb4abdd94a9691bf0.js')}}"></script>
      <div class="clearfix"></div>
      <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"720f13b38f","applicationID":"51794375","transactionName":"Y1ZWYEVZC0MCUhcKCVocdVdDUQpeTEMGDwNVQFFrU1kRVRBuFhMFW15dWlA=","queueTime":0,"applicationTime":713,"atts":"TxFVFg1DGE0=","errorBeacon":"bam.nr-data.net","agent":""}</script>
      <script src="{{asset('pages/js/update_cart.js')}}"> </script>
     <!--  <script>
        $("div .alert").slideUp(4000).delay(1000);
      </script> -->
   </body>
   <!-- Mirrored from www.kixify.com/release-dates/upcoming by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2017 01:56:45 GMT -->
</html>