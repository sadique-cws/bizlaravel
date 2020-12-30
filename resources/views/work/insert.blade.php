<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for=""></label>
                            <input type="text" name="" class="form-control" value="{{old('')}}">
                            @error('')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""></label>
                            <input type="text" name="" class="form-control" value="{{old('')}}">
                            @error('')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""></label>
                            <input type="text" name="" class="form-control" value="{{old('')}}">
                            @error('')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>  <div class="mb-3">
                            <label for=""></label>
                            <input type="text" name="" class="form-control" value="{{old('')}}">
                            @error('')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>  <div class="mb-3">
                            <input type="submit" name="send" class="btn btn-outline-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>