<?php
use \Model\ColorModel;
Class Controller_UserColor extends Controller_Template
{


    public function action_index()
	{
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
		$this->template->title = 'Color Maker'; 
        $totalColors = ColorModel::get_namesArray();
        $this->template->content = (View::forge('m1/usercolor'));
        $this->template->content->set("colorpickercss","jquery.colorpicker.css");
        $this->template->content->set("colorpickerjs","jquery.colorpicker.js"); 

    }
	public function post_index()
	{
        try{
		$hexValue = Input::post('hexValue');    
        $colorName = Input::post('colorName');
        $this->template->content = (View::forge('m1/usercolor'));   
        $this->template->css = "main.css"; 
        $this->template->js = "sidebar.js";
        $this->template->title = 'Color Maker';
        ColorModel::add_color($colorName ,$hexValue); 
        $totalColors = ColorModel::get_total();
        $this->template->content->set("colorpickercss","jquery.colorpicker.css");
        $this->template->content->set("colorpickerjs","jquery.colorpicker.js");
        $this->template->content->set("success","true");
        }catch(\Database_Exception $e)
        {
            $this->template->css = "main.css";           
            $this->template->js = "sidebar.js";
            $this->template->title = 'Color Maker'; 
            $this->template->content = (View::forge('m1/usercolor'));
            $totalColors = ColorModel::get_total();
            $this->template->content->set("colorpickercss","jquery.colorpicker.css");
            $this->template->content->set("colorpickerjs","jquery.colorpicker.js");
            $this->template->content->set("main","main.css");
            $this->template->content->set("failure","true");

        }  
	}

}