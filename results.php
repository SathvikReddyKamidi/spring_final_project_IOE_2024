
    <head><style type="text/css">
        
        img {
            border: none;
        }
.show-products .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, 17rem);
    justify-content: center;
    gap:1.5rem;
    max-width: 1200px;
    margin:0 auto;
    align-items: flex-start;
    object-fit: cover;
    
    opacity: 1;
    visibility: visible;
  }
  
  .show-products{
    padding-top: 0;
    margin-top: 55px;
  }
  
  .show-products .box-container .box{
    text-align: center;
    padding:10px;
    border-radius: .5rem;
    background-color: #fff; 
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    
   
  }
 
  .show-products .box-container .box {
      height: 30px;
      display: inline-block;
  
  }
  
  .show-products .box-container .box {
    font-size: 1rem;
    color:black;
    text-transform: capitalize;
    background-color: transparent;  
    /* transperent box */
  }
  
  .show-products .box-container .box .price{
    margin: 8px 0;
    font-size: 17px;
    color: #f35516;
    font-weight: 400;
    cursor: pointer;
  }
  .name{
    font-family: Poynter, Georgia, serif;
    font-weight: 600;
    font-style: normal;
    font-size: 16px;
    font-stretch: normal;
    line-height: 1.25;
    letter-spacing: .04388rem;
    cursor: pointer;
   
  }
  .show-products .box-container div:hover{
    color: rgba(0, 0, 0, 0.1);
  }
  img{
    display: block;
    border-radius: 3px;
    position: relative;
    box-shadow: 0px 6px 12px rgba(0,0,0,0.3) ;
    
  }
  
  body{
    /* background-color: #f4f4f4; */
  }
    </style>
    </style></head>
<body>
    

    <section class="show-products">
        <div class="box-container">
          
            <?php
           
            //$sql= "SELECT * FROM `book_info` WHERE category='$select'";
            //$select_book = mysqli_query($connection, $sql) or die('query failed');
            // echo $result;
        // $numberOfColumns=$result->field_count;
        // $coulumInfo=$result->fetch_fields();
             if (mysqli_num_rows($result) > 0) {
                while ($fetch_book = mysqli_fetch_assoc($result)) {
            ?>

                    <div class="box" style="width: 255px; height:355px;">
                        <a href="book_details.php?details=<?php echo $fetch_book['bid'];
                                                            echo '-name=', $fetch_book['name']; ?>"> <img style="height: 200px;width: 200px;margin: 25px;" class="books_images" src="<?php echo $fetch_book['image']; ?>" alt=""></a>
                        <div style="text-align:left ;">

                            <div style="font-weight: 500; font-size:18px; text-align: center; " class="name"> <?php echo $fetch_book['name']; ?></div>
                        </div>
                        <div class="price">Price: ₹ <?php echo $fetch_book['price']; ?>/-</div>
                        <!-- <button name="add_cart"><img src="./images/cart2.png" alt=""></button> -->
                        <form action="" method="POST">
                            <input class="hidden_input" type="hidden" name="book_name" value="<?php echo $fetch_book['name'] ?>">
                            <input class="hidden_input" type="hidden" name="book_id" value="<?php echo $fetch_book['bid'] ?>">
                            <input class="hidden_input" type="hidden" name="book_image" value="<?php echo $fetch_book['image'] ?>">
                            <input class="hidden_input" type="hidden" name="book_price" value="<?php echo $fetch_book['price'] ?>">
                            
                            <button onclick="" name="know_more">Know More</button>
                        </form>
                        <!-- <button name="add_to_cart" ><img src="./images/cart2.png" alt="Add to cart"></button> -->
                        <!-- <input type="submit" name="add_cart" value="cart"> -->
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>
        </div>
    </section>
    

    </body>
