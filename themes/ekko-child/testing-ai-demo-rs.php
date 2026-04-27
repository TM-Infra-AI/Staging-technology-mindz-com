<?php
/*
Template Name: Testing AI Demo rs
*/
get_header();
?>
  <style>
    /** {*/
    /*  margin: 0;*/
    /*  padding: 0;*/
    /*  box-sizing: border-box;*/
    /*}*/

    /*body {*/
    /*  font-family: Arial, sans-serif;*/
    /*}*/

    /*.fixed-header {*/
    /*  position: fixed;*/
    /*  top: 0;*/
    /*  width: 100%;*/
    /*  background: #222;*/
    /*  color: white;*/
    /*  padding: 15px 20px;*/
    /*  z-index: 1000;*/
    /*}*/

    .wrapperAIdemo {
      display: flex;
      padding-top: 70px; /* space for fixed header */
    }

    .wrapperAIdemo .left-content {
      flex: 1;
      padding: 30px;
      background: #f9f9f9;
    }

    .wrapperAIdemo .right-video {
      width: 320px;
      padding: 30px 20px 30px 10px;
      background: #f1f1f1;
      position: relative;
    }

    .wrapperAIdemo .sticky-video {
      position: sticky;
      top: 100px; /* stays below header */
    }

    .wrapperAIdemo .sticky-video iframe {
      width: 100%;
      height: 300px;
      border: none;
    }

    .bottom-tab {
      background: #eaeaea;
      padding: 20px;
      border-top: 1px solid #ccc;
      display: flex;
      justify-content: center;
      gap: 20px;
      height: auto;
    }

    .bottom-tab button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .bottom-tab button:hover {
      background-color: #0056b3;
    }



    header.marquee__blade-heading.eyebrow--standard {
    text-align: left;
}
.marquee--blade .blade__description p:last-child {
    margin-bottom: 0;
        margin-top: 0;
}
.marquee--blade .blade__description p {
    margin-top: 0;
    color: #0a0a0a;
    font-weight: 400;
    font-family: Poppins;
    font-size: 15px;
    line-height: 25px;
}
  </style>
  <!-- Header -->
  <!--<div class="fixed-header">-->
  <!--  <h1>Invoice Processing Page</h1>-->
  <!--</div>-->

  <!-- Content + Video Side by Side -->
  <div class="wrapperAIdemo">
    <div class="left-content" style="width:45%">
      <header class="marquee__blade-heading eyebrow--standard">
                        <h1 class="headline marquee__headline--standard" style="color: #032d60;font-size: 36px;line-height:45px;font-weight: 600;">Automated Invoice Processing</h1>
                        <!--<h5 class="headline marquee__headline--standard" style="color: #032d60;font-size: 20px; line-height: 40px; font-family: var(--pbc-g-font-sans); "><i>AI-powered Multilingual PDF Translation Solution</i></h5>-->
                        <div class="blade__description" style="margin-top:10px;">
                            <p>Managing and processing invoices manually can be time-consuming and error-prone. Our AI-powered Automated Invoice Processing simplifies the entire workflow—from email-based invoice intake to Salesforce integration, reporting, and error handling—ensuring timely updates, data accuracy, and daily insights, all without manual intervention. Its fault-tolerant architecture ensures high accuracy through multi-layer validation—delivering reliable, precise, and transparent results throughout the process.</p>
                        </div>
                        <div class="subheadingAiPage">
                            <h3 style="color: #032d60;font-size: 24px;line-height:25px;font-weight: 600;margin-top:20px;margin-bottom:10px;">How it works</h3>
                            <ul>
                                <li><b>Email-Based Automation:</b> The system detects and processes invoices received via email, extracting key details using AI-based document intelligence.</li>
                                <li><b>Fault-Tolerant Data Validation:</b> To maximize accuracy and reduce errors, our invoice processing platform now incorporates a fault-tolerant mechanism. The system automatically validates extracted data against the original invoice before pushing it into Salesforce. If discrepancies are detected, the invoice is intelligently flagged for manual review—ensuring only accurate data is processed while maintaining seamless workflow continuity.</li>
                                <li><b>Salesforce Integration:</b> Extracted data is automatically populated into Salesforce for seamless record management.</li>
                                <li><b>Screenshot Logging for Traceability:</b> To enhance transparency and accuracy, our system now captures automated screenshots at key stages—when data is entered into the CRM and again after it is saved. This ensures a reliable audit trail, simplifies discrepancy resolution, and reinforces the integrity of the entire invoice processing workflow.</li>
                                <li><b>Real-Time Confirmation:</b> A confirmation report is emailed to the sender upon successful processing. If issues are found, a detailed exception report is generated.</li>
                                <li><b>Excel Upload Portal for Error Handling:</b> Users receive an error-flagged Excel file for partially failed invoices, make corrections directly in it, and upload the sheet via the portal by entering the invoice type, subject line, and email address. The system processes the corrected data, updates Salesforce, and emails a post-processing summary with success and error details. </li>
                                <li><b>Credential-Protected Access:</b> Access to the platform is secured through a login portal requiring verified credentials—ensuring only authorized users can submit or correct invoices, enhancing data protection and compliance.</li>
                                <li><b>Daily Summary Report:</b> A consolidated report is automatically generated every 24 hours, summarizing all processed invoices.</li>
                                
                           </ul>
                        </div>
                    </header>
    </div>

    <div class="right-video" style="width:55%">
      <div class="sticky-video">
        <iframe class="image__asset" src="https://www.youtube-nocookie.com/embed/VpCFRel8egs?si=vn92NznBwYXWB8O5&amp;enablejsapi=1&amp;origin=https://technologymindz.com" title="Automated Invoice Processing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" data-lf-form-tracking-inspected-lynor8xdg158wqjz="true" data-lf-yt-playback-inspected-lynor8xdg158wqjz="true" data-lf-vimeo-playback-inspected-lynor8xdg158wqjz="true" data-gtm-yt-inspected-12="true" id="463135516"></iframe>                  
      </div>
    </div>
  </div>

  <!-- Bottom Full Width Tab -->
  <div class="bottom-tab">
    <button>Home</button>
    <button>Upload</button>
    <button>Analytics</button>
    <button>Settings</button>
  </div>

?>