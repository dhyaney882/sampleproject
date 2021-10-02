<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('success'))
    <div style="background:green;">
        {{session('success')}}
    </div>
    @endif
    @if (session('successdanger'))
    <div style="background:red;">
        {{session('successdanger')}}
    </div>
    @endif
    <div>
        <a href="/add_todo"><button>Add New</button></a>
    </div>
    <table border="2px soli yellow">
        <tr>
            <td>ID</td>
            <td>Detail</td>
            <td colspan="2">Actions</td>
        </tr>
 @foreach ($todos as $todo)
 <tr>
    <td>{{$todo->id}}</td>
    <td>{{$todo->detail}}</td>
    <td><button>edit</button></td>
    <td><form method="post" action="{{url('delete-todo/'.$todo->id)}}"  >
        @csrf
        <button class="btn btn-danger" >Delete </button>
</form>
</td>
</tr>
@endforeach       
    </table>
</body>
</html>