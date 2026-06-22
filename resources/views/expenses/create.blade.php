<!DOCTYPE html>
<html>
<head>
    <title>Expense Tracker</title>
</head>
<body style="background:#0f172a;color:white;font-family:Arial;padding:30px;">

<h1>💵 Expense Tracker</h1>

<form method="POST" action="{{ route('expenses.store') }}">
    @csrf

    <p>Property Name</p>
    <input type="text" name="property_name" style="width:100%;padding:10px;">

    <p>Category</p>
    <select name="category" style="width:100%;padding:10px;">
        <option>Mortgage</option>
        <option>Taxes</option>
        <option>Insurance</option>
        <option>Maintenance</option>
        <option>Utilities</option>
        <option>Other</option>
    </select>

    <p>Amount</p>
    <input type="number" step="0.01" name="amount" style="width:100%;padding:10px;">

    <p>Expense Date</p>
    <input type="date" name="expense_date" style="width:100%;padding:10px;">

    <p>Notes</p>
    <textarea name="notes" style="width:100%;padding:10px;"></textarea>

    <br><br>

    <button type="submit">Save Expense</button>

</form>

</body>
</html>
