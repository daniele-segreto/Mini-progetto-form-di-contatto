$(document).ready(function () {
    
    // Al submit (funzione jq) del bottone (cioè al click):
    $("form").submit(function (e) {
        // e.preventDefault(); // fa in modo che il form non venga inviato automaticamente
        
        error = ''; // inizializzo la variabile di errore
        

        // STEP 1:
        
        // Se il valore del campo email è vuoto
        if ($('#email').val() == '') {
            error += "L'indirizzo email è vuoto<br>"; // inserisci alla variabile questo contenuto
        }
        
        // Se il valore del campo subject è vuoto
        if ($('#subject').val() == '') {
            error += "Il campo oggetto è vuoto<br>"; // inserisci alla variabile questo contenuto
        }
        
        // Se il val()ore del campo subject è vuoto
        if ($('#content').val() == '') {
            error += 'Il contenuto del messaggio è vuoto<br>'; // inserisci alla variabile questo contenuto
        }
        
        // Infine inserisci il contenuto html all'interno del div con id 'errore'
        //$('#error').html(error);


        // STEP 2:
        
        // Se c'è un errore (se la stringa errore è diversa da 'vuoto')
        if (error != '') {
            $('#error').html('<div class="alert alert-danger" role="alert"><p><strong>Gli errori nel form sono:</strong></p>' + error +'</div>'); // inserisco un html che mostra l'errore
            
            return false; // in modo tale che il form non venga inviato se c'è stato un errore (meglio della funzione 'undbind')
        }
        else {
            return true; // altrimenti viene inviato (meglio della funzione 'undbind')
        }
        // Altrimenti non fa la validazione perchè è stata già fatta/non lo verifica (lo dico con 'unbind', funzione jq) e invio il form (con 'submit')
        // else {
        //     $("form").unbind('submit').submit();
        // }
        
    });
    
});