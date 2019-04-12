<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html  lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<meta name="title" content="" />
<link rel="shortlink" href="index.php" />
<link rel="canonical" href="index.php" />
<meta property="og:image" content="#" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script>function euCookieComplianceLoadScripts() {}</script>
<style>div#sliding-popup, div#sliding-popup .eu-cookie-withdraw-banner, .eu-cookie-withdraw-tab {background: #c1c1c1} div#sliding-popup.eu-cookie-withdraw-wrapper { background: transparent; } #sliding-popup h1, #sliding-popup h2, #sliding-popup h3, #sliding-popup p, .eu-cookie-compliance-more-button, .eu-cookie-compliance-secondary-button, .eu-cookie-withdraw-tab { color: #333333;} .eu-cookie-withdraw-tab { border-color: #333333;}</style>
<link rel="shortcut icon" href="#" type="#" />
<link rel="alternate" hreflang="en" href="#" />
<link rel="revision" href="#" />
<script src="others/sites/unicef-org-nigeria/files/google_tag/google_tag.script.js" defer="defer"></script>
    <title>Yo</title>
    <link rel="stylesheet" href="others/sites/unicef-org-nigeria/files/css/css_WZb5SrQe28_PXbohLDE0o06CoiSxIl-XkfZ-Wx4mNQU.css" media="all" />
<link rel="stylesheet" href="others/sites/unicef-org-nigeria/files/css/css_xnF4NxgS5cSdbJV0SqKToH1CpZD4NhGLleKnGlZvaUM.css" media="all" />
        </head>
<body class="path-frontpage page-node-type-feature-page has-glyphicons" data-spy="scroll" data-target="#anchor-scroll" data-offset="0">
<a href="#main-content" class="visually-hidden focusable skip-link">
  Skip to main content
</a>
<noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html" height="0" width="0" title="Google Tag Manager"></iframe></noscript>
  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
      <div role="heading" class="message-alert-header">
        <div class="region region-header">
  </div>
    </div>
          <header class="navbar navbar-default" id="navbar" role="banner">
              <div class="">
      <div class="layout-container">
  <div class="region region-masthead-prefix">
    <div class="masthead-prefix-container" data-set="masthead-prefix-container-data">
      <div class="header-prefix-blocks  no-border ">
        <nav role="navigation" aria-labelledby="block-global-links-menu" id="block-global-links" data-block-plugin-id="system_menu_block:global-links">
  <span class="visually-hidden" id="block-global-links-menu">Link Me</span>
    <ul class="menu-global-links">
		  		    <li>
          <a href="index.php" class="global-link__lnk" data-action="index.php" data-tracked-component="global-link" data-bound="click" data-label="UNICEF Global">UNICEF Global</a>
		    </li>
		  		</ul>
  </nav>
<div class="btn--contrast">
	<a class="high-contrast__lnk" data-action="#" data-tracked-component="high-contrast" data-bound="click" data-label="High contrast">High contrast</a>
</div>
      </div>
    </div>
  </div>
        <div class="logo-phone">
            <div class="region region-masthead-primary">
      <div class="logo">
  <a href="index.php" title="" rel="home" class="site-branding__logo ">
  	  	    <span class="icon-logo-unicef en">
      <em class="visibility-hidden">logo</em>
    </span>
  </a>
      <span class="navbar-text-country-name ">Branding</span>
  </div>
  </div>
        </div> 
        <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
              </div>
        <div class="logo-other">
            <div class="region region-masthead-primary">
      <div class="logo">
  <a href="index.php" title="" rel="home" class="site-branding__logo ">
  	  	    <span class="icon-logo-unicef en">
      <em class="visibility-hidden">logo</em>
    </span>
  </a>
      <span class="navbar-text-country-name ">Local Me</span>
  </div>
  </div>
        </div>
        <div class="donate-n-search">
             <div class="region region-masthead-secondary">
    <div class="secondary-menu-container" data-set="secondary-menu-container-data">
