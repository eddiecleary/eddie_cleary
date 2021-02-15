<?php

/*

@package eddiecleary

    ===========================
    ADD CUSTOM POST TYPES
    ===========================
*/

function ec_project_post_type() {
    $labels = array(
        'name'                      => _x( 'Projects', 'Post type general name', 'project' ),
        'singular_name'             => _x( 'Project', 'Post type singular name', 'project' ),
        'menu_name'                 => _x( 'Projects', 'Admin Menu text', 'project' ),
        'name_admin_bar'            => _x( 'Project', 'Add New on Toolbar', 'project' ),
        'add_new'                   => __( 'Add New', 'project' ),
        'add_new_item'              => __( 'Add New project', 'project' ),
        'new_item'                  => __( 'New project', 'project' ),
        'edit_item'                 => __( 'Edit project', 'project' ),
        'view_item'                 => __( 'View project', 'project' ),
        'all_items'                 => __( 'All projects', 'project' ),
        'search_items'              => __( 'Search projects', 'project' ),
        'parent_item_colon'         => __( 'Parent projects:', 'project' ),
        'not_found'                 => __( 'No projects found.', 'project' ),
        'not_found_in_trash'        => __( 'No projects found in Trash.', 'project' ),
        'featured_image'            => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'project' ),
        'set_featured_image'        => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'project' ),
        'remove_featured_image'     => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'project' ),
        'use_featured_image'        => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'project' ),
        'archives'                  => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'project' ),
        'insert_into_item'          => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'project' ),
        'uploaded_to_this_item'     => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'project' ),
        'filter_items_list'          => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'project' ),
        'items_list_navigation'     => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'project' ),
        'items_list'                => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'project' ),
    );
    $args = array(
        'labels'                => $labels,
        'description'           => 'Project custom post type.',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'project' ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 20,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'   ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'menu_icon'             => 'dashicons-images-alt',
    );

    register_post_type( 'Project', $args );
}
add_action( 'init', 'ec_project_post_type' );