<?php
class AVGeoPointTest extends \Enhance\TestFixture {
	public function setUp(){

	}

	public function getGeoPointExpectType(){
		$return = \Enhance\Core::getCodeCoverageWrapper('AVGeoPoint', array(40.0,-30.0));

		\Enhance\Assert::isTrue( array_key_exists('__type',$return->location) );
	}

}

?>
