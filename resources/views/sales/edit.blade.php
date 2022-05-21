<form action="/sales/edit/{{$sale->id}}" method="post">
@csrf

Print ID: <input type="text" name="print_id" value="{{ $sale->print_id }}"><br>
Price: <input type="text" name="price" value="{{ $sale->price }}"><br>
Customer ID: <input type="text" name="customer_id" value="{{ $sale->customer_id }}"><br>
Sum: <input type="text" name="sum" value="{{ $sale->sum }}"><br>

<input type="submit">
</form>