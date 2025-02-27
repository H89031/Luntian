<!DOCTYPE html>
<html lang="en">
<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Admin Dashboard</title>
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

    </style>
</head>
<body>
    <div class="fixed-box">
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
        <div class="sellerR">
          <h1>Admin Dashboard</h1>
        </div>
        <div class="profile">
          <a href="profile.php?id=<?php echo $id; ?>">
            <img src="../images/profile.png" alt="Profile" />
          </a>
          <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;">
            <p class="username">Username</p>
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