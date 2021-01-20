<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>query</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>商品番号</th>
                <th>商品名</th>
                <th>購入者</th>
            </tr>
            @foreach ($res as $data)
            <tr>
                <th>{{ $data->p_id }}</th>
                <th>{{ $data->p_name }}</th>
                <th>{{ $data->name }}</th>
            </tr>
            @endforeach
        </table>
    </body>
</html>
