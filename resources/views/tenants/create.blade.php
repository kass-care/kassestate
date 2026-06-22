<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Tenant Manager</title>

    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial;
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
        }

        h1{
            background:#22c55e;
            padding:20px;
            border-radius:10px;
        }

        input, select{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border-radius:8px;
            border:none;
        }

        button{
            background:#f59e0b;
            padding:12px 20px;
            border:none;
            border-radius:8px;
            font-weight:bold;
        }
    </style>
</head>

<body>

<div class="container">

<h1>🏠 KassEstate Tenant Manager</h1>

<form method="POST" action="{{ route('tenants.store') }}">
@csrf

<label>Tenant Name</label>
<input type="text" name="name">

<label>Phone</label>
<input type="text" name="phone">

<label>Email</label>
<input type="email" name="email">

<label>Property Name</label>
<input type="text" name="property_name">

<label>Lease Start</label>
<input type="date" name="lease_start">

<label>Lease End</label>
<input type="date" name="lease_end">

<label>Monthly Rent</label>
<input type="number" step="0.01" name="monthly_rent">

<label>Status</label>
<select name="status">
    <option>Active</option>
    <option>Vacated</option>
</select>

<button type="submit">
Save Tenant
</button>

</form>

</div>

</body>
</html>
