<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-800">
                Profissionais de Saúde
            </h2>
            <a href="{{ route('professionals.create') }}"
               class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                Novo Profissional
            </a>
        </div>
    </x-slot>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nome
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($professionals as $professional)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $professional->name }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($professional->active)
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                    Ativo
                                </span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                    Inativo
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm">
                            <a href="{{ route('professionals.edit', $professional) }}"
                               class="text-indigo-600 hover:text-indigo-900">
                                Editar
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-sm text-gray-500 text-center">
                            Nenhum profissional de saúde cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Paginação --}}
        @if ($professionals->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $professionals->links() }}
            </div>
        @endif
    </div>
</x-app-layout>