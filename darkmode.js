$(document).ready(function () {
    $('#theme_toggle').on('click', function () {
      if ($('body').hasClass('dark-theme')) {
        $(this).toggleClass('btn-light');
        $(this).addClass('btn-dark');
        
        $('body').toggleClass('dark-theme');
        $('.card').toggleClass('dark-theme');
        localStorage.setItem("mode", "light-theme");
      } else {
        $(this).toggleClass('btn-light');
        $(this).removeClass('btn-dark');
       
        $('body').toggleClass('dark-theme');
        $('.card').toggleClass('dark-theme');
        localStorage.setItem("mode", "dark-theme");
      }
    })
    //check for localStorage, add as browser preference if missing
    if (!localStorage.getItem("mode")) {
      if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
        localStorage.setItem("mode", "dark-theme");
      } else {
        localStorage.setItem("mode", "light-theme");
      }
    }
    //set interface to match localStorage
    if (localStorage.getItem("mode") == "dark-theme") {
      $('#theme_toggle').removeClass('btn-dark');
      $('#theme_toggle').addClass('btn-light');
      $('body').addClass('dark-theme');
      $('.card').addClass('dark-theme');
      
      document.getElementById("theme_toggle").checked = true;
    } else {
      $('#theme_toggle').addClass('btn-dark');
      $('#theme_toggle').removeClass('btn-light');
      $('body').removeClass('dark-theme');
      $('.card').removeClass('dark-theme');
     
      document.getElementById("theme_toggle").checked = false;
    };
  });

  var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
  var ps = new PerfectScrollbar(myCustomScrollbar);

  var scrollbarY = myCustomScrollbar.querySelector('.ps__rail-y');

  myCustomScrollbar.onscroll = function () {
    scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 400px; right: ${-this.scrollLeft}px`;
  }