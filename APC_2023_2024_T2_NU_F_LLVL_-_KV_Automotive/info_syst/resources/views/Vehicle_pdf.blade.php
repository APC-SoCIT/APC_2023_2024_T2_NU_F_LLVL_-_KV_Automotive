<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Maintenance Log</title>
</head>
<body>
    <h1>Vehicle Maintenance Log</h1>

    <div>Account: {{ $record->account->full_name }}</div>

    {{-- Assuming these fields are part of the Vehicle model --}}
    <div>Make: {{ $record->vehicle->make }}</div>
    <div>Model: {{ $record->vehicle->model }}</div>
    <div>Year: {{ $record->vehicle->year }}</div>
    <div>License Plate: {{ $record->vehicle->license_plate }}</div>
    <div>Color: {{ $record->vehicle->color }}</div>
    <div>Chassis No: {{ $record->vehicle->chassis_no }}</div>

    {{-- Add other fields specific to VehicleHistory model --}}
    <div>Mileage: {{ $record->mileage }}</div>

    {{-- Display the tasks associated with the VehicleHistory record in a table --}}
    <div>
        <h2>Tasks:</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Date Performed</th>
                    <th>Mileage</th>
                    <th>Performed By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->task_performed as $task)
                    <tr>
                        <td>{{ $task['task'] }}</td>
                        <td>{{ $task['date_performed'] }}</td>
                        <td>{{ $task['mileage'] }}</td>
                        <td><div>Performed By: {{ $record->performed_by }}</div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div>Notes: {{ $record->notes }}</div>
    <div>Created At: {{ $record->created_at }}</div>
    <div>Updated At: {{ $record->updated_at }}</div>

</body>
</html>
