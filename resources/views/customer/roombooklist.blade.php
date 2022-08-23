<br><br>
<table align="center" border="3">
    <tr align="center">
        <td>Room No</td>
        <td>Branch</td>
        <td>NID</td>
        <td>Address</td>
        <td>Email</td>
        <td>Phone No</td>
        <td>Check In Time</td>
        <td>Check Out Time</td>
        <td>Action</td>
    </tr>

    
    @foreach($room as $r)
        <tr align="center">
            <td>{{$r->RoomNo}}</td>
            <td>{{$r->Branch}}</td>
            <td>{{$r->NID}}</td>
            <td>{{$r->Address}}</td>
            <td>{{$r->Email}}</td>
            <td>{{$r->Phone}}</td>
            <td>{{$r->CIT}}</td>
            <td>{{$r->COT}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('customer.room.book.edit',['id'=>$r->id])}}">Edit | </a>
                <a class="btn btn-primary" href="{{route('customer.room.book.delete',['id'=>$r->id])}}">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>    