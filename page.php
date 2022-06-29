<?php
get_header();
?>

<article class="container-page">

  <?php
  if (have_posts()) {
    while (have_posts()) {

      the_post();
      // var_dump(get_the_category());
      // var_dump(get_categories()) ;
      get_template_part( 'template-parts/content', 'page' );
    }
  }
  ?>

</article>
<?php
get_footer()
?>