<?php
echo "<ul class='favorited_box margin-bottom-30px clearfix'>";
if ($favorite_post_ids):
	$c = 0;
	$favorite_post_ids = array_reverse($favorite_post_ids);
    foreach ($favorite_post_ids as $post_id) {
    	if ($c++ == $limit) break;
        $p = get_post($post_id);
        echo "<li>" . get_the_post_thumbnail($post_id) . "";
        echo "<a href='".get_permalink($post_id)."' title='". $p->post_title ."' class='article_linker'></a><span class'favorited_text'>" . $p->post_title . "</span>";
        echo "</li>";
    }
else:
    echo "<li>";
    echo "Your favorites will be here.";
    echo "</li>";
endif;
echo "</ul>";
?>
