<html>
   <script src="https://unpkg.com/vue@3"></script>
   <link rel="stylesheet" href="style.css">
   <script type="module" src="app.js"></script>
   <?php
   $response = json_decode(file_get_contents("https://smekker.go.ro/mekapi/ip"), true);
   ?>
    <head>
        <title>vue amangas</title>
    </head>
    <body>
        <div id="app" class="center">
            <div class="api-random">
              <h1 align="center">{{ message }}</h1>
              <h1 align="center">{{ ipaddr }}</h1>
              <div class="center-button-div">
                  <button class="b" v-on:click="kaki()">amangas sussy info</button>
              </div>
            </div>
            <div class="api-query">
                <h1>cacak</h1>
            </div>
        </div>
        <script>
            var ip = "<?php echo $response['IP']; ?>";
            ip = window.ip;
            var cc = "<?php echo $response['CountryCode']; ?>";
            cc = window.cc;
            var region = "<?php echo $response['Region']; ?>";
            region = window.region;
            var id = "<?php echo $response['id']; ?>";
            id = window.id;
            var sussy = new Audio('sus.mp3');
            sussy = window.sussy;
            function susSound(){
                sussy.play();
            }
        </script>
    </body>
</html>