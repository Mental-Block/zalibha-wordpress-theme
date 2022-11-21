
<?php get_header(); ?>
<section class="section-container">
    <h1 class="header__primary center-text">
        <span class="header__underline">
            <i class="fa fa-search" aria-hidden="true"></i> Search Results
        </span>
    </h1>

    <?php if(have_posts()) { ?>
        <ul class="header-menu">
            <?php
                while(have_posts()) {
                    the_post();
                    ?>
                <li class="header-link"><a href="<?php the_permalink(); ?>"><?php the_title();?> <?php the_date();?> </a></li>
            <?php
                } 
            ?>
        </ul>
    <?php
        } else {
            ?>
                <p class="header__third center-text">
                    No page results match this discription use the menu instead.
                </p>
            <?php
        }
    ?>
</section>

<?php
    get_footer();
?>