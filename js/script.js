$(document).ready(function(){
    // window height

      function setHeight(){
      //  $('.main-header').height($(window).height());
      }
      setHeight();
          $(window).on('resize' , function(){
             setHeight();
          });
          $('.carousel').carousel({
        interval: 0
      });
      var d = new Date();
      var n = d.getFullYear();
      $('#date').append(n);
      $('.owl-carousel').owlCarousel({
    center: true,
    items:2,
    dots:true,
    nav:true,
    navText:['<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>', '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>'],
    loop:true,
    margin:5,
    responsive:{
        600:{
            items:3
        }
    }
});
$("[data-fancybox]").fancybox({
		// Options will go here
	});

});//End of document.ready
