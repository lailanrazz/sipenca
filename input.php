<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Cagar Budaya</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-icon.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style4.css" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
    <link rel="icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif" type="image/x-icon">
    <style>
        body {
            background-color: #f5deb3;
            color: #8b4513;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #form-container {
            max-width: 400px;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h4 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #8b4513;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: green;
        }

        button {
            background-color:#8b4513;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div id="form-container">
        <h4>Input Data Cagar Budaya</h4>

        <form method="post" action="">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <br>
            <label for="longitude">Longitude:</label>
            <input type="text" name="longitude" id="longitude">
            <br>
            <label for="latitude">Latitude:</label>
            <input type="text" name="latitude" id="latitude">
            <br>
            <label for="kategori">Jenis Cagar Budaya:</label>
            <input type="text" name="kategori" id="kategori">

            <input type="submit" name="submit" value="Simpan Data">

            <!-- "Cek Data" button to open index.php -->
            <a href="index.php"><button type="button">Cek Data</button></a>
        </form>

        <?php
        if (isset($_POST['submit'])) {
        }
        ?>
    </div>
</body>

</html>
