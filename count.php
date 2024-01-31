<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Counting Animation</title>
  <!-- FontAwesome Icons -->
  
  <!-- Stylesheet -->
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    .wrapper {
      position: absolute;
      width: 90%;
      max-width: 1200px;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 10px;
      justify-items: center;
      align-items: center;
    }
    .container {
      width: 100%;
      height: 30vmin;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      padding: 1em 0;
      position: relative;
      font-size: 14px;
      border-radius: 0.5em;
      background-color: #4272d7;
      border-bottom: 10px solid #0b42e8;
    }
    i {
      color: #fdfdfd;
      font-size: 2.5em;
      text-align: center;
    }
    span.num {
      color: #ffffff;
      display: grid;
      place-items: center;
      font-weight: 600;
      font-size: 3em;
    }
    span.text {
      color: #e0e0e0;
      font-size: 1em;
      text-align: center;
      padding: 0.7em 0;
      font-weight: 400;
      line-height: 0;
    }
    @media screen and (max-width: 768px) {
      .container {
        height: 22vmin;
      }
      span.num {
        font-size: 2.5em;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <i class="fas fa-utensils"></i>
      <span class="num" data-val="400">0</span>
      <span class="text">Meals Delivered</span>
    </div>
    <div class="container">
      <i class="fas fa-smile-beam"></i>
      <span class="num" data-val="340">0</span>
      <span class="text">Happy Customers</span>
    </div>
    <div class="container">
      <i class="fas fa-list"></i>
      <span class="num" data-val="225">0</span>
      <span class="text">Menu Items</span>
    </div>
    <div class="container">
      <i class="fas fa-star"></i>
      <span class="num" data-val="280">0</span>
      <span class="text">Five Stars</span>
    </div>
    <div class="container">
      <i class="fas fa-shopping-cart"></i>
      <span class="num" data-val="1000">0</span>
      <span class="text">Revenue</span>
    </div>
    <div class="container">
      <i class="fas fa-users"></i>
      <span class="num" data-val="650">0</span>
      <span class="text">Clients</span>
    </div>
    <div class="container">
      <i class="fas fa-comments"></i>
      <span class="num" data-val="450">0</span>
      <span class="text">Reviews</span>
    </div>
    <div class="container">
      <i class="fas fa-trophy"></i>
      <span class="num" data-val="550">0</span>
      <span class="text">Awards</span>
    </div>
  </div>
  <!-- FontAwesome Icons -->
  
  <!-- Script -->

</body>
</html>
