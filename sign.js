firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
      document.getElementById("user_div").style.display="block";
      document.getElementById("upper").style.display="none";
  } else {
      document.getElementById("user_div").style.display="none";
      document.getElementById("upper").style.display="block";    // No user is signed in.
  }
});
function sign(){
    var userEmail= document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;
    firebase.auth().createUserWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
       window.alert("Error : " + errorMessage); 
  // ...
}); 
}