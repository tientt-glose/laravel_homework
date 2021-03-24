<table style="width:50%">
  <tr>
    <th>Name</th>
    <th>Dob</th>
  </tr>
  @foreach($data as $item)
  <tr>
    <td>{{ $item['name'] }}</td>
    <td>{{ $item['dob'] }}</td>
  </tr>
  @endforeach
</table>

<a href={{ route('user.create') }}><button type="button">Create user!</button>