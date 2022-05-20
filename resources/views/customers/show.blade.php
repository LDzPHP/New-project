show customers
<br>
{{ $customer ->name }}
<br>
{{ $customer ->email }}

<a href="{{ route('customers.index') }}"> 
Back to index
</a>