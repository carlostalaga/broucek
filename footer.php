</div>
<footer id="footer" class="container-fluid bg-dark text-white"> 
	<div id="copyright" class="container">
		<div class="row">
			<div class="col-12 col-md-6 text-center text-md-left">
				&copy; <?php echo esc_html( date_i18n( __( 'Y', 'broucek' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</div>
			<div class="col-12 col-md-6 text-center text-md-right">
				Site by <a href="https://envyus.com.au" alt="Web Design Agency in Adelaide - Australia" target="_blank">EnvyUs Design</a>
			</div>
			
		</div>
	</div>
</footer>
</div>
<!-- header nav behaviour -->
<script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar-fx").style.padding = "15px 10px";
    document.getElementById("logo-change").style.width = "160px";
    document.getElementById("logo-change").setAttribute("src","<?php echo get_template_directory_uri() ?>/img/logo-dark.png");

    var element = document.getElementById("navbar-fx");
    element.classList.remove("navbar-dark");
    element.classList.remove("navbar-custom");
    element.classList.add("navbar-light");
    element.classList.add("bg-light");

  } else {

    document.getElementById("navbar-fx").style.padding = "15px 10px";
    document.getElementById("logo-change").style.width = "280px";
    document.getElementById("logo-change").setAttribute("src", "<?php echo get_template_directory_uri() ?>/img/logo-light.png");

    var element = document.getElementById("navbar-fx");
    element.classList.remove("navbar-light");
    element.classList.remove("bg-light");
    element.classList.add("navbar-dark");
    element.classList.add("navbar-custom");
  }
} 
</script>
<!-- //end header nav behaviour -->





<!-- Initiate Hamburger icon animation -->
<script type="text/javascript">
jQuery(document).ready(function () {

  jQuery('.first-button').on('click', function () {

    jQuery('.animated-icon1').toggleClass('open');
  });
  jQuery('.second-button').on('click', function () {

    jQuery('.animated-icon2').toggleClass('open');
  });
  jQuery('.third-button').on('click', function () {

    jQuery('.animated-icon3').toggleClass('open');
  });
});
</script>
<!-- //end Initiate Hamburger icon animation -->




<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-home', {
    keyboard: {
        enabled: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});
</script>
<!-- //end Initialize Swiper -->

<script>
//Match height target-class definition
function MatchHeight() {
  $('.fosforos')
    .matchHeight({})
  ;
}
//Functions that run when all HTML is loaded
$(document).ready(function() {
  MatchHeight()
</script>



<!-- Initialize WOW -->
<script>
  wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
  wow.init();
</script>
<!-- //end Initialize WOW -->

<?php wp_footer(); ?>
</body>
</html>