<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	public function homeSection1()
	{
		return(object) [
			'main_title' => get_field('home_section_1_main_title'),
		];
	}

	public function homeSection2()
	{
		return(object) [
			'main_title' => get_field('home_section_2_main_title'),
			'subtitle' => get_field('home_section_2_subtitle'),
			'content' => get_field('home_section_2_content'),
			'box_1_title' => get_field('home_section_2_box_1_title'),
			'box_2_title' => get_field('home_section_2_box_2_title'),
			'box_2_bg' => get_field('home_section_2_box_2_bg'),
			'box_3_bg' => get_field('home_section_2_box_3_bg'),
			'box_4_title' => get_field('home_section_2_box_4_title'),
		];
	}

	public function homeSection3()
	{
		return(object) [
			'main_title' => get_field('home_section_3_main_title'),
			'subtitle' => get_field('home_section_3_subtitle'),
			'content' => get_field('home_section_3_content'),
			'cta_content' => get_field('home_section_3_cta_content'),
		];
	}

	public function homeSection3Video()
	{
		$homeSection3Video = get_field('home_section_3_video');

		return(object) [
			'thumbnail' => $homeSection3Video['home_section_3_video_thumbnail'],
			'title' => $homeSection3Video['home_section_3_video_title'],
			'link' => $homeSection3Video['home_section_3_video_embed_link'],
		];
	}

	public function homeSection4()
	{
		return(object) [
			'statistics' => get_field('home_section_4_statistics'),
			'graduates_intro' => get_field('home_section_4_graduates_intro'),
			'graduates_intro_bg' => get_field('home_section_4_graduates_intro_bg'),
		];
	}

	public function homeSection4Video()
	{
		$homeSection4Video = get_field('home_section_4_video');

		return(object) [
			'thumbnail' => $homeSection4Video['home_section_4_video_thumbnail'],
			'title' => $homeSection4Video['home_section_4_video_title'],
			'link' => $homeSection4Video['home_section_4_video_embed_link'],
		];
	}

	public function homeSection5()
	{
		return(object) [
			'cta_content' => get_field('home_section_5_cta_content'),
		];
	}

	public function homeSection5Graduates()
	{
		if ( get_field('home_section_5_graduates_list') ) {
      return array_map(function($graduate) {
        return [
          'name' => $graduate['graduate_name'] ?? null,
          'job_position' => $graduate['graduate_job_position'] ?? null,
          'company' => $graduate['graduate_company'] ?? null,
          'city' => $graduate['graduate_city'] ?? null,
        ];
      }, get_field('home_section_5_graduates_list') ?? []);
    } else {
        return false;
    }
	}

	public function homeSection6()
	{
		return(object) [
			'main_title' => get_field('home_section_6_main_title'),
			'subtitle' => get_field('home_section_6_subtitle'),
			'content' => get_field('home_section_6_content'),
		];
	}

	public function homeSection6SchoolLogo()
	{
		$homeSection6SchoolLogo = get_field('home_section_6_school_logo');

		return(object) [
			'url' => $homeSection6SchoolLogo['url'],
			'alt' => $homeSection6SchoolLogo['alt'],
		];
	}

	public function homeSection6SchoolRankings()
	{
		if ( get_field('home_section_6_school_rankings') ) {
      return array_map(function($rank) {
        return [
          'icon' => $rank['rank_icon'] ?? null,
          'icon_value' =>$rank['rank_icon']['value'] ?? null,
          'text' => $rank['rank_text'] ?? null,
        ];
      }, get_field('home_section_6_school_rankings') ?? []);
    } else {
        return false;
    }
	}

	public function homeSection6SchoolAccreditations()
	{
		if ( get_field('home_section_6_school_accreditations') ) {
      return array_map(function($accrediatation) {
        return [
          'logo' => $accrediatation['accrediatation_logo'] ?? null,
          'logo_url' => $accrediatation['accrediatation_logo']['url'] ?? null,
          'logo_alt' => $accrediatation['accrediatation_logo']['alt'] ?? null,
        ];
      }, get_field('home_section_6_school_accreditations') ?? []);
    } else {
        return false;
    }
	}

	public function homeSection7()
	{
		return(object) [
			'content' => get_field('home_section_7_content'),
			'content_bg' => get_field('home_section_7_content_bg'),
			'cta_content' => get_field('home_section_7_cta_content'),
		];
	}

	public function homeSection7SchoolLogo()
	{
		$homeSection7SchoolLogo = get_field('home_section_7_school_logo');

		return(object) [
			'url' => $homeSection7SchoolLogo['url'],
			'alt' => $homeSection7SchoolLogo['alt'],
		];
	}

	public function homeSection7SchoolRankings()
	{
		if ( get_field('home_section_7_school_rankings') ) {
      return array_map(function($rank) {
        return [
          'icon' => $rank['rank_icon'] ?? null,
          'icon_value' => $rank['rank_icon']['value'] ?? null,
        	'text' => $rank['rank_text'] ?? null,
        ];
      }, get_field('home_section_7_school_rankings') ?? []);
    } else {
        return false;
    }
	}

	public function homeSection8()
	{
		return(object) [
			'main_title' => get_field('home_section_8_main_title'),
			'subtitle' => get_field('home_section_8_subtitle'),
			'content' => get_field('home_section_8_content'),
			'content_bg' => get_field('home_section_8_content_bg'),
			'directors_intro' => get_field('home_section_8_directors_intro'),
		];
	}

	public function homeSection8DirectorsList()
	{
		if ( get_field('home_section_8_directors_list') ) {
      return array_map(function($director) {
        return [
          'picture' => $director['director_picture'] ?? null,
          'picture_url' => $director['director_picture']['url'] ?? null,
          'picture_alt' => $director['director_picture']['alt'] ?? null,
        	'name' => $director['director_name'] ?? null,
        	'title' => $director['director_title'] ?? null,
        	'company' => $director['director_company'] ?? null,
        	'city' => $director['director_city'] ?? null,
        ];
      }, get_field('home_section_8_directors_list') ?? []);
    } else {
        return false;
    }
	}
}
