  // Start Project Carousel
  $('.project-carousel1').owlCarousel({
    loop: false,
    dots: false,
    thumbs: false,
    nav: true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: false,
            autoplayTimeout:1000,
        autoplayHoverPause:false,
    responsive: {
       0:{
           items:1
       },
       767:{
           items: 2
       },
       992:{
           items: 4
       },
   },
 });