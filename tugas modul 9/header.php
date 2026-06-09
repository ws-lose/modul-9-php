<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Login Session</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            padding:0;
        }

        .header{
            background:#007bff;
            color:white;
            text-align:center;
            padding:20px;
        }

        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .footer{
            position: absolute;
            bottom: 0;
            width: 100%;
            background:#333;
            color:white;
            text-align:center;
            padding:15px;
        }

        a{
            text-decoration:none;
            margin-right:10px;
        }

        .menu{
            margin:15px 0;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Title</h1>
    <h3>Username <?php echo $_SESSION['username']; ?></h3>

</div>

<div class="content">

</div>