<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function welcome(){

		/*For the Login Page First*/
		$this->load->view('templates/header');
		/*Open when you need only top navbar*/
		// $this->load->view('navs/topnav');
		/*Open when you need only side navbar*/
		// $this->load->view('navs/sidenav');
		/*Open when you need both*/
		$this->load->view('navs/sideandtop');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */