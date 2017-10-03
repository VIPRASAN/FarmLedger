<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller {

	public function indexAction() {

	}

	public function registerAction() {
		$objFarmer = new Farmers();

		$objFarmer->setFirstName( $this->request->getPost( 'FirstName' ) );
		$objFarmer->setMiddleName( $this->request->getPost( 'MiddleName' ) );
		$objFarmer->setLastName( $this->request->getPost( 'LastName' ) );
		$objFarmer->setUsername( $this->request->getPost( 'Username' ) );

		// Store the password hashed
		$objFarmer->setPasswordEncrypted( $this->security->hash( $this->request->getPost( 'password' ) ) );

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