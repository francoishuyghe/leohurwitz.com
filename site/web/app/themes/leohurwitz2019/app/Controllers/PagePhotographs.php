<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePhotographs extends Controller
{
    public function data() {
		$data['photos'] = get_field('photos');
	    return $data;
    }
}
