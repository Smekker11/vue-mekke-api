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
        <div class="main-header-div">
           <h1 class="main-header" align="center">mekapi UI</h1>
        </div>
        <br>
        <div id="app" class="center">
            <div class="api-random">
              <h1 align="center">{{ message }}</h1>
              <h1 align="center">{{ ipaddr }}</h1>
              <div class="center-button-div">
                  <button class="b" v-on:click="kaki()">amangas sussy info</button>
              </div>
            </div>
            <br>
            <div class="api-full-dump">
                <h1>Full IP dump</h1>
                <iframe class="full-iframe" src="https://smekker.go.ro/mekapi/ip/full" title="ip db full dump"></iframe>
            </div>
            <br>
            <div class="api-query">
                <h1>Your location:</h1>
                <iframe src="http://www.openstreetmap.org/search?query=" id="api-gmap-fr"></iframe>
                <iframe class="indi-gmap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=<?php 
                $ip = $_SERVER['REMOTE_ADDR'];
                $insetip = "INSERT INTO ips (IP,CountryCode,Region) VALUES ('$ip','$details->country','$details->region')";
                echo $details->region;
                ?>e+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
            <br>
            <div class="api-query">
                <h1>Send query to DB</h1>
                <form action="aqu.php" method="get" >
                 <label for="fid">Query id -></label>
                 <input type="checkbox" id="fid" name="fid" value="true">
                 <label for="fip">Query IP -></label>
                 <input type="checkbox" id="fip" name="fip" value="true">
                 <label for="fcc">Query CountryCode -></label>
                 <input type="checkbox" id="fcc" name="fcc" value="true"><br>
                 <label for="fcont">Content: </label>
                 <input type="text" id="fcont" name="fcont"><br>
                 <input type="submit" id="fsubmit" name="fsubmit">
                </form><br>
                <iframe srcdoc="<?php session_start(); foreach(json_decode($_SESSION['curlres'], true) as $ufijson){ foreach ($ufijson as $qjson){ echo $qjson . '<br>';}}?>" class="small-iframe" title="query db by api"></iframe>
                <p align="center" style="margin-bottom: 0;" class="explain-qp">First row of query result is id</p>
                <p align="center" id="p-marg" class="explain-qp">Second row of query result is ip</p>
                <p align="center" id="p-marg" class="explain-qp">Third row of query result is countrycode</p>
                <p align="center" id="p-marg" class="explain-qp">Fourth row of query result is region</p>
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