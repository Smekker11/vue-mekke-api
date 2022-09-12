<html>
   <script src="https://unpkg.com/vue@3"></script>
   <link rel="stylesheet" href="style.css">
   <script type="module" src="app.js"></script>
   <?php
   $response = array_values(json_decode(file_get_contents("https://smekker.go.ro/mekapi/ip"), true));
   $details = $response[0]
   ?>
    <head>
        <title>vue amangas</title>
    </head>
    <body>
        <div id="app" class="center">
            <h1 align="center">{{ message }}</h1>
            <h1 align="center">{{ ipaddr }}</h1>
            <div class="center">
              <button class="b" v-on:click="kaki()">amangas sussy info</button>
            </div>
        </div>
        <script>
            var ip = "<?php echo $details['IP']; ?>";
            ip = window.ip;
            var cc = "<?php echo $details['CountryCode']; ?>";
            cc = window.cc;
            var city = "<?php echo $details['City']; ?>";
            city = window.city;
            var id = "<?php echo $details['id']; ?>";
            id = window.id;
            var sussy = new Audio('sus.mp3');
            sussy = window.sussy;
            function susSound(){
                sussy.play();
            }
        </script>
    </body>
</html>