<!DOCTYPE html>
<html lang="en">
<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Cart</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            margin: 40px;
            margin-top: 95px;
            margin-bottom: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            background-color: #f0efe7;
        }        

        .fixed-box {
            position: fixed;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(180deg, #154326, #38843a);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 24px;
            z-index: 1000;
            gap: 20px;
        }

        .logo {
            width: 170px;
            background-image: url("../images/shoppingcart.png");
            background-size: contain;
            background-repeat: no-repeat;
            text-align: center;
            padding: 20px;
        }

        .search {
            width: 37%;
            background-color: transparent;
            padding: 5px;
            display: flex; 
            align-items: center; 
            border-radius: 8px;
        }

        .search img {
            height: 25px; 
            width: 25px; 
            margin-left: 10px;
            object-fit: cover;
        }

        .searchbar {
            height: 30px; 
            flex: 1; 
            border: none;
            outline: none;
            margin-left: 10px;
            font-size: 15px;
        }

        .profile {
            display: flex;
            align-items: center; 
            gap: 10px; 
        }

        .profile img {
            height: 40px; 
            width: 40px; 
            object-fit: cover;
        }


        .cart {
            width: 980px;
            background-color: white;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            gap: 35px;
        }

        .cart h1 {
            font-size: 20px;
            font-weight: 100;
            color: black;
            margin: 0px;
        }

        .cart p {
            font-size: 13px;
            font-weight: 500;
            color: black;
            margin: 0px;
            margin-bottom: 8px;
        }

        .shop {
            background-color: white;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-weight: 900;
            gap: 10px;
            display: flex;
            align-items: center;
            border-bottom: 2px solid #e8e9e3;
        }

        .shop img {
            height: 30px;
        }

        .shop h1 {
            margin: 0px;
            margin-top: 3px;
            font-weight: bold;
            padding: 0px;
        }

        .shop p {
            margin: 0px;
            margin-top: 3px;
            margin-left: 610px;
            font-size: 15px;
            padding: 0px;
            color: grey;
        }

        .product {
            background-color: white;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-weight: 900;
            gap: 20px;
            display: flex;
            align-items: center;
        }

        .product img {
            height: 150px;
            width: 150px;
            border-radius: 8px;
            object-fit: cover;
        }

        input[type="checkbox"] {
            margin-right: 30px;
            transform: scale(1.5);
        }

        .dits p {
            font-size: 28px;
            font-weight: bold;
            color: #38843a;
            margin: 0px;
            font-style: italic;
        }

        .quan {
            display: flex;
            align-items: flex-end;
            height: 145px;
        }

        .quan p {
            font-size: 15px;
            margin: 7px;
            padding-bottom: 5px;
        }

        button {
            width: 30px;
            height: 30px;
            padding: 3px;
            margin: 5px;
            border: none;
            color: black;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
        }

        .bottom {
            position: fixed;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            bottom: 0;
            left: 0;
            width: 100%;
            background: #38843a;
            color: white;
            text-align: center;
            padding: 3px;
            font-size: 24px;
            z-index: 1000;
            gap: 20px;
        }

        .space {
            width: 35%;
            background-color: transparent;
            padding: 5px;
            display: flex; 
            align-items: center; 
            border-radius: 8px;
        }

        .bottom button {
            width: 175px;
            height: 60px;
            padding: 5px;
            margin: 5px;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
            border-radius: 8px;
            background-color: #154326;
        }


    </style>
</head>
<body>
    <div class="fixed-box">
        <img src="../images/backicon.png" style="height: 20px;">
        <div class="logo"></div>
        <div class="search"></div>
        <div class="profile">
            <a href="profile.php?id=<?php echo $id; ?>"><img src="../images/profile.png"></a>
            <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;"><p id="usrName" style="margin: 0; font-size: 20px; color: white;">Username</p></a>
        </div>
        <p>
    </div>

    <div class="cart">
        <div class="shop">
            <input type="checkbox">
            <img src="../images/store.png">
            <h1>Siotees Garden</h1>
            <p>Edit</p>
        </div>

        <div class="product">
            <input type="checkbox">
            <img src="../images/test.png">
            <div class="dits" style="width: 530px;">
                <div style="height: 110px;"><h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do et dolore magna aliqua.</h1></div>
                <div><p>₱800</p></div>
            </div>
            <div class="quan">
                <button>–</button>
                <p>1</p>
                <button>+</button>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="space"></div>
        <p>Total</p> 
        <div style="width: 100px; text-align: left;">
            <p style="font-weight: bold; font-size: 28px;">₱0</p>
        </div>
        <button onclick="window.location.href='checkout.php?id=<?php echo $id; ?>';">Check Out</button>
    </div>
</body>
</html>
<?php
    include("usrNamePlacer.php");
    
?>