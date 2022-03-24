<?php
/*
 * Controller for Color Page
*/
Class Controller_Color extends Controller_Template
{
    public function action_index() {
        $this->template->css = "sidebar.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'Color'; 
		$this->template->content = (View::forge('m1/color'));
        $this->template->content->set("main","main.css");

    }
    //Post function when form data valid 
    public function post_index() {
        $numOfColunms = Input::post('numOfColunms');    
        $numOfRows = Input::post('numOfRows');
        $numOfColors = Input::post('numOfColors');         
    
        if ($numOfColors <= 10 && $numOfColors > 0 && ($numOfRows <= 26 && $numOfColunms <= 26))
        {   
            $this->template->css = "sidebar.css"; 
            $this->template->js = "sidebar.js";
            $this->template->title = 'Color Table'; 
            $this->template->content = (View::forge('m1/success'));
            $this->template->content->set('numOfColunms', $numOfColunms);
            $this->template->content->set('numOfRows', $numOfRows);
            $this->template->content->set('numOfColors', $numOfColors);
            $this->template->content->set("main","main.css");
            $this->template->content->set("printcss","print.css"); 
            $this->template->content->set("dropdown","dropdown.js");
        }else
        {
            $this->template->css = "sidebar.css";           
            $this->template->js = "sidebar.js";
            $this->template->title = 'Color'; 
            $this->template->content = (View::forge('m1/color'));
            $this->template->content->set("main","main.css");
            $this->template->content->failure = (View::forge('m1/failure'));
            $this->template->content->set('display', 'inline');
        }
    }
}
