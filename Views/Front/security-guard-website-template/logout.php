<?php

session_start();

session_unset();

session_destroy();


header('refresh:1;url=../signup-form-15/index.php');