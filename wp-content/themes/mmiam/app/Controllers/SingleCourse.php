<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleCourse extends Controller
{
	public function course()
	{
		return(object) [
			'where' => get_field('course_where'),
			'when' => get_field('course_when'),
			'number_of_credits' => get_field('course_number_of_credits'),
			'description' => get_field('course_description'),
		];
	}

	public function courseProfessors()
	{
		if ( get_field('course_professors') ) {
      return array_map(function($professors) {
        return [
          'professor_title' => $professors['professor_title'] ?? null,
          'professor_list' => array_map(function($professor) {
        		return [
      				'professor_name' => $professor['professor_name'],
      				'professor_link' => $professor['professor_link'],
        		];
          }, $professors['professor_list']),
        ];
      }, get_field('course_professors') ?? []);
    } else {
      	return false;
    }
	}

  public function courseListByCategory()
  {
    $tax_terms = get_terms( array('taxonomy' => 'course_taxonomy', 'hide_empty' => true, 'orderby' => 'term_id', 'order' => 'ASC') );
    
    if ( $tax_terms ) {
      return array_map(function($term) {
        return [
          'name' => $term->name,
          'course_list' => array_map(function($course) {
            
            $post_items = get_posts([
              'post_type' => 'course',
              'posts_per_page'=> '-1',
              'post_status' => 'publish',
              'orderby' => 'date',
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
          }, array($term->term_id) ?? []),
        ];
      }, $tax_terms ?? []);
    } else {
      return false;
    }
  }

}