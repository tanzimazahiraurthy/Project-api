<br><br>
<table align="center" border="3">
    <tr align="center">
        <td style="color:blue">Name</td>
        <td style="color:blue">Question</td>
    </tr>

    
    @foreach($ques as $q)
        <tr align="center">
            <td>{{$q->userName}}</td>
            <td>{{$q->question}}</td>
        </tr>    
    @endforeach
</table>    