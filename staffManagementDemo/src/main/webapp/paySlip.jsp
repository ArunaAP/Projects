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
	margin-left: 143px;
	display: inline;

}
h2 {
	color: white;
}	

</style>

</head>
<body>

    <h2>*** Your PaySlip ***</h2>

	<table>
	
		<c:forEach var = "f" items = "${paydetails}">
		
		<c:set var = "sid" value="${f.sid }" /> 
		<c:set var = "id" value="${f.sfmemberid }" /> 
		<c:set var = "month" value="${f.month }" /> 
		<c:set var = "basic" value="${f.basic }" /> 
		<c:set var = "all" value="${f.allowance }" /> 
		<c:set var = "bonus" value="${f.bonus }" /> 
		<c:set var = "fuel" value="${f.fuel }" /> 
		<c:set var = "ot" value="${f.ot }" /> 
		<c:set var = "epf" value="${f.epf }" /> 
		<c:set var = "donation" value="${f.donation }" /> 
		<c:set var = "fee" value="${f.fee }" /> 
		<c:set var = "tax" value="${f.tax }" /> 
		<c:set var = "total" value="${f.total }" /> 


		
		<tr>
		     <td>Salary ID :</td> 
		     <td>${f.sid }</td>
		</tr>
		
		<tr>
		     <td>Staff MemberID :</td>
		     <td>${f.sfmemberid }</td>
		</tr>
		
		
		<tr>
		     <td>Month :</td>
		     <td>${f.month }</td>
		</tr>
		
		
		<tr>
		     <td>Basic Salary :</td>
		     <td>${f.basic }</td>
		</tr>
		
		<tr>
		     <td>Allowance :</td>
		     <td>${f.allowance }</td>
		</tr>
		
		
		<tr>
		     <td>Bonus  :</td>
		     <td>${f.bonus }</td>
		</tr>
		
			
		<tr>
		     <td>Fuel  :</td> 
		     <td>${f.fuel }</td>
		</tr>
		
		<tr>
		     <td>OT Salary :</td>
		     <td>${f.ot }</td>
		</tr>
		
		
		<tr>
		     <td>EPF  :</td>
		     <td>${f.epf }</td>
		</tr>
		
		
		<tr>
		     <td>Dead Donation :</td>
		     <td>${f.donation }</td>
		</tr>
		
		<tr>
		     <td>Walfarefee  :</td>
		     <td>${f.fee }</td>
		</tr>
		
		
		<tr>
		     <td>Tax :</td>
		     <td>${f.tax }</td>
		</tr>
		
		<tr>
		     <td>Total Salary  :</td>
		     <td>${f.total }</td>
		</tr>
	
	    </c:forEach>
		
	
	</table>
	
		<c:url value="UpdatePaySlip.jsp" var = "payslipupdate">
			
		<c:param name="sid" value="${sid }"></c:param>
		<c:param name="id" value="${id }"></c:param>
		<c:param name="month" value="${month }"></c:param>
		<c:param name="basic" value="${basic }"></c:param>
		<c:param name="all" value="${all }"></c:param>
		<c:param name="bonus" value="${bonus }"></c:param>
		<c:param name="fuel" value="${fuel }"></c:param>
		<c:param name="ot" value="${ot }"></c:param>
		<c:param name="epf" value="${epf }"></c:param>
		<c:param name="donation" value="${donation }"></c:param>
		<c:param name="fee" value="${fee }"></c:param>
		<c:param name="tax" value="${tax }"></c:param>
		<c:param name="total" value="${total }"></c:param>
	
	</c:url>
	
	<div class="btnclass">
		<a href="${payslipupdate}">
	
		<input type="button" name="Update" value="Update Payslip">
	
	</a>
	
	</div>

	
	<div class="btnclass">
	<a href="Home.jsp">
    <button>Home</button>
    </a>
	</div>

	

</body>
</html>