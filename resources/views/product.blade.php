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
        <a href="/addproduct"><button>Add product</button></a>
    </div>
    <table border="2px soli yellow">
        <tr>
            <td>ID</td>
            <td>Productname</td>
            <td>Price</td>
            
            
        </tr>
        @foreach($prod as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productname}}</td>
            <td>{{$product->price}}</td>
            <td><button>Edit</button></td>
            <td><form method="post" action="{{url('deleteproduct/'.$product->id)}}"  >
                @csrf
                <button class="btn btn-danger" >Delete </button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>

    
</body>
</html>