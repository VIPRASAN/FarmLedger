<?php

use Phalcon\Mvc\Controller;

class MyProfileController extends Controller {

	public function indexAction() {
		// Check if the variable is defined
		if( true == $this->session->has( 'farmer_first_name' ) ) {
			// Retrieve its value and set to view
			$this->view->setVar( 'farmer_first_name', $this->session->get( 'farmer_first_name' ) );
		} else {
			// Redirect to home page.
			return $this->response->redirect( 'index/' );
		}
	}

	public function changePasswordAction() {
		echo 'In change Password action !';
	}

	public function logoutAction() {

		$this->session->destroy();

		return $this->response->redirect( 'index/' );

	}
}