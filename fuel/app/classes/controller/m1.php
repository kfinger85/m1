<?php
Class Controller_M1 extends Controller_Template
{
	/*
	 * The M1 Contoller Page
	 */
	public function action_index()
	{
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'Home Page'; 
		$this->template->content = (View::forge('m1/index'));
    }

    public function action_about()
	{
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'About Us'; 
		$this->template->content = (View::forge('m1/about'));
	} 
    
}