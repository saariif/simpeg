<?php
if (isset($_SESSION['LOGIN_MODE']) && $_SESSION['LOGIN_MODE'] === 'ONEHAND') {
    session_destroy();
    echo "<script>window.close()</script>";
        exit;
}