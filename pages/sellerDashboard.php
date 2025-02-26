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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        body {
          font-family: Arial, sans-serif;
          background-color: #f0efe7;
          margin: 0;
          padding: 0;
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
          box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
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
          left: 14px; 
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


        .sidebar {
          position: fixed;
          top: 75px;
          left: 0;
          width: 215px;
          height: calc(100vh - 60px);
          background-color: #fff;
          box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
          padding: 20px;
          overflow-y: auto;
        }
        
        .menu {
          padding: 0;
          list-style: none; 
        }

        .menu-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px;
          cursor: pointer;
          border-radius: 5px;
        }

        .menu-item:hover {
          background-color: white;
        }

        .submenu {
          list-style: none;
          padding: 0 0 0 20px;
          display: none;
        }

        .submenu li {
          padding: 8px 0;
        }

        .container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); 
          gap: 30px; 
          padding: 20px; 
          justify-content: center; 
          align-items: start; 
        }

        .card1 {
          background: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px; 
          text-align: left;
          width: 850px;
          height: 180px;
          max-width: 1000px; 
          margin: 0 auto; 
          margin-left: 220px;
          margin-top: 70px;
        }
        .card1 h2 {
          font-size: 20px;
          color: #333;
          margin-bottom: 10px;
        }

        .card1 p {
          font-size: 16px;
          color: #666;
          margin: 5px 0;
        }

        .task-list p {
          display: flex;
          justify-content: space-between;
          border-bottom: 1px solid #eee;
          padding-bottom: 5px;
          margin-bottom: 5px;
        }

        .card2 {
          background: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px;
          text-align: left;
          width: 850px;
          height: 180px;
          max-width: 1000px;
          margin: 0 auto;
          margin-left: -285px;
          margin-top: 270px;
        }

        .todo-item {
          flex: 1;
          margin: 0 10px;
        }

        .card3 {
          background: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px;
          text-align: left;
          width: 400px;
          height: 180px;
          max-width: 100%;
          margin: 0 auto;
          margin-left: 76px;
          margin-top: 70px;
          position: relative; 
        }

        .eme {
          font-size: 8px;
          font-weight: 400;
          position: absolute;
          top: 26%;             
          right: 30px;         
          transform: translateY(-50%); 
          color: #38843a;
        }

        .card4 {
          background: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px;
          text-align: left;
          width: 400px;
          height: auto;
          max-width: 100%;
          margin: 0 auto;
          margin-left: 1083px;
          margin-top: -210px;
          position: relative;
       }

       .eme2 {
          font-size: 8px;
          font-weight: 400;
          position: absolute;
          top: 8%;             
          right: 30px;          
          transform: translateY(-50%); 
          color: #38843a;
        }

       .card5 {
          background: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px;
          text-align: left;
          width: 1300px;
          height: 245px;
          max-width: 180%;
          margin: 0 auto;
          margin-left: -285px;
          margin-top: -5px;
          position: relative;
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

      <div class="sidebar">
        <ul class="menu">
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('productMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; font-family: 'Roboto' sans-serif; color: #154326;">Product</span>
                    <i class="fa-solid fa-chevron-up" id="productIcon" style="color: #38843a; font-size: 14px; margin-left: 90px;"></i>
                </div>
                <ul id="productMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -12px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         My New Products
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -12px;">
                      <a href="addProduct.php?id=<?php echo $id; ?>" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Add New Product
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('orderMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 14px; font-family: 'Roboto' sans-serif; color: #154326;">Order</span>
                    <i class="fa-solid fa-chevron-up" id="orderIcon" style="color: #38843a; font-size: 14px; margin-left: 107px; margin-top: 14px;"></i>
                </div>
                <ul id="orderMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         My Orders
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Mass Ship
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Return/Refund/Cancel
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Handover Center
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Shipping Setting
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('marketingMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 20px; font-family: 'Roboto' sans-serif; color: #154326; white-space: nowrap;">Marketing Center</span>
                    <i class="fa-solid fa-chevron-up" id="marketingIcon" style="color: #38843a; font-size: 14px; margin-left: 20px; margin-top: 21px;"></i>
                </div>
                <ul id="marketingMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Marketing Center
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Luntian Ads
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Discount
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Vouchers
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('financeMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 20px; font-family: 'Roboto' sans-serif; color: #154326; white-space: nowrap;">Finance</span>
                    <i class="fa-solid fa-chevron-up" id="financeIcon" style="color: #38843a; font-size: 14px; margin-left: 90px; margin-top: 21px;"></i>
                </div>
                <ul id="financeMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         My Income
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         My Balance
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Bank Accounts
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('shopMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 20px; font-family: 'Roboto' sans-serif; color: #154326; white-space: nowrap;">Shop</span>
                    <i class="fa-solid fa-chevron-up" id="shopIcon" style="color: #38843a; font-size: 14px; margin-left: 110px; margin-top: 21px;"></i>
                </div>
                <ul id="shopMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Shop Information
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Shop Setting
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('chatMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 20px; font-family: 'Roboto' sans-serif; color: #154326; white-space: nowrap;">Customer Service</span>
                    <i class="fa-solid fa-chevron-up" id="customerIcon" style="color: #38843a; font-size: 14px; margin-left: 15px; margin-top: 21px;"></i>
                </div>
                <ul id="chatMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Chat Management
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Review Management
                      </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
                <div class="menu-item" onclick="toggleDropdown('settingMenu', this)" style="padding: 10px 15px;">
                    <span style="font-weight: bold; font-size: 16px; margin-left: -12px; margin-top: 20px; font-family: 'Roboto' sans-serif; color: #154326; white-space: nowrap;">Settings</span>
                    <i class="fa-solid fa-chevron-up" id="settingIcon" style="color: #38843a; font-size: 14px; margin-left: 88px; margin-top: 21px;"></i>
                </div>
                <ul id="settingMenu" class="submenu">
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Privacy & Security
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Notification Settings
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Language & Region
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Theme & Appearance
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Help & Support
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="#" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Terms & Policies
                      </a>
                  </li>
                  <li style="padding: 8px 10px; margin-left: -23px; margin-top: -15px;">
                      <a href="loginPage.php?id=<?php echo $id; ?>" style="text-decoration: none; color: inherit; font-size: 13px;" 
                         onmouseover="this.style.textDecoration='underline'" 
                         onmouseout="this.style.textDecoration='none'">
                         Logout
                      </a>
                  </li>
              </ul>
            </li>
        </ul>
    </div>
    <div class="container">
      <div class="card1">
          <h2 style="font-size: 20px; color: #333; margin-bottom: 20px; margin-top: 10px; text-align: left;">To Do List</h2>
          <div class="todo-list" style="display: flex; justify-content: space-around; text-align: center;">
              <div class="todo-item" style="margin-top: 17px">
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">5</p>
                  <p style="font-size: 14px; color: #666; margin: 5px 0 0;">To-Process Shipment</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">8</p>
                  <p style="font-size: 14px; color: #666; margin: 5px 0 0;">Processed Shipment</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">1</p>
                  <p style="font-size: 14px; color: #666; margin: 5px 0 0;">Return/Refund/Cancel</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">0</p>
                  <p style="font-size: 14px; color: #666; margin: 5px 0 0;">Banned / Deboosted Products</p>
              </div>
          </div>
      </div>
        <div class="card2">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
              <h2 style="font-size: 20px; color: #333; margin: 0;">Business Insights</h2>
              <p style="font-size: 12px; color: #888;">Real-time data until GMT+8 18:00 (Data changes are compared to yesterday)</p>
          </div>

          <div class="todo-list" style="display: flex; justify-content: space-between; text-align: center;">
              <div class="todo-item" style="margin-top: 17px">
                  <p style="font-size: 14px; color: #666; margin: 0;">Sales</p>
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">₱5 000</p>
                  <p style="font-size: 12px; color: #888; margin: 5px 0 0;">— 0.00%</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p style="font-size: 14px; color: #666; margin: 0;">Vistors</p>
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">25</p>
                  <p style="font-size: 12px; color: #888; margin: 5px 0 0;">— 0.00%</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p style="font-size: 14px; color: #666; margin: 0;">Page Views</p>
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">15</p>
                  <p style="font-size: 12px; color: #888; margin: 5px 0 0;">— 0.00%</p>
              </div>
              <div class="todo-item" style="margin-top: 17px">
                  <p style="font-size: 14px; color: #666; margin: 0;">Orders</p>
                  <p class="count" style="font-size: 24px; font-weight: bold; color: #38843a; margin: 0;">30</p>
                  <p style="font-size: 12px; color: #888; margin: 5px 0 0;">— 0.00%</p>
              </div>
          </div>
      </div>
      <div class="card3">
          <h2 style="font-size: 20px; color: #333; margin-bottom: 10px; margin-top: 7px; text-align: left;">Shop Performance</h2>
          <p style="font-size: 17px; color: #1a73e8; font-weight: bold; margin: 5px 0; margin-top: 40px;">Excellent</p>
          <p style="font-size: 12px; color: #6d6d6d; margin: 5px 0; font-weight: normal; font-family: 'Roboto' sans-serif; margin-top: 10px;">All metrics are meeting the targets</p>
          <h1 class="eme"><svg xmlns="http://www.w3.org/2000/svg" height="90px" width="20px" viewBox="0 -960 960 960" fill="#38843a">
          <path d="M560-80l400-400-400-400-71 71 329 329-329 329 71 71Z"/></svg></h1>
          <h1 style="font-size: 14px; color: #1a73e8; font-weight: bold; position: absolute; top: 37px; right: 48px; cursor: pointer;"><a href="#" style="text-decoration: none; color: #38843a;">More</a></h1>
      </div>
      <div class="card4">
        <h1 style="font-size: 20px; color: #333; margin-top: -2px; margin-left: 2px; text-align: left;">Announcements</h1>
        <h1 class="eme2"><svg xmlns="http://www.w3.org/2000/svg" height="90px" width="20px" viewBox="0 -960 960 960" fill="#38843a">
        <path d="M560-80l400-400-400-400-71 71 329 329-329 329 71 71Z"/></svg></h1>
        <a href="#" style="font-size: 14px; font-weight: bold; color: #38843a; text-decoration: none; position: absolute; top: 27px; right: 51px;">More</a>
        <img src="../images/announce.png" alt="Policy Update Image" style="width: 100%; height: auto; border-radius: 5px; margin-bottom: 15px; margin-top: 30px;">
        <h2 style="font-size: 18px; color: #333; margin-bottom: 10px; margin-top: 7px; margin-left: 2px; text-align: left;">💡Policy Update: Seller Standards</h2>
        <p style="font-size: 11px; color: #333; margin: 10px 0; line-height: 1.5; margin-left: 12px;">To enhance platform security and customer trust, Luntian has updated its seller guidelines starting March 1. Sellers must verify their business credentials, maintain an 85%+ fulfillment rate, and ensure accurate product listings. Non-compliance may lead to store restrictions or penalties. Stay compliant and grow with Luntian! 🚀</p>
      </div>
      <div class="card5">
        <div style="width: 100%; max-width: 900px; height: 200px; background: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; position: relative;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
              <h1 style="font-size: 20px; color: #333; margin: 0; margin-top: 10px;">Luntian Ads</h1>
        </div>
        <div style="display: flex; align-items: center; gap: 10px; padding: 15px 0;">
            <div>
              <img src="../images/tablogo.png" alt="Shopee Ads Icon" style="width: 24px; height: 24px; margin-left: 15px;">
            </div>
            <div style="flex: 1;">
              <p style="font-size: 16px; font-weight: bold; color: #333; margin: 0; margin-top: 20px;">Maximise your sales with Luntian Ads!</p>
              <p style="font-size: 14px; color: #666; line-height: 1.5; margin: 5px 0 0; margin-left: -40px;">Learn more about Luntian Ads. Find the right way to advertise and make your Ads affordable.</p>
            </div>
        </div>
              <button style="background: #fff; color: #38843a; padding: 8px 12px; border: 1px solid #154326; border-radius: 5px; cursor: pointer; font-size: 14px; font-weight: bold; position: absolute; bottom: 10px; right: 15px;">Learn More</button>
        </div>
      </div>
    </div>
</body>
</html>

<script>
    function toggleDropdown(menuId, element) {
        let menu = document.getElementById(menuId);
        let icon = element.querySelector('i');
        
        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "block";
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            menu.style.display = "none";
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    }
</script>
<?php
    include("usrNamePlacer.php");
    
?>