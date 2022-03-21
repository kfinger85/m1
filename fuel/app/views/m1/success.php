<?php 
    echo Asset::css($table);  
    echo Asset::js($dropdown);  
    //echo '<link rel="stylesheet" type="text/css" href="print.css" media="print">';
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
    for($i = 0; $i < $rows; $i++ )
    {
        echo '<tr id="tablerow">';
        for($j=0; $j < 2; $j++)
        {
            if($j == 0){
            echo "<td id='col${j}'> 
            <select name='colors' id='color_${i}'>";

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
    for($i = 0; $i < $rows; $i++ )
    {
        echo '<tr id="tablerow">';
        for($j=0; $j < $columns; $j++)
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
<button id='print' onclick="window.print();" class="noPrint">
Print Me
</button>




 

