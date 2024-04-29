<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swastik Villa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css	">
</head>

<body>
    <!-- header start here -->
    <header>
        <!-- navbar start here -->
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container-fluid">
                <img src="img/villa.png" alt="Logo" class="nav_logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li>
                            <a class="px-3 nav_item" href="http://localhost/swastik%20property/index.php">HOME</a>
                        </li>
                        <li>
                            <a class="px-3 nav_item" href="http://localhost/swastik%20property/aboutus.php">ABOUT US</a>
                        </li>
                        <li>
                            <a class="px-3 nav_item" href="http://localhost/swastik%20property/contact.php">CONTACT US</a>
                        </li>
                        <li>
                            <a class="px-3 nav_item" href="http://localhost/swastik%20property/register.php">REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- section1 start here -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <img src="img/section1_1.png" alt="" class="img-fluid">
                </div>
                <div
                    class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center flex-column">
                    <h3>Find The Perfect Way To</h3>
                    <h1>Live With Your Family</h1>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex">
                    <img src="img/section1_2.png" alt="" class="img-fluid h-75 w-50">
                    <img src="img/section1_3.png" alt="" class="img-fluid h-75 w-50">
                </div>
            </div>
        </div>
    </section>

    <!-- section2 start here -->
    <section>
        <div class="wrapper">
            <form class="seaction2">
                <div class="search_icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search_city">
                    <select name="city" id="city" class="search_input">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Surat">Surat</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Dehli">Dehli</option>
                        <option value="Goa">Goa</option>
                    </select>
                </div>
                <div class="search_box">
                    <input type="search" placeholder="What are you looking?" class="search_input">
                </div>
                <div class="search_type">
                    <select name="type" id="type" class="search_input">
                        <option value="Select Type">Select Type</option>
                        <option value="Weekend Home">Weekend Home</option>
                        <option value="Shop / Office">Shop / Office</option>
                        <option value="Flat / Apartment">Flat / Apartment</option>
                        <option value="Industrial Plot">Industrial Plot</option>
                        <option value="Industrial Land">Industrial Land</option>
                        <option value="Residential Flot">Residential Flot</option>
                    </select>
                </div>
                <div class="search_min">
                    <select name="min" id="min" class="search_input">
                        <option value="MIN">MIN</option>
                        <option value="₹30 L">₹30 L</option>
                        <option value="₹50 L">₹50 L</option>
                        <option value="₹1 Cr">₹1 Cr</option>
                        <option value="₹2 Cr">₹2 Cr</option>
                        <option value="₹4 Cr">₹4 Cr</option>
                        <option value="₹5 Cr">₹5 Cr</option>
                    </select>
                </div>
                <div class="search_max">
                    <select name="max" id="max" class="search_input">
                        <option value="MAX">MAX</option>
                        <option value="₹30 L">₹30 L</option>
                        <option value="₹50 L">₹50 L</option>
                        <option value="₹1 Cr">₹1 Cr</option>
                        <option value="₹2 Cr">₹2 Cr</option>
                        <option value="₹4 Cr">₹4 Cr</option>
                        <option value="₹5 Cr">₹5 Cr</option>
                    </select>
                </div>
                <div class="search_bhk">
                    <select name="BHK" id="BHK" class="search_input">
                        <option value="BHK">BHK</option>
                        <option value="1 BHK">1 BHK</option>
                        <option value="2 BHK">2 BHK</option>
                        <option value="3 BHK">3 BHK</option>
                        <option value="4 BHK">4 BHK</option>
                        <option value="5 BHK">5 BHK</option>
                        <option value="6 BHK">7 BHK</option>
                    </select>
                </div>
                <div class="search_btn_main">
                    <button type="submit" class="search_btn">SEARCH</button>
                </div>
            </form>
        </div>
    </section>


    <!-- section3 start here -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <img src="img/section3.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>


    <!-- section4 start here -->
    <section class="section4">
        <div class="wrapper">
            <div class="section4_title">
                <h1>Insight <b>SWASTIK Property</b></h1>
            </div>
            <div class="section4_1">
                <div class="section4_11">
                    <i class="fa-solid fa-house"></i>
                    <a href="http://localhost/swastik%20property/Property%20Dealer.php">
                    <p>Property Dealer</p></a>
                </div>
                <div class="section4_11">
                    <i class="fa-brands fa-servicestack"></i>
                    <p>Barter Services</p>
                </div>
                <div class="section4_11">
                    <i class="fa-solid fa-walkie-talkie"></i>
                    <p>Tulja Interior</p>
                </div>
                <div class="section4_11">
                    <i class="fa-solid fa-house-laptop"></i>
                    <a href="http://localhost/swastik%20property/PG-Services.php">
                    <p>PG Services</p>
