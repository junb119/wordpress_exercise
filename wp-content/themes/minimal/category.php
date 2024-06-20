<?php get_header('portfolio');?>
<main class="content">
    <div class="container latest_portfolio">            
        <div class="row list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="contents shadow">
                    <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                    }
                    ?>
                        <!-- <img src="images/latest_portfolio_01.jpg" alt="latest_portfolio_01"> -->
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <img src="<?=IMAGES?>/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="<?php the_permalink(); ?>">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
        <!-- <p class="pagenation shadow">
            <a href="" class="secondary-btn active">1</a>      
            <a href="" class="secondary-btn">2</a>      
            <a href="" class="secondary-btn">3</a>      
            <a href="" class="secondary-btn">4</a>      
        </p> -->
        <?php minimal_pagination(); ?>
    </div>
</main>
<?php get_footer();?>