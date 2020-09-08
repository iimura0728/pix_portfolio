<?php
/*
Template Name: contact_confirm
*/
?>

<?php get_header(); ?>
      <main class="contactPage contactConfirmPage common mask">
        <div class="inner">
          <h1 class="pageHeading">Contact</h1>
          <?php get_template_part('includes/content','spImage'); ?>
          <div class="contentsWrap">
            <p class="scrollIcon"><span></span></p>
            <p class="description">
              以下の内容でお間違いがなければ、<br class="spVisible">送信ボタンを押してください。
            </p>
            <div class="formSection" action="post">
              <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </main>
<?php get_footer(); ?>