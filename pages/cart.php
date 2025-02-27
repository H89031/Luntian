<!DOCTYPE html>
<html lang="en">
<?php
    include("checkLoggedIn.php")
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luntian | Cart</title>
    <link rel="icon" type="image/png" href="../images/tablogo.png">
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

        .shop button {
            width: 30px;
            background-color: white;
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
            height: 110px;
        }

        .quan p {
            font-size: 15px;
            margin: 7px;
            padding-bottom: 5px;
        }

        .delete {
            width: 90px;
            height: 28px;
            padding: 3px;
            margin: 5px;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
            background-color: darkred;
            display: none;
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
        <img src="../images/backicon.png" style="height: 20px;" onclick="history.back()">
        <div class="logo"onclick="window.location.href='homepage.php?id=<?php echo $id; ?>';"></div>
        <div class="search"></div>
        <div class="profile">
            <a href="profile.php?id=<?php echo $id; ?>"><img src="../images/profile.png"></a>
            <a href="profile.php?id=<?php echo $id; ?>" style="text-decoration-color: white;"><p id="usrName" style="margin: 0; font-size: 20px; color: white;">Username</p></a>
        </div>
        <p>
    </div>

    <div class="cart" id="cart">
    </div>

    <div class="bottom">
        <div class="space"></div>
        <p>Total</p> 
        <div style="width: 100px; text-align: left;">
            <p style="font-weight: bold; font-size: 28px;">₱<span id="totalprice">0</span></p>
        </div>
        <button>Check Out</button>
    </div>
</body>
</html>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        let product = JSON.parse(localStorage.getItem("productlist")) || [];
        let top = document.getElementById("cart");
        let total = document.getElementById("totalprice");

        total = 0;

        function show() {
            let totalAmount = 0;
            top.innerHTML = "";

            if (product.length > 0) { 
                top.innerHTML += `
                    <div class="shop" id="shop">
                        <input type="checkbox" id="shopCheckbox" onchange="toggleAllProducts(this)">
                        <img src="../images/store.png">
                        <h1>Siotees Garden</h1>
                        <button onclick="edit()" id="edit">Edit</button>
                    </div>
                `;

                product.forEach((item, index) => {
                    let itemTotalPrice = item.price * item.quantity; 
                    totalAmount += itemTotalPrice;

                    top.innerHTML += `
                        <div class="product" id="product${index}">
                            <input type="checkbox" class="productCheckbox" onchange="updateShopCheckbox()">
                            <img src="${item.image}">
                            <div class="dits" style="width: 530px;">
                                <div style="height: 110px;"><h1>${item.name}</h1></div>
                                <div><p id="price${index}">₱${itemTotalPrice}</p></div>
                            </div>
                            <div>
                                <div style="height: 32px;">
                                    <button onclick="removeItem(${index})" class="delete" style="display:none;">Delete</button>
                                </div>
                                <div class="quan">
                                    <button onclick="updateQuantity(${index}, -1)">–</button>
                                    <p id="quantity${index}">${item.quantity}</p>
                                    <button onclick="updateQuantity(${index}, 1)">+</button>
                                </div>
                            </div>
                        </div>
                    `;
                });

                document.getElementById("totalprice").innerText = totalAmount;
            }
        }

        show();  
    });

    function updateQuantity(index, change) {
        let product = JSON.parse(localStorage.getItem("productlist")) || [];
        product[index].quantity += change;

        if (product[index].quantity < 1) product[index].quantity = 1;
        localStorage.setItem("productlist", JSON.stringify(product));

        document.getElementById(`quantity${index}`).innerText = product[index].quantity;
        document.getElementById(`price${index}`).innerText = `₱${(product[index].price * product[index].quantity)}`;

        location.reload(); 
    }

    function removeItem(index) {
        let product = JSON.parse(localStorage.getItem("productlist")) || [];
        product.splice(index, 1);
        localStorage.setItem("productlist", JSON.stringify(product));
        location.reload();
    }

    function edit() {
        let edit = document.getElementById("edit");
        let deletebtn = document.getElementsByClassName("delete");

        if (edit.innerHTML === "Done") {
            edit.innerHTML = "Edit"; 
            for (let btn of deletebtn) {
                btn.style.display = "none";
            }
        } else {
            edit.innerHTML = "Done";
            for (let btn of deletebtn) {
                btn.style.display = "block";
            }
        }
    }

    function toggleAllProducts(shopCheckbox) {
        let productCheckboxes = document.querySelectorAll(".productCheckbox");

        productCheckboxes.forEach(checkbox => {
            checkbox.checked = shopCheckbox.checked;
        });
    }

    function updateShopCheckbox() {
        let shopCheckbox = document.getElementById("shopCheckbox");
        let productCheckboxes = document.querySelectorAll(".productCheckbox");

        let allChecked = Array.from(productCheckboxes).every(checkbox => checkbox.checked);
        shopCheckbox.checked = allChecked;
    }

    document.querySelector(".bottom button").addEventListener("click", function () {
        let checkedProducts = [];
        let product = JSON.parse(localStorage.getItem("productlist")) || [];
        let checkboxes = document.querySelectorAll(".productCheckbox");

        checkboxes.forEach((checkbox, index) => {
            if (checkbox.checked) {
                checkedProducts.push(product[index]);
            }
        });

        if (checkedProducts.length > 0) {
            localStorage.setItem("checkedProducts", JSON.stringify(checkedProducts));
            window.location.href = "checkout.php?id=<?php echo $id; ?>";
        } else {
            alert("Please select at least one product to proceed to checkout.");
        }
    });


</script>

<?php
    include("usrNamePlacer.php");
    
?>