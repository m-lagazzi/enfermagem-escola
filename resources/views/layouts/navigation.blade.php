<aside class="w-64 min-h-screen bg-white border-r border-gray-200 flex flex-col">

    {{-- Logo / Nome do sistema --}}
    <div class="px-6 py-5 border-b border-gray-200">
        <span class="text-lg font-semibold text-gray-800">🏥 Enfermagem APAE</span>
    </div>

    {{-- Menu principal --}}
    <nav class="flex-1 px-4 py-6 space-y-1">

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-nav-link>

        {{-- Lançar Atendimento (rota a criar depois) --}}
        <x-nav-link href="#" :active="false">
            Lançar Atendimento
        </x-nav-link>

        {{-- Histórico (rota a criar depois) --}}
        <x-nav-link href="#" :active="false">
            Histórico
        </x-nav-link>

        {{-- Cadastros (rota a criar depois) --}}
        <x-nav-link href="#" :active="false">
            Cadastros
        </x-nav-link>

    </nav>