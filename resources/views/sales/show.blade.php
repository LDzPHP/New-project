<h1>Purchase ID {{ $sale->print_id }}</h1>
<p> Sum of the purchase EUR {{ $sale->sum }}</p>

<form action="/comments/store"  method="POST">
    @csrf
    <p>Please leave a comment on your purchase experience:</p>
    <div class="form-input">
        <input type="text" placeholder="Customer ID" name="customer_id">
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment here" name="body"></textarea>
    </div>
    <input type="submit">

<a href="{{ route('sales.index') }}"> 
Back to index
</a>