<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="container">
            <!-- navbar start here -->
            <nav class="nav align-items-center justify-content-between nav-navbar">
                <div class="nav-brand">
                    <h3>ForhadFood</h3>
                </div>
                <div>
                    <button class="custom-btn">Sign Up</button>
                </div>
            </nav>
            <!-- navbar end here -->
        </div>
        <!-- hero section start here -->
            <section class="hero-banner  mt-4">
                <div class="container">
                  <div class="row h-100">
                    <div class="col-lg-6   mx-auto">
                        <h1 class="custom-h1">Taste Our Delicious Best Foods</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou.</p>
                        <div class="mt-4 custom-input-filed">
                            <input id="input_filed" type="text" placeholder="search any food"><button class="custom-btn" id="searchBtn">Search</button>
                        </div>
                    </div>
                    <div class="col-lg-offset"></div>
                  </div>
                </div>
            </section>
        <!-- hero section edns here -->
    </header>

<!-- main food section start here -->
<!-- main food section start here -->
    <section class="foods-section">
        <div class="container">
            <h2 class="custom-h2 text-center mb-5">Your Favourite Food</h2>
            <!-- food items -->
            <div id="food-container" class="row mt-4 gap-4">
                
            </div>
            <div class="text-center mt-5">
                <button class="custom-btn" id="showAllBtn">Show All</button>
            </div>
        </div>
    </section>
<!-- main food section ends here -->
<!-- main food section ens here -->



<!-- footer section start here -->
<!-- footer section start here -->
<footer class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-4 footer-head">
                        <h4>Section</h4>
                        <p>Home</p>
                        <p>Features</p>
                        <p>Pricing</p>
                        <p>FAQs</p>
                        <p>About</p>
                    </div>
                    <div class="col-lg-4 footer-head">
                        <h4>Section</h4>
                        <p>UIUX Design</p>
                        <p>Product Design</p>
                        <p>Back End Developer</p>
                        <p>Front End Developer</p>
                        
                    </div>
                    <div class="col-lg-4 footer-head">
                        <h4>Resource</h4>
                        <p>FAQ</p>
                        <p>Support</p>
                        <p>Privacy Policy</p>
                        <p>Terms of Service</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 footer-head">
                <h4>Subscribe to our newsletter</h4>
                <p><span>There are many variations of passages of available, but the majority have suffered</span></p>
                <div class="d-flex">
                    <input type="text" class="form-control border" placeholder="Email Address"> <button class="custom-btn">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section ednd here -->
<!-- footer section ednd here -->



<!-- modal for all food details -->
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="mealsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centerd">
      <div class="modal-content">
       
        <div class="modal-header">
           
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="" id="img" class="img-fluid h-50 mb-2" alt="">
            <p>There are many variations of passages of available, but the majority have suffered</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Order Now</button>
        </div>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/api.js"></script>
    <script>
        window.addEventListener("click", function(){
            window.location.assign('login.html');
        })
    </script>
</body>
</html>