
<?php

class WWP_Post
{
  public static function getPostBySlug($slug, $postType = 'post')
  {
    $args = array(
      'name'        => $slug,
      'post_type'   => $postType,
      'post_status' => 'publish',
      'numberposts' => 1
    );
    
    $posts = get_posts($args);
    
    return $posts;
  }
}
