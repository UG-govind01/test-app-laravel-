<h2>Add Lead Industry</h2>

<form action="{{ route('leadindustry.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="additional_nodes" placeholder="Additional Nodes" required>
    <button type="submit">Save</button>
</form>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Additional Nodes</th>
        <th>Action</th>
    </tr>

    @foreach($leadIndustries as $row)
    <tr>
        <td>{{ $row->name }}</td>
        <td>{{ $row->additional_nodes }}</td>
        <td>
            <a href="{{ route('leadindustry.edit', $row->id) }}">Edit</a>

            <form action="{{ route('leadindustry.destroy', $row->id) }}" 
                  method="POST" 
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>