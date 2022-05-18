<form action="/sales/create" method="post">
@csrf
Price: <input type="text" name="price"><br>
Print_id: <input type="text" name="print_id"><br>
Customer_id: <input type="text" name="customer_id"><br>
Sum: <input type="text" name="sum"><br>
<input type="submit">
</form>