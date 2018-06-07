@extends("template")
@section("tittle")
  Galerie
@stop
@section ('content')

  <!-- Gallery -->




  <div class="tm-page-content-width tm-flex-col tm-gallery-content">
    <div class="tm-content-box-inner">
      <h2 class="tm-section-title">Gallerie</h2>
      <!-- Add filtered gallery, 3:2 images -->
      <div class="iso-section">
        <ul class="filter-wrapper clearfix">
          <li><a href="#" data-filter="*" class="selected opc-main-bg">Show All</a></li>
          @foreach ($lesAlbums as $unAlbum)
            <li><a href="#" class="opc-main-bg" data-filter=".{{$unAlbum["slug"]}}">{{$unAlbum["titre"]}}</a></li>

          @endforeach
        </ul>
      </div>
      <div class="iso-box-section">
        <div class="iso-box-wrapper col4-iso-box">
          @foreach ($lesAlbums as $unAlbum)

            @foreach ($unAlbum->Photos as $uneImage)


              <div class="iso-box {{$unAlbum["slug"]}} col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                <a href="{{ url('files/album') ."/". $uneImage["slug"] .".jpg" }}"><img src="{{ url('files/album') ."/". $uneImage["titre"] .".jpg" }}" alt="Image" class="img-fluid"></a>
              </div>

          @endforeach

        @endforeach
      </div>
    </div>
  </div>
</div>



@stop

@section('script')
  $(document).ready(function () {
    // Isotope for Gallery
    if ( $('.iso-box-wrapper').length > 0 ) {

      var $container  = $('.iso-box-wrapper'),
      $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {
        $container.isotope({
          layoutMode: 'fitRows',
          itemSelector: '.iso-box'
        });
        $imgs.load(function(){
          $container.isotope('reLayout');
        })
      });

      //filter items on button click
      $('.filter-wrapper li a').click(function(){
        var $this = $(this), filterValue = $this.attr('data-filter');
        $container.isotope({
          filter: filterValue,
          animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
          }
        });

        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }

        var filter_wrapper = $this.closest('.filter-wrapper');
        filter_wrapper.find('.selected').removeClass('selected');
        $this.addClass('selected');

        return false;
      });
    }

    // Magnific Popup for Gallery
    $('.iso-box-wrapper').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });

    // Smooth scrolling (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 600, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    // Update the current year in copyright
    $('.tm-current-year').text(new Date().getFullYear());
  });

@endsection
