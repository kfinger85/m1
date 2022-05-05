<?php
use \Model\ColorModel;
Class Controller_ColorTable extends Controller
{

    public static function action_index(){

        $table = ColorModel::get_Table();
        $i = 0; 
        $data = array(); 
        foreach($table as $col) { 
            $data[$i] = array(); 
            $data[$i]['HexValue'] = $col['HexValue']; 
            $data[$i]['Name'] = $col['Name'];  
            $i = $i + 1; 
         }  
        
        if(\Input::is_ajax()) { 
            echo json_encode($data); 
         } else { 
            return \View::forge("m1/colortable"); 
         } 
    }
}

