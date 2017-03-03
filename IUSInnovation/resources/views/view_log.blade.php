
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IUS Innovation</title>

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

                <table>
                  <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Device Type</th>
                    <th>Log</th>
                    <th>Resolved</th>
                    <th>Created Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->owner }}</td>
                    <td>{{ $user->device }}</td>
                    <td>{{ $user->log }}</td>
                    <td>{{ $user->resolve }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                      <form action="/edit_page/{{ $user->id }}" method="POST">
                        {{ csrf_field()}}
                        {{ method_field('PUT')}}
                        <button classs="btn btn-danger">
                          Edit
                        </button>
                      </form>
                    </td>
                    <td>
                      <form action="/view_log/{{ $user->id }}" method="POST">
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button classs="btn btn-danger">
                          Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </table>
                <h3>What would you like to do?</h3>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/add_new">Add New</a>
                </div>
            </div>
        </div>
    </body>
</html>
