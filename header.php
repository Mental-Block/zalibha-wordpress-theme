<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Permanent+Marker&display=swap&family=Bad+Script&display=swap" rel="stylesheet"> 
    <?php wp_head();?>
</head>

<body>
    <header>
        <nav class='nav'> 
            <div class="nav-container"> 
                <a class="skip-to-content-link" href="#main">
                    Skip to content
                </a>
                <div class="flex-space-center">
                    <?php 
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo(get_theme_mod('custom_logo'));
                        }
                    ?>
                    <button aria-expanded="false" id="menuIcon" class="icon" alt="menu" tabindex=”0” aria-label="menu">
                        <i aria-hidden="true" class="fa-solid fa-bars fa-2x"></i>
                    </button>
                </div>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'primary_menu',
                        'menu_class' => 'menu menu__hidden',
                        'menu_id' => 'navMenu',
                        'theme_location' => 'primary',
                        'walker' => new jsc_wp_nav_menu_walker()
                    ));
                ?>
            </div>    
        </nav> 
    </header>
    <main id="main">

<!-- closing tags for body, html, main in footer.php --> 