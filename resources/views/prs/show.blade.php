<h1>Print No. {{ $pr->pr_id }}</h1>
<p>EUR {{ $pr->pr_price }}</p>
<p> {{ $pr->description }}</p>

<form action="/comments/store"  method="POST">
    @csrf
    <p>Please leave a comment on the print</p>
    <div class="form-input">
        <input type="text" placeholder="Print ID" name="pr_id">
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment here" name="body"></textarea>
    </div>
    <input type="submit">

<a href="{{ route('prs.index') }}"> 
Back to index
</a>