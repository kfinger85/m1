<?php
use \Model\ColorModel;
Class Controller_Ajaxcalls extends  Controller
{

    public static function action_index(){
        if (isset($_POST["type"]) && $_POST["type"] === 'remove' )
        {
            try{
            ColorModel::delete_color($_POST['color']); 
            echo 'success';
            }catch(\Database_Exception $e)
            {
                echo $e;
            }
        }elseif (isset($_POST["type"]) && $_POST["type"] === 'restart'){
            try{
                ColorModel::restart_color(); 
                echo 'success';
                }catch(\Database_Exception $e)
                {
                    echo $e;
                }
        }
        else
        {
            $name = ($_POST["Name"]);
            $oldname = ($_POST["OldName"]);
            try
            {
                ColorModel::set_name($name, $oldname); 
                echo json_encode(array($name,$oldname)); 
            }catch(\Database_Exception $e)
            {
                echo 'fail'; 
            }
        }
    }
}