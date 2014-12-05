<ul id="kanren">
  <?php
$args = array(
    'posts_per_page' => 8,
);
$st_query = new WP_Query($args);
?>
  <?php if( $st_query->have_posts() ): ?>
  <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
  <li>
  <a href="<?php the_permalink() ?>" class="clearfix">
    <span class="kanren_img">
      <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
      <?php the_post_thumbnail( 'thumb100' ); ?>
      <?php else: // サムネイルを持っていないときの処理 ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-small.jpg" alt="no image" title="no image" width="60" height="60" />
      <?php endif; ?>
    </span>
    <span class="kanren_text">
      <h5><?php the_title(); ?></h5>
    </span>
    </a>
  </li>
  <?php endwhile; ?>
  <?php else: ?>
  <p>新しい記事はありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</ul>
<div class="clearfix"></div>