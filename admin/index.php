<?php
    session_start();
    print $_SESSION['name'] . ": " . $_SESSION['credential'];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $.get(
        '../include/lib/get-login-data.php', function(data) {
        });
</script>
