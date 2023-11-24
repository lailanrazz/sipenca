<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Cagar Budaya</title>
    <link rel="icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif" type="image/x-icon">
    <style>
        body {
            background-color: #f5deb3; /* Cream background color */
            color: #8b4513; /* Brown text color */
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

        h1 {
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
        
    </style>
</head>

<body>
    <div id="form-container">
        <h1>Input Data Cagar Budaya</h1>

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
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $kategori = $_POST['kategori'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "diy";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO cagar_budaya (nama, longitude, latitude, kategori) VALUES ('$nama', '$longitude', '$latitude', '$kategori')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
    </div>
</body>

</html>

