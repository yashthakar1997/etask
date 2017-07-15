<?php
   $host        = "host = ec2-79-125-125-97.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7vpp251p4l9tg";
   $credentials = "user = baialgsjdhvmxy password=57161bba2de05428b22372402d30d2e1f002c39a358e2b2b89cb8b1678342150";

   $db = pg_connect( "$host $port $dbname $credentials"  );

   $uname = $_POST['$uname'];
   $pass = $_POST['$pass'];

   $sql =<<<EOF
      SELECT * FROM USERS WHERE NAME = $uname;
EOF;


   $ret = pg_query($db, $sql);

   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
echo $ret;   
 //  while($row = pg_fetch_row($ret)) {

 //    if ($uname = $row[1] || $pass = $row[2]) {
 //              $_SESSION['logged_in'] = 1;
  //       } else {
   //               echo "wrong username".$uname;
   //      }
  // }
print_r($_session);

//<?php   include 'index.php'; ?>



?>