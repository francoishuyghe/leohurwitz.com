<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageNews extends Controller
{
    public function posts() {
	    $args = array(
	    	'post_type' 		=> 'post',
			'posts_per_page' 	=> -1,
			// 'orderby'			=> 'date',
			'order'				=> 'ASC',
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }
}
