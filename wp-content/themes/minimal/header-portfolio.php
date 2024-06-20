<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta  charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <header class="portfolio">
       <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
       <nav>
          <?php wp_nav_menu( array( 
			'theme_location' => 'minimal-menu',
			'container' => '',
			'menu_class' => 'main-menu',
			'fallback_cb' => false
			) ); ?>
       </nav> 
       <hr>
       <!-- <ul class="portfolio_links">
           <li><a href="" class="secondary-btn active">All</a></li>
           <li><a href="" class="secondary-btn">Print</a></li>
           <li><a href="" class="secondary-btn">Web</a></li>
           <li><a href="" class="secondary-btn">Mobile</a></li>
       </ul> -->
       <ul class="portfolio_links">
       <?php
        $currentURI = $_SERVER['REQUEST_URI']; // 현재 주소창 주소
        $urlArr = explode('/', $currentURI);
        $cateName = $urlArr[count($urlArr) - 2];

        $cateName === 'portfolio' ? $activeClass = 'active' : $activeClass= '';
       ?>
        <li><a href="<?php bloginfo('url'); ?>/category/portfolio/" class="secondary-btn <?= $activeClass ?>">All</a></li>
        <?php
        
          $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'child_of' => 6,
            'hide_empty'=> true,

          ));
          


          foreach( $categories as $category ) {
            $category->name === $cateName ? $activeClass = 'active' : $activeClass= '';
            $category_link = sprintf( 
              '<a class="secondary-btn '.$activeClass.'" href="%1$s" alt="%2$s">%3$s</a>',
              esc_url( get_category_link( $category->term_id ) ),
              esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
              esc_html( $category->name )
            );
            
            echo '<li>' . $category_link  . '</li> ';
            
          } ?>
        </ul>

    </header>
    