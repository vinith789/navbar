<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header(header: 'location:login_form.php');

?>