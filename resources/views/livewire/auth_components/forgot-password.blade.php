<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="forgotPassword" class="space-y-4 md:space-y-6" method="post">
        @csrf
        <input type="email" name="email" wire:model="email" placeholder="Enter your email">
        <button  type="submit" >Reset Password</button>
        @if (session()->has('error'))
            <div id="toast-simple" class="flex items-center w-full max-w-xs p-2 space-x-4 rtl:space-x-reverse text-red-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm dark:text-red-500 dark:accent-red-500 dark:bg-[#C4C4C4]border-2 border-red-700" role="alert">
                <div class="ps-4 text-sm font-bold tracking-wider ">{{session('error')}}</div>
            </div>
        @endif
        @if (session()->has('message'))
            <div id="toast-simple" class="flex items-center w-full max-w-xs p-2 space-x-4 rtl:space-x-reverse text-green-800 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm dark:text-green-500 dark:accent-green-500 dark:bg-[#C4C4C4]border-2 border-green-700" role="alert">
                <div class="ps-4 text-sm font-bold tracking-wider ">{{session('message')}}</div>
            </div>
        @endif

    </form>


</div>
