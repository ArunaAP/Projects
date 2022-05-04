<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<head>
<style>
/* style header navigation bar and dropdown buttons */



body {

    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(web.jpg);
    width: 100%;
    height: fit-content;
    background-size: cover;
    background-position:center;
 
font-family: Arial, Helvetica, sans-serif;
padding: 0px 5px 0px 5px;
grid-template-columns: repeat(auto-fill,minmax(200px, 1fr));

}
.Maintxt{
font-family: Arial, Helvetica, sans-serif;
color : #1c1f4c;
text-shadow: 5px 5px 7px #555151;
font-size: 20px;
}
h3{
font-family: Arial, Helvetica, sans-serif;
}




/*----------------------------------Who we are-------------------------------*/



.whoWe{
padding-right: 35%;
padding-left: 5%;
}



.whoWeAreimg{
float: right;
padding-top: 50px;
padding-right: 30px;




}
.mtitle{
font-size: 40px;
font-family:sans-serif ;
text-align: left;
}
.title{
float: left;
}




.container {
position: relative;
text-align: center;
color: white;
}




.centered {
position: absolute;
top: 40%;
left: 89%;
transform: translate(-50%, -50%);
font-size: 50px;
color: white;
text-shadow: 2px 2px 4px #000000;
}

.button {
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 16px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
transition-duration: 0.4s;
cursor: pointer;
width: 400px;
}





.button2 {
background-color: white;
color: black;
border: 2px solid #008CBA;
}



.button2:hover {
background-color: #008CBA;
color: white;
}



.bt{
padding-left : 20px;
padding-right : 45%;
}
.bttn{
padding-left : 180px;
}
.text{
float: right;
padding-left: 65%;
padding-top: 30px;
color: white;
font-size: 20px;
  
  border: 1px solid gray;
  padding: 8px;
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;

position: absolute;
top: 150% ;
left: 60%;

}
h3{
font-size : 25px;
color: white;
font-family: Lucida Console;
}

</style>






</head>
<body>




<div class="container">

<div class = "headphoto">
<img src="header.jpg" alt="Snow" width="auto" height="450px">
</div>




<div class="centered">Staff Management System</div>
</div>




<hr>



<div class="whoWeAreimg">
<img src="pic1.png" width="600px" height="400px">
</div>

<div class="text">
To your business, the Staff Member management software shall be the brain and mouth of your organization.
Your members shall be allocated different roles and the work they perform at individual levels is interconnected to a central database, which works as the memory of your company.
The Staff Member management software shall use this information to help the different people make decisions within your organization.
 Just by a click of a button, you will know how many Staff members you are serving, how much products or services you are required to offer which member is required to do certain roles, the challenges facing your organization and ultimately, the system shall tell you how much profits you are making and your potential growth.
Start your free trial today by registering a free demo here. Our dedicated support team shall guide offer professional advise on the best steps to take in your journey towards attaining success.
</div>



<br>
<br>
<h3>Staff Member</h3>






<div class ="bt">
<div class ="bttn">


<a href="staffmemberlogin.jsp">
<button class="button button2">Check Staff Member Profile</button><br>
</a>
<a href="applyinsert.jsp">
<button class="button button2">Apply Leave</button><br>
</a>
<a href="viewleave.jsp">
<button class="button button2">Update Leave</button><br>
</a>
<a href="viewleave.jsp">
<button class="button button2">Delete Leave</button><br>
</a>

</div>














<br>
<hr>
<br>
<h3>Payroll Clack</h3>
<div class ="bttn">

<a href="billMenu.jsp">
<button class="button button2">Pay Bill</button><br>
</a>
<a href="GenerateSalaryForm.jsp">
<button class="button button2">Generate Salary</button><br>
</a>
<a href="viewPaySlip.jsp">
<button class="button button2">View Salary</button><br>
</a>
<a href="viewPaySlip.jsp">
<button class="button button2">Update Salary</button><br>
</a>

</div>
<br>
<hr>
<br>









<h3>Department Manager</h3>
<div class ="bttn">

<a href="insertSfMemForm.jsp">
<button class="button button2">Add New Staff Member</button><br>
</a>

<a href="ManagerViewLogin.jsp">
<button class="button button2">Update Staff Member Details</button><br>
</a>

<a href="ManagerViewLogin.jsp">
<button class="button button2">Delete Staff member</button><br>
</a>

</div>



</div>





<br><br>






</body>
</html>