<?php get_header( ); ?>

<header class="header-wrp">
    
      <div class="container">
          
          <div class="inner">
              <div class="row">
                  <div class="col-md-4">
                      <h2 class="logo"><a href="<?php echo site_url() ?>" title=""><?php bloginfo("name");  ?></a></h2>
                  </div>
                  <div class="col-md-8">
                      <nav class="nav-menu">
                          <?php

                          wp_nav_menu( array(
                               'theme_location'  => 'topmenu ',
                               'menu_id' => 'topcontaienr',
                               'menu_class' => 'list-inline text-center'

                               
                           ) ); 
 

                           ?>
                      </nav>
                  </div>
              </div>
          </div> 

      </div>
    
</header>

<?php get_footer( ); ?>
    
