<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vehicle History Log</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            position: relative;
            margin-bottom: 20px;
            padding: 10px 0;
        }

        #logo {
            float: left;
            margin-top: 8px;
        }

        #company {
            text-align: right;
        }

        #details {
            margin-bottom: 50px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
            float: left;
        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 2.4em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 20px;
            background: #EEEEEE;
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            text-align: right;
        }

        table .no,
        table .desc,
        table .unit,
        table .qty,
        table .total {
            background: #EEEEEE;
        }

        table tbody tr:last-child td {
            border-bottom: none;
        }

        table tfoot {
            margin-top: 20px;
        }

        table tfoot tr {
            background: none;
            border-top: 2px solid #EEEEEE;
        }

        table tfoot td {
            padding: 0;
            font-size: 1.2em;
            border: none;
        }

        #thanks {
            font-size: 2em;
            margin-bottom: 50px;
        }

        #notices {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
        }

        #notices .notice {
            font-size: 1.2em;
        }

        footer {
            color: #777777;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #AAAAAA;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="clearfix">
        <div id="logo">
            <img src="{{ asset('https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/413151349_1303008093729218_6211963685636022506_n.png?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeHMn9SJYzRlohYf-YBhd7QrBGvc-wTNTLcEa9z7BM1Mt8-vvNRZwX0GaFZc8Pv1yiEyLI5Nxw_eQz4SV81E6_mA&_nc_ohc=EPL73D9l_wEAX_ncohn&_nc_ht=scontent.fmnl4-2.fna&oh=03_AdQ6pD2FG1QLX_07DdaJcRzN4mbARUmwkgmfi-2PIk1_DQ&oe=65CB7103') }}" alt="Home" title="Go to Home" style="width: 200px; height: auto; margin: 0 auto;" />
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">LOG FOR:</div>
                <h2 class="name">{{ $record->account->full_name }}</h2>
            </div>
            <div id="invoice">
                <h1>{{ $record->vehicle->make }} {{ $record->vehicle->model }}</h1>
                <div class="date">Date of Entry: {{ $record->created_at }}</div>
                <div class="date">Last Updated: {{ $record->updated_at }}</div>
            </div>
        </div><br><br><br>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">TASK</th>
                    <th class="date">DATE PERFORMED</th>
                    <th class="mileage">MILEAGE</th>
                    <th class="performed-by">PERFORMED BY</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->task_performed as $index => $task)
                    <tr>
                        <td class="no">{{ $index + 1 }}</td>
                        <td class="desc">{{ $task['task'] }}</td>
                        <td class="date">{{ $task['date_performed'] }}</td>
                        <td class="mileage">{{ $task['mileage'] }}</td>
                        <td class="performed-by">{{ $record->performed_by }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>Notes: <br>{{ $record->notes }}</div>
    </main>
    <footer>
        Thank you!
    </footer>
</body>
</html>
