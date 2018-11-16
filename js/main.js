$(document).ready(function() {

  /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
  }

  $('.our_mission h3').waypoint(function(direction) {
      $('.our_mission h3').addClass('animated fadeInUp');
    }, {
      offset: "75%"
    });

  $('.logo').waypoint(function(direction) {
      $('.logo').addClass('animated pulse');
    }, {
      offset: "50%"
    });

    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
      }, {
        offset: "75%"
    });


      $('.js--wp-2').waypoint(function(direction) {
          $('.js--wp-2').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-3').waypoint(function(direction) {
          $('.js--wp-3').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });


      $('.js--wp-4').waypoint(function(direction) {
          $('.js--wp-4').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-5').waypoint(function(direction) {
          $('.js--wp-5').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-6').waypoint(function(direction) {
          $('.js--wp-6').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-7').waypoint(function(direction) {
          $('.js--wp-7').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-8').waypoint(function(direction) {
          $('.js--wp-8').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-9').waypoint(function(direction) {
          $('.js--wp-9').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-10').waypoint(function(direction) {
          $('.js--wp-10').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-11').waypoint(function(direction) {
          $('.js--wp-11').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

      $('.js--wp-12').waypoint(function(direction) {
          $('.js--wp-12').addClass('animated fadeIn');
        }, {
          offset: "75%"
      });

});
