<?php
get_header();
?>

<!-- wordpress blog -->

<article>
  <h1>hello WP</h1>
  <h2>ini blog</h2>

  <?php
  if (have_posts()) {
    get_posts(array(
      'numberposts' => 4,
      'category' => 'berita'
    ));

    the_content();
    get_template_part('template-parts/content', 'blog');
  }
  ?>
</article>


<?php
get_footer();
?>