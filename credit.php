<?php include("header.php") ?>
<html>

<head>
    <title>CREDIT COURSES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="assets/css/credit.css">
<link rel="stylesheet" href="assets/css/responsive.css">

<body class="back">

<style>
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
<div class="contain" style="padding-top: 30px;margin-bottom: 50px;">
            <div class="section-title">
                <h1 style="margin-bottom: 35px;">TBI - CREDIT COURSE</h1>
            </div>
            <div class="business">
                <h6 class="content-heading">PROJECT</h6>
                <div class="content-body">
                    <p style="color: red;">One Credit Courses (OCC) will be offered for the initial 3 batches (1st year, 2nd year & 3rd
                    year) of B.E/B.Tech. Courses as specified below.</p>
                    <p>1. New age innovation & Entrepreneurship – First years</p>
                    <p>2. Disruptive innovation based startup activities – Second years</p>
                    <p>3. Indian vision programmes (Start-up India, Make in India, Imprint India, Smart cities etc)
                    - Third years</p>
                    <p style="color: red;">For final year batch of BE/ B.Tech courses beyond regular curriculum assignment will be
                    provided (as stated below) with</p>
                    <p>4. Impact programme for translating novel design ideas into investment ready MVPs (IMPACTPLUS) – Final years</p>
                </div>
                
            </div>
        </div>
    </div>
    
        <div class="table"  style="overflow-x:auto;">

            <table>
                <tr>
                    <th class="one">No</th>
                    <th class="one">Batch</th>
                    <th class="one">Course</th>
                    <th class="one">Intake</th>
                    <th class="one">OCC scheduling</th>
                </tr>
                <tr>
                    <td class="onee">1</td>
                    <td class="onee">1st Year</td>
                    <td class="onee">B.E./ B.Tech</td>
                    <td class="onee">40</td>
                    <td class="onee">Even Semester</td>
                </tr>
                <tr>
                    <td class="two">2</td>
                    <td class="two">2nd Year</td>
                    <td class="two">B.E./ B.Tech.</td>
                    <td class="two">40</td>
                    <td class="two">Odd Semester</td>
                </tr>
                <tr>
                    <td class="onee">3</td>
                    <td class="onee">3rd Year</td>
                    <td class="onee">B.E./ B.Tech.</td>
                    <td class="onee">40</td>
                    <td class="onee">Odd Semester</td>
                </tr>
                <tr>
                    <td class="two">4</td>
                    <td class="two">4th Year</td>
                    <td class="two">B.E./ B.Tech.</td>
                    <td class="two">15</td>
                    <td class="two">Even Semester</td>
                </tr>
            </table>
        </div>
</body>
</body>

</html>

<?php include("footer.php") ?>