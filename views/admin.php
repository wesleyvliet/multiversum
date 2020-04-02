<?php
include 'header.php';
?>

<div class="wrapper">

    <div class="admin">
        <div>
            <h1>Admin login</h1>
            <form method='POST' action='?op=login' enctype='multipart/form-data'>
                <input name='userName' placeholder="Gebruiker">
                <input name='userPass' type="password" placeholder="wachtwoord">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>

</div>

<?php
include 'footer.php';
?>
