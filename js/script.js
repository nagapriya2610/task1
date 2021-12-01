function validate() 
{
var number1=document.myform.num.value;
if (number1=="" || number1 ==null) 
{
	alert('Please enter number');
	return false;
}
}

function reset()
{
	document.getElementById('num').value='';
}
