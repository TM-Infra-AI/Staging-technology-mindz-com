


$("#nextSecPage").click(function () {
    $("#fistPage").hide();
    $("#secondPage").show();
});
$("#backfirst").click(function () {
    $("#secondPage").hide();
    $("#fistPage").show();
});

$("#nextthirdPage").click(function () {
    $("#secondPage").hide();
    $("#thirdPage").show();
});
$("#backcsecondPage").click(function () {
    $("#thirdPage").hide();
    $("#secondPage").show();
});

$("#nextfourthPage").click(function () {
    $("#thirdPage").hide();
    $("#fourthPage").show();
});
$("#backthirdPage").click(function () {
    $("#fourthPage").hide();
    $("#thirdPage").show();
});

$("#nextfivthPage").click(function () {
    $("#fourthPage").hide();
    $("#fivthPage").show();
});
$("#backfourthPage").click(function () {
    $("#fivthPage").hide();
    $("#fourthPage").show();
});

$("#nextsixPage").click(function () {
    $("#fivthPage").hide();
    $("#sixpage").show();
});
$("#backfivePage").click(function () {
    $("#sixpage").hide();
    $("#fivthPage").show();
});

$("#nextsevenPage").click(function () {
    $("#sixpage").hide();
    $("#sevenpage").show();
});
$("#backsixPage").click(function () {
    $("#sevenpage").hide();
    $("#sixpage").show();
});

$("#nexteightpage").click(function () {
    $("#sevenpage").hide();
    $("#eightpage").show();
});
$("#backsevenPage").click(function () {
    $("#eightpage").hide();
    $("#sevenpage").show();
});

$("#nextninepage").click(function () {
    $("#eightpage").hide();
    $("#ninepage").show();
});
$("#backeightPage").click(function () {
    $("#ninepage").hide();
    $("#eightpage").show();
});


document.getElementById('wizard').addEventListener('submit', function (e) {
    e.preventDefault(); // Form submit hone se roko

    // Get input values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const pageUrl = window.location.href; // Get current page URL
    const redirect = document.getElementById('liveFormSubmitRedirectURL').value.trim();

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

    // Name Validation
    let nameField = document.getElementById("name");
    let nameError = document.getElementById("name-error");
    let nameRegex = /^[A-Za-z\s]{1,50}$/;
    if (!nameRegex.test(nameField.value.trim())) {
        nameError.textContent = "Please enter a valid name (only letters, max 50 characters).";
        isValid = false;
    } else {
        nameError.textContent = "";
    }

    // Phone Number Validation
    let phoneField = document.getElementById("phone");
    let phoneError = document.getElementById("phone-error");
    let phoneRegexx = /^\d{10}$/;
    if (!phoneRegexx.test(phoneField.value.trim())) {
        phoneError.textContent = "Please enter a valid 10-digit phone number.";
        isValid = false;
    } else {
        phoneError.textContent = "";
    }

    // Email Validation
    let emailField = document.getElementById("email");
    let emailError = document.getElementById("email-error");
    let emailRegexx = /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/;
    let fakeEmailDomains = ["example.com", "test.com", "fake.com", "tempmail.com", "mailinator.com"];
    let emailDomain = emailField.value.split("@")[1];
    if (!emailRegexx.test(emailField.value.trim()) || fakeEmailDomains.includes(emailDomain)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    } else {
        emailError.textContent = "";
    }

    // If validation fails, stop execution
    if (!isValid) return;

    // Send data using AJAX
    const formData = new FormData();
    formData.append('action', 'submit_form_ajax'); // WP AJAX action
    formData.append('name', name);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('page_url', pageUrl); // Append page URL

    fetch(ajax_object.ajax_url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                $('.success_msg').html(data.data.message);
                document.getElementById('wizard').reset();
                // window.location.replace(redirect);
                window.open(redirect, '_blank');
            }
        })
        .catch(error => console.error('Error:', error));
});




var modal = document.getElementById("imageModal");
var img = document.getElementById("popupImage");
var modalImg = document.getElementById("modalImage");

function showPopupImage() {
    modal.style.display = "block";
    modalImg.src = img.src;
}

img.onclick = function () {
    showPopupImage();
};

var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

var tab3 = document.getElementById("tab3");
tab3.addEventListener('change', function () {
    if (this.checked) {
        showPopupImage();
    }
});




$("#nextcallPage").click(function () {
    $("#fistDashboard").hide();
    $("#callPage").show();
});
$("#backdashboard").click(function () {
    $("#callPage").hide();
    $("#fistDashboard").show();
});
$("#nextBotfirst").click(function () {
    $("#callPage").hide();
    $("#firstBotPage").show();
});
$("#backfirstbotP").click(function () {
    $("#firstBotPage").hide();
    $("#callPage").show();
});

$("#nextBotsecond").click(function () {
    $("#firstBotPage").hide();
    $("#SecondBotPage").show();
});
$("#backSecbotP").click(function () {
    $("#SecondBotPage").hide();
    $("#firstBotPage").show();
});

$("#nextpreformance").click(function () {
    $("#SecondBotPage").hide();
    $("#dasborardpreformance").show();
});
$("#backthirdbotP").click(function () {
    $("#dasborardpreformance").hide();
    $("#SecondBotPage").show();
});

$("#nextcallPage").click(function () {
    $("#fistDashboard").hide();
    $("#callPage").show();
});
$("#backdashboard").click(function () {
    $("#callPage").hide();
    $("#fistDashboard").show();
});
$("#nextBotfirst").click(function () {
    $("#callPagesec").hide();
    $("#firstBotPage").show();
});
$("#backfirstbotP").click(function () {
    $("#firstBotPage").hide();
    $("#callPagesec").show();
});

$("#nextBotsecond").click(function () {
    $("#firstBotPage").hide();
    $("#SecondBotPage").show();
});
$("#backSecbotP").click(function () {
    $("#SecondBotPage").hide();
    $("#firstBotPage").show();
});

$("#nextpreformance").click(function () {
    $("#SecondBotPage").hide();
    $("#dasborardpreformance").show();
});
$("#backthirdbotP").click(function () {
    $("#dasborardpreformance").hide();
    $("#SecondBotPage").show();
});








$("#nextcallPage2").click(function () {
    $("#fistDashboard2").hide();
    $("#callPage2").show();
});
$("#backdashboard2").click(function () {
    $("#callPage2").hide();
    $("#fistDashboard2").show();
});

$("#nextcalltrfir2").click(function () {
    $("#callPage2").hide();
    $("#callPagesec2").show();
});
$("#backcalltrfir2").click(function () {
    $("#callPagesec2").hide();
    $("#callPage2").show();
});


$("#nextBotfirst2").click(function () {
    $("#callPagesec2").hide();
    $("#firstBotPage2").show();
});
$("#backfirstbotP2").click(function () {
    $("#firstBotPage2").hide();
    $("#callPagesec2").show();
});

$("#nextBotsecond2").click(function () {
    $("#firstBotPage2").hide();
    $("#SecondBotPage2").show();
});
$("#backSecbotP2").click(function () {
    $("#SecondBotPage2").hide();
    $("#firstBotPage2").show();
});
