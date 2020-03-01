<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Home Area</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) { ?> 
                <tr>
                    <td><?php echo $student->id ?></td>
                    <td><?php echo $student->name ?></td>
                    <td><?php echo $student->address ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>