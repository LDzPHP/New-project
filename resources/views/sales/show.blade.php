show sales
<br>
{{ $sale ->print_id }}
<br>
{{ $sale ->price }}
<br>
{{ $sale ->customer_id }}
<br>
{{$sale ->sum }}

<a href="{{ route('sales.index') }}"> 
Back to index
</a>