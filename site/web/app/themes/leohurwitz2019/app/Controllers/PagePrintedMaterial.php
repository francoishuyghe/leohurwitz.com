<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_QUERY;

class PagePrintedMaterial extends Controller
{
    public function all_materials() {
	    $args = array(
	    	'post_type' 		=> 'printed_material',
			'posts_per_page' 	=> -1,
			'order'				=> 'ASC',
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }
}
