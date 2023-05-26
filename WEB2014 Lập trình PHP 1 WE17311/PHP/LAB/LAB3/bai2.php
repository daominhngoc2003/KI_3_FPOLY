<?php
define ( "DEC_10", 10 );
// đọc biến $n từ FORM
$n = 0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}
 
/**
 * Tính tổng của các chữ số của một số nguyên dương
 *
 * @param n: số nguyên dương
 * @return integer
 */
function totalDigitsOfNumber($n) {
    $total = 0;
    do {
        $total = $total + ($n % DEC_10);
        $n = floor ( $n / DEC_10 );
    } while ( $n > 0 );
    return $total;
}
 
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Nhập số nguyên:</td>
   <td><input type="text" name="n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Phân tích"></td>
  </tr>
 </table>
</form>
<br>
<?php
if (filter_var ( $n, FILTER_VALIDATE_INT )) {
    echo ("Tổng của các chữ số của $n là: " . totalDigitsOfNumber ( $n ));
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>