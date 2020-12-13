
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body onload="load()">
    <script>
      function load(){
        //location.href = '#mobile-widget';
      }
    </script>
    <script src="//code.tidio.co/iunyqqxfscfakenjcreqr2qehdtozzi4.js" async></script>
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

