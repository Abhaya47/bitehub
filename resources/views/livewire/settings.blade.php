<div class="flex flex-col w-full bg-white">
    <!-- Header -->
    <header class="w-full bg-slate-50 border-b border-slate-200">
        <div class="mx-auto max-w-[1064px] px-8 py-6">
            <h1 class="font-extrabold text-[30px] leading-[38px] text-[#F6433F]">Profile Settings</h1>
        </div>
    </header>

    <!-- Main -->
    <main class="mx-auto max-w-[1064px] w-full px-8 py-8">
        <div class="flex flex-col gap-6">

            <!-- Section header -->
            <section class="pb-5 border-b border-slate-200">
                <h2 class="font-bold text-[18px] leading-[24px]">Profile Details</h2>
                <p class="text-[14px] leading-[160%] text-slate-600 mt-1">You can change your profile details here
                    seamlessly.</p>
            </section>

            <!-- Public Profile row -->
            <section class="flex flex-col lg:flex-row gap-8 items-start w-full">
                <!-- Label column -->
                <div class="w-full lg:w-[260px] flex-shrink-0">
                    <div class="mb-3">
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-[14px] text-slate-800">Public Profile</span>

                        </div>
                        <p class="text-[14px] leading-[160%] text-slate-600 mt-2">This is the main profile that will be
                            visible for everyone</p>
                    </div>
                </div>

                <!-- Inputs column -->
                <div class="flex flex-col gap-4 w-full lg:w-[520px]">
                    <!-- Username input -->
                    <label class="w-full">
                        <div class="flex items-center px-3 py-3 gap-3 bg-white border border-slate-300 rounded-full">
                            <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <input type="text" placeholder="Joe Public"
                                class="w-full text-[16px] leading-[22px] font-medium text-slate-600 bg-transparent outline-none"
                                aria-label="Public profile name">
                        </div>
                    </label>
                </div>
            </section>

            <div class="w-full border-t border-slate-200"></div>

            <!-- Bio section -->
            <section class="flex flex-col lg:flex-row gap-8 items-start w-full">
                <div class="w-full lg:w-[260px] flex-shrink-0">
                    <h3 class="font-bold text-[14px] text-slate-800">Bio Description</h3>
                    <p class="text-[14px] leading-[160%] text-slate-600 mt-2">This will be your main story. Keep it
                        very, very long</p>
                </div>

                <div class="w-full lg:w-[520px]">
                    <div class="p-3 bg-white border border-slate-300 rounded-[24px] min-h-[120px] flex flex-col">
                        <textarea rows="4"
                            class="flex-1 w-full text-[16px] leading-[160%] text-slate-600 bg-transparent outline-none resize-none"
                            placeholder="Bitehub is the one and only hub for hungry explorers. It’s the most perfect platform for foodies who snack, share, and discover together."></textarea>
                        <div class="flex justify-end items-center mt-2 text-slate-400 text-[12px]">300/300</div>
                    </div>
                </div>
            </section>

            <div class="w-full border-t border-slate-200"></div>

            <!-- Profile picture section -->
            <section class="flex flex-col lg:flex-row gap-8 items-start w-full">
                <div class="w-full lg:w-[260px] flex-shrink-0">
                    <h3 class="font-bold text-[14px] text-slate-800">Profile Picture</h3>
                    <p class="text-[14px] leading-[160%] text-slate-600 mt-2">This is where people will see your actual
                        face</p>
                </div>

                <div class="w-full lg:w-[520px]">
                    <div class="flex flex-col sm:flex-row items-start gap-4">
                        <!-- Avatar -->
                        <div class="flex-none w-[64px] h-[64px] rounded-full overflow-hidden bg-gray-300">
                            <img src={{ asset('images/pp.png') }} alt="avatar" class="w-full h-full object-cover">
                        </div>
                        <!-- Dropzone -->
                        <div
                            class="flex-1 p-6 bg-white border-2 border-dashed border-slate-300 rounded-[32px] relative">
                            <div class="flex flex-col items-center gap-4">
                                <div
                                    class="w-[48px] h-[48px] rounded-full bg-indigo-50 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#F6433F]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                </div>

                                <div class="text-center">
                                    <button class="font-bold text-[16px] text-[#F6433F]">Click here</button>
                                    <div class="text-[16px] text-slate-600 mt-1">to upload your file or drag</div>
                                    <div class="text-[14px] text-slate-400 mt-1">Supported Format:  JPG, PNG (1mb
                                        each)</div>
                                </div>
                            </div>

                            <div class="absolute right-6 top-6">
                                <img src="{{ asset('images/drag.png') }}" alt="Pizza" alt="uploaded example"
                                    class="w-[64px] h-72px] rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="w-full border-t border-slate-200"></div>

            <!-- Actions -->
            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ url('home') }}">
                    <button
                        class="flex items-center px-4 py-2.5 gap-2 border border-slate-300 rounded-full hover:bg-slate-50 transition">
                        <span class="font-bold text-[14px] text-slate-600">Cancel</span>
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </a>

                <button class="flex items-center px-4 py-2.5 gap-2 bg-red-400 rounded-full hover:bg-red-500 text-white">
                    <span class="font-bold text-[14px]">Save Settings</span>
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </button>
            </div>

        </div>
    </main>
</div>
