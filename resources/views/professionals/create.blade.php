<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-800">
                Novo Profissional de Saúde
            </h2>
            <a href="{{ route('professionals.index') }}"
               class="px-4 py-2 bg-gray-200 text-gray-700 text-sm rounded-md hover:bg-gray-300 transition">
                Voltar
            </a>
        </div>
    </x-slot>

    <div class="max-w-lg bg-white rounded-lg shadow p-6">

        {{-- Erros de validação --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-md">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('professionals.store') }}">
            @csrf

            {{-- Nome --}}
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Nome <span class="text-red-500">*</span>
                </label>
                <input type="text"
                       id="name"
                       name="name"
                       value="{{ old('name') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                       placeholder="Nome do profissional">
            </div>

            {{-- Ativo --}}
            <div class="mb-6">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox"
                           name="active"
                           value="1"
                           {{ old('active', true) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-indigo-600">
                    <span class="text-sm text-gray-700">Ativo</span>
                </label>
            </div>

            <button type="submit"
                    class="w-full px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition">
                Salvar
            </button>
        </form>
    </div>
</x-app-layout>