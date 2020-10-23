<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateProgram extends Controller
{
	public function visionAndGoals()
	{
		return(object) [
			'anchor' => get_field('vision_and_goals_anchor'),
			'main_title' => get_field('vision_and_goals_main_title'),
			'subsection_1_title' => get_field('vision_and_goals_subsection_1_title'),
			'subsection_1_content' => get_field('vision_and_goals_subsection_1_content'),
			'subsection_1_left_column_content' => get_field('vision_and_goals_subsection_1_left_column_content'),
			'subsection_1_right_column_content' => get_field('vision_and_goals_subsection_1_right_column_content'),
			'subsection_2_title' => get_field('vision_and_goals_subsection_2_title'),
			'subsection_2_content' => get_field('vision_and_goals_subsection_2_content'),
			'subsection_2_call_to_action' => get_field('vision_and_goals_subsection_2_call_to_action'),
		];
	}

	public function visionAndGoalsSubsection1()
	{
		$subsection_1_left_column_content = get_field('vision_and_goals_subsection_1_left_column_content');

		return(object) [
			'part_1' => $subsection_1_left_column_content['vision_and_goals_subsection_1_left_column_content_part_1'],
			'part_2' => $subsection_1_left_column_content['vision_and_goals_subsection_1_left_column_content_part_2'],
			'part_3' => $subsection_1_left_column_content['vision_and_goals_subsection_1_left_column_content_part_3'],
		];
	}

	public function visionAndGoalsFeatures()
	{
		if ( get_field('vision_and_goals_subsection_2_features') ) {
      return array_map(function($feature) {
          return [
              'icon' => $feature['feature_icon'] ?? null,
              'text' => $feature['feature_text'] ?? null,
          ];
      }, get_field('vision_and_goals_subsection_2_features') ?? []);
    } else {
        return false;
    }
	}

	public function structureAndCourses()
	{
		return(object) [
			'anchor' => get_field('structure_and_courses_anchor'),
			'main_title' => get_field('structure_and_courses_main_title'),
			'subsection_1_title' => get_field('structure_and_courses_subsection_1_title'),
			'subsection_2_title' => get_field('structure_and_courses_subsection_2_title'),
			'subsection_2_content' => get_field('structure_and_courses_subsection_2_content'),
			'subsection_3_title' => get_field('structure_and_courses_subsection_3_title'),
			'subsection_3_content' => get_field('structure_and_courses_subsection_3_content'),
			'subsection_4_title' => get_field('structure_and_courses_subsection_4_title'),
			'subsection_4_left_column_content' => get_field('structure_and_courses_subsection_4_left_column_content'),
			'subsection_4_right_column_content' => get_field('structure_and_courses_subsection_4_right_column_content'),
			'subsection_4_data_table' => get_field('structure_and_courses_subsection_4_data_table'),
			'subsection_4_call_to_action' => get_field('structure_and_courses_subsection_4_call_to_action'),
		];
	}

	public function structureAndCoursesSkills()
	{
		if ( get_field('structure_and_courses_subsection_1_skills') ) {
      return array_map(function($skill) {
          return [
              'text' => $skill['skill_text'] ?? null,
          ];
      }, get_field('structure_and_courses_subsection_1_skills') ?? []);
    } else {
        return false;
    }
	}

	public function structureAndCoursesProgramAttributes()
	{
		if ( get_field('structure_and_courses_subsection_2_program_attributes') ) {
      return array_map(function($program_attribute) {
          return [
              'number' => $program_attribute['attribute_number'] ?? null,
              'text' => $program_attribute['attribute_text'] ?? null,
          ];
      }, get_field('structure_and_courses_subsection_2_program_attributes') ?? []);
    } else {
        return false;
    }
	}

	public function structureAndCoursesUniversities()
	{
		if ( get_field('structure_and_courses_subsection_3_universities') ) {
      return array_map(function($university) {
        return [
          'name' => $university['university_name'] ?? null,
          'city_and_country' => $university['university_city_and_country'] ?? null,
          'credits_detail' => $university['university_credits_detail'] ?? null,
          'period_detail' => $university['university_period_detail'] ?? null,
          'courses_list' => array_map(function($course) {
        		$post_items = get_posts([
				      'post_type' => 'course',
				      'posts_per_page'=> '-1',
				      'post_status' => 'publish',
				      'orderby'	=> 'date',
				      'order' => 'ASC',
				      'ignore_sticky_posts' => true,
				      'tax_query' => array(
					      array(
					        'taxonomy' => 'course_taxonomy',
					        'terms' => $course,
					      ),
					    ),
				      'suppress_filters' => false,
				    ]);

        		return [
      				'course_id' => wp_list_pluck( $post_items, 'ID' ) ?? null,
        		];
          }, (array) $university['university_courses_list']) ?? null,
          'campus_abroad' => $university['university_campus_abroad'] ?? null,
          'campus_abroad_link' => $university['university_campus_abroad_link'] ?? null,
          'campus_abroad_link_url' => $university['university_campus_abroad_link']['url'] ?? null,
          'campus_abroad_link_target' => $university['university_campus_abroad_link']['target'] ?? null,
        ];
      }, get_field('structure_and_courses_subsection_3_universities') ?? []);
    } else {
        return false;
    }
	}

	public function meetOurTeam()
	{
		return(object) [
			'anchor' => get_field('meet_our_team_anchor'),
			'main_title' => get_field('meet_our_team_main_title'),
			'subsection_1_title' => get_field('meet_our_team_subsection_1_title'),
		];
	}

	public function internationalAdvisoryCommittee()
	{
		$internationalAdvisoryCommittee = get_field('meet_our_team_subsection_1_international_advisory_committee');

		return(object) [
			'title' => $internationalAdvisoryCommittee['international_advisory_committee_title'],
			'content' => $internationalAdvisoryCommittee['international_advisory_committee_content'],
			'members' => array_map(function($member) {
				return [
 					'name' => $member['international_advisory_committee_member_name'] ?? null,
					'title' => $member['international_advisory_committee_member_title'] ?? null,
					'company' => $member['international_advisory_committee_member_company'] ?? null,
					'city' => $member['international_advisory_committee_member_city'] ?? null,
       	]; 
			}, $internationalAdvisoryCommittee['international_advisory_committee_members'] ?? []),
		];
	}

	public function programCoordinatorTeam()
	{
		$programCoordinatorTeam = get_field('meet_our_team_subsection_1_program_coordinator_team');

		return(object) [
			'title' => $programCoordinatorTeam['program_coordinator_team_title'],
			'logo' => $programCoordinatorTeam['program_coordinator_team_logo'],
			'logo_url' => $programCoordinatorTeam['program_coordinator_team_logo']['url'],
			'logo_alt' => $programCoordinatorTeam['program_coordinator_team_logo']['alt'],
			'members' => array_map(function($member) {
				return [
 					'name' => $member['program_coordinator_team_member_name'] ?? null,
					'title' => $member['program_coordinator_team_member_title'] ?? null,
					'company' => $member['program_coordinator_team_member_company'] ?? null,
					'city' => $member['program_coordinator_team_member_city'] ?? null,
       	]; 
			}, $programCoordinatorTeam['program_coordinator_team_members'] ?? []),
		];
	}

	public function programCommittee()
	{
		$programCommittee = get_field('meet_our_team_subsection_1_program_committee');

		return(object) [
			'title' => $programCommittee['program_committee_title'],
			'members' => array_map(function($member) {
				return [
 					'name' => $member['program_committee_member_name'] ?? null,
					'title' => $member['program_committee_member_title'] ?? null,
					'company' => $member['program_committee_member_company'] ?? null,
					'city' => $member['program_committee_member_city'] ?? null,
       	]; 
			}, $programCommittee['program_committee_members'] ?? []),
		];
	}
}
