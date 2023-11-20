<?php
    include("utils/functions.php");
    $countries = getCountries();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/secondStyle.css">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="images/news.png" width="70" alt="logo">
            </a>
            <a href="signIn.html"><button type="button"  class="btn btn-secondary">Login</button></a>
            
        </div>
    </nav>

    <div class="container">
        <div class="display-6 row" >
            <h1 class="">User Register</h1>
            <hr class="my-4">
        </div>

        <div class="row align-items-center">
            <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                <form method="post" action="logic/register.php" enctype="multipart/form-data">
                    <div class="row" >
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="first-name">First Name</label>
                            <input id="first-name" class="form-control" type="text" name="firstName" required>
                        </div>
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="last-name">Last Name</label>
                            <input id="last-name" class="form-control" type="text" name="lastName" required>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="email">Email Address</label>
                            <input id="email" class="form-control" type="text" name="email" required>
                        </div>
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="country">Pais</label>
                            <select id="country" class="form-control" name="country">
                                <?php
                                /* load the countries in the combo*/
                                    $countries = getCountries();
                                    foreach($countries as $id => $country) {
                                        echo "<option value=\"$id\">$country</option>";
                                    }
                                    ?>
                                    <?php
                                ?>
                            </select>
                        </div>
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="city">City</label>
                            <input id="city" class="form-control" type="text" name="city" required>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="co2-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="address">Address 1</label>
                            <input id="address" class="form-control" type="text" name="address" required>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="co2-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="secondAddress">Address 2</label>
                            <input id="secondAddress" class="form-control" type="text" name="secondAddress" >
                        </div>
                    </div> 
                    <div class="row" >
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="postalCode">Postal Code</label>
                            <input id="postalCode" class="form-control" type="text" name="postalCode" required>
                        </div>
                        <div class="co2-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <label for="phone">Phone Number</label>
                            <input id="phone" class="form-control" type="text" name="phone" required>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="co2-sm-3 col-md-3 col-lg-3 col-xl-3">
                             <button type="submit" class="btn btn-primary"> Sign up </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <img src="images/news.jpg" width="500" alt="">
            </div>
        </div>
        
        <div class="row">
            <footer class="">
                <ul class=" nav justify-content-center">
                    <li class="nav-item"><a href="#!" class="nav-link px-2 text-muted">My Cover</a> </li>
                    <li class="nav-item"><a href="#!" class="nav-link px-2 text-muted">About Us</a> </li>
                    <li class="nav-item"><a href="#!" class="nav-link px-2 text-muted">Help</a></li>
                </ul>
                <p class="text-center text-muted">© Romero2023</p>
            </footer>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>