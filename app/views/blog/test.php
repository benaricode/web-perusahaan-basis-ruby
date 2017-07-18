<html>
<head>
<style type="text/css">
          #wrapper{
              background: white none repeat scroll 0 0;
              border: 2px solid;
              border-radius: 5px;
              margin: 10px auto;
              overflow: hidden;
              padding: 10px 15px;
              width: 360px;
          }
          #bt {
              position: fixed;
              bottom: 30px;
              right: 100px;
          }
          #bt a {
              width: 64px;
              display: block;
              text-align: center;
              font: 11px/100% Arial, Helvetica, sans-serif;
              text-transform: uppercase;
              text-decoration: none;
              color: #bbb;
              -webkit-transition: 1s;
              -moz-transition: 1s;
              transition: 1s;
          }
          #bt a:hover {
              color: #000;
          }
          #bt span {
              width: 64px;
              height: 64px;
              display: block;
              margin-bottom: 7px;
              background: #000 url(top.png) no-repeat center center;
              -webkit-border-radius: 15px;
              -moz-border-radius: 15px;
              border-radius: 15px;
              -webkit-transition: 1s;
              -moz-transition: 1s;
              transition: 1s;
          }
          #bt a:hover span {
              background-color: #fff;
          }
          #back{
              font-weight: bold;
              font-size: 22px;
              padding:10px;
              border: 2px solid #333;
              border-radius: 29px;
          }
      </style>
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // cache scroll to top button
                var b = $('#bt');
                // Hide scroll top button
                b.hide();
                // FadeIn or FadeOut scroll to top button on scroll
                $(window).on('scroll', function(){
                    // if you scroll more then 400px then fadein goto top button
                    if ($(this).scrollTop() > 400) {
                        b.fadeIn();
                    // otherwise fadeout button
                    } else {
                        b.fadeOut();
                    }
                });
                // Animated smooth go to top
                b.on('click', function(){
                    $('html,body').animate({
                        scrollTop: 0
                    }, 500 );
                    return false;
                });
            });
        </script>

        <div id="wrapper">
                        <h3><b>Animasi Scroll Back to Top dengan Jquery</b></h3>
                        <p>&darr; Scroll down</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                        <p>&darr;</p>
                    </div>

                    <div id="bt">
                        <a href="#top"><span></span></a>
                    </div>
                    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


                    <script src="js/jquery.min.js"></script>
                  	<!-- jQuery Easing -->
                  	<script src="js/jquery.easing.1.3.js"></script>
                  	<!-- Bootstrap -->
                  	<script src="js/bootstrap.min.js"></script>
                  	<!-- Waypoints -->
                     <script src="js/jquery.waypoints.min.js"></script>
                  	<!-- Owl Carousel -->
                  	<script src="js/owl.carousel.min.js"></script>
                  	<!-- Magnific Popup -->
                  	<script src="js/jquery.magnific-popup.min.js"></script>
                  	<!-- Stellar -->
                  	<script src="js/jquery.stellar.min.js"></script>
                  	<!-- countTo -->
                  	<script src="js/jquery.countTo.js"></script>
                  	<!-- WOW -->
                  	<script src="js/wow.min.js"></script>
                  	<script>
                  		new WOW().init();
                  	</script>
                  	<!-- Main -->
                  	<script src="js/main.js"></script>

                  	<script src="js/jquery.js"></script>

                  	<script src="js/jquery.fancybox.pack.js"></script>


                  <script src="js/jquery.flexslider.js"></script>

                  <script src="js/custom.js"></script>

                  <script src="js/jquery.easing.1.3.js"></script>

</body>
</html>
