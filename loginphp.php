
<?php
   $host        = "host = ec2-79-125-125-97.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7vpp251p4l9tg";
   $credentials = "user = baialgsjdhvmxy password=57161bba2de05428b22372402d30d2e1f002c39a358e2b2b89cb8b1678342150";

   $db = pg_connect( "$host $port $dbname $credentials"  );

   $result = pg_query($conn, "SELECT ID,NAME,PASSWORD,DESTINATION,CLG FROM USERS");
   if (!$result) {
      echo "An error occurred.\n";
   exit;
   }

while ($row = pg_fetch_row($result)) {
  echo " $row[0]   $row[1]  $row[2] $row[3] $row[4]  $row[5] ";
  echo "<br />\n";
}

?>