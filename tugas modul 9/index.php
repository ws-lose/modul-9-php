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
        <div class="field">
    <h2>Silahkan Login</h2>
    <p>
        <label for="username">Username</label>
        <input type="text" name="username" class="input username" placeholder="Masukkan username anda" required>
    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" name="password" class="input password" placeholder="Masukkan password anda"  required>
    </p>

    <button type="submit" class="btn-submit">Login</button>
<?php
if(isset($_GET['pesan'])){
    echo "<p style='color:red; display:flex; justify-content: center; align-items: center;'>".$_GET['pesan']."</p>";
    }
    
    include "footer.php";
    ?>
</div>
</div>
</form>
