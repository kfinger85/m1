<?php
    echo '<link type="text/css" media="print" rel="stylesheet" href="https://www.cs.colostate.edu:4444/~kfinger/m1/assets/css/print.css">';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>';
    echo '<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css" />';
    echo Asset::js($colorpickerjs); 
    echo Asset::css($colorpickercss); 

    echo '<script>
                $(document).ready(function() {
                    $(function() {
                        $("#my_color_picker").colorpicker();
                    });
                });
   </script>'; 
    echo Form::open(array(
        "action" => "index/usercolor",
        "method" => "post",
        "id" => "color_form"
    ));
    echo '<label>Color Picker: </label>'. Form::input('hexValue','', array('id' => 'my_color_picker','type' => 'text' , 'max' => '26', 'required' => 'required')); 
    echo '<br><br><label>Number of Color: </label>'. Form::input('colorName','', array('type' => 'text', 'max' => '26', 'required' => 'required')); 
    echo '<br><br>' . Form::submit(); 
    echo Form::close();


    ?>