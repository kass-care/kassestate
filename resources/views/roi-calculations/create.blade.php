<!DOCTYPE html>
<html>
<head>
    <title>ROI Calculator - KassEstate</title>
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
<div class="header">📈 KassEstate ROI Calculator</div>

<div class="container">
<form method="POST" action="{{ route('roi-calculations.store') }}">
    @csrf

    <label>Property Name</label>
    <input type="text" name="property_name" required>

    <label>Purchase Price</label>
    <input type="number" step="0.01" name="purchase_price" required>

    <label>Rehab Cost</label>
    <input type="number" step="0.01" name="rehab_cost" required>

    <label>Annual Cash Flow</label>
    <input type="number" step="0.01" name="annual_cash_flow" required>

    <label>Equity Created</label>
    <input type="number" step="0.01" name="equity_created" required>

    <button type="submit">Calculate ROI</button>
</form>

<a href="{{ route('dashboard') }}">← Back to Dashboard</a>
</div>
</body>
</html>
