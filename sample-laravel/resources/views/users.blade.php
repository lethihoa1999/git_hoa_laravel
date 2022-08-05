<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User information</title>
    <style>
        th{
            text-align: center;
        }
        .pagination{
            display: flex; justify-content: center;
        }
        td{
            border-left: groove;
        }
    </style>
</head>
<body>
    <div class="text-align: center;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-success">
                {{ Session::get('fail') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Địa chỉ email</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                </tr>
            </thead>
            @foreach ($user as $key=>$use)
            <tr>
                <td>{{ $user->firstItem() + $key }}</td>
                <td>{{ $use->mail_address }}</td>
                <td>{{ $use->name }}</td>
                <td>{{ $use->address }}</td>
                <td>{{ $use->phone }}</td>
            </tr>
            @endforeach
        </table>
        <div>{{ $user->links() }}</div>  
        <a href={{ route('registers') }} class="btn btn-primary">Register</a>
    </div>
</body>
</html>
