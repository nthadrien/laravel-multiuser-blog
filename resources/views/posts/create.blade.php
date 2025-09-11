<x-app-layout>



    <div class="py-12">

        

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <form class="bg-white p-8 rounded-lg" method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
                @csrf

                <h4 class="text-bold mb-6">Create Posts</h4>

                <!-- Title -->
                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <!-- Category -->
                <div class="mt-4">
                    <x-input-label for="category_id" :value="__('category')" />
                    <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                        <option value="">Select the Category</option>
                        @foreach( $categories as $category ) 
                            <option value="{{ $category->id }}" @selected( old('category_id') == $category->id ) >{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />
                    <input id="image" class="block mt-1 w-full border-gray-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="file" name="image" accept="image/png, image/jpeg" :value="old('image')" required autofocus />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <!-- Content -->
                <div class="mt-4">
                    <x-input-label for="content" :value="__('Content')" />
                    <x-input-textarea id="content" class="block mt-1 w-full" type="text" name="content" required autofocus required>{{ old('content') }}</x-input-textarea>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>

                
                <x-primary-button type="submit" class="mt-4">
                    Submit
                </x-primary-button>

            </form>

        </div>

    </div>

</x-app-layout>