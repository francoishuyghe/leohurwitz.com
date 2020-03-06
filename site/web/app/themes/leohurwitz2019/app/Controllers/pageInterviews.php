<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class pageInterviews extends Controller
{
    public function all_interviews() {
	    $args = array(
	    	'post_type' 		=> 'interview',
			'posts_per_page' 	=> -1,
			'meta_key'			=> 'year',
			'orderby'			=> 'meta_value',
			'order'				=> 'ASC',
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
	}
	
	
}
