let urlParams = (new URL(document.location)).searchParams;
let user = urlParams.get("user");
let repeat = urlParams.get("repeat");
let empty = urlParams.get("empty");
console.log(repeat);

if(empty == "true") {
  document.getElementById("user-pass-id").classList.toggle("invisible");
}

if(repeat == "true") {
  console.log("EMPTY");
  document.getElementById("repeat-id").classList.toggle("invisible");
  document.getElementById("repeat-user").innerHTML = user;
} else if(repeat == "false"){
  console.log(user);
  document.getElementById("user-info").classList.toggle("invisible");
  document.getElementById("info-user").innerHTML = user;
}
