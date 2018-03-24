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



      // Nice Svroll
      // Start slider2

        $("#lightgallery").lightGallery();

});//End of document.ready
