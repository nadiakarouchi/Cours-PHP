<footer>
    <div class="container-fluid bg-primary p-3 m-2 text-center text-white fs-2">
        <p>
        <?php 
        setlocale(LC_ALL, 'fr_FR');
        echo strftime("%A %e %B %Y");
        echo ' - ';
        date_default_timezone_set("Europe/Paris");
        echo date('H:i:s');
        ?>
        </p>
    </div>
</footer>