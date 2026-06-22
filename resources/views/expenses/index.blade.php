<!DOCTYPE html>
<html>
<head>
    <title>Expense Dashboard</title>
</head>
<body style="background:#0f172a;color:white;font-family:Arial;padding:30px;">

<h1>💵 Expense Dashboard</h1>

<a href="{{ route('expenses.create') }}">
    + Add Expense
</a>

<table border="1" cellpadding="10" cellspacing="0" width="100%" style="margin-top:20px;">
<tr>
    <th>Property</th>
    <th>Category</th>
    <th>Amount</th>
    <th>Date</th>
</tr>

@foreach($expenses as $expense)
<tr>
    <td>{{ $expense->property_name }}</td>
    <td>{{ $expense->category }}</td>
    <td>${{ number_format($expense->amount,2) }}</td>
    <td>{{ $expense->expense_date }}</td>
</tr>
@endforeach

</table>

</body>
</html>
