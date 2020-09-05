<?php get_header(); ?>
      <main class="projectPage common mask">
        <div class="inner">
          <h1 class="pageHeading">Project overview</h1>
          <?php
            if(have_posts()):
              while(have_posts()):the_post();
          ?>
          <?php get_template_part('includes/content','spImage'); ?>
          <div class="contentsWrap">
            <p class="imageWrap">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="">
            </p>
            <p class="scrollIcon"><span></span></p>
            <div class="overview">
              <h2 class="heading"><?php the_title(); ?></h2>
              <div class="textWrap">
                <?php the_content(); ?>
              </div>
              <p class="back"><a class="btn" href="<?php echo home_url('/projects'); ?>">return projects</a></p>
            </div>
          </div>
          <?php
              endwhile;
            endif;
          ?>
        </div>
      </main>
<?php get_footer(); ?>