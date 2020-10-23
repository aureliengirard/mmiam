<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function footer()
    {
        return(object) [
            'partners_title' => get_field('footer_partners_title', 'option'),
            'sitemap_title' => get_field('footer_sitemap_title', 'option'),
            'social_title' => get_field('footer_social_title', 'option'),
            'blog_title' => get_field('footer_blog_title', 'option'),
            'blog_cta_text' => get_field('footer_blog_cta_text', 'option'),
            'blog_cta_url' => get_field('footer_blog_cta_url', 'option'),
            'contact_title' => get_field('footer_contact_title', 'option'),
            'contact_cta_text' => get_field('footer_contact_cta_text', 'option'),
            'contact_cta_url' => get_field('footer_contact_cta_url', 'option'),
        ];
    }

    public function footerPartners()
    {
        if ( get_field('partners_list', 'option') ) {
            return array_map(function($partner) {
                return [
                    'name' => $partner['partner_name'] ?? null,
                    'website_url' => $partner['partner_website_url'] ?? null,
                    'logo' => $partner['partner_logo'] ?? null,
                    'logo_url' => $partner['partner_logo']['url'] ?? null,
                    'logo_alt' => $partner['partner_logo']['alt'] ?? null,
                ];
            }, get_field('partners_list', 'option') ?? []);
        } else {
            return false;
        }
    }

    public function ctaContactUs()
    {
        return(object) [
            'content' => get_field('cta_contact_us_content', 'option'),
        ];
    }

    public function ctaNewsletter()
    {
        return(object) [
            'content' => get_field('cta_newsletter_content', 'option'),
            'form' => get_field('cta_newsletter_form', 'option'),
        ];
    }

    public function genericContentBlock()
    {
        if ( get_field('generic_content_block') ) {
            return array_map(function($content_block) {
                return [
                    'anchor' => $content_block['content_block_anchor'] ?? null,
                    'image_banner' => $content_block['content_block_image_banner'] ?? null,
                    'image_banner_url' => $content_block['content_block_image_banner']['url'] ?? null,
                    'main_title' => $content_block['content_block_main_title'] ?? null,
                    'secondary_title' => $content_block['content_block_secondary_title'] ?? null,
                    'left_column_content' => $content_block['content_block_left_column_content'] ?? null,
                    'right_column_images' => $content_block['content_block_right_column_images'] ?? null,
                    'right_column_content' => $content_block['content_block_right_column_content'] ?? null,
                    'call_to_action' => $content_block['content_block_call_to_action'] ?? null,
                    'faq_content' => $content_block['content_block_faq_content'] ?? null,
                    'useful_links_title' => $content_block['content_block_useful_links_title'] ?? null,
                    'useful_links_content' => $content_block['content_block_useful_links_content'] ?? null,
                ];
            }, get_field('generic_content_block') ?? []);
        } else {
            return false;
        }
    }

    public function blog()
    {
        return(object) [
            'banner' => get_field('post_archive_image_banner', 'option'),
            'main_title' => get_field('post_archive_main_title', 'option'),
            'subtitle' => get_field('post_archive_subtitle', 'option'),
        ];
    }


    public function searchResults()
    {
        return(object) [
            'banner' => get_field('search_results_image_banner', 'option'),
            'main_title' => get_field('search_results_main_title', 'option'),
        ];
    }
}
