<?php
/*
Template Name: Data Extraction with Intelligent Document Processing 
*/
get_header();
?>

   <section id="1677597469443_dj4" class="relative marquee--blade marquee--right-image" style="padding-top:150px;">
        <div class="container" style="padding:0;">
            <article class="d-flex" data-module-track-impressions=""
                data-module-id="1677597469443_dj4" data-module-name="Sales AI" data-module-position="1"
                data-module-type="headline" style="justify-content: space-between;align-items: flex-start;">
                
                <div class="content__wrapper"  style="width:45%">
                    <header class="marquee__blade-heading eyebrow--standard">
                        <h1 class="headline marquee__headline--standard" style="color: #032d60;font-size: 36px;line-height:45px;font-weight: 600;">Data Extraction with Intelligent Document Processing</h1>
                        <!--<h5 class="headline marquee__headline--standard" style="color: #032d60;font-size: 17px; line-height: 30px; font-family: var(--pbc-g-font-sans); "><i>Effortless Document Summaries and Interactive Conversations...</i></h5>-->
                        <div class="blade__description" style="margin-top:10px;">
                            <p>Organizations handling large volumes of unstructured data, such as invoices, contracts, and identification documents, often struggle with manual data extraction. Traditional methods are slow, error-prone, and resource-intensive. Data Extraction with Intelligent Document Processing (IDP) automates this process, efficiently extracting crucial information and converting it into a structured format. This AI-driven approach enhances speed, accuracy, and overall operational efficiency.</p>
                        </div>
                        <div class="subheadingAiPage">
                            <h3 style="color: #032d60;font-size: 24px;line-height:25px;font-weight: 600;margin-top:20px;margin-bottom:10px;">How its work</h3>
                            <p>When a user submits a document through the web application, Azure Document Intelligence extracts the relevant content. This extracted data is then processed and structured using Large Language Models (LLM), ensuring an organized and methodical response based on the document type and content.</p>
                        </div>
                    </header>
                </div>
                
                <div class="image__wrapper" style="width:52%">
                    <div class="image__inner">
                      <iframe class="image__asset" src="https://www.youtube.com/embed/GAGQBWKELCo?si=7LyxFZ7wCvfkpHti" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </article>
        </div>

        
    </section>

    <!-- tab -->
    
    <section style="padding-bottom:20px;">
        <div class="tabs">
  
            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">  
            <input type="radio" id="tab4" name="tab-control"> 
            <input type="radio" id="tab5" name="tab-control">

            <ul>
                <li title="Introducing">
                    <label for="tab1" role="button">
                        <span>Introduction </span>
                    </label>
                </li>

                <li title="Components">
                    <label for="tab2" role="button">
                        <span>Components</span>
                    </label>
                </li>

                <li title="Architecture Diagram">
                    <label for="tab3" role="button">
                        <span>Architecture Diagram</span>
                    </label>
                </li>

                <li title="Guide Tour">
                    <label for="tab4" role="button">
                        <span>Guided Tour</span>
                    </label>
                </li>    

                <li title="Live Demo">
                    <label for="tab5" role="button">
                        <span>Live Demo</span>
                    </label>
                </li>
            </ul>
            
            <div class="slider">
                <div class="indicator"></div>
            </div>

            <div class="content">

                <section class="firstSec">
                    <h2>Introducing</h2>
                    <!--<h1>AI-Powered Mental Health Chatbot  </h1>-->
                    <h5></h5>
                    <div class="useCase">
                        <h6>Use Case</h6>
                    </div>
                    <ul>
                        <li><b>Invoice Processing –</b> Extract vendor details, invoice numbers, and amounts for automated bookkeeping.</li>
                        <li><b>Contracts & Legal Documents –</b> Identify key clauses, parties involved, and contract terms.</li>
                        <li><b>Identity Verification –</b> Extract details from passports, driver’s licenses, and ID cards.</li>
                        <li><b>Banking & Financial Documents –</b> Automate data extraction from loan applications, credit reports, and statements.</li>
                        <li><b>Healthcare & Insurance Claims –</b> Process patient records, medical forms, and policy documents efficiently.</li>
                    </ul>

                    <div class="whoBenefits">
                        <h6>Benefits</h6>
                        <ul>
                            <li><b>85% Reduction in Manual Effort –</b> AI automates data extraction, eliminating tedious manual work.</li>
                            <li><b>5x Faster Processing Speed –</b> Process large volumes of documents instantly.</li>
                            <li><b>95%+ Data Extraction Accuracy –</b> Ensure precise and reliable data retrieval.</li>
                            <li><b>70% Cost Savings –</b> Reduce operational costs by minimizing manual data processing.</li>
                            <li><b>1000+ Documents Processed Per Minute –</b> Scalable automation for high-volume document handling. </li>
                        </ul>
                    </div>
                </section>

                <section class="secondSec">
                    <h2>Components</h2>
                    <!--<h1>Supporting Mental Well-Being with Three Core Features </h1>-->
                    <!--<h5>Explore how our solution leverages advanced AI to optimize contract workflows and provide valuable insights.</h5>-->
                    
                    <div class="row">
                        <div class="aisectionPoint">
                            <div class="col-md-12 col-sm-12">
                                <div class="aisecPointPoint">
                                    <ul>
                                        <li><b>Azure Function –</b> Serverless execution of the document processing workflow. </li>
                                        <li><b>Azure Document Intelligence API –</b> Extracts structured data, including text, key-value pairs, tables, and checkmark fields. </li>
                                        <li><b>Language Model (LLM) –</b> Summarizes extracted data and presents key insights. </li>
                                        <li><b>Blob Storage (Optional) –</b> Stores raw documents before processing. </li>
                                        <li><b>Event Trigger (HTTP Trigger or Blob Storage Trigger) –</b> Initiates processing when a document is uploaded. </li>
                                        <li><b>Structured Data Output (JSON) –</b> Presents extracted data in a machine-readable format for integration with other applications. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    
                </section>

              
                <section class="thirdSec" style="margin:0 auto; text-align:center;">
                    <h2>Architecture Diagram</h2>
                    <img id="popupImage" src="https://staging.technologymindz.com/wp-content/uploads/2025/03/Data-extraction-with-Intelligent-Document.jpg" alt="diagram" style="width:55%; cursor: pointer;">
                </section>

                <section class="thirdSecNew">
                    <h2>Guide Tour</h2>
                    
                    
                     <div class="wrapper">
                        <div class="container-fluid">
                            <div class="row">


                                <div class="row" id="fistPage" >
                                    <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                        <div class="step-image-container" id="slider1">                                    
                                            <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                            <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/Intelligent-Document-Processing-1.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                            <div class="button-highlight3" id="nextSecPage" style="left: 38.5%;bottom: 19%;width: 23%;height: 11%;"></div>
                                        </div>                                
                                    </div>
                                    <div class="col-10 col-md-5 col-xl-4">
                                        <div class="step-panel">
                                            <div class="step-panel__header"  style="position: relative;">
                                                <h1>Data extraction with Intelligent Document Processing</h1>
                                            </div>
                                            <div class="step-panel__body">
                                                <span class="step-panel__eyebrow">1 / 6</span>
                                                <!-- <span class="step-panel__body-eyebrow">OVERVIEW</span> -->
                                                <div>
                                                    <p>This demo shows how Intelligent Document Processing with AI is a revolutionary solution for organizations that struggle with manual document processing. This AI model automatically extracts crucial data points in seconds.</p>
                                                    <p>This model uses AI and decision rules defined by the user to classify documents and extract data accurately and reliably. It can extract data from images, documents, tables, and specialized documents and enhance the convenience of the users.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row" id="secondPage" style="display: none;">
                                    <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                        <div class="step-image-container" id="slider1">                                    
                                            <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                            <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/KYC.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                        </div>                                
                                    </div>
                                    <div class="col-10 col-md-5 col-xl-4">
                                        <div class="step-panel">
                                            <div class="step-panel__header" style="position: relative;">
                                                <a id="backfirst" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                                    <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
        </svg>
                                                </a>
                                                <h1>Data extraction with Intelligent Document Processing</h1>
                                            </div>
                                            <div class="step-panel__body">
                                                <span class="step-panel__eyebrow">2 / 6</span>
                                                <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                                <div>
                                                    <p>This is a sample document that is uploaded to this AI model to extract crucial data points. This is a single document which is shown for your reference. It can easily extract information from a large amount of unstructured data which is locked up inside texts, emails, PDFs, images, and scanned documents. It can also extract data from handwritten documents very easily.</p>
                                                </div>
                                                <button type="button" class="btn btn-primary" id="nextfinalpage">
                                                    <div style="position: relative;">
                                                        <span>Next</span>
                                                        <div class="button-highlight3" id="nextthirdPage" style="left: 0%;top: -44%;width: 100%;height: 45px;"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row" id="thirdPage" style="display: none;">
                                    <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                        <div class="step-image-container" id="slider1">                                    
                                            <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                            <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/OUTPUT.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                            <!--<div class="button-highlight3" id="nextfourthPage" style="left: 40.2%;bottom: 24.2%;width: 22.2%;height: 13%;"></div>-->
                                        </div>      
                                        
        
                                    </div>
                                    <div class="col-10 col-md-5 col-xl-4">
                                        <div class="step-panel">
                                            <div class="step-panel__header" style="position: relative;">
                                                <a id="backcsecondPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                                    <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
        </svg>
                                                </a>
                                                <h1>Data extraction with Intelligent Document Processing</h1>
                                            </div>
                                            <div class="step-panel__body">
                                                <span class="step-panel__eyebrow">3 / 6</span>
                                                <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                                <div>
                                                    <p>This is the extracted information from the document.</p>
                                                </div>
                                                <button type="button" class="btn btn-primary" id="nextfourthPage">
                                                    <div style="position: relative;">
                                                        <span>Next</span>
                                                        <div class="button-highlight3" id="nextfourthPage" style="left: 0%;top: -44%;width: 100%;height: 45px;"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row" id="fourthPage" style="display: none;">
                                    <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                        <div class="step-image-container" id="slider1">                                    
                                            <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                            <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/Intelligent-Document-Processing-5.jpg" alt="" class="img-fluid screen-image" style="height:auto;">
                                            
                                        </div>                                
                                    </div>
                                    <div class="col-10 col-md-5 col-xl-4">
                                        <div class="step-panel">
                                            <div class="step-panel__header" style="position: relative;">
                                                <a id="backthirdPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                                    <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
        </svg>
                                                </a>
                                                <h1>Data extraction with Intelligent Document Processing</h1>
                                            </div>
                                            <div class="step-panel__body">
                                                <span class="step-panel__eyebrow">4 / 6</span>
                                                <!-- <span class="step-panel__body-eyebrow">AI ANALYSIS IN ACTION</span> -->
                                                <div>
                                                    <p>Here, we have used an example of a driver's license which is used to extract information.</p>
                                                </div>
                                                <button type="button" class="btn btn-primary" id="nextfinalpage">
                                                    <div style="position: relative;">
                                                        <span>Next</span>
                                                        <div class="button-highlight3" id="nextfivthPage" style="left: 0%;top: -44%;width: 100%;height: 45px;"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="fivthPage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/AGreement.jpg" alt="" class="img-fluid screen-image" style="height:auto;">
                                    
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header" style="position: relative;">
                                        <a id="backfourthPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
