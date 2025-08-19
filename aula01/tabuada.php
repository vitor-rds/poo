<?php include 'layout/header.php'; ?>

<main class="container">
    <?php
   
        $tab = $_GET['tabuada'];
        for ($i = 0; $i <= 10; $i++) {
            echo "$tab x $i = " . ($tab * $i) . "<br>";
        }
    
    ?>
</main>

<?php include 'layout/footer.php'; ?>