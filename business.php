<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.php")?>
    

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
        font-size: 20px;
        font-family: 'Arial', sans-serif;
    }

    .checklist {
    display: flex;
    align-items: center;
    text-align: center;
}

.checklist:before {
    content: "\2713";
    margin-right: 10px;
}
    </style>
</head>

<body>
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="section-title">
                <h1>BUSINESS IDEA</h1>
            </div>
            <div class="business">
                <div class="content-body">
                    <p class="checklist">Intensive one week training will be given in the operation and handling of the sophisticated equipments namely GAS CHROMATOGRAPH (GC), UV-VIS SPECTROPHOTOMETTER, HIGH PERFORMANCE THIN LAYER CHROMATOGRAPH (HPTLC) housed in the instrumentation lab. </p>
                    <p class="checklist">The training also involves class room teaching on the theory and various applications of the above equipments.</p>
                    <p class="checklist">Hands-on-training will be given to each participant by taking typical samples for analysis.</p>
                    <p class="checklist">Participants may also be trained by giving experimental problems to solve using these equipments.</p>
                    <p class="checklist">The application of this equipment in food processing, quality control, medicinal plant extract analysis, bio-fuel analysis, environmental pollution monitoring etc. will be demonstrated.</p>
                    <h5><b>The fee for training is Rs. 3,000/- (Nominal fee for accommodation and food will be charged extra)</b></h5>
                </div>
            </div>
        </div>
    </div>
    
               
    <?php include("footer.php")?>
</body>

</html>
