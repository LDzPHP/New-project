@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/sales/create" method="post">
@csrf

Prind ID: <input type="text" name="print_id" value="{{ old('print_id') }}"><br>
Prind price: <input type="text" name="price" value="{{ old('price') }}"><br>
Customer ID: <input type="text" name="customer_id" value="{{ old('customer_id') }}"><br>
Sum: <input type="text" name="sum" value="{{ old('sum') }}"><br>
<input type="submit">
</form>