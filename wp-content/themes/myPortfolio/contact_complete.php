<?php
/*
Template Name: contact_complete
*/
?>

<?php get_header(); ?>
      <!-- ---↓main--------------------------------------------------------------------- -->
      <main class="contactPage contactCompletePage common mask">
        <div class="inner">
          <h1 class="pageHeading">Contact</h1>
          <div class="spImageWrap">
            <?php
              $spImage_url = wp_get_attachment_url( get_post_thumbnail_id() );
              $spImage_bg = "style='background-image:url(".$spImage_url.");'";
            ?>
            <div class="spImage"<?php echo $spImage_bg; ?>></div>
          </div>
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
      <!-- ./main -->
<?php get_footer(); ?>