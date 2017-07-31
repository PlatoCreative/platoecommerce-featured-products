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
