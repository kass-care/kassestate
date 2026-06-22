<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Investor CRM</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        label{display:block;margin-top:15px;color:#fbbf24;font-weight:bold;}
        input,textarea{width:100%;padding:12px;border:none;border-radius:8px;margin-top:6px;}
        button{margin-top:20px;background:#f59e0b;color:black;padding:12px 25px;border:none;border-radius:8px;font-weight:bold;}
    </style>
</head>
<body>

<div class="header">
🤝 KassEstate Investor CRM
</div>

<div class="container">

<form method="POST" action="{{ route('investors.store') }}">
@csrf

<label>Investor Name</label>
<input type="text" name="name">

<label>Phone</label>
<input type="text" name="phone">

<label>Email</label>
<input type="email" name="email">

<label>Investment Capacity</label>
<input type="number" step="0.01" name="investment_capacity">

<label>Preferred Market</label>
<input type="text" name="preferred_market">

<label>Notes</label>
<textarea name="notes"></textarea>

<button type="submit">
Save Investor
</button>

</form>

</div>

</body>
</html>
