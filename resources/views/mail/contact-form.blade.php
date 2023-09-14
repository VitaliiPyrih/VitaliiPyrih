<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <style>
        /* Стили для таблицы */
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #dddddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Дополнительные стили для заголовка */
        .header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        /* Дополнительные стили для ячейки с информацией */
        .info-cell {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<div class="header">{{config('app.name')}}</div>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Ip</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="info-cell">{{$data['name']}}</td>
        <td class="info-cell"><a href="mailto:{{$data['email']}}">{{$data['email']}}</a></td>
        <td class="info-cell"><a href="tel:{{$data['phone']}}">{{$data['phone']}}</a></td>
        <td class="info-cell">{{$data['ip']}}</td>
    </tr>
    </tbody>
</table>

<p style="padding: 5px;">{{$data['text']}}</p>

<p>{{ config('app.name')}}</p>
</body>
</html>
