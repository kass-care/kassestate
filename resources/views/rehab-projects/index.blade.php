<!DOCTYPE html>
<html>
<head>
    <title>Rehab Projects - KassEstate</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; display:flex; justify-content:space-between; align-items:center; }
        .container { padding:24px; }
        .button { background:#f59e0b; color:#111827; padding:12px 18px; border-radius:8px; text-decoration:none; font-weight:bold; }
        table { width:100%; border-collapse:collapse; background:#1f2937; border-radius:12px; overflow:hidden; }
        th, td { padding:14px; border-bottom:1px solid #374151; text-align:left; }
        th { color:#f59e0b; }
        .empty { background:#1f2937; padding:30px; border-radius:12px; }
        a { color:#f59e0b; }
    </style>
</head>
<body>

<div class="header">
    <h1>🔨 Rehab Projects</h1>
    <a class="button" href="{{ route('rehab-projects.create') }}">+ Add Rehab Project</a>
</div>

<div class="container">

    @if($rehabProjects->count())
        <table>
            <thead>
                <tr>
                    <th>Project</th>
                    <th>Contractor</th>
                    <th>Budget</th>
                    <th>Actual Cost</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rehabProjects as $project)
                    <tr>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->contractor }}</td>
                        <td>${{ number_format($project->budget, 2) }}</td>
                        <td>${{ number_format($project->actual_cost, 2) }}</td>
                        <td>{{ $project->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="empty">
            <h2>No rehab projects yet</h2>
            <p>Add your first rehab project.</p>
        </div>
    @endif

    <p><a href="{{ route('dashboard') }}">← Back to Dashboard</a></p>
</div>

</body>
</html>
