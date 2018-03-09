<?php 
    @$alas = $_REQUEST['alas'];
    @$tinggi = $_REQUEST['tinggi'];
    @$sisi = $_REQUEST['sisi'];
    @$tinggi_prisma = $_REQUEST['tinggi_prisma'];
    @$luas_alas_segitiga = 1/2 * $alas * $tinggi;
    @$volume_prisma_segitiga = $luas_alas_segitiga * $tinggi_prisma;
    @$luas_alas_persegi = $sisi * $sisi;
    @$volume_prisma_persegi = $luas_alas_persegi * $tinggi_prisma;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>PRISMA</title>
    </head>
    <body>
        <form method="REQUEST">
            <table>
                <tr>
                    <td>alas</td>
                    <td>=</td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi prisma</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi_prisma" value="<?php echo $tinggi_prisma; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Alas Prisma Segitiga= ".$luas_alas_segitiga." cm^2<br/>";
                echo "Volume Prisma Segitiga = ".$volume_prisma_segitiga." cm^3<br/><br/>";
                echo "Luas Alas Prisma Persegi = ".$luas_alas_persegi." cm^2<br/>";
                echo "Volume Prisma Persegi = ".$volume_prisma_persegi." cm^3<br/>";
            ?>
        </form>
    </body>
</hmtl>