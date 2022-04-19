<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DLW TALL SANDBOX</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>
     
        <span x-text="count"></span>
    </div>

</body>

</html>