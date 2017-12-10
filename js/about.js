let urlParams = (new URL(document.location)).searchParams;
let contact = urlParams.get("contact");

if(contact == "true") {
  document.getElementById("contact").classList.toggle("invisible");
}
