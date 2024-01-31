<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANNARI AMMAN INSTITUTE OF TECHNOLOGY - TECHNOLOGY BUSINESS INCUBATOR</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>

    <header>
      <h1>BANNARI AMMAN INSTITUTE OF TECHNOLOGY - TECHNOLOGY BUSINESS INCUBATOR</h1>
      <div class="navigation">
        <ul class="menu">
        <li class="logo"><a href="index.php"><img src="assets/img/logo2.png" alt="Your Logo"></a></li>
          <div class="close-btn"></div>
          <li class="menu-item"><a href="index.php">HOME</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">ABOUT<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="mission.php">ABOUT TBI</a></li>
              <li class="sub-item"><a href="equip.php">FACILITIES</a></li>
              <li class="sub-item"><a href="governors.php">BOARD OF GOVERNORS</a></li>
              <li class="sub-item"><a href="teamtbi.php">TEAM TBI</a></li>
              <li class="sub-item"><a href="people.php">PEOPLE TBI</a></li>
            </ul>
          </li>
          <li class="menu-item">
            <a class="sub-btn" href="#">INCUBATEES <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="sel.php">SELECTION CRITERIA</a></li>
              <li class="sub-item"><a href="focus.php">FOCUS AREA</a></li>
              <li class="sub-item"><a href="entry.php">ENTRY AND EXIT POLICY</a></li>
              <li class="sub-item"><a href="role.php">ROLES OF INCUBATORS</a></li>
              <li class="sub-item more">
                <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                <li class="more-item"><a href="gra.php">GRADUATED INCUBATEES</a></li>
              <li class="more-item"><a href="pre.php">PRE INCUBATEES</a></li>
                </ul>
              </li>
              

              </li>
            </ul>
          </li>
          <li class="menu-item">
          <a class="sub-btn" href="#" href="#">PROGRAMMES <i class="fas fa-angle-down"></i></a>
          <ul class="sub-menu">
              <li class="sub-item"><a href="idea.php">IDEATION EVENTS</a></li>
              <li class="sub-item"><a href="awr.php">AWARNESS CAMPS</a></li>
              <li class="sub-item"><a href="ipr.php">IPR SENSATION EVENTS</a></li>
              <li class="sub-item"><a href="credit.php">CREDIT COURSE</a></li>
              <li class="sub-item more">
                <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="design.php">DESIGN COLLOQUIUM</a></li>
                  <li class="more-item"><a href="business.php">BUSINESS IDEA</a></li>
                  <li class="more-item"><a href="food.php">FOOD PROCESSING</a></li>
                </ul>
              </li>
              
            </ul>
        </li>
          <li class="menu-item"><a href="partner.php">PARTNERS</a></li>
          <li class="menu-item">
          <a class="sub-btn" href="#" href="#">PORTFOLIO <i class="fas fa-angle-down"></i></a>
          <ul class="sub-menu">
              <li class="sub-item"><a href="research.php">RESEARCH</a></li>
              <li class="sub-item"><a href="products.php">TBI PRODUCTS</a></li>
              <li class="sub-item"><a href="startup.php">STARTUPS</a></li>
            </ul>
        </li>
        
          </li>
          <li class="menu-item"><a href="#">APPLY NOW</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
    <section>

    </section>

    <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });


    
    </script>

  </body>
</html>
