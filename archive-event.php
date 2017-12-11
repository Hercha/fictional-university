<?php

get_header();
// fix for image coming from first post
while(have_posts()) : the_post(); endwhile; rewind_posts();

pageBanner(array(
  'title'     => 'All Events',
  'subtitle'  => 'See what is going on in our world.',
  // 'photo'     => get_theme_file_uri('/images/ocean.jpg')
));
?>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post();
    get_template_part('template-parts/event');
  }
  echo paginate_links();
?>

<hr class="section-break">

<p>Looking for a recap of past events<a href="<?= site_url('/past-events') ?>">Check out our past events</a>.</p>
</div>

<?php get_footer();

?>