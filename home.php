
<?php get_header(); ?>
        <?php
            global $post;
                $page_for_posts_id = get_option('page_for_posts');
                if ( $page_for_posts_id ) : 
                    $post = get_page($page_for_posts_id);
                    setup_postdata($post);            
                    
                $resources = get_terms(array( 
                    'category',
                ), array(
                    'child_of' => 7,
                ));
            ?>

            <div class="banner center-text">
                <h2 class="header header__primary">
                    <span class="header__underline">
                        <i class="fa-solid fa-book-open"></i> <?php the_title(); ?>
                    </span>
                </h2>
            </div>
            
            <div class="section-container">
                <div class="flex-wrap flex-center-center">
                    <?php foreach( $resources as $resources_item ) : ?>
                        <div class="card">
                            <div class="card-container">
                                <h3 class="card-title flex-center-center"><?php echo $resources_item->name ?></h3>
                                <ul class="card-menu">
                                    <?php 
                                        $post_resource = wp_get_recent_posts(array(
                                            'numberposts' => 5,
                                            'post_status' => 'publish', 
                                            'category' => $resources_item->term_taxonomy_id 
                                        ));

                                        foreach ($post_resource as $post_item): 
                                    ?>
                                    <li class="card-item flex-space-center">
                                        <a class="card-link" href="<?php echo get_permalink($post_item['ID']); ?>">
                                            <?php echo rtrim($post_item['post_title']); ?>
                                        </a>
                                        <p class="card-date">
                                            <?php echo substr($post_item['post_date'], 0, 10); ?>
                                        </p>
                                    </li>
                                    <?php endforeach; ?>
                                </ul> 
                                <div class="center-text">
                                    <a class="header-link header__fourth" href="<?php echo home_url($resources_item->slug); ?>">View All</a>
                                </div>  
                            </div> 
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="section-container">
                <h2 class="header header__secondary center-text">
                    <span class="header__underline">
                        Latest Resources 
                    </span>
                </h2>
                <ul class="header-menu">
                    <?php 
                    $post_resource = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish', 
                        'category' => 7
                    ));
                    foreach ($post_resource as $post_item): 
                    ?>
                        <li class="header-menu-item">
                            <a class="header__third header-link"  href="<?php echo get_permalink($post_item['ID']); ?>">
                                <?php echo $post_item['post_title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a class="button button__primary" href="<?php echo get_home_url() . "/archive/" ?>">View Archive</a>
            </div>

<?php  
    the_content();
    rewind_posts();
    endif;
    get_footer(); 
?>
