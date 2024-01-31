<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("header.php")?>
</head>
<link rel="stylesheet" href="assets/css/sel.css">

<style>
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    p {
        animation: fadeIn 1s ease-in-out;
    }
    
    .image-container {
        display: flex;
        align-items: baseline;
        max-inline-size: 100%;
        block-size: auto;
    }
    
    .image-container img {
        max-width: 100%;
        height: auto;
        margin-left: 15px;
    }
    

    .section-title{
            text-align: center;
            margin-top: 100px;
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

    @media (max-width:405px){
        .section-title{
            margin-top: 120px;
        }
    }

    @media (max-width:366px){
        .section-title{
            margin-top: 160px;
        }
    }

    @media (max-width:304px){
        .section-title{
            margin-top: 180px;
        }
    }

    body{
        
        background-image: url("https://www.transparenttextures.com/patterns/diagonales-decalees.png");
    }
</style>

<body>
<div class="bemax-area gray-bg pt-65 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h1>Selection Process</h1>
                </div>
            </div>
        </div>
        <div style="float: right;margin-top: 60px;margin-bottom: -100%;margin-right: 10%;margin-left: 95%; ">
    <!-- <div><img src="assets/img/sel2.jpeg" class="sel"/></div> -->
</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-66">
                    <div class="content-body">
                        <div class="image-container">
                            <p class="checklist">Receipt of Applications through Website and Media advertisement.</p>
                            <!-- <img src="../assets/img/b1.png" alt="Overall Image"> -->
                        </div>
                        <div class="image-container">
                            <p class="checklist">Evaluating the Incubatees through informal interviews and discussion about the proposed project.</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Identifying the significance of their proposed Projects.</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Homework done by the incubatee for the proposed project.</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Creating technological awareness and consciousness in existing SMEs</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Economic and Technical feasibilities of the proposed projects.</p>
                        </div>
                        <div class="image-container">
                            <p class="checklist">Marketability of the product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php")?>
</body>
</html>
