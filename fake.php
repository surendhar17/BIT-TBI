<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("header.php")?>
</head>
<link rel="stylesheet" href="assets/css/mission.css">

<style>
.section-title{
    margin-top: 100px;
}

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    td {
        animation: fadeIn 1s ease-in-out;
    }

    @media (max-width:405px){
        .section-title{
            margin-top: 120px;
        }
    }

    @media (max-width:366px){
        .section-title{
            margin-top: 150px;
        }
    }

    @media (max-width:304px){
        .section-title{
            margin-top: 170px;
        }
    }

    @media (max-width: 991px) {
    .row {
        display: flex;
        flex-wrap: wrap; /* Ensure items wrap to the next line */
        justify-content: center; /* Center the items horizontally */
        gap: 20px; /* Add a gap between the items */
    }
}

/* Optional: Adjust margin for better spacing */
@media (max-width: 767px) {
    .content-body {
        margin-bottom: 20px;
    }
}


.row-2{
    margin-top: 15px;
}


</style>

<body>
<div class="bemax-area gray-bg pt-65 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h1>Our Missions And Visions</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="content-heading">Missions</h6>
                    <div class="content-body">
                        <table>
                            <tr>
                                <td>BIT-TBI is a joint venture of BIT and Dept. of Science and Technology, Govt. of India.
                                    It is a platform to promote knowledge driven and technology intensive enterprises.
                                    Technical ideas which are innovative have been identified from among students,
                                    general public &amp; industry. Such selected ideas will be assisted techno-commercially
                                    to arrive at viable products or services leading to the creation of start -ups. We have
                                    full-fledged laboratory &amp; work station to mould your innovative ideas into action plans
                                    in the field of food technology, biotechnology, agro products &amp; other engineering
                                    domains. Your visit to our center at BIT will be a sort of inspiration &amp; enrichment to
                                    your techno- commercial pursuit.</td>
                                                                </tr>
                            
                        </table>
                    </div>
                </div>
                
                   
                
                
                    <div class="col-lg-6">
                        <h6 class="content-heading">Visions</h6>
                        <div class="content-body">
                            <table>
                                <tr>
                                    <td>To create the right environment for innovations and entrepreneurs to succeed.
                                        To facilitate the development of high technology industries and contribute
                                        towards Nation’s growth</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    
            </div>
            <div class="row">
            <div class="col-lg-6  row-2">
                        <h6 class="content-heading">OBJECTIVE</h6>
                        <div class="content-body">
                            <table>
                                <tr>
                                    <td>Creation of technology-based new enterprises.
                                        Creating value-added jobs and services.
                                        Fostering the entrepreneurial spirit among students.
                                        Speedy commercialization of R&D outputs.
                                        Developing new tools of technology transfer.
                                        Creating technological awareness and consciousness in existing SMEs.
                                        Extending Assistance to existing SMEs by way of specialized services. 
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php")?>
</body>
</html>



































































.section-title h1 {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 2px;
    position: relative;
    padding-bottom: 10px;
    color: #4272d7;
}

.content-heading {
    font-size: 18px;
    color: #ba0505;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}

.content-heading i {
    font-size: 30px;
    margin-right: 15px;
}

.content-body{
    width: 100%;
}

.content-body td {
    color: #000000;
    font-size: 17px;
    text-align: justify;
    margin-bottom: 25px;
    
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

td {
    animation: fadeIn 1s ease-in-out;
}
.section-title h1:after {
    position: absolute;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    height: 3px;
    width: 100px;
    content:
    "";
    background: #adadad;
}
.item-icon i {
    width: 50px;
    height: 50px;
    background: #4272d7;
    color: #fff;
    font-size: 25px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    border: 1px solid #4272d7;
    -webkit-transition: .3s;
    transition: .3s;
}

.item-icon i:hover {
    background: transparent;
    color: #4272d7;
}
.item-content {
    padding-left: 20px;
    margin-top: -4px;
}

.item-content h6 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}
.single-bemax-item {
    margin-bottom: 40px;
}
.container1 {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    text-align: center; /* Center align the content */
    margin: 20px;
  }

  .container1 img {
    margin-right: 0;
}
.content1 {
    max-width: 800px; /* Set a max-width for the content */
    margin: 0 auto; /* Center the content horizontally */
    padding: 20px; /* Add padding to the content */
    box-sizing: border-box; /* Include padding in the width */
    background-color: #f5f5f5; /* Add a background color */
}
.content1 {
    border: 1px solid #ddd;
    border-radius: 10px;
}
    .container1 p {
        text-align: justify; /* Adjust as needed */
    }
  .center {
    display: block;
    margin-left: 190px;
    margin-right: auto;
    width: 10%;
  }
  .container1 {
    text-align: center;
    margin: 20px;
  }
  @media (max-width: 600px) {
    .container1 {
        flex-direction: column;
        align-items: center; /* Center align the content in smaller screens */
    }

    .image {
        margin-bottom: 10px;
    }
}

