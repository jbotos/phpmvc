<?php

class Index extends Controller {
	
	function __construct() 
	{
		parent::__construct();		
	}
	
	function index() {
		//echo 'INSIDE INDEX INDEX';
		$this->view->render('index/index');
	}
	
	//public function index(){
		

		
		/*// Fetch the page data
        $this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
		
		// Load the view
		$this->data['subview'] = $this->data['page']->template;
		$this->load->view('_main_layout', $this->data);*/
	
	
	//}
	
}

 