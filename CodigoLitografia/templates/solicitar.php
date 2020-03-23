<?php 

$titulo = "Solicitar cita";

include_once 'layouts/doc-declaracion.inc.php';
include_once 'layouts/navbar.inc.php';
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-nav').find('a.active').removeClass('active');
        $('.navbar-nav').find('a.solicitar').addClass('active');
    });
</script>

<?php 
include_once 'layouts/footer.inc.php';
include_once 'layouts/doc-declaracion.inc.php';
?>