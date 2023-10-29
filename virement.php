<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $destinataire = $_POST['destinataire'];
    $email = $_POST['email'];
    
    // Effectuer la transaction (votre logique métier ici)

    // Envoyer un e-mail de confirmation
    $subject = 'Confirmation de votre virement';
    $message = 'Votre virement a été effectué avec succès.';
    mail($email, $subject, $message);

    // Répondre au client (JavaScript) pour indiquer le succès
    echo json_encode(array('success' => true));
} else {
    // Répondre au client (JavaScript) pour indiquer l'échec
    echo json_encode(array('success' => false));
}
?>
