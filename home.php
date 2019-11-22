<?php
include 'templates/header.php';
?>

<main class="homePage">
    <div class="main">
        <button>Front</button>
        <button>Back</button>
        <button>More</button>
    </div>
    <div class="child">
        <div class="front">
            <a href="languages/html.php"><button class="display">HTML5</button></a>
            <a href="languages/css.php"><button class="display">CSS3</button></a>
            <a href="languages/javascript.php"><button class="display">JavaScript</button></a>
        </div>
        <div class="back">
            <a href="languages/php.php"><button class="display">PHP</button></a>
            <a href="languages/sql.php"><button class="display">SQL</button></a>
            <a href="languages/ajax.php"><button class="display">AJAX</button></a>
        </div>
        <div class="more">
            <a href="languages/git.php"><button class="display">Git/Github</button></a>
            <a href="languages/vagrant.php"><button class="display">Vagrant</button></a>
            <a href="languages/bash.php"><button class="display">Bash</button></a>
        </div>
    </div>
</main>

<script src="../js/home.js"></script>
<?php
include'templates/footer.php';
