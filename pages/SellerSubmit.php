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

        .container {
          margin-top: 100px; 
          background-color: white;
          padding: 30px;
          height: 570px; 
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          max-width: 1000px; 
          margin: 100px auto;
        }


       .pBar {
          display: flex;
          align-items: center;
          justify-content: space-between;
          margin: 0 0 30px 115px;
          width: 70%;
        }

        .step {
          display: flex;
          flex-direction: column;
          align-items: center;
        }

        .step p {
           margin-top: 15px;
           font-size: 13px;
           font-weight: bold;
           font-family: Roboto, sans-serif;
           color: black;
        }

        .circle {
          width: 20px;
          height: 20px;
          border-radius: 50%;
          background-color: #38843a;
        }

        .circle1 {
          width: 20px;
          height: 20px;
          border-radius: 50%;
          background-color: #38843a;
        }

        .pLine {
          flex: 1;
          height: 2px;
          background-color: #38843a;
          margin: 0 10px;
        }

        .dividerTop {
            height: 2px;
            background-color: #ccc;
            margin-top: 0;       
            margin-bottom: 35px;
            width: 100%;
        }


        .btn_Ok {
          background-color: #154326; 
          color: white;
          border: none;
          border-radius: 5px;
          font-size: 13px;
          font-weight: bold;
          width: 150px;
          height: 30px;
          cursor: pointer;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          transition: background-color 0.3s ease; 
          margin-top: 32px;
          margin-left: 385px;
        }

        .btn_Ok:hover {
          background-color: #38843a;
        }

    </style>
</head>
<body>
    <div class="fixed-box">
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
        <div class="sellerR">
          <h1>Seller Registration</h1>
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

    <div class="container">
       
        <div class="pBar">
          <div class="step">
            <div class="circle1"></div>
            <p>Shop Information</p>
          </div>
          <div class="pLine"></div>
          <div class="step">
            <div class="circle"></div>
            <p>Submit</p>
          </div>
        </div>

        <div class="dividerTop"></div>

        <div>
          <img src="../images/CheckSeller.png" style="height: 100px; margin-left: 410px; margin-top: 40px;">
        </div>

        <div>
          <h2 style="color: black; font-size: 20px; text-align: center; margin-top: 20px; margin-left: -9px; font-family: 'Arial', sans-serif;">Submitted Successfully</h2>
          <p style="color: black; font-size: 14px; font-weight: 300; text-align: center; margin-top: 17px; margin-left: -9px; font-family: 'Roboto', sans-serif;">Now you can proceed to add your first product!</p>
        </div>

        <button class="btn_Ok" type="button" onclick="window.location.href='addProduct.php?id=<?php echo $id; ?>';">Go to add product</button> 
        </form>
  </div>
</body>
</html>

<?php
    include("usrNamePlacer.php");
    
?>