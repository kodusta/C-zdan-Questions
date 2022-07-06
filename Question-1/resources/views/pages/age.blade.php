<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h2>18-25 yaş aralığında, aynı şehirde yaşayan ve aynı iş düzeyinde bulunan kişilerin toplam
    miktarının bulunduğu liste</h2>
<a href="/">Full mevziisine sahip kişilerin listelenmesi</a><br>
<a href="{{ route('junior') }}">Junior mevkiisine sahip, 18 yaşından büyük ve 23 yaşından küçük kişilerin
    listelenmesi</a><br>
<a href="{{ route('age') }}">18-25 yaş aralığında, aynı şehirde yaşayan ve aynı iş düzeyinde bulunan kişilerin toplam
    miktarının bulunduğu liste</a>
<table>

    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Count</th>

    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->count }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