</svg>
                                        </a>
                                        <h1>Data extraction with Intelligent Document Processing</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">5 / 6</span>
                                        <!-- <span class="step-panel__body-eyebrow">AI ANALYSIS IN ACTION</span> -->
                                        <div>
                                            <p>This is an example of an unstructured document which is used to extract information.</p>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="nextfinalpage">
                                            <div style="position: relative;">
                                                <span>Next</span>
                                                <div class="button-highlight3" id="nextsixPage" style="left: 0%;top: -44%;width: 100%;height: 45px;"></div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <div class="row" id="sixpage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/Output22.jpg" alt="" class="img-fluid screen-image" style="height:auto;">
                                    
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header" style="position: relative;">
                                        <a id="backfivePage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
</svg>
                                        </a>
                                        <h1>Data extraction with Intelligent Document Processing</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">6 / 6</span>
                                        <!-- <span class="step-panel__body-eyebrow">AI ANALYSIS IN ACTION</span> -->
                                        <div>
                                            <p>This is the extracted information from the document.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                </div>
                            </div>
                        </div>
                    </div>
                
                </section>
            <?php echo do_shortcode('[live_demo_form]'); ?>
            </div>
        </div>
    </section>
    
    
    <div class="containerdemos">
  <div class="Video_container" id="videoBox">
    <img
      src="https://staging.technologymindz.com/wp-content/uploads/2025/07/women-image.jpg"
      alt="Preview"
      class="video-preview"
    />
