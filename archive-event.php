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
    the_post(); ?>
    <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month"><?php 
                $eventDate = new DateTime(get_field('event_date'));
                echo $eventDate->format('M');
            ?></span>
            <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>  
        </a>
      <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php echo wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
      </div>
    </div>
  <?php }
  echo paginate_links();
?>

<hr class="section-break">

<p>Looking for a recap of past events<a href="<?= site_url('/past-events') ?>">Check out our past events</a>.</p>
</div>

<?php get_footer();

?>