<?php
use app\classes\Controller\Controller_ColorController; 
Class Controller_M1 extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        
        $data = array();
        $request = Request::forge('admin/login');
        $this->template->css = "sidebar.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'test'; 
		$this->template->content = (View::forge('m1/index'));
    }

    public function action_about()
	{
        $data = array();
        $this->template->css = "sidebar.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'About Us'; 
		$this->template->content = (View::forge('m1/about'));
	} 


    
}