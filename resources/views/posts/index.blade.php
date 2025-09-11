<x-app-layout>

   <x-category-tabs />


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <ul class="overflow-hidden flex flex-col gap-2">
                @forelse($posts as $post )
                <li>
                    <x-post-item :post="$post" />
                </li>
                @empty
                <li class="py-8 px-4 text-center text-gray-500">
                    No Post Found !-_-
                </li>
                @endforelse

            </ul>
        </div>
    </div>

    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $posts -> onEachSide(1) -> links() }}
    </div>

</x-app-layout>