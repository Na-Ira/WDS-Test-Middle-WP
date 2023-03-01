(function () {
   "use strict";
 
   document.addEventListener("DOMContentLoaded", function () {

      const splides = document.querySelectorAll('.splide');
      // query slider elements: are there any splide elements?
      if(splides.length) {
         // process all instances
         for(let i=0; i<splides.length; i++) {
            let splideElement = splides[i];
            //if no options are defined by 'data-splide' attribute: take these default options
            let splideDefaultOptions = 
            {
               type: "loop",
               gap: "2.5rem",
               pagination: true,
               perPage: 1,
               perMove: 1,
               trimSpace: "move",
               focus: "center",
               cover: true,
               video: {
                  loop: false,
                  mute: true,
               },
            };
            /**
             * 3.2 if options are defined by 'data-splide' attribute: default options will we overridden
             * see documentation: https://splidejs.com/guides/options/#by-data-attribute
             **/
            const splide = new Splide( splideElement, splideDefaultOptions ); 
            /**
            * Progress bar
            */
            const bar = splide.root.querySelector(".my-slider-progress-bar");
            // Updates the bar width whenever the carousel moves:
            splide.on("mounted move", function () {
               let end = splide.Components.Controller.getEnd() + 1;
               let rate = Math.min((splide.index + 1) / end, 1);
               bar.style.width = String(100 * rate) + "%";
            });
            /**
            * Pagination
            * */
            splide.on("pagination:mounted", function (data) {
               data.list.classList.add("splide__pagination--number");
         
               data.items.forEach(function (item) {
                  item.button.textContent = "0" + String(item.page + 1);
               });
            });
            // 3. mount/initialize this slider
            splide.mount(window.splide.Extensions);
         }
      }
   });
 })();
 