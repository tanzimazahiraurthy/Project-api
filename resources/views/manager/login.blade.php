<center>
    <br>
    <form action="{{route('manager.login.submit')}}" method="post">
        <div>
            {{csrf_field()}}
            <h2>Manager Login</h2>
            <input type="text"  name="username" value="{{old('name')}}" placeholder="Name"><br>
        @error('username')
            <span >{{$message}}</span><br>
        @enderror

        <input type="password" name="password"  placeholder="Password"><br>
        @error('password')
             <span>{{$message}}</span><br>
        @enderror
            <input type="submit"  value="Login">
        </div>    
    </form>
    
</center>