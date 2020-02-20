<?php
function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " Belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " Seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
		}
		return $temp;
	}

	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "Minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}
		return $hasil;
	}
  ?>
      Kepuasan Anda Jaminan Kami
    Jl.KUSUMA BANGSA NO:175 WIROSARI
            085600641929
========================================

1)1910034-KINO CHEWY CANDY MANGGA 100
1 PCS X @ 4.900                    4.900

2)1900046-KINO DURIAN CANDY
1 PCS X @ 4.900                    4.900
________________________________________
ITEMS  =                            2
TOTAL QTY  =                        2
TOTAL RP.  =                       9.800
BAYAR CASH =                       9.800
<?=terbilang(100000)." Rupiah\n"?>
PUSAT BELANJA PALING LENGKAP DAN MURAH
UNTUK MEMENUHI SEMUA KEBUTUHAN ANDA
MILIKI MEMBER CARD DAN KUMPULKAN POIN
  SERTA DAPATKAN HADIAHNYA
BARANG YG SUDAH DIBELI TIDAK DAPAT
 DITUKAR ATAU DIKEMBALIKAN
14-06-18/20:52:28/03-00162/YULI
    ** Terima Kasih **
