<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Football Manager">
    <meta name="author" content="">

    <title>Football Manager</title>

    <!-- Bootstrap Core CSS -->
    <link href="/resource/one-page/grayscale/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/resource/one-page/grayscale/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/resource/one-page/grayscale/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-soccer-ball-o"></i>  Football Manager
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#register">Register</a>
                </li>
                <li>
                    <a class="page-scroll" href="#login">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Football Manager</h1>
                    <p class="intro-text">A Free Football Management Simulator Written In PHP</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About Football Manager</h2>
            <p>This football management simulator is developed using PHP and Javascript (among others) and is intended on being a free alternative to other management simulators currently in the market.</p>
            <p>The football manager is a work in progress and should be considered as such.</p>
        </div>
    </div>
</section>

<!-- Register Section -->
<section id="register" class="container content-section text-center">
{{ Form::open(['route'=>'users.store']) }}
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  {{ Form::email('email', null, array('class'=>'form-control input-sm','placeholder'=>'Email Address')) }}
              </div>

              <div class="form-group">
                  {{ Form::text('username', null, array('class'=>'form-control input-sm','placeholder'=>'Username')) }}
              </div>

              <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                          {{ Form::password('password', array('class'=>'form-control input-sm','placeholder'=>'Password')) }}
                      </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                          {{ Form::password('verify', array('class'=>'form-control input-sm','placeholder'=>'Verify Password')) }}
                      </div>
                  </div>
              </div>

              {{ Form::submit('Register', array('class'=>'btn btn-info btn-block')) }}
          </div>
        </div>
      </div>
    </div>
    {{ Form::close() }}
</section>

<!-- Login Section -->
<section id="login" class="container content-section text-center">
{{ Form::open(['route'=>'auth.store']) }}
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">

              <div class="form-group">
                  {{ Form::email('email', null, array('class'=>'form-control input-sm','placeholder'=>'Email Address')) }}
              </div>

              <div class="form-group">
                  {{ Form::password('password', array('class'=>'form-control input-sm','placeholder'=>'Password')) }}
              </div>

              <div class="form-group">
              {{ Form::submit('Register', array('class'=>'btn btn-info btn-block')) }}
              </div>
          </div>
        </div>
      </div>
    </div>
    {{ Form::close() }}
</section>

<!-- jQuery -->
<script src="/resource/one-page/grayscale/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/resource/one-page/grayscale/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/resource/one-page/grayscale/js/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/resource/one-page/grayscale/js/grayscale.js"></script>

</body>

</html>
