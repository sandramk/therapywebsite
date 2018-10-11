<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pram in the Hall Application Submission Success</title>

    <!-- Reset CSS file -->
    <link href="css/css-reset.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Animate.css file -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Hover.css file  -->
    <link rel="stylesheet" href="css/hover.css">

    <!-- CUSTOM CSS FILE(S) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/badc11c74c.js"></script>

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster" rel="stylesheet">

    <!--Favicons-->
    <link rel="shortcut icon" href="img/logos/favicon.ico">


</head>

<body>

<div id="wrapper">

  <div id="header">

  </div>

  <div class="content">

    <div class="row contact-logo">
      <a href="index.html"><img class="logo-main"src="img/logos/LogoBusiness_HI-RES.png" alt="Pram in the Hall logo"></a>
    </div>

    <section class="application-success">

    <div class="container">

<?php

// configure
$from = 'Pram in The Hall Dev <dev@praminthehall.org>';
$sendTo = 'Brent Underwood <underwood.brent@gmail.com>';
$subject = 'New Pram In the Hall application form submission';
$fields = array('name' => 'Name', 'email' => 'Email', 'bio' => 'Bio', 'work' => 'Links to Previous Work', 'writingRoutine' => 'Writing Routine', 'children' => 'About Children', 'quietTime' => 'Use of Quiet Time'); // array variable name => Text to appear in email
$okMessage = 'Thank you for your application! You will be contacted regarding its status.';
$errorMessage = 'There was an error while submitting the form. Please try again.';

// let's do the sending

try
{
    $emailText = "You have a new application submitted at www.praminthehall.org\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}

?>
<!-- echo $responseArray['message']; -->
        </div>
    </section>

  </div>

  <div id="footer">


  </div>

</div>

<!-- Include jQuery first (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!--Include the navbar plugin-->
<script src="js/jquery.bootstrap-autohidingnavbar.min.js"></script>

<!--Run the navbar plugin-->
<script>
    $(".navbar-fixed-top").autoHidingNavbar();
</script>
<!-- <script>$(".navbar-fixed-top").autoHidingNavbar();</script> -->

<!-- CUSTOM JAVASCRIPT FILE(S) -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
