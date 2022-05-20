<form action="/prs/edit/{{$pr->id}}" method="post">
@csrf

Print id: <input type="text" name="pr_id" value="{{ $pr->pr_id }}"><br>
Print price: <input type="text" name="pr_price" value="{{ $pr->pr_price }}"><br>
Description: <input type="text" name="description" value="{{ $pr->description }}"><br>
<input type="submit">
</form>