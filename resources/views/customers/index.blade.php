
<a href="{{ route('customers.create') }}"> 
    Create 
</a>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customers.show', ['customer' => $customer->id]) }}"> 
                    Show 
                    </a>
                    <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}"> 
                    Edit 
                    </a>
                    <a href="{{ route('customers.delete', ['customer' => $customer->id]) }}"> 
                    Delete 
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>