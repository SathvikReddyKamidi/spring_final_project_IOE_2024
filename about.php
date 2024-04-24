<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AboutUs Page</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style>
            #button-container {
                width: 30%;
                background-color: black;
                padding: 10px;
                box-sizing: border-box;
                height: 538px;
            }
        
            #data{
                flex: 1;
                padding: 15px;
                box-sizing: border-box;
                font-size: 17px;  
            }
            #Outer{
                display: flex;
                align-content: center;
                flex-wrap: nowrap;
                flex-direction: row;
            }
            .button {
                display: block;
                width: 100%;
                padding: 5px;
                margin-bottom: 5px;
                text-align: center;
                cursor: pointer;
                background-color: cornsilk;
                border: none;
                height: 32.8%;
                font-size: 25px; 
                font-style: italic;  
            }
            .button:hover {
                background-color: #ccc;
            }
        </style>
        <script type="text/javascript" src="about.js"></script>
    </head>
    <body>
        <header>
                <div class="content-wrapper">
                    <h1>BBK PAPERBACK STORE</h1>
                        <nav>
                            <a id="home" href="index.php">Home</a>
                            <a href="inc_QueryResults.php">Menu</a>
                            <a href="best.php">Best&nbsp;Sellers</a>
                            <a href="reviews.php">Reviews</a>
                            <a href="about.php">About&nbsp;Us</a>
                            <a href="contact.php">Contact&nbsp;Us</a>
                        </nav>  
                </div>
        </header>
        <div id="Outer">
            <div id="button-container">
                
                <button class="button" id="sathvikData">Sathvik Reddy Kamidi</button>
                <button class="button" id="karthikData">Karthik Reddy Badinehal</button>
                <button class="button" id="sahithiData">Sahithi Bade</button>
                
            </div>
            <p id="data"></p>
        </div>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> BBK Online Bookstore</p>
        </footer>
    </body>
</html>
