<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        .items-status, .items-action {
            display: flex;
            justify-content: space-evenly;
        }
        .action {
            background: blue;
            color: white;
            margin: 5px;
            padding: 5px;
            border-radius: 20%;
        }
        .status {
            /* display: inline-block; */
            width: 10px;
            height: 10px;
            margin: 10px;
        }
        .due {
            background-color: green;
        }
        .pending {
            background-color: orange;
        }
        .suspend {
            background-color: red
        }
    </style>
</head>
<body>
    <h1>Ini adalah halaman {{ $title }}</h1>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Equipment</th>
                    <th>Year of Purchasing</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>HS/I/AC-04-1</td>
                    <td>2022</td>
                    <td>
                        <div class="items-status">
                            <div class="status due"></div>
                            <div class="status pending"></div>
                            <div class="status suspend"></div>
                        </div>
                    </td>
                    <td>
                        <div class="items-action">
                            <a href="#" class="action">Detil</a>
                            <a href="#" class="action">Edit</a>
                            <a href="#" class="action">Hapus</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>