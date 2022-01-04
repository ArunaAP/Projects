
<?php
    include_once('includes/header.php');
?>
<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">


	
	<!-----style quotation page-------->	

	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  font-family: Arial;
  font-size: 16px;
  
  
}

input[type=button] {
  background-color:#fec20f ;
  color: white;
  padding: 12px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  text-align: center;
}

input[type=button]:hover {
  background-color:#1c1f4c;
}

input[type=reset] {
  background-color:#fec20f ;
  color: white;
  padding: 12px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 15px;
  text-align: center;
}

input[type=reset]:hover {
  background-color:#1c1f4c ;
}


.container {
  border-radius: 5px;
  background-color: #00848c ;
  padding: 20px;
  color: white;
  font-size: 18px;
  margin-left:25%;
  margin-right:25%;
}
</style>

<!---------add java script calculator--------------->

<script type="text/javascript">
function checnum(as)
{
var a = as.value;
for(var x=0; x<a.length; x++)
{
var ff = a[x];
if(isNaN(a) || ff==" ")
{
a = a.substring(0,(a.length-1));
as.value = a;
}}}
function getCheckedValue( groupName ) {
var radios = document.getElementsByName( groupName );
for( i = 0; i < radios.length; i++ ) {
if( radios[i].checked ) {
return radios[i].value;
}
}
return null;
}
function tqe_perc()
{
var sds = document.getElementById("dum");
if(sds == null){
alert("");
}
var sdss = document.getElementById("dumdiv");
if(sdss == null){
alert("");
}
if(sdss != null)
{
var totamount=0;
var p1= document.getElementById("amount").value;
var age1=document.getElementById("age").value;
if(age1=="")
document.getElementById("err_msg").innerHTML="<font color='white'><b>Enter the current age!</b></font>";
else if(p1=="")
document.getElementById("err_msg").innerHTML="<font color='white'><b>Enter the life cover amount!</b></font>"
else
{
document.getElementById("err_msg").innerHTML="";
var p= parseFloat(p1);
var age= parseFloat(age1);
var y= parseFloat(getCheckedValue("year"));
var t=getCheckedValue("t")
if(t=="halfyearly")
{
totamount=(p/y)/6;
document.getElementById("r1").value=totamount .toFixed(2);
}
else
{
if(t=="Yearly")
{
totamount=(p/y);
document.getElementById("r1").value=totamount .toFixed(2);
}

else
{
totamount=(p/y)/12;
document.getElementById("r1").value=totamount .toFixed(2);
}
}
}
}
}
</script>

	</head>


  
	
<!-----add quotation form------>	

<center>
<h2>Premium Calculator</h2>
</center>

 <div id="calculator" class="container" align=center>

<form name=first>
<table align=center border=0 cellpadding=1 cellspacing=1 id=tqe_calc>
<tr><td colspan=2 align='center'> <div id='err_msg'></div> </td></tr>

<tr><td align=left>Life Insurance Type:</td><td><select id="InsuranceType" name="InsuranceType"><br>
      <option value="goldenInfinity">Golden Infinity</option>
      <option value="silverJourney">Silver Journey</option>
      <option value="bronzePensioner">Bronze Pensioner</option>
    </select><br></td></tr>
	
<tr><td align=left>Current Age:</td><td><input type=text id=age onkeyup=checnum(this)></td></tr>

<tr><td colspan=2>
</td></tr>

<tr><td align=left>Life Cover LKR:<input type=text id=amount onkeyup=checnum(this)></td><td>
<input type=radio name=t value=Monthly>Monthly<br> 
<input type=radio name=t value=halfyearly>Half Yearly<br> 
 <input type=radio name=t value=Yearly checked>Yearly </td></tr>
 
<tr><td colspan=2>
</td></tr>

<tr><td align=left>Policy Term :</td><td><div id=y><input type=radio name=year value=10>10-Years<br>
<input type=radio name=year value=15 checked>15-Years<br>
<input type=radio name=year value=20>20-Years<br>
<input type=radio name=year value=25>25-Years<br>
<input type=radio name=year value=30>30-years</div></td></tr>
<br>
<tr><td colspan=2>
</td></tr><br>
<tr><td align=center colspan=2> <input type=button value='Calculate' onclick=tqe_perc()><br>
<br>
<input type=reset value='Reset'> </td></tr>
<tr><td colspan=2> <div align='center' style=" padding-left: 10px;font-size: 10px;color: white;" id="dumdiv">
<div id="dum"></div></td></tr>

<tr><td align=left>Premium LKR:</td><td><input type=text id=r1></td></tr>
<tr><td colspan=2>
</td></tr>
</table></form></div>

<br>



<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
