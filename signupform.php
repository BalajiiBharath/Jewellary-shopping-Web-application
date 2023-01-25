<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jwellery Home Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>SignUp</title>
    <style>

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
      </style>
</head>

<body class="bg-dark bg-gradient">

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">SignUp Form</h3>
            <form name="signup" action="signup.php" method="post" onsubmit = "return validation()">

              <div class="row">
                            <div class="col-md-6 mt-4 pb-2">
                <label for="email" class="form-label" >Email</label>
                  <div class="form-outline">
                    <input
                      type="email"
                      class="form-control form-control-lg"
                      id="email"
                      placeholder="Enter Your Email" name="email" required
                    /> 
                  </div>
                               </div>
                                <div class="col-md-6 mt-4 pb-2">

<div class="form-outline">
<label class="form-label" for="uname">Username</label>
  <input type="text" id="uname" class="form-control form-control-lg" placeholder="Enter username" name="uname" />

</div>
                
            
                                    </div>
                         </div>

              <div class="row">
                <div class="col-md-6 mt-4 pb-2">

                  <div class="form-outline">
                  <label class="form-label" for="ps">Password</label>
                    <input type="password" id="ps" class="form-control form-control-lg" placeholder="Enter Password" name="ps"/>
                    <h5 id="message" class="h5 text-danger"></h5>
                  </div>

                </div>
                <div class="col-md-6 mt-4 pb-2">

                  <div class="form-outline">
                  <label class="form-label" for="rps">Confirm Password</label>
                    <input type="password" id="rps" class="form-control form-control-lg" placeholder="Repeat Password" name="rps" />
               
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">
                <label class="form-label" for="address">Your Address:</label>
                    <textarea  id="address" class="form-control form-control-lg" placeholder="Enter your Address" name="address" ></textarea>
                </div>
              </div>
              <div class="mt-4 pt-2">
                <p class="fs-6">If you already registered <a href="loginform.php">Click here</a></p>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-outline-dark btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
//----sign Up validation------------------------
function validation()  
            {  
              var uname=document.signup.uname.value; 
                var email=document.signup.email.value;  
                var ps=document.signup.ps.value; 
                var rps=document.signup.rps.value;
                if(uname.length=="" && email.length=="" && ps.length=="" && rps.length=="" && address=="") {  
                    alert("Please fill all the fields.");  
                    return false;  
                }  
                else  
                {  
                  if(uname.length=="") {  
                        alert("Username field is empty");  
                        return false;  
                    }  
                    else if(email.length=="") {  
                        alert("Email field is empty");  
                        return false;  
                    }   
                    else if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    else if (rps.length=="") {  
                    alert("Confirm Password field is empty");  
                    return false;  
                    } 
                   else if (ps != rps) {  
                    alert("Passwords do not match");  
                    return false;  
                    } 
                   else  if(ps.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  else if(ps.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
    document.getElementById("message").innerHTML = "**Password is strong..";   
  }  
                }                             
            }  
</script>

    
</body>
</html>