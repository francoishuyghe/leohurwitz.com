<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function data() {
		$data['bottom_menu'] = get_field('bottom_menu');
	    return $data;
    }
}
