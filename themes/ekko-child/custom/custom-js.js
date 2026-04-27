jQuery(document).ready(function($) {
  // AJAX request to handle form submission
  $('.msger-inputarea').submit(function(e) {
 
      e.preventDefault();
      var userMessage = $('.msger-input').val().trim(); // Get the value of the input field
      if (userMessage === '') return; // If input is empty, do nothing
      appendMessage('user', userMessage);
      sendUserMessage(userMessage);
      // Clear the input field after sending the message
      $('.msger-input').val('');
  });

  // Function to send user message to server for processing
  function sendUserMessage(message) {
      $.ajax({
          type: 'POST',
          url: chatVariables.ajax_url,
          data: {
              action: 'process_gpt3_request',
              text: message // Send the user's message
          },
          success: function(response) {
              // Display the response from the server
              if (response.success) {
                  appendMessage('assistant', response.data);
              } else {
                  console.error('Error:', response.data);
              }
          },
          error: function(xhr, status, error) {
              console.error(xhr.responseText);
          }
      });
  }

  // Function to append messages to the chat window
  function appendMessage(role, content) {
      var messageClass = (role === 'assistant') ? 'left-msg' : 'right-msg';
      var msg =
          '<div class="msg ' + messageClass + '">' +
          '<div class="msg-img" style="background-image: url(' + chatVariables[role + '_img'] + ')"></div>' +
          '<div class="msg-bubble">' +
          '<div class="msg-info">' +
          '<div class="msg-info-name">' + chatVariables[role + '_name'] + '</div>' +
          '<div class="msg-info-time">' + getCurrentTime() + '</div>' +
          '</div>' +
          '<div class="msg-text">' + content + '</div>' +
          '</div>' +
          '</div>';
      $('.msger-chat').append(msg);
      // Scroll to the bottom of the chat window
      $('.msger-chat').scrollTop($('.msger-chat')[0].scrollHeight);
  }

  // Function to get the current time
  function getCurrentTime() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12; // the hour '0' should be '12'
      minutes = minutes < 10 ? '0' + minutes : minutes;
      var strTime = hours + ':' + minutes + ' ' + ampm;
      return strTime;
  }

  // Function to speak the response
  function speak(text) {
      if ('speechSynthesis' in window) {
          var synth = window.speechSynthesis;
          var utterance = new SpeechSynthesisUtterance(text);
          synth.speak(utterance);
      } else {
          console.error('Speech synthesis not supported in this browser.');
      }
  }

  // Event listener for the "speak" button
  $('#speakButton').click(function() {
      var lastMessage = $('.msg.left-msg').last().find('.msg-text').text();
      speak(lastMessage);
  });
});
