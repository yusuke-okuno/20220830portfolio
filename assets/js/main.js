'use strict';

{
  document.addEventListener("DOMContentLoaded", () => {

    document.getElementsByClassName("toggle_btn")[0].addEventListener('click', (e) => {
      document.getElementsByClassName("header-inner")[0].classList.toggle("open");
    });

  });
}