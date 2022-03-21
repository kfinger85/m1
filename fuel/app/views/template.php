<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo Asset::css($css); ?>
    <?php echo Asset::js($js); ?>
    <title><?php echo $title ?></title>
</head>
<nav>
    

    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="toogleNav()">&times;</a>
      <a href="https://www.cs.colostate.edu:4444/~kfinger/m1/"> Home </a>
      <a href="https://www.cs.colostate.edu:4444/~kfinger/m1/index/color">Color Coordinate Generation</a>
      <a href="https://www.cs.colostate.edu:4444/~kfinger/m1/index/about">About</a>
    </div>
    </nav>
    <button id='closesidebar' onclick="toogleNav()">&#x2630</button>
    <div class="w3-teal" id='main'>
    <body>
    <?php echo $content ?>
    </div>
</body>
</html>


