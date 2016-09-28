/*

  INFO!!!
  This page was initially developed to fullfil one of the challenges proposed by Free Code Camp (https://www.freecodecamp.com)
  Code by Ronie Meque
  Available on https://github.com/roniemeque/SitePessoal 
  You are free to edit and share as long as give the proper credits (at least mention under the hood)

  Resources used that are NOT mine:
  Bootstrap; Jquery; Waypoints; Smooth Scroll function by css-tricks.com;


*/

  var count=0;
//Progress bar and go top
$(window).scroll(function(){
	hgt = $(document).height() - $(window).height();
	scroll = $(window).scrollTop();
	pbarval = (100*scroll)/hgt;
	$("#pgbar").val(pbarval);
	$('#pgbar').attr('aria-valuenow', pbarval).css('width',pbarval+"%");

  if (pbarval==100) {
    count++;
  }

  x = $("body").scrollTop();
  $("#debugger").text(x + " , " + scroll + " , " + parseFloat(pbarval.toFixed(2))+"% , " + count );
});
//Progress bar and go top

//Smooth scroll
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 50
          }, 1000);
          return false;
        }
      }
    });
});
//Smooth scroll

//waypoints

//go top display
var waypoint = new Waypoint({
  element: document.getElementById('wp1'),
  handler: function(direction) {
  	if (direction=="down") {
      $(".gotop").fadeIn(500);
  	}
  	else{
  		$(".gotop").fadeOut(500);
      $(".about > .container").fadeOut(500);
      $(".portfolio > .container").fadeOut(500);
      $(".contact > .container");
  	} 
  },
  offset: 150
})

//go top color
var waypoint1 = new Waypoint({
  element: document.getElementById('portfolio'),
  handler: function(direction) {
  	if (direction=="down") {
  		$("#gotopa").css("color", "#000");
  	}
  	else{
  		$("#gotopa").css("color", "#fff");
  	}
    
  },
  offset: $(window).height() - 50
})

var waypoint2 = new Waypoint({
  element: document.getElementById('contact'),
  handler: function(direction) {
  	if (direction=="down") {
  		$("#gotopa").css("color", "#fff");
  	}
  	else{
  		$("#gotopa").css("color", "#000");
  	}
    
  },
  offset: $(window).height() - 50
})

//navbar tag a color
var waypoint3 = new Waypoint({
  element: document.getElementById('portfolio'),
  handler: function(direction) {
    if (direction=="down") {
      $(".nava").css("color", "rgba(0, 0, 0, 1)");
    }
    else{
      $(".nava").css("color", "rgba(255, 255, 255, 1)");
    } 
  },
  offset: 30
})

var waypoint4 = new Waypoint({
  element: document.getElementById('contact'),
  handler: function(direction) {
    if (direction=="down") {
      $(".nava").css("color", "rgba(255, 255, 255, 1)");      
    }
    else{
      $(".nava").css("color", "rgba(0, 0, 0, 1)");
    } 
  },
  offset: 30
})

//fade in elements
var waypoint5 = new Waypoint({
  element: document.getElementById('about'),
  handler: function(direction) {
    $(".about > .container").fadeIn(1500);
  },
  offset: $(window).height() - 200
})

var waypoint6 = new Waypoint({
  element: document.getElementById('portfolio'),
  handler: function(direction) {
    $(".portfolio > .container").fadeIn(1500);
  },
  offset: $(window).height() - 200
})

var waypoint7 = new Waypoint({
  element: document.getElementById('contact'),
  handler: function(direction) {
    $(".contact > .container").fadeIn(1500);
  },
  offset: $(window).height() - 200
})

//progress bar color
var waypoint8 = new Waypoint({
  element: document.getElementById('portfolio'),
  handler: function(direction) {
    if (direction=="down") {
      $(".progress-bar-custom").css("background", "rgba(0, 0, 0, 1)");
    }
    else{
      $(".progress-bar-custom").css("background", "rgba(255, 255, 255, 1)");
    }
    
  },
  offset: $(window).height()
})

var waypoint9 = new Waypoint({
  element: document.getElementById('contact'),
  handler: function(direction) {
    if (direction=="down") {
      $(".progress-bar-custom").css("background", "rgba(255, 255, 255, 1)");
    }
    else{
      $(".progress-bar-custom").css("background", "rgba(0, 0, 0, 1)");
    }
    
  },
  offset: $(window).height()
})


//INFO

$("#toggleinfoon").click(function(){
  $("#sobresite").fadeIn(500);
});

$("#toggleinfooff").click(function(){
  $("#sobresite").fadeOut(500);
});