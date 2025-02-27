<!DOCTYPE html>
<html lang="en">

<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Profile</title>
    <link rel="icon" type="image/png" href="../images/tablogo.png">
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
            width: 120px;
            background-image: url("../images/fulllogo.png");
            background-size: contain;
            background-repeat: no-repeat;
            text-align: center;
            padding: 20px;
        }

        .search {
            width: 35%;
            background-color: transparent;
            padding: 5px;
            display: flex; 
            align-items: center; 
            border-radius: 8px;
        }

        .bag img{
            height: 40px; 
            width: 40px; 
            object-fit: cover;
        }

        .profile {
            display: flex;
            align-items: center; 
            gap: 10px; 
        }

        .profile img {
            height: 35px; 
            width: 35px; 
            object-fit: cover;
        }

        button {
            width: 100px;
            padding: 10px;
            color: #6d6d6d;
            border: 0px;
            background-color: white;
            font-size: 13px;
            cursor: pointer;
            border-radius: 8px;
            font-weight: bold;
        }

        .top {
            display: flex;
            width: 980px;
            background-color: white;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            padding: 0px;
        }

        .info {
            width: 480px;
            background-color: #38843a;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            display: flex;
            justify-content: space-around;
        }

        .dits {
            width: 250px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            color: white;
        }

        .dits p {
            font-size: 13px;
            font-weight: 50;
            margin: 0px;
        }

        .dits img {
            height: 15px; 
            object-fit: cover;
            padding-right: 10px;
            border-right: 2px solid white;
        }

        .btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .kineme {
            width: 460px;
            background-color: white;
            text-align: left;
            font-size: 15px;
            padding: 0px;
            gap: 0px;
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            color: black;
        }

        .kineme p{
            margin: 0px;
            font-weight: 100;
            margin-bottom: 5px;
        }

        .kineme img {
            height: 85px;
            margin: 0px;
        }

        .two {
            font-family: "Futura", sans-serif;
            display: flex;
            gap: 0px;
            padding-left: 25px;
            padding-right: 40px;
            align-items: flex-end;
            align-items: center;
        }

        .bottom {
            width: 980px;
            background-color: white;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            gap: 35px;
        }

        .bottom h1 {
            font-size: 17px;
            font-weight: 100;
            color: black;
            margin: 0px;
        }

        .bottom p {
            font-size: 13px;
            font-weight: 500;
            color: black;
            margin: 0px;
            margin-bottom: 8px;
        }

        .hehe {
            background-color: white;
            color: white;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-weight: 900;
            gap: 35px;
            display: flex;
            padding-bottom: 20px;
        }

        .hehehe {
            background-color: white;
            color: white;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            padding-left: 10px;
            padding-right: 40px;
            font-weight: 900;
            border-top: 2px solid #e8e9e3;
            gap: 15px;
            display: grid;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            grid-template-columns: repeat(4, 1fr);
        }

        .status {
            font-family: "Futura", sans-serif;
            display: grid;
            width: 490px;
            grid-template-columns: repeat(4, 1fr);
            gap: 0px;
            align-items: center;
            padding-bottom: 10px;
        }

        .activity {
            font-family: "Futura", sans-serif;
            display: grid;
            width: 430px;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            align-items: flex-end;
        }

        .act {
            font-family: "Futura", sans-serif;
            display: flex;
            gap: 0px;
            padding: 10px;
            padding-left: 20px;
            align-items: center;
            text-align: left;
            border: 1px solid #efefe7;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .act p {
            margin-left: 10px;
            margin-top: 10px;
        }

        .other {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }

        .grid-item {
            background-color: white;
            border-radius: 8px;
            padding: 5px;
            text-align: left;
        }

        .grid-item:hover {
            border: 2px solid #38843a;
            padding: 3px;
        }

        .grid-item img{
            height: 180px; 
            width: 230px; 
            border-radius: 5px;
            object-fit: cover;
        }

        .grid-item p{
            margin: 0px;
            width: 230px;
            font-style: italic;
            margin-top: 5px;
        }

        .name {
            font-size: 15px;
            line-height: 1.4;
            height: 40px;
        }

        .price {
            font-size: 22px;
            font-weight: bold;
            color: #38843a;
        }

        .detail {
            font-size: 12px;
        }

    </style>
