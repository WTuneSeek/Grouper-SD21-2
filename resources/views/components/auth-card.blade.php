<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-800">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-slate-200 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
