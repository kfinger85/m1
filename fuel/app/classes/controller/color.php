<?php
/*
 * Controller for Color Page
*/
use \Model\ColorModel;
Class Controller_Color extends Controller_Template
{
    public function action_index() {
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'Color'; 
        $totalColors = ColorModel::get_total();   
        $colorArray = ColorModel::get_Table();
		$this->template->content = (View::forge('m1/color'));
        $this->template->content->set('totalColors', $totalColors);
    }
    public function post_index() {
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
        $totalColors = ColorModel::get_total();  
        $colorArray = ColorModel::get_Table(); 
        $numOfColumns = Input::post('numOfColumns');    
        $numOfRows = Input::post('numOfRows');
        $numOfColors = Input::post('numOfColors');
  
            // Post function when form data valid 
        if (($numOfColors <= $totalColors && $numOfColors > 0) && ($numOfRows > 0 && $numOfRows <= 26)  && ($numOfColumns > 0 && $numOfColumns <= 26))
        {

            $this->template->title = 'Color Table'; 
            $this->template->content = (View::forge('m1/success'));
            $this->template->content->set('numOfColunms', $numOfColumns);
            $this->template->content->set('numOfRows', $numOfRows);
            $this->template->content->set('numOfColors', $numOfColors);
            $this->template->content->set("colorArray", $colorArray);
            $this->template->content->set("printcss","print.css"); 
            $this->template->content->set("dropdown","dropdown.js");
        }else
        {
            $this->template->title = 'Color'; 
            $this->template->content = (View::forge('m1/color'));
            $this->template->content->set("main","main.css");
            $this->template->content->failure = (View::forge('m1/failure'));
            $this->template->content->failure->set("display","block");
        }
    }
}