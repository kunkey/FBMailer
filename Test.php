<?php
  require 'FB.Mailer.Class.php'; // Require Class
  $mes = new FB_Mailer;
  $mes->contents = 'Contents Message Here';
  $mes->id = 'FB User ID Here';
  $mes->cookie = 'Your Clone Cookie Here';
  $mes->fb_mailer(); // Send Message
?>
