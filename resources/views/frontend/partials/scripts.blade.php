
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend_assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
  <!-- chatbot main js File -->
  <script type="text/javascript" src="{{ asset('chatbot/chatbot.js') }}"></script>
  <script> createChatBot(host = 'https://rasa-theamineguesmi.cloud.okteto.net/webhooks/rest/webhook', botLogo = "https://cdn3.iconfinder.com/data/icons/chat-bot-emoji-filled-color/300/35618308Untitled-3-512.png", title = "CHAT ", welcomeMessage = "Hey, i am DoctorSina Bot ", inactiveMsg = "Server is down, Please contact the developer to activate it ", theme="blue ") </script>;
