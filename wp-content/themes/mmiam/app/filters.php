<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        if( is_singular('course') ) {
            $classes[] = 'sidebar-course';
        } else {
            $classes[] = 'sidebar-primary';
        }
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Use ACF Custom Field for Excerpt
 */
add_filter('advanced_custom_field_excerpt', function () {
    global $post;

    if( get_post_type() === 'post' ) {
        $text = get_field('post_introduction');
    } else {
        $text = get_the_excerpt();
    }   
    
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = 45;
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    
    return apply_filters('the_excerpt', $text);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    //return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
    return ' &hellip;';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    collect(['get_header', 'wp_head'])->each(function ($tag) {
        ob_start();
        do_action($tag);
        $output = ob_get_clean();
        remove_all_actions($tag);
        add_action($tag, function () use ($output) {
            echo $output;
        });
    });
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

/**
 * Display sidebar on desired pages
 */
add_filter('sage/display_sidebar', function ($display) {
    static $display;

    isset($display) || $display = in_array(true, [
      // The sidebar will be displayed if any of the following return true
      is_archive(),
      is_category(),
      is_tag(),
      is_single(),
      is_home() && !is_front_page(),
      // ... more types
    ]);

    return $display;
});

/**
 * Customize search form
 */
add_filter('get_search_form', function () {
  return \App\template( 'partials.searchform' );
});

/**
 * Add custom styles menu to WYSIWYG editor
*/
add_filter( 'mce_buttons_2', function ($buttons) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
});

/**
 * Add custom styles to custom menu in WYSIWYG editor
 */
add_filter( 'tiny_mce_before_init', function($init_array) {
    $style_formats = array(
        array(
            'title' => 'Superscript',
            'inline' => 'sup',
            'wrapper' => false,
        ),
        array(
            'title' => 'No bullet list',
            'selector' => 'ul',
            'classes' => 'no-bullet',
        ),
        array(
            'title' => 'Open in lightbox',
            'selector' => 'a',
            'classes' => 'youtube-link',
            'attributes' => array(
                'data-toggle' => 'lightbox',
            ),
        ),
        array(
            'title' => 'Note',
            'selector' => 'p',
            'classes' => 'note',
        ),
        array(
            'title' => 'Important',
            'selector' => 'p',
            'classes' => 'important',
        ),
        array(
            'title' => 'Stop',
            'selector' => 'li',
            'classes' => 'stop',
        ),
        array(
            'title' => 'Tooltip',
            'selector' => 'button',
            'classes' => 'btn btn-clear tooltip-toggle',
            'attributes' => array(
                'data-toggle' => 'tooltip',
            ),
        ),
        array(
            'title' => 'Responsive Data Table',
            'block' => 'div',
            'classes' => 'table-responsive',
            'wrapper' => true,
        ),
        array(
            'title' => 'Link with arrow',
            'selector' => 'a',
            'classes' => 'arrow-link',
        ),
        array(
            'title' => 'Image full width',
            'selector' => 'img',
            'classes' => 'img-fluid img-full-width',
        ),
    );
    
    $init_array['style_formats'] = json_encode( $style_formats );  
    return $init_array; 
});
