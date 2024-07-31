<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-6">
            @foreach ($categories as $category)
                <div class="max-w-md mx-auto mb-6 rounded-lg shadow-lg">
                    <img class="w-full h-64 object-cover rounded-t-lg" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <div class="px-6 py-4">
                        <a href="{{ route('categories.show', $category->id) }}">
                            <h4 class="mb-3 text-xl font-semibold text-green-600 hover:text-green-400 uppercase">
                                {{ $category->name }}
                            </h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
