<nav class="lg:ml-64 flex flex-row justify-between align-middle items-center h-18 bg-white border-2 border-gray-200 shadow-2xl">

    <button id="toggle-sidebar"
    class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
    <x-gmdi-menu class="w-7 h-7 text-gray-700" />
</button>

    <!-- search bar -->
    <div class="relative m-4 w-80">
        <x-gmdi-search class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" />

        <input type="text" placeholder="Search..."
            class="w-full h-10 pl-11 pr-4 border border-gray-200 rounded-2xl bg-white text-black shadow-sm focus:outline-none focus:border-gray-400 transition-all">
    </div>
    <!-- notifications and profile icon -->
    <div class="flex flex-row gap-4 items-center mr-10">
        <div class="relative inline-flex items-center cursor-pointer group">
            <x-gmdi-notifications-o class="w-7 h-7 text-black hover:bg-gray-200 hover:rounded-1xl" />
            <span
                class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-bold text-white shadow-md">
                3
            </span>
        </div>
        <div class="flex flex-row gap-2 items-center">
            <img src="" alt="" class="h-9 w-9 border border-gray-700 rounded-4xl">
            <div>
                <p class="text-[15px] font-semibold text-black">Name</p>
                <p class="text-[12px] font-semibold text-gray-400">Role</p>
            </div>
        </div>
    </div>
</nav>