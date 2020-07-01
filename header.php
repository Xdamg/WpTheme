<!DOCTYPE html>
<html>
<title>Est-Sb </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
 
    <head>
    <?php   wp_head() ;    ?>
    </head>

<body <?php body_class() ;?>>
    

<header class="head">

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
	<a class="navbar-brand" href=""><img width="30px" height="30px" src="<?php bloginfo('stylesheet_directory');?>/img/images.png">Est-Sb</a>
		</div>
    <b>
        <?php
        wp_nav_menu(
        array(

            'theme_location'    =>'boostrap-menu',
            'menu_class'        =>'navbar-nav ',
            'container'            =>false,
            'depth'                =>2,
            'walker'            => new wp_bootstrap_navwalker()





        ));
        ?>
        </b>
    </div>
</nav>

</header>
  

