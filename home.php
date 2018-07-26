
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hack</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
<style type="text/css">
        body, html {
    height: 100%;
}
.bg {
    /* The image used */
    background-image: url("img/Kota.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
input[type='radio'] {
display: none; 
}
    </style>
</head>
<body class="bg">

    <!-- Start your project here-->

        

<!-- Modal -->
<div class="modal fade" id="step-0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <br/><br/>
        <p class="text-center">Where Do You Want To Go?</p>
        <center>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" value="1" id="option1" autocomplete="off">Udaipur
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" value="2" id="option2" autocomplete="off">Jaipur
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" value="3" id="option3" autocomplete="off">Bikaner
    </label>
</div>
      </center>
        <br>
        <center><button type="submit" class="btn btn-primary" name="submit">Next</button></a></center>
        </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rdb_value = $_POST['options'];
  if ($rdb_value == 1) {
   // echo '<script type="text/javascript">widow.location="udaipur.php";</script>';
   header('Location: udaipur.php'); 
  }
  else if($rdb_value == 2)
  {
    header('Location: jaipur.php'); 
  }
  else{
    header('Location: Bikaner.php'); 
  }
} 
?>
      </div>
  </div>
</div>
</div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
   $("#step-0").modal("show");
});
    </script>

  
</body>

</html>