<?php
/*
*	FeaturedProduct extends Product
*/
class FeaturedProduct extends DataExtension {	
	private static $db = array(
		'FeaturedProduct' => 'Boolean'
	);
	
	public function updateCMSFields(FieldList $fields){
		$fields->addFieldToTab('Root.Main', FieldGroup::create(
			CheckboxField::create('FeaturedProduct', 'Is a featured product?', 0)
		)->setTitle('Featured Product'), 'Content');
		
		return $fields;
	}
}

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