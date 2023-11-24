<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Cagar Budaya Kabupaten Sleman</title>
    <link rel="icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif" type="image/x-icon">
    <style>
        body {
            background-color: #f5deb3; /* Cream background color */
            color: #8b4513; /* Brown text color */
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px 0; /* Added top and bottom margins */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; /* Added to arrange content vertically */
        }

        #title-container {
            margin-bottom: 20px; /* Added margin to separate title from the table */
        }

        #content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #8b4513; /* Brown border color */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #8b4513; /* Deep sky blue header background color */
            color: #fff; /* White text color */
        }

        tr:nth-child(even) {
            background-color: #f5deb3; /* Cream background color for even rows */
        }

        tr:nth-child(odd) {
            background-color: #f5deb3; /* Cream background color for odd rows */
        }

        tr:hover {
            background-color: #fff; /* Plum background color on hover */
        }
    </style>
</head>

<body>
    <div id="content-container">
        <div id="title-container">
            <h1 style="color: #8b4513;">Data Cagar Budaya Kabupaten Sleman</h1>
        </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "diy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $checkColumnsQuery = "SHOW COLUMNS FROM cagar_budaya LIKE 'longitude'";
    $checkColumnsResult = $conn->query($checkColumnsQuery);

    if ($checkColumnsResult->num_rows == 0) {
        $alterTableQuery = "ALTER TABLE cagar_budaya
            ADD COLUMN longitude DECIMAL(8,4) AFTER kecamatan,
            ADD COLUMN latitude DECIMAL(8,4) AFTER longitude";
        $conn->query($alterTableQuery);
    }

    $sql = "SELECT * FROM cagar_budaya";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Nama</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Kategori</th>
                </tr>";

        $row_number = 0;
        while ($row = $result->fetch_assoc()) {
            $row_number++;
            $row_class = $row_number % 2 == 0 ? "even-row" : "odd-row";
            echo "<tr class='$row_class'>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["longitude"] . "</td>
                    <td>" . $row["latitude"] . "</td>
                    <td>" . $row["kategori"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>




