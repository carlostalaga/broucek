<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">


	<!-- bootstrap menu integration -->
	<nav id="navbar-fx" class="navbar navbar-expand-lg navbar-dark navbar-custom bg-primary" style="z-index:10001">

	  <div class="container">

	    <a id="navbar-brand" href="<?php echo get_option('siteurl'); ?>">
	      <img id="logo-change" src="<?php echo get_template_directory_uri() ?>/img/logo-light.png" class="img-fluid logo-constraint" alt="">
	    </a>

	    <button class="navbar-toggler first-button mt-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <div class="animated-icon1"><span></span><span></span><span></span></div>
	    </button>


          <?php 
            wp_nav_menu( array(
                'theme_location'  => 'main-menu',
                'depth'           => 2,
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav ml-auto mt-5',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
          ?>


	  </div>

	</nav>
	<!-- //end bootstrap menu integration -->

</div>
</header>
<div id="container-broucek" class="container-fluid">
