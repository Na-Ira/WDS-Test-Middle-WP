(function () {
  "use strict";

  // Variable for storing the state (play/pause) of each player separately
  const playerStates = {};

  document.addEventListener("DOMContentLoaded", function () {
    const containerVideos = document.querySelectorAll(".container-video");


    containerVideos.forEach(function (containerVideo) {
      const video = containerVideo.querySelector(".my-video");
      const contentVideo = containerVideo.querySelector(".content-video");

      const player = videojs(video, {
        controls: true,
        preload: "auto",
        loop: false,
        responsive: true,
        fill: true,
        muted: true,
        autoplay: true,
      });

      playerStates[player.id()] = {
        clickCount: 0,
      };

      player.on("play", function () {
        contentVideo.classList.remove("is-visible");
      });

      player.on("pause", function () {
        contentVideo.classList.add("is-visible");
      });

      /**
       * Click counter
       * 1 - stops video, shows text block
       * 2 - play video, hide text block
       * 3 - stops video, shows text block
       * 4 - play video, hide text block, resets counter and start new loop
       */
      const clickHandler = function () {
        const clickCount = playerStates[player.id()].clickCount;
        if (clickCount === 0) {
          player.pause();
          contentVideo.classList.add("is-visible");
          playerStates[player.id()].clickCount++;
        } else if (clickCount === 1) {
          player.play();
          contentVideo.classList.remove("is-visible");
          playerStates[player.id()].clickCount++;
        } else if (clickCount === 2) {
          player.pause();
          contentVideo.classList.add("is-visible");
          playerStates[player.id()].clickCount++;
        } else if (clickCount === 3) {
          player.play();
          contentVideo.classList.remove("is-visible");
          playerStates[player.id()].clickCount = 0;
        }
        return false;
      };

      containerVideo.addEventListener("click", clickHandler);

      // Start video play without clicking
      player.play();
    });
  });
})();
