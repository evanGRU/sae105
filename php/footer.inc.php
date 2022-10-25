    <footer>
            
            <div id="footer_contact">
                <a href="../views/contact.php">
                    <h1>NOUS CONTACTER</h1>
                    <span><img src="../images/right_arrow.png" alt=""></span>
                </a>
            </div>

            <div id="footer_nav">
                <div class="footer_block">
                    <div class="footer_title">
                        <h1>RESEAUX</h1>
                    </div>
                    <ul>
                        <li>
                            <img src="../images/facebook.png" alt="">
                            <a href="">FACEBOOK</a>
                        </li>
                        <li>
                            <img src="../images/instagram.png" alt="">
                            <a href="">INSTAGRAM</a>
                        </li>
                        <li>
                            <img src="../images/twitter.png" alt="">
                            <a href="">TWITTER</a>
                        </li>
                        <li>
                            <img src="../images/youtube.png" alt="">
                            <a href="">YOUTUBE</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_block">
                    <div class="footer_title">
                        <h1>POLITQUES</h1>
                    </div>
                    <ul>
                        <li>
                            <a href="">CONFIDENTIALITE</a>
                        </li>
                        <li>
                            <a href="">COOKIES</a>
                        </li>
                        <li>
                            <a href="">UTILISATION</a>
                        </li>
                        <li>
                            <a href="">COPYRIGHT</a>
                        </li>
                        <li>
                            <a href="">MENTIONS LEGALES</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_block">
                    <div class="footer_title">
                        <h1>NAVBAR</h1>
                    </div>
                    <ul>
                        <li>
                            <a href="">ACCUEIL</a>
                        </li>
                        <li>
                            <a href="">DONNEES</a>
                        </li>
                        <li>
                            <a href="">GALERIE</a>
                        </li>
                        <li>
                            <a href="">CONTACT</a>
                        </li>
                    </ul>
                </div>   
            </div>

            <div id="footer_copyright">
                <h3>©STAT'ALBUMS - 2022 / <?php
                        $nb = trim(file_get_contents($lienCpt));
                        $nb += 1;
                        echo $nb . "\n";
                        file_put_contents($lienCpt, $nb, LOCK_EX);
                    ?> visiteurs  </h3>
            </div>
    </footer>