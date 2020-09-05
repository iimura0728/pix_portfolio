<?php
/*
Template Name: contact_form
*/
?>

<?php get_header(); ?>
      <main class="contactPage contactFormPage common mask">
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
            <p class="description">
              お問い合わせにつきましては、<br class="spVisible">以下のフォームよりご連絡くださいませ。
            </p>
            <form method="post" action="" class="formSection" >
              <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </main>
<?php get_footer(); ?>