<video
  id="demo-video"
  src="https://staging.technologymindz.com/wp-content/uploads/2025/07/new-popup-demo-video.mp4"
  autoplay
  loop
  muted
  preload="auto"
  class="video-player"
></video>
    <!-- <div class="mute-control" id="muteToggle">Unmute</div> -->
     <!-- Mute/Unmute Button -->
<div class="mute-control" id="muteToggle">
  <!-- Mute Icon -->
  <span id="iconMute" class="icon-with-label">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
         stroke-linecap="round" stroke-linejoin="round" style="margin-right:2px;">
      <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
      <line x1="23" y1="9" x2="17" y2="15"></line>
      <line x1="17" y1="9" x2="23" y2="15"></line>
    </svg>
    Mute
  </span>

  <!-- Unmute Icon -->
  <span id="iconUnmute" class="icon-with-label" style="display: none;">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
         stroke-linecap="round" stroke-linejoin="round" style="margin-right:2px;">
      <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
      <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
      <path d="M19.07 4.93a9 9 0 0 1 0 14.14"></path>
    </svg>
    Unmute
  </span>
</div>
 
<!-- Close Button -->
<div class="cross-control" id="closeButton">
  <span class="icon-with-label">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
  </span>
</div>


  </div>
  <a class="book_button" href="https://staging.technologymindz.com/contact-us/">Book Demo</a>
</div> 

<?php get_footer(); ?>

<script>
    $('#liveFormSubmitRedirectURL').val('https://staging.technologymindz.com/data-extraction-with-intelligent-document-processing-demo/data-extraction-with-intelligent-document-processing.php');
</script>