<section id="block-secondary-menu" data-block-plugin-id="system_menu_block:secondary" class="block block-system block-system-menu-blocksecondary clearfix">
<div class="menu-explore">
                <ul class="menu nav navbar-nav">
                  <li>
                                            <ul class="dropdown--list" data-tracked-component="dropdown">
  <li class=" expanded dropdown  dropdown--explore keep-open" data-tracked-component="pagination_page_size">
    <a href="#" title="" class="dropdown-toggle dropdown--toggle-explore text-uppercase" data-toggle="dropdown" aria-expanded="false" data-tracked-component="dropdown_option" data-bound="null" data-label="EXPLORE UNICEF">Me is Here
      <div class="icon-arrow">
        <span class="icon-icon__arrow-down"></span>
        <span class="vertical-line"></span>
      </div>
    </a>
    <ul class="menu dropdown-menu dropdown--menu-explore">
              <li class="expanded dropdown dropdown--items-explore">
                      <a href="#" class="" data-action="#" data-tracked-component="dropdown_option" data-bound="click" data-label="ABOUT US">ABOUT US</a>
                  </li>
              <li class="expanded dropdown dropdown--items-explore">
                      <a href="#" class="" data-action="#" data-tracked-component="dropdown_option" data-bound="click" data-label="WHERE WE WORK">WHERE WE WORK</a>
                  </li>
              <li class="expanded dropdown dropdown--items-explore">
                      <a href="#" class="" data-action="#" data-tracked-component="dropdown_option" data-bound="click" data-label="SITUATION OF WOMEN AND CHILDREN ">SITUATION OF WOMEN AND CHILDREN </a>
                  </li>
              <li class="expanded dropdown dropdown--items-explore">
                      <a href="#" class="" data-action="#" data-tracked-component="dropdown_option" data-bound="click" data-label="REPRESENTATIVE">REPRESENTATIVE</a>
                  </li>
              <li class="expanded dropdown dropdown--items-explore">
                      <a href="#" class="" data-action="#" data-tracked-component="dropdown_option" data-bound="click" data-label="CONTACT US">CONTACT US</a>
                  </li>
          </ul>
  </li>
</ul>
                    </li>
                  <li>
                                            <a href="#" class="btn btn--default" data-action="#" data-tracked-component="cta" data-bound="click" data-label="Press centre">Press centre</a>          
                    </li>
              </ul>
</div>
  </section>
</div>
<div class="cta-block--button">
      <a href="#" class="btn donate_white_orange" data-action="#" data-tracked-component="cta" data-bound="click" data-label="Donate">Donate</a>
  </div>
  </div>
                    </div>
      </div>
                    <div id="navbar-collapse" class="navbar-collapse collapse">
  <div class="region region-navigation-collapsible">
    <div class="layout-container">
      <nav role="navigation" aria-labelledby="block-main-menu-menu" id="block-main-menu" data-block-plugin-id="system_menu_block:main">
            <span class="sr-only" id="block-main-menu-menu">Main navigation</span>
    <ul class="menu nav navbar-nav nav--menu" data-tracked-component="navigation_first_level" data-bound="null">
          <li class="menu-item expanded dropdown nav--menu-item">
      <a href="nigeria/what-we-do.html" title="WHAT WE DO"  data-tracked-component="navigation_element" data-label="WHAT WE DO" data-bound="click">WHAT WE DO</a>
    </li>
          <li class="menu-item expanded dropdown nav--menu-item">
      <a href="#" title="Research and reports"  data-tracked-component="navigation_element" data-label="Research and reports" data-bound="click">Research and reports</a>
    </li>
          <li class="menu-item expanded dropdown nav--menu-item">
              <a href="index.php" title="Stories"  data-tracked-component="navigation_element" data-label="Stories" data-bound="click">Stories</a>
    </li>
          <li class="menu-item expanded dropdown nav--menu-item">
              <a href="index.php" title="TAKE ACTION"  data-tracked-component="navigation_element" data-label="TAKE ACTION" data-bound="click">TAKE ACTION</a>
    </li>
  </ul>
  </nav>
