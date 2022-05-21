@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/prs/create" method="post">
@csrf

Print ID: <input type="text" name="pr_id" value="{{ old('pr_id') }}"><br>
Print price: <input type="text" name="pr_price" value="{{ old('pr_price') }}"><br>
Print description: <input type="text" name="description" value="{{ old('description') }}"><br>
<input type="submit">
</form>