<?php
    if(isset($failure))
{
    echo $failure ;
}
$total = ($totalColors[0]['count(ID)']); 
// Form for user input, Using Fuel's Form class
echo Form::open(array(
        "action" => "index/color",
        "method" => "post",
        "id" => "input_form"
    ));
    echo '<label>Number of Columns: </label>'. Form::input('numOfColunms','', array('type' => 'number' , 'max' => '26', 'required' => 'required')); 
    echo '<br><br><label>Number of Rows: </label>'. Form::input('numOfRows','', array('type' => 'number', 'max' => '26', 'required' => 'required')); 
    echo '<br><br><label>Number of Colors: </label>'. Form::input('numOfColors','', array('type' => 'number', 'max' => $total-1, 'required' => 'required')); 
    echo '<br><br>' . Form::submit(); 
    echo Form::close();
    ?>
<button id='addColor' onclick='location.href="https://www.cs.colostate.edu:4444/~kfinger/m1/index/usercolor"' type='button'><rows class="fa fa-print"></rows>
Add a Color
</button>
