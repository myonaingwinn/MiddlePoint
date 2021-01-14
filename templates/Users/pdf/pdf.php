<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            font-style: blod;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <!-- <th>Fullname</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created Date</th>
                <th>Modified Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <!-- <td><?= h($user->fullname) ?></td> -->
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($role = ($user->role == 0) ? "User" : "Admin") ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
