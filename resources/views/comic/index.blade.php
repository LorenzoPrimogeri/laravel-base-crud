<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container-fluid bg-secondary">
            <div class="container p-0 position-relative">
                <div class="row justify-content-between g-1 py-5">
                    @foreach ($comicsArray as $comic)
                    <div class="col d-flex flex-wrap">
                        <a href="{{route('comic.show', $comic->id)}}">
                            <div>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <div class="text-center">
                                    <p class="m-0 text-white">{{ $comic['series'] }}</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <a class="text-white w-100" href="">{{ $comic['type'] }}</a>
                                    <a class="text-white" href="">{{ $comic['price'] }}</a>
                                </div>
                            </div>
                    </div>
                    </a>
                    @endforeach
                </div>
                <div class="text-center py-3">
                    <a class="c-white lp-btn bg-blue" href="">Load More</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>