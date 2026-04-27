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

 document.getElementById('wizard').addEventListener('submit', function (e) {
                // Get input values
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
        
                // Regular expressions for validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const phoneRegex = /^[0-9]+$/;
        
                // Clear previous error messages
                document.getElementById('name-error').innerText = '';
                document.getElementById('email-error').innerText = '';
                document.getElementById('phone-error').innerText = '';
        
                // Validation checks
                let isValid = true;
        
                if (name === '') {
                    document.getElementById('name-error').innerText = 'Name is required';
                    isValid = false;
                }
        
                if (!emailRegex.test(email)) {
                    document.getElementById('email-error').innerText = 'Please enter a valid email';
                    isValid = false;
                }
        
                if (!phoneRegex.test(phone)) {
                    document.getElementById('phone-error').innerText = 'Please enter a valid phone number';
                    isValid = false;
                }
        
                // If any field is invalid, prevent the form submission
                if (!isValid) {
                    e.preventDefault();
                }
            });
                   $("#nextSecPage").click(function(){
                $("#fistPage").hide();
                $("#secondPage").show();
            }); 
            $("#backfirst").click(function(){
                $("#secondPage").hide();
                $("#fistPage").show();
            }); 
    
            $("#nextthirdPage").click(function(){
                $("#secondPage").hide();
                $("#thirdPage").show();
            }); 
            $("#backcsecondPage").click(function(){
                $("#thirdPage").hide();
                $("#secondPage").show();
            });
    
            $("#nextfourthPage").click(function(){
                $("#thirdPage").hide();
                $("#fourthPage").show();
            }); 
            $("#backthirdPage").click(function(){
                $("#fourthPage").hide();
                $("#thirdPage").show();
            });
    
            $("#nextfivthPage").click(function(){
                $("#fourthPage").hide();
                $("#fivthPage").show();
            }); 
            $("#backfourthPage").click(function(){
                $("#fivthPage").hide();
                $("#fourthPage").show();
            });
            
            $("#nextsixPage").click(function(){
                $("#fivthPage").hide();
                $("#sixpage").show();
            }); 
            $("#backfivePage").click(function(){
                $("#sixpage").hide();
                $("#fivthPage").show();
            });
    
            $("#nextsevenPage").click(function(){
                $("#sixpage").hide();
                $("#sevenpage").show();
            }); 
            $("#backsixPage").click(function(){
                $("#sevenpage").hide();
                $("#sixpage").show();
            });
    
            $("#nexteightpage").click(function(){
                $("#sevenpage").hide();
                $("#eightpage").show();
            }); 
            $("#backsevenPage").click(function(){
                $("#eightpage").hide();
                $("#sevenpage").show();
            });
            
             $("#nextninepage").click(function(){
                $("#eightpage").hide();
                $("#ninepage").show();
            }); 
            $("#backeightPage").click(function(){
                $("#ninepage").hide();
                $("#eightpage").show();
            });
            
            
            
            
            
            
            