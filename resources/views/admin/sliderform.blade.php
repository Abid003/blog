<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

    <h1>All Sliders </h1>

    <table>
        <tr>
            <th>title</th>
            <th>title</th>
            <th>title</th>
        </tr>
        <img src=

        <tbody>
        @foreach ($slider as $sl)
            <tr>
            <td>{{ $sl->title }}</td>
                <td>{{ $sl->desc }}</td>
                <td><img height="50px" src="data:image/png;base64,{{ $sl->image }}"></td>
            </tr>
        @endforeach
    </tbody>
    </table>



        <h1 class="text-center">Add New Slider</h1>

        <div class="col-4"></div>

        <div class="row">
            <div class="container col-4">
                <form class="form  mt-5" action="add" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="m-2">
                        <label for="image">Add Bg Image</label><br>
                        <input type="file" name="image" placeholder="image">
                    </div>
                    <div class="m-2">
                        <label for="desc">Add Description</label><br>
                        <input type="text" name="desc" placeholder="description">
                    </div>
                    <div class="m-2">
                        <label for="title">Title</label><br>
                        <input type="text" name="title" placeholder="title">
                    </div>
                    <div class="m-2">
                        <input type="submit" class="btn btn-primary" value="Upload" name="upload">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4"></div>

    </div>

</body>

</html>