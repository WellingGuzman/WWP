<?php

class WWP_Category
{
  function __construct(){}

  function static getPermalinkBySlug($slug)
  {
    $category = get_category_by_slug($slug);
    if ($category) return get_category_link( $category->term_id );
    return false;
  }
}
