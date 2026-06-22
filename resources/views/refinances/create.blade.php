<!DOCTYPE html>
<html>
<head>
    <title>Refinance Center - KassEstate</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; }
        .container { padding:24px; max-width:700px; }
        label { color:#f59e0b; font-weight:bold; }
        input { width:100%; padding:14px; margin-bottom:14px; border-radius:8px; border:none; }
        button { background:#f59e0b; color:#111827; padding:14px 20px; border:none; border-radius:8px; font-weight:bold; cursor:pointer; }
        a { color:#f59e0b; }
    </style>
</head>
<body>

<div class="header">
    <h1>🏦 KassEstate Refinance Center</h1>
</div>

<div class="container">
    <form method="POST" action="{{ route('refinances.store') }}">
        @csrf

        <label>Current Loan Balance</label>
        <input type="number" step="0.01" name="current_loan_balance" required>

        <label>New Appraised Value</label>
        <input type="number" step="0.01" name="new_appraised_value" required>

        <label>Estimated New Mortgage Payment</label>
        <input type="number" step="0.01" name="new_mortgage_payment" value="0">

        <button type="submit">Calculate Refinance</button>
    </form>

    <p><a href="{{ route('dashboard') }}">← Back to Dashboard</a></p>
</div>

</body>
</html>
