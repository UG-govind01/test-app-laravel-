<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lead Industry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-100">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add Lead Industry</h2>

        <form action="{{ route('leadindustry.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Industry Name</label>
                <input type="text" 
                       name="name" 
                       placeholder="Enter Name"
                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all placeholder:text-gray-400">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Additional Nodes</label>
                <input type="text" 
                       name="additional_nodes" 
                       placeholder="Enter Additional Nodes"
                       class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all placeholder:text-gray-400">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg shadow-md hover:shadow-lg transition-all transform active:scale-[0.98]">
                Save Industry
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('leadindustry.index') }}" class="text-sm text-gray-500 hover:text-blue-600 hover:underline transition-all">
                ← Back to List
            </a>
        </div>
    </div>

</body>
</html>

