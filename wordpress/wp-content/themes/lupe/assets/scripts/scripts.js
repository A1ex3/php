"use strict";!function(o){o(function(){o(".site-menu-btn").on("click",function(e){e.preventDefault(),o(".menu-wrapper").addClass("open")}),o(".site-menu-btn--close").on("click",function(e){e.preventDefault(),o(".menu-wrapper").removeClass("open")});var e=o("#main-site-menu"),n=o("#show-mobile-menu-btn"),t=e.find(".menu-item a"),u=t[0],i=t[t.length-1];o(document).keydown(function(e){"Tab"!==e.key&&9!==e.keyCode||!n.is(":visible")||document.activeElement!==i||(u.focus(),e.preventDefault())})})}(jQuery);
//# sourceMappingURL=scripts.js.map
