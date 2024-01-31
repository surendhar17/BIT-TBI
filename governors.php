<?php include("header.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Our Team Section</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
  </head>
  <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body {
    background-color: #f5f5f5;
  }
  
  .row {
    display: flex;
    flex-wrap: wrap;
    padding: 2em 1em;
    text-align: center;
  }
  .column {
    width: 100%;
    padding: 0.5em 0;
  }
  h1 {
    width: 100%;
    text-align: center;
    font-size: 3.5em;
    color: #1f003b;
  }

  
  .card {
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    padding: 2.5em 2em;
    border-radius: 0.6em;
    color: #1f003b;
    cursor: pointer;
    transition: 0.3s;
    background-color: #ffffff;
  }
  .card .img-container {
    width: 8em;
    height: 8em;
    background-color: #a993ff;
    padding: 0.5em;
    border-radius: 50%;
    margin: 0 auto 2em auto;
  }
  .card img {
    width: 100%;
    border-radius: 50%;
  }
  .card h3 {
    font-weight: 500;
  }
  .card p {
    font-weight: 300;
    text-transform: uppercase;
    margin: 0.5em 0 2em 0;
    letter-spacing: 2px;
  }
  .icons {
    width: 50%;
    min-width: 180px;
    margin: auto;
    display: flex;
    justify-content: space-between;
  }
  .card a {
    text-decoration: none;
    color: inherit;
    font-size: 1.4em;
  }
  .card:hover {
    background-color: transparent;
    background-image: linear-gradient(180deg, #f8499d 0%,#6a43c5  100%);
    color: #ffffff;
  }
  .card:hover .img-container {
    transform: scale(1.15);
  }

  @media screen and (min-width: 992px) {
    section {
      padding: 1em;
    }
    .card {
      padding: 5em 1em;
    }
    .column {
      flex: 0 0 33.33%;
      max-width: 33.33%;
      padding: 0 1em;
    }
  }

  section{
    margin-top: 50px;
  }

  .card{
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 40px;
    padding-bottom: 40px;
  }

  @media (max-width: 760px) {
    section{
    padding-right: 40px;
    padding-left: 40px;
    }
  }

  @media (max-width:460px){
    section{
    padding-left: 20px;
    padding-right: 20px;
    }
  }

  @media (max-width:425px){
    section h1{
    margin-top: 20px;
    }
  }

  @media (max-width:420px){
    section h1{
    margin-top: 40px;
    }
  }

  @media (max-width:310px){
    section h1{
    margin-top: 60px;
    }
  }

  @media (max-width:370px){
    section{
      padding-left: 5px;
      padding-right: 5px;
    }
  }
 
  </style>
  <body>
    <section>
      <div class="row" style="padding-top: 15px; padding-bottom: 15px;">
        <h1>Board of Governors</h1>
      </div>
      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-1.png" />
            </div>
            <h3>Dr S. V. Balasubramaniam</h3>
            <p>Chairman - Bannari Amman Institute of Technology</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-2.png" />
            </div>
            <h3>Dr M. P. Vijayakumar</h3>
            <p>Secretary - BIT TBI</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-3.png" />
            </div>
            <h3>Sri B. Saravanan</h3>
            <p>Member - BIT TBI</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-1.png" />
            </div>
            <h3>Sri C. Palaniswamy</h3>
            <p>Member</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-2.png" />
            </div>
            <h3>Dr C. Palanisamy</h3>
            <p>Member</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="profile-img-3.png" />
            </div>
            <h3>Sri C. Radhakrishnan</h3>
            <p>Member</p>
            <div class="icons">
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<?php include("footer.php")?>