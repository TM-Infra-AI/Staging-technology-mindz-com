<?php
/*
Template Name: Customer Interaction
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Interaction</title>
    <link rel="icon" type="image/x-icon" href="https://technologymindz.com/wp-content/uploads/2024/02/tm-favicon-32x32-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
            color: #000;
        }
        ol,ul{
            list-style: none;
        }
        h1,h2,h3,h4,h5,h6, p{
            margin: 0px;
            padding: 0px;
        }
        .row{
            --bs-gutter-x: 0rem !important;
        }
        .header{    
            padding: 20px;
            border-bottom: 2px solid #000;
            background-color: #fff !important;
        }
        .logo{
            width: 140px;
            float: left;
        }
        .logo img{
            width: 140px;
        }
        .tab-pagination{
            background-color: #78d5ff;
            padding: 20px;
        }
        .paginationheading h2{
            color: #010101;
            font-size: 15px;
            letter-spacing: 1px;
            margin-bottom: 0 !important;
            padding-top: 7px;
        }
        
        .pagination{
            float: right;
            display: block !important;
        }
        .item-pagination{
            width: 100%;
        }
        .pagination li{
            float: left;
            font-size: 1rem;
            font-weight: 600;
            color: #010101;
            display: block;
            width: 30px;
            height: 30px;
            transition: all .2s ease-in-out;
            border-radius: 18px;
            text-align: center;
            cursor: pointer;
            padding-top: 2px;
            margin-right: 10px;
        }
        .pagination li.active{
            background-color: #f7f3f0;
        }
        .item-pagination{
            width: 100%;
            text-align: center  ;
        }
        
        body{
            font-family: 'Poppins', sans-serif;
            background-color: #e9f7ff  !important;
        }
        
        
        .callout-module {
            max-width: 280px;
            position: relative;
            float: left;
            z-index: 10;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
            background-color: #d9e1e2;
        }
        .callout-module.left:before {
            top: 37%;
            left: -59px;
            border-right: 30px solid #c5b7be;
        }
        .callout-module:before {
            content: "";
            border: 30px solid transparent;
            position: absolute;
            border-color: transparent;
        }
        .callout-module .content {
            background-color: #c5b7be;
            padding: 0 20px 20px 20px;
            display: block;
            float: left;
        }
        .callout-module .content .headline {
            color: #024;
            font-size: 22px;
            line-height: 30px;
            margin: 20px 0 0 0;
            text-align: left;
        }
        .callout-module .content .copy {
            color: #024;
            font-size: 15px;
            line-height: 30px;
            padding: 20px 0;
            margin: 0;
        }
        .callout-module .content button {
            font-size: 14px;
            color: #fff;
            text-transform: uppercase;
            height: 38px;
            border-radius: 3px;
            border: 0;
            padding: 8px 34px;
            cursor: pointer;
            background-color: #0060ad;
        }
        .callout-module.right:before {
            top: 37%;
            right: -59px;
            border-left: 30px solid #d9e1e2;
        }
        .callout-module.lefttop:before {
            top: 7%;
            left: -59px;
            border-right: 30px solid #c5b7be;
        }
        .ctatooltip {
            background-color: #9d8e87;
            display: block;
            position: absolute;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
            z-index: -1;
            width: inherit;
        }
        .tooltip-cta-container {
            margin: 10px 20px;
        }
        .ctatooltip h3 {
            font-size: 21px;
            margin-top: 21px;
        }
        .tooltip-cta-container h3 {
            margin-bottom: 0 !important;
            line-height: 1.1;
            color: white;
        }
        .ctatooltip .tooltip-cta-container p {
            margin: 20px 0;
        }
        .ctatooltip p {
            color: #fff;
            font-size: 15px;
            line-height: 30px;
            margin: 0;
        }
        .ctatooltip a.button-cta {
            font-size: 14px;
            border-radius: 3px;
            background-color: #053c78;
            text-align: center;
            padding: 9px 30px;
            text-transform: uppercase;
            display: inline-block;
        }
        .ctatooltip a{
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
        .ctatooltip a:hover{
            color: #fff;
            text-decoration: none;
        }
        .keepexploring {
            cursor: pointer;
            display: block;
            transition: all .6s ease-in-out;
            color: #2a94d6;
            margin: 25px 0 20px 8px;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .callout-module.righttop:before {
            top: 7%;
            right: -60px;
            border-left: 30px solid #c5b7be;
        }
        .tenthpage:hover span{
            display: block !important;
            width: 200px;
            padding: 0;
            margin-top: 15px;
            margin-left: -150px;
            background-color: #053c78;
            color: #fff;
            padding: 8px 10px;
            font-size: 14px;
            letter-spacing: 1.2px;
            line-height: initial;
            color: #f4f4f4;
            z-index: 11;
            position: relative;
        }
        .ninethpage:hover span{
            display: block !important;
            width: 200px;
            padding: 0;
            margin-top: 15px;
            margin-left: -100px;
            background-color: #053c78;
            color: #fff;
            padding: 8px 10px;
            font-size: 14px;
            letter-spacing: 1.2px;
            line-height: initial;
            color: #f4f4f4;
            z-index: 11;
            position: relative;
        }
        .eightpage:hover span,
        .seventhpage:hover span,
        .sixpage:hover span,
        .fivthpage:hover span,
        .fourthpage:hover span,
        .thirdpage:hover span,
        .secondpage:hover span,
        .firstpage:hover span{
            display: block !important;
            width: 200px;
            padding: 0;
            margin-top: 15px;
            margin-left: -80px;
            background-color: #053c78;
            color: #fff;
            padding: 8px 10px;
            font-size: 14px;
            letter-spacing: 1.2px;
            line-height: initial;
            color: #f4f4f4;
            z-index: 11;
            position: relative;
        }
        span:before {
            left: 43%;
            top: -20px;
            border-bottom: 10px solid #005290;
            content: "";
            border: 10px solid #005290;
            position: absolute;
            border-color: transparent;            
        }
        
        @media only screen and (min-width: 300px) and (max-width: 767px){
            .item-pagination img{
                width:100%;
                padding-top:20px;
            }
            .tab-pagination .pagination{
                width:100% !important;
                padding:0 !important;
                margin-top:10px !important;
            }
            .tab-pagination .pagination ul{
                padding:0 !important;
            }
            .callout-module.righttop.callout,
            .callout-module.lefttop.callout,
            .callout-module.left.callout{
                width:100% !important;
                max-width:100% !important;
                top:0px !important;
                left:0px !important;
            }
            .tenthpage:hover span, 
			.ninethpage:hover span, 
			.eightpage:hover span, 
			.seventhpage:hover span, 
			.sixpage:hover span, 
			.fivthpage:hover span, 
			.fourthpage:hover span, 
			.thirdpage:hover span, 
			.secondpage:hover span, 
			.firstpage:hover span{
				display: none !important;
			}
			.callout-module:before,
			.callout-module.righttop:before{
				display: none !important;
			}
        }
        
        @media only screen and (min-width: 300px) and (max-width: 340px){
            .ctatooltip.reminder-for-trial.bottom.reveal{
                width: 100% !important;
                top: 328px !important;
                padding-top: 50px !important;
            }
        }
        @media only screen and (min-width: 340px) and (max-width: 393px){
            .ctatooltip.reminder-for-trial.bottom.reveal{
                width: 100% !important;
                top: 300px !important;
                padding-top: 55px !important;
            }
        }
        @media only screen and (min-width: 393px) and (max-width: 418px){
            .ctatooltip.reminder-for-trial.bottom.reveal{
                width: 100% !important;
                top: 330px !important;
                padding-top: 55px !important;
            }
        }
        @media only screen and (min-width: 418px) and (max-width: 494px){
            .ctatooltip.reminder-for-trial.bottom.reveal{
                width: 100% !important;
                top: 330px !important;
                padding-top: 20px !important;
            }
        }
        @media only screen and (min-width: 494px) and (max-width: 550px){
            .ctatooltip.reminder-for-trial.bottom.reveal{
                width: 100% !important;
                top: 298px !important;
                padding-top: 20px !important;
            }
        }
       @media only screen and (min-width: 768px) and (max-width: 991px) {
            .item-pagination img{
                width:100%;
            }
            .tab-pagination .pagination{
                padding:0 !important;
            }
            body{
                display:inline-block;
            }
            .callout-module.lefttop.callout{
                 top:-390px !important;
                 left:50% !important;
            }
            .callout-module.left.callout{
                top:-390px !important;
            }
            .ctatooltip.reminder-for-trial.bottom.reveal{
                top:440px !important;
            }
            .callout-module.righttop.callout,
            .callout-module.righttop.callout{
                top: -400px !important;
                left:40% !important;
            }
		   .tenthpage:hover span, 
			.ninethpage:hover span, 
			.eightpage:hover span, 
			.seventhpage:hover span, 
			.sixpage:hover span, 
			.fivthpage:hover span, 
			.fourthpage:hover span, 
			.thirdpage:hover span{
				margin-left: -70px !important;
			}
			.secondpage:hover span{
                margin-left: 10px !important;
            }
			.firstpage:hover span{
                margin-left: 10px !important;
            }
        }
       @media only screen and (min-width: 991px) and (max-width: 1200px){
            .item-pagination img{
                width:100%;
            }
            body{
                display:inline-block;
            }
            
            .tab-pagination .pagination{
                padding:0 !important;
            }
            .callout-module.lefttop.callout{
                 top:-390px !important;
                 left:50% !important;
            }
            .callout-module.left.callout{
                top:-390px !important;
            }
            .callout-module.righttop.callout,
            .callout-module.righttop.callout{
                top: -450px !important;
            }
            .pagination .ninethpage:hover span{
                margin-left:-100px;
            }
            .pagination .tenthpage:hover span{
                margin-left:-140px;
            }
       }
       .pagination ul .backresourcepage{
            width: auto !important;
            height:auto !important;
        }
        .backresourcepage a{
            background-color: #0348a8;
            color:#fff;
            border-radius: 30px;
            padding: 10px 15px;
        }
        ul{
            padding: 0;
        }
        @media only screen and (max-width: 1101px) and (min-width: 991px) {
            .backresourcepage a{
                padding: 10px 10px;
                font-size: 14px;
            }
            .callout-module{
                top:-490px !important;
            }
            .pagination li{
                margin-right:5px;
            }
        }
        @media only screen and (max-width: 990px) and (min-width: 768px) {
            .backresourcepage a{
                padding: 10px 10px;
                font-size: 14px;
            }
            .pagination{
                float: unset !important;
            }
            #pageHeading{
                width: 100%!important;
            }
            #pageShift{
                width: 100% !important;
            }

        }
        @media only screen and (max-width: 767px) and (min-width: 464px) {
            .pagination ul .backresourcepage{
                margin-top:15px !important;
            }
        }
        @media only screen and (max-width: 463px) and (min-width: 300px) {
            .pagination ul .backresourcepage{
                margin-top:5px;
            }
        }
        @media only screen and (max-width: 767px) and (min-width: 300px) {
            .callout-module .content{
                width: 100%;
            }
            #pageHeading{
                width: 100%!important;
            }
            #pageShift{
                width: 100% !important;
            }
            .backresourcepage a{
                font-size: 14px !important;
            }
        }
        #pageHeading{
            width: 40%;
        }
        #pageShift{
            width: 60%;
        }
        .backresourcepage {
            background-color: #0348a8;
            color: #fff;
            border-radius: 30px;
            padding: 10px 15px;
        }
        .backresourcepage:hover{
            color:#fff;
        }

        .tab-pagination-section {
            display: none;
        }
/*        @keyframes zoomIn {*/
/*  0% {*/
/*    transform: scale(0);*/
/*    opacity: 0;*/
/*  }*/
/*  100% {*/
/*    transform: scale(1);*/
/*    opacity: 1;*/
/*  }*/
/*}*/

