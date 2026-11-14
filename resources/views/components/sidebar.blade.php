<div id="sidebar-overlay"
    class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden">
</div>

<aside id="sidebar"
    class="w-64 shrink-0 fixed inset-y-0 left-0 z-50
    bg-white text-black flex flex-col shadow-xl border border-gray-200
    -translate-x-full lg:translate-x-0
    transition-transform duration-300 ease-in-out">
    
    <h2 class="flex justify-between items-center p-4 mt-2 mb-2 text-2xl font-bold">
        <a href="/">
            <span class="text-blue-600">Help</span><span>Desk</span>
        </a>

        <!-- Close button -->
        <button id="close-sidebar" class="lg:hidden text-gray-500 hover:text-black">
            <x-gmdi-close class="w-7 h-7" />
        </button>
    </h2>

    <!-- Navigation -->
    <a href="/dashboard"
        class="group flex items-center gap-2 p-2 h-16 font-semibold hover:bg-blue-600 hover:text-white">
        <x-gmdi-dashboard class="w-7 h-7 text-blue-600 group-hover:text-white" />
        Dashboard
    </a>

    <a href="/ticket"
        class="group flex items-center gap-2 p-2 h-16 font-semibold hover:bg-blue-600 hover:text-white">
        <x-gmdi-local-activity class="w-7 h-7 text-blue-600 group-hover:text-white" />
        All tickets
    </a>

    <a href="/create"
        class="group flex items-center gap-2 p-2 h-16 font-semibold hover:bg-blue-600 hover:text-white">
        <x-gmdi-add-circle class="w-7 h-7 text-blue-600 group-hover:text-white" />
        Create Ticket
    </a>

    <a href="/profile"
        class="group flex items-center gap-2 p-2 h-16 font-semibold hover:bg-blue-600 hover:text-white">
        <x-gmdi-person class="w-7 h-7 text-blue-600 group-hover:text-white" />
        My Profile
    </a>

    <!-- Logout -->

    <form action="{{ route('logout') }}" method="POST"  
    class="group flex items-center gap-2 p-2 h-16 font-semibold hover:bg-red-500 hover:text-white mt-auto">
    @csrf

    <x-gmdi-logout class="w-7 h-7 text-red-600 group-hover:text-white" />
    <button type="submit">
        Logout
    </button>
</form>

</aside>
