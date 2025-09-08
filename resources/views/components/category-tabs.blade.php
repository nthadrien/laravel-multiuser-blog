<div class="bg-white text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px justify-center">
        <li>
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">
                All
            </a>
        </li>
        @forelse($categories as $category)
        <li class="me-2">
            <a href="#" class="inline-block p-4 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">
                {{ $category -> name }}
            </a>
        </li>
        @empty
        <li>
            No Categories
        </li>
        @endforelse

    </ul>
</div>