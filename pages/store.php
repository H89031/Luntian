<!DOCTYPE html>
<html lang="en">
<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Siotees Garden</title>
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
            height: 40px; 
            width: 40px; 
            object-fit: cover;
        }

        button {
            width: 90px;
            padding: 6px;
            border: 2px solid white;
            color: white;
            background-color: #38843a;
            font-size: 12px;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }

        .shop {
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

        .location {
            width: 420px;
            background-color: white;
            text-align: left;
            font-size: 15px;
            padding: 20px;
            gap: 20px;
            color: black;
            display: flex;
        }

        .location p{
            margin: 0px;
            font-weight: 100;
            margin-bottom: 5px;
        }

        .location img {
            height: 85px;
            margin: 0px;
        }

        .mPopup {
            position: fixed;
            bottom: 5px;
            right: 15px;
            width: 600px;
            height: 500px;
            background-color: #fff;
            border: 2px solid #38843a;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
        }

        .mHeader {
            background: #154326;
            color: white;
            height: 55px;
            padding-left: 0; 
            display: flex;
            justify-content: flex-start;
            align-items: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            gap: 15px;
        }

        .mHeader h2 {
            position: relative;
            margin: 0;
            font-size: 20px;
            font-family: "Futura", sans-serif;
            font-weight: bold;
            left: -50px; 

        }

        .bckBtn {
            background: none;
            border: none;
            color: white;
            font-size: 22px;
            font-family: Arial, sans-serif; 
            cursor: pointer;
            margin-left: -10px; 
            margin-top: 4px; 
            padding: 0 10px; 
        }

        .mList {
            padding: 10px;
            overflow-y: auto;
            max-height: 400px;
        }

        .mItem {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .mInfo h3 {
            margin: 0;
            font-size: 16px;
            font-family: "Futura", sans-serif;
            line-height: 1.5;
        }

        .mInfo p {
            margin: 0;
            font-size: 12px;
            font-family: "Futura", sans-serif;
            font-weight: 600;
            color: #666;
        }

        .mBadge {
            background: #38843a;
            color: white;
            width: 24px;             
            height: 24px;            
            border-radius: 50%;      
            margin-left: auto;
            font-size: 12px;
            font-family: "Futura", sans-serif;
            display: flex;
            justify-content: center; 
            align-items: center;     
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
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
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
        <p>
    </div>
 
    <div class="shop">
        <div class="info">
            <img src="../images/shopimg.png" style="height: 75px; ">
            <div class="dits">
                <p style="font-weight: bold; font-size: 20px; padding-top: 5px;">Siotees Garden</p>
                <div style="display: flex; align-items: center; gap: 5px; padding-bottom: 5px;">
                    <p>4.6</p>
                    <img src="../images/1star.png">
                    <p style="padding-left: 10px;">7k Followers</p>
                </div>
            </div>
            <div class="btn">
                <button onclick="follow()" id="follow">Follow</button>
                <button onclick="openPopup()" id="message">Message</button>
            </div>
        </div>
        <div class="location">
            <div style="width: 200px; display: flex; flex-direction: column; justify-content: space-around; padding-top: 8px; padding-bottom: 8px;">
                <p>P3C2+PHM</p>
                <p>Don Marcos Avenue</p>

                <p>0991 234 5678</p>
            </div>
            <img src="../images/map.png" style="border-radius: 8px;">
        </div>
    </div>  

    <div class="mPopup" id="mPopup">
    <div class="mHeader">
        <button class="bckBtn" onclick="closePopup()"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg></button>
        <h2>Messages</h2>
    </div>
    <div class="mList">
        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 1" class="profile-pic">
            <div class="mInfo">
                <h3>GVS Plants Trading</h3>
                <p>Good Morning Ma’am O... · 7:10 pm</p>
            </div>
            <span class="mBadge">2</span>
        </div>

        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 2" class="profile-pic">
            <div class="mInfo">
                <h3>RNB</h3>
                <p>Our new plants... · 3:30 pm</p>
            </div>
        </div>

        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 3" class="profile-pic">
            <div class="mInfo">
                <h3>Shiloh's Rock Garden</h3>
                <p>Exclusive voucher just for... · 12:51 pm</p>
            </div>
            <span class="mBadge">15</span>
        </div>

        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 4" class="profile-pic">
            <div class="mInfo">
                <h3>Angel's Blooms Garden</h3>
                <p>We’re available on mondays... · 1 day ago</p>
            </div>
            <span class="mBadge">1</span>
        </div>

        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 5" class="profile-pic">
            <div class="mInfo">
                <h3>D'Floras</h3>
                <p>Hi po! What days are you a... · 3 days ago</p>
            </div>
        </div>
        <div class="mItem">
            <img src="../images/shopimg.png" alt="Seller 6" class="profile-pic">
            <div class="mInfo">
                <h3>The Garden</h3>
                <p>Hello po! Hm? · 1 day ago</p>
            </div>
        </div>
    </div>
    </div>

    <div class="other">
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
            <p class="name">Rare rooted Bougainvillea</p>
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
            <p class="name">Calathea Triostar plant </p>
            <p class="price">₱99</p>
            <p class="detail">5 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product6.php?id=<?php echo $id; ?>';">
            <img src="../images/JadeLucky.png">
            <p class="name">Jade Lucky Plant (Crassula ovata)</p>
            <p class="price">₱199</p>
            <p class="detail">5 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product7.php?id=<?php echo $id; ?>';">
            <img src="../images/PalmTree.png">
            <p class="name">Palmera Tree (Areca Palm) Indoor and Outdoor | Fully Rooted Live Plant 1.5ft</p>
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

<script>
    function openPopup() {
        document.getElementById("mPopup").style.display = "block";
        let btn = document.getElementById("message");
        btn.style.backgroundColor = "#b6d985";
        btn.style.color = "#154326";
        btn.style.border = "2px solid #154326";
        btn.style.fontsize = "15px";
    }
    function closePopup() {
        document.getElementById("mPopup").style.display = "none";
        let btn = document.getElementById("message");
        btn.style.backgroundColor = "#38843a";
        btn.style.color = "white";
        btn.style.border = "2px solid white";
    }
    function follow() {
        let btn = document.getElementById("follow");

        if (btn.innerHTML == "Followed"){
            btn.style.backgroundColor = "#38843a";
            btn.style.color = "white";
            btn.innerHTML = "Follow";
            btn.style.border = "2px solid white";

        } else {
            btn.style.backgroundColor = "#b6d985";
            btn.style.color = "#154326";
            btn.innerHTML = "Followed";
            btn.style.border = "2px solid #154326";
            btn.style.fontsize = "15px";
        }
    }
</script>
<?php
    include("usrNamePlacer.php");
    
?>