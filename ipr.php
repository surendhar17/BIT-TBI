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
                <h1 style="margin-bottom: 35px;">TBI - IPR SERVICES</h1>
            </div>
            <div class="business">
                <div class="content-body">
                <p>(1) Patents or trademarks or copyrights or design protection documentation</p>
                <p>(2) Conducting of searches & opinion on patentability</p>
                <p>(3) Provisional & full patenting of patentable ideas or innovations</p>
                <p>(4) Networking towards defending challenges to the validity of Indian patents</p>
                <p>(5) Registration of Trade Marks after searching & opinion.</p>
                <p>(6) Copy rights registration</p>
                <p>(7) Design registration after search & opinion</p>
                <p>(8) Pre-filing (patentability of invention), screening, application drafting, non-disclosure agreements, India specific searchers & patent maintenance claim chart preparation.</p>
                </div>
                
                <h6 class="content-heading" style="padding-top: 25px;">TBI CAN FURTHER CONTRIBUTE IN TERMS OF:</h6>
                <div class="content-body" >
                  <p>(1) One day workshop arranged on IPR sensitization & patent drafting for students.</p>
                  <p>(2) For faculty, the same is organized in collaboration with IPR specialists</p>
                </div>
            </div>
        </div>
    </div>
    
               
    <?php include("footer.php")?>
</body>

</html>
