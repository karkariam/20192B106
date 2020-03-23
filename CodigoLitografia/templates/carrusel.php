<?php include('../includes/header.php');   ?>

<div id="container">
    <?php
    $imagesDirectory = "../../DatosLitografia/";
    $n = 0;

    if (is_dir($imagesDirectory)) {
        $opendirectory = opendir($imagesDirectory);

        echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>";

        while (($image = readdir($opendirectory)) !== false) {
            if (($image == '.') || ($image == '..')) {
                continue;
            }

            $imgFileType = pathinfo($image, PATHINFO_EXTENSION);

            if (($imgFileType == 'jpg') || ($imgFileType == 'png')) {
                if ($n == 0) {
                    echo
                        "<div class='carousel-item active'>
                            <img class='d-block w-100' src='../../DatosLitografia/" . $image . "' width='300px' height='500px'>    
                        </div>";
                } else {
                    echo
                        "<div class='carousel-item'>
                            <img class='d-block w-100'  src='../../DatosLitografia/" . $image . "' width='300px' height='500px'>    
                        </div>";
                }
            }
            $n = $n + 1;
        }
        echo "</div>";
        echo "  <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
                </a>";
        echo "</div>";

        closedir($opendirectory);
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<?php include("../includes/footer.php");        ?>