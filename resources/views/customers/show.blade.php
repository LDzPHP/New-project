@extends('dashboard')
    
@section('content')
    <div class="bg-gradient-to-r from-yellow-200 to-white max-w-fit rounded-md mx-10">
        <label>
        <h1 class="w-60 mx-20 bg-blue-500 p-2 m-1 rounded-md text-white opacity-80">CUSTOMER'S COMMENT</h1>
        </label>
        <p class="mx-20">{{ $customer->name }}</p>
        <p class="mx-20">{{ $customer->email }}</p>

        @if ($customer->comments)
            @foreach($customer->comments as $comment)
                <div class="comment">
                    <h4 class="my-3 mx-20"> {{ $comment->author }} </h4>
                    <p class="my-3 mx-20"> {{ $comment->body }} </p>
                </div>
            @endforeach
        
            <p class="mx-20"> Comment count: {{ $customer->comments()->count()}}
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
            <div class="form-input mx-10 ">
                <p class="mx-10 font-bold">You can leave your comment here:</p>

                <label class="block w-60 mx-10 bg-blue-500 p-2 m-1 rounded-md opacity-80" input type="submit">
                    <input type="text" placeholder="Author name" name="author" 
                    class="block rounded-md"><br>
                
                    <textarea name="body" placeholder="Comment here" 
                    class="block rounded-md"></textarea>

                    <input type="hidden" value={{ $customer->id }} name="commentable_id">
                    <input type="hidden" value={{ get_class($customer) }} name="commentable_type">
                </label>
                
                <button class="block w-60 mx-10 bg-green-500 p-2 m-1 rounded-md text-white">
                <input type="submit"{{ route('customers.index') }}>
                </button>
            </div>
        </form>
    </div>
@endsection