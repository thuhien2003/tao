<!-- 1. Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.  -->
<?php
echo "Bài 1: <br>";
for($i = 1; $i<=10; $i++){
    if($i %2 == 0)
        echo $i."<br>";
}
?>
<!-- 2. Viết một chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không.  -->
<?php
echo "Bài 2: <br>";
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
?>
<!-- 3. Viết một hàm PHP có tên inHinhChuNhat nhận vào hai tham số là chiều rộng và chiều cao, 
và in ra một hình chữ nhật sử dụng dấu sao (*) với kích thước đã cho. 
Gọi hàm này để in ra một hình chữ nhật có chiều rộng là 5 và chiều cao là 3 -->
<?php
// echo "Bài 3: <br>";
// function inHinhChuNhat($chieuRong, $chieuCao) {
//     for ($i = 0; $i < $chieuCao; $i++) {
//         for ($j = 0; $j < $chieuRong; $j++) {
//             echo '* ';
//         }
//         echo "<br>";
//     }
// }

// Gọi hàm để in ra hình chữ nhật có chiều rộng là 5 và chiều cao là 3
// inHinhChuNhat(5, 3);
?>