<!-- Proses Update -->
<?php
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan= $_POST['jabatan'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query_update = mysqli_query($konek,"UPDATE anggota SET  nama = '$nama',
                                                            jabatan = '$jabatan', 
                                                            tlp = '$tlp',
                                                            alamat = '$alamat', 
                                                            username = '$username', 
                                                            password = '$password',
                                                            WHERE id_petugas = '$id'");

if ($query_update) {
    ?>
    <script>
        alert('Data Berhasil Diupdate')
        window.location.href='dashboard.php?page=petugass';
    </script>
    <?php
}
?>