<?php
/**
 * Standard controller layout.
 * 
 * @package LydiaCore
 */
class CCTest extends CObject implements IController {

	public function __construct()
	{
		parent::__construct();
	}
  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    //global $ly;
    //$ly->data['title'] = "Testing Testing";
    $this->data['title'] = "Testing CObject variabler"; 
    }

}
?>