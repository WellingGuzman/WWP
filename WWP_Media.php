<?php

class WWP_Media {

  function static getMediaURLByID($id) {
    return wp_get_attachment_url( get_post_thumbnail_id( $id ) );
  }
}
