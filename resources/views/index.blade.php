<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Library (test)</title>
    </head>
    <body>
    <div class="books__block">
        <table class="books__table">
            <tr>
                <th>Название</th>
                <th>Автор</th>
                <th>Год</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->year}}</td>
                    <td><a href="/library/{{$book->id}}/edit">редактировать</a></td>
                </tr>
            @endforeach
        </table>
    </div>  
    </body>
</html>
