<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>document.cookie="Authorization=Bearer 7|Z2OLOpUrWuyxOJm4EtXyWaye7dREa6uPxs6XDOEp"</script>
</head>
<body>
<form action="{{ env('URL') . '/uploadAvatar' }}" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Submit" >
</form>
</body>
</html>