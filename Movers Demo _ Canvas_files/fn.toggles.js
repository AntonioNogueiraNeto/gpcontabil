SEMICOLON.Core.getVars.fn.toggles=e=>{var t=SEMICOLON.Core;if(t.initFunction({class:"has-plugin-toggles",event:"pluginTogglesReady"}),(e=t.getSelector(e,!1)).length<1)return!0;e.forEach(t=>{let o=t.getAttribute("data-speed")||300,e=t.getAttribute("data-state");"open"!=e?t.querySelector(".toggle-content").classList.add("d-none"):(t.classList.add("toggle-active"),CanvasAnimSlideDown(t.querySelector(".toggle-content"),Number(o))),t.querySelector(".toggle-header").onclick=e=>{t.classList.contains("toggle-active")?(t.classList.remove("toggle-active"),CanvasAnimSlideUp(t.querySelector(".toggle-content"),Number(o),()=>{t.querySelector(".toggle-content").classList.add("d-none")})):(t.classList.add("toggle-active"),t.querySelector(".toggle-content").classList.remove("d-none"),CanvasAnimSlideDown(t.querySelector(".toggle-content"),Number(o))),e.preventDefault()}})};const CanvasAnimSlideUp=(e,t=500,o=!1)=>{e.style.transitionProperty="height, margin, padding",e.style.transitionDuration=t+"ms",e.style.boxSizing="border-box",e.style.height=e.offsetHeight+"px",e.offsetHeight,e.style.overflow="hidden",e.style.height=0,e.style.paddingTop=0,e.style.paddingBottom=0,e.style.marginTop=0,e.style.marginBottom=0,window.setTimeout(()=>{e.style.display="none",e.style.removeProperty("height"),e.style.removeProperty("padding-top"),e.style.removeProperty("padding-bottom"),e.style.removeProperty("margin-top"),e.style.removeProperty("margin-bottom"),e.style.removeProperty("overflow"),e.style.removeProperty("transition-duration"),e.style.removeProperty("transition-property"),"function"==typeof o&&o()},t)},CanvasAnimSlideDown=(e,t=500,o=!1)=>{e.style.removeProperty("display");let r=window.getComputedStyle(e).display;"none"===r&&(r="block"),e.style.display=r;var n=e.offsetHeight;e.style.overflow="hidden",e.style.height=0,e.style.paddingTop=0,e.style.paddingBottom=0,e.style.marginTop=0,e.style.marginBottom=0,e.offsetHeight,e.style.boxSizing="border-box",e.style.transitionProperty="height, margin, padding",e.style.transitionDuration=t+"ms",e.style.height=n+"px",e.style.removeProperty("padding-top"),e.style.removeProperty("padding-bottom"),e.style.removeProperty("margin-top"),e.style.removeProperty("margin-bottom"),window.setTimeout(()=>{e.style.removeProperty("height"),e.style.removeProperty("overflow"),e.style.removeProperty("transition-duration"),e.style.removeProperty("transition-property"),"function"==typeof o&&o()},t)},CanvasAnimSlideToggle=(e,t=500,o=!1)=>("none"===window.getComputedStyle(e).display?CanvasAnimSlideDown:CanvasAnimSlideUp)(e,t,o);