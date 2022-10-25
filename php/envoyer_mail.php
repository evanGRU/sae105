<?php 

// test de sécurité

    if (count($_POST)==0){
        header('Location: ../views/contact.php');
    }


// récupération et formatage des données du formulaire

    if (!empty($_POST['nom'])){
        $nom=mb_strtolower(ucfirst($_POST['nom']));
        echo 'Le nom est : '.$nom.'<br />'."\n";
    } else {
        echo 'Erreur : le nom est vide'."\n";
        exit(0);
    }


    if (!empty($_POST['prenom'])){
        $prenom=mb_strtolower(ucfirst($_POST['prenom']));
        echo 'Le prénom est : '.$prenom.'<br />'."\n";
    } else {
        echo 'Erreur : le prénom est vide'."\n";
        exit(0);
    }


    if (!empty($_POST['message'])){
        $message=mb_strtolower(ucfirst($_POST['message']));
        echo 'Le message est : '.$message.'<br />'."\n";
    } else {
        echo 'Erreur : le message est vide'."\n";
        exit(0);
    }

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email=$_POST['email'];
            echo 'L\'email est : '.$email.'<br />'."\n";
        } else {
            echo 'Erreur : l\'email n\'est pas valide'."\n";
            exit(0);
        }
    } else {
        echo 'Erreur : l\'email est vide'."\n";
        exit(0);
    }




// envoie du mail

    $destinataire = 'evangruchot.pro@gmail.com';
    $sujet = 'Demande de renseignement  Stat\'albums'.date('d/m/Y');
    $headers = 'From : mmi21d10@mmi-troyes.fr'."\r\n".
        'Reply-To : mmi21d10@mmi-troyes.fr'."\r\n".
        'X-Mailer : PHP/'.phpversion();

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo 'Message envoyé : OK'."\n";
        header('Location: ../index.php');
    } else {
        echo 'Erreur : message non envoyé'."\n";
    }



// mail de confirmation pour l'internaute

    $headers = 'From : mmi21d10@mmi-troyes.fr'."\r\n".
        'Reply-To : no-reply@mmi-troyes.fr'."\r\n".
        'X-Mailer : PHP/'.phpversion();
    
        if (mail($_POST['email'], 'Confirmation de demande', 'Nous avons bien reçu votre demande', $headers)){
            echo 'Message de confirmation envoyé : OK'."\n";
            header('Location: ../index.php');
        } else {
            echo 'Erreur : message de confirmation non envoyé'."\n";
        }