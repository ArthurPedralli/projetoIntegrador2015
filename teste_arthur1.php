<?php 

  if ($_GET && $_GET['token'] == 'ab') {
    echo md5($_GET['token']);
  }

 ?>