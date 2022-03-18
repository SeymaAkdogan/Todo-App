<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Todo App</title>
</head>

<body class="bg-light">
    <div class="container my-3">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <h1 class="text-center">Todo App</h1>
                <hr>
                <div class="row my-3">
                    <div class="col-md-5 justify-content-left mb-2">
                        <a href="#" class="btn btn-outline-danger" id="create_btn">Create</a>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-danger mb-3 hide" id="cancel_btn">Cancel</a>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3 justify-content-right">
                        <a href="/getAll" class="btn btn-outline-danger">Get All Activities</a>
                    </div>
                </div>

                <div class="hide" id="create_form">
                    @include('create_activity')
                </div>

                @yield('content')

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>
        $('#create_form').hide();
        $('#cancel_btn').hide();
        $(document).ready(function() {

            $("#create_btn").click(function() {
                $("#create_form").toggle();
                $('#cancel_btn').show();
                $('#create_btn').hide();
            });
        });
    </script>


</body>

</html>
