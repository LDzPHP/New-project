@extends('dashboard')
    
@section('content')
    <div class="bg-gradient-to-r from-yellow-400 toyellow-500">
        <label>
        <h1 class="w-60 mx-20 bg-blue-500 p-2 m-1 rounded-md text-white">COMMENT ON the PRINT</h1>
        </label>
        <p class="mx-20">Print No. {{ $pr->pr_id }}</h1>
        <p class="mx-20">EUR {{ $pr->pr_price }}</p>
        <p class="mx-20"> {{ $pr->description }}</p>

    @if ($pr->comments)
        @foreach($pr->comments as $comment)
            <div class="comment">
                <h4 class="my-3 mx-20"> {{ $comment->author }} </h4>
                <p class="my-3 mx-20"> {{ $comment->body }} </p>
            </div>
        @endforeach
        
            <p class="mx-20"> Comment count: {{ $pr->comments()->count()}}
            @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/comments/store"  method="POST">
    @csrf
        <div class="form-input mx-10">
            <p class="mx-10 font-bold">Please leave a comment on the print</p>

            <label class="block w-60 mx-10 bg-blue-500 p-2 m-1 rounded-md" input type="submit">
                <input type="text" placeholder="Print ID" name="pr_id"
                class="block rounded-md"><br>    
            
                <textarea name="body" placeholder="Comment here" 
                class="block rounded-md"></textarea>
            
                <input type="hidden" value={{ $pr->id }} name="commentable_id">
                <input type="hidden" value={{ get_class($pr) }} name="commentable_type">
            </label>

            <button class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
            <input type="submit" {{ route('prs.index') }}>
            </button>
        </div>
    </form>
    </div>
@endsection