var HELPERS={ajaxGet:function(e,o,n){$.get(e,o||{},n)},ajaxPost:function(e,o,n,t,i){$.post(e,o||{},n).fail(t).always(i)},spliceObject:function(e,o){var n=0,t=0,i={};for(index in e)e.hasOwnProperty(index)&&(n>=o[0]&&t<o[1]&&(i[index]=e[index],delete e[index],t++),n++);return i},countObjectArgs:function(e){var o=0;for(index in e)e.hasOwnProperty(index)&&o++;return o},setCookie:function(e,o){var n=$.param(o,!0);document.cookie=e+"="+n+";path=/"},getCookie:function(e){var o,n,t,i,c;for(t=0;t<=document.cookie.length;){if(i=document.cookie.indexOf("=",t),-1==(c=document.cookie.indexOf(";",t))&&(c=document.cookie.length),i>=c||-1==i?(o=document.cookie.substring(t,c),n=""):(o=document.cookie.substring(t,i),n=document.cookie.substring(i+1,c)),o==e)return this.asObject(n);t=c+2}return!1},asObject:function(e){for(var o={},n=decodeURIComponent(e).split("&"),t=0;t<n.length;t++){var i=n[t].split("=");void 0==o[i[0]]?o[i[0]]=i[1]:"object"==typeof o[i[0]]?o[i[0]].push(i[1]):o[i[0]]=[o[i[0]],i[1]]}return o},removeCookie:function(e){document.cookie=e+"=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT",document.cookie=e+"; expires=Thu, 01-Jan-1970 00:00:01 GMT"},getLocalizedURL:function(e){for(var o=["es","en"],n=window.location.pathname.slice(1).split("/"),t=!1,i=0;i<o.length;i++)if(n[0]==o[i]){t=!0;break}return t?"/"+n[0]+e:e}};