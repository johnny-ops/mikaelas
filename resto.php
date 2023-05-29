<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="x-icon" href="images/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="resto.css">
    <title>Mikaela's Kitchen</title>
</head>
<body>
    <div id="loader">
        <div class="loader-animation">
          <div class="cradle">
            <div class="cradle-ball"></div>
            <div class="cradle-ball"></div>
            <div class="cradle-ball"></div>
            <div class="cradle-ball"></div>
            <div class="cradle-ball"></div>
          </div>
          <div class="loading-text">Loading...</div>
        </div>
      </div>
    <header>
        <button data-text="Awesome" class="button">
            <span class="actual-text">&nbsp;Mikaela's Kitchen&nbsp;</span>
            <span class="hover-text" aria-hidden="true">&nbsp;Mikaela's Kitchen&nbsp;</span>
        </button>
    <nav class="navbar" id="navbar">
        <a href="#home" class="link">
        <i class="link-icon fa-solid fa-house"></i>
        <span class="link-title">Home</span>
        </a>
        <a href="#dishes" class="link">
        <i class="link-icon fa-solid fa-utensils"></i>
        <span class="link-title">Dishes</span>
        </a>
        <a href="#about" class="link">
        <i class="link-icon fa fa-thumb-tack"></i>
        <span class="link-title">About</span>
        </a>
        <a href="#menu" class="link">
        <i class="link-icon fa-solid fa-spoon"></i>
        <span class="link-title">Menu</span>
        </a>
        <a href="#order" class="link">
        <i class="link-icon fa fa-cart-plus"></i>
        <span class="link-title">Order</span>
        </a>
        
    </nav>
    <div class="icons"> 
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="" class="fas fa-heart"></a>
        <i class="fa fa-shopping-cart" id="cart-icon"></i>
        
    </div>     
            <div class="cart">
        <h2 class="cart-title">Your Order</h2>
        
        <div class="cart-content">
            <div class="cart-box">
                <img src="images/chicken-adobo-tamarind-5-500x500.png" alt="" class="cart-img">
                <div class="detail-box">
                    <div class="cart-product-title">Chicken Adobo</div>
                    <div class="cart-price">&#8369;45.00</div>
                    <input type="number" value="1" class="cart-quantity">
                </div>
                <i class="fa fa-trash cart-remove" aria-hidden="true"></i>
            </div>
        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">&#8369;0</div>
        </div>
        <button type="button" class="btn-buy">Order Now</button>
        <i class="fa fa-times" aria-hidden="true" id="close-cart"></i>
    </div>
