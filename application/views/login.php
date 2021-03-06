<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Academic Analyis|JSSATEN</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/agency.css" rel="stylesheet">

    <link href="/assets/css/bootstrap-social.css" rel="stylesheet">
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<style>
.axis path, .axis line
      {
          fill: none;
          stroke: #777;
          shape-rendering: crispEdges;
      }

      .axis text
      {
          font-family: 'Arial';
          font-size: 13px;
      }
      .tick
      {
          stroke-dasharray: 1, 2;
      }
      .bar
      {
          fill: FireBrick;
      }


</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-md-2">
        <center><a href="/"><img src="/assets/img/logo.png" width="65%" height="65%" style="float: right; vertical-align:middle; margin-top:10px; margin-bottom: 10px;"></a></center>
        </div>
        <div class="col-md-7">
        <h3 style="color: #006666;">JSS Academy of Technical Education</h3>
       <h4>C-20/1, Sector 62, Noida, Uttar Pradesh</h4>
        </div>



                </div>
            </div>

        </div>
        <center><h1 style="margin-top: 25px;">University Result Analysis</h1></center>
        <center><h3 style="margin-top: 10px;">LOGIN</h3></center>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"></h2>
                    </div>
                </div>
                <div class="row" style="height: 300px;">
                    <div class="col-lg-12">
                      <div class="col-md-5 col-md-offset-7">
                        <form method="post" action="/home/doLogin">
                          <div>
                          <label>Username</label>
                          <input class="form-control" name="username" style="height:50px; width: 100%;">
                        </div>
                        <div>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" style="height:50px; width: 100%;">
                      </div>
                      <div>
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right; margin-top: 30px;">Login</button>
                      </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </section>

    <!-- Navigation -->



<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

     <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<script src="/assets/js/agency.js"></script>

<script src="/assets/js/custom.js"></script>
<script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
      responsive: true
});
});
</script>

</body>
</html>
