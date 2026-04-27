<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script crossorigin='anonymous' src='https://kit.fontawesome.com/5c3f804e7a.js'></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        .listening {
            color: red; /* Example change, adjust based on your need */
        }
    </style>
    
    
    
<style>
.filelabel {
    width: 35px;
    /*border: 2px dashed grey;*/
    /*border-radius: 5px;*/
    display: block;
    padding: 0px;
    transition: border 300ms ease;
    cursor: pointer;
    text-align: center;
    margin: 0;
}
.filelabel i {
    display: block;
    font-size: 22px;
    padding: 12px 7px 5px 7px;
}
.filelabel i,
.filelabel .title {
  color: #1665c4;
  transition: 200ms color;
}
/*.filelabel:hover {*/
/*  border: 2px solid #1665c4;*/
/*}*/
.filelabel:hover i,
.filelabel:hover .title {
  color: #1665c4;
}
#FileInput{
    display:none;
}
    </style>
</head>

<body>

    <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons type1 for-closed active" style="color: rgb(255, 255, 255);">
            <svg id="ic_bubble" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </i>
    </div>

    <div class="chat-box">
        <section class="msger">
            <header class="msger-header">
                <div class="msger-header-title">
                    <img src="/img/TM-Logo-white-Primary-new.png" alt="" style="width:40px;">
                </div>
                <div class="msger-header-options">
                    <span class="chat-box-toggle"><i class="fa-solid fa-xmark"></i></span>
                </div>
            </header>

            <main class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img" style="background-image: url(https://cdn-icons-png.flaticon.com/512/10479/10479785.png)">
                    </div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">Technology Mindz</div>
                            <div class="msg-info-time" id="time"></div>
                        </div>

                        <div class="msg-text">
                            Hi, welcome to Technology Mindz! Go ahead and send me a message. 😄
                        </div>
                        <div class="msg-pdf"></div>
                        <div class="speack speak" id="speakButton"><img
                                src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png"></div>
                    </div>
                </div>

            </main>

            <form class="msger-inputarea">
                <input type="text" name="text" class="msger-input" placeholder="Type your message">
                <label class="filelabel" id="filelabel">
                    <i class="fa fa-paperclip" id="mycls"></i>
                    <input class="FileUpload1" id="FileInput" name="attachment" type="file"/>
                </label>
                <button type="button" class="mic" id="speakButton"><i class="fa fa-microphone"></i></button>
                <button type="submit" name="submit" class="msger-send-btn"><img src="/img/api-send.png"
                        style="width:45px;"></button>
            </form>
        </section>
    </div>

    <script>
        $("#chat-circle").click(function () {
            $("#chat-circle").toggle('scale');
            $(".chat-box").toggle('scale');
        });

        $(".chat-box-toggle").click(function () {
            $("#chat-circle").toggle('scale');
            $(".chat-box").toggle('scale');
            window.speechSynthesis.cancel(); // Stop any ongoing speech synthesis when chat is closed
        });

        $(window).on("beforeunload", function () {
            window.speechSynthesis.cancel(); // Stop any ongoing speech synthesis when the page is refreshed or closed
        });

        $(function () {
            var gaurav;
            let BOT_MSGS = [];

            $('form').on('submit', function (e) {
                e.preventDefault();
                
                var isfile = $('#FileInput').val();
                var istext = $('.msger-input').val();
                // $("#FileInput").val('');
                
                if(isfile != ''){
                    var file_data = $('#FileInput').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    // alert(form_data); 
                    $.ajax({
                        type: 'post',
                        url: 'attachment.php',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function (data) {
                            gaurav = data;
                            handleGaurav(gaurav);
                            botResponse(gaurav); // Pass the API response to botResponse
                        }
                    });
                }else if(istext != ''){
                    $.ajax({
                        type: 'post',
                        // url: 'api.php',
                        url: 'attachment.php',
                        data: $('form').serialize(),
                        success: function (data) {
                            gaurav = data;
                            handleGaurav(gaurav);
                            botResponse(gaurav); // Pass the API response to botResponse
                        }
                    });
                }
                
            });

            function handleGaurav(data) {
                BOT_MSGS.push(data);
            }

            const msgerForm = document.querySelector(".msger-inputarea");
            const msgerInput = document.querySelector(".msger-input");
            const fileInput = document.querySelectorAll(".FileUpload1");
            const msgerChat = document.querySelector(".msger-chat");
            
            msgerForm.addEventListener("submit", event => {
            event.preventDefault();
                
                var isfile = $('#FileInput').val();
                if(isfile != ''){
                    // const file_data = $('#FileInput').prop('files')[0];   
                    // const form_data = new FormData();                  
                    // form_data.append('file', file_data);
                    // alert(form_data);
                    
                    // if (!form_data) return;
                    
                    var form_data = '';
                    
                    const [file] = FileInput.files
                    var msgpdf = document.getElementById('msgpdf');
                    if (file) {
                        var form_data = URL.createObjectURL(file)
                    }

                    const file11 = document.querySelector('.FileUpload1');
                    file11.value = '';
            
                    const element = document.getElementById("mycls");  // Get the DIV element
                    element.classList.remove("fa-file-pdf-o"); // Remove mystyle class from DIV
                    element.classList.add("fa-paperclip"); // Add newone class to DIV
                    element.style.color = "#1665c4";
            
                    const element2 = document.getElementById("filelabel");
                    element2.style.border = "unset";
                    

                    appendPdf(PERSON_NAME, PERSON_IMG, "right", form_data);
                    msgerInput.value = "";
                }
                
                
            });

            function appendPdf(name, img, side, pdf) {
                const msgHTML = `
                    <div class="msg ${side}-msg">
                        <div class="msg-img" style="background-image: url(${img})"></div>
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">${name}</div>
                                <div class="msg-info-time">${formatDate(new Date())}</div>
                            </div>
                            <div class="msg-pdf" id="msgpdf">
                                <object data="${pdf}" type="application/pdf" width="150" height="150">
                                    alt : <a href="${pdf}">${pdf}</a>
                                </object>
                            </div>
                        </div>
                    </div>
                `;

                msgerChat.insertAdjacentHTML("beforeend", msgHTML);
                msgerChat.scrollTop += 500;
            }
            
            
            
            

            msgerForm.addEventListener("submit", event => {
                event.preventDefault();

                const msgText = msgerInput.value;
                if (!msgText) return;
                
                appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
                msgerInput.value = "";
            });

            function appendMessage(name, img, side, text) {
                const msgHTML = `
                    <div class="msg ${side}-msg">
                        <div class="msg-img" style="background-image: url(${img})"></div>
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">${name}</div>
                                <div class="msg-info-time">${formatDate(new Date())}</div>
                            </div>
                            <div class="msg-text">${text}</div>
                            <div class="speak speack" onclick="speakText('${text}')">
                                <img src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png">
                            </div>
                        </div>
                    </div>
                `;

                msgerChat.insertAdjacentHTML("beforeend", msgHTML);
                msgerChat.scrollTop += 500;
            }

            function botResponse(msgText) {
                appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
            }

            function speakText(text) {
                const synth = window.speechSynthesis;
                const utterance = new SpeechSynthesisUtterance(text);
                synth.speak(utterance);
            }

            function formatDate(date) {
                const h = "0" + date.getHours();
                const m = "0" + date.getMinutes();
                return `${h.slice(-2)}:${m.slice(-2)}`;
            }

            var recognition;
            var mic = document.querySelector(".mic");
            var isListening = false;

            mic.addEventListener("click", function () {
                mic.classList.toggle("listening");
                toggleRecognition();
            });

            function toggleRecognition() {
                if (isListening) {
                    recognition.stop();
                } else {
                    startRecognition();
                }
                isListening = !isListening;
            }

            function startRecognition() {
                recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
                recognition.lang = 'en-US';
                recognition.interimResults = false;
                recognition.maxAlternatives = 1;

                recognition.onresult = (event) => {
                    const speechResult = event.results[0][0].transcript;
                    document.querySelector(".msger-input").value = speechResult;
                    document.querySelector(".msger-inputarea").dispatchEvent(new Event('submit'));
                    recognition.stop(); // Stop recognition after getting the result
                    isListening = false;
                    mic.classList.remove("listening");
                };

                recognition.onerror = (event) => {
                    console.error('Speech recognition error detected: ' + event.error);
                    isListening = false;
                    mic.classList.remove("listening");
                };

                recognition.start();
            }

            // Event delegation for dynamic speak buttons
            $(document).on('click', '.speak', function () {
                const text = $(this).siblings('.msg-text').text();
                speakText(text);
            });
        });

        const BOT_IMG = "https://cdn-icons-png.flaticon.com/512/10479/10479785.png";
        const PERSON_IMG = "https://cdn-icons-png.flaticon.com/512/15735/15735374.png";
        const BOT_NAME = "Technology Mindz";
        const PERSON_NAME = "ME";
    </script>

    <script>
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes();
        document.getElementById("time").innerHTML = time;
    </script>
    
    <script>
        $("#FileInput").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
                $(".filelabel i, .filelabel .title").css({'color':'#208440'});
                $(".filelabel").css({'border':' 2px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
                $(".filelabel i, .filelabel .title").css({'color':'red'});
                $(".filelabel").css({'border':' 2px solid red'});

            }
        else if(extension == 'doc' || extension == 'docx'){
            $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
            $(".filelabel i, .filelabel .title").css({'color':'#2388df'});
            $(".filelabel").css({'border':' 2px solid #2388df'});
        }
            else{
                $(".filelabel i").removeClass().addClass('fa fa-file-o');
                $(".filelabel i, .filelabel .title").css({'color':'black'});
                $(".filelabel").css({'border':' 2px solid black'});
            }

            if(fileName ){
                if (fileName.length > 10){
                    $(".filelabel .title").text(fileName.slice(0,4)+'...'+extension);
                }
                else{
                    $(".filelabel .title").text(fileName);
                }
            }
            else{
                $(".filelabel .title").text(labelVal);
            }
        });
        
        
    </script>

</body>

</html>