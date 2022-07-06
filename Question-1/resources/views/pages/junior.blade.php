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
<h2>Junior mevkiisine sahip, 18 yaşından büyük ve 23 yaşından küçük kişilerin
    listelenmesi</h2>
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
        <th>Position</th>
        <th>Authority</th>
        <th>BirthYear</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->city }}</td>
            <td>@if ($user->position == 1)
                    Front
                @elseif ($user->position == 2)
                    Back
                @elseif ($user->position == 3)
                    Full
                @endif
            </td>
            <td>@if ($user->authority == 1)
                    Junior
                @elseif ($user->authority == 2)
                    Senior
                @elseif ($user->authority == 3)
                    Middle
                @endif
            </td>
            <td>{{ date('Y') - $user->age }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

