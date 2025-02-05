<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medicine</title>
    <link rel="icon" href="../Images/Logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/Medicine.css" />
  </head>

  <body class="main">
    <!-- header Design -->
    <header>
      <nav class="navbar navbar-expand-lg bg-body-none">
        <div class="container">
          <a class="navbar-brand mx-auto" href="index.php">
            <img
              src="../Images/Logo.png"
              alt="Logo"
              width="100"
              height="100"
              class="d-inline-block align-text-top"
            />
          </a>
          <h2 class="mt-3 fs-3 mx-3">DOCTOR SATHI</h2>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto">
              <input
                class="form-control me-2 rounded-4"
                type="search"
                placeholder=" Search For Medicine"
                aria-label="Search"
              />
              <button class="btn rounded-3" type="submit" id="btnColor">
                Search
              </button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active fw-medium"
                  aria-current="page"
                  href="cart.php"
                >
                  <img
                    src="../Images/cart.png"
                    alt="Cart Icon"
                    width="25"
                    height="25"
                    class="me-2"
                  />Cart
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active fw-medium"
                  aria-current="page"
                  href="index.php"
                  >Home</a
                >
              </li>

              <li class="nav-item">
                <a
                  class="nav-link active fw-medium"
                  aria-current="page"
                  href="service.php"
                  >Services</a
                >
              </li>

              <li class="nav-item">
                <a
                  class="nav-link active fw-medium"
                  aria-current="page"
                  href="about.php"
                  >About</a
                >
              </li>
            </ul>
          </div>
          <img
            src="../Images/profile-user.png"
            alt="Logo"
            width="25"
            height="25"
            class="user d-inline-block"
          />
        </div>
      </nav>
      <div
        class="Medicine container d-flex justify-content-center align-items-center rounded-5 mb-5"
      >
        <div class="text-center">
          <h1 class="fw-semibold ">Medicine</h1>
        </div>
      </div>
    </header>

    <main>
      <div class="container mb-5 mt-5">
        <!--First Row-->
        <div
          class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4"
        >
          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Sinex.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <h5 class="card-title fw-medium fs-5">Sinex Tab</h5>
                <p class="card-text fs-6 text-muted">Rs.30</p>
                <a href="cart.php" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/CTZ Tab.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <h5 class="card-title fw-medium fs-5">CTZ Tab</h5>
                <p class="card-text fs-6 text-muted">Rs.30</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Aceclo SR Tab.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Aceclo SR Tab</div>
                <p class="card-text fs-6">Rs.113</p>
                <a href="#" class="btn brownbtn ">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Flagyl.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Flagyl 200 mg</div>
                <p class="card-text fs-6">Rs.17</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Entosec.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Entosec -1000mg</div>
                <p class="card-text fs-6">Rs.58</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/amtas.jpg"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Amtas -10mg</div>
                <p class="card-text fs-6">Rs.120</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Clonaz.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Clonaz- 0.25mg</div>
                <p class="card-text fs-6">Rs.60</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Lobazam.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Lobazam -5mg</div>
                <p class="card-text fs-6">Rs.84</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Parken-Plus.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Parkin-Plus -7mg</div>
                <p class="card-text fs-6">Rs.58</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Zecal-Max.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Zecal-Max Tab</div>
                <p class="card-text fs-6">Rs.656</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Fempro.jpeg"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Fempro -2.5mg</div>
                <p class="card-text fs-6">Rs.112</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Hiora Mouthwash.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">
                  Hiora Mouthwash Regular
                </div>
                <p class="card-text fs-6">Rs.144</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Cortilone.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Cortilone -40mg</div>
                <p class="card-text fs-6">Rs.90</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Flexon.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Flexon Tab</div>
                <p class="card-text fs-6">Rs.30</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Nims.png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Nims Tab</div>
                <p class="card-text fs-6">Rs.42</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img
                src="../Images/Medicine/Niko .png"
                class="card-img-top"
                alt="medicine"
              />
              <div class="card-body text-center">
                <div class="card-title fw-medium fs-5">Niko Tab</div>
                <p class="card-text fs-6">Rs.10</p>
                <a href="#" class="btn brownbtn">ADD TO CART</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <!--For payment option-->
      <div class="container-fluid bg-light mb-5 py-5">
        <div class="container">
          <div class="text-center">
            <h2 class="fw-bold mb-4">Our Payment Partners</h2>
          </div>
          <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-lg-3 text-center mb-4">
              <a href="#">
                <img src="../Images/esewa.png" alt="eSewa" class="img-fluid" style="max-height: 80px;">
              </a>
            </div>
            <div class="col-md-4 col-lg-3 text-center mb-4">
              <a href="#">
                <img src="../Images/imepay.png" alt="IME Pay" class="img-fluid" style="max-height: 80px;">
              </a>
            </div>
            <div class="col-md-4 col-lg-3 text-center mb-4">
              <a href="#">
                <img src="../Images/khalti.png" alt="Khalti" class="img-fluid" style="max-height: 80px;">
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!--Footer for social media Information-->
      <div
        class="social-connect  text-center rounded-top-3"
      >
        <div class="container">
          <div class="row">
            <div class="d-flex justify-content-between">
              <p class="fs-6 py-2 mt-2">
                Get connected with us on Social networks:
              </p>
              <div class="d-flex justify-content-end align-items-center">
                <a href="#">
                  <img
                    src="../Images/facebook.png"
                    alt="Facebook Icon"
                    width="32"
                    height="32"
                    class="me-2 rounded-circle"
                  />
                </a>
                <a href="#">
                  <img
                    src="../Images/Linkedin.png"
                    alt="Linkedin Icon"
                    width="32"
                    height="32"
                    class="me-2 rounded-circle"
                  />
                </a>
                <a href="#">
                  <img
                    src="../Images/instagram.png"
                    alt="Instagram Icon"
                    width="32"
                    height="32"
                    class="me-2 rounded-circle"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer Main Part-->
      <footer class="foot pt-5 pb-4">
        <div class="container">
          <div class=" row">
            <div class="col-12 col-md-4">
              <img
                src="../Images/Logo.png"
                alt="Logo"
                width="100"
                height="100"
                class="align-middle mb-2"
              />
              <span class="fs-5 fw-bold ">DOCTOR SATHI</span>
            </div>
            <div class="col-12 col-md-4 text-center">
              <h5 class="mb-3">Our Services</h5>
              <ul class="list-unstyled py-1">
                <li>
                  <a href="medicine.php" class="text-decoration-none text-white"
                    >Order Medicine</a
                  >
                </li>
                <li>
                  <a
                    href="appointment.php"
                    class="text-decoration-none text-white"
                    >Online Appoinment</a
                  >
                </li>
                <li>
                  <a
                    href="hospital.php"
                    class="text-decoration-none text-white"
                    >Physical Appoinment</a
                  >
                </li>
                <li>
                  <a
                    href="hsitory.php"
                    class="text-decoration-none text-white"
                    >Medical Records</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-4 text-end">
              <h4 class="mb-3">Contact Us</h4>
              <p class="fs-6">
                <img
                  src="../Images/mail.png"
                  alt="Email Icon"
                  width="16"
                  height="16"
                  class="me-2"
                />
                Email: info@doctorsathi.com
              </p>
              <p class="fs-6">
                <img
                  src="../Images/phone.png"
                  alt="Phone Icon"
                  width="20"
                  height="20"
                  class=""
                />
                Phone: +01 97667676
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!--Footer For Copy Right-->
      <div class="copyright  text-center py-2">
        &copy; 2024 DOCTOR SATHI
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>



