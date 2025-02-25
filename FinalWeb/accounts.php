<?php
session_start();
$isLoggedIn = isset($_SESSION['user_email']);
$username = htmlspecialchars($_SESSION['user_email']);
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
                    <li><span class="breadcrumb__link">Account</span></li>                   
                </ul>
            </section>

            <section class="accounts section--lg">
                <div class="accounts__container container grid">
                    <div class="account__tabs">
                        <p class="account__tab active__tab" data-target="#dashboard">
                            <i class="fi fi-rs-settings-sliders"></i> Dashboard
                        </p>

                        <p class="account__tab" data-target="#orders">
                            <i class="fi fi-rs-shopping-bag"></i> Orders
                        </p>

                        <p class="account__tab" data-target="#update-profile">
                            <i class="fi fi-rs-user"></i> Update Profile
                        </p>

                        <p class="account__tab" data-target="#address">
                            <i class="fi fi-rs-marker"></i> My Address
                        </p>

                        <p class="account__tab" data-target="#change-password">
                            <i class="fi fi-rs-user"></i> Change Password
                        </p>

                        <p class="account__tab" onclick="document.getElementById('logout-form').submit();">
                            <i class="fi fi-rs-exit"></i> Logout
                        </p>
                        <form id="logout-form" action="logout.php" method="POST" style="display: none;">
                            <input type="hidden" name="logout" value="1">
                        </form>
                    </div>

                    <div class="tabs__content">
                        <div class="tab__content active__tab" content id="dashboard">
                            <h3 class="tab__header">Hello <strong><?php echo $username; ?></strong>!</h3>

                            <div class="tab__body">
                                <p class="tab__description">
                                    From your account dashboard. you can easily check & view your
                                    recent order, manage your shipping and billing addresses and
                                    edit your password and account details.
                                </p>
                            </div>
                        </div>

                        <div class="tab__content" content id="orders">
                            <h3 class="tab__header">Your Orders</h3>

                            <div class="tab__body">
                                <table class="placed__order-table">
                                    <tr>
                                        <th>Orders</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>

                                    <tr>
                                        <td>#1357</td>
                                        <td>March 45, 2020</td>
                                        <td>Processing</td>
                                        <td>$125.00</td>
                                        <td><a href="#" class="view__order">View</a></td>
                                    </tr>

                                    <tr>
                                        <td>#12468</td>
                                        <td>June 29, 2020</td>
                                        <td>Completed</td>
                                        <td>$364.00</td>
                                        <td><a href="#" class="view__order">View</a></td>
                                    </tr>

                                    <tr>
                                        <td>#1357</td>
                                        <td>August 02, 2020</td>
                                        <td>Completed</td>
                                        <td>$280.00</td>
                                        <td><a href="#" class="view__order">View</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tab__content" content id="update-profile">
                            <h3 class="tab__header">Update Profile</h3>

                            <div class="tab__body">
                                <form action="" class="form grid">
                                    <input type="text" placeholder="Username"
                                    class="form__input">

                                    <div class="form__btn">
                                        <button class="btn btn--md">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab__content" content id="address">
                            <h3 class="tab__header">Shipping Address</h3>

                            <div class="tab__body">
                                <address class="address">
                                    3522 Interstate <br />
                                    75 Business Spur, <br />
                                    Sault Ste. <br />
                                    Marie, MI 49783
                                </address>
                                <p class="city">New York</p>
                                <a href="" class="edit">Edit</a>
                            </div>
                        </div>

                        <div class="tab__content" content id="change-password">
                            <h3 class="tab__header">Change Password</h3>

                            <div class="tab__body">
                                <form action="" class="form grid">
                                    <input
                                        type="password"
                                        placeholder="Current Password"
                                        class="form__input" 
                                    />

                                    <input
                                        type="password"
                                        placeholder="New Password"
                                        class="form__input" 
                                    />

                                    <input
                                        type="password"
                                        placeholder="Confirm Password"
                                        class="form__input" 
                                    />

                                    <div class="form__btn">
                                        <button class="btn btn--md">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="newsletter section">
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