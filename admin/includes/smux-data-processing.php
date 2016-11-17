<?php

/*****************************************
* Admin data processing
/****************************************/

function smux_export_menus()
{
    check_ajax_referer('smux-nonce', 'security');

    $output = get_option('smux_options');

    // wp_terms
    $terms = get_terms([
      'taxonomy' => 'nav_menu'
    ]);

    // wp_term_relationships
    $menu_ids = [];
    foreach ($terms as $term) {
      array_push($menu_ids, $term->term_id);
    }
    $rel = [];
    foreach ($menu_ids as $menu_id) {
      $posts_ids = get_objects_in_term($menu_id, 'nav_menu');
      $val = [$menu_id => $posts_ids];
      array_push($rel, $val);
    }

    // wp_posts
    $args = array( 'post_type' => 'nav_menu_item');
    $menu = new WP_Query($args);
    $menu_items = [];
    if ($menu->have_posts()) : while ($menu->have_posts()) : $menu->the_post();
      array_push($menu_items, get_the_ID());
    endwhile; wp_reset_postdata(); endif;

    // wp_postmeta
    // TODO: Get post meta

    $output['terms'] = $terms;
    $output['posts'] = $menu_items;
    $output['relationships'] = $rel;

    update_option('smux_options', $output);

    die();
}
add_action('wp_ajax_smux_export_menus', 'smux_export_menus');
