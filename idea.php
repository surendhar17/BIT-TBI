<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.php")?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .section-title {
            margin-top: 100px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        p {
            animation: fadeIn 1s ease-in-out;
        }

        @media (max-width: 405px) {
            .section-title {
                margin-top: 120px;
            }
        }

        @media (max-width: 366px) {
            .section-title {
                margin-top: 150px;
            }
        }

        @media (max-width: 304px) {
            .section-title {
                margin-top: 170px;
            }
        }

        @media (max-width: 991px) {
            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .content-body {
                margin-bottom: 20px;
            }

            .business{
                padding-top: 50px;
            }
        }

        .row-2 {
            margin-top: 15px;
        }

        .section-title{
            text-align: center;
        }

        .section-title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: 2px;
            position: relative;
            padding-bottom: 10px;
            color: #4272d7;
        }

        .section-title h1:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 3px;
            width: 100px;
            content: "";
            background: #adadad;
        }

        .content-heading {
            font-size: 18px;
            color: #ba0505;
            display: flex;
            align-items: center;
        }

        

        .content-body {
        width: 100%;
        box-sizing: border-box;
        }

    .content-body p {
        color: #000000;
        font-size: 17px;
        text-align: justify;
        margin-bottom: 25px;
        
    }

    .business{
        margin-top: 30px;
    }

    .content-body h5{
        color: #000000;
        font-size: 17px;
        font-family: 'Arial', sans-serif;
    }

    .contain{
        margin-right: 100px;
        margin-left: 100px;
    }
  
    .content-heading{
        letter-spacing: 1.5px;
    }

    .content-body{
        letter-spacing: 1px;
    }

    @media (max-width:800px){
        .contain{
        margin-right: 50px;
        margin-left: 50px;  
    }
}

    @media (max-width:500px){
        .contain{
        margin-right: 20px;
        margin-left: 20px;  
        margin-bottom: 30px;
    }
}

@media (max-width:411px){
        .section-title{
            padding-top: 40px;
        }
}

body{
    background-color: #5c008a;  
    background-image: url("https://www.transparenttextures.com/patterns/diagonales-decalees.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
}

.content-body{
    padding-top: 10px;
}

.content-body2 img, .content-body3 img, .content-body4 img{
  width: 50%;
  height: 50%;
}

.content-body4{
  margin-top: 25px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content-body2, .content-body3{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

@media (max-width:1150px){
  .content-body2 img, .content-body3 img, .content-body4 img{
  width: 70%;
  height: 70%;
}
}

@media (max-width:680px){
  .content-body2 img, .content-body3 img, .content-body4 img{
  width: 80%;
  height: 80%;
}
}

@media (max-width:450px){
  .content-body2 img, .content-body3 img, .content-body4 img{
  width: 90%;
  height: 90%;
}
}


    </style>
</head>

<body>
        <div class="contain" style="padding-top: 30px;margin-bottom: 50px;">
            <div class="section-title">
                <h1 style="margin-bottom: 35px;">IDEATION EVENTS</h1>
            </div>
            <div class="business">
                <div class="content-body">
                    <p>The realm of small business is getting changed rapidly these days. Entrepreneurs are becoming far more diverse in terms of age, origin, gender, etc. Such shift in small business ownership has been bringing in new opportunity and the same is influencing the economy positively.</p>
                    <p>Multitudes of inspirational & influential entrepreneurs from diverse fields have created a positive impression on the younger generation as entrepreneurship is a key facet of the nation's economy and crucial driver for employment & economic growth. Entrepreneurs through their creativity and dogmatic approach work on and for innovations and thus help build a society that is richer, socially adept & technically advanced.</p>
                    <p>Being the initial formal stage (of venture creation activities) dealing with nascent innovations and addressing the myriad of pain-points of idea commercialization, TBIs assume significant and justifiable role in the nurturing of innovation development of entrepreneurship.</p>
                </div>
                <h6 class="content-heading">SELECTION OF INCUBATEES</h6>
                <div class="content-body2">
                    <img src="./assets/img/id1.png" alt="">
                </div>
                <h6 class="content-heading" style="margin-top: 20px;">ALUMNI, FINAL YEAR STUDENTS, GENERAL PUBLIC CAN TAKE PART</h6>
                <div class="content-body" >
                    <p>Public and private funds are available in plenty for entrepreneurship development. Wherever ideas can be translated to prototypes & intern launch to customers, such students’ projects or viable and scalable ideas from alumni, students from other institutions and the general public are invariably taken up seriously for start-up creation.</p>
                    <div class="images">
                      <div class="content-body3">
                        <img src="./assets/img/id2.png" alt="">
                      </div>
                      <div class="content-body4">
                        <img src="./assets/img/id3.png" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>               
    <?php include("footer.php")?>
</body>

</html>
