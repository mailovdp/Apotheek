document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Hier kun je de inloggegevens controleren, bijvoorbeeld met een API-aanroep of een harde code
    if ( Name === 'gebruiker' && Password === 'wachtwoord') {
      document.getElementById('message').textContent = 'Inloggen gelukt!';
    } else {
      document.getElementById('message').textContent = 'Ongeldige gebruikersnaam of wachtwoord';
    }
  });

  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Hier kun je de inloggegevens controleren, bijvoorbeeld met een API-aanroep of een harde code
    if (username === 'Damian' && password === 'Fortnite') {
      // Inloggen gelukt, doorsturen naar de welkomstpagina
      window.location.href = 'Homepage.html'; // pagina waar je naar toe gaat
    } else {
      {
        // Als het wachtwoord onjuist is, doorverwijzen naar een andere website.
        window.location.href = "https://www.roblox.com/LOGIN"; // vervang de website naar wat je zelf wilt
      }
    }
  })