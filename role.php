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


.contain img{
  width: 50%;
  height: 50%;
  border-radius: 5px;
}

.image{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-bottom: 25px;
}


@media (max-width:991px){

    .business{
        
    padding-top: 0px;

    }

    .image{
        padding-top: 40px;
    }

    .image img{
        width: 70%;
        height: 70%;
    }
}

@media (max-width:820px){
.image img{
    width: 90%;
    height: 90%;
}
}


    </style>
</head>

<body>

        <div class="contain" style="padding-top: 30px;margin-bottom: 50px;">
        
            <div class="section-title">
                <h1 style="margin-bottom: 35px;">ROLE OF INCUBATORS</h1>
            </div>
            <div class="image">
              <img src="./assets/img/r1.png" alt="">
            </div>
            <div class="business">
                <h6 class="content-heading">Idea Scouting</h6>
                <div class="content-body">
                    <p>so that a number of people in the region, campus, and whoever approaches TBI with or for ideas get opportunity for working on technical ideas nurtured by them</p>
                </div>
                
                <h6 class="content-heading">Idea Screening</h6>
                <div class="content-body" >
                    <p>Of all the ideas reached TBI, only viable, unique and novel ideas are being picked up for further processing (commercialization possibility & aptitude of the innovator also verified during this screening). Social impact ideas are also considered positively.</p>
                </div>

                <h6 class="content-heading">Idea Implementing</h6>
                <div class="content-body" >
                    <p>Technical supports, consultancy etc done to ensure idea implementation started working for the tenants. Hardware/ Machinery / Software are being provided wherever there is provision (based on the focal area of the incubation centre) to the tenant incubatees so that they started making the working models. Business plan clarity brought in. IPR process helped.</p>
                </div>

                <h6 class="content-heading">Prototyping</h6>
                <div class="content-body" >
                    <p>In the next phase prospective start-ups realize prototypes for their idea utilizing facilities & networking contacts they could avail with (and even beyond) TBI incubation.</p>
                </div>

                <h6 class="content-heading">Validation Stage</h6>
                <div class="content-body" >
                    <p>Prototype validation done with TBI help (testing, certifications, improvement possibilities etc probed for the model) Networking, technical facilitation could be given by TBI through its contacts. Ideal stage for early stage business consultancy via TBI.</p>
                </div>

                <h6 class="content-heading">Seed fund</h6>
                <div class="content-body" >
                    <p>Wherever there is announced schemes (domain specific) suiting idea development assistance is available, incubatees are helped with grants (from govt; a few lakh / per scrutinized idea as specified in the grant regulations). In all these cases TBI will be supervising the project implementations and report to ministries the progress & utilization of funds. Angel funds could be explored of incubatee is comfortable and/ or if the special scheme or campus venture sort of schemes spearheaded by them are very attractive and friendly.</p>
                </div>

                <h6 class="content-heading">Networking, mentoring etc</h6>
                <div class="content-body" >
                    <p>TBIs will be having resourceful people who can help the incubatees in tackling the early stage growth associated pain points. These experts help incubatees based on requirements in points mentioned above (from 1 to 6). Graduated successful incubatees also help newcomers to TBI.</p>
                </div>

                <h6 class="content-heading">Building an innovation ecosystem</h6>
                <div class="content-body" >
                    <p>An innovation pipeline has to be established through TBI efforts so that there is always ideas flowing in automatically and lot of people around who are sensitized to idea commercialization and innovation potentials.</p>
                </div>

                <h6 class="content-heading">Training</h6>
                <div class="content-body" >
                    <p>Public and students are trained on entrepreneurship principles especially as a career option. Skill imparting sessions, faculty development sessions and other awareness sessions are being conducted through TBI for empowering various stakeholders.</p>
                </div>

                <h6 class="content-heading">Beyond Prototype</h6>
                <div class="content-body" >
                    <p>In the next stage of prototype to product, tenant companies can be helped by TBI in the form of (a) technical inputs wherever required, (b) facilitation for improvements through networking, (c) additional testing through networking (d) mentors to help</p>
                </div>

                <h6 class="content-heading">Product realization</h6>
                <div class="content-body" >
                    <p>TBI intends to take tenets through various special platforms at this stage (i.e. after prototype) like fitting competitions, expos, demo days, boot camp, accelerator programmes, pitch fests, award platforms etc so that they come to limelight. People should appreciate the efforts. With such recognition, incubatee companies can opt for secondary stage funds. Without rewards getting funds will be pretty difficult as reputation counts here. Awards or recognition indicate the judgment by a panel of experts. Basing on these recognition, lenders of secondary funds realize the niche customers for that specific product and they provide funds.</p>
                </div>

                <h6 class="content-heading">Test marketing</h6>
                <div class="content-body" >
                    <p>Incubatees taken to expos, dealer interactions, niche customer feedback & interpretations etc. TBI supports company registration.</p>
                </div>

                <h6 class="content-heading">Branding and Publicity</h6>
                <div class="content-body" >
                    <p>Once product is ready, TBI can guide incubatees for go-to-market funding possibility provided the incubatees are having merits in their B-plan and during their growth and transformation as a company owning a product now, they have achieved a few recognition. Market strategy can be guided & fine-tuned. TBI helps incubatee tenants to register as start-up, in regulatory certifications, to get to export readiness etc.</p>
                </div>

                <h6 class="content-heading">Basic Infrastructure</h6>
                <div class="content-body" >
                    <p>During the early phase of company, TBI can be used by tenants as their office. Space, furniture, network facility etc are being given to the incubatees during the period of incubatee working through points mentioned above (from 1 to 13).</p>
                </div>

                <h6 class="content-heading">Scale up and Graduation</h6>
                <div class="content-body" >
                    <p>The incubatees at this stage think of reaching out maximum customers and TBI can facilitate through networking. Final stage business consultancy could be provided so that the start-up will be in the sustained business club with its characteristic growth & expansion plans. Tenants will be on their own. They can, in turn, mentor the new crop of innovators up on request from the TBI as per their availability for the same. Firms can opt for VC connectivity, equity listing etc.</p>
                </div>

                <h6 class="content-heading">Societal Commitment</h6>
                <div class="content-body" >
                    <p>TBIs have to continuously and actively partake in knowledge creation, value creation & wealth creation leading to more sustained business thereby more employment, contribution to GDP and nation building</p>
                </div>
            </div>
        </div>
    </div>
    
               
    <?php include("footer.php")?>
</body>

</html>
