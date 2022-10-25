<?php 
    $accueil = '../index.php';
    $donnees = 'donnees.php';
    $galerie = 'galerie.php';
    $contact = 'contact.php';
    $css = '../styles/styleContact.css';

    require '../php/debut_html.inc.php';

    $hero = '';
    require '../php/header.inc.php';
?>

    <main>
        <div id=form_bg>
            <form method="POST" action="../php/envoyer_mail.php">
                <h1>CONTACT</h1>

                <div id="form_top">
                    <div>    
                        <label for="prenom">PRENOM -</label><br />
                        <input type="text" name="prenom" id="prenom" /><br />
                    </div>
                    <div>
                        <label for="nom">NOM -</label><br />
                        <input type="text" name="nom" id="nom"/><br />
                    </div>
                </div>
                <div id="form_bot">
                    <div>
                        <label for="email">E-MAIL -</label><br />
                        <input type="text" name="email" id="email" /><br />
                    </div>
                    <div>
                        <label for="message">MESSAGE -</label><br />
                        <textarea name="message" id="message"></textarea><br />
                    </div>
                </div>
                <div id="form_button">
                    <input type="submit" value="ENVOYER"/>
                </div>
            </form>
        </div>
	</main>

<?php 
    $lienCpt = '../comptage/mon_compteur.txt';

    require '../php/footer.inc.php';
    require '../php/fin_html.inc.php';
?>