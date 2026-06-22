<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Rehab Tracker</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; }
        .container { padding:24px; max-width:700px; }
        label { color:#f59e0b; font-weight:bold; display:block; margin-top:12px; }
        input, select { width:100%; padding:14px; margin-top:6px; border-radius:8px; border:none; }
        button { margin-top:18px; background:#f59e0b; color:#111827; padding:14px 20px; border:none; border-radius:8px; font-weight:bold; cursor:pointer; }
        a { color:#f59e0b; display:block; margin-top:18px; }
    </style>
</head>
<body>

<div class="header">
    <h1>🔨 KassEstate Rehab Tracker</h1>
</div>

<div class="container">
    <form action="{{ route('rehab-projects.store') }}" method="POST">
        @csrf

        <label>Project Name</label>
        <input type="text" name="project_name" required>

        <label>Contractor</label>
        <input type="text" name="contractor">

        <label>Budget</label>
        <input type="number" step="0.01" name="budget">

        <label>Actual Cost</label>
        <input type="number" step="0.01" name="actual_cost">

        <label>Status</label>
        <select name="status">
            <option value="Planning">Planning</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select>

        <button type="submit">Save Rehab Project</button>
    </form>

    <a href="{{ route('dashboard') }}">← Back to Dashboard</a>
</div>

</body>
</html>
