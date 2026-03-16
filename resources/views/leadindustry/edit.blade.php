<h2>Edit Lead Industry</h2>

<form action="{{ route('leadindustry.update', $leadIndustry) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $leadIndustry->name }}">
    <input type="text" name="additional_nodes" value="{{ $leadIndustry->additional_nodes }}">

    <button type="submit">Update</button>
</form>