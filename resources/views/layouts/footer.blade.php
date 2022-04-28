    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url({{ asset('assets/assets/images/footer-bg.jpg') }})">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong>youplay</strong></h3>

            <div class="social-icons">
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2016. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="http://html.nkdev.info/youplay/anime/search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js') }}"></script>


  <!-- Bootstrap -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/jarallax/dist/jarallax.min.js') }}"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/smoothscroll-for-websites/SmoothScroll.js') }}"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

  <!-- Countdown -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js') }}"></script>

  <!-- Magnific Popup -->
  <script type="text/javascript" src="{{ asset('assets/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
  <!-- Youplay -->
  <script type="text/javascript" src="{{ asset('assets/youplay/js/youplay.min.js') }}"></script>

  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,
    
            // set small navbar on load
            navbarSmall:      false,
    
            // enable fade effect between pages
            fadeBetweenPages: true,
    
            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
  </script>


  <script type="text/javascript">
    $(".countdown").each(function() {
        $(this).countdown($(this).attr('data-end'), function(event) {
          $(this).html(
              event.strftime([
                  '<div class="countdown-item">',
                      '<span>Days</span>',
                      '<span><span>%D</span></span>',
                  '</div>',
                  '<div class="countdown-item">',
                      '<span>Hours</span>',
                      '<span><span>%H</span></span>',
                  '</div>',
                  '<div class="countdown-item">',
                      '<span>Minutes</span>',
                      '<span><span>%M</span></span>',
                  '</div>',
                  '<div class="countdown-item">',
                      '<span>Seconds</span>',
                      '<span><span>%S</span></span>',
                  '</div>'
              ].join(''))
          );
        });
    })
  </script>

</body>


<!-- Mirrored from html.nkdev.info/youplay/anime/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 12:42:48 GMT -->
</html>