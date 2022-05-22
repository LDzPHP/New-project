@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/customers/create" method="post">
@csrf

Name: <input type="text" name="name" value="{{ old('name') }}"><br>
E-mail: <input type="text" name="email" value="{{ old('email') }}"><br>
<input type="submit">
</form>