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

button:hover {
background-color: #00CED1;
}


div {
margin-top:50px;
border-radius: 5px;
background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(back1.jpg);
background-position:center;
padding: 20px;
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
					<% 	
					String count = request.getParameter("count");
					String name = request.getParameter("name");
					String id = request.getParameter("id");
					String type = request.getParameter("type");
					String date = request.getParameter("date");
					String reason = request.getParameter("reason");

			        %>
			<h1>*******Delete Leave Details******</h1>        
			 <div>      
			<form action="delete" method="post">
			
			<label>Count</label> <input type="text" name="count" value="<%=count %>" readonly ><br>
			<label>Name</label> <input type="text" name="name" value="<%=name %>" readonly><br>
			<label>Staff ID</label> <input type="text" name="id" value="<%=id%>"readonly> <br>
			<label>Leave Type</label><input type="text" name="type" value="<%=type %>"readonly> <br>
			<label>Leave Date</label><input type="date" name="date" value="<%=date %>"readonly> <br> 
			<label>Leave Reason</label><input type="text" name="reason" value="<%=reason %>"readonly> <br>
			
			
		    <input type="submit" name="submit" value="Delete Leave"> <br>
			

		   </form>
           </div> 
</body>
</html>