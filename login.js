
firebase.auth().onAuthStateChanged(function(user) {
  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;
  if (user) {
    if (userEmail!=""){
    // User is signed in.\
    window.location=`mainpage.php?n=${userEmail}`,"_self";}
    else{
      firebase.auth().signOut().then(function() {
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});
    }}
  else {
    // No user is signed in.
  }
});

function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;
  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}

function create(){
  var email=document.getElementById("email").value;
  var password=document.getElementById("psw").value;
  var name=document.getElementById("name").value;
  var phone=document.getElementById("phone").value;
  var email1=email;
  email1=email.replace(".",",");
  email1=email1.replace(".",",");
  firebase.database().ref('users/' + email1).set({
    username: name,
    email: email
  });
  document.getElementById("modal-wrapper").style.display="none";
  /*firebase.database().ref().set(email1);
  firebase.database().ref().child(email1).set(name);*/
firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  window.alert("Error : " + errorMessage);
  // ...
});

  }
