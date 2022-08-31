<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Language</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="container">
    <h1>How to Create Mutli Languange Website in Laravel</h1>

    <div class="row">
        <div class="col-md-6 offset-md-2 text-right">
            <strong>Select Languange :</strong>
        </div>
        <div class="col-md-4">
            <select name="" id="" class="form-control changeLang">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
            </select>
        </div>
    </div>

    <h1>{{ __('messages.title') }}</h1>

    <script>
        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function (e) {
            e.preventDefault();
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
</body>

</html>
