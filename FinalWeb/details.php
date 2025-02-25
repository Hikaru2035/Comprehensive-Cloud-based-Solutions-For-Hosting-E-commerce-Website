<?php
session_start();
$isLoggedIn = isset($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="CSS/styles.css" />
        <title>Ecommerce Website</title>
    </head>

    <body>
        <header class="header">
            <div class="header__top">
                <div class="header__container container">
                    <div class="header__contact">
                        <span>(+01) - 2345 - 6789</span>
                        <span> Our location</span>
                    </div>
                    <p class="header__alert-news">
                        Super Value Deals - Save more with coupons
                    </p>
                </div>
            </div>

            <nav class="nav container">
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="shop.php" class="nav__link">Shop</a>
                        </li>
                        <li class="nav__item">
                            <a href="compare.php" class="nav__link">Compare</a>
                        </li>
                        <?php if ($isLoggedIn): ?>
                            <li>
                                <a href="accounts.php">My Account</a>
                            </li>
                        <?php else: ?>
                            <li class="nav__item">
                                <a href="login-register.php" class="nav__link">Log In</a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <div class="header__search">
                        <input
                            type="text"
                            placeholder="Search for items..."
                            class="form__input"
                        />
                        
                        <button class="search__btn">
                            <img src="image/search.png" alt="" />
                        </button>
                    </div>
                </div>

                <div class="header__user-actions">
                    <a href="wishlist.php" class="header__action-btn">
                        <img src="image/heart.png" alt="" />
                        <span class="count">3</span>
                    </a>

                    <a href="cart.php" class="header__action-btn">
                        <img src="image/shopping-cart.png" alt="" />
                        <span class="count">3</span>
                    </a>

                    <div class="header__action-btn nav__toggle" id="nav-toggle">
                        <img src="image/menu.png" alt="">
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">

            <section class="breadcrumb">
                <ul class="breadcrumb__list flex container">
                    <li><a href="index.php" class="breadcrumb__list">Home</a></li>
                    <li><span class="breadcrumb__link">></span></li>
                    <li><span class="breadcrumb__link">Fashion</span></li>
                    <li><span class="breadcrumb__link">></span></li>
                    <li><span class="breadcrumb__link">Henley Shirt</span></li>
                </ul>
            </section>

            <section class="details section--lg">
                <div class="details__container container grid">
                    <div class="details__group">
                        <img src="image/diep 1.jpg" alt="" class="details__img" />
                    </div>

                    <div class="details__group">
                        <h3 class="details__title">Henley Shirt</h3>
                        <p class="details__brand">Brands: <span>adidas</span></p>

                        <div class="details__price flex">
                            <span class="new__price">$116</span>
                            <span class="old__price">$200.00</span>
                            <span class="save__price">25% Off</span>
                        </div>

                        <p class="short__description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam
                            rem officia, corrupti reiciendis minima nisi modi, quasi, odio
                            minus dolore impedit fuga eum eligendi? Officia doloremque facere
                            quia. Voluptatum, accusantium!
                        </p>

                        <ul class="product__list">
                            <li class="list__item flex">
                                <i class="fi-rs-crown"></i> 1 Year AL Jazeera Brand Warranty
                            </li>
                            
                            <li class="list__item flex">
                                <i class="fi-rs-refresh"></i> 30 Day Return Policy
                            </li> 

                            <li class="list__item flex">
                                <i class="fi-rs-credit-card"></i> Cash On Delivery Available
                            </li> 
                        </ul>

                        <div class="details__color-flex">
                            <span class="details__color-title">Color</span>

                            <ul class="color__list">
                                <li>
                                    <a
                                        href="#"
                                        class="color__link"
                                        style="background-color: hsl(37, 100%, 65%)"
                                    ></a>
                                </li>

                                <li>
                                    <a
                                        href="#"
                                        class="color__link"
                                        style="background-color: hsl(353, 100%, 67%)"
                                    ></a>
                                </li>

                                <li>
                                    <a
                                        href="#"
                                        class="color__link"
                                        style="background-color: hsl(49, 100%, 60%)"
                                    ></a>
                                </li>

                                <li>
                                    <a
                                        href="#"
                                        class="color__link"
                                        style="background-color: hsl(304, 100%, 78%)"
                                    ></a>
                                </li>

                                <li>
                                    <a
                                        href="#"
                                        class="color__link"
                                        style="background-color: hsl(126, 61%, 52%)"
                                    ></a>
                                </li>
                            </ul>
                        </div>

                        <div class="details__size flex">
                            <span class="details__size-title">Size</span>

                            <ul class="size__list">
                                <li>
                                    <a href="#" class="size__link size-active">M</a>
                                </li>

                                <li>
                                    <a href="#" class="size__link">L</a>
                                </li>

                                <li>
                                    <a href="#" class="size__link">XL</a>
                                </li>

                                <li>
                                    <a href="#" class="size__link">XXL</a>
                                </li>
                            </ul>
                        </div>

                        <div class="details__action">
                            <input type="number" class="quantity" value="3" />
                            
                            <a href="#" class="btn btn--sm">Add to Cart</a>

                            <a href="#" class="details__action-btn">
                                <i class="fi fi-rs-heart"></i>
                            </a>
                        </div>

                        <ul class="details__meta">
                            <li class="meta__list flex"><span>SKU:</span> FWM15VKT</li>
                            <li class="meta__list flex">
                                <span>Tags:</span> Cloth, Women, Dress
                            </li>
                            <li class="meta__list flex">
                                <span>Availability:</span> 8 Items In Stock
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="details__tab container">
                <div class="detail__tabs">
                    <span class="detail__tab active-tab" data-target="#info">
                        Additional Info
                    </span>
                    <span class="detail__tab" data-target="#reviews">Reviews(3)</span>
                </div>

                <div class="details__tabs-content">
                    <div class="details__tab-content active-tab" content id="info">
                        <table class="info__table">
                            <tr>
                                <th>Stand Up</th>
                                <td>35"L × 24"W × 37-45"H (front to back wheel)</td>
                            </tr>

                            <tr>
                                <th>Folded (w/o wheels)</th>
                                <td>32.5"L × 18.5"W × 16.5"H</td>
                            </tr>

                            <tr>
                                <th>Folded (w/ wheels)</th>
                                <td>32.5"L × 24"W × 18.5"H</td>
                            </tr>

                            <tr>
                                <th>Door Pass Through</th>
                                <td>24</td>
                            </tr>

                            <tr>
                                <th>Frame</th>
                                <td>Aluminum</td>
                            </tr>

                            <tr>
                                <th>Weight (w/o wheels)</th>
                                <td>20 LBS</td>
                            </tr>

                            <tr>
                                <th>Weight Capacity</th>
                                <td>60 LBS</td>
                            </tr>

                            <tr>
                                <th>Width</th>
                                <td>24"</td>
                            </tr>

                            <tr>
                                <th>Handle height (ground to handle)</th>
                                <td>37-45"</td>
                            </tr>

                            <tr>
                                <th>Wheels</th>
                                <td>12" air / wide track slick tread</td>
                            </tr>

                            <tr>
                                <th>Seat back height</th>
                                <td>21.5"</td>
                            </tr>

                            <tr>
                                <th>Head room (inside canopy)</th>
                                <td></td>
                            </tr>

                            <tr>
                                <th>Color</th>
                                <td>Black, Blue, Red, White</td>
                            </tr>

                            <tr>
                                <th>Size</th>
                                <td>M, S</td>
                            </tr>
                        </table>
                    </div>

                    <div class="details__tab-content" content id="reviews">
                        <div class="reviews__container grid">
                            <div class="review__single">
                                <div>
                                    <img src="image/avatar-1.jpg" alt=""
                                    class="review__img">
                                    <h4 class="review__tilte">Jacky Chan</h4>
                                </div>

                                <div class="review__data">
                                    <div class="review__rating">
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                    </div>

                                    <p class="review description">
                                        Thank you very fast shipping from Poland only 3days.
                                    </p>

                                    <span class="review__date">December 4, 2020 at 3:12 pm</span>
                                </div>
                            </div>

                            <div class="review__single">
                                <div>
                                    <img src="image/avatar-2.jpg" alt=""
                                    class="review__img">
                                    <h4 class="review__tilte">Jacky Chan</h4>
                                </div>

                                <div class="review__data">
                                    <div class="review__rating">
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                    </div>

                                    <p class="review description">
                                        Great low price and works well.
                                    </p>

                                    <span class="review__date">December 4, 2020 at 3:12 pm</span>
                                </div>
                            </div>

                            <div class="review__single">
                                <div>
                                    <img src="image/avatar-2.jpg" alt=""
                                    class="review__img">
                                    <h4 class="review__tilte">Jacky Chan</h4>
                                </div>

                                <div class="review__data">
                                    <div class="review__rating">
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                        <i class="fi fi fi-rs-star"></i>
                                    </div>

                                    <p class="review description">
                                        Authentic and Beautiful, Love these way more than ever
                                        expected They are Great earphones
                                    </p>

                                    <span class="review__date">December 4, 2020 at 3:12 pm</span>
                                </div>
                            </div>
                        </div>

                        <div class=" review__form">
                            <h4 class="review__form-title">Add a review</h4>

                            <div class="rate__product">
                                <i class="fi fi fi-rs-star"></i>
                                <i class="fi fi fi-rs-star"></i>
                                <i class="fi fi fi-rs-star"></i>
                                <i class="fi fi fi-rs-star"></i>
                                <i class="fi fi fi-rs-star"></i>
                            </div>

                            <form action="" class="form grid">
                                <textarea
                                    class="form__input textarea"
                                    placeholder="Write Comment"
                                ></textarea>

                                <div class="form__group grid">
                                    <input type="text" placeholder="Name" class="form__input" />

                                    <input type="email" placeholder="Email" class="form__input" />
                                </div>

                                <div class="form__btn">
                                    <button class="btn">Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products container section--lg">
                <h3 class="section__title"><span>Related</span> Products</h3>

                <div class="products__container grid">                
                    <div class="product__item">
                        <div class="product__banner">
                            <a href="details.php" class="product__image">
                                <img src="image/diep 1.jpg" alt=""
                                class="product__img default">

                                <img src="image/diep 2.jpg" alt=""
                                class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                                    <i class="fi fi-rs-heart"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i> 
                                </a>
                            </div>

                            <div class="product__badge light-green">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.php">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">$238.85</span>
                                <span class="old__price">$245.8</span>
                            </div>

                            <a
                                href="#"
                                class="action__btn cart__btn"
                                aria-label="Add To Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i> 
                            </a>
                        </div>
                    </div>

                    <div class="product__item">
                        <div class="product__banner">
                            <a href="details.php" class="product__image">
                                <img src="image/diep 1.jpg" alt=""
                                class="product__img default">

                                <img src="image/diep 2.jpg" alt=""
                                class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                                    <i class="fi fi-rs-heart"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i> 
                                </a>
                            </div>

                            <div class="product__badge light-orange">Hot</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.php">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">$238.85</span>
                                <span class="old__price">$245.8</span>
                            </div>

                            <a
                                href="#"
                                class="action__btn cart__btn"
                                aria-label="Add To Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i> 
                            </a>
                        </div>
                    </div>
               
                    <div class="product__item">
                        <div class="product__banner">
                            <a href="details.php" class="product__image">
                                <img src="image/diep 1.jpg" alt=""
                                class="product__img default">

                                <img src="image/diep 2.jpg" alt=""
                                class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                                    <i class="fi fi-rs-heart"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i> 
                                </a>
                            </div>

                            <div class="product__badge light-pink">-30%</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.php">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">$238.85</span>
                                <span class="old__price">$245.8</span>
                            </div>

                            <a
                                href="#"
                                class="action__btn cart__btn"
                                aria-label="Add To Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i> 
                            </a>
                        </div>
                    </div>

                    <div class="product__item">
                        <div class="product__banner">
                            <a href="details.php" class="product__image">
                                <img src="image/diep 1.jpg" alt=""
                                class="product__img default">

                                <img src="image/diep 2.jpg" alt=""
                                class="product__img hover">
                            </a>

                            <div class="product__actions">
                                <a href="#" class="action__btn" aria-label="Quick View">
                                    <i class="fi fi-rs-eye"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                                    <i class="fi fi-rs-heart"></i> 
                                </a>

                                <a href="#" class="action__btn" aria-label="Compare">
                                    <i class="fi fi-rs-shuffle"></i> 
                                </a>
                            </div>

                            <div class="product__badge light-pink">-22%</div>
                        </div>

                        <div class="product__content">
                            <span class="product__category">Clothing</span>
                            <a href="details.php">
                                <h3 class="product__title">Colorful Pattern Shirts</h3>
                            </a>
                            <div class="product__rating">
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                                <i class="fi fi-rs-star"></i>
                            </div>
                            <div class="product__price flex">
                                <span class="new__price">$238.85</span>
                                <span class="old__price">$245.8</span>
                            </div>

                            <a
                                href="#"
                                class="action__btn cart__btn"
                                aria-label="Add To Cart">
                                <i class="fi fi-rs-shopping-bag-add"></i> 
                            </a>
                        </div>
                    </div>                  
                </div>
            </section>

            <section class="newsletter section home__newsletter">
                <div class="newsletter__container container grid">
                    <h3 class="newsletter__title flex">
                        <img
                            src="image/email.png"
                            alt=""
                            class="newsletter__icon"
                        />
                        Sign up to Newsletter
                    </h3>

                    <p class="newsletter__description">
                        ...and receive $25 coupon for first shopping
                    </p>

                    <form action="" class="newsletter__form">
                        <input
                            type="text"
                            placeholder="Enter your email"
                            class="newsletter__input"
                        />
                        <button type="submit" class="newsletter__btn">Subcribe</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="footer container">
            <div class="footer__container grid">
                <div class="footer__content">
                    <a href="index.php" class="footer__logo-img">
                    </a>

                    <h4 class="footer__subtitle">Contact</h4>

                    <p class="footer__description">
                        <span>Address:</span> 562 Wellington Road, Street 32, San Francisco
                    </p>

                    <p class="footer__description">
                        <span>Phone:</span> +01 2222 365 /(+91) 01 2345 6789
                    </p>

                    <p class="footer__description">
                        <span>Hours:</span> 10:00 - 18:00, Mon - Sat
                    </p>

                    <div class="footer__social">
                        <h4 class="footer__subtitle">Follow Me</h4>

                        <div class="footer__social-links flex">
                            <a href="">
                                <img
                                    src="image/facebook.png"
                                    alt=""
                                    class="footer__social-icon"
                                />
                            </a>

                            <a href="">
                                <img
                                    src="image/twitter.png"
                                    alt=""
                                    class="footer__social-icon"
                                />
                            </a>

                            <a href="">
                                <img
                                    src="image/instagram.png"
                                    alt=""
                                    class="footer__social-icon"
                                />
                            </a>

                            <a href="">
                                <img
                                    src="image/pinterest.png"
                                    alt=""
                                    class="footer__social-icon"
                                />
                            </a>

                            <a href="">
                                <img
                                    src="image/youtube.png"
                                    alt=""
                                    class="footer__social-icon"
                                />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Address</h3>

                    <ul class="footer__link">
                        <li><a href="" class="footer__link">About Us</a></li>
                        <li><a href="" class="footer__link">Delivery Information</a></li>
                        <li><a href="" class="footer__link">Privacy Policy</a></li>
                        <li><a href="" class="footer__link">Terms & Conditions</a></li>
                        <li><a href="" class="footer__link">Contact Us</a></li>
                        <li><a href="" class="footer__link">Support Center</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">My Account</h3>

                    <ul class="footer__link">
                        <li><a href="" class="footer__link">Sign In</a></li>
                        <li><a href="" class="footer__link">View Cart</a></li>
                        <li><a href="" class="footer__link">My Wishlist</a></li>
                        <li><a href="" class="footer__link">Track My Order</a></li>
                        <li><a href="" class="footer__link">Help</a></li>
                        <li><a href="" class="footer__link">Order</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Secured Payment Gateways</h3>

                    <img
                        src="image/qr.png"
                        alt=""
                        class="payment__img"
                    />
                </div>
            </div>

            <div class="footer__bottom">
                <p class="copyright">&copy; 2023 Evara. All rights reserved</p>
                <span class="designer">Designed by Crypticalcoder</span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>