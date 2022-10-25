<?php 
    $accueil = '../index.php';
    $donnees = 'donnees.php';
    $galerie = 'galerie.php';
    $contact = 'contact.php';
    $lienImg = '../images/logo.png';
    $css = '../styles/styleGalerie.css';


    require '../php/debut_html.inc.php';

    $hero = '';
    require '../php/header.inc.php';
?>

<main>
    <div id="hero">
        <div id="hero_title">
            <h1>RAP FR</h1>
            <!-- <div id="hero_line"></div>
            <p>
                Ici sont regroupés les covers les plus connus du rap français. Trouve ton bonheur parmi notre nombreuse séléction.
            </p> -->
        </div>
        <div id="caroussel">
            <div class="caroussel_selec">
                <input type="radio" name="slide" id="pic-1" checked>
                <input type="radio" name="slide" id="pic-2">
                <input type="radio" name="slide" id="pic-3">
                <input type="radio" name="slide" id="pic-4">
                <input type="radio" name="slide" id="pic-5">
                <div class="caroussel_elm">
                    <label class="elm" for="pic-1" id="cover-1">
                      <img src="../images/covers/planetemars.jpg" alt="cover">
                    </label>
                    <label class="elm" for="pic-2" id="cover-2">
                      <img src="../images/covers/enna.jpg" alt="cover">
                    </label>
                    <label class="elm" for="pic-3" id="cover-3">
                      <img src="../images/covers/trinity.jpg" alt="cover">
                    </label>
                    <label class="elm" for="pic-4" id="cover-4">
                      <img src="../images/covers/100visage.jpg" alt="cover">
                    </label>
                    <label class="elm" for="pic-5" id="cover-5">
                      <img src="../images/covers/melancholia.jpg" alt="cover">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div id="galerie_content1">

        <?php
            if (!empty($_SESSION['messageImage'])) {
                echo '<p>' .$_SESSION['messageImage'].'</p>'."\n";
                $_SESSION['messageImage']=null;
            }
        ?>

        <div id="galerie">
            <?php
                //
                $contenu=dir("../images/covers/");
                //
                while ( $nomElement=$contenu->read() ) {
                    if(!is_dir('../images/covers/'.$nomElement)) { 
                        $extension=substr($nomElement, -4);
                        if ((strtolower($extension) == '.jpg') || (strtolower($extension) == '.png')) {
                         //echo $nomElement.'<br />'."\n";
                         echo '<img src="../images/covers/'.$nomElement.'" alt="' .$nomElement. '" />'."\n";
                        }
                    }
                }
                //
                $contenu->close()
            ?>
        </div>

        <div id="formulaire">
            <h1 id="form_title">AJOUTER UNE IMAGE</h1>
            <form method="post" action="../php/ajouter_img.php" enctype="multipart/form-data">
                <div class="upload">
                    <label for="upload" class="form_label">CHOISIR UNE IMAGE</label>
                    <div id="upload_all">
                        <div id="upload_button">
                            <label for="upload">UPLOAD</label>
                        </div>
                        <input type="file" id="upload" name="upload">
                    </div>
                    <div class="preview">
                    </div>
                </div>
                
                <div id="mdp">
                    <label for="mdp" class="form_label">MOT DE PASSE</label>
                    <input type="password" name="mdp" placeholder="...">
                </div>

                <input type="submit" name="ajouter" id="form_button" value="AJOUTER">
            </form>
        </div>
    </div>
    

</main>


<script>

    var input = document.querySelector('#upload');
    var preview = document.querySelector('.preview');

    input.style.opacity = 0;

    input.addEventListener('change', updateImageDisplay);

    function updateImageDisplay() {
        while(preview.firstChild) {
            preview.removeChild(preview.firstChild);
        }

        var curFiles = input.files;
        if(curFiles.length === 0) {
            var para = document.createElement('p');
            para.textContent = 'No files currently selected for upload';
            preview.appendChild(para);
        } else {
            var list = document.createElement('ol');
            preview.appendChild(list);
            for(var i = 0; i < curFiles.length; i++) {
                var listItem = document.createElement('li');
                var para = document.createElement('p');
                
                para.textContent = 'Nom du fichier : ' + curFiles[i].name;
                var image = document.createElement('img');
                image.src = window.URL.createObjectURL(curFiles[i]);

                listItem.appendChild(image);
                listItem.appendChild(para);

      list.appendChild(listItem);
    }
  }
}
</script>


<?php 
    $lienCpt = '../comptage/mon_compteur.txt';

    require '../php/footer.inc.php';
    require '../php/fin_html.inc.php';
?>