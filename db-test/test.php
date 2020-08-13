<?php
    // Step 1 Open a connection to DB
    require '../prototype/config.php';

    // Step 2 perform a datbase table query
    $table = 'amazon';
    $query = "select * FROM {$table}";
    $result = mysqli_query($connection, $query);

    //Check for errors in SQL statement
    if (!$result) {
        die ('Databse query failed');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Test</title>

    <link rel="stylesheet" href="test-style.css">
</head>
<body>
    <?php
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>thumbnail</th>
                <th>poster</th>
                <th>actor-images</th>
                <th>actor</th>
                <th>type</th>
                <th>genre</th>
                <th>rating</th>
                <th>description</th>
            </tr>
            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['thumbnail']; ?> </td>
                <td> <?php echo $row['poster']; ?> </td>
                <td> <?php echo $row['actor-images']; ?> </td>
                <td> <?php echo $row['actor']; ?> </td>
                <td> <?php echo $row['type']; ?> </td>
                <td> <?php echo $row['genre']; ?> </td>
                <td> <?php echo $row['rating']; ?> </td>
                <td> <?php echo $row['description']; ?> </td>
            </tr>
    </table>
    <?php
        }
        // Step 4 Release returned data
        mysqli_free_result($result);

        // Step 5 Close database connection
        mysqli_close($connection);
    ?>        
</body>
</html>