<div class="searchbutton-container" data-set="searchbutton-container-data">
<div  id="block-searchbutton" data-block-plugin-id="search_popup_block" class="block block-unicef-search block-search-popup-block clearfix">
      <div id="search-info" role="status" class="hidden" aria-live="polite"></div><div class="hidden search-closed">Search area has closed.</div><div class="hidden search-open">Search area has opened.</div><div class="js-search-button-section"><a tabindex="0" role="button" class="btn--input-search" aria-label="Toggle search form" aria-expanded="false"><span class="btn-txt-search" data-tracked-component="search_panel_search" data-bound="click"><span class="search-label" tab-index="0">SEARCH</span></span><span class="btn-txt-close" data-tracked-component="search_panel_close" data-bound="click"><span class="search-label">CLOSE</span></span></a></div>
  </div>
</div>
      <div class="secondary-menu-block" data-set="secondary-menu-container-data"></div>
      <div class="masthead-prefix-blocks" data-set="masthead-prefix-container-data"></div>
    </div>
  </div>
        </div>
                    </div>
          </header>
  <div role="main" class="container main-container  js-quickedit-main-content">
    <div class="row">
                  <section>
                                      <div class="highlighted">  <div class="region region-highlighted">
    <section id="block-solrsearchform" data-block-plugin-id="search_popup_solr_form_block" class="block block-unicef-search block-search-popup-solr-form-block clearfix">
      <div class="search--region" role="search" id="search"><div class="search-content"><h3 class="title">Search</h3><div class="search--field" data-tracked-component="search_footer"><form class="views-exposed-form" data-drupal-selector="views-exposed-form-solrsearch-page-1" action="index.html" method="get" id="views-exposed-form-solrsearch-page-1" accept-charset="UTF-8">
<input data-drupal-selector="edit-force" type="hidden" name="force" value="0" />
<div class="form--inline form-inline clearfix">
  <div class="solrsearch-controls container">
    <div class="solrsearch-input-box">
      <div class="form-item js-form-item form-type-search-api-autocomplete js-form-type-search-api-autocomplete form-item-query js-form-item-query form-group form-autocomplete">
      <label for="edit-query" class="control-label">Search Me</label>
  <div class="input-group"><input placeholder="Search" data-drupal-selector="edit-query" data-search-api-autocomplete-search="solrsearch" class="form-autocomplete form-text form-control" data-autocomplete-path="/nigeria/search_api_autocomplete/solrsearch?display=page_1&amp;&amp;filter=query" type="text" id="edit-query" name="query" size="30" maxlength="128" /><span class="input-group-addon"><span class="icon glyphicon glyphicon-refresh ajax-progress ajax-progress-throbber" aria-hidden="true"></span></span></div>
  </div>
    </div>
        <div class="solrsearch-sort-facet-date-container">
    <div class="solrsearch-sort" title="Sort by">
      <span class="icon icon-facet-close" style="display:none;"></span>
      <span class="icon icon-facet" title="Refine your search"></span>
    </div>
    <div class="solrsearch-facet-calendar-container">
      <div class="solrsearch-calendar-container">
        <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-search-date-range-picker js-form-item-search-date-range-picker form-no-label form-group">
  <div class="input-group"><input class="search--date_range_picker form-text form-control" placeholder="Date range" data-drupal-selector="edit-search-date-range-picker" type="text" id="edit-search-date-range-picker" name="search_date_range_picker" value="" size="60" maxlength="128" /><span class="input-group-addon"><i class="icon icon-Calendar"></i></span></div>
  </div>
        <span class="icon icon-Calendar" style="display:block;"></span>
        <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-changed-min js-form-item-changed-min form-group">
  <input placeholder="Date range" data-drupal-selector="edit-changed-min" class="form-text form-control" type="text" id="edit-changed-min" name="changed[min]" value="" size="30" maxlength="128" />
  </div>
<div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-changed-max js-form-item-changed-max form-group">
      <label for="edit-changed-max" class="control-label">And</label>
  <input data-drupal-selector="edit-changed-max" class="form-text form-control" type="text" id="edit-changed-max" name="changed[max]" value="" size="30" maxlength="128" />
  </div>
      </div>
      <div class="solrsearch-facet-container">
      </div>
    </div>
  </div>
