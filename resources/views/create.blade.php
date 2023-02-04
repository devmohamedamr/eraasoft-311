<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif --}}
    <form action="{{ url('category/store') }}" method="post">
        @csrf
        <input type="text" name="name">
        @error('name')
            <span> {{$message }} <span>
        @enderror
        {{-- <select name="category[]" multiple>
            <option >1</option>
            <option>2</option>
        </select> --}}
        <input type="submit" value="save">
    </form>
</body>
</html>
