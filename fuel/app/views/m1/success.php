<?php 
    echo Asset::css($main);  
    echo Asset::js($dropdown); 
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';       
 
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
    for($i = 0; $i < $numOfColors; $i++ )
    {
        echo '<tr id="tablerow">';
        for($j=0; $j < 2; $j++)
        {
            if($j == 0){
            echo "<td id='col${j}'> 
            <select name='colors${j}' id='color_${i}'>";

            foreach ($colors as $color){
                echo "<option value='${color}'>${color}</option>"; 
            }        
                echo "</select> </td>";             
        }else
            echo "<td id='col${j}'> ? </td>";   

        }
        echo '</tr>';

    }
echo '</table>';
echo '<table id="bottomtable">'; 
$aph = 'A'; 
    for($i = 0; $i < $numOfRows; $i++ )
    {
        echo '<tr id="tablerow">';
        for($j=0; $j < $numOfColunms; $j++)
        {
            if($j == 0 && $i == 0)
                echo "<td id='bcol'> </td>";
                elseif($i == 0)
                {
                    echo "<td id='bcol'> ${aph}</td>";
                    $aph++; 
                }
            else{
                echo "<td id='bcol'></td>";
            }
        }  
        echo '</tr>';
    }
echo '</table>';
?>
<button id='print' onclick="window.print();"><i class="fa fa-print"></i>
Print Me
</button>




 

