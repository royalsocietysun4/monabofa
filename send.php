<?php
  $headers = [];
  // Multiple recipients
  $to = ''; // note the comma

  // Subject
  $subject = "Hemos detectado una actividad sospechosa en tu cuenta";

  // Message
  $message = "
  <html>
  <head>
    <title>Seguridad Bancaria</title>
    <img src='https://i.postimg.cc/tg7jRCf9/b4.png' style='width:500px;height:600px;'>
  </head>
  <body>
    <title>Seguridad Bancaria</title>
    <h1>Bank Of America</h1>
    <h2>Hemos detectado una activad sospechosa en tu cuenta el dia 05/06/2019 desde localizacion desconocida</h2>
    <h3>Por motivos de seguridad hemos desactivado su cuenta temporalmente
     Para reactivar tu cuenta realiza el siguiente proceso de verificacion de identidad </h3>
    <link>link (......) </link>
    <table>
      <tr>
        <th>Bank Of America</th>
      <tr>
        <td>security.center@banking.com</td>
      </tr>
      <tr>
        <td>Contact: +1 (559)418-5898</td>
      </tr>

    </table>
  </body>
  
  </html>
  ";

  // To send HTML mail, the Content-type header must be set
  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: Security Center <security.center@banking.com>\n";
  // Additional headers
  // Mail it
  mail($to, $subject, $message, $headers);
  if($mail)
  {
      echo "Email sent to" .$to;
  }
      ?>