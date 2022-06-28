<html>
   <script src="https://unpkg.com/vue@3"></script>
   <link rel="stylesheet" href="style.css">
   <script type="module" src="app.js"></script>
   <?php
   $servername = "####";
   $username = "####";
   $password ="####";
   $dbname = "####";
   //sql connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   //getting max id
   $q = "SELECT * FROM ips WHERE id = (SELECT MAX(id) FROM ips)";
   $qresult = $conn->query($q); 
   if ($qresult->num_rows > 0) {
    while($qrow = $qresult->fetch_assoc()) {
      $mid = $qrow["id"];
    }
   }
   //rand generation
   $id = rand(1, $mid);
   $l = "SELECT * FROM ips WHERE id = '$id'";
   $lresult = $conn->query($l);
   if($lresult->num_rows > 0) {
    while($lrow = $lresult->fetch_assoc()){
        $ip = $lrow["IP"];
        $cc = $lrow["CountryCode"];
        $city = $lrow["City"];
    }
   }
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
            var ip = "<?php echo $ip; ?>";
            ip = window.ip;
            var cc = "<?php echo $cc; ?>";
            cc = window.cc;
            var city = "<?php echo $city; ?>";
            city = window.city;
            var id = "<?php echo $id; ?>";
            id = window.id;
            var sussy = new Audio('sus.mp3');
            sussy = window.sussy;
            function susSound(){
                sussy.play();
            }
        </script>
    </body>
</html>