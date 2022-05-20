<form action="/sales/create" method="post">
@csrf
Print_id: <input type="integer" name="print_id"><br>
Price: <input type="integer" name="price"><br>
Customer_id: <input type="integer" name="customer_id"><br>
Sum: <input type="integer" name="sum"><br>
<input type="submit">
</form>