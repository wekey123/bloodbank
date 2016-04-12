// JavaScript Document


function valid()
{
	var passwordvalue = document.form1.textfield2.value;
	var cpassword = document.form1.textfield3.value;
   if(document.form1.textfield.value == "")
   {
      alert("Please Enter Usernmae");
	  document.form1.textfield.focus();
	  return false;
   }else if(passwordvalue == ""){
      alert("Please Enter Password");
	  document.form1.textfield2.focus();
	  return false;
   }else if(passwordvalue.length < 8){   
      alert("Please Enter Password MIN 8 Characters Long");
	  document.form1.textfield2.focus();
	  return false;
   }else if(cpassword == ""){
      alert("Please Enter Confirm Password");
	  document.form1.textfield3.focus();
	  return false;
   }else if(passwordvalue != cpassword){
      alert("Please enter the Password and Confirm password be the same");
	  document.form1.textfield3.focus();
	  return false;
   }else if(document.form1.textfield4.value == ""){
      alert("Please Enter Name");
	  document.form1.textfield4.focus();
	  return false;
   }else if(document.form1.textfield7.value == ""){
      alert("Please Enter Age");
	  document.form1.textfield7.focus();
	  return false;
   }else if(document.form1.genderbox.value == ""){
      alert("Please select Gender");
	  document.form1.genderbox.focus();
	  return false;
   }else if(document.form1.textfield9.value == ""){
      alert("Please select D.O.B");
	  document.form1.textfield9.focus();
	  return false;
   }else if(document.form1.textfield10.value == ""){
      alert("Please Enter weight");
	  document.form1.textfield10.focus();
	  return false;
   }else if(document.form1.bg.value == ""){
      alert("Please select Blood Group");
	  document.form1.bg.focus();
	  return false;
   }else if(document.form1.textfield13.value == ""){
      alert("Please Enter State");
	  document.form1.textfield13.focus();
	  return false;
   }else if(document.form1.textfield14.value == ""){
      alert("Please Enter City");
	  document.form1.textfield14.focus();
	  return false;
   }else if(document.form1.textfield15.value == ""){
      alert("Please Enter PinCode");
	  document.form1.textfield15.focus();
	  return false;
   }/*else if(document.form1.textfield16.value == ""){
      alert("Please Enter Preference Timing");
	  document.form1.textfield16.focus();
	  return false;
   }*/else if(document.form1.textfield5.value == ""){
      alert("Please Enter Mobile Number");
	  document.form1.textfield5.focus();
	  return false;
   }else if(document.form1.textfield6.value == ""){
      alert("Please Enter Email ID");
	  document.form1.textfield6.focus();
	  return false;
   }else{
	return true;
   }
}
