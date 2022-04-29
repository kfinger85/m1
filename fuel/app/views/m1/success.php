<?php 
    echo Asset::js($dropdown); 
    // seperate css file for print mode
    echo Asset::img(("logothin.png"), array("width"=>"120" ,"height" =>"40", "id"=>"printlogo")); 
    ?>   

<div class="wrapper">
<div id="alert" >
    No duplicate colors!
</div>
<?php

$colors = array(""); 
$hexVal = array(""); 

for($i=1; $i < $numOfColors; ++$i)
{

    array_push($colors , ($colorArray[$i]['Name'])); 
    array_push($hexVal , ($colorArray[$i]['HexValue'])); 
    
}
echo '<style>';

for ($i=1; $i < $numOfColors; $i++) { 
    $color = $colors[$i]; 
    $hex = $hexVal[$i];
    echo ".$color { background-color: #$hex } \n";  
}

foreach ($colors as $color){
       
}

echo '</style>'; 

echo '<table id="uppertable">'; 

    for($rows = 0; $rows < $numOfColors; $rows++ )
    {
        echo "<tr id='row${rows}'>";
        for($cols=0; $cols < 2; $cols++)
        {
            if($cols == 0){
            echo "<td id='col${cols}'>";
            if($rows == 0){
            echo "<input type='radio' id='radio${rows}' name='color_picker' checked>"; 
            }else{
                echo "<input type='radio' id='radio${rows}' name='color_picker'>"; 

            }
            echo "<select name='colors${cols}' id='color_${rows}'>";

            foreach ($colors as $color){
                echo "<option value='${color}'>${color}</option>"; 
            }        
                echo "</select> </td>";             
        }else
            echo "<td id='row${rows}'></td>";   
        }
        echo '</tr>';

    }
echo '</table>';
echo '<table id="bottomtable">'; 
$headerAph = 'A'; 
$nums = 1;  
    for($rows = 0; $rows < $numOfRows+1; $rows++ )
    {
        $aph = 'A'; 

        echo '<tr id="tablerow">';
        for($cols=0; $cols < $numOfColunms+1; $cols++)
        {

            if($rows == 0 && $cols == 0){
                echo "<td id='bcol'></td>"; 
            }elseif($cols == 0){
                echo "<td id=bottomRow${nums} class=bottomColNums> ${nums}</td>";
                ++$nums;
            }elseif($rows ==  0){
                    echo "<td id=${headerAph} class=bottomColAph> ${headerAph}</td>";
                    ++$headerAph; 
                }
            else{
                echo "<td id=${aph}${rows}></td>";
                ++$aph; 
                }
        }  
        echo '</tr>';
    }
echo '</table>';
?>
<button id='print' onclick="window.print();"><rows class="fa fa-print"></rows>
Print Me
</button>