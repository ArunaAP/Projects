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

     <h2>***Staff Member Details***</h2>

	<table>
	
		<c:forEach var = "ff" items = "${SfDetails}">
		
		<c:set var = "id" value="${ff.id }" /> 
		<c:set var = "name" value="${ff.name }" /> 
		<c:set var = "email" value="${ff.email }" /> 
		<c:set var = "phone" value="${ff.phone }" /> 
		<c:set var = "username" value="${ff.username }" /> 
		<c:set var = "password" value="${ff.password }" /> 
		
		<tr>
		     <td>Staff MemberID :</td> 
		     <td>${ff.id }</td>
		</tr>
		
		<tr>
		     <td>Name :</td>
		     <td>${ff.name }</td>
		</tr>
		
		
		<tr>
		     <td>E-Mail :</td>
		     <td>${ff.email }</td>
		</tr>
		
		
		<tr>
		     <td>Phone :</td>
		     <td>${ff.phone }</td>
		</tr>
		
		<tr>
		     <td>User Name :</td>
		     <td>${ff.username }</td>
		</tr>
		
		
		<tr>
		     <td>Password :</td>
		     <td>${ff.password }</td>
		</tr>
		
	
	    </c:forEach>
		
	
	</table>
	<br>
	<br>
	
		
	<c:url value="UpdateStaffMember.jsp" var = "Sfmemberupdate">
			
		<c:param name="id" value="${id }"></c:param>
		<c:param name="name" value="${name }"></c:param>
		<c:param name="email" value="${email }"></c:param>
		<c:param name="phone" value="${phone }"></c:param>
		<c:param name="username" value="${username }"></c:param>
		<c:param name="password" value="${password }"></c:param>
	
	</c:url>
	
	<div class="btnclass">
		<a href="${Sfmemberupdate}">
	
		<input type="button" name="Update" value="Update Staff_Member">
	
	</a>
	
	</div>

	
	
		
	<c:url value="deleteStaffMember.jsp" var = "memberdelete">
			
		<c:param name="id" value="${id }"></c:param>
		<c:param name="name" value="${name }"></c:param>
		<c:param name="email" value="${email }"></c:param>
		<c:param name="phone" value="${phone }"></c:param>
		<c:param name="username" value="${username }"></c:param>
		<c:param name="password" value="${password }"></c:param>
	
	</c:url>
	
	<div class="btnclass">
	<a href="${memberdelete}">
	
		<input type="button" name="delete" value="Delete Staff Member Data">
	
	</a>
	</div>
	
	<div class="btnclass">
      <a href="Home.jsp">
      <button>Home</button>
      </a>
      
    </div>
	
</body>
</html>