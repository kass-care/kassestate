<!DOCTYPE html>
<html>
<head>
    <title>Net Worth Tracker - KassEstate</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        label{display:block;margin-top:15px;color:#fbbf24;font-weight:bold;}
        input{width:100%;padding:12px;border-radius:8px;border:none;margin-top:6px;}
        button{margin-top:20px;background:#f59e0b;color:black;border:none;padding:12px 25px;border-radius:8px;font-weight:bold;}
        a{color:#fbbf24;display:block;margin-top:20px;}
    </style>
</head>
<body>
<div class="header">💰 KassEstate Net Worth Tracker</div>

<div class="container">
<form method="POST" action="{{ route('net-worths.store') }}">
    @csrf

    <label>Total Property Value</label>
    <input type="number" step="0.01" name="property_value" required>

    <label>Total Loan Balance</label>
    <input type="number" step="0.01" name="loan_balance" required>

    <label>Cash Reserves</label>
    <input type="number" step="0.01" name="cash_reserves" required>

    <button type="submit">Calculate Net Worth</button>
</form>

<a href="{{ route('dashboard') }}">← Back to Dashboard</a>
</div>
</body>
</html>
