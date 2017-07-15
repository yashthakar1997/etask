<html>
<head>
    <title>e maintenence</title>
    <link rel="stylesheet" type="text/css" href="css/global.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale: 1.0, user-scalabe=0">
    <script src="js/jquery.min.js"></script>
    <script src="js/general.js"></script>
    <style type="text/css">
        
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #34495e;
    color: white;
}
button[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    width: 40%;
}


    </style>
</head>
<body>
<!-- https://thenewboston.com/videos.php?cat=92&video=19876 -->

    <div id="header">
        <div class="logo"><a href="#"> e <span>Maintanence</span></a></div>
    </div>    

    <div><a class="mobile" href="#">Menu</a></div>

    <div id="container">
        <div class="sidebar">
        <ul id="nav">
            <li><a class="selected" href="#">HOME</a></li>
            <li><a href="#">search</a></li>
            <li><a href="#">princial</a></li>
            <li><a href="#">teacher</a></li>
        </ul>    
        </div>
        <div class="content">
            <h1><span class="slideInRight">Registration Form </span></h1>
            <div id="box">
                <div class="box-top">Enter Details</div>
                <div class="box-panel">
                <div class="input-field">
                <form action="sign.php" method="POST">
                    
                     <label for="fname">First Name</label>
                     <input type="text" id="fname" name="fname" value="" placeholder="enter your name here">
                     <label for="lname">Last Name</label>
                     <input type="text" id="lname" name="lname" value="" placeholder="enter your last here">
                     <label for="pass">Password</label>
                     <input type="text" id="pass" name="pass" value="" placeholder="enter your password here">                <label for="repass">repeate Password</label>
                     <input type="text" id="repass" name="repass" value="" placeholder="reenter your password here"> 
                     <label for="pass">Designation</label>
                     <input type="text" id="pass" name="pass" value="" placeholder="enter your password here">
                     <label for="clg">College</label>
                     <input type="text" id="clg" name="clg" value="" placeholder="enter your college name here">
                     <br /><br />
                    
                     <button type="submit"> signup </button>

                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>