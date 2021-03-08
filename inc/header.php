<?php
/***************************************************************************/
/* print_header(...) */
/*********************************************************************/
function print_header(){ ?>
    <header>
	    <img id="wordmark" src="img/queens-wordmark.png" alt="Queen's University"/>
        <div id="hero-container" class="bee">
            <div class="overlay"></div>
            <img id="logo" src="img/queens-logo.png" alt="Queen's University Coat of Arms"/>
            <div id="site-title">
                <a href="index.php">Department of Agriculture</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li>
                        <div>
                            <form id="search-form" method="POST" action="./search-results.php">
                                <label for="Search-term">Search term(required)</label>
                                <input type="text" name=<?= INPUTNAME ?> id=<?= INPUTID ?> placeholder="Search" maxlength="100" required/>
                                <input type="submit" value="Search">
                            
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/QueensComputing">
                        <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/queenscomputing">
                        <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
	</header>
<?php
}