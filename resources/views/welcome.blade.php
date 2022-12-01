<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3" >
                    <div class="card-header">
                        <h3>Upload Image</h3>
                    </div>
                    <img src="{{asset('/storage/images/gdwkxxU4mpM7aKu3D8di91ipvP3rkqg8gFGBxg56.png')}}" alt="">
                    <div class="card-body">
                        <form action="{{route('uploadImage')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" class="form-control" >
                            <button type="submit" class="btn btn-primary mt-2">Upload Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>