<form action="{{route('mail.submit')}}" method="post">

        {{csrf_field()}}

        <input type="text" name="sub" placeholder="Subject"><br>

        <input type="text" name="body" placeholder="Body"><br>

        <input type="submit" value="Send">

</form>