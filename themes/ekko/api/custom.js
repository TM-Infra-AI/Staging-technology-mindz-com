$(function () {
  var gaurav;
  let BOT_MSGS = [];

  $('form').on('submit', function (e) {
    e.preventDefault();
    
    $.ajax({
      type: 'post',
      url: 'api.php',
      data: $('form').serialize(),
      success: function(data) {
        gaurav = data;
        handleGaurav(gaurav);
        botResponse(gaurav); // Pass the API response to botResponse
      }
    });
  });

  // Function to handle gaurav variable
  function handleGaurav(data) {
    BOT_MSGS.push(data);
    // console.log('bot-msgdata', BOT_MSGS);
  }

  const msgerForm = document.querySelector(".msger-inputarea");
  const msgerInput = document.querySelector(".msger-input");
  const msgerChat = document.querySelector(".msger-chat");

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
        <div class="speack" id="speakButton"><img src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png"></div>
        </div>
      </div>
    `;

    msgerChat.insertAdjacentHTML("beforeend", msgHTML);
    msgerChat.scrollTop += 500;
  }

  function botResponse(msgText) {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }

  // Speak the provided text
  function speakText(text) {
    const synth = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    synth.speak(utterance);
  }

  // Event listener for speaking button
  document.getElementById('speakButton').addEventListener('click', function() {
    const lastMsg = BOT_MSGS[BOT_MSGS.length - 1];
    if (lastMsg) {
      speakText(lastMsg);
    }
  });

  // Utils
  function formatDate(date) {
    const h = "0" + date.getHours();
    const m = "0" + date.getMinutes();
    return `${h.slice(-2)}:${m.slice(-2)}`;
  }
});

const BOT_IMG = "https://cdn-icons-png.flaticon.com/512/10479/10479785.png";
const PERSON_IMG = "https://cdn-icons-png.flaticon.com/512/15735/15735374.png";
const BOT_NAME = "Technology Mindz";
const PERSON_NAME = "Gaurav";