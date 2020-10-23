<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAdmissionProcess extends Controller
{
	public function admissionProcess()
	{
		return(object) [
			'anchor' => get_field('admission_process_anchor'),
			'main_title' => get_field('admission_process_main_title'),
			'subsection_1_title' => get_field('admission_process_subsection_1_title'),
			'subsection_1_content' => get_field('admission_process_subsection_1_content'),
			'subsection_2_title' => get_field('admission_process_subsection_2_title'),
			'subsection_2_content' => get_field('admission_process_subsection_2_content'),
		];
	}

	public function applicationProcess()
	{
		return(object) [
			'main_title' => get_field('application_process_main_title'),
			'step_1_anchor' => get_field('application_process_step_1_anchor'),
			'step_1_title' => get_field('application_process_step_1_title'),
			'step_1_a_anchor' => get_field('application_process_step_1_a_anchor'),
			'step_1_a_title' => get_field('application_process_step_1_a_title'),
			'step_1_a_content' => get_field('application_process_step_1_a_content'),
			'step_1_b_anchor' => get_field('application_process_step_1_b_anchor'),
			'step_1_b_title' => get_field('application_process_step_1_b_title'),
			'step_1_b_content' => get_field('application_process_step_1_b_content'),
			'step_1_c_anchor' => get_field('application_process_step_1_c_anchor'),
			'step_1_c_title' => get_field('application_process_step_1_c_title'),
			'step_1_c_content' => get_field('application_process_step_1_c_content'),
			'step_1_d_anchor' => get_field('application_process_step_1_d_anchor'),
			'step_1_d_title' => get_field('application_process_step_1_d_title'),
			'step_1_d_content' => get_field('application_process_step_1_d_content'),
			'step_1_e_anchor' => get_field('application_process_step_1_e_anchor'),
			'step_1_e_title' => get_field('application_process_step_1_e_title'),
			'step_1_e_content' => get_field('application_process_step_1_e_content'),
			'step_2_anchor' => get_field('application_process_step_2_anchor'),
			'step_2_title' => get_field('application_process_step_2_title'),
			'step_2_content' => get_field('application_process_step_2_content'),
			'step_2_a_title' => get_field('application_process_step_2_a_title'),
			'step_2_a_content' => get_field('application_process_step_2_a_content'),
			'step_3_anchor' => get_field('application_process_step_3_anchor'),
			'step_3_title' => get_field('application_process_step_3_title'),
			'step_3_content' => get_field('application_process_step_3_content'),
			'step_4_anchor' => get_field('application_process_step_4_anchor'),
			'step_4_title' => get_field('application_process_step_4_title'),
			'step_4_content' => get_field('application_process_step_4_content'),
		];
	}

	public function applicationProcessSteps()
	{
		if ( get_field('application_process_steps_list') ) {
      return array_map(function($step) {
        return [
          'name' => $step['step_name'] ?? null,
          'link' => $step['step_link'] ?? null,
        ];
      }, get_field('application_process_steps_list') ?? []);
    } else {
      return false;
    }
	}

	public function admissionFaq()
	{
		return(object) [
			'anchor' => get_field('admission_faq_anchor'),
			'main_title' => get_field('admission_faq_main_title'),
		];
	}

	public function admissionFaqBloc()
	{
		if ( get_field('admission_faq_bloc') ) {
      return array_map(function($faq_bloc) {
        return [
          'bloc_anchor' => $faq_bloc['admission_faq_bloc_anchor'] ?? null,
          'bloc_subtitle' => $faq_bloc['admission_faq_bloc_subtitle'] ?? null,
          'bloc_faq' => array_map(function($faq) {
        		return [
      				'question' => $faq['admission_faq_question'],
      				'answer' => $faq['admission_faq_answer'],
        		];
          }, (array) $faq_bloc['admission_faq_bloc_content']) ?? null, 
        ];
      }, get_field('admission_faq_bloc') ?? []);
    } else {
        return false;
    }
	}
}
