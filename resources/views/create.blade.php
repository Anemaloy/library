<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Library (test)</title>
    </head>
    <body>
    <div class="books__create">
        <h2>Добавить книгу</h2>
        <form action="/" method="post">
            @csrf
            <div class="books__create--element">
                <label for="name">название</label>
                <input type="text" name="name">
            </div>
            <div class="books__create--element">
                <label for="author">автор</label>
                <input type="text" name="author">
            </div>
            <div class="books__create--element">
                <label for="year">год</label>
                <input type="number" name="year">
            </div>
            <button type="submit">Добавить</button>
        </form>
    </div>
    </body>
</html>