</head>
<body>
    <div class="fixed-box">
        <img src="../images/backicon.png" style="height: 20px;" onclick="history.back()">
        <div class="logo" onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
        <div class="search">
        </div>
        <button onclick="window.location.href='loginPage.php?id=<?php echo $id; ?>';" style="background-color: darkred; color: white;">Log Out</button>
        <div class="bag">
            <a href="cart.php?id=<?php echo $id; ?>"><img src="../images/bagicon.png"></a>
        </div>
        <div class="profile">
            <img src="../images/settings.png">
        </div>
        <p>
    </div>
 
    <div class="top">
        <div class="info">
            <img src="../images/profile.png" style="height: 75px; ">
            <div class="dits">
                <p id="usrName"style="font-weight: bold; font-size: 20px; padding-top: 5px;">username</p>
                <div style="display: flex; align-items: center; gap: 5px; padding-bottom: 5px;">
                    <p style="padding-right: 10px;">4 Followers</p>
                    <p style="padding-left: 10px; border-left: 2px solid white;">60 Following</p>
                </div>
            </div>
            <div class="btn">
                <button onclick="window.location.href='sellerShopInfo.php?id=<?php echo $id; ?>';">Start Selling</button>
            </div>
        </div>
        <div class="kineme">
            <div class="two"><p style="font-weight: bold; margin-top: 5px;">Support</p></div>
            <div class="two" style="border-top: 2px solid #efefe7; border-bottom: 2px solid #efefe7;">
                <div style="width: 390px; display: flex;">
                    <img src="../images/help.png" style="height: 20px; width: 20px; margin-top: 3px;">
                    <p style="margin-top: 4px; margin-left: 10px;">Help Center</p>
                </div>
                <div>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
            </div>
            <div class="two">
                <div style="width: 390px; display: flex;">
                    <img src="../images/chat.png" style="height: 18px; width: 20px; margin-top: 3px;">
                    <p style="margin-top: 4px; margin-left: 10px;">Chat with Luntian</p>
                </div>
                <div>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
            </div>
        </div>
    </div>  

    <div class="bottom">
        <div class="hehe">
            <h1>My Purchases<h1>
            <div style="display: flex; margin-left: 569px;">
                <h1 style="color: grey;">View Purchase History<h1>
                <img src="../images/righticon.png" style="height: 12px; margin-left: 10px;">
            </div>
        </div>
        <div class="hehehe">
            <div class="status">
                <div>
                    <img src="../images/topay.png" width="40px">
                    <p>To Pay</p>
                </div>
                <div>
                    <img src="../images/toship.png" width="40px">
                    <p>To Ship</p>
                </div>
                <div>
                    <img src="../images/toreceive.png" width="40px">
                    <p>To Receive</p>
                </div>
                <div>
                    <img src="../images/torate.png" width="40px">
                    <p>To Rate</p>
                </div>
            </div>
            <div class="activity">
                <div class="act">
                    <img src="../images/topay.png" style="width: 25px;">
                    <p style="width: 130px;">My Likes</p>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
                <div class="act">
                    <img src="../images/topay.png" style="width: 25px;">
                    <p style="width: 130px;">Buy Again</p>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
                <div class="act">
                    <img src="../images/topay.png" style="width: 25px;">
                    <p style="width: 130px;">Recently Viewed</p>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
                <div class="act">
                    <img src="../images/topay.png" style="width: 25px;">
                    <p style="width: 130px;">Vouchers</p>
                    <img src="../images/righticon.png" style="height: 12px;">
                </div>
            </div>
        </div>
    </div>
            

    <p style="margin: 0px; color: #154326; font-size: 20px;">— Suggested Products —</p>    

    <div class="other">
        <div class="grid-item" onclick="window.location.href='product3.php?id=<?php echo $id; ?>';">
            <img src="../images/Bougainvillea.png">
            <p class="name">Rare rooted Bougainvillea | Potted Plant for Sale</p>
            <p class="price">₱250</p>
            <p class="detail">194 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product4.php?id=<?php echo $id; ?>';">
            <img src="../images/Sampaguita.jpg">
            <p class="name">Sampaguita (Jasminum sambac) flower</p>
            <p class="price">₱129</p>
            <p class="detail">99 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product5.php?id=<?php echo $id; ?>';">
            <img src="../images/Calathea.png">
            <p class="name">Calathea Triostar plant | Potted Plant for Sale</p>
            <p class="price">₱99</p>
            <p class="detail">5 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product6.php?id=<?php echo $id; ?>';">
            <img src="../images/JadeLucky.png">
            <p class="name">Jade Lucky Plant (Crassula ovata) | Potted Plant for Sale</p>
            <p class="price">₱199</p>
            <p class="detail">5 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product7.php?id=<?php echo $id; ?>';">
            <img src="../images/PalmTree.png">
            <p class="name">Palmera Tree (Areca Palm) Indoor and Outdoor | Fully Rooted Live...</p>
            <p class="price">₱159</p>
            <p class="detail">200 sold | Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product8.php?id=<?php echo $id; ?>';">
            <img src="../images/Peppermint.png">
            <p class="name">Peppermint Herbal Plant (Mentha piperita)</p>
            <p class="price">₱350</p>
            <p class="detail">450 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product9.php?id=<?php echo $id; ?>';">
            <img src="../images/Monstera.png">
            <p class="name">Monstera Deliciosa (Swiss Cheese Plant)</p>
            <p class="price">₱1,200</p>
            <p class="detail">101 sold | Kaligayahan, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product10.php?id=<?php echo $id; ?>';">
            <img src="../images/LemonPine.png">
            <p class="name">Lemon Pine Tree (Cupressus macrocarpa 'Goldcrest')</p>
            <p class="price">₱599</p>
            <p class="detail">1 sold | Kaligayahan, Quezon City</p>
        </div>
    </div>
</body>
</html>
<?php
    include("usrNamePlacer.php");
    
?>