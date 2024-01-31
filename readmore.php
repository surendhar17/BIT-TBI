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

        <div class="contain" style="padding-top: 30px;margin-bottom: 50px;">
            <div class="section-title">
                <h1 style="margin-bottom: 35px;">ENTREPRENEURSHIP AWARENESS CAMP (EAC)</h1>
            </div>
            <div class="business">
                <h6 class="content-heading">About EAC</h6>
                <div class="content-body">
                    <p>With a view to expose students as well as faculty members offering degree/diploma courses in S&T/Engg., to entrepreneurship as an alternative career option. Entrepreneurship Awareness Camps (EACs) are conducted by nodal agencies in each State/Union Territory of the country. The implementing agency is usually either an educational institution or a professional body specialized in entrepreneurship development.</p>
                    <p>Entrepreneurship Awareness Camp for Students provides a platform to build-up their entrepreneurial skills and encourage them through various approaches for Entrepreneurship to become successful entrepreneurs from various fields.</p>
                    <p>The Camp encompassing eight sessions are distributed over a period of three days. The sessions cover topics such as</p>
                    <p class="checklist">General Concepts on Entrepreneurship</p>
                    <p class="checklist">Present Scenario of Entrepreneurship</p>
                    <p class="checklist">Creativity and Business</p>
                    <p class="checklist">Identification of Opportunities for Entrepreneur</p>
                    <p class="checklist">Commercial and Marketing Aspects of SSI unit</p>
                    <p class="checklist">Policies under Micro, Small and Medium Enterprises (MSME)</p>
                    <p class="checklist">Technology and Financial Aspects of SSI unit</p>
                    <p>This Camp will culminate with creating awareness about career option through self-employment and inculcating entrepreneurial activities among the students.</p>
                </div>
                
            </div>
        </div>
    </div>
    
               
    <?php include("footer.php")?>
</body>

</html>
