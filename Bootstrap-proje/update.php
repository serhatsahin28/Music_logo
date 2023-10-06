<?php
include 'connect.php';

if($_POST) {
    $baslik1 = $_POST['baslik1'];
    $altbaslik = $_POST['altbaslik'];
    $kbaslik = $_POST['kbaslik'];
    $iyazi = $_POST['iyazi'];
    $kbaslik2 = $_POST['kbaslik2'];
    $iyazi2 = $_POST['iyazi2'];
    $kbaslik3 = $_POST['kbaslik3'];

    $target_dir = "img/";
 $Image = basename($_FILES["fileToUpload"]["name"]);
 $tmp_name = $_FILES["fileToUpload"]["tmp_name"][$key];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($Image,PATHINFO_EXTENSION));

    if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "img/";
        $Image = basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $Image;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        // resim dosyası mı kontrolü yapalım
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check === false) {
            echo "Dosya bir resim değil.";
            $uploadOk = 0;
        }
    
        // dosya var mı kontrolü yapalım
        if (file_exists($target_file)) {
            echo "Maalesef bu dosya zaten var.";
            $uploadOk = 0;
        }
    
        // dosya boyutu kontrolü yapalım
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Maalesef dosyanız çok büyük.";
            $uploadOk = 0;
        }
    
        // dosya tipi kontrolü yapalım
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sadece JPG, JPEG, PNG & GIF dosya formatları kabul edilir.";
            $uploadOk = 0;
        }
    
        // dosya yükleme işlemi
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "Dosya başarıyla yüklendi.";
            } else {
                echo "Dosya yükleme hatası.";
            }
        }
    }
    
    
    // veritabanı güncelleme işlemi
    $update = "UPDATE ust_kisim SET Image ='$Image',baslik1='$baslik1',altbaslik='$altbaslik',kbaslik='$kbaslik',iyazi='$iyazi',kbaslik2='$kbaslik2',iyazi2='$iyazi2',kbaslik3='$kbaslik3' WHERE Id=1";

    mysqli_query($baglanti, $update);

    if($update) {
        header("Location:index.php?durum=ok");
    } else {
        header("Location:update.php?durum=no");
    }
}

$sorgu="SELECT * FROM ust_kisim";
$ust_kisim = mysqli_fetch_assoc(mysqli_query($baglanti,$sorgu));




?>

<html>
    <body>
        <form action="update.php" method="post" enctype="multipart/form-data">
            Baslik1: <input type="text" name="baslik1" value="<?php echo $ust_kisim['baslik1']; ?>"><br>
            Altbaslik: <input type="text" name="altbaslik" value="<?php echo $ust_kisim['altbaslik']; ?>"><br>
            Kbaslik: <input type="text" name="kbaslik" value="<?php echo $ust_kisim['kbaslik']; ?>"><br>
            İkincibaslik: <input type="text" name="iyazi" value="<?php echo $ust_kisim['iyazi']; ?>"><br>
            Kbaslik2: <input type="text" name="kbaslik2" value="<?php echo $ust_kisim['kbaslik2']; ?>"><br>
            iyazi2: <input type="text" name="iyazi2" value="<?php echo $ust_kisim['iyazi2']; ?>"><br>
            kbaslik3: <input type="text" name="kbaslik3" value="<?php echo $ust_kisim['kbaslik3']; ?>"><br>
            <br>
            <br><br>
            Resim yükleme:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <input type="submit" name="submit" value="Güncelle">
        </form>
        
    </body>
</html>

