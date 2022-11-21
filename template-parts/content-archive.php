<div class="card">   
    <div class="flex-space-center">
        <h4 class="header__third"> <?php the_title(); ?></h4>         
        <p class="card-date"><?php the_date(); ?></p>
    </div>
    
    
        <?php
            the_excerpt();
        ?>
    <a class="accent card-link" href="<?php the_permalink(); ?>">Read More</a>
</div>
