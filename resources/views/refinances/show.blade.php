<!DOCTYPE html>
<html>
<head>
    <title>Refinance Results - KassEstate</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; }
        .container { padding:24px; max-width:900px; }
        .card { background:#1f2937; padding:20px; margin-bottom:20px; border-radius:12px; }
        h2 { color:#f59e0b; }
        .value { font-size:32px; font-weight:bold; }
        a { color:#f59e0b; }
    </style>
</head>
<body>

<div class="header">
    <h1>🏦 Refinance Results</h1>
</div>

<div class="container">

    <div class="card">
        <h2>Current Loan Balance</h2>
        <div class="value">${{ number_format($refinance->current_loan_balance, 2) }}</div>
    </div>

    <div class="card">
        <h2>New Appraised Value</h2>
        <div class="value">${{ number_format($refinance->new_appraised_value, 2) }}</div>
    </div>

    <div class="card">
        <h2>Cash Out Available</h2>
        <div class="value">${{ number_format($refinance->cash_out_available, 2) }}</div>
    </div>

    <div class="card">
        <h2>New Mortgage Payment</h2>
        <div class="value">${{ number_format($refinance->new_mortgage_payment, 2) }}</div>
    </div>

    <div class="card">
        <h2>Cash Returned To Investor</h2>
        <div class="value">${{ number_format($refinance->cash_returned_to_investor, 2) }}</div>
    </div>

    <p><a href="{{ route('refinances.create') }}">← Analyze Another Refinance</a></p>
    <p><a href="{{ route('dashboard') }}">← Back to Dashboard</a></p>

</div>

</body>
</html>
