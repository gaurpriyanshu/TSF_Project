<?php
if(isset($_POST['Deposit To'])){

    $server="localhost";
    $username ="root";
    $password = "";
    $db = "banker1";
    $con = mysqli_connect($server , $username,  $password, $db);
    if(!$con){
        die("Connection Failed" . mysqli_connect_error());
    }
    echo "Connection Succesful";
        $yourname=$_POST['Deposit To'];
        $accountnumber=$_POST['Account Number'];
        $referencenumber=$_POST['Refrence/Challan Number'];
        $branchname=$_POST['Branch Name'];
        $yourname2=$_POST['Your Name'];
        $youraccountnumber=$_POST['Your Account Number'];
        $PAN=$_POST['PAN'];
        $AADHAR=$_POST['Amount'];

    $sql =  "INSERT INTO banker1 (`Deposit To`, `Account Number`, `Refrence/Challan Number.:`, `Branch Name`, `Your Name`, `Your Account Number`, `PAN`, `Amount`) 
     VALUES ( '$yourname', '$accountnumber', '$referencenumber', '$branchname', '$yourname2', '$youraccountnumber', '$PAN', '$AADHAR');";
    echo $sql;
    if($con ->query($con,$sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "Error: $sql <br> $con ->error";
    }
    $con ->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members & Employee|Bank Of Sparks</title>

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Playfair+Display:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="familycss.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="Image not found!">
        </div>
        <ul>
            <li class="item"><a href="home.html">Home</a></li>
            <li class="item"><a href="services.html">Services</a></li>
            <li class="item"><a href="member.html">New Member</a></li>
            <li class="item"><a href="about.html">About Us</a></li>
            <li class="item"><a href="index.php">Transfer Money</a></li>
            <li class="item"><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="primary">Welcome to Our Digital Branch</h1>
        <form action="index.php" method="post">
            <h1 class="h-primary center">Enter the details:</h1>
           
            <div class="name">
                <label for="name">Deposit to:</label><br>
                <input type="text" name="Deposit To" id="name" placeholder="Enter name">
            </div><br>
            <div class="name">
                <label for="accno">Account number:</label><br>
                <input type="text" name="Account Number" id="accno" placeholder="Account Number">
            </div><br>
            <div class="name">
                <label for="refno">Refrence/Challan Number.: </label><br>
                <input type="text" name="Refrence/Challan Number" id="refno" placeholder="">
            </div><br>
            <div class="name">
                <label for="branch">Branch Name: </label><br>
                <input type="text" name="Branch Name" id="branch" placeholder="Account Number">
            </div><br>
            <div class="name">
                <label for="name2">Your Name:</label><br>
                <input type="text" name="Your Name" id="name2" placeholder="Enter your name">
            </div><br>
            
            <div class = "checkbox">
                <label for="checkbox">Do you have an existing account in our bank:</label>
                <input type="checkbox" name="checkbox" id="checkbox"><br>
            </div><br>
            <div class="name">
                <label for="accno"> Enter your Account number:</label><br>
                <input type="text" name="Your Account Number" id="accno2" placeholder="Account Number">
            </div><br>
            
            <label for="pan">Enter your PAN Number</label>
            <div class="PAN">
                <input type="text" name="PAN" id="pan" placeholder="PAN Number">
            </div><br>
            <label for="aadhar">Enter the amount:</label>
            <div class="aadhar">
                <input type="text" name="Amount" id="Amount" placeholder ="Enter Amount">
            </div><br>
            <div id ="submit_reset">
                <input type="Reset" value ="Reset">
                
                <input type="Submit" value ="Submit">
            </div>
            
        </form>
       
        <h3 class="secondary">You are important to us.</h3>
    </section>
    <section id ="customers">
       
        <p>Lorem ipsum dolor sit 
            Thanks for using our services.
        </p>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Partners</h1>
        <div id="clients">
            <div class="client-item">
                <img src="/hsbc.png" alt="Image not loaded!">
            </div>
            <div class="client-item">
                <img src="/central bank.png" alt="Image not loaded!">
            </div>
            <div class="client-item">
                <img src="/spain.png" alt="Image not loaded!">
            </div>
            <div class="client-item">
                <img src="/apple.png" alt="Image not loaded!">
            </div>
            <div class="client-item">
                <img src="/samsung.jpg" alt="Image not loaded!">
            </div>
            <div class="client-item">
                <img src="/reliance.png" alt="Image not loaded!">
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            |copyright &copy; www.bankofsparks.com.All right reserved.|
        </div>
    </footer>
    <!-- INSERT INTO `banker1` (`S.no`, `Deposit To`, `Account Number`, `Refrence/Challan Number.:`, `Branch Name`, `Your Name`, `Your Account Number`, `PAN`, `AADHAR`) VALUES (NULL, 'A', '422341', '3552335', 'Varanasi', 'Priyanshu', '44534442', '5564444', '43464523'); -->
</body>

</html>