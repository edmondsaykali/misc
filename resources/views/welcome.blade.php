<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

        <!-- Fonts 
        -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
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

<body>
    <div class=" mb-4" style='margin:auto'>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            Filter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class='row'>
                            <div class='col'>
                                <div>
                                    <span>Country </span>
                                    <select id='countries' class="form-control ">
                                        <option selected>All</option>

                                        <option>Jordan</option>
                                        <option>UAE</option>

                                    </select>
                                </div>


                                <div>
                                    <span>City </span>
                                    <select class="form-control ">
                                        <option selected>All</option>
                                        <option>Amman</option>
                                        <option>Dubai</option>
                                        <option>Abu Dhabi</option>
                                        <option>Ajman</option>
                                        <option>Ras Al Kheimah</option>
                                        <option>Sharjah</option>
                                    </select>
                                </div>

                                <div>
                                    <span> Locale </span>
                                    <select class="form-control ">
                                        <option selected>All</option>
                                        <option>Al Khodr</option>
                                        <option>Sports City</option>
                                        <option>Marina</option>
                                        <option>JLT</option>
                                        <option>JVC</option>
                                    </select>
                                </div>

                                <div>
                                    <span>ATM </span>
                                    <select class="form-control ">
                                        <option selected>All</option>
                                        <option>Safeway Shemisani </option>
                                        <option>Khreibet Al Souk</option>
                                        <option>Manaseer - Tabarbour </option>
                                        <option>Jounyeh Deir Ghbar</option>


                                    </select>
                                </div>
                            </div>

                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Run</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>