</div>
    </header>
    <form action="" id="search-form">
        <input type="search" placeholder="search here.." name="" id="search-box">
        <label for="search-box"  class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <section class="home" id="home">
        <div class="container"> 
    
        <div class="wrapper">
           
            <div class="slide">
            <div class="container">
                <div class="content">
                    <h3>Welcome to <span>Mikaela's</span> Kitchen</h3>
                    <p>Welcome to our Cafeteria order now pay later</p>
                    <a href="" class="btn">Read More</a>
                 </div>
            </div>
                <div class="image">
                  <img src="images/bopis-recipe-500x500.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">Our Dishes</h3>
        <h1 class="heading">Popular Dishes</h1>

        <div class="box-container">
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/chicken-adobo-tamarind-5-500x500.png" alt="">
                <h3>Adobong Manok</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/filipino-pork-menudo-3-500x500.jpg" alt="">
                <h3>Pork Menudo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/bopis-recipe-500x500.jpg" alt="">
                <h3>Bopis</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            </div>
            <div class="box-container">
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/ginataang-puso-saging-4-500x500.jpg" alt="">
                <h3>Ginataang Puso ng Saging</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/Ginataang-Langka-with-Pork-500x500.jpg" alt="">
                <h3>Ginataang Langka</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/tj.jpg" alt="">
                <h3>Hotdog</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;12.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/scrambled-eggs-500x500.jpg" alt="">
                <h3>Scrambled egg</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;10.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/Sunny-Side-Up-Eggs-Web-Size-7148-square-500x500.jpg" alt="">
                <h3>Sunny side up Egg</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;10.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/pork.jpg" alt="">
                <h3>Adobong Baboy</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <img src="images/paksiw-na-bangus-recipe-500x500.jpg" alt="">
                <h3>Paksiw na bangus</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>&#8369;45.00</span>
                <a href="" class="btn">Order Now</a>
            </div>
            </div>
    </section>
    <section class="about" id="about">
        <h3 class="sub-heading">About Us</h3>
        <h1 class="heading">Why choose us?</h1>

        <div class="row">
            <div class="image">
                <img src="images/utensils.jpg" alt="">
            </div>
            <div class="content">
                <h3>Best Cafeteria in Kasiglahan</h3>
                <p>We are a team of dedicated individuals who are passionate about providing our customers with delicious food and exceptional service. 
                    Our goal is to create a warm and welcoming atmosphere where everyone can come together and enjoy a great meal.</p>
                <p>At Mikaela's Cafeteria, We serve a lot of filipino foods that is quality and budget friendly!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Free Delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Easy Payment</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>8hours/day Service</span>
                    </div>
                </div>
                <a href="" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="menu" id="menu">
        <h3 class="sub-heading">Our Menu</h3>
        <h1 class="heading">Daily Menu</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/chicken-adobo-tamarind-5-500x500.png" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Chicken Adobo</h3>
                    <p>Chicken adobo is a popular Filipino dish that features tender chicken cooked in a tangy and savory sauce made with vinegar, soy sauce, garlic, and black peppercorns.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/ginataang-puso-saging-4-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Ginataang Puso ng Saging</h3>
                    <p>Ginataang Puso ng Saging is a Filipino dish made with young banana blossoms, cooked in coconut milk and spices. Banana blossoms, also known as "heart of banana", are the edible flowers of the banana plant.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Ginataang-Langka-with-Pork-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Ginataang Langka</h3>
                    <p>Ginataang Langka is a popular Filipino dish made with unripe jackfruit cooked in coconut milk and spices. Jackfruit is a large fruit that is native to Southeast Asia and is commonly used in savory dishes.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
        </div>
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/filipino-pork-menudo-3-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Menudo</h3>
                    <p>Pork menudo is a traditional Filipino stew made with pork, diced potatoes, carrots, and bell peppers cooked in a tomato-based sauce.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/bopis-recipe-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Bopis</h3>
                    <p>In Filipino cuisine, BOPIS refers to a spicy and tangy dish made with diced pig or cow lungs and heart, sautéed in garlic, onions, and tomatoes.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/tj.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Hotdog</h3>
                    <p>A hotdog is a type of sausage that is typically served on a soft, long bun and often topped with condiments such as ketchup, mustard, relish, onions, or sauerkraut.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;12.00</span>
                </div>
            </div>
            </div>
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/pork.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Pork Adobo</h3>
                    <p>Chicken adobo is a popular Filipino dish that features tender chicken cooked in a tangy and savory sauce made with vinegar, soy sauce, garlic, and black peppercorns. </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;45.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/scrambled-eggs-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Scrambled Egg</h3>
                    <p>Scrambled eggs are a classic breakfast dish that involve beaten eggs cooked in a pan with butter or oil. </p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;10.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/Sunny-Side-Up-Eggs-Web-Size-7148-square-500x500.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Sunny-Side-Up Egg</h3>
                    <p>Sunny-side-up egg are a classic breakfast dish that feature a single whole egg cracked into a hot pan with butter or oil, then cooked until the white is set but the yolk is still runny.</p>
                    <a href="" class="btn">Order Now</a>
                    <span class="price">&#8369;10.00</span>
                </div>
            </div>
        </div>
    </section>
    <section class="order" id="order">
        <h3 class="sub-heading">Order Now</h3>
        <h1 class="heading">Free and Fast</h1>

        <form action="" class="tintin">
            <div class="inputbox">
                <div class="input">
                    <span>Your Name</span>
                    <input type="text" placeholder="enter your name" required>
                </div>
                <div class="input">
                    <span>Your Number</span>
                    <input type="text" placeholder="enter your number" required>
                </div>
                <div class="input">
                    <span>Your order</span>
                    <input type="text" placeholder="enter food name" required>
                </div>
                <div class="input">
                    <span>Additional</span>
                    <input type="test" placeholder="additional food" required>
                </div>
                <div class="input">
                    <span>How much</span>
                    <input type="number" placeholder="how many order" required>
                </div>
                <div class="input">
                    <span>Date and Time</span>
                    <input type="datetime-local" required>
                </div>
                <div class="input">
                    <span>Your Address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>Your Message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <input type="submit" value="order now" class="btn" onclick="audio.play();" onclick="alert('Order Coming Up!');">
        </form>
    </section>
    <section class="footer">

        <div class="box-container">
            <div class="box">
            <h3>Location</h3>
            <a href="">Philippines</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="">Home</a>
                <a href="">Dishes</a>
                <a href="">About</a>
                <a href="">Menu</a>
                <a href="">Order</a>
                </div>
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="">09222365478</a>
                    <a href="">09158971423</a>
                    <a href="">hotdog@gmail.com</a>
                    <a href="">sa tabi tabi ng Kasiglahan</a>
                    </div>
                    <div class="box">
                        <h3>Follow Us</h3>
                        <div class="main">
                            <div class="up">
                              <button class="card1">
                              <a href="https://www.facebook.com/johnlawrence.cano.1/"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" class="instagram" viewBox="0 0 16 16" id="IconChangeColor" > <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" id="mainIconPathAttribute" fill="blue"></path> </svg></a>
                              </button>
                              <button class="card2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px" class="twitter"><path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>
                              </button>
                            </div>
                            <div class="down">
                              <button class="card3">
                                <a href="https://github.com/johnny-ops?tab=overview&from=2023-03-01&to=2023-03-18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px" class="github">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg></a>
                              </button>
                              <button class="card4">
                              <svg style="color: red" class="discord" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="currentColor" viewBox="0 0 16 16"> <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" fill="red"></path> </svg>
                              </button>
                            </div>
                          </div>
                        </div>
        </div>
        <div class="credit">All rights reserve by <span>CanoDev<a>&#10084;</a></span></div>
        <audio src="Upbeat and Happy Background Music For YouTube Videos.mp3" controls auto play>
            
        </audio>
    </section>


    <script src="resto.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
          window.addEventListener("load", function() {
  const loader = document.getElementById("loader");
  setTimeout(function() {
    loader.style.display = "none";
  }, 4000);
});
    const audio = new Audio();
    audio.src = "./ty.mp3";
    </script>    
</body>
</html>