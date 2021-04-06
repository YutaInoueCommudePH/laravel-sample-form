<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Sample Laravel Form</h1>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <p>Title: <input name="title" type="text" value="{{ Arr::get('title', $input) }}" /></p>
            @error('title')<p>{{ $message }}</p>@enderror
            <p>Description: <input name="description" type="text" value="{{ Arr::get('description', $input) }}" /></p>
            @error('description')<p>{{ $message }}</p>@enderror
            <p>Page: <input name="page" type="text" value="{{ Arr::get('page', $input) }}" /></p>
            @error('number')<p>{{ $message }}</p>@enderror
            <p>Published Date: <input name="published_at" type="date" value="{{ Arr::get('published_at', $input) }}" /></p>
            @error('published_at')<p>{{ $message }}</p>@enderror
            <input type="submit" />
        </form>
    </body>
</html>
