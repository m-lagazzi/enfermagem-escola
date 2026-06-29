<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-800">
                Tipos de Serviço
            </h2>
            <a href="{{ route('service-types.create') }}"
               class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 transition">
                Novo Tipo de Serviço
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
                        Requer Medicação
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
                @forelse ($serviceTypes as $serviceType)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $serviceType->name }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($serviceType->requires_medication_detail)
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                    Sim
                                </span>
                            @else
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                    Não
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if ($serviceType->active)
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
                            <a href="{{ route('service-types.edit', $serviceType) }}"
                               class="text-indigo-600 hover:text-indigo-900">
                                Editar
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-sm text-gray-500 text-center">
                            Nenhum tipo de serviço cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Paginação --}}
        @if ($serviceTypes->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $serviceTypes->links() }}
            </div>
        @endif
    </div>
</x-app-layout>