<?php

include('header.php');

if (isset($_POST['add_to_cart'])) {
  
    if ($conn->connect_error) {
        echo "<script>alert('Error connecting to database: " . $conn->connect_error . "')</script>";
        exit();
    }

    if (!isset($_SESSION['username'])) {
        header("Location:../user/sign_in_up.php");
        exit();
    } else {
        $user_id = $_SESSION['customer_id'];
        echo "User ID: $user_id<br>";

        $product_id = $_POST['product_id'];
        echo "Product ID: $product_id<br>";
        $product_name = $_POST['product_name'];
        echo "Product Name: $product_name<br>";
        $product_price = $_POST['product_price'];
        echo "Product Price: $product_price<br>";
        $product_image = $_POST['product_image'];
        echo "Product Image: $product_image<br>";
        $quantity = 1; 


        $query = "SELECT cart_id FROM cart WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $user_id);

        echo "Executing query to get cart ID...<br>";

        if (!$stmt->execute()) {
            echo "<script>alert('Error executing query: " . $stmt->error . "')</script>";
            exit();
        }

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (!$row) {
            echo "Cart not found for user. Creating a new cart...<br>";
            // Create a new cart for the user
            $query_new_cart = "INSERT INTO cart (user_id) VALUES (?)";
            $stmt_new_cart = $conn->prepare($query_new_cart);
            $stmt_new_cart->bind_param('i', $user_id);

            if (!$stmt_new_cart->execute()) {
                echo "<script>alert('Error creating new cart: " . $stmt_new_cart->error . "')</script>";
                exit();
            }
            $cart_id = $stmt_new_cart->insert_id;
            echo "New Cart ID: $cart_id<br>";
        } else {
            $cart_id = $row['cart_id'];
            echo "Cart ID: $cart_id<br>";
        }

        // Check if the product is already in the cart
        $query1 = "SELECT product_id FROM cart_item WHERE cart_id = ? AND product_id = ?";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bind_param('ii', $cart_id, $product_id);

        echo "Executing query to check if product is already in the cart...<br>";

        if (!$stmt1->execute()) {
            echo "<script>alert('Error executing query: " . $stmt1->error . "')</script>";
            exit();
        }

        $result1 = $stmt1->get_result();
        if ($result1->fetch_assoc()) {
            echo "<script>alert('Product already in Cart!')</script>";
        } else {
            // Insert the new item into the cart
            $query2 = "INSERT INTO cart_item (cart_id, product_id, product_quantity) VALUES (?, ?, ?)";
            $stmt2 = $conn->prepare($query2);
            $stmt2->bind_param('iii', $cart_id, $product_id, $quantity);

            if ($stmt2->execute()) {
                $_SESSION['cart_product_added'] = true;
                header("Location: cart.php?product_id=$product_id");
                exit();
            } else {
                echo "<script>alert('Failed to add product to cart: " . $stmt2->error . "')</script>";
            }
        }
    }
    $conn->close();
}

?>
