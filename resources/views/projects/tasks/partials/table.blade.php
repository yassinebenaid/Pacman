<div class="flex flex-col transition-all shadow-default-4 hover:shadow-door">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b border-gray-2">
                        <tr class="bg-gray">
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Progress
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Task Title
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Members
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Files
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Discussions
                            </th>
                            <th scope="col" class="px-6 py-2 text-xs font-medium text-left text-gray-3">
                                Creation Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($project->tasks as $task)
                            <tr
                                class="transition-all duration-300 ease-in-out bg-white border-b border-gray-2 hover:bg-gray-1">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    <div class="relative show-on-hover">
                                        <div
                                            class="hidden target absolute z-50 bottom-[0%] w-max bg-white p-5 rounded-lg left-[30%] shadow-default-5">
                                            <div class="font-medium">Deadline in {{ $task->deadline_counter }}</div>
                                            <div style="color: " class="font-semibold {{ $task->deadline_color }}">
                                                {{ $task->deadline }}</div>

                                            <span
                                                class="absolute p-3 bg-white rounded-md left-[-3%] rotate-45 bottom-[10%]"></span>

                                        </div>

                                        <x-breeze.progress :prc="$task->deadline_prc" />
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $task->title }}
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                    12
                                </td>

                                <td
                                    class="text-base {{ $task->status->color() }} font-bold px-6 py-4 whitespace-nowrap">
                                    {{ $task->status->name() }}
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                    12
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                    12
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-4 whitespace-nowrap">
                                    {{ $task->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
