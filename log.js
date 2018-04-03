function logn(){
  var ps= document.getElementById('user').value;
  var us= document.getElementById('pass').value;
  if(ps==""||us==""){
    alert(" all fields must be entered");
  }
  else {
    window.location.href="main.html";
  }
}
