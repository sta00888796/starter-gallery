<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application {

	public function index()
	{
		//$this->load->view('gallery');
                $this->data['pagebody'] = 'gallery';
                $this->render();
	}
}
