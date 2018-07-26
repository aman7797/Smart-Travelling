
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
    background-image: url("img/Kota.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body class="bg">

    <!-- Start your project here-->

        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Card -->
<div class="card">

  <!-- Card content -->
  <div class="card-body">
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="img/russell_back.png" alt="Card image cap">
        </div>
        <div class="col">
            <br><br><br>
            <h2 class="h2-responsive">Hii,</h2><br>
            <p>I'm Russell, let's plan a kickass trip together</p>
            <br><br>
            <!-- Button -->
    <a href="home.php" class="btn btn-primary">Hi Russell let's Go</a>
        </div>
    </div>


    

  </div>

</div>
<!-- Card -->
              </div>
            </div>
          </div>
        </div>

    <!-- /Start your project here-->

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
        setTimeout(function(){
   $("#basicExampleModal").modal("show");
}, 2000);
    </script>
</body>

</html>
