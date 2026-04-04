<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lead Industry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Edit Lead Industry</h2>

        <form action="{{ route('leadindustry.update', ['leadindustry' => $leadIndustry->id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Industry Name</label>
                <input type="text" 
                       name="name" 
                       value="{{ $leadIndustry->name }}" 
                       placeholder="Industry Name"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Additional Nodes</label>
                <input type="text" 
                       name="additional_nodes" 
                       value="{{ $leadIndustry->additional_nodes }}" 
                       placeholder="Additional Nodes"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition-colors shadow-sm">
                Update Industry
            </button>
            
            <div class="text-center mt-4">
                <a href="{{ route('leadindustry.index') }}" class="text-sm text-gray-500 hover:underline">Cancel and go back</a>
            </div>
        </form>
    </div>

</body>
</html>