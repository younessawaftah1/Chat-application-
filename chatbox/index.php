<?php
include('connection.php');
session_start();


// require 'PHPMailerAutoload.php';

// $mail = new PHPMailer;

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'localhost';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'younessawaftah57@gmail.com';                 // SMTP username
// $mail->Password = 'the_password';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to

// $mail->setFrom('fromuser@example.com', 'Mailer');
// $mail->addAddress('younessawaftah57@gmail.com', 'Joe User');     // Add a recipient
// //$mail->addAddress('ellen@example.com');               // Name is optional
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }
// //session_id('user1');
if (empty($_SESSION['user'])) {
    header('location: login.php');
}  //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    else {   
?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>indexc </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <style>
            @font-face {
                font-family: "gotham-pro";
                src: url('fonts/gotham-pro-regular.eot');
                src: url('fonts/gotham-pro-regular.eot?#iefix') format('embedded-opentype'),
                    url('fonts/gotham-pro-regular.svg#Gotham Pro') format('svg'),
                    url('fonts/gotham-pro-regular.woff') format('woff'),
                    url('fonts/gotham-pro-regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            body {
                font-family: "gotham-pro";
                direction: ltr;
            }

            .user {
                margin-top: 70px;
            }

            .details {
                text-align: left;
            }

            @media screen and (max-width:768px) {
                .user {
                    margin-top: 80px;
                }

                .details {
                    text-align: center;
                }
            }
        </style>
        <script src="js/jq.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body onload="content_load()">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><strong><span class="glyphicon glyphicon-user">
                    </span> Welcome <?php echo $_SESSION['name']; ?></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li><a href="account.php"><strong><i class="glyphicon glyphicon-cog"></i> Update</strong></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><strong><i class="glyphicon glyphicon-log-out"></i> Logout</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid user">
            <div class="row">
                <!-- chat box -->
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h4 class="lead" align="center" ><i class="glyphicon glyphicon-user"></i> Registered Users </h4>
                        </div>
                        <div class="panel-body contents"  align="center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <script>
            function content_load() {
                $(function() {
                    $.get("ajax/freinds.php", function(data) {
                        $(".contents").html(data);
                    });
                });
            }
            setInterval(function() {
                content_load()
            }, 2000);
        </script>
    </body>

    </html>
<?php } ?>