</div>
<div class="solrsearch-form-submit"><div data-drupal-selector="edit-actions" class="form-actions form-group js-form-wrapper form-wrapper" id="edit-actions"><button data-drupal-selector="edit-submit-solrsearch" class="button js-form-submit form-submit btn-info btn" type="submit" id="edit-submit-solrsearch" value="Apply" name="">Apply</button></div>
</div>
  <div class="facet-preserve">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
</div>
</form>
</div></div></div>
  </section>
  </div>
</div>
                          <a id="main-content"></a>
            <div class="region region-content">
            <div class="field field--name-field-featpage-feature field--type-entity-reference-revisions field--label-hidden field--item">
<div class="blue_primary">
  <div class="banner col-md-12 col-sm-12">
    <div class="banner--media-regular-image col-md-8 col-sm-8">
      <figure>
            <div class="field field--name-field-component-stdban-media field--type-entity-reference field--label-hidden field--item">
            <div class="field field--name-image field--type-image field--label-hidden field--item">    <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
              <source srcset="#" media="all and (min-width: 992px)" type="image/jpeg"/>
              <source srcset="#" media="all and (min-width: 768px)" type="image/jpeg"/>
              <source srcset="#" type="image/jpeg"/>
            <!--[if IE 9]></video><![endif]-->
            <img src="#" alt="Image" typeof="foaf:Image" class="img-responsive" />
  </picture>
</div>
</div>
      </figure>
    </div>
    <!-- TODO: Remove CYAN class and make it custom by user choise -->
    <div class="banner--media-regular-text blue_primary col-md-4 col-sm-4">
      <div class="banner--title">
        <h3>
            <div class="field field--name-field-component-stdban-headline field--type-text field--label-hidden field--item">Me </div>
      </h3>
      </div>
      <div class="banner--teaser">
        <p>
            <div class="field field--name-field-component-stdban-teaser field--type-text field--label-hidden field--item">This os it</div>
      </p>
      </div>
      <div class="banner--cta-button">
            <div class="field field--name-field-component-stdban-ctabtn field--type-entity-reference-revisions field--label-hidden field--item">
  <div class="cta-block--button">
  <a href="#" class="btn primary_white_blue" data-action="#" data-tracked-component="cta" data-bound="click" data-label="WHAT WE DO" title="WHAT WE DO">WHAT WE DO</a>
	</div>
</div>
      </div>
    </div>
  </div>
</div>
</div>
      <div class="field field--name-field-featpage-content-blocks field--type-entity-reference-revisions field--label-hidden field--items">
              <div class="field--item">
<div class="section--block component-section">
  <div class="container">
    <div class="text--block-content">
                </div>
      <div class="field field--name-field-component-sec-blocks field--type-entity-reference-revisions field--label-hidden field--items">
              <div class="field--item"><div class="unicef-component-mosaic unicef-component-mosaic-display-tile unicef-component-mosaic-display--tile_display_2_4_cards unicef-component-mosaic-display--has-featured">
        <div class="unicef-component-mosaic--rendered en ">
    <form class="unicef-component-mosaic-automatic" id="unicef-component-mosaic-automatic-25e3f427-ce2c-46c6-94f5-b46eb3039aff" data-drupal-selector="unicef-component-mosaic-automatic" action="index.html" method="post" accept-charset="UTF-8">
  <div class="unicef-component-mosaic-automatic" data-drupal-selector="">
        <div class="unicef-component-mosaic--rendered en ">
    <div id="unicef-component-mosaic-automatic-25e3f427-ce2c-46c6-94f5-b46eb3039aff-container" data-drupal-selector="edit-rendered-view" class="form-group js-form-wrapper form-wrapper"><div data-drupal-selector="edit-items" class="form-group js-form-wrapper form-wrapper" id="edit-items"><div class="mosaic--tile mosaic--tile--press-release col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
  <a href="index.php" title="" class="mosaic-tile-lk" data-action="index.html" data-tracked-component="cta" data-bound="click" data-label="Visit the page">
              <div class="tile--image">
            <div class="field field--name-field-press-release-media field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image">
    <img src="#" alt="Image" />
  </div>
