<html>

     <head>
      <title>Login Page</title>
      
      <style type = "text/css">   

body {
    min-height: 100%;
 background-image: url("i.png");
    background-repeat: no-repeat;
	    background-position: top;
    background-size: cover;
	}
	  <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
      </head>
   
  
	
      <div align = "center">
         <div style = "width:400px; border: solid 1px #333333;">
            <div style = "background-color:#333333; color:#FFFFFF; padding:6px;"><b><div align = "center">LOGIN</div></b></div>
				
            <div style = "margin:50px">
              
               <form action = "DB.php" method = "post">
                 <div align = "left">
				  <label>USERNAME &nbsp &nbsp</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>PASSWORD  &nbsp &nbsp</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <div align = "center"><input type = "submit" value = " Submit "/><br /></div>
              
			   </form>
              </div>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
			   <?php 
			   session_start();
			   if(isset($_SESSION['error']))
			   {echo "WRONG USERNAME OR PASSWORD";}
			  ?></div>
					
            </div>
				
         </div>
			
      </div>

 
</style>
</html>