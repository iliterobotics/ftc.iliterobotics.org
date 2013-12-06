<?php include('header.php'); ?>
<?php

$status=$_SERVER['REDIRECT_STATUS'];
$codes=array(
      400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
      401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.'),
      403 => array('403 Forbidden', 'Sorry, employees and staff only.'),
      404 => array('404 Not Found', 'We\'re sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.'),
      405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
      408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
      414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
      500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
      502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
      504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$errortitle=$codes[$status][0];
$message=$codes[$status][1];

if($errortitle==false){
       $errortitle="Unknown Error";
       $message="An unknown error has occurred.";
}

?>

<section id="error">
<div class="container">
  <div id="title">
    <h1><small>Whoops!</small></h1>
    <?php
    echo('<h1>'.$errortitle.'</h1>');
    echo('<h1><small>'.$message.'</small></p>');
    ?>
  </div>
    <script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
    <style>
    /* Stylesheet */
    @import '/ftc/css/style.css'; @import '/css/style.css';
    </style>
    <script>
     /* Replace objects with its root. */
     document.body.innerHTML = document.body.innerHTML.replace('src="img', 'src="/img');
     /* Google Not Found */
     var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
     </script>
     <br>
</div>
</section>

<?php include('footer.php'); ?>
