<br><br>
<center><h1>Category List</h1></center>
<br><br>
<table align="center" border="3">
    <tr align="center">
        <td>Name</td>
        <td>Price</td>
        <td>Quatity</td>
        <td>Description</td>
        <td></td>
    </tr>
    
    @foreach($categories as $c)
        <tr align="center">
            <td>{{$c->name}}</td>
            <td>{{$c->price}}</td>
            <td>{{$c->qty}}</td>
            <td>{{$c->description}}</td>
            <td>
                <a href="">Edit | </a>
                <a href="">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>    
<br><br>
<center><a href="{{ route("manager.panel") }}"><button>Back to Dashboard</button></a></center>