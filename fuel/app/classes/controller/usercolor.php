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
        $this->template->css = "main.css";           
        $this->template->js = "sidebar.js";
        $this->template->title = 'Color Maker';
        $this->template->content = (View::forge('m1/usercolor'));
        $this->template->content->set("colorpickercss","jquery.colorpicker.css");
        $this->template->content->set("colorpickerjs","jquery.colorpicker.js");
        $colorName = Input::post('colorName');
        if(strlen($colorName) > 20)
        {
            $this->template->content->set("failureNameLen","true");

        }else{
                try{
		        $hexValue = Input::post('hexValue');    
                ColorModel::add_color($colorName ,$hexValue); 
                $this->template->content->set("success","true");
                }catch(\Database_Exception $e)
                {
                    $this->template->content->set("failureDuplicate","true");
                }
        }  
	}

}