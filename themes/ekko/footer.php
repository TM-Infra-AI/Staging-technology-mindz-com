<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #wrapper div and all content after.
 *
 * @package ekko
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  $footer_wrapper_class = $footer_fixed_class = $link_hover_effect = $footer_active_widgets = $footer_widget_area_switch = '';

  $footer_active_widgets = is_active_sidebar( 'footer-first-widget-area' ) + is_active_sidebar( 'footer-second-widget-area' ) + is_active_sidebar( 'footer-third-widget-area' ) + is_active_sidebar( 'footer-fourth-widget-area' );

  if ( ekko_get_option( 'tek-footer-fixed' ) == '1') {
    $footer_fixed_class ='fixed';
  } else {
    $footer_fixed_class ='classic';
  }

  if ( '' != ekko_get_option( 'tek-footer-link-hover-effect' ) ) {
    $link_hover_effect = ekko_get_option( 'tek-footer-link-hover-effect' );
  } else {
    $link_hover_effect = 'default-footer-link-effect';
  }

  $footer_widget_area_switch = ekko_get_option( 'tek-upper-footer' );
  if ( !class_exists( 'ReduxFramework' ) ) {
    $footer_widget_area_switch = 1;
  }

  $footer_wrapper_class = implode(' ', array($footer_fixed_class, $link_hover_effect));
?>

</div>
	

<footer id="footer" class="<?php echo esc_attr( $footer_wrapper_class ); ?>">
  <div class="upper-footer">
    <div class="container">
      <?php if( ekko_get_option( 'tek-footer-bar' ) == 1 ) : ?>
        <div class="footer-bar <?php if ( ekko_get_option( 'tek-upper-footer' ) == "0") { echo " no-upper-footer"; } ?>">
          <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
            <div class="footer-nav-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'navbar-footer', 'fallback_cb' => 'false' ) ); ?>
            </div>
          <?php endif; ?>
          <?php if( class_exists( 'ReduxFramework' ) ) : ?>
            <div class="footer-socials-bar">
                <?php echo do_shortcode('[social_profiles]'); ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ( $footer_widget_area_switch == "1" ) : ?>
        <?php if( $footer_active_widgets >= "1" ) : ?>
          <div class="footer-widget-area">
            <?php get_sidebar( 'footer' ); ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="lower-footer">
    <div class="container">
       <span>
         <?php /* ekko_footer_copyright(); */?>
         Copyright © 2025 Technology Mindz, All rights reserved
       </span>
   </div>
  </div>
</footer>

    <!-- Image Popup Modal -->
    <div id="imageModal" class="modal">
        <span class="close">
            <!-- SVG for the close (cross) icon -->
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 72 72"
                style="fill:#FFFFFF;">
                <path d="M 19 15 C 17.977 15 16.951875 15.390875 16.171875 16.171875 C 14.609875 17.733875 14.609875 20.266125 16.171875 21.828125 L 30.34375 36 L 16.171875 50.171875 C 14.609875 51.733875 14.609875 54.266125 16.171875 55.828125 C 16.951875 56.608125 17.977 57 19 57 C 20.023 57 21.048125 56.609125 21.828125 55.828125 L 36 41.65625 L 50.171875 55.828125 C 51.731875 57.390125 54.267125 57.390125 55.828125 55.828125 C 57.391125 54.265125 57.391125 51.734875 55.828125 50.171875 L 41.65625 36 L 55.828125 21.828125 C 57.390125 20.266125 57.390125 17.733875 55.828125 16.171875 C 54.268125 14.610875 51.731875 14.609875 50.171875 16.171875 L 36 30.34375 L 21.828125 16.171875 C 21.048125 15.391875 20.023 15 19 15 z"></path>
            </svg>
        </span>
        <img class="modal-content" id="modalImage">
    </div>
<?php /* Back to top button template */ ?>
<?php if ( ekko_get_option( 'tek-backtotop' ) == "1") : ?>
    <div class="back-to-top">
       <i class="fa fa-angle-up"></i>
    </div>
<?php endif; ?>
<?php /* END Back to top button template */ ?>

<?php if ( ekko_get_option( 'tek-header-button-action' ) == '1' ) : ?>
  <?php get_template_part( 'core/templates/header/content', 'modal-box' ); ?>
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-panel-button-action' ) == '1' ) : ?>
  <?php get_template_part( 'core/templates/header/content', 'side-panel' ); ?>
<?php endif; ?>

<?php wp_footer(); ?>

<script>
	
jQuery(".certificate-view-more-btn").click(function(){
  jQuery(".certificate-logo-row-2").addClass("show");
	  jQuery(this).addClass("hide");
	jQuery(".certificate-view-more-btn-2").addClass("show");
});
	jQuery(".certificate-view-more-btn-2").click(function(){
  jQuery(".certificate-logo-row-3").addClass("show");
		jQuery(this).addClass("hide");
});
jQuery(document).ready(function(){
    jQuery(".certificate-view-more-btn").each(function(){
      jQuery(this).removeAttr("href");
    });
	jQuery(".certificate-view-more-btn-2").each(function(){
      jQuery(this).removeAttr("href");
    });
});
</script>



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
                        url: '/api/attachment.php',
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
                        url: '/api/attachment.php',
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
    
    <script>
         var modal = document.getElementById("imageModal");
            var img = document.getElementById("popupImage");
            var modalImg = document.getElementById("modalImage");
            
            function showPopupImage() {
                modal.style.display = "block";
                modalImg.src = img.src; 
            }
            
            img.onclick = function() {
                showPopupImage();
            };
            
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                modal.style.display = "none";
            };
            
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
            
            var tab3 = document.getElementById("tab3"); 
            tab3.addEventListener('change', function() {
                if (this.checked) {
                    showPopupImage();
                }
            });
    </script>
    
<script>
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".cardsAI");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-view");
      }
    });
  }, {
    threshold: 0.3
  });

  cards.forEach(card => {
    observer.observe(card);
  });
});
    </script>
    
    <script>
$(document).ready(function() {
  $('#cloned').append($('#cloned div').clone());

  TweenMax.to($('#cloned'), 20, {  // ← Slowed from 5 to 20 seconds
    x: -($('#cloned').width() / 2),
    repeat: -1,
    ease: Power0.easeNone
  });
});

    </script>
// <script>
//     const copy = document.querySelector(".logos-slide").cloneNode(true);
// document.querySelector(".logos").appendChild(copy);
// </script>





 

<script>
  const tiltBox = document.getElementById('tiltBox');

  tiltBox.addEventListener('mousemove', (e) => {
    const box = tiltBox.getBoundingClientRect();
    const x = e.clientX - box.left;
    const y = e.clientY - box.top;

    const centerX = box.width / 2;
    const centerY = box.height / 2;

    const rotateX = ((y - centerY) / centerY) * 10;
    const rotateY = ((x - centerX) / centerX) * 10;

    tiltBox.style.transform = `rotateX(${-rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
  });

  tiltBox.addEventListener('mouseleave', () => {
    tiltBox.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
  });
</script>





    <script src="<?php bloginfo('template_directory'); ?>/api/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

</body>
</html>
