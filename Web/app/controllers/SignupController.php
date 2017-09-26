<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller {

	public function indexAction() {

	}

	public function registerAction() {
		$objFarmer = new Farmers();

		$objFarmer->first_name = $this->request->getPost( 'first_name' );
		$objFarmer->middle_name = $this->request->getPost( 'middle_name' );
		$objFarmer->last_name = $this->request->getPost( 'last_name' );
		$objFarmer->username = $this->request->getPost( 'username' );

		// Store the password hashed
		$objFarmer->password_encrypted = $this->security->hash( $this->request->getPost( 'password' ) );

		if( true == $objFarmer->save() ) {
			echo 'Thanks for registering!';
			PHP_EOL;
		} else {
			echo 'Sorry, the following problems were generated: ';

			$messages = $objFarmer->getMessages();

			foreach( $messages as $message ) {
				echo $message->getMessage(), '<br\/>';
			}
		}

		$this->view->disable();
	}
}