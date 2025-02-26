<!DOCTYPE html>
<html lang="en">

<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Checkout</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            margin: 40px;
            margin-top: 95px;
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
            background-image: url("../images/checkoutsign.png");
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

        .contact {
            width: 980px;
            background-color: white;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            gap: 35px;
        }

        .top {
            width: 900px;
            padding: 35px;
            text-align: left;
            background-color: white;
            font-family: "Futura", sans-serif;
            gap: 35px;
        }

        .top p {
            font-weight: bold;
            font-size: 18px;
        }

        .two {
            font-family: "Futura", sans-serif;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 15px;
            align-items: flex-end;
        }

        .three {
            font-family: "Futura", sans-serif;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 15px;
        }

        input[type="text"] {
            width: 100%;
            height: 28px;
            padding: 3px;
        }

        input[type="text"]:focus {
            outline-color: #38843a;
        }

        .cart {
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
            font-size: 18px;
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
            font-size: 22px;
            font-weight: bold;
            color: black;
            margin: 0px;
        }

        .quan {
            display: flex;
            align-items: flex-end;
            height: 145px;
        }

        .quan p {
            font-size: 18px;
            margin: 7px;
            padding-bottom: 5px;
        }

        .mid {
            width: 900px;
            padding: 35px;
            text-align: left;
            background-color: white;
            font-family: "Futura", sans-serif;
            gap: 0px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .mid h1 {
            font-weight: bold;
            font-size: 18px;
            margin-top: 0px;
        }

        .payment {
            border-right: 1px solid #efefe7;
        }

        .payment p {
            margin: 8px;
        }

        .payment img {
            width: 25px;
            object-fit: contain;
            margin-right: 1px;
            margin-left: 15px;
        }

        input[type="radio"] {
            transform: scale(1.5);
        }

        .computation {
            padding-left: 15px;
        }

        .computation p {
            margin-top: 10px;
        }

        .grid {
            font-family: "Futura", sans-serif;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            align-items: flex-end;
        }

        .bottom {
            width: 900px;
            padding: 8px;
            padding-left: 35px;
            padding-right: 35px;
            justify-content: center; 
            align-items: center; 
            background-color: #38843a;
            font-family: "Futura", sans-serif;
            gap: 0px;
            color: white;
            display: flex;
        }

        .space {
            width: 70%;
            background-color: transparent;
            padding: 1px;
            display: flex; 
            align-items: center; 
        }

        .bottom button {
            width: 200px;
            height: 60px;
            padding: 5px;
            margin-left: 5px;
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
        <img src="../images/backicon.png" style="height: 20px;" onclick="window.location.href='cart.php';">
        <div class="logo"></div>
        <div class="search"></div>
        <div class="profile">
            <a href="profile.php?id=<?php echo $id; ?>"><img src="../images/profile.png"></a>
            <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;"><p id="usrName" style="margin: 0; font-size: 20px; color: white;">Username</p></a>
        </div>
        <p>
    </div>

    <div class="top">
        <p style="margin-top: 0px;">Contact</p>
        <div class="two">
            <div>
                <input type="text" placeholder="Full Name">
            </div>
            <div>
                <input type="text" placeholder="Phone Number">
            </div>
        </div>
        <div class="two">
            <div>
                <p>Address</p>
                <input type="text" placeholder="Region">
            </div>
            <div>
                <input type="text" placeholder="Province">
            </div>
        </div>
        <div class="three">
            <div>
                <input type="text" placeholder="City">
            </div>
            <div>
                <input type="text" placeholder="Barangay">
            </div>
            <div>
                <input type="text" placeholder="Postal Code">
            </div>
        </div>
        <input type="text" placeholder="Street Name, Building, House No.">
    </div>

    <div class="cart">
        <div class="shop">
            <img src="../images/store.png">
            <h1>Siotees Garden</h1>
        </div>

        <div class="product">
            <img src="../images/test.png">
            <div class="dits" style="width: 665px;">
                <div style="height: 110px;"><h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do et dolore magna aliqua.</h1></div>
                <div><p>₱800</p></div>
            </div>
            <div class="quan">
                <p>x1</p>
            </div>
        </div>
    </div>

    <div class="mid">
        <div class="payment">
            <h1>Payment Methods</h1>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/cash.png">
                <p>Cash on Delivery</p>
            </div>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/seabank.png">
                <p>SeaBank</p>
            </div>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/gcash.png">
                <p>GCash</p>
            </div>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/paymaya.png">
                <p>Maya</p>
            </div>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/card.png">
                <p>Credit / Debit Card</p>
            </div>
            <div style="display: flex;">
                <input type="radio" name="method">
                <img src="../images/google.png">
                <p>Google Pay</p>
            </div>
        </div>
        <div class="computation">
            <h1>Payment Details</h1>
            <div class="grid" style="margin-bottom: 30px;">
                <div>
                    <p>Product Subtotal</p>
                    <p>Shipping Subtotal</p>
                    <p>Handling Fee</p>
                    <p>Discount Subtotal</p>
                </div>
                <div style="text-align: right;">
                    <p>₱800</p>
                    <p>₱50</p>
                    <p>₱5</p>
                    <p>₱0</p>
                </div>
            </div>
            <div class="grid" style="font-weight: bold;">
                <div>
                    <p>Total Payment</p>
                </div>
                <div style="text-align: right;">
                    <p>₱855</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="space"></div>
        <p style="margin-right: 15px;">Total</p> 
        <div style="width: 100px; text-align: left;">
            <p style="font-weight: bold; font-size: 28px;">₱855</p>
        </div>
        <button href="#" onclick="">Place Order</button>
    </div>
</body>
</html>

<?php
    include("usrNamePlacer.php");
    
?>
