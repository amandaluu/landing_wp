<?php get_header(); ?>

      <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div><!-- end .navbar-header -->

            <?php $args = array(
              'theme_location' => 'main_menu',
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'menu_class' => 'nav nav-justified'
              );

              wp_nav_menu($args);

            ?>

          </div><!-- end .container -->

        </nav>
      </header>

      <!-- Slider / Carousel Section -->

      <section id="slider" class="carousel slide" data-ride="carousel">

        <?php $args = array(
          'posts_per_page' => 5,
          'tag' => 'slider'
        );
        $i = 0;
        $slider = new WP_Query($args);
        $count = $slider->found_posts;
        ?>

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <?php for($num = 1; $num < $count; $num++) { ?>
          <li data-target="#slider" data-slide-to="<?php echo $num; ?>"></li>
          <?php } ?>
        </ol>

        <div class="carousel-inner">
          <?php while($slider->have_posts()) : $slider->the_post(); ?>
          <div class="item <?php echo $i == 0 ? 'active' : '' ?>">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div><!-- end .carousel-inner -->

        <!-- Left Slider Button -->
        <?php if($slider->found_posts): ?>
          <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
        <?php endif; ?>

        <!-- Right Slider Button -->

        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

      </section><!-- end #slider -->

      <!-- About Section -->

      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <?php $args = array(
              'post_type' => 'page',
              'post_parent' => 24,
              'order' => 'ASC',
              'orderby' => 'title'
            );
            $i = 1;
            $about = new WP_Query($args);
            while($about->have_posts()) : $about->the_post();
            ?>
            <div class="col-sm-4">
              <div class="blue-circle animation<?php echo $i; ?>">
                <div>
                  <?php the_field('icons'); ?>
                </div>
              </div>
                <h3 class="text-uppercase text-center"><?php the_title(); ?></h3>
                <p class="text-center"><?php echo get_the_content(); ?></p>
            </div>
          <?php $i++; endwhile; wp_reset_postdata(); ?>

          </div><!-- end .row -->
        </div><!-- end .container -->
      </section><!-- end #about -->

      <!-- Features Section -->

      <section id="features" class="features">
        <h2 class="text-center text-uppercase">Features</h2>

        <div class="container">

          <!-- Left -->

          <div class="row">
            <div class="left-features col-sm-4">
              <?php $args = array(
                'post_type' => 'page',
                'post_parent' => 38,
                'order' => 'ASC',
                'orderby' => 'title',
                'posts_per_page' => 5
              );
              $features = new WP_Query($args);
              while( $features->have_posts() ) : $features->the_post();
              ?>
              <div class="item-feature row">
                <div class="content col-sm-8">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo get_the_content(); ?></p>
                </div>
                <div class="col-sm-4">
                  <div class="blue-circle animation1">
                    <div>
                      <?php the_field('icons'); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end .item-feature -->
            <?php endwhile; wp_reset_postdata(); ?>
          </div>

            <!-- Middle  -->

            <div class="features-image text-center col-sm-4">
              <?php $app = new WP_Query('page_id=38'); ?>
              <?php while( $app->have_posts() ) : $app->the_post(); ?>
              <?php the_post_thumbnail(); ?>
              <?php endwhile; wp_reset_postdata(); ?>
            </div><!-- end .features-image -->

            <!-- Right -->

              <div class="right-features col-sm-4">
                <?php $args = array(
                  'post_type' => 'page',
                  'post_parent' => 38,
                  'order' => 'ASC',
                  'orderby' => 'title',
                  'posts_per_page' => 5,
                  'offset' => 5
                );
                $features = new WP_Query($args);
                while( $features->have_posts() ) : $features->the_post();
                ?>
              <div class="item-feature row">
                <div class="content col-sm-8 col-sm-push-4 text-right">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo get_the_content(); ?></p>
                </div>
                <div class="col-sm-4 col-sm-pull-8">
                  <div class="blue-circle animation2">
                    <div>
                      <?php the_field('icons'); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end .item-feature -->
              <?php endwhile; wp_reset_postdata(); ?>
            </div><!-- end .right-features -->

          </div><!-- end .row -->
        </div><!-- end .container -->
      </section><!-- end #features -->

      <!-- Screen Shots Section -->

      <section id="screenshots" class="screenshots">
        <h2 class="text-center text-uppercase">Screen Shots</h2>

        <div class="container">
          <div class="row">
            <?php $images = new WP_Query('page_id=62'); ?>
            <?php while($images->have_posts()) : $images->the_post(); ?>
            <div class="col-xs-4 animation1">
              <a href="#modal" data-toggle="modal" data-image-url="<?php the_field('screenshot_1'); ?>">
                <img class="img-responsive" src="<?php the_field('screenshot_1'); ?>" alt="Movie Tickets" />
              </a>
            </div>
            <div class="col-xs-4 animation2">
              <a href="#modal" data-toggle="modal" data-image-url="<?php the_field('screenshot_2'); ?>">
                <img class="img-responsive" src="<?php the_field('screenshot_2'); ?>" alt="Movie Trailers" />
              </a>
            </div>
            <div class="col-xs-4 animation3">
              <a href="#modal" data-toggle="modal" data-image-url="<?php the_field('screenshot_3'); ?>">
                <img class="img-responsive" src="<?php the_field('screenshot_3'); ?>" alt="Movie Points" />
              </a>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
          </div><!-- end .row -->
        </div><!-- end .container -->

      <!-- Modals -->

      <div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-body">
          <img class="img-responsive" src="#" alt="" />
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
      </div><!-- end #modal -->
    </section><!-- end #screenshots -->

      <!-- Parallax Section -->

      <?php $parallax = new WP_Query('page_id=69'); ?>
      <?php while($parallax->have_posts()) : $parallax->the_post(); ?>
      <section id="parallax" class="parallax" style="background-image: <?php the_field('image'); ?>">
        <h2 class="parallax text-center"><?php the_field('slogan'); ?></h2>
      </section><!-- end #parallax -->
      <?php endwhile; wp_reset_postdata(); ?>

      <!-- Download Section -->

      <?php $download = new WP_Query('page_id=75'); ?>
      <?php while($download->have_posts()) : $download->the_post(); ?>
      <section id="download" class="download">
        <h2 class="text-center text-uppercase">Download</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="content-downloads clearfix">

              <!-- Left Side -->

              <div class="phone">
                <img src="<?php the_field('left_image'); ?>" class="img-responsive animation1" />
              </div><!-- end .phone -->

              <!-- Right Side -->

              <div class="downloads-empty" style="background-image: url(<?php the_field('right_image'); ?>)"></div>

                <div class="container download">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-7">
                      <h2 class="text-center text-uppercase">Choose Your Platform</h2>
                      <section class="platforms text-center">

                        <!-- Apple -->

                          <div class="col-md-5 col-xs-10 col-xs-offset-1 col-sm-6 animation2">
                            <a href="<?php the_field('android_store_link');  ?>" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i>
                            Download for <b>Apple iOS</b></a>
                          </div>

                        <!-- Android -->

                          <div class="col-md-5 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-6 animation3">
                            <a href="<?php the_field('apple_store_link'); ?>" target="_blank"><i class="fa fa-android" aria-hidden="true"></i>
                            Download for <b>Android</b></a>
                          </div>
                      </section><!-- end .platforms -->
                    </div>
                  </div><!-- end .row -->
                </div><!-- end .container -->
            </div><!-- end .content-downloads -->
          </div><!-- end .row -->
        </div><!-- end .container-fluid -->
      </section><!-- end #download -->
      <?php endwhile; wp_reset_postdata(); ?>

      <!-- Support Section / Contact Form -->

      <?php $contact = new WP_Query('page_id=82'); ?>
      <?php while($contact->have_posts()) : $contact->the_post(); ?>
      <section id="support" class="support">
        <h2 class="text-center text-uppercase">Support</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <?php the_content(); ?>

            </div>
          </div><!-- end .row -->
        </div><!-- end .container -->
      </section><!-- end #support -->
      <?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>
