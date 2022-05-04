<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
    <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>  
    
    
<!DOCTYPE html>
<html>
<head>
<style type="text/css">

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

input[type=button]:hover {
background-color: #00CED1;
}

body{
background-color: black;
}

table{
		margin-left: auto;
		margin-right: auto;
		width: 75%;
}

td,tr {
		border: 1px solid #ddd;
		padding: 8px;
	}

tr{
		background-color: #f2f2f2;
		text-align: center;
	}

	

td {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #76D7C4;
		color: black;
		text-align: center;

	}
.btnclass{
	margin-left: 149px;
	display: inline;

}
h2 {
	color: white;
}	

</style>

</head>
<body>

	<h2>*** Your Profile ***</h2>

	<table>
	
		<c:forEach var = "staff" items = "${SfDetails}">
		
		<tr>
		     <td>Staff MemberID :</td> 
		     <td>${staff.id }</td>
		</tr>
		
		<tr>
		     <td>Name :</td>
		     <td>${staff.name }</td>
		</tr>
		
		
		<tr>
		     <td>E-Mail :</td>
		     <td>${staff.email }</td>
		</tr>
		
		
		<tr>
		     <td>Phone :</td>
		     <td>${staff.phone }</td>
		</tr>
		
		<tr>
		     <td>User Name :</td>
		     <td>${staff.username }</td>
		</tr>
		
		
		<tr>
		     <td>Password :</td>
		     <td>${staff.password }</td>
		</tr>
		
	
	    </c:forEach>
		
	
	</table>
	
	<div class="btnclass">
		<a href="Home.jsp">
        <button>Home</button>
        </a>
	</div>

	
	
</body>
</html>