</div>
        </div>
          <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="/nigeria/taxonomy/term/2646">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Press release</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
                    <div class="tile--created-date">
          <span class="icon-icon__calendar"></span>
          <span>22 March 2019</span>
        </div>
            <div class="tile--title" title="Image">
            <div class="field field--name-field-press-release-title field--type-text field--label-hidden field--item">Children living in protracted conflicts are three times more likely to die from water-related diseases than from violence – UNICEF</div>
      </div>
      <div class="tile--paragraph">
        <p></p>
      </div>
      <div class="tile--button">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Visit the page</span>      </div>
    </div>
  </a>
</div>
</div>
<div class="mosaic--tile mosaic--tile--press-release col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
  <a href="index.php" title="Image" class="mosaic-tile-lk" data-action="index.html" data-tracked-component="cta" data-bound="click" data-label="Visit the page">
              <div class="tile--image">
            <div class="field field--name-field-press-release-media field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image"  aria-label="Image" role="img">
    <img src="#" alt="Image" />
  </div>
</div>
        </div>
          <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="/nigeria/taxonomy/term/2646">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Press</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
                    <div class="tile--created-date">
          <span class="icon-icon__calendar"></span>
          <span>11 March 2019</span>
        </div>
            <div class="tile--title" title=">
            <div class="field field--name-field-press-release-title field--type-text field--label-hidden field--item">Unprecedented report reveals true cost of violence against children</div>
      </div>
      <div class="tile--paragraph">
        <p></p>
      </div>
      <div class="tile--button">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Visit the page</span>      </div>
    </div>
  </a>
</div>
</div>
<div class="mosaic--tile mosaic--tile--press-release col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
  <a href="index.php" title="" class="mosaic-tile-lk" data-action="index.html" data-tracked-component="cta" data-bound="click" data-label="Visit the page">
              <div class="tile--image">
            <div class="field field--name-field-press-release-media field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image"  aria-label="" role="img">
    <img src="#" alt="Image" />
  </div>
</div>
        </div>
          <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="#">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Press release</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
                    <div class="tile--created-date">
          <span class="icon-icon__calendar"></span>
          <span>06 March 2019</span>
        </div>
            <div class="tile--title" title=" Image">
            <div class="field field--name-field-press-release-title field--type-text field--label-hidden field--item">German Government Contributes to Quality Education for Conflict Affected Children in Nigeria</div>
      </div>
      <div class="tile--paragraph">
        <p></p>
      </div>
      <div class="tile--button">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Visit the page</span>      </div>
    </div>
  </a>
</div>
</div>
<div class="mosaic--tile mosaic--article col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
        <a href="index.php" title="A Carnage Before Dawn" class="mosaic-tile-lk" data-action="index.php" data-tracked-component="cta" data-bound="click" data-label="A Carnage Before Dawn">
          <div class="tile--image" aria-label="A Carnage Before Dawn" title="A Carnage Before Dawn">
            <div class="field field--name-field-article-hero field--type-entity-reference-revisions field--label-hidden field--item">
            <div class="field field--name-field-component-hero-stnd-img field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image"  aria-label="A doctor examining a child" role="img">
    <img src="#" alt="Image" />
  </div>
</div>
  </div>
      </div>
        <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="/nigeria/taxonomy/term/2596">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Article</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <defs>
        <path d="M0 0h24v24H0V0z" id="a"/>
    </defs>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
            <div class="tile--title" title="A Carnage Before Dawn">
            <div class="field field--name-field-article-short-title field--type-text field--label-hidden field--item">A Carnage Before Dawn</div>
      </div>
      <div class="tile--paragraph">
        <p>
            <div class="field field--name-field-article-summary field--type-text field--label-hidden field--item">A tribute to a brave aid worker who was killed during the Rann attack</div>
      </p>
      </div>
      <div class="tile--button" title="A Carnage Before Dawn">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Read the story</span>      </div>
    </div>
  </a>
</div>
</div>
<div class="mosaic--tile mosaic--tile--press-release col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
  <a href="index.php" title="Take action to eliminate female genital mutilation by 2030" class="mosaic-tile-lk" data-action="index.html" data-tracked-component="cta" data-bound="click" data-label="Visit the page">
              <div class="tile--image">
            <div class="field field--name-field-press-release-media field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image"  aria-label="A girl looks out of a window" role="img">
    <img src="#" alt="Image" />
  </div>
