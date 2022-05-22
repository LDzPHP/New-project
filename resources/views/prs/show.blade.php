<h1>Print No. {{ $pr->pr_id }}</h1>
<p>EUR {{ $pr->pr_price }}</p>
<p> {{ $pr->description }}</p>

<a href="{{ route('prs.index') }}"> 
Back to index
</a>