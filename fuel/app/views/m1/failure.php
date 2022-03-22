<div id="alert" onload="myFunction()">
    Invaild number!
</div>
<script defer>
    document.onload = function(){
        // Get the snackbar DIV
        var x = document.getElementById("alert");
        console.log(x);
      
        // Add the "show" class to DIV
        x.className = "show";
      
        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
</script>