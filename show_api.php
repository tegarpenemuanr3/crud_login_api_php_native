<?php
//load file
$data = file_get_contents('http://localhost/crud_api/data.php');

//decode json to associative array
$json_arr = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($json_arr["notes"] as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value["note"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>