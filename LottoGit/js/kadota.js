function Piilo() {
  const varit = ["white", "#ccffff"]
  var x = document.getElementById("rekisteroityminen");
  var n = i_nappi1.dataset.ci;
  var m = i_nappi3.dataset.ci;
  if (x.style.display === "block") {
    x.style.display = "none";
    i_nappi3.style.display = "block";
    i_nappi1.style.display = "block";
  } else {
    x.style.display = "block";
    i_nappi3.style.display = "none";
    i_nappi1.style.display = "none";
  }
}
