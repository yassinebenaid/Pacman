<?php

namespace App\Support;

class Markdown
{
    protected $html;

    public function __construct(
        protected $markdown
    ) {
    }

    protected function complie()
    {
        $content = $this->markdown;


        // ## title
        $content = preg_replace_callback(
            "#^\#\#\#([^\\n]+)#",
            function ($matches) {
                return "<h1 class='text-xl font-bold'>$matches[1]</h1>";
            },
            $content
        );

        // ## title
        $content = preg_replace_callback(
            "#^\#\#([^\\n]+)#",
            function ($matches) {
                return "<h1 class='text-2xl font-bold '>$matches[1]</h1>";
            },
            $content
        );


        // # title
        $content = preg_replace_callback(
            "#^\#([^\\n]+)#",
            function ($matches) {
                return "<h1 class='text-3xl font-bold '>$matches[1]</h1>";
            },
            $content
        );

        // ````code````
        $content = preg_replace_callback(
            "#\`\`\`([\s\n]+)([^`]+)([\s\n]+)\`\`\`#",
            function ($matches) {
                return "<div style='background-color:#333;margin:1rem' class='p-2 text-white rounded-lg'><pre><code >" . $this->code($matches[2]) . "</code> </pre></div>";
            },
            $content
        );

        // `code`
        $content = preg_replace_callback(
            "#\`([^`]+)\`#",
            function ($matches) {
                return "<span style='background-color: rgb(226 232 240)' class='p-1 text-sm rounded-md backdrop-blur-xl text-slate-700'>$matches[1]</span>";
            },
            $content
        );

        // ````code````
        $content = preg_replace_callback(
            "#\n\-([^\n]+)#",
            function ($matches) {
                return "<div><span class='text-2xl'>• </span>$matches[1]</div>";
            },
            $content
        );

        // *italic*
        $content = preg_replace_callback(
            "#(([*])([^*]+)([*]))#",
            function ($matches) {
                return "<i>$matches[3]</i>";
            },
            $content
        );

        return $content;
    }

    protected function code($code)
    {
        $code = preg_replace_callback(
            "#([\"\'])([^\"\']+)([\"\'])#",
            function ($matches) {
                return "<span style='color: orange;'>$matches[0] </span>";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#echo#",
            function ($matches) {
                return "<span class='text-primary'>$matches[0]</span>";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#([A-z0-9_]+)\(#",
            function ($matches) {
                return "<span style='color:#4361ee'>$matches[1]</span>(";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#([\(\)]+)#",
            function ($matches) {
                // dd($matches);
                return "<span style='color: rgb(56 189 248);'>$matches[1]</span>";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#(public)|(function)#",
            function ($matches) {
                return "<span style='color:#9d4edd'>$matches[0]</span>";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#(([$]+)([A-z0-9_]+))#",
            function ($matches) {

                return "<span style='color: rgb(56 189 248);'>$matches[2]</span><span style='color: rgb(220 38 38);'>$matches[3]</span>";
            },
            $code
        );

        // ## title
        $code = preg_replace_callback(
            "#\s(return)\s#",
            function ($matches) {

                return "<span style='color: #4cc9f0;'>$matches[1] </span>";
            },
            $code
        );

        return $code;
    }

    public function html()
    {
        return $this->complie();
    }
}
