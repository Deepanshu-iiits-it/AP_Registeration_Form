<!DOCTYPE html>
<html>
    <head>
        <title>Registeration form</title>
        <style type="text/css">
        *{
            box-sizing: border-box;
            text-align: center;
            /* background-image: url('1.jpg');
            background-attachment: fixed;
            background-position: center;
            background-size: cover; */
            font-family:  Gabriola;
        }
        body{
        
            background-image: url('1.jpg');
            background-color: rgb(85, 68, 68);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            /* background-repeat:round; */
            
        }
        h1{
            color: white;
            background-color: rgb(90, 29, 29);
            z-index: 2;
            font-family: Ink Free,Comic Sans MS, Gabriola;
        }
        #form_box{
            margin-left: 10%;
            margin-right: 10%;
            padding: 5% 10%;

            text-align: left;
            border: 2px solid rgb(63, 7, 7);
            border-radius: 5px;
            /* box-shadow: 1px 1px 1px 1px blue;s */
            background-color: white;
            z-index: 999;
            font-family:  Gabriola;
        }
        .mand{
            color: rgb(131, 0, 0);
        }
        h6{
            color: white;
            background-color: rgb(90, 29, 29);
            z-index: 2;
            font-family: Ink Free,Comic Sans MS, Gabriola;
        }
        input:link,
        input:visited{
            border: 1px solid white;
        }
        input:hover,
        input:active{
            border: 1px solid rgb(131, 0, 0);
        }
        #btn{
            border: 2px solid rgb(131, 0, 0);
            z-index: 9999;
            padding: 5px 5px;
            border-radius: 5px;
            transition: background-color 0.2s, color 0.2s;
        }
        #btn:hover,
        #btn:active{
            background-color: rgb(90, 29, 29);
            color: white;
            border: 2px solid rgb(131, 0, 0);
            border-radius: 5px;
            padding: 5px 5px;
            cursor: pointer;

        }

        textarea:link,
        textarea:visited{
            border: 1px solid white;
        }
        textarea:hover,
        textarea:active{
            border: 1px solid rgb(131, 0, 0);
        }
        </style>
        <script type="text/javascript">
        


        var formExample = document.getElementById("form_box");
         formExample.submit();
         
        document.getElementById("form_box").onsubmit = function(e){
            var fieldValue=document.getElementById("name").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter your name");
                }
            var fieldValue=document.getElementById("email").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter your email address");
                }
            var fieldValue=document.getElementById("institution").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter your institution name");
                }
            // var fieldValue=document.getElementByID("dob").value;
            //     if(fieldValue==null || fieldValue== "")
            //     {  
            //       e.preventDefault(); 
            //        alert("you must enter your dob");
            //     }
            // var fieldValue=document.getElementByID("course").value;
            //     if(fieldValue==null || fieldValue== "-select-")
            //     {  
            //       e.preventDefault(); 
            //        alert("you must enter your course");
            //     }
            var fieldValue=document.getElementById("stream").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter your stream");
                }
            var n=document.getElementById("sem").value;
               if(!isNaN(parseFloat(n)) && isFinite(n)) 
                   {e.preventDefault(); 
                   alert("you must enter your semester"); }
            var fieldValue=document.getElementById("skill").value;
                if(fieldValue==null || fieldValue== "")
                {  
                  e.preventDefault(); 
                   alert("you must enter your skills");
                }

            
             }

            function onconf()
            {document.getElementById("conf").innerHTML="Please confirm your details before submitting...";
            document.getElementById("conf").style.color="rgb(90, 29, 29)";
            }
            function offconf()
            {
                document.getElementById("conf").innerHTML=" ";
            
            }
            function marq()
            {
                return ((new Date().getDate()).toString());
            }
            //     var date1='30/05/2020';
                
            //     var dt1=getDate(date1);
            //     document.write("dt1");
            //     var date2= Date();
            //     var dt2=getdate(date2);
            //     document.write("dt2");
            // var n=(dt1-dt2);
            // if(n>10)
            // {
            //     var display="Only "+n+" days left to register...";
            //     document.write("display");
            // }
            // else if(n<=10 && n>0)
            // {
            //     var display="Hurry up! Only "+n+" days left to register...";
            //     document.write("display");
            // }
            // else
            // {
            //     var display="Sorry you missed chance to register this time...";
            //     document.write(display);
            // }
            // }
        
        </script>
    </head>

    <body>
        <h1>PRO_CODERS CLUB</h1>
        <marquee><p style="z-index: 9999999999; color: rgb(219, 219, 219);">Hurry up! Only <script>document.write(25-marq());
        </script> days are left in last date of submission (May 25, 2020)</p>
        </marquee>
        <!-- <div class="form_box"> -->

        <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $institution = test_input($_POST["institution"]);
  $course = test_input($_POST["course"]);
  $stream = test_input($_POST["stream"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

        <form  method="post" action="#after" id="form_box">
                
            <label for="name"><span class="mand">*</span>Name: </label>
            <input type="text" id="name"  name="name" required><br><br>

            <label for="email"><span class="mand">*</span>Email id: </label>
            <input type="email" id="email" name="email" placeholder="abc@xyz.com" required><br><br>

            <label for="institution"><span class="mand">*</span>Name of your Institution: </label>
            <input type="text" id="institution" name="institution" required><br><br>
            
            <label for="dob"><span class="mand">*</span>Date of birth: </label>
            <input type="date"  id="dob" name="dob" required><br><br>

            <label for="course"><span class="mand">*</span>Which course are you pursuing? </label>
            <select id="course" name="course" required>
                <option value="non" default>-select-</option>
                <option value="B.Tech">B.Tech</option>
                <option value="M.Tech">M.Tech</option>
                <option value="PhD">PhD</option>
            </select>
                <br><br>
            <label for="stream"><span class="mand">*</span>Which stream are you pursuing? </label>
            <input type="text" id="stream" name="stream" required>
                &nbsp;&nbsp;
            <label for="sem"><span class="mand">*</span>Semester: </label>
            <input type="number" id="sem" max="8" min="1" value="3" required><br><br>

            <label for="skill"><span class="mand">*</span>Your Skills: </label>
            <textarea id="skill" rows="7" cols="70" placeholder="Tell us your Skills in programming!">
            </textarea><br><br>

            <label for="Acheivments">Your Acheivments: </label>
            <textarea rows="7" cols="70" placeholder="Tell us your Acheivments in programming!">
            </textarea><br><br>
            
            <input type="checkbox" id="check">
            <label for="check">Check if you want us to keep you updated.</label>
            <br><br>
            <p style="text-align: left; color: rgb(70, 36, 4);">Fields marked with * sign are mandatory.</p>
            <br>

            <input type="submit" id="btn" value="Register" onmouseover="onconf();" onmouseout="offconf();"><br>
            <p id="conf"> </p>
        </form>
        <div id="after">
        <?php

// name1 = ;
// email1= $_POST['email'];

echo "<h1>Welcome! ".$name."</h1>";
echo "<h3>So, you are pursuing ".$course." in ".$stream." at ".$institution."</h3>";
echo "<h3>Best of luck for your journey with us...</h3>";
echo "<h3>Your e-mail: ".$email."</h3>";
?>
</div>
        <h6>FROM: &nbsp;&nbsp;DEEPANSHU MITTAL &nbsp;&nbsp;&nbsp;  11912056&nbsp;&nbsp;&nbsp;    I.T.</h6>
            

    </body>
</html>