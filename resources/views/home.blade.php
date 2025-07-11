<x-app-layout>
    <x-slot name="header">
        <!-- Outer wrapper with responsive padding -->
        <div class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 py-4 w-full bg-white">
            <!-- Grid container -->
            <div class="grid grid-cols-12 gap-6">
                <!-- Empty space on the left (hidden on mobile) -->
                <div class="hidden md:block md:col-span-2"></div>

                <!-- Logo + Text Block in right column -->
                <div class="col-span-12 md:col-span-10">
                    <!-- Wrapper for mobile -->
                    <div class="flex md:ml-16">
                        <div class="w-full max-w-3xl">
                            <div
                                class="flex flex-col md:flex-row bg-white p-4 space-y-4 md:space-y-0 md:space-x-0 md:gap-x-16 items-start">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
