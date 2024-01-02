<header>
    <nav id="navbar">
        <ul>
            <li class="logo" id="nav-logo" onclick="location.href = 'index.php'">
                D Aquarium &#38; Pet Store
            </li>
            <li class="items"><a href="about.php">About Us</a></li>
            <li class="items"><a href="contact.php">Contact</a></li>
            <li class="dropdown items">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php

          $conn = $pdo->open();
          try {
            $stmt = $conn->prepare("SELECT * FROM category");
            $stmt->execute();
            foreach ($stmt as $row) {
              echo "
                      <li><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></li>
                    ";
            }
          } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
          }

          $pdo->close();

          ?>
                </ul>
            </li>
            <li class="items">
                <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword"
                            placeholder="Search Product" required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                            <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="dropdown messages-menu items">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="label label-success cart_count"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
                    <li>
                        <ul class="menu" id="cart_menu">
                        </ul>
                    </li>
                    <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
                </ul>
            </li>
            <?php
      if (isset($_SESSION['user'])) {
        $image = (!empty($user['photo'])) ? 'images/' . $user['photo'] : 'images/profile.jpg';
        echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="' . $image . '" class="user-image" alt="User Image">
                    <span class="hidden-xs">' . $user['firstname'] . '</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="' . $image . '" class="img-circle" alt="User Image">

                      <p>
                        ' . $user['firstname'] . ' ' . $user['lastname'] . '
                        <small>Member since ' . date('M. Y', strtotime($user['created_on'])) . '</small>
                      </p>
                    </li>
                    <li class="user-footer items">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
      }
      ?>
            <li class="items"><a href="login.php">Login</a></li>

        </ul>
    </nav>
</header>