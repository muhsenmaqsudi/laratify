<div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow shadow-md overflow-hidden sm:rounded-lg border-b border-t border-gray-200">
            <table class="min-w-full">
                <thead class="bg-gray-300">
                <tr>
                    @foreach($columns as $column)
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ $column }}
                        </th>
                    @endforeach
                    @if($actions)
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    @endif
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($rows as $row)
                    <tr class="{{ $hover ? 'hover:bg-gray-100': '' }} {{ $stripped ? ($loop->even ? 'bg-gray-200' : '') : '' }}">
                        @foreach($columns as $column_key => $column_name)
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                {{ is_array($row) ? $row[$column_key] : $row->{$column_key} }}
                            </td>
                        @endforeach
                        @includeWhen($actions, $actionsCustomView ? $actionsCustomView : 'componel::components.table-actions', compact('row', 'actions'))
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
