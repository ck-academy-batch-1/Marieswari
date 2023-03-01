 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        span {
            color: #FF0000;
            font-style:none;
            font-variant:none;
            font-size:1rem;
        }
        body{
            background-image:url("b.jpg");
            background-attachment: fixed;
        }
        form{
            margin-left:auto;
            margin-right:auto;
            color:white;
            padding-top:4vw;
            padding-left:4vw;
            padding-right:3vw;
            padding-bottom:4vw;
            background-color:gray;
            background: linear-gradient(45deg,#A4B3B6,#f0eeee);  
            max-width:50vw;
            justify-content:space-between;
        }
        td{
            font-style:italic;
            font-size:1.2rem;
            font-variant:small-caps;
        }
        table{
            margin-left:auto;
            margin-right:auto;
            transform:transparent;
        }
        h2{
            text-align:center;
            color:white;
            font-size:2rem;
            font-style:oblique;
        }
        .out{
            text-align:center;
            align-items:start;
            color:white;
        }
        input{
            border-radius:20px;
            background: linear-gradient(45deg,#c8dff388,#eaecf0); 
        }
        select{
            border-radius:20px;
            width:200px;
            background: linear-gradient(45deg,#c8dff388,#eaecf0); 
        }
        
    </style>
    <title>Document</title>
 </head>
 <body>
    <?php

        $nameer = $fanameer = $addresser = $genderer = $opcer = $opder = $opser = $piner = $courer = $emailer = $pner =" ";
        $name = $fname = $address = $gender = $city = $dist = $state = $pincode = $courses = $email = $phno = " "; 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameer = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameer = "Only letters and white spaces are allowed";
              }
            }
            if (empty($_POST["faname"])) {
                $fanameer = "Father Name is required";
            } else {
                $fname = test_input($_POST["faname"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                  $fanameer = "Only letters and white spaces are allowed";
                }
            }
            if (empty($_POST["address"])) {
                $addresser = "Address is required";
            } else {
                $address = test_input($_POST["address"]);
            }
            if (empty($_POST["gender"])) {
                $genderer = "Gender is required";
            } else{
                $gender = test_input($_POST["gender"]);
            }
            if (empty($_POST["States"])) {
                $opser= "Select the state";
            }else{
                $state= test_input($_POST["States"]);
            }   
            if (empty($_POST["District"])) {
                $opder= "Select the district";
            }else{
                $dist= test_input($_POST["District"]);
            }   
            if (empty($_POST["City"])) {
                $opcer= "Select the city";
            }else{
                $city= test_input($_POST["City"]);
            } 
            if(empty($_POST["Pincode"])){
                $piner="Enter the pincode";
            }  else{
                $pincode=test_input($_POST["Pincode"]);
                if(!preg_match('/^[0-9]{6}$/',$pincode)){
                    $piner="Enter thr correct Pincode";
                }
            }
            if (empty($_POST["Course"])) {
                $courer= "Select the Course";
            }else{
                $courses= test_input($_POST["Course"]);
            } 
            if (empty($_POST["Email"])) {
                $emailer = "Email is required";
            } else {
                $email = test_input($_POST["Email"]);
                if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)) {
                  $emailer = "Invalid email format";
                }
            }
            if(empty($_POST["PhoneNo"])){
                $pner="Enter the phone no";
            }  else{
                $phno=test_input($_POST["PhoneNo"]);
                if(!preg_match('/^[0-9]{10}$/',$phno)){
                    $pner="Enter thr correct Phone number";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
 
    ?>

    <h2>ITI STUDENT REGISTERATION FORM</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <table>
        <tr>
        <p><span class="rf">*</span>   Required Feild</p>
        </tr>
        <tr>
            <td>Name:</td>
            <td></td>
            <td><input type="text" name="name" ><span>*</span><br>
            <span class="err">  <?php echo $nameer; ?></span></td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td> Father Name:</td>
            <td></td>
            <td><input type="text" name="faname" value=""><span>*</span><br>
            <span class="err"> <?php echo $fanameer; ?></span><br></td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Address:</td>
            <td></td>
            <td><input type="text" name="address" value=""><span>*</span><br>
            <span class="err">  <?php echo $addresser; ?></span></td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Gender:</td>
            <td></td>
            <td> 
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other<br>
                <span class="err"> <?php echo $genderer;?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>State:</td>
            <td></td>
            <td>
                <select name="States" id="states">
                <option name="Select"value="Select the State">Select the State</option>
                <option name="State" value="Assam">Assam</option>
                <option name="State" value="Kerala">Kerala</option>
                <option name="State" value="Tamil Nadu">Tamil Nadu</option>
                <option name="State" value="Uttra Pradesh">Uttra Pradesh</option>
                </select><span>*</span><br>
                <span class="err"> <?php echo $opser; ?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>District:</td>
            <td></td>
            <td>
                <select name="District" id="dist">
                <option value="Select the District">Select the  district</option>
                <option value="Chennai">Chennai</option>
                <option value="Cuddalore">Cuddalore</option>
                <option value="Karur">Karur</option>
                <option value="Villupuram">Villupuram</option>
                <option value="Namakkal">Namakkal</option>
                </select><span>*</span><br>
                <span class="err"> <?php echo $opder; ?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>City:</td>
            <td></td>
            <td>
                <select name="City" id="city">
                <option value="Select the city">Select the City</option>
                <option value="Cuddalore">Cuddalore</option>
                <option value="Chidambaram">Chidambaram</option>
                <option value="Neyveli">Neyveli</option>
                <option value="Panruti">Panruti</option>
                <option value="Vadalur">Vadalur</option>
                </select><span>*</span><br>
                <span class="err"> <?php echo $opcer; ?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Pincode:</td>
            <td></td>
            <td>
                <input type="text" name=" Pincode" value=""><span>*</span><br>
                <span class="err">  <?php echo $piner; ?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Course:</td>
            <td></td>
            <td>
                <select name="Course" id="course">
                <option value="Select the Course">Select the Course</option>
                <option value="Desktop Publishing Officer Course">Desktop Publishing Officer Course</option>
                <option value="Data Entry Operator Course">Data Entry Operator Course</option>
                <option value="Software Testing Assistant Course">Software Testing Assistant Course</option>
                <option value="Database System Assistant Course	">Database System Assistant Course	</option>
                <option value="Smart Phone Technician Course">Smart Phone Technician Course</option>
                </select><span>*</span><br>
                <span class="err"> <?php echo $courer; ?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Email:</td>
            <td></td>
            <td>
                <input type="text" name="Email"><span>*</span><br>
                <span class="err"> <?php echo $emailer;?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td>Phone Number:</td>
            <td></td>
            <td>
                <input type="text" name="PhoneNo"><span>*</span><br>
                <span class="err"> <?php echo $pner;?></span>
            </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
        <tr>
            <td> <input type="submit" name="submit" value="Submit">  </td>
            <td></td>
            <td> <input type="reset" name="Reset" value="Reset">  </td>
        </tr>
        <tr></tr> 
        <tr></tr> 
    </table>
    </form>
    <br>
    <br>
    <div class= " out">
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $fname;
        echo "<br>";
        echo $address;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $state;
        echo "<br>";
        echo $dist;
        echo "<br>";
        echo $city;
        echo "<br>";
        echo $pincode;
        echo "<br>";
        echo $courses;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phno;
    ?>
    </div>
 </body>
 </html>