<?php
include 'config/config.php';

unset($_SESSION['user_id']);
header('Location: ./');
