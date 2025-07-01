<?php include('./header.php') ?>


<html lang="en">

<head>

  <!-- Font links -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- CSS links-->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
  <!-- fancybox -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
  <!-- magnific-popup -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

  <style>
    a:hover {

      text-decoration: none;
    }

    /* 
.main-menu .navigation > li > a {
    padding: 20px 0px;
} */

    .portfolio-section {
      padding: 50px 0;
      /* background-color: #000; */
    }

    .portfolio-menu {
      text-align: center;
    }

    .control {
      background: #23346c;
      color: #fff;
      padding: 10px 10px;
      /* border: 1px solid #23346c; */
      border-radius: 3px;
      margin: 5px;
      cursor: pointer;
      -webkit-transition: all 05s ease;
      font-size: 20px;
      -moz-transition: all 05s ease;
      -ms-transition: all 05s ease;
      -o-transition: all 05s ease;
      transition: all 0.5s ease;
      font-weight: 500;
      padding: 10px 20px;
    }

    .control:hover {
      background: var(--s);
    }

    .mixitup-control-active {
      color: #fff;
      background: var(--s);

    }

    .fancybox-container button:focus {
      outline: 0;
      box-shadow: none;
    }

    .portfolio-item {
      padding-top: 30px;
    }

    .pd {
      padding: 0;
      padding: 10px;
      position: relative;
    }

    .pd img {
      /* height: 180px; */
      transition: all 0.5s;
      position: relative;
      border-radius: 6px;
      min-height: 200px;
      max-height: 200px;
      object-fit: cover;
      object-position: center;
      width: 100%;

    }

    .portfolio-overlay {
      position: absolute;
      z-index: 2;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.7);
      width: 100%;
      height: 100%;
      text-align: center;
      visibility: hidden;
      transition: all 0.5s;
      transform: scale(0);
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
    }

    .portfolio-overlay p,
    .portfolio-overlay a {
      position: relative;
      z-index: 4;
    }

    .portfolio-overlay::before {
      content: "";
      width: 0;
      height: 0;
      border-width: 0;
      position: absolute;
      left: 10%;
      top: 10%;
      transition: 50ms height ease 150ms;
      z-index: 3;
    }

    .portfolio-overlay::after {
      content: "";
      width: 0;
      height: 0;
      border-width: 0;
      position: absolute;
      right: 10%;
      bottom: 10%;
      transition: 100ms width ease 200ms;
      z-index: 3;
    }

    .portfolio-item:hover .portfolio-overlay::before {
      width: 80%;
      height: 80%;
      border-top: 1px solid #50977f;
      border-right: 1px solid #50977f;
      transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
    }

    .portfolio-item:hover .portfolio-overlay::after {
      width: 80%;
      height: 80%;
      border-bottom: 1px solid #50977f;
      border-left: 1px solid #50977f;
      transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
    }

    .portfolio-item li:hover .portfolio-overlay {
      visibility: visible;
      transform: scale(1);
    }

    .portfolio-overlay .category {
      margin-top: 70px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #fff;
      font-weight: 500;
      display: none;
    }

    .portfolio-overlay .magnify-icon {
      height: 40px;
      width: 40px;
      border-radius: 20px;
      background: #50977f;
      margin: 0 5px;
      cursor: pointer;
      display: inline-block;
      transition: all 0.25s;
    }

    .portfolio-overlay .magnify-icon:hover {
      background: #000;
    }

    .portfolio-overlay .magnify-icon p span i {
      font-size: 15px;
      color: #fff;
      line-height: 40px;
      cursor: pointer;
    }

    /*******Responsive media query******/

    /* Extra small devices (portrait phones, less than 576px)*/
  </style>
</head>

<body>

  <section class="neighborhood-hero Aminities_ban">
    <div class="overlay-gradient"></div>
    <div class="tf-container">
      <div class="hero-content  text-center">
        <h1>Our Gallery</h1>
        <p>Explore our beautiful spaces and Aminities through our photo gallery</p>
        <ul class="breadcrumb">
          <li><a class="home" href="index.php">Home</a></li>
          <li>Gallery</li>
        </ul>
      </div>
    </div>
  </section>









  <section class="portfolio-section bg1" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center heading_section">
          <h2 class="title">Our Gallery</h2>
          <p class="sub_title">Explore our beautiful spaces and Aminities through our photo gallery</p>

          <p></p>
        </div>
      </div>
      <div class="portfolio-menu mt-2 mb-4">
        <nav class="controls">
          <button type="button" class="control outline" data-filter="all">All</button>
          <button type="button" class="control outline" data-filter=".web">Community</button>
          <button type="button" class="control outline" data-filter=".dev">Interior</button>
          <button type="button" class="control outline" data-filter=".wp">Exterior</button>
        </nav>
      </div>
      <ul class="row portfolio-item">
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" itemprop="thumbnail" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">

              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- JS Links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!--   
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
  <!-- Mixitup -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
  <!-- fancybox -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
  <!-- Fancybox js -->
  <script>
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");

    var mixer = mixitup(containerEl, {
      animation: {
        effects: "fade translateZ(-100px)",
        effectsIn: "fade translateY(-100%)",
        easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
      }
    });
    // fancybox insilaze & options //
    $("[data-fancybox]").fancybox({
      loop: true,
      hash: true,
      transitionEffect: "slide",

      clickContent: function(current, event) {
        return current.type === "image" ? "next" : false;
      }
    });
  </script>
</body>

</html>



<?php include('./footer.php') ?>