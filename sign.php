<?php
   $host        = "host = ec2-79-125-125-97.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7vpp251p4l9tg";
   $credentials = "user = baialgsjdhvmxy password=57161bba2de05428b22372402d30d2e1f002c39a358e2b2b89cb8b1678342150";

   $db = pg_connect( "$host $port $dbname $credentials"  );

   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
/*    table created sucessfully
 $sql =<<<EOF
      CREATE TABLE USERS
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      PASSWORD       TEXT     NOT NULL,
      ROLE        INT,
      ACTIVE      INT);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>
*/

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];


$sql =<<<EOF
      INSERT INTO USERS (NAME,PASSWORD)
      VALUES ('$fname', '$pass');

EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);


?>