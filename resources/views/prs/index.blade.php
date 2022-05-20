<table>
    <thead>
        <th>ID</th>
        <th>Print price</th>
        <th>Print description</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($prs as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->pr_price }}</td>
                <td>{{ $pr->description }}</td>
                <td>
                    <a href="{{ route('prs.create') }}"> 
                    Create 
                    </a>
                    <a href="{{ route('prs.show', ['pr' => $pr->id]) }}"> 
                    Show 
                    </a>
                    <a href="{{ route('prs.edit', ['pr' => $pr->id]) }}"> 
                    Edit 
                    </a>
                    <a href="{{ route('prs.delete', ['pr' => $pr->id]) }}"> 
                    Delete 
                    </a>
                </td>
            </tr>
        @endforeach
    <tbody>
</table>