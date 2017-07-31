<?php
/*
*	FeaturedProduct_Controller extends Page_Controller
*/
class FeaturedProduct_Controller extends DataExtension {	
	private static $allowed_actions = array(
	);
	
	public function getFeaturedProducts($limit = 6, $sort = 'RAND()'){
		$featuredProducts = Product::get()->filter(array('FeaturedProduct' => 1))->sort($sort)->limit($limit);
		return $featuredProducts;
	}
}
