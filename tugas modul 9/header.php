<!DOCTYPE html>
<html>
<head>
    <title>Web Belajar Session</title>
    <style>
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin:0;
            padding:0;
        }

        .header{
            background:#007bff;
            color:white;
            width: 100%;
            text-align:center;
            padding:20px;
            height: 70px;
            font-size: 14px;
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

        .field {
            margin-top: 20px;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            width: 400px;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            flex-direction: column;
        }

        .input{
            display: flex;
            /* justify-content: center;
            align-items: center; */
            /* width: 100%; */
            margin-top: 4px;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #007bff;
        }

        .btn-submit {
            width: 220px;
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 15px;
            background-color: #007bff;
            color: aliceblue;
            font-size: 18px;
            font-weight: 700;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Web Belajar Session </h1>
    <h3>Username <?php echo $_SESSION['username']; ?></h3>
</div>

<div class="content">

</div>