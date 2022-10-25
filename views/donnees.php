<?php 
    $accueil = '../index.php';
    $donnees = 'donnees.php';
    $galerie = 'galerie.php';
    $contact = 'contact.php';
	$css = '../styles/styleDT.css';

    require '../php/debut_html.inc.php';

    $hero = '';

	require '../php/header.inc.php';
?>

<body>
        <main>
			<div id="tiitre">
				<h1>TOP 100 ALBUMS FR<br>sorties en 2020 et 2021</h1>
			</div>

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
								$fichier='../donnees/album.json';
								$tabAlbumJSON=file_get_contents($fichier);
								$tabAlbumPHP=json_decode($tabAlbumJSON);
								
								for ($i=0; $i<count($tabAlbumPHP); $i++){
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

			
			
		</main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#maTable').DataTable( {
                    "language": {
                        "url": 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
                    }
                });
            });
        </script>

    


<?php 
    $lienCpt = '../comptage/mon_compteur.txt';

    require '../php/footer.inc.php';
    require '../php/fin_html.inc.php';
?>