</a>
                </div>
                <div class="section4_11">
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                    <p>Finance Services</p>
                </div>
                <div class="section4_11">
                    <i class="fa-solid fa-scale-balanced"></i>
                    <a href="http://localhost/swastik%20property/Legal%20Services.php">
                    <p>Legal Services</p>
</a>
                </div>
            </div>
        </div>
    </section>

    <!-- section5 start here -->
    <section class="section5">
        <div class="wrapper">
            <div class="section5_1">
                <div class="section5_1_title">
                    <h1>Trending <b>Properties</b></h1>
                    <h4>Property for sale in Ahmedabad</h4>
                </div>
                <div class="section5_1_slider">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner slider_items">
                            <div class="carousel-item active slider_item">
                                <img src="img/section5_1.png" class="d-block img-fluid" alt="...">
                                <div class="overlay">
                                    <div class="overlay_title">
                                        <h1>Hot Spot</h1>
                                    </div>
                                    <div class="ovarlay_details">
                                        <div class="ovarlay_details_left">
                                            <h1>H4</h1><br>
                                            <a href="">Off C G Road Ahmedabad</a>
                                        </div>
                                        <div class="ovarlay_details_right">
                                            <h1>₹ 1.50 Cr</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slider_item">
                                <img src="img/section5_2.png" class="d-block img-fluid" alt="...">
                                <div class="overlay">
                                    <div class="overlay_title">
                                        <h1>HotSpot</h1>
                                    </div>
                                    <div class="ovarlay_details">
                                        <div class="ovarlay_details_left">
                                            <h1>Yash Empire</h1><br>
                                            <a href="">Koba Gandhinagar</a>
                                        </div>
                                        <div class="ovarlay_details_right">
                                            <h1>₹ 15 L</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slider_item">
                                <img src="img/section5_3.png" class="d-block img-fluid" alt="...">
                                <div class="overlay">
                                    <div class="overlay_title">
                                        <h1>HotSpot</h1>
                                    </div>
                                    <div class="ovarlay_details">
                                        <div class="ovarlay_details_left">
                                            <h1>Shivam Residency</h1><br>
                                            <a href="">Lambha Ahmedabad</a>
                                        </div>
                                        <div class="ovarlay_details_right">
                                            <h1>₹ 18.15 L</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item slider_item">
                                <img src="img/section5_4.png" class="d-block img-fluid" alt="...">
                                <div class="overlay">
                                    <div class="overlay_title">
                                        <h1>Hot Spot</h1>
                                    </div>
                                    <div class="ovarlay_details">
                                        <div class="ovarlay_details_left">
                                            <h1>Shreeji Business Hub</h1><br>
                                            <a href="">Naroda Ahmedabad</a>
                                        </div>
                                        <div class="ovarlay_details_right">
                                            <h1>₹ 34 L</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section6 start here -->
    <section class="section6">
        <div class="wrapper">
            <div class="section6_slider">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="mb-3"><b>Top Residential</b> Featured</h1>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-outline-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-outline-dark mb-3 " href="#carouselExampleIndicators2" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_1.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Sattva Aranyam Weekend Home</h5><br>
                                                            <a href="">Hathijan Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 40 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_2.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Tulsi Heights</h5><br>
                                                            <a href="">Vatva Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 30 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_3.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Kishor Park</h5><br>
                                                            <a href="">Vaisnodevi Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 56 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_4.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>H4</h5><br>
                                                            <a href="">IIM Road Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 150 Cr</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_5.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>H4</h5><br>
                                                            <a href="">Off C G Road Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 1.50 Cr</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_6.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shreeram Residency</h5><br>
                                                            <a href="">Mandal Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 15 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_7.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Vincitore Valley</h5><br>
                                                            <a href="">Hathijan Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 35 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_8.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shreeji Residency</h5><br>
                                                            <a href="">Kathawada Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 28 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_9.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shivam Residency</h5><br>
                                                            <a href="">Lambha Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 18.50 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section7 start here -->
    <section class="section7">
        <div class="wrapper">
            <div class="section7_slider">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="mb-3"><b>Top Commercial</b> Featured</h1>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-outline-dark mb-3 mr-1" href="#carouselExampleIndicators22" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-outline-dark mb-3 " href="#carouselExampleIndicators22" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators22" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_1.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Sattva Industrial Sheds</h5><br>
                                                            <a href="">Aslali Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 42 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_2.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shimandhar Avenue</h5><br>
                                                            <a href="">Bhadaj Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 12 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_3.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shreenath Signet li</h5><br>
                                                            <a href="">Nikol Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 34 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_4.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Shreenath Signet lii</h5><br>
                                                            <a href="">Nikol Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 25 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_5.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Satyam Industrial Estate</h5><br>
                                                            <a href="">Changodar Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 38 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_6.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Sant Vihar 3</h5><br>
                                                            <a href="">Koba Gandhinagar</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 15 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_7.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Sattva Vanam Weekend Home</h5><br>
                                                            <a href="">Hathijan Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 40 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_8.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Yash Empire</h5><br>
                                                            <a href="">Koba Gandhinagar</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 34 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card_imgs border-0">
                                                    <img class="img-fluid" alt="100%x280" src="img/section7_9.png">
                                                    <div class="card_ovarlay">
                                                        <div class="card_ovarlay_left">
                                                            <h5>Nalanda Icon</h5><br>
                                                            <a href="">Makarba Ahmedabad</a>
                                                        </div>
                                                        <div class="card_ovarlay_right">
                                                            <h5>₹ 22 L</h5>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section8 start here -->
    <section class="section8">
        <div class="wrapper">
            <div class="section8_1">
                <h2>Welcome To SWASTIK Property</h2>
                <p>SWASTIK Property is a portal that has been developed from one core wish : to provide a straight-forward
                    and simple solution to real estate buyers. Our roots run deep and we are based on the pillars of
                    ground-level research and a strong brokerage and clientele network. We are a platform that aims to
                    connect a property buyer to the best possible properties for them according to their needs, be it
                    for commercial, residential or any other type of real estate! We also categorize projects according
                    to Developers or Builders for those looking for property from a niche! </p>
                <div class="section8_1_btn"><button type="button">Know More</button></div>
            </div>
        </div>
    </section>

    <!-- section9 start here -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <img src="img/section9.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>


    <!-- section10 start here -->
    <section class="section10">
        <div class="wrapper">
            <div class="section10_slider">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="mb-3 text-light">Featured Groups of <b>Developers</b></h1>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-outline-light mb-3 mr-1" href="#carouselExampleIndicators23" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-outline-light mb-3 " href="#carouselExampleIndicators23" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators23" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_1.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_11.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>SHREE DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>13</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_2.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_22.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>RADHE DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>12</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_3.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_33.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>RAJVI ENTERPRICE DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>10</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_4.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_44.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>SOHAM DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>10</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_5.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_55.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>GOYAL & CO.</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>10</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_6.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_66.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>SIDDHI DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>9</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_7.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_77.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>NLKANTH DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>9</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_8.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_88.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>EKLINGJI DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>9</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section6_9.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section10_99.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>DWARKESH DEVELOPERS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>9</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section11 start here -->
    <section class="section11">
        <div class="wrapper">
            <div class="section11_slider">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="mb-3 text-light">Featured Groups of <b>Architectures</b></h1>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-outline-light mb-3 mr-1" href="#carouselExampleIndicators24" role="button"
                                data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-outline-light mb-3 " href="#carouselExampleIndicators24" role="button"
                                data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators24" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_1.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_11.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>HM ARCHITECT</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>102</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_2.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_22.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>SHAPERS360 ARCHITECTS & CONSULTANTS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>49</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_3.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_33.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>SHREEM DESIGN</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>21</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_4.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_44.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>DIPAN APPA</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>18</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_5.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_55.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>THE HAPPY DESIGN</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>17</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_6.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_66.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>tHE gRID</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>16</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_7.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_77.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>
                                                                    THE GRID ARCHITECTS</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>15</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_8.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_88.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>DEEPSAN PLANNING & LIASSOINING</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>13</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                                                <div class="card card2_imgs">
                                                    <img class="img-fluid" alt="100%x280" src="img/section11_9.png">
                                                    <div class="card_details">
                                                        <div class="card_details1">
                                                            <img src="img/section11_99.png" alt="">
                                                        </div>
                                                        <div class="card_details2">
                                                            <div class="card_details21">
                                                                <h6>DIVYANSH DESAI & ASSOCIATES</h6>
                                                                <hr>
                                                            </div>
                                                            <div class="card_details22">
                                                                <div class="card_details221">
                                                                    <p><b>12</b></p>
                                                                    <p>Listing</p>
                                                                </div>
                                                                <div class="card_details222">
                                                                    <a href=""><button type="button"
                                                                            class="readmore_btn">READ MORE</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section12 start here -->
    <section class="section12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <img src="img/section12.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 m-lg-auto my-md-5">
                    <div class="container">
    
                        <div class="row text-center">
                    
                        <div class="four col-md-6 ">
                            <div class="counter-box">
                                <span class="counter">200</span>
                                <p>Commercial Projects</p>
                            </div>
                        </div>
                        <div class="four col-md-6">
                            <div class="counter-box">
                                <span class="counter">500</span>
                                <p>Residential Projects</p>
                            </div>
                        </div>
                        <div class="four col-md-6">
                            <div class="counter-box">
                                <span class="counter">700</span>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                        <div class="four col-md-6">
                            <div class="counter-box">
                                <span class="counter">15</span>
                                <p>Awards Wins</p>
                            </div>
                        </div>
                      </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section13 start here -->
    <section class="section13">
        <div class="wrapper">
            <div class="section13_1">
                <div class="section13_11">
                    <h1>Discover Your Dream Home Today! <b>Buy Or Rent With Confidence From</b> Our Trusted Real Estate
                        Experts</h1>
                    <div class="section13_11_btn"><a href="http://localhost/swastik%20property/contact.php"><button type="button">CALL US NOW</button></a></div>
                </div>
                <div class="section13_12">
                    <img src="img/section13.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- footer start here -->
    <footer>
        <!-- footer1 start here -->
        <section class="footer1">
            <div class="wrapper">
                <div class="footer1_1">
                    <div class="footer1_11">
                        <ul>
                            <li><a href="">Projects in Athawa</a></li>
                            <li><a href="">Projects in BARBODHAN</a></li>
                            <li><a href="">Projects in Dahin Nagar</a></li>
                            <li><a href="">Projects in Gabheni</a></li>
                            <li><a href="">Projects in Jahangirpura</a></li>
                            <li><a href="">Projects in Lal Darwaja</a></li>
                            <li><a href="">Projects in Madhapar</a></li>
                            <li><a href="">Projects in Majuragate</a></li>
                            <li><a href="">Projects in Moje Simada</a></li>
                            <li><a href="">Projects in Pratham Upvan</a></li>
                        </ul>
                    </div>
                    <div class="footer1_11">
                        <ul>
                            <li><a href="">Projects in Babajipura</a></li>
                            <li><a href="">Projects in bajwa</a></li>
                            <li><a href="">Projects in bajwada</a></li>
                            <li><a href="">Projects in Bakrol</a></li>
                            <li><a href="">Projects in Lal BOMROLI</a></li>
                            <li><a href="">Projects in Bapol</a></li>
                            <li><a href="">Projects in Bapunagar</a></li>
                            <li><a href="">Projects in barangpura</a></li>
                            <li><a href="">Projects in bardoli</a></li>
                            <li><a href="">Projects in Bareja</a></li>
                        </ul>
                    </div>
                    <div class="footer1_11">
                        <ul>
                            <li><a href="">Projects in CHIKODRA</a></li>
                            <li><a href="">Projects in Chinchwad</a></li>
                            <li><a href="">Projects in Chorasi</a></li>
                            <li><a href="">Projects in Choryasi</a></li>
                            <li><a href="">Projects in CTM</a></li>
                            <li><a href="">Projects in Dabhoda</a></li>
                            <li><a href="">Projects in DABHOI</a></li>
                            <li><a href="">Projects in DABHOI ROAD</a></li>
                            <li><a href="">Projects in Dabholi</a></li>
                            <li><a href="">Projects in Dahegam</a></li>
                        </ul>
                    </div>
                    <div class="footer1_11">
                        <ul>
                            <li><a href="">Projects in GIRNARI STREET</a></li>
                            <li><a href="">Projects in Godadara</a></li>
                            <li><a href="">Projects in Gokul Nagar</a></li>
                            <li><a href="">Projects in GOMTIPUR</a></li>
                            <li><a href="">Projects in Gondal Road</a></li>
                            <li><a href="">Projects in Gorwa</a></li>
                            <li><a href="">Projects in Gota</a></li>
                            <li><a href="">Projects in GOTHAN</a></li>
                            <li><a href="">Projects in Gotri</a></li>
                            <li><a href="">Projects in gotri sevasi road</a></li>
                        </ul>
                    </div>
                    <div class="footer1_11">
                        <ul>
                            <li><a href="">Projects in Juna Dhor Bazar</a></li>
                            <li><a href="">Projects in Dahin Kadipur</a></li>
                            <li><a href="">Projects in Kagji Ni Chawl</a></li>
                            <li><a href="">Projects in kalali</a></li>
                            <li><a href="">Projects in Kalawad Road</a></li>
                            <li><a href="">Projects in kaliyabid</a></li>
                            <li><a href="">Projects in Kalol</a></li>
                            <li><a href="">Projects in Kamrej</a></li>
                            <li><a href="">Projects in KANBHA GAM</a></li>
                            <li><a href="">Projects in Kangsiyali</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer2 start here -->
        <section class="footer2">
            <div class="wrapper">
                <div class="footer2_1">
                    <h1>Investment</h1>
                    <p><b>12% ROI on Property</b> Maximize your return on investment with a 12% ROI annually on the
                        property starting at 50 Lacs.</p>
                    <div class="section13_11_btn"><button type="button">INVESMENT</button></div>
                </div>
            </div>
        </section>

        <!-- footer3 start here -->
        <section class="footer3">
            <div class="wrapper">
                <div class="footer3_1">
                    <div class="footer3_11">
                        <img src="img/villa.png" alt="">
                        <p>SWASTIK Property is a portal that has been developed from one core wish to provide a
                            straight-forward and simple solution to real estate buyers.</p>
                    </div>
                    <div class="footer3_12">
                        <h3>Quick Links</h3>
                        <ul class="footer_items">
                            <li>
                                <a class="footer_item" href="#" title="Home">Home</a>
                            </li>
                            <li>
                                <a class="footer_item" href="http://localhost/swastik%20property/aboutus.php" title="About Us">About Us</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#" title="Developer">Developer</a>
                            </li>
                            <li>
                                <a class="footer_item" href="http://localhost/swastik%20property/Architecture.php" title="Architecture">Architecture</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#" title="Investment">Investment</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer3_12">
                        <h3>Residential
                        </h3>
                        <ul class="footer_items">
                            <li>
                                <a class="footer_item" href="#">Bunglow / Villa</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Flat / Apartment</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Residential Plots</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Weekend Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer3_12">
                        <h3>Commercial
                        </h3>
                        <ul class="footer_items">
                            <li>
                                <a class="footer_item" href="#">Industrial Land</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Shop / Office</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Industrial Plot</a>
                            </li>
                            <li>
                                <a class="footer_item" href="#">Industrial Shade</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer3_12">
                        <h3>Contact Us</h3>
                        <ul class="footer_items">
                            <li><i class="fa-regular fa-envelope pe-2"></i><a href="">info@swastikproperty.in</a></li>
                            <li><i class="fa-solid fa-phone pe-2"></i><a href="">+91 90168 57232</a></li>
                            <p><i class="fa-brands fa-facebook pe-2"></i><i class="fa-brands fa-instagram pe-2"></i><i class="fa-brands fa-linkedin pe-2"></i><i class="fa-brands fa-youtube pe-2"></i></p>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer4 start here -->
        <section class="footer4">
            <div class="container-fluid">
                <div class="row">
                    <img src="img/footer4.png" alt="" class="img-fluid">
                </div>
            </div>
        </section>

        <!-- footer5 start here -->
        <section class="footer5">
            <div class="wrapper">
                <p>Copyright © 2024 All Right Reserved By TLJ Digital.</p>
            </div>
        </section>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

    <script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="js/script.js"></script>
</body>

</html>