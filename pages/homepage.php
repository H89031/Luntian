<!DOCTYPE html>
<html lang="en">

<?php
    include("checkLoggedIn.php")
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian</title>
    <link rel="icon" type="image/png" href="../images/tablogo.png">
    <style>
        body {
            font-family: Roboto, sans-serif;
            margin: 40px;
            margin-top: 75px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
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
            width: 40%;
            background-color: white;
            padding: 5px;
            display: flex; 
            align-items: center; 
            border-radius: 8px;
        }

        .search img {
            height: 25px; 
            width: 25px; 
            margin-left: 10px;
        }

        .searchbar {
            height: 30px; 
            flex: 1; 
            border: none;
            outline: none;
            margin-left: 10px;
            font-size: 15px;
        }

        .bag img{
            height: 40px; 
            width: 40px; 
        }

        .profile {
            display: flex;
            align-items: center; 
            gap: 10px; 
        }

        .profile img {
            height: 40px; 
            width: 40px; 
        }

        .header {
            width: 100%;
            background-image: url("../images/green.png");
            color: white;
            text-align: center;
            font-size: 50px;
            padding: 40px;
            font-weight: 900;
            font-family: "Futura", sans-serif;
        }

        .main {
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
        <div class="logo"></div>
        <div class="search">
            <img src="../images/searchicon.png">
            <input type="text" class="searchbar" placeholder="Search...">
        </div>
        <div class="bag">
            <a href="cart.php?id=<?php echo $id; ?>"><img src="../images/bagicon.png"></a>
        </div>
        <div class="profile">
            <a href="profile.php?id=<?php echo $id; ?>"><img src="../images/profile.png"></a>
            <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;"><p id="usrName" style="margin: 0; font-size: 20px; color: white;">Username</p></a>
        </div>
    </div>
    <div class="header">Tagline</div>
    <div class="main">
        <div class="grid-item" onclick="window.location.href='product1.php?id=<?php echo $id; ?>';">
            <img src="../images/SnakePlant.jpg">
            <p class="name">Outdoor Snake Plant (Dracaena trifasciata)</p>
            <p class="price">₱650</p>
            <p class="detail">274 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product2.php?id=<?php echo $id; ?>';">
            <img src="../images/AloeVera.png">
            <p class="name">Aloe Vera Plant | Fully Rooted | Live Plant</p>
            <p class="price">₱149</p>
            <p class="detail">79 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product3.php?id=<?php echo $id; ?>';">
            <img src="../images/Bougainvillea.png">
            <p class="name">Rare rooted Bougainvillea | Potted Plant for Sale</p>
            <p class="price">₱250</p>
            <p class="detail">194 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product4.php?id=<?php echo $id; ?>';">
            <img src="../images/Sampaguita.jpg">
            <p class="name">Sampaguita (Jasminum sambac)</p>
            <p class="price">₱129</p>
            <p class="detail">99 sold | Kaligayahan, Quezon City</p>
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
            <p class="detail">5 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product7.php?id=<?php echo $id; ?>';">
            <img src="../images/PalmTree.png">
            <p class="name">Palmera Tree (Areca Palm) Indoor and Outdoor | Fully Rooted Live...</p>
            <p class="price">₱159</p>
            <p class="detail">200 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product8.php?id=<?php echo $id; ?>';">
            <img src="../images/Peppermint.png">
            <p class="name">Peppermint Herbal Plant (Mentha piperita)</p>
            <p class="price">₱350</p>
            <p class="detail">40 sold | Kaligayahan, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product9.php?id=<?php echo $id; ?>';">
            <img src="../images/Monstera.png">
            <p class="name">Monstera Deliciosa (Swiss Cheese Plant)</p>
            <p class="price">₱1,200</p>
            <p class="detail">101 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product10.php?id=<?php echo $id; ?>';">
            <img src="../images/LemonPine.png">
            <p class="name">Lemon Pine Tree (Cupressus macrocarpa 'Goldcrest')</p>
            <p class="price">₱599</p>
            <p class="detail">1 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product11.php?id=<?php echo $id; ?>';">
            <img src="../images/Boncel.png">
            <p class="name">Rare Boncel (Sansevieria cylindrica 'Boncel')</p>
            <p class="price">₱800</p>
            <p class="detail">64 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product12.php?id=<?php echo $id; ?>';">
            <img src="../images/Malvarosa.png">
            <p class="name">Malvarosa (Pelargonium graveolens) Anti-Mosquito</p>
            <p class="price">₱129</p>
            <p class="detail">274 sold | Kaligayahan, Quezon City</p>
        </div>
    </div>
</body>
</html>

<?php
    include("usrNamePlacer.php");
?>

