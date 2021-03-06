


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-color:#dadaff;">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="jumbotron" style="background-color:white;padding: 15px 15px;border-radius: 20px;">
                                    <form method="POST" action="{{ route('confirmevent.store') }}"  >
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Confirmar Evento</h1>
                                            </div>
                                            <div class="col-md-12">
                                                <p>{{$event->user->name}} te convidou para o evento:</p>
                                                <b>{{$event->title}}</b>.
                                                <p>Confirme sua presença inserindo seu nome abaixo.</p>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom:15px;">
                                                <input type="hidden" name="event_id" value="{{$event->id}}">
                                                <input type="text" name="name" class="form-control input-lg" placeholder="Insira seu Nome">
                                            </div>
                                            <div class="col-md-12" >
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Estarei Lá</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </div>
    </body>
</html>
