<x-app-layout>
    <x-slot name="title">
        {{ __('New Post') }}
    </x-slot>

    <x-slot name="header">
        <div
            class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 py-4
                    w-full max-w-screen-sm mx-auto md:max-w-2xl bg-white">
            <h1 class="text-2xl font-bold">Add New Post</h1>
        </div>
    </x-slot>

    <div
        class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 py-4 w-full
        max-w-screen-sm mx-auto md:max-w-2xl bg-white">

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                    Upload Image
                </label>
                <input type="file" name="image" id="image" required
                    class="block w-full text-sm text-gray-500
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-blue-50 file:text-blue-700
                                      hover:file:bg-blue-100">
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="caption" class="block text-sm font-medium text-gray-700 mb-2">
                    Caption
                </label>
                <textarea name="caption" id="caption" rows="3"
                    class="w-full px-3 py-2 border border-gray-300
                            rounded-md shadow-sm focus:outline-none
                            focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Add a caption...">{{ old('caption') }}</textarea>
                @error('caption')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('profiles.index') }}"
                    class="px-4 py-2 text-sm font-medium text-gray-700
                            bg-white border border-gray-300 rounded-md shadow-sm
                            hover:bg-gray-50 focus:outline-none focus:ring-2
                            focus:ring-offset-2 focus:ring-blue-500">
                    Cancel
                </a>
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white
                            bg-blue-600 border border-transparent rounded-md
                            shadow-sm hover:bg-blue-700 focus:outline-none
                            focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
