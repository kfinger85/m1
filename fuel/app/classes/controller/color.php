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
        $colorArray = ColorModel::get_namesArray();
        Debug::dump($colorArray[0]['Name']);   
        Debug::dump($colorArray[0]['HexValue']);   
		$this->template->content = (View::forge('m1/color'));
        $this->template->content->set('totalColors', $totalColors);
        


    }
    // Post function when form data valid 
    public function post_index() {
        $numOfColunms = Input::post('numOfColunms');    
        $numOfRows = Input::post('numOfRows');
        $numOfColors = Input::post('numOfColors');
        $totalColors = ColorModel::get_total();  
        $colorArray = ColorModel::get_namesArray();     
  
    
        if (($numOfColors <= $totalColors && $numOfColors > 0) && ($numOfRows > 0 && $numOfRows <= 26)  && ($numOfColunms > 0 && $numOfColunms <= 26))
        {   
            $this->template->css = "main.css"; 
            $this->template->js = "sidebar.js";
            $this->template->title = 'Color Table'; 
            $this->template->content = (View::forge('m1/success'));
            $this->template->content->set('numOfColunms', $numOfColunms);
            $this->template->content->set('numOfRows', $numOfRows);
            $this->template->content->set('numOfColors', $numOfColors);
            $this->template->content->set("colorArray", $colorArray);
            $this->template->content->set("printcss","print.css"); 
            $this->template->content->set("dropdown","dropdown.js");
        }else
        {
            $this->template->css = "main.css";           
            $this->template->js = "sidebar.js";
            $this->template->title = 'Color'; 
            $this->template->content = (View::forge('m1/color'));
            $this->template->content->set("main","main.css");
            $this->template->content->failure = (View::forge('m1/failure'));
            $this->template->content->failure->set("display","block");
        }
    }
}
