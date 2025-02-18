

<x-layouts.app>


    <div class="flex items-center justify-end gap-x-6 mb-5">
        <a href="{{ route('posts.create') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create New Service</a>
    </div>



    <div class="relative overflow-x-auto">

        <div class="mb-5">
            {{-- <form method="GET" action="{{ route('posts.index') }}" class="mb-4"> --}}
                <input type="text" name="search" value="{{ request()->search }}" placeholder="Search..." class="p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Search</button>
            </form>
        </div>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#ID</th>
                    <th scope="col" class="px-6 py-3">Slug</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <x-posts.table :post="$post" />
                @endforeach
            </tbody>
            <div class="mt-5">
                {{ $posts->links() }}
            </div>
        </table>
    </div>

</x-layouts.app>
