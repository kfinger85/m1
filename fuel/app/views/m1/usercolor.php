    <link type="text/css" media="print" rel="stylesheet" href="https://www.cs.colostate.edu:4444/~kfinger/m1/assets/css/print.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <?php 
    echo Asset::js($colorpickerjs); 
    echo Asset::css($colorpickercss); 
    ?>

<script defer>

$(document).ready(function() {
    $(function() {
        $("#my_color_picker").colorpicker();
    });
    let alert = $('#alert').addClass('show');
    setTimeout(function(){ 
        alert.removeClass('show'); 
    }, 3000); 
});
</script>

<?php
    if(isset($failureDuplicate)){  
        echo '
        <div id="alert" >
            Duplicate color name, try again
        </div>';
    }elseif(isset($failureNameLen)){
        echo '
        <div id="alert" >
            Name to long, try again
        </div>';

    }elseif(isset($success)){
        echo '
        <div id="alert" >
            Color added!
        </div>';
    }
    echo Form::open(array(
        "action" => "index/usercolor",
        "method" => "post",
        "id" => "color_form"
    ));
        echo '<label>Color Picker: </label>'. Form::input('hexValue','', array('id' => 'my_color_picker','type' => 'text' , 'maxlength' => '30', 'required' => 'required' , 'placeholder' => 'click here' ,"autocomplete" => "off")); 
        echo '<br><br><label>Name of Color: </label>'. Form::input('colorName','', array('type' => 'text', 'maxlength' => '30', 'required' => 'required')); 
        echo '<br><br>' . Form::submit(); 
        echo Form::close();
    ?>