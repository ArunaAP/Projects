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
h2 {
	color: white;
}


</style>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>		
            
            <h2>*** Update Staff Member Details ***</h2>
            
			<% 	    
			
					String id = request.getParameter("id");
					String name = request.getParameter("name");
					String email = request.getParameter("email");
					String phone = request.getParameter("phone");
					String username = request.getParameter("username");
					String password = request.getParameter("password");

			%>
			
			
			<div>
			
			<form action="upsfmemeber" method="post">
			
			<label>ID</label><input type="text" name="id" value="<%= id%>" readonly> <br>
			<label>Name</label><input type="text" name="name" value="<%= name%>" > <br>
			<label>E-Mail</label><input type="text" name="email" value="<%= email %>"> <br>
			<label>Phone</label><input type="text" name="phone" value="<%= phone%>"> <br>
			<label>User Name</label><input type="text" name="username" value="<%= username%>"> <br> 
			<label>Password</label><input type="text" name="password" value="<%=password %>"> <br>
		
			
		    <input type="submit" name="submit" value="Update Member"> <br>
			

		    </form>
			
			
			</div>


</body>
</html>