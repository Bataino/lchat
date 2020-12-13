
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body onload="load()">
    <script>
      function load(){
        location.href = '#mobile-widget';
      }
    </script>
    <script src="https://widget-v4.tidiochat.com//1_45_0/static/js/widget.66f097c8c651f346d9e7.js" async></script>
      <!-- Swap your javascript code above -->
     <script>
         (function() {
          function onTidioChatApiReady() {
            (function() {
                window.tidioChatApi.open();
            })();
          }
          if (window.tidioChatApi) {
            window.tidioChatApi.on("ready", onTidioChatApiReady);
          } else {
            document.addEventListener("tidioChat-ready", onTidioChatApiReady);
          }
        })();
      </script>
  </body>
</html>

