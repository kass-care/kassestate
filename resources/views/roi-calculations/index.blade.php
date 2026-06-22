<!DOCTYPE html>
<html>
<head>
    <title>ROI Dashboard - KassEstate</title>
    <style>
        body{background:#0f172a;color:white;font-family:Arial;margin:0;}
        .header{background:#22c55e;padding:25px;font-size:38px;font-weight:bold;}
        .container{padding:30px;}
        .btn{background:#f59e0b;color:black;padding:12px 18px;border-radius:8px;text-decoration:none;font-weight:bold;}
        table{width:100%;border-collapse:collapse;background:#1e293b;margin-top:25px;}
        th{background:#334155;color:#fbbf24;padding:12px;text-align:left;}
        td{padding:12px;border-top:1px solid #475569;}
        .good{color:#22c55e;font-weight:bold;}
        .bad{color:#ef4444;font-weight:bold;}
    </style>
</head>
<body>

<div class="header">📈 ROI Calculator Dashboard</div>

<div class="container">

<a href="{{ route('roi-calculations.create') }}" class="btn">+ New ROI Calculation</a>

<table>
<tr>
    <th>Property</th>
    <th>Purchase</th>
    <th>Rehab</th>
    <th>Annual Cash Flow</th>
    <th>Equity Created</th>
    <th>ROI %</th>
</tr>

@foreach($roiCalculations as $roi)
<tr>
    <td>{{ $roi->property_name }}</td>
    <td>${{ number_format($roi->purchase_price,2) }}</td>
    <td>${{ number_format($roi->rehab_cost,2) }}</td>
    <td>${{ number_format($roi->annual_cash_flow,2) }}</td>
    <td>${{ number_format($roi->equity_created,2) }}</td>
    <td class="{{ $roi->roi_percent >= 20 ? 'good' : 'bad' }}">
        {{ number_format($roi->roi_percent,2) }}%
    </td>
</tr>
@endforeach
</table>

<br>

<a href="{{ route('dashboard') }}">← Back to Dashboard</a>

</div>
</body>
</html>
