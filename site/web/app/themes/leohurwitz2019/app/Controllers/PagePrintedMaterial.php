<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_QUERY;

class PagePrintedMaterial extends Controller
{
    public function all_materials() {

		$the_posts = [];
		$cats = get_terms('category');

		foreach ($cats as $cat) {
			$args = array(
				'post_type' 		=> 'printed_material',
				'posts_per_page' 	=> -1,
				'order'				=> 'ASC',
				'category_name'		=> $cat->slug,
			);

			$the_posts[$cat->slug] = new WP_Query( $args );
		}

	    return [$cats, $the_posts];
    }
}
