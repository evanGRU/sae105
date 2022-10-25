<?php 
    $accueil = 'index.php';
    $donnees = 'views/donnees.php';
    $galerie = 'views/galerie.php';
    $contact = 'views/contact.php';
    $css = '';

    require 'php/debut_html.inc.php';

    $hero = '<div id="hero-bg">
                <div class="hero-content">
                    <div>
                        <h1>YOUV DEE</h1>
                        <p>Le parfait mélange de rap et de rock</p>
                    </div>
                </div>
                <div class="hero-img">

                </div>
            </div>';
            
    require 'php/header.inc.php';
?>


<main>

    <div id="bg-content1">
        <div id="content1">
            <div id="content-txt1">
                <h1>Covers d'albums</h1>
                <span>Nos covers les plus récentes.</span>
            </div>
            
            <div id="content-pics">
                <div class="objet-gal pic-1 text-gal">
                    <div>
                        <span>Népal - Adios Bahamas</span>
                    </div>
                </div>
                <div class="objet-gal pic-2 text-gal">
                    <div>
                        <span>Alpha Wann - DonDada Mixtape</span>
                    </div>
                </div>
                <div class="objet-gal pic-3 text-gal">
                    <div>
                        <span>Frenetik - Jeu de Lumières</span>
                    </div>
                </div>
                <div class="objet-gal pic-4 text-gal">
                    <div>
                        <span>SCH - JVLIVS II</span>
                    </div>
                </div>
                <div class="objet-gal pic-5 text-gal">
                    <div>
                        <span>Green Montana - Melancholia</span>
                    </div>
                </div>
            </div>
            
            <div id="content1_link">
                <a href="views/galerie.php">
                    <h1>EN VOIR PLUS +</h1>
                </a>
            </div>
        </div>
    </div>


    <div id="bg-content2">
        <div id="content2_title">
            <h1>DONNEES</h1>
        </div>
        <div id="content2_tab">
            <table id="maTable">
				<thead>
					<tr>
						<td>ID</td>
						<td>ARTISTE</td>
						<td>ALBUM</td>
						<td>SORTIE</td>
						<td>TITRES</td>
						<td>DUREE</td>
					</tr>
				</thead>
				<tbody>
					<?php 
								$fichier='donnees/album.json';
								$tabAlbumJSON=file_get_contents($fichier);
								$tabAlbumPHP=json_decode($tabAlbumJSON);
								
								for ($i=0; $i<10; $i++){
									echo '<tr>'."\n";
                                    echo '<td>'.$tabAlbumPHP[$i]->id.'</td>'."\n";
									echo '<td>'.$tabAlbumPHP[$i]->artiste.'</td>'."\n";
									echo '<td>'.$tabAlbumPHP[$i]->nom_album.'</td>'."\n";
									echo '<td>'.$tabAlbumPHP[$i]->date_sortie.'</td>'."\n";
									echo '<td>'.$tabAlbumPHP[$i]->titres.'</td>'."\n";
									echo '<td>'.$tabAlbumPHP[$i]->duree.'</td>'."\n";
									echo '</tr>'."\n";
								}?>
				</tbody>
			</table>

            <div id="content2_link">
                <a href="views/donnees.php">
                    <h1>EN VOIR PLUS +</h1>
                </a>
            </div>
        </div>
    </div>
</main>

<?php 
    $lienCpt = 'comptage/mon_compteur.txt';

    require 'php/footer.inc.php';
    require 'php/fin_html.inc.php';
?>