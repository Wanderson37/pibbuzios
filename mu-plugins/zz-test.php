<?php
/*
Plugin Name: ZZ Test
*/
add_action('admin_notices', function () {
  echo '<div class="notice notice-success"><p>Deploy OK! (mu-plugins)</p></div>';
});
