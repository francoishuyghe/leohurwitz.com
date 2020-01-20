<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePrintedMaterial extends Controller
{
    public function data() {
		$data['materials'] = get_field('materials');
	    return $data;
    }
}
