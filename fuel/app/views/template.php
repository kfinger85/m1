<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
      <a href="https://www.cs.colostate.edu:4444/~kfinger/m1/index/about">Members</a>
    </div>
  </nav>
    <button id='closesidebar' onclick="toogleNav()">&#x2630</button>
  <body>
    <div id='main'>  
      <?php echo $content ?>
      <footer>
        <?php echo '<a href="https://cs.colostate.edu">Dept of Computer Science at Colorado State University!</a>' ?>
    </footer>
    </div>
  </body>

</html>


