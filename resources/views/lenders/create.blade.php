<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Lender CRM</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        label{display:block;margin-top:15px;color:#fbbf24;font-weight:bold;}
        input,textarea{width:100%;padding:12px;border:none;border-radius:8px;margin-top:6px;}
        button{margin-top:20px;background:#f59e0b;color:black;padding:12px 25px;border:none;border-radius:8px;font-weight:bold;}
        a{color:#fbbf24;}
    </style>
</head>
<body>

<div class="header">
🏦 KassEstate Lender CRM
</div>

<div class="container">

<form method="POST" action="{{ route('lenders.store') }}">
@csrf

<label>Lender Name</label>
<input type="text" name="name">

<label>Company</label>
<input type="text" name="company">

<label>Phone</label>
<input type="text" name="phone">

<label>Email</label>
<input type="email" name="email">

<label>Interest Rate (%)</label>
<input type="number" step="0.01" name="interest_rate">

<label>Maximum Loan Amount</label>
<input type="number" step="0.01" name="max_loan_amount">

<label>Notes</label>
<textarea name="notes"></textarea>

<button type="submit">
Save Lender
</button>

</form>

<br>

<a href="{{ route('lenders.index') }}">
← Back to Dashboard
</a>

</div>

</body>
</html>
