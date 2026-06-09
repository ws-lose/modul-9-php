<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit;
}

include "header.php";
?>


<form action="proses_login.php" method="POST">
    <div class="form">
    <h2>Silahkan Login</h2>
    <p>
        Username<br>
        <input type="text" name="username" required>
    </p>

    <p>
        Password<br>
        <input type="password" name="password" required>
    </p>

    <button type="submit">Submit</button>
</div>
</form>

<?php
if(isset($_GET['pesan'])){
    echo "<p style='color:red'>".$_GET['pesan']."</p>";
}

include "footer.php";
?>