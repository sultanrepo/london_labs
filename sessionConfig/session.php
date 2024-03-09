<?php

session_start();
if (!isset($_SESSION['dataData'])) {
    ?>
    <script>
        window.location.href="auth-login.php?status=sessionExp";
    </script>
    <?php
    // header('Location: auth-login.php');
}

?>