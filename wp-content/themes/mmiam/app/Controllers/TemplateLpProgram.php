<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateLpProgram extends Controller
{
	public function landingGeneral()
	{
		return(object) [
			'lp_cta_label' => get_field('lp_cta_label'),
			'lp_cta_label_short' => get_field('lp_cta_label_short'),
			'lp_cta_link' => get_field('lp_cta_link'),
			'lp_cta_back_home' => get_field('lp_cta_back_home'),
			'lp_form' => get_field('lp_form_iframe'),
		];
	}

	public function LandingMenuLogo()
	{
		$LandingMenuLogo = get_field('menu_logo');

		return(object) [
			'url' => $LandingMenuLogo['url'],
			'alt' => $LandingMenuLogo['alt'],
		];
	}

	public function LandingFooterImg()
	{
		$LandingMenuLogo = get_field('footer_img');

		return(object) [
			'url' => $LandingMenuLogo['url'],
			'alt' => $LandingMenuLogo['alt'],
		];
	}

	public function LandingIcQuoteImg()
	{
		$LandingMenuLogo = get_field('ic_bg_quote');

		return(object) [
			'url' => $LandingMenuLogo['url'],
		];
	}

	public function LpSocialLink()
	{
		if ( get_field('lp_social_links') ) {
			return array_map(function($social_item) {
				return [
					'network' => $social_item['network'] ?? null,
					'link' => $social_item['link'] ?? null,
				];
			}, get_field('lp_social_links') ?? []);
		} else {
				return false;
		}
	}

	public function LpMenuItems()
	{
		if ( get_field('lp_menu_items') ) {
			return array_map(function($menu_item) {
				return [
					'label' => $menu_item['menu_label'] ?? null,
					'link' => $menu_item['menu_link'] ?? null,
				];
			}, get_field('lp_menu_items') ?? []);
		} else {
				return false;
		}
	}

	public function LpOisImg()
	{
		if ( get_field('ois_img') ) {
			return array_map(function($ois_img) {
				return [
					'img' => $ois_img['img']['url'] ?? null,
					'img_alt' => $ois_img['img']['alt'] ?? null,
				];
			}, get_field('ois_img') ?? []);
		} else {
				return false;
		}
	}

	public function LpIcQuotes()
	{
		if ( get_field('ic_quotes') ) {
			return array_map(function($ic_quotes) {
				return [
					'author' => $ic_quotes['author'] ?? null,
					'quote' => $ic_quotes['quote'] ?? null,
					'id' => $ic_quotes['id'] ?? null,
				];
			}, get_field('ic_quotes') ?? []);
		} else {
				return false;
		}
	}

	public function LpOpCities()
	{
		if ( get_field('op_travel') ) {
			return array_map(function($op_cities) {
				return [
					'id' => $op_cities['id'] ?? null,
					'title' => $op_cities['title'] ?? null,
					'city' => $op_cities['city'] ?? null,
					'desc' => $op_cities['desc'] ?? null,
					'bg_img' => $op_cities['bg_img']['url'] ?? null,
				];
			}, get_field('op_travel') ?? []);
		} else {
				return false;
		}
	}

	public function LandingHeroLogo()
	{
		$LandingHeroLogo = get_field('hero_logo');

		return(object) [
			'url' => $LandingHeroLogo['url'],
			'alt' => $LandingHeroLogo['alt'],
		];
	}

	public function LandingHeroBg()
	{
		$LandingHeroBg = get_field('hero_bg_img');

		return(object) [
			'url' => $LandingHeroBg['url'],
		];
	}

	public function LandingHero()
	{
		return(object) [
			'hero_quote' => get_field('hero_quote'),
			'hero_quote_author' => get_field('hero_quote_author'),
			'hero_quote_author_title' => get_field('hero_quote_author_title'),
		];
	}

	public function LandingSection1()
	{
		return(object) [
			'hero_quote' => get_field('hero_quote'),
			'hero_quote_author' => get_field('hero_quote_author'),
			'hero_quote_author_title' => get_field('hero_quote_author_title'),
		];
	}

	public function LandingSectionsId()
	{
		return(object) [
			'section_ue_id' => get_field('ue_id'),
			'section_ois_id' => get_field('ois_id'),
			'section_ic_id' => get_field('ic_id'),
			'section_iify_id' => get_field('iify_id'),
			'section_op_id' => get_field('op_id'),
			'section_faq_id' => get_field('faq_id'),
		];
	}

	public function LandingSectionsContent()
	{
		return(object) [
			'section_ue_content' => get_field('ue_content'),
			'section_ue_video' => get_field('ue_video'),
			'section_ois_content' => get_field('ois_content'),
			'section_ic_content' => get_field('ic_content'),
			'section_ic_qtitle' => get_field('ic_quote_title'),
			'section_iify_content' => get_field('iify_content'),
			'section_op_content' => get_field('op_content'),
			'section_op_travel_title' => get_field('op_travel_title'),
			'section_faq_content' => get_field('faq_content'),
		];
	}
}
