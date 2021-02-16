<html>
<head>
<script>
function welcome()
{
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  document.write("Welcome" + " " + firstname + " " + lastname + " to the World of Web");
}
</script>
</head>
<body>
<form name="FORM" action="Q6.php"  method="post" >
  First name:  <input type="text"  id="firstname" placeholder="Enter Firstname"  required><br>
  Last name:  <input type="text"  id="lastname"  placeholder="Enter Lastname"  required><br><br> 
  <input type="button" value ="Submit" onClick="welcome();">
  </form>
  <body>
  </html>