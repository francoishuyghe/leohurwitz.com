<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCollaborators extends Controller
{
    public function all_collaborators() {
	    $args = array(
	    	'post_type' => 'collaborators',
			'posts_per_page' => -1,
			'meta_key'	=> 'last_name',
			'orderby'	=> 'meta_value',
			'order' => 'ASC',
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }
}
