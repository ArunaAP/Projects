<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<style>

input[type=date], select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;

}

input[type=text], select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;

}



input[type=submit] {
width: 20%;
background-color: #1E90FF;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}



input[type=submit]:hover {
background-color: #00CED1;
}



div {
margin-top:50px;
border-radius: 5px;
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(back1.jpg);
background-position:center;
padding: 20px;
}


button:hover {
background-color: #00CED1;
}

button {

width: 20%;
background-color: #1E90FF;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

body {
	background-color: black;
}
label {
	color: white;
}
h1 {
	color: white;
}


</style>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>      

            <h1>Phone Bill </h1>
            
            <div>
			<form action="pbil" method="post">
			
			
			<label>Billing Date</label>  <input type="text" name="bildate" placeholder="2021-12-12"required><br>
			<label>Account No</label>  <input type="text" name="accno" placeholder="ex:0012345"required> <br>
			<label>Service Provider</label>  <input type="text" name="spro" placeholder="ex: slt / dialog / mobitel"required> <br>
			<label>Phone No</label> <input type="text" name="pno" placeholder="ex: 0770000000"required> <br>
			<label>Amount</label> <input type="text" name="amount" placeholder="ex: 20000.00"required> <br> 
		
			
			
		    <input type="submit" name="submit" value="Pay Bill"> <br>
			

		   </form>
		   </div>
		


</body>
</html>