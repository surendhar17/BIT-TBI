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
    </style>
</head>

<body>

        <div class="contain" style="padding-top: 30px;margin-bottom: 50px;">
            <div class="section-title">
                <h1 style="margin-bottom: 35px;">FOOD PROCESSING</h1>
            </div>
            <div class="business">
                <h6 class="content-heading">PROJECT</h6>
                <div class="content-body">
                    <p>M.Sc., M. Tech. and B.Tech. Students projects will be guided in the area of biotechnology, chemistry, food processing, plant derived medicines, drug delivery, biopolymers etc. The project fee is Rs. 10,000/- per project.</p>
                </div>
                <h6 class="content-heading">BIO ANALYSERS</h6>
                <div class="content-body">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- GC</h5>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- HPTLC</h5>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- UV-VIS SPECT</h5>
                    <br>
                </div>
                <h6 class="content-heading">INTERNSHIP</h6>
                <div class="content-body" >
                    <p>Students summer internship in the area of instrumentation, biotechnology, food processing etc. are also encouraged. The period of internship may be 1 to 2 weeks. The charge will be Rs. 3,000/-.</p>
                </div>
            </div>
        </div>
    </div>
    
               
    <?php include("footer.php")?>
</body>

</html>
