<?php 
    echo Asset::css($main);  
    echo Asset::js($dropdown); 
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';       
    //seperate css file for print mode
    echo '<link type="text/css" media="print" rel="stylesheet" href="https://www.cs.colostate.edu:4444/~kfinger/m1/assets/css/print.css">'
?>
<div class="wrapper">
<div id="alert" >
    No duplicate colors!
</div>
<?php
echo '<table id="uppertable">'; 
$colors = ['','red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 
'brown', 'black', 'teal']; 
    for($rows = 0; $rows < $numOfColors; $rows++ )
    {
        echo '<tr id="tablerow">';
        for($cols=0; $cols < 2; $cols++)
        {
            if($cols == 0){
            echo "<td id='col${cols}'> 
            <select name='colors${cols}' id='color_${rows}'>";

            foreach ($colors as $color){
                echo "<option value='${color}'>${color}</option>"; 
            }        
                echo "</select> </td>";             
        }else
            echo "<td id='col${cols}'> ? </td>";   
        }
        echo '</tr>';

    }
echo '</table>';
echo '<table id="bottomtable">'; 
$aph = 'A'; 
$nums = 1;  
    for($rows = 0; $rows < $numOfRows+1; $rows++ )
    {
        echo '<tr id="tablerow">';
        for($cols=0; $cols < $numOfColunms+1; $cols++)
        {
            if($rows == 0 && $cols == 0){
                echo "<td id='bcol'></td>"; 
            }elseif($cols == 0){
                echo "<td id='bcol'> ${nums}</td>";
                ++$nums;
            }elseif($rows ==  0){
                    echo "<td id='bcol'> ${aph}</td>";
                    ++$aph; 
                }
            else{
                echo "<td id='bcol'></td>";
                }
        }  
        echo '</tr>';
    }
echo '</table>';
?>
<button id='print' onclick="window.print();"><rows class="fa fa-print"></rows>
Print Me
</button>




 

