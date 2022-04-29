<?php
    // echo "insertion Success";

    $userName  = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $phone     = $_POST['phone'];

    if ($userEmail == '' || $userName == '' || $phone == '') {
        echo '<script> alert("All fields are required"); </script>';
    } else {
        echo "Every thing is ok!";
    }