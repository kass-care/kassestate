<!DOCTYPE html>
<html>
<head>
    <title>Refinance Tracker - KassEstate</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        label{display:block;margin-top:15px;color:#fbbf24;font-weight:bold;}
        input,select{width:100%;padding:12px;border:none;border-radius:8px;margin-top:6px;}
        button{margin-top:20px;background:#f59e0b;color:black;padding:12px 25px;border:none;border-radius:8px;font-weight:bold;}
        a{color:#fbbf24;}
    </style>
</head>
<body>

<div class="header">🏦 Refinance Tracker</div>

<div class="container">
<form method="POST" action="{{ route('refinance-trackers.store') }}">
@csrf

<label>Property Name</label>
<input type="text" name="property_name" required>

<label>Current Loan Balance</label>
<input type="number" step="0.01" name="current_loan_balance">

<label>New Loan Amount</label>
<input type="number" step="0.01" name="new_loan_amount">

<label>Current Interest Rate</label>
<input type="number" step="0.01" name="current_interest_rate">

<label>New Interest Rate</label>
<input type="number" step="0.01" name="new_interest_rate">

<label>Cash Out Amount</label>
<input type="number" step="0.01" name="cash_out_amount">

<label>Current Payment</label>
<input type="number" step="0.01" name="current_payment">

<label>New Payment</label>
<input type="number" step="0.01" name="new_payment">

<label>Lender</label>
<input type="text" name="lender">

<label>Target Refinance Date</label>
<input type="date" name="target_refinance_date">

<label>Status</label>
<select name="status">
    <option>Preparing</option>
    <option>Submitted</option>
    <option>Approved</option>
    <option>Closed</option>
    <option>Delayed</option>
</select>

<button type="submit">Save Refinance Tracker</button>
</form>

<br>
<a href="{{ route('dashboard') }}">← Back to Dashboard</a>
</div>

</body>
</html>
