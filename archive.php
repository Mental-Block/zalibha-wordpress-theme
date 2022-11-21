
<?php
    /*
        Template Name: Archives
    */
    get_header();

?>
<section class="section-container flex-center-center flex-wrap">
        <?php
            if(have_posts()) {
                
                while(have_posts()) {
                    the_post();
                
                    if(get_home_url() . "/archive/" == get_permalink()){
                    ?>   
                            <h2 class="header__secondary">
                                <span class="header__underline">Archives by Year:</span>
                            </h2>
                            <ul class="archive-menu">
                                <?php wp_get_archives(array(
                                    'order' => 'ASC',
                                    'type' => 'yearly',
                                    'post_type' => 'post',
                                    )
                                ); ?>
                            </ul>
                        <?php
                    }
                    else { 
                        get_template_part('template-parts/content', 'archive'); 
                    }    
                }
                
               if(get_home_url() . "/archive/" != get_permalink()) {
                    the_posts_pagination();
               }        
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>