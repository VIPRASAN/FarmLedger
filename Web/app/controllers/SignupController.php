<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
	public function indexAction()
	{

	}

	public function registerAction()
	{
		$objFarmer = new Farmers();

		// Store and check for errors
		$success = $objFarmer->save(
			$this->request->getPost(),
			[
				"first_name",
				"middle_name",
				"last_name",
				"birth_date",
				"pan_number",
				"aadhar_number",
			]
		);

		if ($success) {
			echo "Thanks for registering!";
			PHP_EOL;
		} else {
			echo "Sorry, the following problems were generated: ";

			$messages = $objFarmer->getMessages();

			foreach ($messages as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}

		$this->view->disable();
	}
}