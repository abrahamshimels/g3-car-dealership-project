<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G3 car dealership website</title>
    <link rel="shortcut icon" href="./Resource/Images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
</head>

<body>

    <!-- start include the header.php -->
    <?php  include('header.php') ?>
    <!-- end include the header.php -->

    <!-- start include the banner.php -->
    <?php include('Template/_banner.php') ?>
    <!-- end include the banner.php -->

    <!-- start include the search.php -->
    <?php include('Template/_search.php') ?>
    <!-- end include the search.php -->

<!-- model -->
    <section> 
        <div class="model-header">
            <a href="./model.php#electric">Electric cars </a>
            <a href="./model.php#engine">Engine cars </a>
            <a href="./model.php#hybrid">Hybrid Cars</a>
        </div>
        <div class="car-list-hover">
            <div class="star-container">
                <i class="fa fa-star"></i>
            </div>
            <div class="car-list-hover-cart"><a href=""><i class="fa-solid fa-shopping-cart car-list-cart cart-icon">Add to Cart</i></a></div>
            <div class="car-list-hover-cart"><a href="contact.php"><i class="fa-solid fas fa-headset car-list-contact">Contact Us</i></a></div>
            <div class="car-list-details">
                <a href="#"><i class="fa-brands fa-instagram social-icon instagram-icon"></i></a>
                <a href="#"><i class="fa-brands fa-facebook social-icon facebook"></i></a>
                <a href="#" target="_blank">
                    <i class="fa-brands fa-twitter social-icon x"></i></a>
            </div>
        </div>
        <div class="models">
            <div class="car-list model-page-car-list" data-engine="Electric" data-price="100">
          <img src="./Resource/Images/1Cybertruck tesla.jpg" alt="car" />
          <div class="pentagon"><p>-10%</p></div>
          <div class="pentagon"><p>-10%</p></div>
          <div class="car-description">
            <p class="model-name">Cybertruck tesla</p>
            <p class="model-price"><s>200,500</s> $250,000</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="car-list" data-engine="Electric" data-price="100">
          <img
            src="./Resource/Images/2Lotus Eletre EV SUV Debuts.jpg"
            alt="car"
          />
          <div class="car-description">
            <p class="model-name">Lotus Eletre EV SUV Debuts</p>
            <p class="model-price">$150,000</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>

        <div class="car-list" data-engine="Electric" data-price="100">
          <img src="./Resource/Images/3Tesla Model 3.jpg" alt="car" />
          <div class="pentagon"><p>-25%</p></div>
          <div class="car-description">
            <p class="model-name">Tesla Model 3</p>
            <p class="model-price"><s>200,500</s> $150,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
            <div class="car-list model-page-car-list" data-engine="engine" data-price="100">
          <img
            src="./Resource/Images/engine/1Ferrari SF90 Stradale.jpg"
            alt="car"
          />
          <div class="pentagon"><p>-10%</p></div>
          <div class="car-description">
            <p class="model-name">Ferrari SF90 Stradale</p>
            <p class="model-price"><s>200,500</s> $150,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="car-list" data-engine="engine" data-price="100">
          <img
            src="./Resource/Images/engine/2Porsche 911 Turbo S.jpg"
            alt="car"
          />
          <div class="pentagon"><p>-35%</p></div>
          <div class="car-description">
            <p class="model-name">Porsche 911 Turbo S</p>
            <p class="model-price"><s>200,500</s> $150,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>

        <div class="car-list" data-engine="engine" data-price="100">
          <img
            src="./Resource/Images/engine/3Mercedes-AMG GT Black Series.jpg"
            alt="car"
          />
          <div class="pentagon"><p>-15%</p></div>
          <div class="car-description">
            <p class="model-name">Mercedes-AMG GT Black Series</p>
            <p class="model-price">$250,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
            <div class="car-list model-page-car-list" data-engine="hybrid" data-price="100">
          <img src="./Resource/Images/hybrid/BMW i3.jpeg" alt="car" />
          <div class="pentagon"><p>-35%</p></div>
          <div class="pentagon"><p>-35%</p></div>
          <div class="car-description">
            <p class="model-name">BMW i3</p>
            <p class="model-price"><s>200,500</s> $150,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="car-list" data-engine="hybrid" data-price="100">
          <img
            src="./Resource/Images/hybrid/Honda Insight ZE2.jpeg"
            alt="car"
          />
          <div class="pentagon"><p>-35%</p></div>
          <div class="car-description">
            <p class="model-name">Honda Insight ZE2</p>
            <p class="model-price"><s>200,500</s> $150,00</p>
            <p class="rating">
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>
              <span>★</span>(450 recommends)
            </p>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
          <div class="car-list-hover">
            <div class="car-list-hover-cart">
              <a href="./cart.php"
                ><i class="fa-solid fa-shopping-cart car-list-cart cart-icon"
                  >Add to Cart</i
                ></a
              >
            </div>
            <div class="car-list-hover-cart">
              <a href="./contact.php"
                ><i class="fa-solid fas fa-headset car-list-contact"
                  >Contact Seller</i
                ></a
              >
            </div>
            <div class="car-list-details">
              <a href="https://www.instagram.com/accounts/login/"
                ><i
                  class="fa-brands fa-instagram social-icon instagram-icon"
                ></i
              ></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"
                ><i class="fa-brands fa-facebook social-icon facebook"></i
              ></a>
              <a href="https://x.com/" target="_blank">
                <i class="fa-brands fa-twitter social-icon x"></i
              ></a>
            </div>
          </div>
        </div>
            <a href="./model.php" class="car-model-button">View All Cars</a>
    </section>

    <!-- start include the sell.php -->
    <?php include('Template/_sell.php') ?>
    <!-- end include the sell.php -->

    <!-- start include the testimonials.php -->
    <?php include('Template/_testimonials.php') ?>
    <!-- end include the testimonials.php -->

    <!-- start include the partner.php -->
    <?php include('Template/_partner.php') ?>
    <!-- end include the partner.php -->

    <!-- start include the gallery.php -->
    <?php include('Template/_gallery.php') ?>
    <!-- end include the gallery.php -->

    <!-- start include the discuss.php -->
    <?php include('Template/_discuss.php') ?>
    <!-- end include the discuss.php -->
    
    <!-- start include the footer.php -->
    <?php include('footer.php')  ?>
    <!-- end include the footer.php -->

    <script src="./JS/script.js"></script>
</body>
</html>