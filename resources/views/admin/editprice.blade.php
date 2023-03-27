<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{dd( $title)}}

<div class="container text-center">
       Edit Pricing
        <form class="form  mt-5" action="add" method="post">
            {{ csrf_field() }}
            <div class="m-2">
                <label for="basic " class="text-left">Basic</label><br>
                <input type="number" name="basic" >
            </div>
            <div class="m-2">
                <label for="standard">standard</label><br>
                <input type="number" name="standard">
            </div>
            <div class="m-2">
                <label for="premium">premium</label><br>
                <input type="number" name="premium">
            </div>
            <div class="m-2">
                <input type="submit" class="btn btn-primary" value="update" name="submit">
            </div>
        </form>
    </div>
</body>
</html>