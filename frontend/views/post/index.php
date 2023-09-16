<?php
if($model->hasErrors()){
        echo "<pre>";
            print_r($model->getErrors());
        echo "<pre>";
    }

echo "<pre>";
print_r($model->attributes);
echo "<pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post Index</title>
</head>
<body>
    <form method="post">
        <label for="malumot_1">Malumot 1</label>
        <input type="text" name="malumot_1" id="malumot_1"><br>
        <label for="malumot_2">Malumot 2</label>
        <input type="text" name="malumot_2" id="malumot_2"><br>

        <input type="file" name="rasm">

        <button type="submit">Yuborish</button>
    </form>
</body>
</html>