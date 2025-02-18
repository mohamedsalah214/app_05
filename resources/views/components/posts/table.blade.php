@props( ['post'] )

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $post->id }}</th>
    <td class="px-6 py-4">{{ $post->slug }}</td>
    <td class="px-6 py-4">{{ $post->category_id }}</td>
    <td class="px-6 py-4">{{ $post->title }}</td>
    <td class="px-6 py-4">{{ $post->description }}</td>
    <td class="px-6 py-4">
        @if ($post->image)
            <img src="{{ asset('storage/' . str_replace('public/', '', $post->image)) }}" alt="Post Image" width="100">
        @else
        <img src="{{ Avatar::create('Joko Widodo')->toBase64() }}" />
        @endif
    </td>
    <td class="px-6 py-4">{{ $post->status }}</td>
    <td class="px-6 py-4">
        <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
        </form>
    </td>
</tr>
