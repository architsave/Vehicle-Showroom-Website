<html>
<head>
</hrad>
<body><html>
<head>
  <title>Test Drive Registration Form </title>
  <link rel="stylesheet" href="FormValidation.css" type="text/css">
  <script src="FormValidation.js"></script>
 
</head>
 
<body onload="init();">

  <h2> Test Drive Registration Form</h2>
 
  <form id="theForm" method="get" action="insertsignup.php" onsubmit="return validateForm()">
    <table>
    <tr>
      <td>Name<span class="red">*</span></td>
      <td><input type="text" id="name" name="name"/></td>
      <td id="nameError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Address</td>
      <td><input type="text" id="address" name="address" /></td>
      <td id="addressError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Zip Code<span class="red">*</span></td>
      <td><input type="text" id="zipcode" name="zipcode" /></td>
      <td id="zipcodeError" class="red">&nbsp;</td></tr>
    <tr>
      <td>City<span class="red">*</span></td>
      <td><select id="city" name="city">
            <option value="" selected>Please select...</option>
            <option value="mumbai">Mumbai</option>
            <option value="delhi">Delhi</option>
            <option value="kolkata">Kolkata</option>
	    <option value="pune">Pune</option>
	    <option value="hyderabad">Hyderabad</option>
	    <option value="ahmedabad">Ahmedabad</option>
          </select><br /></td>
      <td id="countryError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Gender<span class="red">*</span></td>
      <td><input type="radio" name="gender" value="male" />Male
          <input type="radio" name="gender" value="female" />Female</td>
      <td id="genderError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Color<span class="red">*</span></td>
      <td><input type="checkbox" name="color" value="red" />RED
          <input type="checkbox" name="color" value="black" />BLACK
		  <input type="checkbox" name="color" value="blue" />BLUE
      <td id="colorError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Mobile<span class="red">*</span> <input value="+91" disabled="disabled" size="2" type="text"></td>
      <td><input type="text" id="phone" name="phone" /></td>
      <td id="phoneError" class="red">&nbsp;</td></tr>
    <tr>
      <td>Email<span class="red">*</span></td>
      <td><input type="text" id="email" name="email" /></td>
      <td id="emailError" class="red">&nbsp;</td></tr>
    <tr>
    
      <td>&nbsp;</td>
<fieldset align="center"><legend>Vehicle Details</legend>
  <br>
  <br> Choose Car
  <select id="car" name="car">
  <option value="" selected="selected">Please select...</option>
  <option value="BMW 720d">BMW 720d</option>
  <option value="BMW Z4">BMW Z4</option>
  <option value="BMW X5">BMW X5</option>
  </select>
  <br>
  </div>
  <br>
   Choose Bike
  <select id="bike" name="bike">
  <option value="" selected="selected">Please select...</option>
  <option value="Moto-S1000RR">Moto-S1000RR</option>
  <option value="Moto-K1600GT">Moto-K1600GT</option>
  <option value="Moto-R1200RT">Moto-R1200RT</option>
  </select>
</fieldset>

      <td>
	  <input type="submit" value="SEND" id="submit" />&nbsp;
          <input type="reset" value="CLEAR" id="reset"/></td>
      <td>&nbsp;</td></tr>
    </table>
</form>

</body></html>