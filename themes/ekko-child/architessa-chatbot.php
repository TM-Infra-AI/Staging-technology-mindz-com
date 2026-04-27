<?php
/*
Template Name: Architessa chatbot
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/fontawesome.min.css" integrity="sha512-J2Gce+WmOttffHOrVKLTlzxIalPXUMDbSfn5ADqp8Vj9EngnjNHr+jjiL3ZB8muEzo+K51gU10X+0eGqGNL7QA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }



.chatbot-footer .msger {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            min-height: 483px;
            height: 483px;
            max-height: 483px;
            min-width: 350px;
            width: 350px;
            max-width: 350px;
            margin: 0px auto 0 auto;
            border-radius: 5px;
            background: var(--msger-bg);
            box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
        }

        .chatbot-footer .msger-header {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            border-bottom: var(--border);
            background: #00344f !important;
            border-radius: 5px 5px 0 0;
        }

        .chatbot-footer .msger-chat {
            flex: 1;
            overflow-y: auto;
            padding: 10px 15px;
        }

        .chatbot-footer .msger-chat::-webkit-scrollbar {
            width: 6px;
        }

        .chatbot-footer .msger-chat::-webkit-scrollbar-track {
            background: #ddd;
        }

        .chatbot-footer .msger-chat::-webkit-scrollbar-thumb {
            background: #bdbdbd;
        }

        .chatbot-footer .msg {
            display: flex;
            align-items: flex-end;
            margin-bottom: 20px;
        }

        .chatbot-footer .msg:last-of-type {
            margin: 0;
        }

        .chatbot-footer .msg-img {
            background: #ddd;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .chatbot-footer .msg-bubble {
            min-width:60px;
            max-width: 220px !important;
            position: relative;
        }

        .chatbot-footer .msg-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .chatbot-footer .msg-text{
            padding: 15px;
            border-radius: 0 10px 10px 10px;
            background: #fff;
        }

        .chatbot-footer .msg-info-name {
            margin-right: 10px;
        }

        .chatbot-footer .msg-info-time {
            font-size: 0.85em;
            display:none;
        }
        .right-msg .msg-info{
                justify-content: end;
        }
        .right-msg .msg-info .msg-info-name{
            margin-right:0;
        }

        .chatbot-footer .left-msg .msg-bubble {
            border-bottom-left-radius: 0;
        }

        .chatbot-footer .right-msg {
            flex-direction: row-reverse;
        }

        .chatbot-footer .right-msg .msg-bubble .msg-text{
            background: #fff;
            color: #000;
            border-radius: 10px 0 10px 10px;
        }

        .chatbot-footer .right-msg .msg-img {
            margin: 0 0 0 10px;
        }

        .chatbot-footer .msger-inputarea {
            display: flex;
            padding: 10px;
            border-top: var(--border);
            background: #fff !important;
            border-radius: 0 0 5px 5px;
        }

        .chatbot-footer .msger-inputarea * {
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 1em;
        }
        .chatbot-footer .input.msger-input:focus-visible{
            border: 0px;
            outline: 0px;
        }
        .chatbot-footer .msger-input {
            flex: 1;
            background: #fff;
            border-radius: 5px;
            height: 45px;
            font-weight:500;
        }

        .chatbot-footer .msger-send-btn {
            margin-left: 10px;
            background: transparent;
            color: #00344f !important;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.23s;
            padding: 0 5px;
            height: 45px;
            border-radius: 5px;
        }
        .chatbot-footer .msger-send-btn i{
            font-size: 1.2rem;
        }
        /*.msger-send-btn:hover {*/
        /*    background: #fcfcfe;*/
        /*}*/

        .chatbot-footer .msger-chat {
            background-color: rgba(229,231,235);
        }
        .chatbot-footer .chat-box {
            display: none;
            background: #efefef;
            border-radius: 5px;
            box-shadow: 0px 5px 35px 9px #464a92;
/*             box-shadow: 0px 5px 35px 9px #ccc; */


            outline: none !important;
            visibility: visible !important;
            resize: none !important;
            overflow: visible;
            opacity: 1;
            inset: auto 10px 90px auto !important;
            position: fixed !important;
            right: 20px !important;
            border: 0px !important;
            min-height: 483px !important;
            min-width: 350px !important;
            max-height: 483px !important;
            max-width: 350px !important;
            padding: 0px;
            margin: 0px;
			bottom:20px !important;
        }
          .chatbot-footer #chat-overlay {
              background: rgba(255,255,255,0.1);
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              border-radius: 50%;
              display: none;
          
          }
          .chatbot-footer #chat-circle {
            position: fixed;
            display: grid;
            bottom: 20px;
            right: 20px;
            background: #00344f;
            border-radius: 50%;
            color: white;
            padding: 20px;
            cursor: pointer;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.6), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            width: 65px;
            height: 65px !important;
          }
          .chatbot-footer .mic {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            color: #00344f;
            font-size: 22px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            margin-right: 0px;
            transition: background-color 0.25s;
            background: transparent;
            margin-left: 10px;
          }
          
          .chatbot-footer .mic::before {
            content: "";
            position: absolute;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            background-color: inherit;
            z-index: -1;
          }
          .chatbot-footer .msger-send-btn {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            color: #00344f;
            font-size: 22px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            margin-right: 0px;
            transition: background-color 0.25s;
            background: transparent;
          }
          
          .chatbot-footer .msger-send-btn::before {
            content: "";
            position: absolute;
            width: inherit;
            height: inherit;
            border-radius: inherit;
            background-color: inherit;
            z-index: -1;
          }
          
          /*.listening {*/
          /*  background-color: #78d5ff;*/
          /*}*/
          .chatbot-footer .listening::before {
            animation: listening 1.3s infinite;
          }
          
          @keyframes listening {
            from {
              opacity: 0.25;
            }
            to {
              transform: scale(2);
              opacity: 0;
            }
          }
          .chatbot-footer .msger-header-options i{
            color: #fff;
            font-size: 1.6rem;
          }
          .chatbot-footer .msger-header-options{
            display: flex;
            align-items: center;
            padding: 0px 5px;
            cursor: pointer;
          }
          .chatbot-footer .msg.left-msg .speack{
                position: absolute;
                top: 0;
                right: 0;
                background: #fff;
                padding: 8px;
                border-radius: 50%;
                cursor: pointer;
                height: 31px;
                margin-right: -38px;
                display:flex;
          }
          .chatbot-footer .msg.right-msg .speack{
            position: absolute;
            top: 0;
            left: 0%;
            background: #fff;
            padding: 8px;
            border-radius: 50%;
            cursor: pointer;
            height: 31px;
            margin-left: -38px;
            display:flex;
          }
          .chatbot-footer .speack img{
              width:15px;
          }
          .chatbot-footer .msger-chat,
          .chatbot-footer .msger-inputarea,
          .chatbot-footer .msger-header{
            width: 100%;
          }
          
          
          
          
          /* 17-07-2024 css  */
          
          
          
          .chatbot-footer .msger-inputarea .msger-input:focus-visible {
                outline: 0px !important;
                border: 0px !important;
          }
          .chatbot-footer .listening {
                background: #027ad9;
                color:#fff;
                transition: background-color 0.25s;
            }
            .chatbot-footer .msg-text{
               word-break: break-word;
            }
         .chatbot-footer .filelabel {
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
.chatbot-footer .filelabel i {
    display: block;
    font-size: 22px;
    padding: 12px 7px 5px 7px;
}
.chatbot-footer .filelabel i,
.chatbot-footer .filelabel .title {
  color: #1665c4;
  transition: 200ms color;
}
/*.filelabel:hover {*/
/*  border: 2px solid #1665c4;*/
/*}*/
.chatbot-footer .filelabel:hover i,
.chatbot-footer .filelabel:hover .title {
  color: #1665c4;
}
.chatbot-footer #FileInput{
    display:none;
}
.msger-inputarea .mic .fa{
	color:#1665c4 !important;
}

