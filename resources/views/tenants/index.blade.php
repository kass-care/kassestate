<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Tenant Dashboard</title>

    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial;
            padding:30px;
        }

        h1{
            background:#22c55e;
            padding:20px;
            border-radius:10px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
            background:#1e293b;
        }

        th{
            background:#334155;
            color:#f59e0b;
            padding:12px;
            text-align:left;
        }

        td{
            padding:12px;
            border-top:1px solid #475569;
        }

        .btn{
            background:#f59e0b;
            color:black;
            padding:12px 18px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        }

        .active{
            color:#22c55e;
            font-weight:bold;
        }

        .vacated{
            color:#ef4444;
            font-weight:bold;
        }
    </style>
</head>
<body>

<h1>🏠 KassEstate Tenant Dashboard</h1>

<br>

<a href="{{ route('tenants.create') }}" class="btn">
+ Add Tenant
</a>

<br><br>

<table>

<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Property</th>
    <th>Monthly Rent</th>
    <th>Lease End</th>
    <th>Status</th>
</tr>

@foreach($tenants as $tenant)

<tr>
    <td>{{ $tenant->name }}</td>
    <td>{{ $tenant->phone }}</td>
    <td>{{ $tenant->property_name }}</td>
    <td>${{ number_format($tenant->monthly_rent,2) }}</td>
    <td>{{ $tenant->lease_end }}</td>

    <td>
        @if($tenant->status == 'Active')
            <span class="active">Active</span>
        @else
            <span class="vacated">Vacated</span>
        @endif
    </td>
</tr>

@endforeach

</table>

<br>

<a href="{{ route('dashboard') }}">
← Back to Dashboard
</a>

</body>
</html>
