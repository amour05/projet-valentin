<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Surprise romantique</title>
  <link rel="stylesheet" href="/css/style.css">
  <style>
    h1 {
      opacity: 0;
      transition: opacity 2s ease-in;
      color: #b3003c;
      text-align: center;
      line-height: 1.8;
    }
  </style>
</head>
<body>
  <div class="rose"></div>

  <!-- Premier message -->
  <h1 id="message1">
    Je te veux entièrement.<br>
    Toi, avec ton passé.<br>
    Toi et tes défauts, tes qualités... Avec tes rêves et tes idées.<br>
    Je te veux entièrement.
  </h1>

  <!-- Second message -->
  <h1 id="message2" style="display:none;">
    Et si tu savais à quel point je pense à toi... 🌹
  </h1>

  <!-- Dernier message -->
  <h1 id="message3" style="display:none;">
    Bonne Saint-Valentin ❤️
  </h1>

  <script src="/js/script.js"></script>
  <script>
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
  </script>
</body>
</html>
