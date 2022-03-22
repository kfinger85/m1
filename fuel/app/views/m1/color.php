<?php
    echo Asset::css($main);  
    if(isset($failure))
{
    echo $failure ;
}
echo Form::open(array(
        "action" => "index/color",
        "method" => "post",
        "id" => "input_form"
    ));
    //echo '<label>Number of Columns: </label>'. Form::input('numOfColunms',''); 
    echo '<label>Number of Columns: </label>'. Form::input('numOfColunms','', array('type' => 'number' , 'max' => '26', 'required' => 'required')); 
    echo '<br><br><label>Number of Rows: </label>'. Form::input('numOfRows','', array('type' => 'number', 'max' => '26', 'required' => 'required')); 
    echo '<br><br><label>Number of Colors: </label>'. Form::input('numOfColors','', array('type' => 'number', 'max' => '10', 'required' => 'required')); 
    echo '<br>' . Form::submit(); 
    echo Form::close();