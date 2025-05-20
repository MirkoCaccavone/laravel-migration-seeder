// Funzione che aggiorna l'orario nel DOM
function updateTime() {
    // Crea un nuovo oggetto Date per l'orario corrente
    const now = new Date();

    // Cerca l'elemento che mostra l'ora
    const timeElement = document.getElementById('current-time');

    // Se l'elemento esiste, aggiorna il suo contenuto
    if (timeElement) {
        // Formatta l'ora nel formato italiano (HH:mm:ss)
        timeElement.textContent = now.toLocaleTimeString('it-IT');
    }
}

// Imposta l'aggiornamento automatico ogni secondo (1000ms)
setInterval(updateTime, 1000);