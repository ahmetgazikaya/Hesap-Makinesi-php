<!DOCTYPE html>
<html>
<head>
    <title>Hesap Makinesi</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="sayi1" placeholder="Sayı 1" required>
        <input type="text" name="sayi2" placeholder="Sayı 2" required>
        <select name="operator">
            <option value="topla">+</option>
            <option value="cikar">-</option>
            <option value="carp">*</option>
            <option value="bol">/</option>
        </select>
        <input type="submit" name="hesapla" value="Hesapla">
    </form>

    <?php
    if (isset($_POST['hesapla'])) {
        $sayi1 = $_POST['sayi1'];
        $sayi2 = $_POST['sayi2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'topla':
                $sonuc = $sayi1 + $sayi2;
                break;
            case 'cikar':
                $sonuc = $sayi1 - $sayi2;
                break;
            case 'carp':
                $sonuc = $sayi1 * $sayi2;
                break;
            case 'bol':
                if ($sayi2 != 0) {
                    $sonuc = $sayi1 / $sayi2;
                } else {
                    echo "Hata: Sıfıra bölme hatası!";
                }
                break;
            default:
                echo "Geçersiz operatör!";
                break;
        }

        echo "Sonuç: " . $sonuc;
    }
    ?>
</body>
</html>
