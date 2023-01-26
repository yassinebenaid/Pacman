<form x-on:submit.prevent="$wire.set('issue',content);$wire.save()" x-data="{
    height: '500px',
    tab: 'write',
    content: '',
    showConvertedMarkdown: false,
    convertedContent: '',
    convertedMarkdown() {
        this.showConvertedMarkdown = true;
        this.convertedContent = marked(this.content, {
            sanitize: true
        });
    },
    convertHtmlToMarkdown() {
        turndownService = new TurndownService({
            headingStyle: 'atx',
            codeBlockStyle: 'fenced'
        });
    },
}" x-init="convertHtmlToMarkdown();"
    @status:success.window="$el.reset();open=0" x-ref="form" x-cloak class="w-full px-4 mx-auto">

    <div class="relative">
        <div class="top-0 left-0 right-0 block border border-b-0 border-gray-300 bg-gray-50 rounded-t-md">
            <button type="button" class="inline-block px-4 py-2 font-semibold text-gray-400"
                :class="{ 'text-indigo-600': tab === 'write' }"
                x-on:click.prevent="tab = 'write'; showConvertedMarkdown = false">Write</button>
            <button type="button" class="inline-block px-4 py-2 font-semibold text-gray-400"
                :class="{ 'text-indigo-600': tab === 'preview' && showConvertedMarkdown === true }"
                x-on:click.prevent="tab = 'preview'; convertedMarkdown()">Preview</button>
        </div>

        <div x-show="! showConvertedMarkdown">
            <div>
                <textarea x-ref="input" x-model.debounce.750ms="content"
                    class="w-full h-[500px] border-gray-2 resize-none rounded-b-md focus:outline-0 focus:ring-0 focus:border-gray-2"></textarea>
            </div>
        </div>

        <div x-show="showConvertedMarkdown">
            <div x-html="convertedContent"
                class="w-full p-5 overflow-y-auto leading-6 prose bg-white border border-gray-300 shadow-sm max-w-none prose-indigo rounded-b-md"
                :style="`height: ${height}; max-width: 100%`"></div>
        </div>
    </div>

    <div class="flex items-center justify-end gap-5 px-5 py-4">

        <button @click.prevent="$refs.form.reset();open=0"
            class="py-2 text-sm font-medium border-2 rounded-md text-slate-600 border-slate-500 px-7">Cancel</button>

        <x-breeze.submit-btn>Save</x-breeze.submit-btn>
    </div>

</form>
