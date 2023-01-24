@if ($project->files->isNotEmpty())


    <div class="flex flex-col col-span-2 transition-all rounded-lg h-min shadow-default-4 hover:shadow-door">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <table class="h-auto min-w-full">
                        <thead class="bg-white border-b border-gray-2">
                            <tr class="bg-gray">
                                <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                    File Name
                                </th>
                                <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                    Size
                                </th>
                                <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                    Creation Date
                                </th>
                                <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($project->files as $file)
                                <tr
                                    class="transition-all duration-300 ease-in-out bg-white border-b border-gray-2 hover:bg-gray-1">

                                    <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $file->name }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                        {!! $file->icon !!} {{ $file->type }}
                                    </td>

                                    <td class="px-6 py-4 text-base whitespace-nowrap">
                                        {{ $file->size }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                        {{ $file->created_at }}
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm cursor-pointer text-primary hover:underline whitespace-nowrap">
                                        <i class="px-4 bi bi-download"></i> Download
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="grid col-span-2 font-medium place-content-center text-gray-3/60 h-96">
        <i class="text-[6rem]  bi bi-file-x"></i>
        <span>No files here !</span>
    </div>
@endif
