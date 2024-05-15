<html>
    <head>
        <title>Hitung Gaji</title>
    </head>
    <body>
        <h3>Hitung Gaji Karyawan</h3>
        <h4>Masukan data diri anda:</h4>
        <form action="hitunggaji.php" method="post">
            <table>
                <tr>
                    <td>Masukan Nama :</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Pilih Jabatan</td>
                    <td>
                        <input type="radio" name="jabatan" id="direktur" value="direktur">
                        <label for="direktur"> Direktur</label>
                        <input type="radio" name="jabatan" id="manager" value="manager">
                        <label for="manager"> Manager</label>
                        <input type="radio" name="jabatan" id="karyawan" value="karyawan">
                        <label for="karyawan"> Karyawan</label>
                        <input type="radio" name="jabatan" id="lainnya" value="lainnya">
                        <label for="lainnya"> Lainnya</label> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $jabatan = $_POST['jabatan'];

            //tunjangan dan ppn
            $tunjangan = 0.1;
            $pajak= 0.2;
            $gaji= 0;

            //Gaji di setiap pilihan
            switch ($jabatan) {
                case "direktur":
                    $gaji = 3000000;
                    $hasil_tunjangan = $gaji * $tunjangan;
                    $hasil_pajak = $gaji * $pajak;
                    break;
                case "manager":
                    $gaji = 2000000;
                    $hasil_tunjangan = $gaji * $tunjangan;
                    $hasil_pajak = $gaji * $pajak;
                    break;
                case "karyawan":
                    $gaji = 1000000;
                    $hasil_tunjangan = $gaji * $tunjangan;
                    $hasil_pajak = $gaji * $pajak;
                    break;
                case "lainnya":
                    $gaji = 800000;
                    $hasil_tunjangan = $gaji * $tunjangan;
                    $hasil_pajak = $gaji * $pajak;
                    break;
             }
             // menghitung gaji bersih
             $gaji_bersih = $gaji + $hasil_tunjangan - $hasil_pajak;

             // hasil gaji bersih
             echo "$name dengan jabatan $jabatan mendapatkan gaji Rp $gaji_bersih";

        }   
        ?>
    </body>
</html>