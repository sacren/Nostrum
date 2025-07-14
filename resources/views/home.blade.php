<x-app-layout>
    <x-slot name="header">
        <!-- Outer wrapper with responsive padding -->
        <div class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 py-4 w-full bg-white">
            <!-- Main Grid Container -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Empty space on the left (hidden on mobile) -->
                <div class="hidden md:block md:col-span-2"></div>
                <!-- Content Wrapper - Same Width for All Sections -->
                <div class="col-span-12 md:col-span-10">
                    <!-- Inner Responsive Wrapper -->
                    <div class="w-full max-w-screen-sm mx-auto md:max-w-2xl">
                        <!-- Profile Section (Logo + Text) -->
                        <div
                            class="flex flex-col md:flex-row bg-white p-4 space-y-4 md:space-y-0 md:gap-x-16 items-start">
                            <!-- Logo / Image -->
                            <div class="w-24 h-24 flex-shrink-0">
                                <img class="w-full h-full rounded-full border-4 border-white object-cover shadow-md"
                                    src="https://styles.redditmedia.com/t5_2uakt/styles/communityIcon_fmttas2xiy351.png"
                                    alt="App Logo">
                            </div>
                            <!-- Text Content -->
                            <div class="flex flex-col justify-center text-center md:text-left">
                                <h1 class="font-bold text-xl mb-2">{{ __('Quantum Computing') }}</h1>
                                <div
                                    class="flex flex-wrap justify-center md:justify-start gap-x-4 gap-y-1 text-gray-600">
                                    <span><strong>153</strong> posts</span>
                                    <span><strong>23k</strong> followers</span>
                                    <span><strong>212</strong> following</span>
                                </div>
                                <!-- Bio / Description Text -->
                                <div class="mt-3 text-sm"><strong>quantumclub</strong></div>
                                <div class="mt-1 text-sm text-gray-700">
                                    {{ __('Learn quantum computing concepts, explore breakthroughs, and stay updated with the future of computation.') }}
                                </div>
                                <div class="mt-1 text-blue-500 hover:underline text-sm">
                                    <a href="#">www.quantum.org</a>
                                </div>
                            </div>
                        </div>
                        <!-- Spacer -->
                        <div class="h-6"></div>
                        <!-- Image Grid Section -->
                        <div class="grid grid-cols-3 gap-2 mt-4">
                            <!-- Image 1 -->
                            <div class="aspect-square rounded-lg overflow-hidden bg-gray-200">
                                <img src="https://picsum.photos/id/1015/600/600" alt="Post 1"
                                    class="w-full h-full object-cover cursor-pointer hover:opacity-90 transition-opacity">
                            </div>
                            <!-- Image 2 -->
                            <div class="aspect-square rounded-lg overflow-hidden bg-gray-200">
                                <img src="https://picsum.photos/id/1016/600/600" alt="Post 2"
                                    class="w-full h-full object-cover cursor-pointer hover:opacity-90 transition-opacity">
                            </div>
                            <!-- Image 3 -->
                            <div class="aspect-square rounded-lg overflow-hidden bg-gray-200">
                                <img src="https://picsum.photos/id/1018/600/600" alt="Post 3"
                                    class="w-full h-full object-cover cursor-pointer hover:opacity-90 transition-opacity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
