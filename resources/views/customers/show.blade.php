<h1>{{ $customer->name }}</h1>
<p>{{ $customer->email }}</p>

@foreach($customer->comments as $comment)

<div class="comment">
    <h4> {{ $comment->author }} </h4>
    <p> {{ $comment->body }} </p>
</div>
@endforeach

<form action="/comments/store"  method="POST">
    @csrf
    <p>Please leave a comment</p>
    <div class="form-input">
        <input type="text" placeholder="Author name" name="author">
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment here" name="body"></textarea>
    </div>
    <input type="hidden" value={{ $customer->id }} name="customer_id">
    <input type="submit">
</form>

<a href="{{ route('customers.index') }}">
Back to index
</a>