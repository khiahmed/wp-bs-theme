<html>
<head>
 <title>Tutorial theme</title>
<!-- <link rel="stylesheet" href="/bootflat/css/site.min.css"><?php //bloginfo('stylesheet_url'); ?> -->
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootflat/css/site.min.css" type="text/css" media="screen" />

</head>
<body>
<nav role="navigation" class="navbar navbar-default navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        </div>
        <div class="collapse navbar-collapse">
			  <?php /* Primary navigation */
				wp_nav_menu( array(
				  'menu' => 'top_menu',
				  'depth' => 2,
				  'container' => false,
				  'menu_class' => 'nav navbar-nav navbar-right',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);
				?>
        </div>
    </div>
</nav>


<!--
<div id="wrapper">
<div id="header">
 <h1>HEADER</h1>
</div> -->