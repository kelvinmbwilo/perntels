window.cf||(cf={adunits:[],engage_calls:[],used_campaigns:[],used_formats:[],formats_counter:[],companion_formats:[],companion_campaigns:[],vars:{bring_back_timeout:4E3,current_adunit:!1,priority_start:!1,cancel_impression:[],flex_callbacks:[],flex_containers:["cf_container","cf_flex_mb","cf_overlay"],protocol:"http:",pre_code:{},position:0},async_demo:{locked:!1,opts_queue:[]},run:function(a){var b=location.href.match("cf_ad=([0-9a-z|]*)");cf.vars.demo_tag=b&&b[1]||"";b=location.href.match("position=([0-9]*)");
cf.vars.position=b&&b[1]||0;if(window.cf_async){for(var b=document.getElementsByTagName("script"),c,d=b.length-1;0<=d;d--)if(-1<b[d].src.indexOf("/showads/showad.")){c=b[d];break}if(c.async){cf_async=!1;return}}a=a||this.init_vars();this.once_per_page(a);window.cf_flex?cf.vars.ran_flex||(this.show_ad(cf.adunits[a]),this.vars.ran_flex=!0,cf.is_mobile()&&(this.vars.bring_back_timeout=1E4),cf_flex=!1):this.show_ad(cf.adunits[a])},url:function(){var a="";if(top===self)a=location.href.replace(location.hash,
"");else if(window.cf_domain)a=cf_domain;else try{a=top.location.href.replace(top.location.hash,"")}catch(b){a=location.href.replace(location.hash,"")}a||(a="");return a.substring(0,512)},isset:function(a){return"undefined"!=typeof window[a]&&null!==window[a]},above_fold:function(){var a="cf_"+(new Date).getTime()+Math.floor(1E4*Math.random());document.write('<div style="width: 1px; height: 1px;" id="'+a+'">.</div>');var a=document.getElementById(a),b=this._above_fold(a);a&&a.parentNode.removeChild(a);
return b},_above_fold:function(a){for(var b=0;a;)b+=a.offsetTop,a=a.offsetParent;return b<=this.get_viewport().height-50},get_viewport:function(){return window.innerWidth?{width:window.innerHeight,height:window.innerHeight}:document.documentElement&&document.documentElement.clientWidth?{width:document.documentElement.clientWidth,height:document.documentElement.clientHeight}:{width:document.body.clientWidth,height:document.body.clientHeight}},valid_flash:function(){try{return(new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7")).GetVariable("$version"),
!0}catch(a){return!!navigator.mimeTypes["application/x-shockwave-flash"]}},supports_cookies:function(){var a="cookie"in document&&(0<document.cookie.length||-1<(document.cookie="test").indexOf.call(document.cookie,"test"));this.get_browser().indexOf("Safari");return a},set_cookie:function(a,b,c){var d=new Date;d.setDate(d.getDate()+c);document.cookie=a+"="+escape(b)+";path=/"+(null==c?"":";expires="+d.toGMTString())+";domain=."+top.location.host.replace(/www\./i,"")},get_cookie:function(a){if(0<document.cookie.length){var b=
document.cookie.indexOf(a+"=");if(-1<b)return b=b+a.length+1,a=document.cookie.indexOf(";",b),-1===a&&(a=document.cookie.length),unescape(document.cookie.substring(b,a))}return""},get_browser:function(){var a=navigator.userAgent.match(/version\/([\.\d]+)/i),b=navigator.userAgent.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);!b&&(b=navigator.userAgent.match(/Trident\/.*rv:[0-9]{1,}[\.0-9]{0,}/i))&&(b=[b,"MSIE"],a=navigator.userAgent.match(/rv:([\.\d]+)/i));return b?b&&a?b[1]+"_"+
a[1].split(".")[0]:b[1]+"_"+b[2].split(".")[0]:navigator.appName+"_0"},get_os:function(){if(navigator.userAgent.match(/Android/i))return"Android";var a=navigator.platform.match(/Win|Mac|iPod|iPad|iPhone|BlackBerry|Nokia|Linux|Pike|Playstation 3|PSP|Symbian|Nintendo Wii|Nintendo 3DS|Nintendo DSi/i);return a?"Win"===a[0]?"Windows":a[0]:"Other"},get_host:function(){return window.cf_hostname?cf_hostname:-1<location.host.indexOf(".local")?"srv.clickfuse.local":-1<location.host.indexOf("staging.")?"srv.staging.clickfuse.com":
"srv.clickfuse.com"},blacklisted:function(){var a="fuck;porn;cunt;slut;pussy;piss; ass;nigger;vagina;penis;cock;fag; cum;tits; anal;twat".split(";"),b=document.body?(document.body.textContent||document.body.innerText||document.body.innerHTML).toLowerCase():this.vars.search+" "+this.vars.artist+" "+this.vars.song,c;for(c in a)if(a.hasOwnProperty(c)&&-1<b.indexOf(a[c]))return!0;return!1},is_mobile:function(){return navigator.userAgent.match(/iPad|iPhone|iPod|Android|j2me|WebOS|PalmOS|BlackBerry|Windows CE|NetFront|Opera Mini|IEMobile/i)},
add_load_event:function(a){/c/.test(document.readyState)?a():setTimeout(function(){cf.add_load_event(a)},9);return this},add_event:function(a,b,c){a.addEventListener?a.addEventListener(b,c,!0):a.attachEvent?a.attachEvent("on"+b,c):a["on"+b]=c},include:function(a,b,c){var d=document.getElementsByTagName("script")[0],e=document.createElement("script");e.async=!0;e.src=("http"==a.substring(0,4)?"":cf.vars.protocol)+a;"function"===typeof b&&(c=b,b=!1);b&&(e.id=b);c&&(e.readyState?e.onreadystatechange=
function(){if("loaded"==e.readyState||"complete"==e.readyState)e.onreadystatechange=null,c()}:e.onload=c);d.parentNode.insertBefore(e,d)},engage:function(a,b,c,d){var e=b+"\n"+c+"\n"+d;e in this.engage_calls||(this.engage_calls[e]=1,cf.pixel("//"+cf.get_host()+"/showads/track/eng.php?cid=0&aid="+encodeURIComponent(a)+"&adid="+b+"&creative_id="+c+"&search="+encodeURIComponent(this.vars.search)+"&artist="+encodeURIComponent(this.vars.artist)+"&song="+encodeURIComponent(this.vars.song)+"&p="+encodeURIComponent(cf.get_os())+
"&t="+(new Date).getTime()+"&cs="+(this.supports_cookies()?1:0)+"&uri="+cf.url()+(""!==cf.vars.demo_tag?"&test=true":"")+"&sub="+encodeURIComponent(d),0))},pixel:function(a,b){var c=document.createElement("img");c.src=("http"==a.substring(0,4)?"":cf.vars.protocol)+a;c.style.width="1px";c.style.height="1px";c.style.borderStyle="none";c.style.position="absolute";document.body.appendChild(c)},init_vars:function(){var a=window.monetized_ad_id?monetized_ad_id:cf_adunit_id;cf.adunits[a]={};cf.vars.protocol=
"https:"===document.location.protocol?"https:":"http:";this.vars.artist=this.vars.artist||(window.monetized_ad_client_artist||window.cf_page_artist).replace("Insert artist variable here","");this.vars.song=this.vars.song||(window.monetized_ad_client_song||window.cf_page_song).replace("Insert song variable here","");this.vars.search=this.vars.search||window.cf_page_search||"";this.vars.subtag=this.vars.subtag||window.cf_page_subtag||"";!this.vars.artist&&window.cf_page_genre&&(this.vars.artist=window.cf_page_genre);
this.vars.page_header=window.cf_page_header;this.vars.page_footer=window.cf_page_footer;this.vars.page_element=window.cf_page_element;cf.adunits[a]={adunit_id:a,artist:this.vars.artist,song:this.vars.song,search:this.vars.search,subtag:this.vars.subtag,page_header:this.vars.page_header,page_footer:this.vars.page_footer,page_element:this.vars.page_element};monetized_ad_id=null;return a},once_per_page:function(a){this.vars.called_once||(this.vars.called_once=!0,window._comscore=window._comscore||[],
_comscore.push({c1:"8",c2:"6772046",c3:""}),-1<",39381091,39381085,".indexOf(","+a+",")&&_comscore.push({c1:"2",c2:"6772046",c3:"",c4:document.location.href.replace(/http\:\/\//,"")}),cf.include(("https:"==document.location.protocol?"https://sb":"http://b")+".scorecardresearch.com/beacon.js"),cf_criteo_content=this.get_cookie("cto_rtt"),cf.include("//rtax.criteo.com/delivery/rta/rta.js?netId=1912&cookieName=cto_rtt&varName=cf_criteo_content&rnd="+Math.random()),window.tf_exelate=function(a){a=a.segments?
a.segments.toString():"";""===a||cf.vars.logged_exelate||(cf.vars.logged_exelate=!0,cf.pixel("//"+cf.get_host()+"/showads/track/exe.php?search="+encodeURIComponent(cf.vars.search)+"&artist="+encodeURIComponent(cf.vars.artist)+"&song="+encodeURIComponent(cf.vars.song)+"&segments="+encodeURIComponent(a)+"&uri="+cf.url()+"&t="+(new Date).getTime()))})},show_ad:function(a){if(window.cf_skip_showad)cf_skip_showad=!1;else if(a.adunit_id){var b=cf.getAdUrl(a);cf.vars.priority_start=!1;a.div_id?cf.include(b):
document.write('<script src="'+b+'">\x3c/script>')}},getAdUrl:function(a){var b=cf.vars.protocol+"//"+(a.hostname||cf.get_host())+"/showads/adunit.php?";a={id:a.adunit_id,di:a.div_id||"",subtag:a.subtag||cf.vars.subtag||"",search:a.search||cf.vars.search||"",artist:a.artist||cf.vars.artist||"",song:a.song||cf.vars.song||"",f:cf.valid_flash(),vpw:cf.get_viewport().width,abf:a.div_id?!1:cf.above_fold(),d:a.d||cf.vars.demo_tag,cs:cf.supports_cookies()?1:0,p:cf.get_os(),bl:cf.blacklisted(),ro:window.cf_override_sid||
"",uc:cf.array_unique(cf.used_campaigns),uf:cf.array_unique(cf.used_formats),position:cf.vars.position,cf:cf.array_unique(cf.companion_formats),cc:cf.array_unique(cf.companion_campaigns),kv:window.cf_criteo_content?"criteo="+cf_criteo_content:"",ps:cf.vars.priority_start||1,url:a.domain||cf.url(),t:+new Date};return b+cf.buildQuery(a)},buildQuery:function(a){var b=[],c;for(c in a)b.push(c+"="+encodeURIComponent(a[c]));return b.join("&")},processAsyncQueue:function(){cf.async_demo.opts_queue.length&&
cf.showAsyncAd(cf.async_demo.opts_queue.shift())},showAsyncAd:function(a){if(cf.vars.demo_tag&&cf.async_demo.locked)cf.async_demo.opts_queue.push(a);else{cf.async_demo.locked=!0;var b=a.adunit_id;!a.artist&&a.genre&&(a.artist=a.genre);cf.adunits[b]={adunit_id:b,div_id:a.div_id,artist:(a.artist||"").replace("Insert artist variable here",""),song:(a.song||"").replace("Insert artist variable here",""),search:a.search||"",subtag:a.subtag||"",d:a.d,hostname:a.hostname||"",domain:a.domain||""};if(a.flex){if(cf.vars.ran_flex)return;
cf.adunits[b].page_header=cf.vars.page_header=a.page_header;cf.adunits[b].page_footer=cf.vars.page_footer=a.page_footer;cf.adunits[b].page_element=cf.vars.page_element=a.page_element}cf.show_ad(cf.adunits[b])}},writeAsync:function(a,b){var c=document.getElementById(a);c.innerHTML+=b;var c=c.getElementsByTagName("script"),d;for(d in c)c[d].src&&cf.include(c[d].src),eval(c[d].innerHTML)},show_flex_ad:function(a){var b=function(){cf.include("//"+cf.get_host()+"/showads/js/cf.flex.min.js",function(){cf.add_load_event(a)})},
c=window.jQuery?jQuery.fn.jquery.replace(/\./g,""):0;183<c||140>c&&14!==c?cf.include("//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js",function(){jQuery.noConflict();b()}):b()},checkFlexFallBack:function(){if(this.vars.cancel_impression[this.vars.pre_code.creative_id]){cf_flex=!0;this.vars.ran_flex=!1;for(id in this.vars.flex_containers){var a=document.getElementById(this.vars.flex_containers[id]);a&&a.parentNode.removeChild(a)}this.fall_back(this.vars.pre_code.adunit_id,this.vars.pre_code.bb_url,
this.vars.pre_code.priority_restart)}else this.vars.pre_code.callback()},asyncFlexFallBack:function(a,b,c){cf_flex=cf_async=!0;this.vars.ran_flex=!1;for(id in this.vars.flex_containers){var d=document.getElementById(this.vars.flex_containers[id]);d&&d.parentNode.removeChild(d)}cf.adunits[this.vars.pre_code.adunit_id].div_id=c;this.fall_back(this.vars.pre_code.adunit_id,a,b)},fall_back:function(a,b,c){cf.pixel(b);""===this.vars.demo_tag&&(cf.vars.priority_start=c,cf.run(a))},array_unique:function(a){var b=
{},c=[],d;for(d in a)!a.hasOwnProperty(d)||a[d]in b||(c.push(a[d]),b[a[d]]=1);return c},increment:function(a){"undefined"===typeof cf.formats_counter[a]?cf.formats_counter[a]=1:++cf.formats_counter[a]},feedback:function(a){a=a||{};a="http://clickfuse.com/misc/feedback.php?sid="+encodeURIComponent(cf.flex.adunit_id)+"&campaign="+encodeURIComponent(a)+"&search="+cf.vars.search+"&artist="+cf.vars.artist+"&song="+cf.vars.song+"&width="+screen.width+"&height="+screen.height+"&viewport="+window.innerWidth+
"x"+window.innerHeight;window.open(a,"feedback_window","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=750,height=500,top="+(screen.height/2-250)+",left="+(screen.width/2-375))}},cf.ie=function(){var a=null,b=null,a=null,c;c=document.documentMode;try{document.documentMode=""}catch(d){}a="number"==typeof document.documentMode?!0:eval("/*@cc_on!@*/!1");try{document.documentMode=c}catch(e){}if(a){var a=/^(?:.*?[^a-zA-Z])??(?:MSIE|IE)\s*(\d+\.?\d*)/i.test(navigator.userAgent||
"")?parseFloat(RegExp.$1,10):null,f=document.createElement("div"),g=["{45EA75A0-A269-11D1-B5BF-0000F8051515}","{3AF36230-A269-11D1-B5BF-0000F8051515}","{89820200-ECBD-11CF-8B85-00AA005B4383}"];try{f.style.behavior="url(#default#clientcaps)"}catch(h){}for(c=0;c<g.length;c++){try{b=f.getComponentVersion(g[c],"componentid").replace(/,/g,".")}catch(k){}if(b)break}b=parseFloat(b||"0",10);a=document.documentMode||a}else return!1;return a||b||a}(),cf.lotame={call:function(){this.called||cf.is_mobile()||
(this.called=!0,cf.include("//ad.crwdcntrl.net/5/c=1970/pe=y/callback=cf.lotame.receive"))},receive:function(a){if(a&&a.Profile&&!this.received){this.received=!0;var b=[],c;for(c in a.Profile.Audiences.Audience)b.push(a.Profile.Audiences.Audience[c].id);cf.pixel("//"+cf.get_host()+"/showads/track/lotame.php?audiences="+b+"&cs="+(cf.supports_cookies()?1:0)+"&t="+(new Date).getTime())}},send:function(a,b){cf.is_mobile()||(this.sent||(this.sent=!0,window.cc_artist=cf.vars.artist,window.cc_song=cf.vars.song,
window.cc_search=cf.vars.search,cf.include("//tags.crwdcntrl.net/c/1970/cc.js?ns=_cc1970","LOTCC_1970",function(){window._cc1970&&(_cc1970.add("ctax","Music^Artists^"+cc_artist.substring(0,1)+"^"+cc_artist),_cc1970.bcp())})),cf.pixel("http://bcp.crwdcntrl.net/5/c=1970/ctax=Placements^"+b+"^^"+a))}});cf.run();