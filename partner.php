<?php include("header.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>NETWORKING PARTNERS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400" />
    <link rel="stylesheet" href="./assets/css/partner.css" />
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #5c008a;
            background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
    }
       

        .partners-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .partners-section:hover{
            transform: scale(1.04);
            transition: 0.5s;
        }

        .partners-section {
            
            background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
        }

        .partners-section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .partners-section .content {
            max-width: 500px;
            text-align: left;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
        }

        


        .partners-section h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .partners-section p {
            color: #666;
        }

        @media (max-width: 768px) {
            .partners-section {
                margin-top: 40px;
                margin-bottom: 40px;
                flex-direction: column;
                text-align: center;
                gap: 0px;
            }

            .partners-section img{
                height:250px;
            }

            .partners-section img,
            .partners-section .content {
                width: 100%;
            }
        }

        @media (max-width:580px){
            .container{
                padding-top: 20px;
            }
        }

        @media (max-width:404px){
            .container{
                padding-top: 60px;
            }
        }

        @media (max-width:366px){
            .container{
                padding-top: 80px;
            }
        }

        @media (max-width:303px){
            .container{
                padding-top: 100px;
            }
        }


        @media (max-width:991px){
            .partners-section{
                gap: 30px;
            }
        }
        .feature-heading{
            width: 100%;
            text-align: center;
            padding-top: 20px;
        }

        .specified-images{
            height: 300px;
        }

        @media (max-width:768px){
            .media img{
                height: 150px;
                width: 150px;
            }

            .media{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
        }
    </style>
<body>
    <div class="icon-box-area pt-70 pb-70" id="feature" style="
    padding-left: 0px;
    padding-right: 0px;
">
        <div class="container" style="margin-top: 100px;padding-left: 0px;padding-right: 0px;">
            <div>
            <h2 class="feature-heading">NETWORKING PARTNERS</h2>
            </div>
            <div class="partners-section">
                <img class='specified-images' src="./assets/img/pr15.png" alt="Partner 1">
                <div class="content">
                    <h2>SIDBI</h2>
                    <p>SIDBI – Small Industries Development Bank of India To empower the Micro, Small and Medium Enterprises (MSME) sector with a view to contributing to the process of economic growth, employment generation and balanced regional development.</p>
                </div>
            </div>

            <div class="partners-section">
                <div class="content">
                    <h2 style="font-size: 18px;">ENTREPRENEURSHIP DEVELOPMENT INSTITUTE, AHMEDABAD</h2>
                    <p>The Entrepreneurship Development Institute of India (EDI), an autonomous body and not-for-profit institution was set up in 1983. As an acknowledged national resource institution, EDI is committed to entrepreneurship education, training and research. The institute strives to provide innovative training techniques, competent faculty support, consultancy and quality teaching & training material.</p>
                </div>
                <img src="./assets/img/pr16.jpeg" alt="Partner 2">
            </div>
            <div class="partners-section">
                <img class='specified-images' src="./assets/img/pr3.png" alt="Partner 1">
                <div class="content">
                    <h2>BANNARI AMMAN SUGARS Ltd.</h2>
                    <p>The first Sugar unit near Sathyamangalam of Erode District, Tamil Nadu State, started its commercial production in the year 1986 with an initial capacity of 1250 tonnes of Cane crush per day and expanded to 2500 tonnes in 1998. The crushing capacity is now expanded to 4000 TCD. The unit has many credits and firsts in the sugar industry of the country.</p>
                </div>
            </div>

            <div class="partners-section">
                <div class="content" >
                    <h2 style="font-size: 20px;">BANNARI AMMAN FLOUR MILLS Ltd.</h2>
                    <p>Wheat Flour mill with grinding capacity of 132 Metric Tons per day produce pure, wholesome and nutritious wheat products MAIDA, SOOJI, ATTA (Wheat Flour) and by product Wheat Bran.</p>
                </div>
                <img class="specified-images" src="./assets/img/pr3.png" alt="Partner 2">
            </div>
            <div class="partners-section">
                <img src="./assets/img/pr20.png" alt="Partner 1" style="height: 200px; width:200px">
                <div class="content">
                    <h2>GOVERNMENT AGENCIES</h2>
                    <p>Imparting greater vitality and growth impetus to the Micro, Small and Medium Enterprises (MSME) in terms of output, employment and exports and instilling a competitive culture based on heightened technology awareness.</p>
                </div>
            </div>

            <div class="partners-section">
                <div class="content">
                    <h2>DISTRICT INDUSTRIES CENTER, ERODE</h2>
                    <p>The District Industries Centre is functioning mainly with the aim of promoting, facilitating and developing industrial growth in the territory of Erode.</p>
                </div>
                <img src="./assets/img/pr21.jpg" alt="Partner 2">
            </div>
            <div class="partners-section">
                <img src="./assets/img/pr17.jpg" alt="Partner 1">
                <div class="content">
                    <h2>SMALL INDUSTRIES DEVELOPMENT CORPORATION LIMITED (SIDCO), ERODE</h2>
                    <p>Small Industries Development Corporation Limited (SIDCO) an undertaking of the Government of Tamilnadu, started in 1971 has been working for the development of Small Scale Industries in Tamilnadu.</p>
                </div>
            </div>

            <div class="partners-section">
                <div class="content">
                    <h2>CODISSIA</h2>
                    <p>Coimbatore District Small Industries Association is an Indian trade  organization based in Coimbatore, Tamil Nadu, affiliated to Tamil Nadu Small and Tiny Industries Association & the largest district association of small industries in India  promotes Entrepreneurial Development & Self Employment opportunity.</p>
                </div>
                <img src="./assets/img/pr5.png" alt="Partner 2">
            </div>
            <div class="partners-section">
                <img src="./assets/img/pr6.jpeg" alt="Partner 1">
                <div class="content">
                    <h2>EEDISSIA</h2>
                    <p>Erode District Small Industries Association constituted for the development of medium, small and micro industries and dedicated for the development of new Entrepreneurs and Industries in erode district and serves as development oriented association.</p>
                </div>
            </div>

            <div class="partners-section">
                <div class="content">
                    <h2>EDII-TN </h2>
                    <p>Established in 2001, the Entrepreneurship Development and Innovation Institute (EDII), Chennai is an apex organization in the field of entrepreneurship education and self-employment promotion in the state of Tamil Nadu , constituted by the Government of Tamil Nadu.</p>
                </div>
                <img src="./assets/img/pr18.png" alt="Partner 2" style="height: 200px;">
            </div>

            
            <!-- Additional Section -->
           
            
        </div>
    </div>
</body>

<?php include("footer.php") ?>