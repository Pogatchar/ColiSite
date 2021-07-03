<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script type="text/javascript" src="../js/countdown.js" defer></script>
        <link rel="stylesheet" href="{{ asset('css/') }}/app.css">
    </head>
    <body>

    <div class="wrap">
        <div class="logo">
            <img src="img/logo.png" alt="" />
        </div>
        <div class="content">
            <h1>Coming soon</h1>
            <p>Ce site est  <strong>en cours de création </strong>  </p>
            <div class="numbers" id="countdown" data-time="2021-12-25T16:56:22+0000">
                <div class="bloc">
                    <strong id="month"></strong>
                    <em>Mois</em>
                </div>

                <div class="bloc">
                    <strong id="days"></strong>
                    <em>Jours</em>
                </div>
                <div class="bloc">
                    <strong id="hours"></strong>
                    <em>Heures</em>
                </div>
                <div class="bloc">
                    <strong id="minutes"></strong>
                    <em>Minutes</em>
                </div>
                <div class="bloc last">
                    <strong id="seconds"></strong>
                    <em>Secondes</em>
                </div>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>

    </body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>
