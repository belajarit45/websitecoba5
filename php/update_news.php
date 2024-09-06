<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    
    // Periksa apakah gambar diupload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageName = basename($_FILES['image']['name']);
        $imagePath = 'images/' . $imageName;
        
        // Pindahkan file gambar ke folder images
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Simpan berita ke database
            // Ganti kode ini dengan penyimpanan data ke database
            echo 'Berita berhasil diperbarui';
        } else {
            echo 'Gagal meng-upload gambar';
        }
    } else {
        echo 'Gambar tidak diupload';
    }
}
?>
