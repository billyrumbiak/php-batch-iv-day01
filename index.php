    <?php

        include_once('include/header.php');
        // Nama Lengkap
        $namaDepan = 'Billy';
        $namaBelakang = 'Rumbiak';

        $textWelcome = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, quas?';
        $textSubTitle = 'Belajar PHP Day 01';

    ?>

    <!-- Hello -->
    <h1>Hello <?php echo $namaDepan .' '.$namaBelakang?> </h1>
    <h2> <?= $textWelcome ?> </h2>
    <p> <?= $textSubTitle ?> </p>

    <a href="home.php">Home</a>

    <?php include_once('include/footer.php') ?>