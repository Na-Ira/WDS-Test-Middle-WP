(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const splide = new Splide(".splide", {
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
    });

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

    splide.mount(window.splide.Extensions);
  });
})();
