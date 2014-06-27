<?php
session_start();
session_destroy();
header('Location: ../view/htm/index.php');
?>