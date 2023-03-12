<?php

if (! function_exists('rupiahTerbilang')) {

    function rupiahTerbilang($angka)
    {
        $angka = abs($angka);

        $terbilang = array(
            '', 'Satu', 'Dua', 'Tiga', 'Empat',
            'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan',
            'sepuluh', 'Sebelas'
        );

        $hasil = '';

        if ($angka < 12) {
            $hasil = $terbilang[$angka];
        } else if ($angka < 20) {
            $hasil = $terbilang[$angka - 10] . ' Belas';
        } else if ($angka < 100) {
            $hasil = $terbilang[(int) ($angka / 10)] . ' Puluh ' . $terbilang[$angka % 10];
        } else if ($angka < 200) {
            $hasil = 'seratus ' . rupiahTerbilang($angka - 100);
        } else if ($angka < 1000) {
            $hasil = $terbilang[(int) ($angka / 100)] . ' Ratus ' . rupiahTerbilang($angka % 100);
        } else if ($angka < 2000) {
            $hasil = 'seribu ' . rupiahTerbilang($angka - 1000);
        } else if ($angka < 1000000) {
            $hasil = rupiahTerbilang((int) ($angka / 1000)) . ' Ribu ' . rupiahTerbilang($angka % 1000);
        } else if ($angka < 1000000000) {
            $hasil = rupiahTerbilang((int) ($angka / 1000000)) . ' Juta ' . rupiahTerbilang($angka % 1000000);
        } else if ($angka < 1000000000000) {
            $hasil = rupiahTerbilang((int) ($angka / 1000000000)) . ' Milyar ' . rupiahTerbilang(fmod($angka, 1000000000));
        } else if ($angka < 1000000000000000) {
            $hasil = rupiahTerbilang((int) ($angka / 1000000000000)) . ' Trilyun ' . rupiahTerbilang(fmod($angka, 1000000000000));
        }

        return $hasil;
    }

}