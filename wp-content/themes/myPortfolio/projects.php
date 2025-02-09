<?php
/*
Template Name: projects
*/
?>

<?php get_header(); ?>
      <main class="projectsPage common mask">
        <div class="inner">
          <h1 class="pageHeading"><?php the_title(); ?></h1>
          <?php get_template_part('includes/content','spImage'); ?>
          <div class="contentsWrap">
            <p class="scrollIcon"><span></span></p>
            <ul class="projectList">
              <?php
                $the_query = subLoop();
                if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
              ?>
              <li class="item">
                <p class="imageWrap">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="">
                </p>
                <div class="overview">
                  <h2 class="heading"><?php the_title(); ?></h2>
                  <div class="textWrap"><?php limitContent($post,150); ?></div>
                  <p class="next"><a class="btn" href="<?php the_permalink(); ?>">read more</a></p>
                </div>
              </li>
              <?php
                  endwhile;
                endif;
                wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
      </main>
<?php get_footer(); ?>