<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class SingleCollaborators extends Controller
{
    public function movies() {
	    $args = array(
	    	'post_type' => 'movie',
			'meta_query' => array(
				array(
					'key' => 'collaborators',
					'value' => '"' . get_the_ID() . '"',
					'compare' => 'LIKE'
				)
			)
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }
}
