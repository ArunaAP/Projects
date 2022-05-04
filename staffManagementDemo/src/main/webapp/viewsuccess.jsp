<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
    <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>  
    
    
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
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
	margin-left: 110px;
	display: inline;

}
h2 {
	color: white;
}	

</style>

</head>
<body>
	
	<h2>*** Leave Details ***</h2>

	<table>
	
		<c:forEach var = "ff" items = "${vldetails}">
		
		<c:set var = "count" value="${ff.count }" /> 
		<c:set var = "name" value="${ff.name }" /> 
		<c:set var = "id" value="${ff.id }" /> 
		<c:set var = "type" value="${ff.type }" /> 
		<c:set var = "date" value="${ff.date }" /> 
		<c:set var = "reason" value="${ff.reason }" /> 
		
		
		
		
		<tr>
		     <td>Count :</td> 
		     <td>${ff.count }</td>
		</tr>
		
		<tr>
		     <td>Name :</td>
		     <td>${ff.name }</td>
		</tr>
		
		
		<tr>
		     <td>ID :</td>
		     <td>${ff.id }</td>
		</tr>
		
		
		<tr>
		     <td>Type :</td>
		     <td>${ff.type }</td>
		</tr>
		
		<tr>
		     <td>Date :</td>
		     <td>${ff.date }</td>
		</tr>
		
		
		<tr>
		     <td>Reason :</td>
		     <td>${ff.reason }</td>
		</tr>
		
	
	    </c:forEach>
		
	
	</table>
	
	
	<c:url value="updateleave.jsp" var = "leaveupdate">
			
		<c:param name="count" value="${count }"></c:param>
		<c:param name="name" value="${name }"></c:param>
		<c:param name="id" value="${id }"></c:param>
		<c:param name="type" value="${type }"></c:param>
		<c:param name="date" value="${date }"></c:param>
		<c:param name="reason" value="${reason }"></c:param>
	
	</c:url>
	
	<div class="btnclass">
			<a href="${leaveupdate}">
	
		    <input type="button" name="Update" value="Update Leave Data">
	
	</a>
	</div>


	
		
	<c:url value="deleteleave.jsp" var = "leavedelete">
			
		<c:param name="count" value="${count }"></c:param>
		<c:param name="name" value="${name }"></c:param>
		<c:param name="id" value="${id }"></c:param>
		<c:param name="type" value="${type }"></c:param>
		<c:param name="date" value="${date }"></c:param>
		<c:param name="reason" value="${reason }"></c:param>
	
	</c:url>
	
	<div class="btnclass">
			<a href="${leavedelete}">
	
		    <input type="button" name="delete" value="Delete Leave Data">
	
	</a>
	
	</div>

	
	<div class="btnclass">
		<a href="Home.jsp">
    <button>Home</button>
    </a>
	
	</div>

	
	
	
	

	
</body>
</html>