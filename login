
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Harambe</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" content="initial-scale=1">
</head>
    
<body>

<div class="pageWrap">
    
    <div class="headerWrap">       
    <header>
        <a href="index.html"><h1>Restaurant<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harambe</h1></a> 
    </header>    
    
   <nav>
        <ul>
           <li>
              <a href="produkter.html">Hjem</a>
           </li>
           <li>
            <a href="kontakt.html">Bestill</a>
           </li>
           <li>
             <a href="nyheter.html">Takeaway</a> 
           </li>
           <li>
            <a href="om_oss.html">Kontakt</a>
           </li>
         </ul>
                
    </nav>
    </div>


<form action="action_page.php">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <br>

    <button type="submit" class="loginbtn">Login</button>
    <br>
  </div>
</form>

  <form action="login2">
    <input type="submit" value="Create Account" />
</form>
<!--
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" action="login2.html">Create Account</button>
  </div>
-->



</body>
</html>




