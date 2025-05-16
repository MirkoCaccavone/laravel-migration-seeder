// Funzione che aggiorna l'orario nel DOM
function updateTime() {
    // Crea un nuovo oggetto Date che rappresenta il momento attuale
    const now = new Date();

    // Cerca nel DOM l'elemento con ID 'current-time'
    const timeElement = document.getElementById('current-time');

    // Verifica se l'elemento esiste per evitare errori
    if (timeElement) {
        // Aggiorna il contenuto dell'elemento con l'ora corrente
        // toLocaleTimeString('it-IT') formatta l'ora nel formato italiano (HH:mm:ss)
        timeElement.textContent = now.toLocaleTimeString('it-IT');
    }
}

// Imposta un intervallo per chiamare updateTime() ogni 1000ms (1 secondo)
// setInterval restituisce un ID che può essere usato per fermare l'intervallo con clearInterval()
setInterval(updateTime, 1000);