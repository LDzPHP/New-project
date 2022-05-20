<form action="/customers/edit/{{$customer->id}}" method="post">
@csrf

Name: <input type="text" name="name" value="{{ $customer->name }}"><br>
E-mail: <input type="text" name="email" value="{{ $customer->email }}"><br>
<input type="submit">
</form>