.tab-pagination-section {
  display: none;
  animation: none;
}

.tab-pagination-section.show {
  display: block;
}






.cta-tooltip-new {
  transition: all 0.5s ease-in-out;
  opacity: 0;
  transform: translateY(-20px);
  pointer-events: none;
  position: absolute; /* Ensure it doesn't shift other content */
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; 
  background: #9d8e87;
}

.cta-tooltip-visible {
  opacity: 1 !important;
  transform: translateY(0);
  pointer-events: auto;
}

.cta-tooltip-hidden {
  opacity: 0 !important;
  transform: translateY(-20px);
  pointer-events: none;
}
.cta-tooltip-new h3{
    font-size: 21px;
    margin-top: 21px;
    margin-bottom: 0 !important;
    line-height: 1.1;
    color: white;
}
.cta-tooltip-new p {
    margin: 20px 0;
    color: #fff;
    font-size: 15px;
    line-height: 30px;
}
.cta-tooltip-new a.button-cta {
    font-size: 14px;
    border-radius: 3px;
    background-color: #053c78;
    text-align: center;
    padding: 9px 30px;
    text-transform: uppercase;
    display: inline-block;
    color: #fff;
}
.cta-tooltip-new a.cta-tooltip-close{
    cursor: pointer;
    display: block;
    transition: all .6s ease-in-out;
    color: #fff;
    margin: 25px 0 20px 8px;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
}


