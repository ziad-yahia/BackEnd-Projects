<?php
session_start();
unset($_SESSION['user']); //delete session elment had saved 
header('location:login.php');
