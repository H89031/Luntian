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
    <style>
        * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        body {
          font-family: Roboto, sans-serif;
          background-color: #f0efe7;
        }
        
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
          background-color: #ccc;
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
          background-color: #ccc;
          margin: 0 10px;
        }

        .dividerTop {
            height: 2px;
            background-color: #ccc;
            margin-top: 0;       
            margin-bottom: 35px;
            width: 100%;
        }

        form {
          display: flex;
          flex-direction: column;
          gap: 20px;
        }

        .form-section {
          display: flex;
          flex-direction: column;
          gap: 30px;
        }

        .form-row {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
          gap: 20px;
          margin-bottom: 15px;
        }

        .Info h4 {
          font-size: 18px;
          font-weight: bold;
          color: black;
          margin-bottom: 7px;
        }

        input[type="text"] {
          padding: 6px 10px; 
          border: 1px solid #ccc;
          font-size: 12px;
        }

        .dividerBottom {
          height: 2px;
          background-color: #ccc;
          margin-top: 10px; 
          margin-bottom: 20px;
          width: 100%;
        }


        .btn_Ok {
          background-color: #154326; 
          color: white;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          font-weight: bold;
          width: 150px;
          height: 30px;
          cursor: pointer;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          transition: background-color 0.3s ease;
          margin-bottom: 10px; 
          margin-top: -20px;
          margin-left: 395px;
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

        <form action="" method="POST">
          <div class= "Info">
            <h4>Shop Name</h4>
            <input type="text" required placeholder="Shop Name" style="width: 400px;" required>
          </div>

          <div class="Info">
            <h4>Contact</h4>
            <div class="form-row">
              <input type="text" placeholder="Phone Number" pattern="09[0-9]{9}"  oninput="this.value = this.value.replace(/[^0-9+]/g, '')" minlength="11" maxlength="11" required>
              <input type="email" placeholder="Email Address" required />
            </div>
          </div>

          <div class="Info">
            <h4>Pickup Address</h4>
            <div class="form-row">
              <input type="text" placeholder="Region" required>
              <input type="text" placeholder="Province" required>
            </div>
            <div class="form-row">
              <input type="text" placeholder="City" required>
              <input type="text" placeholder="Barangay" required>
            </div>
            <div class="form-row">
              <input type="text" placeholder="Postal" required>
              <input type="text" placeholder="Street Name, Building, House No." required>
            </div>
          </div>

          <div class="dividerBottom"></div>

          <input type="submit" name="btn_Ok" id="btn_Ok" class="btn_Ok" value="Submit">
        </form>
  </div>
</body>
</html>
<?php
  include("usrNamePlacer.php");
  include("connection.php");
  if (isset($_POST['btn_Ok'])) {
    Print "<script>window.location.assign('SellerSubmit.php?id=$id')</script>";
  }
?>