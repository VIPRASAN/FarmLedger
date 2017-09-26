<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller {

	public function indexAction() {

	}

	public function attemptLoginAction() {

		$objFarmer = Farmers::findFirstByUsername( 'pyadav' );

		var_dump( $this->request->getPost( 'username' ) );
		var_dump( $objFarmer );
		exit;

		if( $objFarmer ) {
			if( $this->security->checkHash( $this->request->getPost( 'password' ), $objFarmer->password_encrypted ) ) {
				echo 'Valid Login !!!';
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