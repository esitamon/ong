<! DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="emmanuel sitamon">
<link type="stylesheet" href="{{asset('/css/app.css')}}"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>{{config('app.name','ngoapp')}}</title>
</head>
    <body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
        </div>
    </body>

</html>