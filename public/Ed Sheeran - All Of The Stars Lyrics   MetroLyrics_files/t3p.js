//v102 (c) 2008-2014 33Across Inc. All Rights Reserved

Tynt=window.Tynt||[];Tynt.m=Tynt.m||[];Tynt.n=Tynt.n||[];Tynt.viewTypes={copyAttribution:"copyAttribution",addressBar:"addressBar",speedShareFacebook:"speedShareFacebook",speedShareTwitter:"speedShareTwitter",speedSharePinterest:"speedSharePinterest"};
(function(){function d(){var a=window.location.hash.match(/([ia]xzz)=?([^?&$#]*)&?([fwi])?/);return a&&a.length>2?{type:a[3]||a[1],guid:a[2]}:{}}var e={ixzz:Tynt.viewTypes.copyAttribution,axzz:Tynt.viewTypes.addressBar,f:Tynt.viewTypes.speedShareFacebook,w:Tynt.viewTypes.speedShareTwitter,i:Tynt.viewTypes.speedSharePinterest};Tynt.addTextCopyListener=function(a){Tynt.m.push(function(b,c,g,f){setTimeout(function(){f&&a(b.g,c)},1);return true})};Tynt.addImageCopyListener=function(a){Tynt.n.push(function(b,
c){setTimeout(function(){a(b.g,c)},1);return true})};Tynt.addViewListener=function(){};Tynt.getViewGuid=function(){return Tynt.getViewType()&&d().guid||""};Tynt.getViewType=function(){var a=d(),b=e[a.type]||"";return b!=Tynt.viewTypes.addressBar||document.cookie.indexOf("tracerabg="+a.guid)==-1?b:""}})();
