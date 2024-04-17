document.addEventListener("DOMContentLoaded", function() {
    const calendar = document.getElementById('calendar');

    // Functie om een afspraak toe te voegen
    function addAppointment(date, description) {
        const appointment = document.createElement('div');
        appointment.classList.add('appointment');
        appointment.innerHTML = `<strong>${date}</strong>: ${description}`;
        calendar.appendChild(appointment);
    }

    // Voorbeeld van een afspraak toevoegen
    addAppointment('16-04-2024', 'Afspraak maken');

    // Je kunt meer functionaliteit toevoegen, zoals het bewerken en verwijderen van afspraken
});
