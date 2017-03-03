<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit - IUS Innovation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    IUS Innovation
                </div>
                <!-- Table Added here-->
                <form method ="POST" action="#" id="edit">
                  {{ method_field('PUT') }}
                  {!! csrf_field() !!}
                  <input type="text" placeholder="Owner" name="owner" value="{{$user->owner}}">
                  <input type="text" placeholder="Device Type" name="device" value="{{$user->device}}">
                  <select>
                    <option name="resolve" value="Resolved?">Resolved?</option>
                    <option name="resolve" value="Yes">Yes</option>
                    <option name="resolve" value="No">No</option>
                  </select>
                  <br>
                  <textarea rows="4" cols="50" placeholder="Log" name="log" value="">{{$user->log}}</textarea>
                  <br>
                  <input type="submit" value="Update">
                </form>

                <h3>What would you like to do?</h3>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/view_log">View Log</a>
                </div>
            </div>
        </div>
    </body>
</html>
