<head>
  <!-- Linking to the stylesheet for design -->
  <link rel="stylesheet" href="design.css"> 
</head>
<body>
  <!-- Section for displaying products -->
  <section class="show-products">
    <!-- Container for individual product boxes -->
    <div class="box-container">
      <?php
        // Checking if there are results to display
        if (mysqli_num_rows($result) > 0) {
          // Looping through each fetched book
          while ($fetch_book = mysqli_fetch_assoc($result)) {
      ?>
            <!-- Individual product box -->
            <div class="box" style="width: 255px; height:355px;">
              <!-- Link to book details page -->
              <a href="book_details.php?details=<?php echo $fetch_book['bid']; echo '-name=', $fetch_book['name']; ?>">
                <!-- Book image -->
                <img style="height: 200px;width: 200px;margin: 25px;" class="books_images" src="../BadeBadinehalKamidi/img/<?php echo $fetch_book['img']; ?>" alt="">
              </a>
              <!-- Book name -->
              <div style="text-align:left;">
                <div style="font-weight: 500; font-size:18px; text-align: center;" class="name"><?php echo $fetch_book['name']; ?></div>
              </div>
              <!-- Book price -->
              <div class="price">Price: $ <?php echo $fetch_book['price']; ?>/-</div>
              <!-- Form to handle buy and favorite actions -->
              <form action="book_details.php" method="POST">
                <!-- Hidden inputs containing book details -->
                <input class="hidden_input" type="hidden" name="book_name" value="<?php echo $fetch_book['name'] ?>">
                <input class="hidden_input" type="hidden" name="book_id" value="<?php echo $fetch_book['bid'] ?>">
                <input class="hidden_input" type="hidden" name="book_image" value="<?php echo $fetch_book['img'] ?>">
                <input class="hidden_input" type="hidden" name="book_price" value="<?php echo $fetch_book['price'] ?>">
                <!-- Button to buy the book -->
                <button name="knowMore" value="<?php echo $fetch_book['name'];?>">Buy Now</button>
                <!-- Button to add the book to favorites -->
                <button name="favourites" value="<?php echo $fetch_book['name'];?>" formaction="favourites.php">Add to favourites</button>
              </form>
            </div>
      <?php
          }
        } else {
          // Display message when no products are added
          echo '<p class="empty">no products added yet!</p>';
        }
      ?>
    </div>
  </section>
</body>
