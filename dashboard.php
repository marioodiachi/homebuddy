<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header button {
            background-color: #4578a0;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .overall {
            
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            justify-items: center;
            margin-top: 20px;
        }

        .user {
            text-align: center;
            background-color: #4578a0;
            padding: 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position:relative;
            display: block;
            margin: 100px 400px 100px 400px;
            color: white;
            
            
        }
      
        a{
            text-decoration: none;
           
        }

        .user img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user caption {
            font-weight: bold;
        }

        .user:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        @media screen and (max-width: 600px) {
            .overall {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            }

            .user img {
                width: 100px;
                height: 100px;
            }.user{

            text-align: center;
            background-color: #4578a0;
            padding: 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position:relative;
            display: block;
            margin: 100px 200px 100px 200px;
            }

        }
    </style>
    
  
</head>
<body>
<header>
    <?php
    session_start();

    if(isset($_SESSION['username'])){
        echo"Welcome ".$_SESSION['username'];
        
    } 
$_SESSION['username'];
    echo"<a href='logout.php'><button>log out</button></a>"
  
    ?>
</header> 
<div class="overall">

    <a href="profile.php" ><div class="user">
    <img src="download.jfif" alt="profile image"><br>
    <caption><b>USER PROFILE </b></caption>
    </div></a>




<a href="wallet.html" ><div  class="user">
    <img src="wallet.jfif" alt="profile image"><br>
    <caption><b>WALLETS </b></caption>
    </div> </a>




<a href="utilities.php" ><div class="user">
    <img src="utilities.jpg" alt="profile image"><br>
    <caption><b>UTILITIES </b></caption>
    </div> </a>


</div>
</body>
</html>