<?php
/*
Template Name:Intelligent AI Chatbot for Employees 
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
                        <h1 class="headline marquee__headline--standard" style="color: #032d60;font-size: 36px;line-height:45px;font-weight: 600;">Intelligent AI Chatbot for Employees</h1>
                        <h5 class="headline marquee__headline--standard" style="color: #032d60;font-size: 17px; line-height: 30px; font-family: var(--pbc-g-font-sans); "><i>Instant Access to Workplace Knowledge</i></h5>
                        <div class="blade__description" style="margin-top:10px;">
                            <p>Finding the right information within company policies, guidelines, and other essential documents can be time-consuming. The Intelligent AI Chatbot for Employees eliminates this challenge by providing instant, accurate answers to workplace-related queries. Instead of manually searching through lengthy PDFs or documents, employees can simply ask the chatbot, which understands their queries and retrieves relevant information effortlessly. This enhances efficiency and ensures seamless access to organizational knowledge.</p>
                        </div>
                        <div class="subheadingAiPage">
                            <h3 style="color: #032d60;font-size: 24px;line-height:25px;font-weight: 600;margin-top:20px;margin-bottom:10px;">How it works</h3>
                            <p>When a user uploads a PDF or DOCX, the system extracts its content, breaks it into smaller sections, and stores it in a vector database. Using Retrieval-Augmented Generation (RAG), it intelligently fetches the most relevant sections to provide precise, document-based answers. This ensures seamless, context-aware Q&A experiences, improving workplace knowledge accessibility.</p>
                        </div>
                    </header>
                </div>
                
                <div class="image__wrapper" style="width:52%">
                    <div class="image__inner">
                      <iframe class="image__asset" src="https://www.youtube.com/embed/Z-U5iszNblY?si=0XIg9uq_AUj_7xi7" frameborder="0" allowfullscreen></iframe>
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
                        <li><b>HR & Employee Policies –</b> Employees can instantly retrieve information about leave policies, benefits, and company guidelines.</li>
                        <li><b>IT & Helpdesk Support –</b> Quick access to troubleshooting guides, IT policies, and onboarding materials</li>
                        <li><b>Legal & Compliance –</b> Employees can find relevant compliance rules, legal policies, and industry regulations.</li>
                        <li><b>Healthcare & Safety –</b> Access workplace safety protocols, health benefits, and emergency procedures.</li>
                        <li><b>Training & Development –</b> Retrieve details about training programs, learning resources, and career growth opportunities.</li>
                    </ul>

                    <div class="whoBenefits">
                        <h6>Benefits</h6>
                        <ul>
                             <li><b>70% Faster Information Retrieval –</b> Employees get instant answers instead of manually searching through documents.</li>
                             <li><b>90% Accuracy –</b> AI provides precise, context-aware responses based on company policies and guidelines.</li>
                             <li><b>60% Reduction in HR & IT Queries –</b> Employees get self-service support, minimizing dependency on internal teams.</li>
                             <li><b>35% Increase in Productivity –</b> Faster decision-making with immediate access to critical information.</li>
                             <li><b>Significant Cost Savings –</b> Reduced workload for HR, IT, and support teams, lowering operational costs.</li>
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
                                        <li><b>Ingest Route (Document Processing) – </b> Extracts text from PDFs, splits content into chunks, and stores it in a custom Cassandra table with a unique GUID.</li>
                                        <li><b>Delete Route (Data Management) – </b> Allows secure deletion of stored documents based on GUID for efficient database management.</li>
                                        <li><b>Employee Bot Route (AI Query Processing) – </b> Accepts employee queries, retrieves relevant information from stored documents, and provides AI-generated responses.</li>
                                        <li><b>Custom Cassandra Vector Store – </b> Ensures optimized storage and fast retrieval of document data.</li>
                                        <li><b>Large Language Model (LLM) Integration – </b> Generates accurate, context-aware responses based on retrieved data.</li>
                                        <li><b>Azure-Based Scalability – </b> Ensures high availability and performance with cloud-based deployment.</li>
                                        <li><b>Security & Access Control – </b> Implements encryption, authentication, and role-based access to protect sensitive data.</li>
                                        <li><b>Multi-Platform Integration – </b>This Can be integrated with Microsoft Teams, Slack, or internal portals for seamless employee access. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    
                </section>

              
                <section class="thirdSec" style="margin:0 auto; text-align:center;">
                    <h2>Architecture Diagram</h2>
                    <img id="popupImage" src="https://staging.technologymindz.com/wp-content/uploads/2025/03/Intelligent-I-Chatbot-for-Employees.jpg" alt="diagram" style="width:55%; cursor: pointer;">
                </section>

                <section class="thirdSecNew">
                    <h2>Guide Tour</h2>
                    
                    
                     <<div class="wrapper">
        <div class="container-fluid">
            <div class="row">


                        <div class="row" id="fistPage" >
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-1.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                    <div class="button-highlight3" id="nextSecPage" style="left: 38.5%;bottom: 25%;width: 23%;height: 11%;"></div>
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header"  style="position: relative;">
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">1 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">OVERVIEW</span> -->
                                        <div>
                                            <p>This demonstration introduces you to an innovative AI assistant, built for employees. It helps them to navigate the ins and outs of their workday, answer questions, and streamline their tasks.</p>
                                            <p>It utilizes advanced artificial intelligence to empower their workday. It can assist them if they need to navigate company policies, troubleshoot IT glitches, or simply find essential resources. Imagine a world where information is readily available and tasks are completed seamlessly – that's the power of this intelligent chatbot at your fingertips.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="secondPage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-2.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
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
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">2 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>Here we have showcased some functions of this chatbot through different scenarios.</p>
                                            <p>It is equipped to answer many other queries and help your employees in every possible manner.</p>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="nextfinalpage">
                                            <div style="position: relative;">
                                                <span>Next</span>
                                                <div class="button-highlight3" id="nextthirdPage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
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
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-3A.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
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
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">3 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>This showcases the chat between an employee and the chatbot inquiring about company's policy regarding leaves.</p>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="nextfinalpage">
                                            <div style="position: relative;">
                                                <span>Next</span>
                                                <div class="button-highlight3" id="nextfourthPage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
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
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-4.jpg" alt="" class="img-fluid screen-image" style="height:auto;">
                                    
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
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">4 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">AI ANALYSIS IN ACTION</span> -->
                                        <div>
                                            <p>Scenario 2 demonstrates a chat between the chatbot and employee who wants to access comany's learning materials.</p>
                                                                                      
                                        </div>
                                        <button type="button" class="btn btn-primary" id="nextfinalpage">
                                            <div style="position: relative;">
                                                <span>Next</span>
                                                <div class="button-highlight3" id="nextfivthPage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
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
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-5.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
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
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">5 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>Here the chatbot helps the employee to access training materials, answer questions, and guide him through the learning journey.
                                            </p>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="nextfinalpage">
                                            <div style="position: relative;">
                                                <span>Next</span>
                                                <div class="button-highlight3" id="nextsixPage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
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
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-6.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
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
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">6 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p> Here the chatbot helps the employee to access training materials, answer questions, and guide him through the learning journey.
                                            </p>
                                            <button type="button" class="btn btn-primary" id="nextfinalpage">
                                                <div style="position: relative;">
                                                    <span>Next</span>
                                                    <div class="button-highlight3" id="nextsevenPage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
                                                </div>
                                            </button>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="sevenpage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-7a.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header" style="position: relative;">
                                        <a id="backsixPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
</svg>
                                        </a>
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">7 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>Scenario 3 depicts a chat between an employee and the chatbot where the employee is asking for the information related to the branding guidelines of the company.
                                            </p>
                                            <button type="button" class="btn btn-primary" id="nexteightpage">
                                                <div style="position: relative;">
                                                    <span>Next</span>
                                                    <div class="button-highlight3" id="nexteightpage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
                                                </div>
                                            </button>
                                            
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" id="eightpage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-8.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header" style="position: relative;">
                                        <a id="backsevenPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
</svg>
                                        </a>
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">8 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>The chatbot helps employee by answering all the questions related to the branding guidelines.</p>
                                            <button type="button" class="btn btn-primary" id="nextninepage">
                                                <div style="position: relative;">
                                                    <span>Next</span>
                                                    <div class="button-highlight3" id="nextninepage" style="left: 0%;top: -44%;width: 100%;height: 46px;"></div>
                                                </div>
                                            </button>
                                            
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" id="ninepage" style="display: none;">
                            <div class="col-9 col-md-7 col-xl-8 tour-first-shot">
                                <div class="step-image-container" id="slider1">                                    
                                    <div class="responsive-spacer" style="padding-top: 56.25%;"></div>
                                    <img src="https://staging.technologymindz.com/wp-content/uploads/2025/02/internal-employees-9.jpg" alt="" class="img-fluid screen-image" style="height: auto;">
                                </div>                                
                            </div>
                            <div class="col-10 col-md-5 col-xl-4">
                                <div class="step-panel">
                                    <div class="step-panel__header" style="position: relative;">
                                        <a id="backeightPage" style="position: relative; left:5%; cursor: pointer; width:10%;">
                                            <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
<polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "/>
</svg>
                                        </a>
                                        <h1>Intelligent AI chatbot for employees</h1>
                                    </div>
                                    <div class="step-panel__body">
                                        <span class="step-panel__eyebrow">9 / 9</span>
                                        <!-- <span class="step-panel__body-eyebrow">CALL TRANSCRIPT</span> -->
                                        <div>
                                            <p>The chatbot helps employee by answering all the questions related to the branding guidelines.</p>
                                            
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
    $('#liveFormSubmitRedirectURL').val('https://staging.technologymindz.com/intelligent-chatbot-for-employee/intelligent-ai-chatbot-for-employees-demo.php');
</script>