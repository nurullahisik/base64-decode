<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="container" style="margin-top: 30px;">
    <form action="convert.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Text</label>
            <textarea class="form-control" name="text" id="" cols="30" rows="10" placeholder=""></textarea>
        </div>
        <div class="form-group" style="text-align: center;">
            <span>OR</span>
        </div>
        <div class="form-group">
            <label for="">File</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
            </div>
        </div>

        <div class="form-group">
            <input type="radio" name="type" value="jpeg" id="radio-1" checked>
            <label class="form-check-label" for="radio-1">JPG</label>

            <input type="radio" name="type" value="png" id="radio-2">
            <label class="form-check-label" for="radio-2">PNG</label>

            <input type="radio" name="type" value="gif" id="radio-3">
            <label class="form-check-label" for="radio-3">GIF</label>

            <input type="radio" name="type" value="pdf" id="radio-4">
            <label class="form-check-label" for="radio-4">PDF</label>

        </div>

        <div class="form-group" style="text-align: right;">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>