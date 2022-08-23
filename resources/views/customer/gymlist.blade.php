<table align="center" border="3">
    <tr align="center">
        <td>Schedule</td>
        <td>Action</td>
    </tr>

    @foreach($gym as $g)
    <tr align="center">
        <td>{{$g->schedule}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('customer.gym.edit',['id'=>$g->id])}}">Edit | <a>
            <a class="btn btn-primary" href="{{route('customer.gym.delete',['id'=>$g->id])}}">Delete<a>
        </td>
    </tr>
    @endforeach
