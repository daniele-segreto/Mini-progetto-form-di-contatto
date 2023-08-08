<?php
// Mando a schermo le variabili d tipo POST (senza i 'name' i valori non vengono passati)
// print_r($_POST);

$error = ''; // inizializzo la variabile di errore a 'vuoto'
$successMessage = ''; // inizializzo la variabile di successo a 'vuoto'

// Se esiste una variabile POST
if ($_POST) {

    // STEP 1:
    // Verifico se il valore email è vuoto/non esiste, se non esiste...
    if (!$_POST['email']) {
        $error .= "L'indirizzo email è vuoto<br>"; // appendo l'errore alla variabile error (con .=)
    }
    if (!$_POST['content']) {
        $error .= "Il contenuto del messaggio è vuoto<br>"; // appendo l'errore alla variabile error (con .=)
    }
    if (!$_POST['subject']) {
        $error .= "Il campo oggetto è vuoto<br>"; // appendo l'errore alla variabile error (con .=)
    }


    // STEP 2:
    // Validazione email con PHP, se l'email esiste && il filtro è 'false' vuol dire che non è un'email
    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "L'indirizzo email non è valido.<br>"; // appendo l'errore alla variabile error (con .=)
    }


    // STEP 3:
    // Se c'è un errore (se la stringa errore è diversa da 'vuoto')
    if ($error != '') {
        $error = '<div class="alert alert-danger" role="alert"><p>Gli errori nel form sono:</p>' . $error .'</div>'; // inserisco un html che mostra gli errori
    }
    // Altrimenti, se non ci sono degli errori
    else {
        $emailTo = "example@mail.com"; // compiliamo l'email (quella che riceverà il messaggio)
        $subject = $_POST['subject']; // quello che l'utente ha inserito nella variabile subject
        $content = $_POST['content']; // quello che l'utente ha inserito nella variabile content
        $header = "From: ".$_POST['email']; // impostiamo il mittente dell'email
    }
    // N.B. Se modifico/tolgo uno di questi campi (es. $emailTo = ""), mi da errore, di conseguenza mi dice che il messaggio non è stato inviato.


    /// STEP 4:
    // Se abbiamo inviato tutto correttamente
    if (mail($emailTo, $subject, $content, $header)) {
        $successMessage = '<div class="alert alert-success" role="alert">Il tuo messaggio è stato inviato. Congratulazioni!</div>'; // inserisco un html che mostra che il messaggio è stato inviato
    }
    // Altrimenti, se non è andato a buon fine avremo un messaggio di errore
    else {
        $error = '<div class="alert alert-danger" role="alert">Il messaggio non è stato inviato. Per favore riprovare più tardi</div>'; // inserisco un html che mostra l'errore di invio
    }
    
}

?>