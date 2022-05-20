<table>
    <thead>
        <th>Print id</th>
        <th>Print price</th>
        <th>Customer id</th>
        <th>Sum spent</th>
    </thead>
    <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->print_id }}</td>
                <td>{{ $sale->price }}</td>
                <td>{{ $sale->customer_id }}</td>
                <td>{{ $sale->sum }}</td>

                <td>
                    <a href="{{ route('sales.create') }}"> 
                    Create 
                    </a>
                    <a href="{{ route('sales.show', ['sale' => $sale->id]) }}"> 
                    Show 
                    </a>
                    <a href="{{ route('sales.edit', ['sale' => $sale->id]) }}"> 
                    Edit 
                    </a>
                    <a href="{{ route('sales.delete', ['sale' => $sale->id]) }}"> 
                    Delete 
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>