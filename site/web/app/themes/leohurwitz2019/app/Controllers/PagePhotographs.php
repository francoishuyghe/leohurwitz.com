<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePhotographs extends Controller
{
    public function data() {
		$data['photos'] = get_field('photos');
		$data['documents'] = get_field('documents');
	    return $data;
    }
}
