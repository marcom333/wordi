<!doctype html>
<html lang="en">
    <head>
        <title>Wordies</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            h1, h3{
                color: rgb(39, 120, 155);
            }
            .nav-color{
                background-color: rgb(39, 120, 155);
            }
            .color{
                color: rgb(221, 218, 12);
            }
            .color-empty{
                color: rgb(143, 141, 9);
            }
            .color:hover{
                color: rgb(255, 251, 0);
            }
            .color-empty:hover{
                color: rgb(255, 251, 0);
            }
            .stars{
                /*padding-top: 5px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                background-color: rgba(0,0,0,0.3);
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;*/
            }
            .custom-select{
                position: relative;
                -webkit-box-flex: 1;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                width: 1%;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm navbar-dark nav-color">
            <a class="navbar-brand" href="#">Wordies</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Words <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">New word</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" id="searchInput">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="button" onclick="search()">Search</button>
                </form>
            </div>
        </nav>

        <div class="container mt-2">
            @yield("content")
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            function search(){
                item = document.getElementById("searchInput");
                window.location.href = '{{url("/search")}}/'+item.value;
            }
        </script>
    </body>
</html>