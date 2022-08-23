<br><br>
<center><h1>Room List</h1></center>
<br><br>
<table align="center" border="3">
    <tr align="center">
        <td>Room no</td>
        <td>Category</td>
        <td></td>
    </tr>
    
    @foreach($rooms as $c)
        <tr align="center">
            <td>{{$c->room_no}}</td>
            <td>{{$c->c_id}}</td>
            <td>
                <a href="">Edit | </a>
                <a href="">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>    
<br><br>
<center><a href="{{ route("manager.panel") }}"><button>Back to Dashboard</button></a></center>