</div>
        </div>
          <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="/nigeria/taxonomy/term/2646">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Press release</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
                    <div class="tile--created-date">
          <span class="icon-icon__calendar"></span>
          <span>06 February 2019</span>
        </div>
            <div class="tile--title" title="Take action to eliminate female genital mutilation by 2030">
            <div class="field field--name-field-press-release-title field--type-text field--label-hidden field--item">Take action to eliminate female genital mutilation by 2030</div>
      </div>
      <div class="tile--paragraph">
        <p></p>
      </div>
      <div class="tile--button">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Visit the page</span>      </div>
    </div>
  </a>
</div>
</div>
<div class="mosaic--tile mosaic--article col-md-3">
  <div class="tile--content tile--bg-- tile--label--">
        <a href="index.php" title="" class="mosaic-tile-lk" data-action="index.php" data-tracked-component="cta" data-bound="click" data-label="Supporting a Breastfeeding Mother">
          <div class="tile--image" aria-label="S" title="">
            <div class="field field--name-field-article-hero field--type-entity-reference-revisions field--label-hidden field--item">
            <div class="field field--name-field-component-hero-stnd-img field--type-entity-reference field--label-hidden field--item">
  <div class="mosaic-image"  aria-label="" role="img">
    <img src="#" alt="Image" />
  </div>
</div>
  </div>
      </div>
        <div class="tile--sub-content" >
              <div class="tile--content-category">
            <div class="field field--name-field-shared-content-group field--type-entity-reference field--label-hidden field--item"><div about="/nigeria/taxonomy/term/2596">
  <div class="content-category-content">
      <h2>
            <div class="field field--name-name field--type-string field--label-hidden field--item">Article</div>
      </h2>
            <div class="field field--name-field-cgroup-icon field--type-entity-reference field--label-hidden field--item"><div>
            <div class="field field--name-field-cgroupicon-image field--type-svg-image-field field--label-hidden field--item">  <?xml version="1.0"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="100" viewBox="0 0 24 24" width="100">
    <defs>
        <path d="M0 0h24v24H0V0z" id="a"/>
    </defs>
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
</svg>
</div>
</div>
</div>
  </div>
</div>
</div>
        </div>
            <div class="tile--title" title="">
            <div class="field field--name-field-article-short-title field--type-text field--label-hidden field--item">Supporting a Breastfeeding Mother</div>
      </div>
      <div class="tile--paragraph">
        <p>
            <div class="field field--name-field-article-summary field--type-text field--label-hidden field--item">Adequate breastfeeding support for mothers could save many young lives</div>
      </p>
      </div>
      <div class="tile--button" title="">
        <span class="btn cta--mosaic"><span class="cta-mosaic-caret"></span> Read the story</span>      </div>
    </div>
  </a>
</div>
</div>
</div>
<div id="mosaic-ca1a0b1f-5b77-4f58-87a8-574cd98b6939-container-placeholder" data-drupal-selector="edit-load-more-container" class="form-group js-form-wrapper form-wrapper"></div>
<div id="mosaic-ca1a0b1f-5b77-4f58-87a8-574cd98b6939-mosaic-container" class="mosaic_load_more_container form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-load-more-mosaic-container"><a href="index.php" id="mosaic-ca1a0b1f-5b77-4f58-87a8-574cd98b6939-loadmore-link" class="btn cta--secondary use-ajax" data-drupal-selector="edit-load-more-container-link">Load me</a></div>
</div>
<input autocomplete="off" data-drupal-selector="form-pc3kfpneduqq6ecud-8xclwewhp16lqrfwgx8lj2lom" type="hidden" name="form_build_id" value="form-PC3kFpNEdUQQ6ecud_8xclwewhP16LQRfwGX8LJ2loM" /><input data-drupal-selector="edit-unicef-component-mosaic-automatic" type="hidden" name="form_id" value="unicef_component_mosaic_automatic" />
  </div>
  </div>
</form>
  </div>
  </div>
</div>
          </div>
  </div>
