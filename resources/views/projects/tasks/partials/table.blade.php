<div class="flex flex-col shadow-default-4 transition-all hover:shadow-door">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b border-gray-2">
                        <tr class="bg-gray">
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Progress
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Task Title
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Members
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Status
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Files
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Discussions
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-3 px-6 py-2  text-left">
                                Creation Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($project->tasks as $task)
                            <tr
                                class="bg-white border-b border-gray-2 transition-all duration-300 ease-in-out hover:bg-gray-1">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <div class="relative show-on-hover">
                                        <div
                                            class="hidden target absolute z-50 bottom-[0%] w-max bg-white p-5 rounded-lg left-[30%] shadow-default-5">
                                            <div class="font-medium">Deadline in {{ $task->deadline_counter }}</div>
                                            <div style="color: {{ $task->dealine_color }}" class="font-semibold ">
                                                {{ $task->deadline }}</div>

                                            <span
                                                class="absolute p-3 bg-white rounded-md left-[-3%] rotate-45 bottom-[10%]"></span>

                                        </div>

                                        <x-breeze.progress :prc="$task->deadline_prc" />
                                    </div>
                                </td>

                                <td class="text-base font-medium text-gray-900 px-6 py-4 whitespace-nowrap">
                                    {{ $task->title }}
                                </td>

                                <td class="text-sm text-gray-4 px-6 py-4 whitespace-nowrap">
                                    12
                                </td>

                                <td
                                    class="text-base {{ $task->status->color() }} font-bold px-6 py-4 whitespace-nowrap">
                                    {{ $task->status->name() }}
                                </td>

                                <td class="text-sm text-gray-4 px-6 py-4 whitespace-nowrap">
                                    12
                                </td>

                                <td class="text-sm text-gray-4 px-6 py-4 whitespace-nowrap">
                                    12
                                </td>

                                <td class="text-sm text-gray-4 px-6 py-4 whitespace-nowrap">
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
