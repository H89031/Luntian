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

        .top {
            width: 900px;
            background-color: white;
            text-align: center;
            font-size: 50px;
            padding: 40px;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            display: flex;
            justify-content: space-around;
            gap: 35px;
        }

        .mainpic {
            height: 325px; 
            width: 400px; 
            object-fit: cover;
        }

        .smallpics {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .small {
            height: 70px; 
            width: 90px; 
            object-fit: cover;
        }

        .info {
            width: 500px;
            justify-content: left;
            text-align: left;
        }

        .info h1 {
            color: black;
            font-size: 25px;
            text-align: left;
            font-weight: 50;
            margin: 0px;
        }

        .rating {
            display: flex;
        }

        .rating p {
            font-size: 13px;
            font-weight: bold;
            color: #38843a;
            margin: 0px;
            margin-top: 20px;
        }

        .rating img {
            height: 18px; 
            margin-top: 18px;
            margin-left: 5px;
            object-fit: cover;
        }

        #price {
            font-size: 30px;
            font-weight: bold;
            color: #38843a;
            margin: 0px;
            margin-top: 20px;
        }

        .haha {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 50%;
            text-align: center;
            background-color: #eaf4da;
            margin-top: 20px;
            border-radius: 8px;
        }

        .haha p {
            font-size: 13px;
            font-weight: 500;
            color: #38843a;
            margin: 0px;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .dits {
            display: flex;
        }

        .dits p {
            font-size: 13px;
            font-weight: 50;
            color: black;
            margin: 0px;
            margin-top: 20px;
            margin-left: 15px;
        }

        .dits img {
            height: 23px; 
            margin-top: 15px;
            object-fit: cover;
        }

        button {
            width: 180px;
            padding: 13px;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            margin-right: 5px;
            font-weight: bold;
        }

        .mid {
            width: 900px;
            background-color: white;
            text-align: left;
            font-size: 50px;
            padding: 30px;
            padding-left: 40px;
            padding-right: 40px;
            font-weight: 900;
            font-family: "Futura", sans-serif;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 35px;
        }

        .mid h2 {
            font-size: 13px;
            font-weight: bold;
            color: black;
            margin: 0px;
            margin-bottom: 8px;
        }

        .mid p {
            font-size: 12px;
            font-weight: 500;
            color: #38843a;
            margin: 0px;
            margin-bottom: 8px;
            font-style: italic;
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
            padding-bottom: 20px;
        }

        .hehehe {
            background-color: white;
            color: white;
            text-align: left;
            font-size: 50px;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-weight: 900;
            border-top: 2px solid #e8e9e3;
            gap: 35px;
        }

        .reviewpic {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
            margin-top: 25px;
        }

        .reviewpic img {
            height: 125px; 
            width: 125px; 
            border-radius: 10px;
            object-fit: cover;
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
        <div class="logo" onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
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

    <div class="top">
        <div class="pics">
            <img src="../images/Peppermint.png" class="mainpic">
            <div class="smallpics">
                <img src="../images/Peppermint.png" class="small">
            </div>
        </div>
        <div class="info">
            <h1>Peppermint Herbal Plant (Mentha piperita)</h1>
            <div class="rating">
                <p>4.6</p>
                <img src="../images/star.png">
            </div>
            <p id="price">₱350</p>
            <div class="haha">
                <p style="border-right: 2px solid #38843a;"><span style="font-weight: bold;">73</span> ratings</p>
                <p><span style="font-weight: bold;">450</span> sold</p>
            </div>
            <div class="dits">
                <img src="../images/store.png">
                <p style="font-weight: bold;"><a href="store.php?id=<?php echo $id; ?>" style="text-decoration-color: white; color: black;">Siotees Garden</a><span style="color: #38843a; font-size: 10px; margin-left: 10px;">4.6</span></p>
                <img src="../images/1star.png" style="margin-top: 19px; margin-left: 3px; height: 15px; ">
            </div>
            <div class="dits">
                <img src="../images/deliver.png">
                <p>Guaranteed to get by Jan 30 - Feb 3</p>
            </div>
            <div class="dits">
                <p style="margin-left: 38px; margin-top: 5px; font-size: 12px; color: grey;">Standard Delivery</p>
            </div>
            <div class="dits">
                <p style="margin-left: 38px; margin-top: 5px; font-size: 12px; margin-bottom: 5px;">Get ₱50 voucher if your order arrives late.</p>
            </div>
            <div class="dits">
                <img src="../images/box.png">
                <p>COD Policy</p>
            </div>
            <div class="dits">
                <img src="../images/check.png">
                <p>Safe Payment • Free & Easy Returns • Efficient Logistics ...</p>
            </div>
            <div class="dits">
                <button style="background-color: #38843a;" id="checkout" onclick="checkout()">Buy Now</button>
                <button style="background-color: #154326;" id="addtocart" onclick="addtocart()">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="mid">
        <div>
            <h2>Sunlight Needed</h2>
            <p>Partial shade to full sun</p>
            <h2 style="margin-top: 20px;">Watering Schedule</h2>
            <p>Every 2-3 days (keep soil moist but not waterlogged)</p>
        </div>
        <div>
            <h2>Ideal Planting Conditions</h2>
            <p>Well-draining, fertile soil with good moisture retention.</p>
        </div>
        <div>
            <h2>Common Pests & Diseases</h2>
            <p>Aphids</p>
            <p>Spider mites</p>
            <p>Powdery Mildew (if overwatered)</p>
        </div>
        <div>
            <h2>Other Details</h2>
            <p>The Peppermint Plant is a refreshing, aromatic herb known for its cooling scent and multiple uses.</p>
            <p>Perfect for teas, culinary dishes, and even natural remedies, peppermint thrives in both pots and garden beds.</p>
            <p>It’s a fast-growing, low-maintenance herb that spreads easily, making it a great choice for home gardeners.</p>
            <p>Keep it pruned to encourage bushy growth and enjoy its fresh, minty fragrance all year round!</p>
        </div>
    </div>

    <div class="bottom">
        <div class="hehe">
            <h1>Product Ratings<h1>
        </div>
        <div class="hehehe">
            <p>m*****5<p>
            <img src="../images/star.png" style="height: 18px; margin: 0px;">
            <p style="color: grey;">Variation: Peppermint<p>
            <p>ang nasa profile pic ay peppermint kaya ako ngorder pero ung dumating di nmn nmn peppermint nkakadismaya😒😒😒😒😒<p>
            <div class="reviewpic">
                <img src="../images/PeppermintRev.png">
                <img src="../images/PeppermintRev.png">
                <img src="../images/PeppermintRev.png">
            </div>
        </div>
    </div>


    <p style="margin: 0px; color: #154326; font-size: 20px;">— Suggested Products —</p>    


    <!-- Random Products -->
    <div class="other">
        <div class="grid-item" onclick="window.location.href='product7.php?id=<?php echo $id; ?>';">
            <img src="../images/PalmTree.png">
            <p class="name">Palmera Tree (Areca Palm) Indoor and Outdoor | Fully Rooted Live...</p>
            <p class="price">₱159</p>
            <p class="detail">200 sold | Novaliches, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product9.php?id=<?php echo $id; ?>';">
            <img src="../images/Monstera.png">
            <p class="name">Monstera Deliciosa (Swiss Cheese Plant)</p>
            <p class="price">₱1,200</p>
            <p class="detail">101 sold | Batasan Hills, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product11.php?id=<?php echo $id; ?>';">
            <img src="../images/Boncel.png">
            <p class="name">Rare Boncel (Sansevieria cylindrica 'Boncel')</p>
            <p class="price">₱800</p>
            <p class="detail">64 sold | North Fairview, Quezon City</p>
        </div>
        <div class="grid-item" onclick="window.location.href='product3.php?id=<?php echo $id; ?>';">
            <img src="../images/Bougainvillea.png">
            <p class="name">Rare rooted Bougainvillea | Potted Plant for Sale</p>
            <p class="price">₱250</p>
            <p class="detail">194 sold | Kaligayahan, Quezon City</p>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    function addtocart() {
        let product = {
            name: "Peppermint Herbal Plant (Mentha piperita)",
            price: 350,
            image: "../images/Peppermint.png",
            quantity: 1
        };

        let addproduct = JSON.parse(localStorage.getItem("productlist")) || [];

        let existingProduct = addproduct.find(item => item.name === product.name);

        if (existingProduct) {
            existingProduct.quantity += 1; 
        } else {
            addproduct.push(product); 
        }

        localStorage.setItem("productlist", JSON.stringify(addproduct));
        alert("Product added to cart!");
    }

    function checkout() {
        let product = {
            name: "Peppermint Herbal Plant (Mentha piperita)",
            price: 350,
            image: "../images/Peppermint.png",
            quantity: 1
        };

        let checkedProducts = JSON.parse(localStorage.getItem("checkedProducts")) || [];

        checkedProducts.push(product);
        
        localStorage.setItem("checkedProducts", JSON.stringify(checkedProducts));

        window.location.href = "checkout.php?id=<?php echo $id; ?>";
    }
    
</script>
<?php
    include("usrNamePlacer.php");
?>