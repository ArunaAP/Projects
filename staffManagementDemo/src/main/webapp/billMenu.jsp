<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<style>

input[type=button] {
width: 20%;
background-color: #1E90FF;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}



input[type=button]:hover {
background-color: #00CED1;
}
body {
	background-color: black;
}

h2 {
	color: white;
}






</style>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
         <h2>Select Bill Type :</h2>
		<a href="electricityBilForm.jsp">
		<input type="button" name="ebtn"  value="Electricity Bill" >
		</a>
		
		
		<a href="waterBillForm.jsp">
		<input type="button" name="wbtn"  value="Water Bill" >
		</a>
		
		
		<a href="phonebill.jsp">
		<input type="button" name="pbtn"  value="Telephone Bill" >
		</a>
		
		
	
</body>
</html>