</div>
</div>
          </div>
      <div class="field field--name-field-featpage-secdry-blocks field--type-entity-reference-revisions field--label-hidden field--items">
              <div class="field--item">
  <div class="cta-block col-md-8 text--block blue_secondary">
    <div class="text--block-content">
                      <h3 class="cta-block-text-color-white">
            <div class="field field--name-field-component-ctablck-title field--type-string field--label-hidden field--item">header</div>
      </h3>
                    <h6 class="cta-block-text-color-white">
            <div class="field field--name-field-component-ctablck-text field--type-text-long field--label-hidden field--item"><p>Children</p></div>
      </h6>
          </div>
    <div class="cta-block--button">
      <div class="field field--name-field-component-ctablck-button field--type-entity-reference-revisions field--label-hidden field--items">
              <div class="field--item">
  <div class="cta-block--button">
  <a href="index.html" class="btn primary_white_blue" data-action="index.html" data-tracked-component="cta" data-bound="click" data-label="TAKE ACTION" title="TAKE ACTION">Love Me</a>
	</div>
</div>
          </div>
    </div>
</div>
</div>
          </div>
<div class="sharethis-wrapper"><span st_url="#" st_title="" class="st_facebook_large" displayText="facebook"></span>
<span st_url="#" st_title="UNICEF Nigeria" class="st_twitter_large" displayText="twitter"></span>
<span st_url="#" st_title="UNICEF Nigeria" class="st_linkedin_large" displayText="linkedin"></span>
<span st_url="#" st_title="UNICEF Nigeria" class="st_whatsapp_large" displayText="whatsapp"></span>
</div>
  </div>
              </section>
                </div>
  </div>
<div class="footer-wrapper">
  <div class="footer container">
                      <div class="region region-footer-left footer--left col-md-9">
      <nav role="navigation" aria-labelledby="block-footer-menu-menu" id="block-footer-menu" data-block-plugin-id="system_menu_block:footer">
  <span class="visually-hidden" id="block-footer-menu-menu">Footer</span>
        <div class="footer--links">
      <div class="footer--items col-xs-12 col-sm-4 col-md-4">
              <a href="index.php" title="Home">Home</a>
                    <div id="collapseFooter1">
          <ul class="l-footer__column">
                          <li>
                                  <a href="#" title="What we do" data-tracked-component="footer_link" data-bound="click" data-label="What we do" title="What we do">What we do</a>
                              </li>
                          <li>
                                  <a href="#" title="Research and reports" data-tracked-component="footer_link" data-bound="click" data-label="Research and reports" title="Research and reports">Research and reports</a>
                              </li>
                          <li>
                                  <a href="index.php" title="Stories" data-tracked-component="footer_link" data-bound="click" data-label="Stories" title="Stories">Stories</a>
                              </li>
                          <li>
                                  <a href="#" title="Press centre" data-tracked-component="footer_link" data-bound="click" data-label="Press centre" title="Press centre">Press centre</a>
                              </li>
                          <li>
                                  <a href="index.php" title="Take action" data-tracked-component="footer_link" data-bound="click" data-label="Take action" title="Take action">Take action</a>
                              </li>
                      </ul>
        </div>
          </div>
      <div class="footer--items col-xs-12 col-sm-4 col-md-4">
              <a href="#" title="About Us">About Us</a>
                    <div id="collapseFooter2">
          <ul class="l-footer__column">
                          <li>
                                  <a href="#" title="" data-tracked-component="footer_link" data-bound="click" data-label="Situation of women and children" title="Situation of women and children">Situation of women and children</a>
                              </li>
                          <li>
                                  <a href="#" title="" data-tracked-component="footer_link" data-bound="click" data-label="Where we work" title="Where we work">Where we work</a>
                              </li>
                          <li>
                                  <a href="index.php" title="" data-tracked-component="footer_link" data-bound="click" data-label="Job Vacancies" title="Job Vacancies">Job Vacancies</a>
                              </li>
                          <li>
                                  <a href="index.php" title="" data-tracked-component="footer_link" data-bound="click" data-label="Tiny stories" title="Tiny stories">Tiny stories</a>
                              </li>
                      </ul>
        </div>
          </div>
      <div class="footer--items col-xs-12 col-sm-4 col-md-4">
              <a href="index.php" title="">Me</a>
                    <div id="collapseFooter3">
          <ul class="l-footer__column">
                          <li>
                                  <a href="index.php" title="" data-tracked-component="footer_link" data-bound="click" data-label="UNICEF in West &amp; Central Africa" title="UNICEF in West &amp; Central Africa">UNICEF in West & Central Africa</a>
                              </li>
                          <li>
                                  <a href="#" title="" data-tracked-component="footer_link" data-bound="click" data-label="U-Report Nigeria" title="U-Report Nigeria">U-Report Nigeria</a>
                              </li>
                          <li>
                                  <a href="index.php" title="" data-tracked-component="footer_link" data-bound="click" data-label="UNICEF Connect" title="UNICEF Connect">UNICEF Connect</a>
                              </li>
                          <li>
                                  <a href="#" title="" data-tracked-component="footer_link" data-bound="click" data-label="Generation Unlimited" title="Generation Unlimited">Generation Unlimited</a>
                              </li>
                          <li>
                                  <a href="#" title="" data-tracked-component="footer_link" data-bound="click" data-label="Voices of Youth" title="Voices of Youth">Voices of Youth</a>
                              </li>
                      </ul>
        </div>
          </div>
  </div>
  </nav>
    </div>
                    <div class="region region-footer-right footer--right col-md-3">
    <div class="footer--social">