.chatbot-footer{
	z-index: 9999999999 !important;
}


@media only screen and (max-width: 1396px) and (min-width: 1200px) {
	.chatbot-footer .chat-box .msger,
	.chatbot-footer .chat-box{
		height:400px !important;
		min-height:400px !important;
		max-height:400px !important;
	}
	
}

@media only screen and (max-width: 1200px) and (min-width: 991px) {
	.chatbot-footer .chat-box .msger,
	.chatbot-footer .chat-box{
		height:300px !important;
		min-height:300px !important;
		max-height:300px !important;
	}
	
}
@media only screen and (max-width: 990px) and (min-width: 768px) {
	.chatbot-footer .chat-box .msger,
	.chatbot-footer .chat-box{
		height:400px !important;
		min-height:400px !important;
		max-height:400px !important;
	}
}
.msger-inputarea button i{
    padding: 0 !important;
}
    </style>
</head>
<body>
    
     <div class="chatbot-footer" style="    position: fixed;z-index: 999999;">
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
              <img src="https://architessa.com/cdn/shop/files/Architessa_Navy_one_line_410x.png?v=1654539381" alt="" style="filter: invert(100%) brightness(200%); width:160px;">
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
                  <div class="msg-info-name">Architessa AI Agent</div>
                  <div class="msg-info-time" id="time"></div>
                </div>

                <div class="msg-text">Welcome to Architessa! I'm here to provide you with information about our company, services, and how we can help you. What would you like to know today?
                </div>
                <div class="speack speak" id="speakButton"><img
                    src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png"></div>
              </div>
            </div>

          </main>

          <form class="msger-inputarea">
           <input type="text" name="text" id="chatBoxInputText" class="msger-input" placeholder="Type your message" style="padding: 0px;">
           <!-- <label class="filelabel" id="filelabel">
             <i class="fa fa-paperclip" id="mycls"></i>
             <input class="FileUpload1" id="FileInput" name="attachment" type="file" />
           </label> -->
            <input type="hidden" name="guid" class="guid" value="">
           <button type="button" class="mic" id="speakButton"><i class="fa-solid fa-microphone"></i></button>
           <button type="submit" name="submit" class="msger-send-btn" style="padding: 0px; margin-left:0px;">
                <!-- <img src="https://technologymindz.com/wp-content/uploads/2025/03/api-send.png"
                style="width:45px;"> -->
                <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
        </section>
      </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/js/fontawesome.min.js" integrity="sha512-QPVPxxncZwuT317gBTFFlXTykloTFA4jnd5j/aFco+Nd/0eqFsp/zGdhjuwkRoiPMsjvkjHkp0DGRPBxF+d3Pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        
        
        $(window).on("load", function () {
            min = Math.ceil(1000);
            max = Math.floor(9999);
            let randId = Math.floor(Math.random() * (max - min + 1) + min);
            $('.guid').val(randId);
        });
        
        $('#FileInput').on( 'change', function() {
            myfile= $( this ).val();
           var ext = myfile.split('.').pop();
           if(ext=="pdf" ){
               
           } else{
               $('#FileInput').val('');
               alert('Only pdf file is allowed');
           }
        });

        $(function () {
            var gaurav;
            let BOT_MSGS = [];

            $('form').on('submit', function (e) {
                e.preventDefault();
                
                var isfile = $('#FileInput').val();
                var istext = $('.msger-input').val();
                var guid = $(".guid").val();
                
                if(isfile != ''){
                    var file_data = $('#FileInput').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    // alert(form_data); 
                    $.ajax({
                        type: 'post',
                        url: '/architessa-API/attachment.php',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(this),
                        // data: form_data,                         
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
                        url: '/architessa-API/attachment.php',
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
    const synth = window.speechSynthesis;
    const img = $(this).find('img'); // ← Get the image inside the clicked .speak

    // Stop speech if it's currently speaking
    if (synth.speaking) {
        synth.cancel();
        img.attr("src", "https://cdn-icons-png.flaticon.com/512/6996/6996058.png");
    } else {
        const text = $(this).siblings('.msg-text').text();
        if (text.trim() !== "") {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.onend = function () {
                img.attr("src", "https://cdn-icons-png.flaticon.com/512/6996/6996058.png");
            };
            synth.speak(utterance);
            img.attr("src", "https://cdn-icons-png.flaticon.com/512/727/727240.png");
        }
    }
});

        });

        const BOT_IMG = "https://cdn-icons-png.flaticon.com/512/10479/10479785.png";
        const PERSON_IMG = "https://cdn-icons-png.flaticon.com/512/15735/15735374.png";
        const BOT_NAME = "Architessa AI Agent";
        const PERSON_NAME = "You";
    </script>

</body> 
</html>