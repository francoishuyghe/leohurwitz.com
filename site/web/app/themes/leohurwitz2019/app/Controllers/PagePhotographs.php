<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePhotographs extends Controller
{
    public function data() {
		$data['photos'] = get_field('photos');
		$data['documents'] = get_field('documents');
		$data['documents_title'] = get_field('documents_title');
	    return $data;
    }
}
