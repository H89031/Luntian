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
          padding-top: 100px;
          padding-left: 240px;
          padding-bottom: 30px;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          gap: 20px;
        }

        .left {
          width: 800px;
          gap: 10px;
        }

        .right {
          width: 400px;
          gap: 10px;
        }

        .card1 {
          background: white;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px; 
          height: 180px;
          text-align: left;
        }

        .card2 {
          background: white;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px; 
          margin-top: 25px;
          height: 180px;
          text-align: left;
        }

        .card3 {
          background: white;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px; 
          margin-top: 25px;
          height: 400px;
          text-align: left;
        }

        .card4 {
          background: white;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 25px; 
          margin-top: 25px;
          height: 195px;
          text-align: left;
        }

        .todo-list {
          align-items: center;
          text-align: center;
          display: grid;
          grid-template-columns: repeat(4, 1fr);
          margin-top: 8px;
        }

        .count {
          font-size: 24px; 
          font-weight: bold; 
          color: #38843a; 
          margin: 5px;
        }

        .smalltext {
          font-size: 14px; 
          color: #666; 
          margin: 5px 0 0;
        }

        .container h1 {
          font-size: 20px; 
          color: #333; 
          margin-bottom: 20px; 
          margin-top: 10px; 
          text-align: left;
          margin: 0px;
        }

        .side {
          display: flex;
          align-items: center;
        }

        .tiny {
          font-size: 12px; 
          color: #888;
        }

        .dits {
          align-items: center;
          justify-content: space-around;
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

        .more {
          font-size: 14px; 
          font-weight: bold;
          color: #38843a;
        }

        button {
          background: #fff; 
          color: #38843a; 
          padding: 8px 12px; 
          border: 1px solid #154326; 
          border-radius: 5px; 
          cursor: pointer; 
          font-size: 14px; 
          font-weight: bold;
        }


    </style>
</head>
<body>
    <div class="fixed-box">
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
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
      <div class="left">
        <div class="card1">
          <h1>To Do List</h1>
          <div class="todo-list">
            <div class="todo-item" style="margin-top: 17px">
                <p class="count">5</p>
                <p class="smalltext">To-Process Shipment</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="count">8</p>
                <p class="smalltext">Processed Shipment</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="count">1</p>
                <p class="smalltext">Return/Refund/Cancel</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="count">0</p>
                <p class="smalltext">Banned Products</p>
            </div>
          </div>
        </div>
        <div class="card2">
          <div class="side">
            <div>
              <h1>Business Insights</h1>
            </div>
            <div style="margin-left: 160px;">
              <p class="tiny">Real-time data until GMT+8 18:00 (Data changes are compared to yesterday)</p>
            </div>
          </div>
          <div class="todo-list">
            <div class="todo-item" style="margin-top: 17px">
                <p class="smalltext">Sales</p>
                <p class="count">₱5 000</p>
                <p class="tiny">— 0.00%</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="smalltext">Visitors</p>
                <p class="count">25</p>
                <p class="tiny">— 0.00%</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="smalltext">Page Views</p>
                <p class="count">15</p>
                <p class="tiny">— 0.00%</p>
            </div>
            <div class="todo-item" style="margin-top: 17px">
                <p class="smalltext">Orders</p>
                <p class="count">30</p>
                <p class="tiny">— 0.00%</p>
            </div>
          </div>
        </div>
        <div class="card4">
          <h1>Luntian Ads</h1>
          <div class="side" style="margin-top: 20px">
            <img src="../images/tablogo.png" style="height: 24px;">
            <p style="font-size: 16px; font-weight: bold; color: #333; margin: 0; margin-left: 8px;">Maximise your sales with Luntian Ads!</p>
          </div>
          <p class="smalltext" style="margin-top: 15px;">Learn more about Luntian Ads. Find the right way to advertise and make your Ads affordable.</p>
          <div style="margin-left: 645px;">
            <button>Learn More</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="card1">
          <div class="side">
            <div>
              <h1>Shop Performance</h1>
            </div>
              <div style="display: flex; align-items: center; margin-left:115px;">
                <p class="more" style="margin-right:5px;">more</p>
                <img src="../images/more.png" style="height:22px;">
              </div>
          </div>
          <div class="dits">
            <p style="font-size: 25px; color: #1a73e8; font-weight: bold; margin: 5px 0; margin-top: 30px;">Excellent</p>
            <p class="tiny">All metrics are meeting the targets</p>
          </div>
        </div>
        <div class="card3">
          <div class="side">
            <div>
              <h1>Announcements</h1>
            </div>
              <div style="display: flex; align-items: center; margin-left:137px;">
                <p class="more" style="margin-right:5px;">more</p>
                <img src="../images/more.png" style="height:22px;">
              </div>
          </div>
          <img src="../images/announce.png" style="width: 100%; height: auto; border-radius: 5px; margin-bottom: 10px; margin-top: 10px;">
          <p style="font-size: 16px; font-weight: bold; color: #333; margin: 0;">💡Policy Update: Seller Standards</p>
          <p class="tiny" style="margin-top: 5px;">To enhance platform security and customer trust, Luntian has updated its seller guidelines starting March 1. Sellers must verify their business credentials, maintain an 85%+ fulfillment rate, and ensure accurate product listings. Non-compliance may lead to store restrictions or penalties. Stay compliant and grow with Luntian! 🚀</p>
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