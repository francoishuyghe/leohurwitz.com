<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageKeyPeople extends Controller
{
    public function all_key_people() {
	    $args = array(
	    	'post_type' => 'key_people',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }
}