<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">

  <title>Signin Template for Bootstrap</title><!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet"><!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="container">
    <form class="form-signin">
      <h2 class="form-signin-heading">Please sign in</h2><input autofocus="" class=
      "form-control" placeholder="Email address" type="text"> <input class="form-control"
      placeholder="Password" type="password"> <label><a data-target="#EditBasicInfo"
      data-toggle="modal" href="" title="Click here to register.">Not Registered?</a></label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> 
      <!-- Modal -->
  <div class="rows">
    <div class="col-xs-12">
      <div class="modal fade" id="EditBasicInfo" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>

              <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
            </div>

            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-12">
                        <div class="col-lg-12">
                          <input class="form-control input-lg" name="fname" placeholder="First Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-12">
                        <div class="col-lg-12">
                          <input class="form-control input-lg" name="fname" placeholder="Last Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-12">
                        <div class="col-lg-12">
                          <input class="form-control input-lg" name="email" placeholder="Email Address" type="email">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-12">
                        <div class="col-lg-12">
                          <input class="form-control input-lg" name="password" placeholder="Password" type="password">
                        </div>
                      </div>
                    </div>
                  </div>

                  
             </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" data-dismiss="modal" type="button">Register</button> 
          </div><!--  </form>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </form>
  </div><!-- /.modal -->
  </div>
</div>
  <!-- /container -->
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>