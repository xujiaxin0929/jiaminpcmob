(function(window){var svgSprite="<svg>"+""+'<symbol id="icon-upload" viewBox="0 0 1026 1024">'+""+'<path d="M943.604 869.345H81.449C36.538 869.345 0 832.807 0 787.896V197.03c0-44.911 36.538-81.449 81.449-81.449h862.155c44.911 0 81.449 36.538 81.449 81.449v590.866c0 44.911-36.538 81.449-81.449 81.449zM81.449 156.821c-22.172 0-40.209 18.038-40.209 40.209v590.866c0 22.172 18.038 40.209 40.209 40.209h862.155c22.172 0 40.209-18.038 40.209-40.209V197.03c0-22.172-18.038-40.209-40.209-40.209H81.449z"  ></path>'+""+'<path d="M624.198 377.068c-47.609 0-86.341-38.733-86.341-86.342s38.733-86.342 86.341-86.342c47.61 0 86.342 38.733 86.342 86.342 0.001 47.609-38.732 86.342-86.342 86.342z m0-131.445c-24.869 0-45.102 20.233-45.102 45.103 0 24.869 20.232 45.102 45.102 45.102 24.869 0 45.103-20.233 45.103-45.102 0-24.869-20.233-45.103-45.103-45.103zM929.497 708.017L766.85 545.37c-4.075-4.075-9.43-6.079-14.77-6.03-5.341-0.049-10.697 1.956-14.771 6.03l-99.192 99.192c-0.217 0.217-0.405 0.452-0.611 0.676L408.768 416.5c-4.096-4.096-9.487-6.098-14.856-6.026-5.368-0.072-10.76 1.93-14.856 6.026L91.975 703.581c-8.052 8.052-8.052 21.108 0 29.161 8.052 8.052 21.109 8.053 29.161 0l272.777-272.777 325.171 325.172c8.052 8.052 21.109 8.052 29.161 0l0.001-0.001c8.052-8.052 8.052-21.109 0-29.161l-81.642-81.642c0.224-0.206 0.458-0.394 0.676-0.611l84.801-84.801 148.257 148.257c8.052 8.052 21.109 8.052 29.161 0l0.001-0.001c8.052-8.051 8.052-21.108-0.001-29.16z"  ></path>'+""+"</symbol>"+""+"</svg>";var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)