<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <style>
    	.btn{
    		background-color: #F96719;
    		border:0px;
    		border-radius: 2px;
    		height: 35px;
    		align-items: center;
    		width:80px;
    	}
    	.btn:hover{
        background-color: #09F95A;
    		
    		border:0px;
    		border-radius: 2px;
    		height: 40px;
    		align-items: center;
    		width:90px;
    	}
    	.btn1{
    		background-color: #F96719;
    		border:0px;
    		border-radius: 2px;
    		height: 35px;
    		align-items: center;
    		width:80px;
    	}
    	.btn1:hover{
    		background-color: #C62D00;
    		border:0px;
    		border-radius: 2px;
    		height: 40px;
    		align-items: center;
    		width:90px;
    	}
    </style>
</head>
<body style="background-color: #8CDBAE">

<div style="margin-left: 450px;margin-top: 100px;margin-right: 450px;">
   <form style="height: 300px; background-color: #38B970; box-shadow: 5px 5px #C7ECD7">
   		<h3  style="margin-left: 30px;padding-top: 30px;">You confirm Explore more</h3>	<br>
   		
   		<input class="btn" type="button" value="Explore" onClick="parent.location.href='../../bfront2.html'">
   		
   		<br>
   		<br>
   		<br>
       <h3  style="margin-left: 30px;padding-top: 0px;">OR wants to logout</h3> <br>
   	
   		<input class="btn1" type="button" value="logout" onClick="parent.location.href='logout.php'">
   		
   </form>
</div>

</body>
</html>
