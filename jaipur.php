
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
input[type='radio'] {
display: none; 
}
    </style>
</head>
<body class="bg">

    <!-- Start your project here-->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
              
              <div class="modal-body">
                <center>
                <h2 class="h2-responsive text-center"><b>Hello Welcome</b></h2>
                <p>We love personilizing trips, so i need to know</p>
                <p>What you like? & What you don't!</p></center>
                <br>
             <div class="row">

                 <div class="col-3">
                    <div class="card">
                        <!-- <div class="card-body">  -->
                            <center><img src="img/Activities_96px.png"/></center>
                            <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal1" data-dismiss="modal">Activities</button></center>
                            <p></p>
                        <!-- </div> -->
                    </div>
                     
                 </div>
                 <div class="col-3">
                    
                    <div class="card">
                        <!-- <div class="card-body">  -->
                            <center><img src="img/Booking_96px.png"/></center>
                            <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#basicExampleModal2" data-dismiss="modal">Bookings</button></center><p></p>
                        <!-- </div> -->
                    </div>
                 </div>
                 <div class="col-3">
                    
                    <div class="card">
                        <!-- <div class="card-body">  -->
                            <center><img src="img/Hotel _96px.png"/></center>
                            <center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#basicExampleModal3" data-dismiss="modal">Hotels</button></center><p></p>
                        <!-- </div> -->
                    </div>
                 </div>
                 <div class="col-3">
                    
                    <div class="card">
                        <!-- <div class="card-body">  -->
                            <center><img src="img/Transport.png"/></center>
                            <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal4" data-dismiss="modal">Transport</button></center><p></p>
                        <!-- </div> -->
                    </div>
                 </div>
             </div>
             <br>
            <center><button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#step-1"  data-dismiss="modal" >Let's Go</button></center>
              </div>
            </div>
          </div>
        </div>

      

<!-- Modal -->
<div class="modal fade" id="step-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <img src="img/jaipur/jaipur checkout some amazing sites.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Check out some amazing sites</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-2"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="step-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/jaipur/jaipur experience life like a local.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Experience life like a local</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-3"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>





<!-- Modal -->
<div class="modal fade" id="step-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/bikaner/bikaner explore desserts.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Explore the desserts</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-4"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="step-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/jaipur/jaipur checkout some amazing attractions.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Checkout some amazing attractions</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-5"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="step-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
  	<div class="modal-content">
      <div class="modal-body">
        <img src="img/jaipur/jaipur experience the rich rajputana culture.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Experience the rich rajputana culture</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-6"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="step-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/jaipur/jaipur indulge yourself in shoppers paradise.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Indulge yourself in shopper's paradise</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#step-7"  data-dismiss="modal" >Next</button>
        </form></center>
      </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="step-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/jaipur/jaipur experience beauty on a whole new level.jpg" class="img-fluid" />
        <br/><br/>
        <p class="text-center">Experience beauty on a whole new level</p>
        <center>
            <form>
            <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option1" autocomplete="off">Yeah
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option2" autocomplete="off">If Time Permits
    </label>
    <label class="btn btn-default form-check-label">
        <input class="form-check-input" type="radio" name="options" id="option3" autocomplete="off">Nahh
    </label>
</div>
      </center>
        <br>
        <center><a href="help.php"><button type="button" class="btn btn-primary" >Next</button></a>
        </form></center>
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
   $("#basicExampleModal").modal("show");
});
    </script>
</body>

</html>