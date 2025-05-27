<?php
    function tanggalAkhir($bulan, $tahun){
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
        return $daysInMonth;
    }

    function load_asset(){
        return url('/');
    }
?>