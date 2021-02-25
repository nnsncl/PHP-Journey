<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pokemon infos</title>
</head>

<body>
    <form method='POST' action='edit.php' enctype="multipart/form-data" >
        <input type='hidden' name='id' value='<?php echo $data->id; ?>' />
        <label for="name" >Name</label>
        <input type="text" name="nom" value="<?php echo $data->nom; ?>" /><br>
        <input type="submit" value="Edit" />
    </form>
</body>

</html>