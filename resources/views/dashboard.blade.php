<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Command Center</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .layout { display:flex; min-height:100vh; }
        .sidebar { width:240px; background:#0b1220; padding:24px; }
        .sidebar h2 { color:#f59e0b; }
        .sidebar a { display:block; color:white; text-decoration:none; padding:12px; margin:8px 0; border-radius:8px; }
        .sidebar a:hover { background:#065f46; }
        .main { flex:1; }
        .header { background:#065f46; padding:20px; }
        .container { padding:24px; }
        .cards { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
        .card { background:#1f2937; border-radius:12px; padding:20px; box-shadow:0 4px 12px rgba(0,0,0,.3); }
        .card h3 { color:#f59e0b; margin-top:0; }
        .number { font-size:30px; font-weight:bold; }
    </style>
</head>
<body>

<div class="layout">
    <div class="sidebar">
        <h2>KassEstate</h2>
        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('properties.index') }}">🏘 Properties</a>
        <a href="{{ route('deal-analyses.create') }}">🔥 Deal Analyzer</a>
        <a href="{{ route('refinances.create') }}">🏦 Refinance Center</a>
        <a href="{{ route('rehab-projects.index') }}">🔨 Rehab Tracker</a>
	<a href="{{ route('documents.index') }}">📄 Documents</a>
        <a href="{{ route('tenants.index') }}">🏠 Tenant Manager</a>
        <a href="{{ route('portfolio-metrics.index') }}">
    	📊 BRRRR Portfolio Analytics
	</a>
	<a href="#">💵 Cash Flow Dashboard</a>
	<a href="{{ route('roi-calculations.index') }}">📈 ROI Calculator</a>
	<a href="{{ route('net-worths.index') }}">💰 Net Worth Tracker</a>
	<a href="{{ route('lenders.index') }}">🏦 Lender CRM</a>
	<a href="{{ route('investors.index') }}">
    	🤝 Investor CRM
	</a>
        <a href="#">⚙ Settings</a>
    </div>

    <div class="main">
        <div class="header">
            <h1>🏠 KassEstate Command Center</h1>
        </div>

        <div class="container">
            <div class="cards">
                <div class="card"><h3>Total Properties</h3><div class="number">{{ $totalProperties }}</div></div>
                <div class="card"><h3>Purchase Value</h3><div class="number">${{ number_format($totalPurchaseValue,2) }}</div></div>
                <div class="card"><h3>Total ARV</h3><div class="number">${{ number_format($totalArv,2) }}</div></div>
                <div class="card"><h3>Monthly Rent</h3><div class="number">${{ number_format($totalRent,2) }}</div></div>
                <div class="card"><h3>Total Equity</h3><div class="number">${{ number_format($totalEquity,2) }}</div></div>
                <div class="card"><h3>Deals Analyzed</h3><div class="number">{{ $totalDeals }}</div></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
