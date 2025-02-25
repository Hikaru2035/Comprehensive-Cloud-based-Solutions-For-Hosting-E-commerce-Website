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
                    <li><span class="breadcrumb__link">Shop</span></li>
                    <li><span class="breadcrumb__link">></span></li>
                    <li><span class="breadcrumb__link">Cart</span></li>
                </ul>
            </section>

            <section class="cart section--lg container">
                <div class="table__container">
                    <table class="table">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>

                        <tr>
                            <td>
                                <img
                                    src="image/shirt.jpg"
                                    alt=""
                                    class="table__img"
                                />
                            </td>

                            <td>
                                <h3 class="table__title">
                                    J.Crew Mercantile Women"s Short-Sleeve
                                </h3>
                                <p class="table__description">
                                    Maboriosam in a tonto nesciung eget distingy magndapibus.
                                </p>
                            </td>

                            <td><span class="table__price">$110</span></td>
                            <td><input="number" value="3" class="quantity"></td>
                            <td><span class="table__subtotal">$110</span></td>
                            <td><i class="fi fi-rs-trash table__trash"></i></td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                    src="image/diep 2.jpg"
                                    alt=""
                                    class="table__img"
                                />
                            </td>

                            <td>
                                <h3 class="table__title">
                                    Amazon Essentials Women's Tank
                                </h3>
                                <p class="table__description">
                                    Maboriosam in a tonto nesciung eget distingy magndapibus.
                                </p>
                            </td>

                            <td><span class="table__price">$110</span></td>
                            <td><input="number" value="3" class="quantity"></td>
                            <td><span class="table__subtotal">$110</span></td>
                            <td><i class="fi fi-rs-trash table__trash"></i></td>
                        </tr>

                        <tr>
                            <td>
                                <img
                                    src="image/diep 1.jpg"
                                    alt=""
                                    class="table__img"
                                />
                            </td>

                            <td>
                                <h3 class="table__title">
                                    Amazon Brand - Daily Ritual Women's Jersey
                                </h3>
                                <p class="table__description">
                                    Maboriosam in a tonto nesciung eget distingy magndapibus.
                                </p>
                            </td>

                            <td><span class="table__price">$110</span></td>
                            <td><input="number" value="3" class="quantity"></td>
                            <td><span class="table__subtotal">$110</span></td>
                            <td><i class="fi fi-rs-trash table__trash"></i></td>
                        </tr>
                    </table>
                </div>

                <div class="cart__actions">
                    <a href="" class="btn flex btn--md">
                        <i class="fi-rs-shuffle"></i> Update Cart
                    </a>

                    <a href="" class="btn flex btn--md">
                        <i class="fi-rs-shopping-bag"></i> Continue Shopping
                    </a>
                </div>
                
                <div class="divider">
                    <i class="fi fi-rs-fingerprint"></i>
                </div>

                <div class="cart__group grid">
                    <div>
                        <div class="cart__shipping">
                            <h3 class="section__title">Calculate Shipping</h3>

                            <form action="" class="form grid">
                                <input
                                    type="text"
                                    placeholder="State / Country"
                                    class="form__input"
                                />

                                <div class="form__group grid">
                                    <input type="text" placeholder="City" class="form__input" />

                                    <input
                                        type="text"
                                        placeholder="PostCode / ZIP"
                                        class="form__input" 
                                    />
                                </div>

                                <div class="form__btn">
                                    <button class="btn flex btn--sm">
                                        <i class="fi-rs-shuffle"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="cart__coupon">
                            <h3 class="section__title">Apply Coupon</h3>

                            <form action="" class="coupon__form form grid">
                                <div class="form__group grid">
                                    <input
                                        type="text"
                                        class="form__input"
                                        placeholder="Enter Your Coupon"
                                    />

                                    <div class="form__btn">
                                        <button class="btn flex btn--sm">
                                            <i class="fi-rs-label"></i> Apply
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="cart__total">
                        <h3 class="section__title">Cart Totals</h3>

                        <table class="cart__total-table">
                            <tr>
                                <td><span class="cart__total-title">Cart Subtotal</span></td>
                                <td><span class="cart__total-title">$330.00</span></td>
                            </tr>

                            <tr>
                                <td><span class="cart__total-title">Shipping</span></td>
                                <td><span class="cart__total-title">$10.00</span></td>
                            </tr>

                            <tr>
                                <td><span class="cart__total-title">Total</span></td>
                                <td><span class="cart__total-title">$340.00</span></td>
                            </tr>
                        </table>

                        <a href="checkout.php" class="btn flex btn--md">
                            <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
                        </a>
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