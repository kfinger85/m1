<?php
if(isset($failure))
{
    echo $failure ;
}
echo Form::open(array(
        "action" => "index/color",
        "method" => "post",
        "id" => "fuel_form"
    ));
    echo '<span>Number of Columns: </span>'. Form::input('numOfColunms',''); 
    echo '<br><br><span>Number of Rows: </span>'. Form::input('numOfRows',''); 
    echo '<br><br><span>Number of Colors: </span>'. Form::input('numOfColors',''); 

    echo '<br>' . Form::submit(); 
    echo Form::close();