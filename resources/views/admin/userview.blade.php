<body>
<table>
<tr>
<td>Id</td>
<td>nama</td>
<td>email</td>
<td>saldo</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->saldo }}</td>
<td>{{ $user->email }}</td>
</tr>
@endforeach
</table>
</body>
</html>