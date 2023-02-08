<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3B1HD2GP6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-L3B1HD2GP6');
    </script>
    <title>Loginbait.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700&display=swap">-->
    <link rel="stylesheet" href="font1.css">

    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">-->
    <link rel="stylesheet" href="font2.css">

    <link rel="stylesheet" href="public/css/tailwind/tailwind.min.css">


    <link rel="icon" type="image/png" sizes="32x32" href="assets/logos/favicon.ico">
</head>
<body class="antialiased bg-body text-body font-body">
</body>
<?php

require 'vendor/autoload.php';

use Mailgun\Mailgun;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$spammer = FALSE;


//  // collect value of input field
//  $name = $_POST['fname'];
//  if (empty($name)) {
//    echo "Name is empty";
//  }
//  else {
//    echo $name;
//  }

//
// A very simple PHP example that sends a HTTP POST to a remote site
//
try {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Require the honeypot field to be present but empty
    if (!isset($_REQUEST['lastname']) || !empty($_REQUEST['lastname'])) {
      // Hello spammer!
      $spammer = TRUE;
      echo 'Thank you very much. We will get back to you.';

      $client = new GuzzleHttp\Client();
      $response = $client->request('POST', 'https://honeypot-backend.nicastro.io/api/spam?XDEBUG_SESSION_START=PHPSTORM', [
        'form_params' => [
          'firstname' => $_REQUEST['firstname'],
          'lastname' => $_REQUEST['lastname'],
          'email' => $_REQUEST['email'],
          'message' => $_REQUEST['message'],
        ],
        'verify' => FALSE,
      ]);
      return;
    }

    if (empty($_REQUEST['firstname']) || empty($_REQUEST['email']) || empty($_REQUEST['message'])) {
      echo '<div>Please fill all required fields.
<p style="padding-top:10px;"><a style="color: #ec5353;text-decoration: underline" href="/#contact">Back to homepage</a></></div>';
      return;
    }

    $data = [
      'firstname' => $_REQUEST['firstname'],
      'email' => $_REQUEST['email'],
      'message' => $_REQUEST['message'],
    ];


    # Instantiate the client.
    $mgClient = Mailgun::create($_SERVER['MAILGUN_APIKEY']);
    $domain = "loginbait.com";

    # Make the call to the client.
    $result = $mgClient->messages()->send('loginbait.com',
      [
        'from' => 'Loginbait Contact form <postmaster@loginbait.com>',
        'to' => 'Daniele Nicastro <setaloro@gmail.com>',
        'subject' => 'Contact:' . $_REQUEST['firstname'],
        'template' => 'contact__website',
        'h:X-Mailgun-Variables' => json_encode($data),
      ]);

    echo '<div>Thank you very much. We will get back to you.
<p style="padding-top:10px;"><a style="color: #ec5353;text-decoration:underline;padding-top:10px;" href="/">Back to homepage</a></p></div>';
    return;
  }
}
catch (\Exception $exception) {

  echo 'error exception';
  echo "\n\n";
  echo $exception->getMessage();
}


?>

</html>