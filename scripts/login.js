

// We will give the user several attemps. This way we can create a loop
var attempt = 3;

//Button Click Functions
function verify(){
  var username = document.getElementById('uName').value;
  var password = document.getElementById('pWord').value;

  //Assuming that the login is correct, we forward them to the admin page
  if (username == "Admin" && password == "Pass123"){
    alert ("Login Attempt is successful");

  }

  //This is FAILED ATTEMPT CASES:
  else {
    attempt --;
    alert("Attempt Failed. You have "+attempt+" tries left.");

    //If the user's used all attempts, we lock them out.
    //They can get more attempts when they refresh the page
    if( attempt == 0){
      document.getElementById("uName").disabled = true;
      document.getElementById("pWord").disabled = true;
      document.getElementById("submit").disabled = true;
      return false;
    }
  }

}
