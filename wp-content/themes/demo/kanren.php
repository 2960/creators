<ul id="kanren">
  <?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
'post__not_in' => array($post -> ID),
'posts_per_page'=> 10,
'category__in' => $category_ID,
'orderby' => 'rand',
);
$st_query = new WP_Query($args); ?>
          <?php
if( $st_query -> have_posts() ): ?>
          <?php
while ($st_query -> have_posts()) : $st_query -> the_post(); ?>
  <li class="clearfix">
  <a href="<?php the_permalink() ?>" class="article_linker"></a>
    <span class="kanren_img">
      <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
      <?php the_post_thumbnail( 'thumb150' ); ?>
      <?php else: // サムネイルを持っていないときの処理 ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-small.jpg" alt="no image" title="no image" width="100" height="100" />
      <?php endif; ?>
      </span>
    <span class="kanren_text kanren_stext">
      <h5><?php the_title(); ?></h5>
<?php if(is_mobile()) { ?>

<?php
}else{
?>
        <?php echo get_the_excerpt(); ?>
<?php
}
?>

    </span>
  </li>
  <div class="clearfix"></div>
  <?php endwhile; ?>
  <?php else: ?>
  <p>関連記事はありませんでした</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</ul>
<div class="clearfix"></div>