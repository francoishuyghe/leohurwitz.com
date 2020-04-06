<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleInterview extends Controller
{	

	public function data() {
		$data['subtitle'] = get_field('subtitle');
		$data['directed_by'] = get_field('directed_by');
		$data['year'] = get_field('year');
		$data['year_span'] = get_field('year_span');
		$data['length'] = get_field('length');
		$data['surviving'] = get_field('surviving');
		$data['format'] = get_field('format');
		$data['media'] = get_field('media');
		$data['full_transcript'] = get_field('full_transcript');
		$data['credits'] = get_field('credits');
		$data['links'] = get_field('links');
		$data['collaborators'] = get_field('collaborators');
		$data['photos'] = get_field('photos');
		$data['main_video'] = get_field('main_video');
	    return $data;
	}
}
