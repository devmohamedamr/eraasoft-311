<h1>hi<h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    @foreach ($data as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a href="{{ url("category/edit/$category->id") }}">edit</a></td>
        <td><a href="{{ url("category/delete/$category->id") }}">delete</a></td>
    </tr>
    @endforeach
</table>
