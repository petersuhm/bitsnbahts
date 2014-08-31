<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bits'n Bahts.com</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand thai" href="/">Bits'n Bahts</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/#signup">Sign up for updates!</a></li>
            <li><a href="/">Blog</a></li>
            <li><a href="/my-story">My story</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1><a class="thai" href="/">Bits'n Bahts</a> is coming soon!</h1>
        <p class="lead">Hi! My name is Peter. I work as a web developer, while I travel.<br><a href="/my-story">Read my story</a> if you want to know how!</p>

        <div class="gravatar">
          <img title="Me in the Sahara desert" src="http://abroadness.com/wp-content/themes/Less-child/images/profile1-small.jpg" height="150" width="150">
        </div>
      </div>

      <hr>

      <div>

        @yield('content')

      </div>

      <hr>

      <div>
        <h2 id="signup">Let's stay in touch!</h2>
        <p class="lead">
          If you give me your e-mail, I promise I'll let you know whenever something new happens on this site. I'll never spam you or share your e-mail address with anyone.
        </p>
        <form action="//bitsnbahts.us8.list-manage.com/subscribe/post?u=61e2bc9b2c1ef062f046cd8a8&amp;id=ab11cd4c74" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
          <div class="form-group form-group-lg">
            <div class="col-sm-10">
              <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Your e-mail">
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;">
              <input type="text" name="b_61e2bc9b2c1ef062f046cd8a8_ab11cd4c74" tabindex="-1" value="">
            </div>
            <div class="col-sm-2">
              <input type="submit" value="Stay in touch!" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-lg btn-success">
            </div>
          </div>
        </form>
      </div>

      <hr>

      <footer>
        <p><span class="glyphicon glyphicon-globe"></span> Current location: Copenhagen, Denmark.</p>
        <p>Copyright &copy; 2014 <a href="/">Bits'n Bahts.com</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
