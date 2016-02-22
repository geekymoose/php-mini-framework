<?php
namespace modules\gallery\controllers;

/**
 * Controller for a Gallery
 *
 * @since	Feb 22, 2016
 * @author	Constantin MASSON
 */
class GalleryController extends \modules\core\controllers\EntityController{
	/**
	 * Create a new controller for Gallery
	 */
	public function __construct(){
		parent::__construct('gallery');
	}
}
