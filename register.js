function validatefname()
{
     var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("fname").value;

  // If x is Not a Number or less than one or greater than 10
  re = /^[a-zA-Z]+$/;

  if(re.test(x)){
  document.getElementById("fname").style.border="2px solid green";
  return true;
  } else {
    document.getElementById("fname").style.border="2px solid red";

  }

}

function validatelname()
{
     var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("lname").value;

  // If x is Not a Number or less than one or greater than 10
  re = /^[a-zA-Z]+$/;

  if(re.test(x)){
  document.getElementById("lname").style.border="2px solid green";
  return true;
  } else {
    document.getElementById("lname").style.border="2px solid red";
    return false;
  }

}

function validatecity()
{
     var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("city").value;

  // If x is Not a Number or less than one or greater than 10
  re = /^[a-zA-Z]+$/;

  if(re.test(x)){
  document.getElementById("city").style.border="2px solid green";
  return true;
  } else {
    document.getElementById("city").style.border="2px solid red";
  }

}

function validatepin() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("pin").value;

  // If x is Not a Number or less than one or greater than 10
  re = /^\d{6}/;
  if(re.test(x)){
   document.getElementById("pin").style.border="2px solid green";
  return true;
  } else {
    document.getElementById("pin").style.border="2px solid red";
  }

}

function validatenum() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("num").value;
  re = /^\d{10}/;
 if(x== " ")
 {
   return true;
 }
 
  // If x is Not a Number or less than one or greater than 10
  
  else if(re.test(x)){
  document.getElementById("num").style.border="2px solid green";
  return true;
  } else {
    document.getElementById("num").style.border="2px solid red";
  }

}

function validatedob()
{
  var x= document.getElementById("dob").value;

  var dobirth= document.getElementById("dob").value.split('-');

  var day = new Date();
  var year= day.getFullYear();
   
  var y = dobirth[0] ;
 
  var age= year-y;
  if(age < 14)
  {
    text = " you can`t register";
    document.getElementById("demo3").innerHTML=text;

  }
  else
  {
    text = " ";
    document.getElementById("demo3").innerHTML=text;
    return true;
  }

}

function validatemail()
{
  var x= document.getElementById("mail").value;
  re= /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.([a-zA-Z]{3,5}|[a-zA-z]{2,5})/ ;
  if(re.test(x))
  {
    document.getElementById("mail").style.border="2px solid green";
    return true;
  }
  else
  {
    document.getElementById("mail").style.border="2px solid red";
  }
}
  
function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */


function validall()
{
  if(validatefname()&&
  validatelname()&&
  validatecity()&&
 validatenum()&&
 validatemail()&&
validatepin()&&
 validatedob())
  {
    return true;
  }
  else
  {
    return false;
  }
 }
