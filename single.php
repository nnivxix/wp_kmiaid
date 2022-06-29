<?php
get_header();
?>

<article class="content single px-3 py-5 p-md-5">
  <h1><?php echo get_the_title(  ); ?></h1>
  <?php
  if (have_posts()) {
    while (have_posts()) {

      the_post();

      get_template_part( 'template-parts/content', 'page' );
    }
  }
  ?>

</article>
<?php
get_footer()
?>