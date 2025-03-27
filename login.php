<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="loginregister.css">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>
    
    <div class="navbar navbar-left">
        <a href="index.html">Home</a>
        <a href="products.html">Browse Products</a>
        <a href="dailyoffers.html">Daily Offers</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
        <a href="clientsupport.html">Client Support</a>
    </div>

    <div class="navbar navbar-right">
        <a href="#" id="accountButton">Account</a>
        <a href="cart.html">Cart</a>
    </div>

    <div class="content">
        <div class="darkmode">
            <style>  
                body {  
                    font-family: Arial, sans-serif;  
                    background-color: #d3d3d3;  
                    color: black;  
                    display: flex;  
                    position: relative;  
                    transition: background-color 0.3s, color 0.3s;  
                }  
        
                body.dark-mode {  
                    background-color: rgb(18, 18, 18);  
                    color: #d3d3d3;  
                }    

                .navbar.dark-mode {  
                    background-color: #343a40;  
                }  

                .toggle-button {  
                    position: fixed;  
                    bottom: 20px;  
                    right: 5cm;  
                    padding: 10px 20px;  
                    font-size: 16px;  
                    cursor: pointer;  
                    border: none;  
                    border-radius: 5px;  
                    background-color: #007bff;  
                    color: white;  
                    transition: background-color 0.3s;  
                }  

                .toggle-button:hover {  
                    background-color: #0056b3;  
                }  
            </style>  

        </head>  
        <body>  
            <button class="toggle-button" id="toggleButton">Enable Dark Mode</button>  

            <script>  
                const toggleButton = document.getElementById('toggleButton');  
                const body = document.body;  

                toggleButton.addEventListener('click', () => {  
                    body.classList.toggle('dark-mode');  
                    if (body.classList.contains('dark-mode')) {  
                        toggleButton.textContent = 'Disable Dark Mode';  
                    } else {  
                        toggleButton.textContent = 'Enable Dark Mode';  
                    }  
                });  
            </script>  
        </div>
    </div>

    <div id="modalOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0, 0, 0, 0.5); z-index:999;"></div>
    
    <div id="accountModal" style="display:none; position:fixed; left:50%; top:50%; transform:translate(-50%, -50%); width:300px; background:white; padding:20px; text-align:center; border-radius:10px; box-shadow:0px 0px 10px rgba(0,0,0,0.3); z-index:1000;">
        <h2>Account</h2>
        <button id="loginBtn" style="width:100%; padding:10px; margin:5px 0; background:#007bff; color:white; border:none; border-radius:5px;">Login</button>
        <button id="registerBtn" style="width:100%; padding:10px; margin:5px 0; background:#28a745; color:white; border:none; border-radius:5px;">Register</button>
        <button id="myAccountBtn" style="width:100%; padding:10px; margin:5px 0; background:#ff9800; color:white; border:none; border-radius:5px;">My Account</button>
        <button id="closeModal" style="width:100%; padding:10px; margin-top:10px; background:#dc3545; color:white; border:none; border-radius:5px;">Close</button>
    </div>

    <script>

        const accountButton = document.getElementById('accountButton');
        const accountModal = document.getElementById('accountModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const closeModal = document.getElementById('closeModal');
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const myAccountBtn = document.getElementById('myAccountBtn');

        accountButton.addEventListener('click', (event) => {
            event.preventDefault(); 
            accountModal.style.display = 'block';
            modalOverlay.style.display = 'block';
        });

        closeModal.addEventListener('click', () => {
            accountModal.style.display = 'none';
            modalOverlay.style.display = 'none';
        });

        modalOverlay.addEventListener('click', () => {
            accountModal.style.display = 'none';
            modalOverlay.style.display = 'none';
        });

        loginBtn.addEventListener('click', () => {
            window.location.href = "login.php"; 
        });

        registerBtn.addEventListener('click', () => {
            window.location.href = "register.php"; 
        });

        myAccountBtn.addEventListener('click', () => {
            window.location.href = "myaccount.html"; 
        });
    </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    
        <div class="loginform">

    <form action="loginhandler.php" method="post">

        <label for="email">E-Mail</label><br>
        <input required id="email" type="text" name="email" placeholder="E-mail..">
<br><br>
        <label for="password">Password</label><br>
        <input required id="password" type="password" name="password" placeholder="Your Password..">
<br><br>
        
        <div class=submitlogin>

            <button class="loginbutton" id="loginbutton">LOGIN</button>

        </div>

        </div>

    </form>

</body>
</html>

<style>

        .loginform{
            text-align:center;
        }

        .submitlogin{
            text-align:center;
        }

        input[type="text"], 
input[type="password"] {
    width: 80%;  /* Adjust width */
    height: 40px; /* Adjust height */
    font-size: 18px; /* Make text bigger */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}


</style>