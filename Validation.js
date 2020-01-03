function validatePwd()
{ var y,z;
	y= document.getElementById("pwds").value;
  z= document.getElementById("cnfpwds").value;

	if(y!==z)
  	{window.alert("password mismatch")}
}
function validatePhno() {
  var x, text;
  
  x = document.getElementById("num").value;

  if (isNaN(x) || x <= 7000000000 || x >= 9999999999) {
    text = " Phone number Input not valid";
    window.alert(text);
  }
  
}