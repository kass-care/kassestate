<!DOCTYPE html>
<html>
<head>
    <title>Deal Pipeline - KassEstate</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        label{display:block;margin-top:15px;color:#fbbf24;font-weight:bold;}
        input,select,textarea{width:100%;padding:12px;border:none;border-radius:8px;margin-top:6px;}
        button{margin-top:20px;background:#f59e0b;color:black;padding:12px 25px;border:none;border-radius:8px;font-weight:bold;}
        a{color:#fbbf24;}
    </style>
</head>
<body>

<div class="header">🏠 Deal Pipeline / Acquisition Tracker</div>

<div class="container">
<form method="POST" action="{{ route('deal-pipelines.store') }}">
@csrf

<label>Property Address</label>
<input type="text" name="property_address" required>

<label>Seller Name</label>
<input type="text" name="seller_name">

<label>Purchase Price</label>
<input type="number" step="0.01" name="purchase_price">

<label>ARV</label>
<input type="number" step="0.01" name="arv">

<label>Target Close Date</label>
<input type="date" name="target_close_date">

<label>Status</label>
<select name="status">
    <option>Lead</option>
    <option>Analyzing</option>
    <option>Offer Submitted</option>
    <option>Under Contract</option>
    <option>Rehab</option>
    <option>Refinance</option>
    <option>Rental</option>
    <option>Completed BRRRR</option>
</select>

<label>Notes</label>
<textarea name="notes"></textarea>

<button type="submit">Save Deal</button>
</form>

<br>
<a href="{{ route('dashboard') }}">← Back to Dashboard</a>
</div>

</body>
</html>
