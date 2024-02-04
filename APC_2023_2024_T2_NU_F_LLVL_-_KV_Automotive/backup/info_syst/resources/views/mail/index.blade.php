<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags... -->
    <title>Email</title>
</head>
<script>
    // Check for Laravel success flash message and display an alert
    @if(session('success'))
        window.onload = function () {
            alert('{{ session('success') }}');
        };
    @endif
</script>
<body>
    <h1>Job Order Notification</h1>

    <p>Hello,</p>

    <p>This is a notification for Job Status #{{ $jobOrder->id }}.</p>

    <p>Details:</p>

    <ul>
        <li><strong>Status:</strong> {{ $jobOrder->status }}</li>
        <li><strong>Account:</strong> {{ optional($jobOrder->account)->full_name }}</li>
        <li><strong>Vehicle:</strong> {{ optional($jobOrder->vehicle)->model }}</li>
        <li><strong>Inventory:</strong> {{ optional($jobOrder->inventory)->product_name }}</li>
        <!-- Add more details as needed -->
    </ul>

    <!-- Add more content as needed -->

    <p>Thank you.</p>
</body>
<script>
    window.open('', '_self', '');
    window.close();
</script>
</html>
