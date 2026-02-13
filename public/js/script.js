// Premier message après 2 secondes
setTimeout(() => {
  document.getElementById("message1").style.opacity = 1;
}, 2000);

// Transition vers le second message après 10 secondes
setTimeout(() => {
  document.getElementById("message1").style.display = "none";
  document.getElementById("message2").style.display = "block";
  document.getElementById("message2").style.opacity = 1;
}, 10000);

// Transition vers le dernier message après 16 secondes
setTimeout(() => {
  document.getElementById("message2").style.display = "none";
  document.getElementById("message3").style.display = "block";
  document.getElementById("message3").style.opacity = 1;
}, 16000);

// Génère des pétales qui tombent
function createPetal() {
  const petal = document.createElement("div");
  petal.classList.add("petal");
  petal.style.left = Math.random() * window.innerWidth + "px";
  document.body.appendChild(petal);

  setTimeout(() => petal.remove(), 6000);
}

// Lancer des pétales toutes les 500ms
setInterval(createPetal, 500);
