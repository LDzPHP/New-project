<form action="/prs/create" method="post">
@csrf
Print_id: <input type="integer" name="pr_id"><br>
Description: <input type="text" name="description"><br>
Price: <input type="integer" name="pr_price"><br>
<input type="submit">
</form>