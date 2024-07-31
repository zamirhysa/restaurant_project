<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-6">
            @foreach($menus as $menu)
            <div class="max-w-md mx-auto mb-6 rounded-lg shadow-lg">
                <img class="w-full h-64 object-cover rounded-t-lg" src="{{ Storage::url($menu->image) }}" alt="Image" />
                <div class="px-6 py-4">
                    
                    <h4 class="mb-3 text-xl font-semibold text-green-600 uppercase">{{$menu->name}}</h4>
                    <p class="text-gray-700">{{$menu->description}}</p>
                </div>
                <div class="flex items-center justify-between p-4">
                    <span class="text-xl font-semibold text-green-600">{{$menu->price}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
