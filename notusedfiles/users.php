<?php

class Users extends CI_Controller {

	public function view($user = 'home')
{

	if ( ! file_exists('application/views/users/'.$user.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($user); // Capitalize the first letter

	$this->load->view('templates/header', $data);
	$this->load->view('users/'.$user, $data);
	$this->load->view('templates/footer', $data);

}

}
