<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Events &mdash; Jeblog</title>
        <link href="{{ asset('favicon.png') }}" type="img/x-icon" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="container-fluid row">
                <div class="col-md-5 content">
                    <div class="bg">
                        <img src="{{ asset('laravel-events.png') }}" alt="laravel-events" width="500px">
                    </div>
                    <div class="link">
                        <a href="https://medium.com/@jeriatno/laravel-events-b91102aa0eb3" target="_blank">Visit this article...</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3">Username:</label>
                                    <input class="form-control col-md-7" type="text" name="name" placeholder="Username" autocomplete="off" />
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Email:</label>
                                    <input type="email" class="form-control col-md-7" name="email" placeholder="Email" autocomplete="off"/>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Password:</label>
                                    <input class="form-control col-md-7" type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="form-group row btn-group">
                                    <button class="btn btn-dark mt-3" type="reset">Reset</button>
                                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
