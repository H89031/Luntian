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


        .sellerR {
         position: relative; 
        }

        .one {
            font-size: 24px;
            font-weight: 400;
            position: absolute;
            color: #ccc;
            top: -9px;
            left: 140px;
        }

        .eme {
            font-size: 10px;
            font-weight: 400;
            position: absolute;
            top: -4px;
            left: 208px;
            color: white;
        }

        .two {
            font-size: 24px;
            font-weight: 400;
            position: absolute;
            top: -8px;
            left: 242px;
            white-space: nowrap;
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
          height: 600px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          width: 45%; 
          max-width: 1100px;
          margin: 100px auto;
          margin-left: 250px;
        }

        form {
          display: flex;
          flex-direction: column;
          gap: 20px;
        }

        .Info h2 {
          font-size: 17px;
          font-weight: bold;
          color: black;
          margin-bottom: 7px;
        }

        input[type="text"] {
          padding: 6px 10px; 
          border: 1px solid #ccc;
          font-size: 12px;
        }

       .container2 {
            margin-top: -90px;
            background-color: white;
            padding: 30px;
            height: 260px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 45%;
            max-width: 1100px;
            margin-left: 250px;
        }

        .container3 {
            margin-top: 10px; 
            background-color: white;
            padding: 30px;
            height: 270px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 45%;
            max-width: 1100px;
            margin-left: 250px; 
            margin-bottom: 50px;
        }


        .tips {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 370px;
            height: 250px;
            border-radius: 10px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            position: relative;
            margin-top: -1245px; 
            margin-left: 740px; 
        }

        .tips:hover {
            transform: translateY(-5px); /* Moves the element up by 5px */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Adds a stronger shadow */
            cursor: pointer; /* Shows a pointer cursor */
        }

        .radType {
            display: flex;
            gap: 40px;
            align-items: center;
            font-size: 13px;
            margin-top: 15px; 
            margin-left: 10px;/
        }

        input[type="radio"] {
            margin-right: 8px;
            accent-color: #38843a;
            transform: scale(1.1); 
        }

        .btn_Save{
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
          margin-top: 60px;
          margin-left: 500px;
          margin-bottom: 50px;
        }

        .btn_Save:hover {
          background-color: #38843a;
        }

        .btn_Cancel {
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
            position: absolute;
            top: 1270px; 
            margin-left: 330px;
            margin-bottom: 80px;
        }

        .btn_Cancel:hover {
          background-color: #38843a;
        }

    </style>
