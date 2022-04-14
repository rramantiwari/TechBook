<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bteuppractical</title>

    <link rel="stylesheet" href="../practical/css/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../practical/css/style.css">
    <!-- favicon/icon   link  -->
    <link rel="icon" href="../practical/image/favi.png">

</head>

<body>

    <!-- header section starts  -->
    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i>Engineering Practical</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="signup-btn" class="fas fa-user"></div>
                <div onclick="raman()" class="fas fa-moon" alt="dark mode"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#subject">subject</a>
                <a href="#stream">stream</a>
                <a href="#project">project</a>
                <a href="#article">article</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->


    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#subject" class="fas fa-book-reader"></a>
        <a href="#stream" class="fas fa-stream"></a>
        <a href="#project" class="fas fa-book"></a>
        <a href="#article" class="fas fa-newspaper"></a>
    </nav>

    <!-- login form -->

    <button class="open-button" onclick="openForm()">Login Form</button>
    <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div> 

    <!-- login form --> 

    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form action="">
            <h3>sign in</h3>
            <span>username</span>
            <input type="email" name="" class="box" placeholder="enter your email" id="">
            <span>password</span>
            <div>
                <span>Password</span>
                <input type="password" class="box" name="password" id="myInput" placeholder="Enter new Password" required>
                <input type="checkbox" onclick="myFunction()">Show Password

            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">click here</a></p>
            <p>I don't have an account ? <a href="../practical/signup.html">create one</a></p>
        </form>
    </div>

    <!-- signup form  

    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form action="">
            <h3>Sign Up</h3>
            <span>First Name</span>
            <input type="text" name="fname" class="box" placeholder="First Name" id="" required>
            <span>Last Name</span>
            <input type="text" name="lname" class="box" placeholder="Last Name" id="" required>
            <span>Email Address</span>
            <input type="email" name="" class="box" placeholder="Enter your email" id="" required>
            <span>Mobile Number</span>
            <input type="number" name="mnumber" class="box" placeholder="Enter mobile Number" id="" required>
            <div>
                <span>Password</span>
                <input type="password" class="box" name="password" id="myInput" placeholder="Enter new Password" required>
                <input type="checkbox" onclick="myFunction()">Show Password

            </div>
            <span>Select Image</span>
            <input type="file" class="box" name="image" required>
            <input type="submit" value="sign in" class="btn">
        </form>

    </div>-->
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 100% off</h3>
                <p>This is our latest updated practical book</p>
                <a href="#" class="btn">Download now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="image/ed1.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/ofc.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/ac.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/ml.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/ma.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/iwt.jpg" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over ₹100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>First Year Practical</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/cs1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Communication Skills-I</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/am1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Mathematics-I</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ap1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Physics – I</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ac.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Chemistry</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ed1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Engineering Drawing-I</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/emm.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>EMM</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/wp1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Workshop Practice-I</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/am2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Mathematics - II</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ap2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Physics -II</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/bit.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>BIT</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ee 1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Electrical Engineering -I </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ecd.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>ECD</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/gw2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Workshop Practice-II </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/focit.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>FOCIT</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ma.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Multimedia & Animation</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/oat.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Office Automation Tools</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/iwt.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>IWT</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/dccn.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>DCCN</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/dsuc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>DSUC</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <!--
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div> -->


            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <section class="featured" id="featured">

        <h1 class="heading"> <span>Second Year Practical</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ap3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Applied Mathematics-III</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ee2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Electrical Engineering -II </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/evs.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Environmental Studies </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/edc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>EDC</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ew.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Electronic Workshop</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/de.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Digital Electronics </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/uhv.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>UHV</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/cs2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Communication Skill-II</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/iet.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>IET</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/nftl.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>NFTL</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/eim.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>E I and M</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/poce.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Principles of C. E.</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ec.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Energy Conservation </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/dbms.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>DBMS</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/oopj.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>oop's Java</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/osc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Operating Systems</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ecdm.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> E-Commerce and DM</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <!--

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
            -->

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <section class="featured" id="featured">

        <h1 class="heading"> <span>Third Year Practical</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/imed.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>IMED</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/mi.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Microprocessor and P. D.</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ofc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>O. F. C.</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ce.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Consumer Electronics</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/c.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Programming in C </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/m.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Microwave Engineering</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/maes.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Microcontrollers and E. S.</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/wamc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Wireless and Mobile C.S.</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/se.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Software Engineering </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/wadup.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>PHP</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/pyt.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>CPU PYTHON</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/cam.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>CAHM</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/iot.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Internet of Things </h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/doaa.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>DOAA</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/cc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3> Cloud Computing</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/imed.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>IMED</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/ml.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Machine Learning</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <!--
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
            -->

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">

        <form action="">
            <h3>subscribe for latest updates</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="subject">

        <h1 class="heading"> <span>Practical via Subject</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ap1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/am1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ac.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/m.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ma.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/c.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/cam.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/evs.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/pyt.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/bit.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="stream">

        <h1 class="heading"> <span>Practical via Stream</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/mi.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ecd.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ee2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/emm.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/uhv.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/wamc.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/wp1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/se.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ml.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/ecdm.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">₹1 <span>₹45</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>Project of the day</h3>
            <h1>upto 100% off</h1>
            <p>Project of the day refer your friend and download the Project </p>
            <a href="#" class="btn">Refer Your Friend</a>
            <a href="#" class="btn">Download At only ₹10</a>
        </div>

        <div class="image">
            <img src="image/deal-img.jpg" alt="">
        </div>

    </section>

    <!-- deal section ends -->



    <!-- blogs section starts  -->

    <section class="blogs" id="project">

        <h1 class="heading"> <span>Our Project</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Snake</h3>
                        <p>wait I will make you perfect.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Snake</h3>
                        <p>wait I will make you perfect.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Snake</h3>
                        <p>wait I will make you perfect.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Snake</h3>
                        <p>wait I will make you perfect.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Snake</h3>
                        <p>wait I will make you perfect.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="article">

        <h1 class="heading"> <span>Article</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <h3>Ayush Chauhan</h3>
                    <p>Best app  for specially diploma related exams and iti exams.... CHEERS 🥂<br><br><br></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <h3>Bhavyata Raval</h3>
                    <p>Best App for preparing for competitive exam. Wide variety of efficient educator, flexible timing.<br><br><br></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>Vaibhav Singla</h3>
                    <p>Such a useful and helpful learning app<br><br><br><br></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <h3>Akshita Singh</h3>
                    <p>Beautiful app Just amazing very helpfull for exams<br><br><br><br></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <h3>Ajay Shrawane</h3>
                    <p>This app is very helpfull for education<br><br><br><br></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <h3>Dhruvi Sharma</h3>
                    <p>A shout out to the designers and developers of the app who constantly 
                        push the limits and make the interface as close 
                        as to the offline mode. Kudos to the entire team</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Kanpur </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Lucknow </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Ayodhya </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Gorakhpur </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Prayagraj </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Varanasi </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Project </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Subject </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Stream </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Article </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91-9580980177 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91-7028978987 </a>
                <a href="#"> <i class="fas fa-envelope"></i>bteuppractical@gmail.com </a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> created by <span>RR APPLICATION & SERVICES</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div>
















    <script src="../practical/js/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../practical/js/script.js"></script>
    <!-- FOr password hide-->
    <script src="../practical/js/swiper-bundle.min.js"></script>

</body>

</html>