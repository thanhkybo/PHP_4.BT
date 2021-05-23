<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <form action="../action/create.php" method="post">
        <table>
            <tr>
                <td>FirstName</td>
                <td><input type="text" name="firstName"></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><input type="text" name="lastName"></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="role" id="">
                        <option value="Hoc sinh">Hoc sinh</option>
                        <option value="Giao vien">Giao vien</option>
                        <option value="Giao vu">Giao vu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button>Add</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="../index.php"><- List Employees</a>
</div>
</body>
</html>
