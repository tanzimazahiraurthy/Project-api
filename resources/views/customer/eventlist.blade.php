<br><br>
<table align="center" border="3">
    <tr align="center">
        <td style="color:blue">Name</td>
        <td style="color:blue">Description</td>
        <td style="color:blue">Time</td>
        <td style="color:blue">Available for</td>
    </tr>

    
    @foreach($event as $e)
        <tr align="center">
            <td>{{$e->name}}</td>
            <td>{{$e->description}}</td>
            <td>{{$e->time}}</td>
            <td>{{$e->avl}}</td>
            
        </tr>    
    @endforeach
</table>    