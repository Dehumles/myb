<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6 footer-contact">
          <h4>Kontakt</h4>
          <p>
              B. Makovec Transport D.O.O. <br>
              Tovarniška Cesta 6b<br>
              5270 Ajdovščina, Slovenija <br><br>
              <strong>Phone:</strong> +386 366 40 10 <br>
              <strong>Email:</strong> info@transmakovec.si <br>
          </p>
      </div>
      
      <div class="col-lg-6 col-md-6">
          <section class="map">
              <div class="container-fluid p-0">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.378113243607!2d13.8983874!3d45.8837503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477b193b3793345f%3A0xd4065db978f47ece!2sB.%20Makovec%20Transport%20D.O.O.!5e0!3m2!1ssl!2ssi!4v1696254106247!5m2!1ssl!2ssi" frameborder="0" style="border:0; width: 100%; height: 250px;" allowfullscreen=""></iframe>
              </div>
          </section><!-- End Map Section -->
      </div>
      


        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>TBMAKOVEC</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

  <!-- Chatbot Trigger Button -->
<div id="chatbot-button" class="chatbot-button">
  <button onclick="openChat()">Ask me anything!</button>
</div>

<!-- Chatbot Window -->
<div id="chatbot-window" class="chatbot-window" style="display:none;">
  <div id="chatbot-header">
    <h4>Chat with us</h4>
    <button onclick="closeChat()">Close</button>
  </div>
  <div id="chatbot-messages"></div>
  <div id="chatbot-input-container">
    <input type="text" id="chatbot-input" placeholder="Type your message...">
    <button id="chatbot-send-button" onclick="sendMessage()">Send</button>
  </div>
</div>

<style>
/* Basic styles for chatbot */
.chatbot-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
}

.chatbot-window {
  position: fixed;
  bottom: 80px;
  right: 20px;
  width: 300px;
  height: 400px;
  background-color: white;
  border: 1px solid #ccc;
  display: flex;
  flex-direction: column;
}

#chatbot-header {
  background-color: #004a7c;
  color: white;
  padding: 10px;
}

#chatbot-messages {
  flex: 1;
  padding: 10px;
  overflow-y: auto;
  background-color: #f0f0f0; /* Light grey background */
}

#chatbot-messages p {
  color: #000; /* Set text color to black */
  margin: 5px 0; /* Optional: Add some spacing between messages */
}

#chatbot-input-container {
  display: flex;
}

#chatbot-input {
  border: 1px solid #ccc;
  padding: 10px;
  flex: 1;
}

#chatbot-send-button {
  padding: 10px;
}


</style>


</footer>


<script>
  function sendMessage() {
    const messageInput = document.getElementById('chatbot-input');
    const userMessage = messageInput.value.trim();
    const messagesContainer = document.getElementById('chatbot-messages');

    if (userMessage === "") return; // Do nothing if the input is empty

    // Display the user's message in the chat window
    const userMessageElement = document.createElement('p');
    userMessageElement.innerHTML = `<strong>You:</strong> ${userMessage}`;
    messagesContainer.appendChild(userMessageElement);
    messageInput.value = ''; // Clear input field

    // Scroll to the bottom after adding the new message
    messagesContainer.scrollTop = messagesContainer.scrollHeight;

    // Send the message to the PHP backend (chatbot.php)
    fetch('chatbot.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ userMessage: userMessage })
    })
    .then(response => response.json())
    .then(data => {
      if (data.completion) {
        // Display the AI's or FTL price calculation response in the chat window
        const aiMessageElement = document.createElement('p');
        aiMessageElement.innerHTML = `<strong>AI:</strong> ${data.completion}`;
        messagesContainer.appendChild(aiMessageElement);
      } else {
        // Handle case where AI response is not available
        const errorMessage = document.createElement('p');
        errorMessage.innerHTML = `<strong>AI:</strong> Sorry, I could not process your request.`;
        messagesContainer.appendChild(errorMessage);
      }
      messagesContainer.scrollTop = messagesContainer.scrollHeight; // Scroll to the bottom
    })
    .catch(error => {
      console.error('Error:', error);
      // Handle errors
      const errorMessage = document.createElement('p');
      errorMessage.innerHTML = `<strong>Error:</strong> Something went wrong. Please try again.`;
      messagesContainer.appendChild(errorMessage);
    });
  }

  function openChat() {
    const messagesContainer = document.getElementById('chatbot-messages');
    document.getElementById('chatbot-window').style.display = 'block';

    // Initial greeting message in Slovenian
    const greetingMessage = `<p><strong>AI:</strong> Pozdravljeni. Vprašate me lahko karkoli v povezavi z transportom in storitvami podjetja B. Makovec. 
    <br> Lahko vam pomagam pri:<br>
    - Tranzitnih časih<br>
    - Okvirnih cenah prevozov<br>
    - Posredovanje kontaktov zaposlenih</p>`;
    
    messagesContainer.innerHTML += greetingMessage;
  }
</script>



