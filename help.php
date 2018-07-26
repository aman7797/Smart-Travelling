
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
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
    background-image: url("img/background2.jpg");

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
<div class="modal fade" id="step-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
       <div class="row">
  <div class="col">
    <p>
        <h4 style ="text-align:center">Great choices!!</h4><br>
        <h5 style ="text-align:center">What can I help you with for the trip</h5> 
    </p>
    <br>
    <!-- Basic dropdown -->
    <center>
<div class="btn-group">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HELP</button>

    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Booking Done</a>
        <a class="dropdown-item" href="https://trivago.com">Book Hotel</a>
        <a class="dropdown-item" href="https://makemytrip.com">Book Flight</a>
       
    </div>
</div>
</center>
</div>
  <div class="col"><img class="img-fluid" src="img/russell help.jpeg" alt="intro"></div>
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
   $("#step-1").modal("show");
});
    </script>
</body>

</html>