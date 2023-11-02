<!DOCTYPE html>
<html>
<head>
    <title>Update Link Live YouTube</title>
</head>
<body>
    <?php

    if (isset($_POST['submit'])) {

        include '../koneksi.php';


        $link = $_POST['youtube_link'];


        $trimmedLink = preg_replace('/https:\/\/www\.youtube\.com\/live\//', '', $link);


        $sql = "UPDATE link SET youtube_link='$trimmedLink' WHERE id=1";
        if ($conn->query($sql) === TRUE) {
            echo "Basis data berhasil diperbarui.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
    }
    ?>

    <form method="post" action="">
        Masukkan URL YouTube: <input type="text" name="youtube_link">
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
