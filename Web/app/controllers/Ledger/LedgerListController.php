<?php

use Phalcon\Mvc\Controller;

class LedgerListController extends Controller {

	public function indexAction() {
		// Check if the variable is defined
		if( true == $this->session->has( 'farmer_first_name' ) ) {
			// Retrieve its value and set to view
			$this->view->setVar( 'farmer_first_name', $this->session->get( 'farmer_first_name' ) );
		} else {
			return $this->response->redirect( 'index/' );
		}
	}

	public function viewListAction() {
		echo 'In view Ledger list action';
	}

}