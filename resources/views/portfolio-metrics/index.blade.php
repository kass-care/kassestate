<!DOCTYPE html>
<html>
<head>
    <title>BRRRR Portfolio Analytics</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; }
        .container { padding:24px; }
        .cards {
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        }
        .card {
            background:#1f2937;
            border-radius:12px;
            padding:20px;
        }
        .card h3 {
            color:#f59e0b;
            margin-top:0;
        }
        .value {
            font-size:28px;
            font-weight:bold;
        }
        a { color:#f59e0b; }
    </style>
</head>
<body>

<div class="header">
    <h1>📊 BRRRR Portfolio Analytics</h1>
</div>

<div class="container">

<div class="cards">

    <div class="card">
        <h3>Total Properties</h3>
        <div class="value">{{ $totalProperties }}</div>
    </div>

    <div class="card">
        <h3>Total Portfolio Value</h3>
        <div class="value">${{ number_format($totalPropertyValue,2) }}</div>
    </div>

    <div class="card">
        <h3>Total Equity</h3>
        <div class="value">${{ number_format($totalEquity,2) }}</div>
    </div>

    <div class="card">
        <h3>Monthly Rent</h3>
        <div class="value">${{ number_format($totalMonthlyRent,2) }}</div>
    </div>

    <div class="card">
        <h3>Monthly Cash Flow</h3>
        <div class="value">${{ number_format($totalMonthlyCashflow,2) }}</div>
    </div>

    <div class="card">
        <h3>Occupied Units</h3>
        <div class="value">{{ $occupiedUnits }}</div>
    </div>

    <div class="card">
        <h3>Rehab Budget</h3>
        <div class="value">${{ number_format($totalRehabBudget,2) }}</div>
    </div>

    <div class="card">
        <h3>Rehab Actual</h3>
        <div class="value">${{ number_format($totalRehabActual,2) }}</div>
    </div>

</div>

<br>

<a href="{{ route('dashboard') }}">
← Back to Dashboard
</a>

</div>

</body>
</html>
