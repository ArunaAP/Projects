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



			<% 	    
			
					String sid = request.getParameter("sid");
					String id = request.getParameter("id");
					String month = request.getParameter("month");
					String basic = request.getParameter("basic");
					String all = request.getParameter("all");
					String bonus = request.getParameter("bonus");
					String fuel = request.getParameter("fuel");
					String ot = request.getParameter("ot");
					String epf = request.getParameter("epf");
					String donation = request.getParameter("donation");
					String fee = request.getParameter("fee");
					String tax = request.getParameter("tax");
					String total = request.getParameter("total");

			%>
			
			

		    <h1>------- Update Salary -----</h1>
            
            <div>
            	
            <form action="upsal" method="post">
					
			<label>Salary ID : </label>	<input type="text" name="sid" value="<%= sid %>"readonly><br>
			<label>Staff MemberID : </label><input type="text" name="id" value="<%=id  %>"><br>
			<label>Month  :</label>	<input type="text" name="month" value="<%= month %>"><br>
			<label>Basic Salary :</label><input type="text" name="basic" value="<%= basic %>"> <br>
			<label>Allowance :</label><input type="text" name="all" value="<%= all %>"> <br>
			<label>Bonus : </label>	<input type="text" name="bonus" value="<%= bonus %>"> <br> 
			<label>Fuel : </label><input type="text" name="fuel" value="<%= fuel %>"> <br> 
			<label>OT Salary : </label>	<input type="text" name="ot" value="<%= ot %>"> <br> 
			<label>EPF : </label><input type="text" name="epf" value="<%= epf %>"> <br> 
			<label>Dead Donation : </label>	<input type="text" name="donation" value="<%= donation %>"> <br> 
			<label>Walfarefee : </label><input type="text" name="fee" value="<%= fee %>"> <br> 
			<label>Tax  : </label><input type="text" name="tax" value="<%=tax  %>"> <br> 
			<label>Total  : </label><input type="text" name="total" value="<%=total  %>"> <br>

		
			
			
		    <input type="submit" name="submit" value="Update Salary"> <br>
			

		   </form>
            	
            
            </div>

</body>
</html>