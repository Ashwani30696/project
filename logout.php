<?php
session_start();
include 'confi.php';

session_unset();

session_destroy();

header("location:log.php");