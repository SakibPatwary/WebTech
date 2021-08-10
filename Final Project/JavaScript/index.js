$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
function myFunction() { 
   var x = document.getElementById("name").value;
 
   if(x===""){
      alert("Field can't be empty!!")
   }
   }
function myFunction() { 
   var x = document.getElementById("username").value;
 
   if(x===""){
      alert("Field can't be empty!!")
   }
   }
function myFunction() { 
   var x = document.getElementById("phone").value;
 
   if(x===""){
      alert("Field can't be empty!!")
   }
   }
function myFunction() { 
   var x = document.getElementById("email").value;
 
   if(x===""){
      alert("Field can't be empty!!")
   }
   }
function myFunction() { 
   var x = document.getElementById("password").value;
 
   if(x===""){
      alert("Field can't be empty!!")
   }
   }
function myFunction() { 
   var x = document.getElementById("confirmpassword").value;
 
   if(x==="" || password!===x){
      alert("Field can't be empty or can't match with password")
   }
   }