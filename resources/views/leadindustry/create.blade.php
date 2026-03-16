<h2>Add Lead Industry</h2>

<form action="{{ route('leadindustry.store') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter Name">
    <br><br>

    <label>Additional Nodes:</label>
    <input type="text" name="additional_nodes" placeholder="Enter Additional Nodes">
    <br><br>

    <button type="submit">Save</button>
</form>

<br>
<a href="{{ route('leadindustry.index') }}">Back to List</a>