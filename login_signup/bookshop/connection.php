<?php	

	$link = mysqli_connect("localhost", "root", "root", "invoice");
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_error($link));
  }

  ?>