let urlParams = (new URL(document.location)).searchParams;
let login = urlParams.get("login");

if(login == "false") {
  document.getElementById("error").classList.toggle("invisible");
} else if(login == "true"){
  window.location.assign('/sections/admin-area/admin.php');
}
