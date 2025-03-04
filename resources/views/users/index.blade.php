<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
    </head>
    <body>
        <h1>ユーザーリスト</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>メールアドレス</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name}}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </body>
</html>