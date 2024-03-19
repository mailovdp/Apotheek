// Simpele array voor het opslaan van chatberichten
let chatMessages = [];

// Functie om een bericht toe te voegen aan de chatbox
function appendMessage(sender, message) {
    const chatBox = document.getElementById('chat-box');
    const messageElement = document.createElement('div');
    messageElement.innerText = `${sender}: ${message}`;
    chatBox.appendChild(messageElement);
}

// Functie om een bericht te versturen
function sendMessage() {
    const userInput = document.getElementById('user-input');
    const message = userInput.value;
    appendMessage('Jij', message); // Toon het bericht van de gebruiker in de chatbox
    userInput.value = ''; // Wis het invoerveld
    processMessage(message); // Verwerk het bericht
}

// Functie om het ontvangen bericht te verwerken (hier een dummy-implementatie)
function processMessage(message) {
    // Hier zou je de logica kunnen toevoegen om het bericht te analyseren en een reactie te genereren van de chatbot
    // Voor nu voegen we gewoon een eenvoudige reactie toe
    const botResponse = "Bedankt voor je bericht! Ik ben nog maar een dummy-chatbot.";
    setTimeout(() => {
        appendMessage('Chatbot', botResponse); // Toon de reactie van de chatbot met een kleine vertraging
    }, 500);
}
