$(document).ready(function () {

    // Al submit (evento jq) del bottone (cioè al click):
    $("form").submit(function (e) {
        e.preventDefault(); // fa in modo che il form non venga inviato automaticamente

        error = ''; // inizializzo la variabile di errore

        // Se il valore del campo subject è vuoto
        if ($('#subject').val() == '') {
            error += "Il campo oggetto è obbligatorio<br>"; // inserisci alla variabile questo contenuto
        }

        // Se il val()ore del campo subject è vuoto
        if ($('#content').val() == '') {
            error += 'Il contenuto del messaggio è obbligatorio<br>';
        }

        // Infine inserisci il contenuto html all'interno del div con id 'errore'
        //$('#error').html(error);

        // Se c'è un errore (se la stringa errore è divera da 'vuoto')
        if (error != '') {
            $('#error').html('<div class="alert alert-danger" role="alert"><p><strong>Gli errori nel form sono:</strong></p>' + error +'</div>');
        }
    
    });

});