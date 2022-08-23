<table align="center" border="3">
    <tr align="center">
        <td>Schedule</td>
        <td>Action</td>
    </tr>

    @foreach($spa as $s)
    <tr align="center">
        <td>{{$s->schedule}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('customer.spa.edit',['id'=>$s->id])}}">Edit | <a>
            <a class="btn btn-primary" href="{{route('customer.spa.delete',['id'=>$s->id])}}">Delete<a>
        </td>
    </tr>
    @endforeach
