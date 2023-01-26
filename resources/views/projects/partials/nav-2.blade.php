<div class="w-full px-8 my-4 bg-white rounded-lg shadow-default">

    @php
        $isTasksSection = $section === 'tasks';
        $selected = "after:content-[''] after:border-primary after:rounded-t-lg after:border-2 after:absolute after:right-0 after:bottom-0 after:w-full relative
                                p-5 transition-all  rounded-sm cursor-pointer text-primary hover:text-primary hover:opacity-90";
        $normal = 'p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90';
    @endphp

    <div class="{{ !$isTasksSection ?: 'border-b-2 ' }} flex items-center justify-between   border-gray-1 ">

        {{-- navigation --}}
        <div class="flex justify-between font-semibold text-gray-3">

            <div wire:click='section("about")' class="{{ $section === 'about' ? $selected : $normal }}">
                About
            </div>

            @if ($project->authIsMember())
                <div wire:click='section("tasks")' class="{{ $section === 'tasks' ? $selected : $normal }}"> Tasks</div>


                <div wire:click='section("files")' class="{{ $section === 'files' ? $selected : $normal }}"> Files </div>

                <div wire:click='section("issues")' class="{{ $section === 'issues' ? $selected : $normal }}">Issues
                </div>

                <div wire:click='section("activities")' class="{{ $section === 'activities' ? $selected : $normal }}">
                    Activity</div>
            @endif

            <div wire:click='section("members")' class="{{ $section === 'members' ? $selected : $normal }}">Members
            </div>
        </div>

        <div>
            @if ($section === 'issues')
                @livewire('project.issue.create', ['definer' => $definer])
            @endif

            @if ($section === 'members')
                @if (!$project->authIsMember())

                    @if ($project->auth_sent_request_member)
                        <button wire:click='cancel'
                            class="w-full px-4 py-2 font-medium border-2 rounded-lg text-primary border-primary">
                            Cancel Request
                        </button>
                    @else
                        <button wire:click='add' class="w-full px-4 py-2 font-medium text-white rounded-lg bg-primary">
                            Join the team
                        </button>
                    @endif

                @endif
            @endif
        </div>

    </div>


    {{-- filters --}}
    @if ($isTasksSection)
        <div class="flex justify-between">

            <div class="flex gap-5 py-5 font-medium">

                <div>Status <span class="font-bold cursor-pointer">
                        Any <i class="bi bi-caret-down-fill "></i> </span>
                </div>

                <div>Category <span class="font-bold cursor-pointer">
                        Any <i class="bi bi-caret-down-fill "></i> </span>
                </div>

                <div>Assined to <span class="font-bold cursor-pointer">
                        Anyone <i class="bi bi-caret-down-fill "></i></span>
                </div>
                <div>Sorted by <span class="font-bold cursor-pointer">
                        Creation time <i class="bi bi-caret-down-fill "></i></span>
                </div>
            </div>

            <div class="flex items-center gap-5 ">
                <div class="font-semibold cursor-pointer text-gray-3 hover:underline">Drafts (5)</div>
                <x-breeze.create-button>Create Task </x-breeze.create-button>
            </div>
        </div>
    @endif

</div>
