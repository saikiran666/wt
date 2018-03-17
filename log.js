function logn(){
  var ps= document.getElementById('user').value;
  var us= document.getElementById('pass').value;
  if(ps==""||us==""){
    alert(" all fields must be entered");
  }
  else {
    if(ps=="saikiran666" && us=="devil123"){
      window.location.href="main.html";
    }
  }
}
