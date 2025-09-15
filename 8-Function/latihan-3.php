<?php
    
    $pelajar="Humeng";
    
    function SISWA($nama="Arkhan", $kelas="XI RPL"){
        global $pelajar; // mengambil variabel dari luar function
        echo "Siswa kelas $kelas yang bernama $pelajar selalu rajin";
    }

    SISWA();

?>