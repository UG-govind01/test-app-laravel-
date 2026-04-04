<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Industry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">

    <div class="max-w-4xl mx-auto">
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Add Lead Industry</h2>
            
            <form action="{{ route('leadindustry.store') }}" method="POST" class="flex flex-col md:flex-row gap-4">
                @csrf
                <input type="text" name="name" placeholder="Industry Name" required 
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                
                <input type="text" name="additional_nodes" placeholder="Additional Nodes" required 
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition duration-200">
                    Save Industry
                </button>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b bg-gray-50">
                <h2 class="text-xl font-bold text-gray-800">All Lead Industries</h2>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 font-semibold">ID</th>
                        <th class="py-3 px-6 font-semibold">Name</th>
                        <th class="py-3 px-6 font-semibold">Additional Nodes</th>
                        <th class="py-3 px-6 font-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($leadIndustries as $leadIndustry)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6">{{ $leadIndustry->id }}</td>
                        <td class="py-3 px-6 font-medium text-gray-900">{{ $leadIndustry->name }}</td>
                        <td class="py-3 px-6">{{ $leadIndustry->additional_nodes }}</td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center gap-3">
                                <a href="{{ route('leadindustry.edit', $leadIndustry->id) }}" 
                                   class="text-blue-600 hover:text-blue-800 font-semibold">
                                    Edit
                                </a>

                                <form action="{{ route('leadindustry.destroy', $leadIndustry->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" 
                                            class="text-red-500 hover:text-red-700 font-semibold">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @if($leadIndustries->isEmpty())
                <div class="text-center py-10 text-gray-500 italic">
                    No lead industries found.
                </div>
            @endif
        </div>
    </div>

</body>
</html>