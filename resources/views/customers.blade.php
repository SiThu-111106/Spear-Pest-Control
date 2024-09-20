<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>

    <!-- Basic styling for the table and layout -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            word-wrap: break-word;
        }

        table th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        table tr:nth-child(even) {
            background-color: #f1f3f5;
        }

        table tr:hover {
            background-color: #e2e6ea;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            word-wrap: break-word;
            font-size: 12px;
        }

        table th:nth-child(1),
        table td:nth-child(1) {
            width: 8%;
            text-align: center;
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            width: 13%;
        }

        /* Name */
        table th:nth-child(3),
        table td:nth-child(3) {
            width: 16%;
        }

        /* Email */
        table th:nth-child(4),
        table td:nth-child(4) {
            width: 18%;
        }

        /* Phone */
        table th:nth-child(5),
        table td:nth-child(5) {
            width: 13%;
        }

        /* Payment */
        table th:nth-child(6),
        table td:nth-child(6) {
            width: 13%;
        }

        /* Overdue */
        table th:nth-child(7),
        table td:nth-child(7) {
            width: 15%;
        }

        /* Total */
    </style>
</head>

<body>
    <div class="container">
        <h1>User List</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Payment</th>
                    <th>Overdue</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $index => $record)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->payment }} ks</td>
                        <td>{{ $record->overdue }} ks</td>
                        <td>{{ $record->total }} ks</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>