<div class="cta-block--button">
      <a href="#" class="btn donate_white_orange" data-action="donate_subdomain/donate/now.html" data-tracked-component="cta" data-bound="click" data-label="Become a donor">Become a donor</a>
  </div>
<nav role="navigation" aria-labelledby="block-social-menu-menu" id="block-social-menu" data-block-plugin-id="system_menu_block:social">
  <span class="visually-hidden" id="block-social-menu-menu">Social</span>
<div class="footer--social-follow">
    <ul class="social-media-links--platforms platforms inline horizontal" data-tracked-component="navigation_first_level" data-bound="null">
            <li>
        <a href="#" target="_blank" icon="fa-facebook" title="Follow us on Facebook" class="social-follow--item fa-facebook fa fa-lg" data-tracked-component="follow_option" data-label="Facebook" aria-label="Facebook" data-bound="click"></a>
      </li>
            <li>
        <a href="#" target="_blank" icon="fa-instagram" title="Follow us on Instagram" class="social-follow--item fa-instagram fa fa-lg" data-tracked-component="follow_option" data-label="Instagram" aria-label="Instagram" data-bound="click"></a>
      </li>
            <li>
        <a href="#" target="_blank" icon="fa-twitter" title="Follow us on Twitter" class="social-follow--item fa-twitter fa fa-lg" data-tracked-component="follow_option" data-label="Twitter" aria-label="Twitter" data-bound="click"></a>
      </li>
            <li>
        <a href="#" target="_blank" icon="fa-youtube-play" class="social-follow--item fa-youtube-play fa fa-lg" data-tracked-component="follow_option" data-label="YouTube" aria-label="YouTube" data-bound="click"></a>
      </li>
  </ul>
</div>
  </nav>
<nav role="navigation" aria-labelledby="block-footer-secondary-menu-menu" id="block-footer-secondary-menu" data-block-plugin-id="system_menu_block:footer-secondary">
  <span class="visually-hidden" id="block-footer-secondary-menu-menu">Footer Secondary</span>
        <div class="social-follow">
  <ul class="social-follow--links">
        <li>
      <a href="#" class="social-follow--copyright">Contact Us</a>
    </li>
        <li>
      <a href="index.php" class="social-follow--copyright">Legal</a>
    </li>
      </ul>
</div>
  </nav>
    </div>
  </div>
            </div>
</div>
  </div>
<script src="others/sites/unicef-org-nigeria/files/js/js_jy_EToWUc8U8d6z9Vz_lR87O2EWZqefyk64Z9_cQ4ls.js"></script>
<script src="button/buttons.js"></script>
<script src="others/sites/unicef-org-nigeria/files/js/js_snoCDdf5YXUq8qlzulReolCw7v5GP2KqO7p7zPGzFBk.js"></script>
</html>
