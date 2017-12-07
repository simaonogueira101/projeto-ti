let urlParams = (new URL(document.location)).searchParams;
let contact = urlParams.get("contact");
console.log(contact);

if(contact == "true") {
  console.log("bateu");
  document.getElementById("contact").classList.toggle("invisible");
}
