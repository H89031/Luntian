<!DOCTYPE html>
<html lang="en">
<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Seller Center</title>
    <link rel="icon" type="image/png" href="../images/tablogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

    <style>
        * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        body {
          font-family: Arial, sans-serif;
          background-color: #f0efe7;
        }

        /* Header area */
        .fixed-box {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          background: linear-gradient(180deg, #154326, #38843a);
          color: white;
          text-align: center;
          padding: 15px;
          font-size: 24px;
          z-index: 1000;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .logo {
          width: 150px;
          height: 50px;
          background-image: url("../images/fulllogo.png");
          background-size: contain;
          background-repeat: no-repeat;
          margin-right: 20px;
          position: absolute; 
          top: 17px; 
          left: 20px; 
        }


        .sellerR h1 {
          font-size: 24px;
          font-weight: 400;
          position: absolute; 
          top: 29px; 
          left: 180px; 
        }

        .profile {
          display: flex;
          align-items: center;
          gap: 10px;
          margin-left: 1300px;
          top: 20px;

        }

        .profile img {
          height: 40px;
          width: 40px;
          object-fit: cover;
        }

        .username {
          margin: 0;
          font-size: 20px;
          color: white;
        }

  

    </style>
</head>
<body>
    <div class="fixed-box">
        <div class="logo"></div>
        <div class="sellerR">
          <h1>Seller Center</h1>
        </div>
        <div class="profile">
          <a href="profile.php?id=<?php echo $id; ?>">
            <img src="../images/profile.png" alt="Profile" />
          </a>
          <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;">
            <p id="usrName" class="username">Username</p>
          </a>
        </div>
     </div>
</body>
</html>
<?php
    include("usrNamePlacer.php");
    
?>