.tab-pagination-section2 .callout-module.lefttop:before{
    top: 35%;
    left: -58px;
}
.tab-pagination-section4 .callout-module.lefttop:before,
.tab-pagination-section3 .callout-module.lefttop:before {
    top: 30%;
    left: -59px;
    border-right: 30px solid #c5b7be;
}

.tab-pagination-section5 .callout-module.righttop:before {
    top: 7%;
    right: -58px;
    border-left: 30px solid #c5b7be;
}
.tab-pagination-section7 .callout-module.left:before{
    top: 47%;
    left: -59px;
}
    </style>

</head>
<body>

    <section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="https://technologymindz.com/" class="logo">
                        <img src="https://technologymindz.com/wp-content/uploads/2022/10/Technology-Mindz-New-Logo-1.jpg" alt="">
                    </a>
                    <a class="backresourcepage" href="https://technologymindz.com/resources">Back to resource page</a>
                </div>
            </div>
        </div>
    </section>

    
    <div class="tab-pagination">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12" id="pageHeading">
                    <div class="paginationheading">
                        <h2>PERSONALIZE EVERY CUSTOMER INTERACTION</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" id="pageShift">
                    <div class="pagination">
                        <ul>
                            <li data-tooltip="Automate 1-to-1 Personalization">1</li>
                            <li data-tooltip="Select the Event">2</li>
                            <li data-tooltip="Choose the Channels">3</li>
                            <li data-tooltip="Send Dynamic Emails at Scale">4</li>
                            <li data-tooltip="Execute a Mobile-First Mindset">5</li>
                            <li data-tooltip="Continue the Journey with Targeted Advertising">6</li>
                            <li data-tooltip="Create One Relationship Across the Lifecycle">7</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- 1st page -->

    <section class="tab-pagination-section tab-pagination-section1">

        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-1.png" alt="">
                    </div>
                    <div style="left: 72%;top: -570px;" class="callout-module left callout">
                        <div class="content">
                            <h3 class="headline">1. Automate 1-to-1 Personalization</h3>
                            <p class="copy">This completed interaction plan shows the journey for an abandoned shopping cart. It defines what events will trigger a journey, what channels will be used, which messages will be sent, what the timing will be, and more.</p>
                            <button slide="1" class="firstpagebtn">Next</button>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--- 2nd page -->

    <section class="tab-pagination-section tab-pagination-section2">
        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                     <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-2.png" alt="">
                    </div>
                    <div style="left: 74%;top: -562px;" class="callout-module lefttop callout">
                        <div class="content">
                            <h3 class="headline">2. Select the Event</h3>
                            <p class="copy">Journey Builder is event-driven. Listen for defined customer behavior and automatically place customers into journeys based on their activities. Examples include new purchases, loyalty program sign-ups, and webinar registrations.</p>
                            <button slide="2" class="secondpagebtn">Next</button>                           
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- 3rd page -->

    <section class="tab-pagination-section tab-pagination-section3">
       <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-3.png" alt="">
                    </div>
                    <div style="left: 36%;top: -400px;" class="callout-module lefttop callout">
                        <div class="content">
                            <h3 class="headline">3. Choose the Channels</h3>
                            <p class="copy">Today's customers use a variety of channels and devices. Identify which channel is right for your message, and drag it on to the canvas.</p>
                            <button slide="3" class="thirdpagebtn">Next</button>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- 4th page -->

    <section class="tab-pagination-section tab-pagination-section4">
        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-4.png" alt="">
                    </div>
                    <div style="left: 36%;top: -500px;" class="callout-module lefttop callout">
                        <div class="content">
                            <h3 class="headline">4. Send Dynamic Emails at Scale.</h3>
                            <p class="copy">Orchestrate and send emails created in Email Studio. The platform offers hundreds of features, from basic email creation, sending, and tracking, to advanced predictive content recommendations.</p>
                            <button slide="4" class="fourthpagebtn">Next</button>                             
                        </div>
                        <!-- CTA Tooltip that slides in and out -->
                        <div class="cta-tooltip-new cta-tooltip-hidden" style="width: 280px; bottom: -70%;">
                            <div class="tooltip-cta-container">
                              <h3>Ready to get started?</h3>
                              <p>See how Marketing Cloud can help you engage with your customers in a whole new way.</p>
                              <a href="https://technologymindz.com/contact-us/" class="button-cta" target="_blank">CONTACT US</a>
                              <a class="cta-tooltip-close" style="cursor: pointer;">Close</a>
                            </div>
                          </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--- 5th page -->

    <section class="tab-pagination-section tab-pagination-section5">
        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-5.png" alt="">
                    </div>
                    <div style="left: 36%;top: -510px;" class="callout-module righttop callout">
                        <div class="content">
                            <h3 class="headline">5. Execute a Mobile-First Mindset</h3>
                            <p class="copy">Connect with on-the-go customers at just the right time and place. You can access and send both push and SMS messages created in Mobile Studio to deliver alerts, transactional notifications, and more.</p>
                            <button slide="5" class="fivethpagebtn">Next</button>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--- 6th page -->

     <section class="tab-pagination-section tab-pagination-section6">
        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-6.png" alt="">
                    </div>
                    <div style="left: 70%;top: -545px;" class="callout-module left callout">
                        <div class="content">
                            <h3 class="headline">6. Continue the Journey with Targeted Advertising</h3>
                            <p class="copy">Drive more engagement with targeted, personalized advertising within the customer journey with the Active Audiences activity. Unlock your CRM data to securely and precisely reach each individual customer with timely and relevant ads.</p>
                            <button slide="6" class="sixthpagebtn">Next</button>                            
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!--- 7th page -->

    <section class="tab-pagination-section tab-pagination-section7">
        <div class="conteainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="item-pagination">
                        <img src="https://technologymindz.com/wp-content/uploads/2025/04/channel-marketing-7.png" alt="">
                    </div>
                    <div style="left: 35%;top: -500px;" class="callout-module left callout">
                        <div class="content">
                            <h3 class="headline">7. Create One Relationship Across the Lifecycle</h3>
                            <p class="copy">Marketing Cloud integrates seamlessly with your other Salesforce products. For example, automatically create a sales lead when a prospect responds favorably to a survey, or create a service case if an existing customer responds negatively.</p>
                            <a style="font-size: 14px; color: #fff; text-transform: uppercase; height: 38px; border-radius: 3px; border: 0; padding: 8px 34px; cursor: pointer; background-color: #0060ad;" href="https://technologymindz.com/resources">Finish</a>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>




    
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pages = document.querySelectorAll(".pagination li");
            const sections = document.querySelectorAll(".tab-pagination-section");
            const nextButtons = document.querySelectorAll("button");
    
            // Hide all sections and remove active class from all pages initially
            sections.forEach(section => section.style.display = "none");
            pages.forEach(page => page.classList.remove("active"));
    
            // Show the first section and activate the first page
            if (sections.length > 0) sections[0].style.display = "block";
            if (pages.length > 0) pages[0].classList.add("active");
    
            // Add click listeners to all page buttons
            pages.forEach((page, index) => {
                page.addEventListener("click", function () {
                    sections.forEach(section => section.style.display = "none");
                    pages.forEach(p => p.classList.remove("active"));
    
                    if (sections[index]) {
                        sections[index].style.display = "block";
                    }
                    page.classList.add("active");
                });
            });
    
            // Add click listeners to all next buttons for page navigation
            nextButtons.forEach(button => {
                button.addEventListener("click", function () {
                    let currentSlide = parseInt(button.getAttribute("slide")) - 1; // Get the current page index (0-based)
                    let nextSlide = currentSlide + 1;
    
                    if (nextSlide < sections.length) {
                        sections[currentSlide].style.display = "none"; // Hide current page
                        sections[nextSlide].style.display = "block"; // Show next page
                        
                        // Activate the corresponding page in pagination
                        pages.forEach(page => page.classList.remove("active"));
                        if (pages[nextSlide]) pages[nextSlide].classList.add("active");
                    }
                });
            });
        });
    </script>
    
      
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const pages = document.querySelectorAll(".pagination li");
          const sections = document.querySelectorAll(".tab-pagination-section");
          const ctaTooltip = document.querySelector(".cta-tooltip-new");
          const closeButton = document.querySelector(".cta-tooltip-close");
        
          // Initialize first page
          sections.forEach(section => section.style.display = "none");
          pages.forEach(page => page.classList.remove("active"));
          sections[0].style.display = "block";
          pages[0].classList.add("active");
        
          // Pagination click handling
          pages.forEach((page, index) => {
            page.addEventListener("click", function () {
              sections.forEach(s => s.style.display = "none");
              pages.forEach(p => p.classList.remove("active"));
              sections[index].style.display = "block";
              page.classList.add("active");
        
              // Only show CTA if it's the 4th section
              if (index === 3) {
                setTimeout(() => {
                  ctaTooltip.classList.remove("cta-tooltip-hidden");
                  ctaTooltip.classList.add("cta-tooltip-visible");
                }, 300); // delay for smoothness
              } else {
                ctaTooltip.classList.remove("cta-tooltip-visible");
                ctaTooltip.classList.add("cta-tooltip-hidden");
              }
            });
          });
        
          // Next button click (1st to 6th)
          document.querySelectorAll("button[slide]").forEach(btn => {
            btn.addEventListener("click", function () {
              const index = parseInt(this.getAttribute("slide"));
              if (index < sections.length) {
                pages[index].click();
              }
            });
          });
        
          // Close CTA box
          closeButton.addEventListener("click", function () {
            ctaTooltip.classList.remove("cta-tooltip-visible");
            ctaTooltip.classList.add("cta-tooltip-hidden");
          });
        });
        </script>
        
    
    
    
      
      
    
</body>
</html>