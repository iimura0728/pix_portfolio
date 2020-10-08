<?php
/*
Template Name: contact_complete
*/
?>

<?php get_header(); ?>
      <main class="contactPage contactCompletePage common mask">
        <div class="inner">
          <h1 class="pageHeading">Contact</h1>
          <?php get_template_part('includes/content','spImage'); ?>
          <div class="contentsWrap">
            <p class="scrollIcon"><span></span></p>
            <?php if (have_posts()): ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            <?php endif; ?>
            <p class="back"><a href="<?php echo home_url(); ?>" class="btn">return top</a></p>
          </div>
        </div>
      </main>
<?php get_footer(); ?>