</head>
<body>
    <div class="fixed-box">
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
        <div class="sellerR">
          <h1 class="one">
            <a href="sellerDashboard.php?id=<?php echo $id; ?>" style="text-decoration: none; color: inherit; font-weight: inherit;" 
             onmouseover="this.style.color='white';" 
             onmouseout="this.style.color='inherit';">Home</a>
          </h1>
          <h1 class="eme"><svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 -960 960 960" fill="#e3e3e3">
          <path d="M560-80l400-400-400-400-71 71 329 329-329 329 71 71Z"/></svg></h1>
          <p class="two">
            <a href="addProduct.php?id=<?php echo $id; ?>" style="text-decoration: none; color: inherit; font-weight: inherit;" 
             onmouseover="this.style.color='white';" 
             onmouseout="this.style.color='inherit';">Add New Product</a>
          </p>
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

        <div class="Product"> 
          <h2 style="font-size: 20px; color: #333; font-weight: bold; 
           margin-left: 10px; margin-top: 5px;"> Basic Information</h2>
          <h2 style="font-size: 17px; color: #333; font-weight: bold; 
           margin-left: 10px; margin-top: 20px;"> Product Images</h2>

           <h2 style="font-size: 14px; color: #333; font-weight: normal; 
           margin-left: 10px; margin-top: 22px;"> 1:1 Image</h2>

          <label for="imageUpload" style="width: 100px; height: 100px; border: 2px dashed #ddd; 
                border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer; margin-left: 40px; margin-top: 15px;">
                <img src="../images/upload.png" style="width: 30px; height: 30px; margin-bottom: 5px;" alt="Upload Icon">
                <p style="color: #38843a; font-size: 12px; text-align: center; margin: 0;">
                Add Image <br> <span style="font-size: 10px;">(1/4)</span>
                </p>
                <input type="file" id="imageUpload" accept="image/*" style="display: none;">
          </label>
          <form>
            <div class= "Info">
            <h2 style="margin-left: 10px; margin-top: 20px;">Product Name</h2>
            <input type="text" required placeholder="Brand Name/Product Type/Key Features(Colors, Sizes)" style="width: 450px; margin-left: 10px; margin-top: 2px;" required>
            </div>
            <div class= "Info">
            <h2 style="margin-left: 10px; margin-top: 5px;">Product Description</h2>
              <div style="display: flex; flex-direction: column; gap: 10px; width: 450px; margin-left: 9px; margin-top: 10px">

                  <div style="display: flex; justify-content: space-between; align-items: center;">
                      <div style="width: 48%;">
                          <label for="sunlight" style="font-size: 12px; font-weight: normal;">Sunlight Needed</label>
                          <input type="text" id="sunlight" required placeholder="Enter sunlight details" 
                                 style="width: 100%; padding: 8px; border: 1px solid #ccc; ">
                      </div>
                      <div style="width: 48%;">
                          <label for="watering" style="font-size: 12px; font-weight: normal;">Watering Schedule</label>
                          <input type="text" id="watering" required placeholder="Enter watering schedule" 
                                 style="width: 100%; padding: 8px; border: 1px solid #ccc;">
                      </div>
                  </div>
                  
                  <div style="display: flex; justify-content: space-between; align-items: center;">
                      <div style="width: 48%;">
                          <label for="planting" style="font-size: 12px; font-weight: normal;">Ideal Planting Conditions</label>
                          <input type="text" id="planting" required placeholder="Enter planting conditions" 
                                 style="width: 100%; padding: 8px; border: 1px solid #ccc;">
                      </div>
                      <div style="width: 48%;">
                          <label for="pests" style="font-size: 12px; font-weight: normal;">Common Pests & Diseases</label>
                          <input type="text" id="pests" required placeholder="Enter pests & diseases" 
                                 style="width: 100%; padding: 8px; border: 1px solid #ccc;">
                      </div>
                  </div>
                  <div>
                      <label for="details" style="font-size: 12px; font-weight: normal">Other Details</label>
                      <textarea id="details" required placeholder="Enter additional details" 
                      style="width: 100%; height: 60px; padding: 8px; border: 1px solid #ccc;"></textarea>
                  </div>
              </div>
            </div>
          </form>
        </div>
    </div>

    <div class="container2">
      <div class="Sales"> 
          <h2 style="font-size: 20px; color: #333; font-weight: bold; 
           margin-left: 10px; margin-top: 5px;"> Sales Information</h2>
          <form>
            <div class= "Info">
            <h2 style="margin-left: 10px; margin-top: 20px;">Price</h2>
            <div style="display: flex; align-items: center; border: 1px solid #ccc; padding: 5px; width: 450px; height: 30px; margin-left: 10px;">
                <span style="padding: 5px; color: #666;">₱</span>
                <input type="text" required placeholder="Enter amount" style="border: none; outline: none; flex: 1; padding: 5px;">
            </div>
            </div>
            <div class="Info">
            <h2 style="margin-left: 10px; margin-top: 5px;">Stock</h2>
                <div style="display: flex; align-items: center; border: 1px solid #ccc; padding: 5px; width: 450px; margin-left: 10px;">
                  <input type="tel" required placeholder="0" style="width: 80%; height: 20px; border: none; outline: none; font-size: 14px;" pattern="0\d*" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                </div>
            </div>
          </form>
      </div>
    </div>

    <div class="container3">
      <div class="Others"> 
          <h2 style="font-size: 20px; color: #333; font-weight: bold; 
           margin-left: 10px; margin-top: 5px;">Others</h2>
          <h2 style="font-size: 17px; color: #333; font-weight: bold; 
           margin-left: 10px; margin-top: 20px;">Pre-Order</h2>
          <form>
            <div class="radType">
                <label>
                    <input type="radio" name="no/yes" value="0">
                    No
                </label>
                <label>
                    <input type="radio" name="no/yes" value="1">
                    Yes
                </label>
            </div>
          </form>
          <h3 style="font-size: 12px; color: #333; font-weight: normal; 
           margin-left: 10px; margin-top: 10px;">I will ship out within 1 business days. (excluding public holidays and courier service non-working days)</h3>
           <div class= "Info">
           <h2 style="margin-left: 10px; margin-top: 20px;">Schedule Publish Time</h2>
           <div style="display: flex; align-items: center; border: 1px solid #ccc; padding: 5px; width: 400px; height: 30px; margin-left: 10px;">
             <input type="datetime-local" style="width: 100%; height: 100%; border: none; outline: none; font-size: 14px; background: transparent;">
           </div>
      </div>
    </div>

    <button class="btn_Save" type="button" onclick="window.location.href='addProduct.php?id=<?php echo $id; ?>';">Save and Publish</button>
    <button class="btn_Cancel" type="button" onclick="window.location.href='addProduct.php?id=<?php echo $id; ?>';">Cancel</button>



    <div class="tips">
      <div class="icon">
        <img src="../images/tips.png" alt="Icon" 
             style="width:  120px; height: 120px; display: inline-block; 
                    position: relative; top: -5px; left: 220px;">
      </div>
      <div class="tipsContent">
        <h4 style="font-size: 25px; font-weight: bold; color: #38843a; margin: 0; 
           position: relative; top: 35px; left: -125px;">Luntian Tips!</h4>

        <h5 style="font-size: 22px; font-weight: bold; color: black; margin: 0; 
           position: relative; top: 50px; left: -125px;">Product Images</h5>

      <p style="font-size: 12px; color: #666; line-height: 1.6; margin: 0; 
          max-width: 900px; 
          position: relative; top: 60px; left: -125px; letter-spacing: 1px;">
          Relevant and high-resolution <br>
          images help to showcase your <br>
          products clearly to shoppers. <br>
           
          <a href="#" style="color: #007bff; text-decoration: none; font-weight: normal; 
                    display: inline-block; margin-top: 5px;">Learn more</a>
      </p>
    </div>
</body>
</html>

<?php
    include("usrNamePlacer.php");
    
?>