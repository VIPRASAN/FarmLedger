<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller {

	public function indexAction() {
		if( true == $this->session->has( 'farmer_first_name' ) ) {
			return $this->response->redirect( 'my_profile/index' );
		}
	}

	public function attemptLoginAction() {

		$objFarmer = Farmers::findFirstByUsername( $this->request->getPost( 'username' ) );

		if( $objFarmer ) {
			if( $this->security->checkHash( $this->request->getPost( 'password' ), $objFarmer->password_encrypted ) ) {

				// Set Seesion and then redirect to my profile

				$this->session->set( 'farmer_first_name', $objFarmer->getFirstName() );

				// A HTTP Redirect
				return $this->response->redirect( 'my_profile/index' );
			}
		} else {
			// To protect against timing attacks. Regardless of whether a user
			// exists or not, the script will take roughly the same amount as
			// it will always be computing a hash.
			$this->security->hash( rand() );
			echo 'Invalid Username / Password';
		}

	}

}