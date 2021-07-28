<?php
/**
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial (5) -> 5* 4 * 3 * 2 * 1 = 120 
 */

 /**
  * fungsi -> void dan non-void
  * void ->fungsi yg tdk mengembalikan value
  * non-void -> fungsi yg mengembalikan value (return value)
  * analogi -> ketua kelas meminta info tentang saldo kas
  * fungsi hitungSaldo()-> return saldonya
  * analogi -> ketua kelas meminta info tentang saldo kas
  * fungsi narikKas()
  */
function faktorial ($number){
	$result = 1;
	 for($i=$number; $i >= 1 ; $i--){
		 $result = $result * $i;
	 }
	  //return $fresult;
	  echo "Faktorial of $number is $result";
	}
// echo "Faktorial of 10 is " . faktorial(10);
echo faktorial(5);
?>
