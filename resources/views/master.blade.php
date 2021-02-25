<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Template CSS -->
    <link href="{{ asset('css/style-starter.css') }}" rel="stylesheet">
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
    @include('layouts.menu')
</header>
<!-- //header -->

@yield('content')


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- Template JavaScript -->

<!-- theme changer js -->
<script src="{{ asset('js/theme-change.js') }}" defer></script>
<!-- //theme changer js -->

<!-- courses owlcarousel -->
<script src="{{ asset('js/owl.carousel.js') }}" defer></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<!-- script for testimonials -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->



</body>

</html>