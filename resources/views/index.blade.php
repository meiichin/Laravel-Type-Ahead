<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
</head>

<body>
    <div class="container">
        <h2Laravel Typeahead Search Tutorial With Example></h2Laravel><br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Search">Search:</label>
                <input type="text" class="form-control" id="search" name="search">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var path = "{{ url('search') }}";
        $('#search').typeahead({
             minLength: 2,
            source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
</body>

</html>
