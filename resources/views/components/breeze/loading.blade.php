<div class="absolute" {{ $attributes }}>


    <div class="fixed top-0 left-0 grid w-screen h-screen backdrop-blur-[1px] place-content-center">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            style="margin: auto; background: transparent; display: block; shape-rendering: auto;" width="150px"
            height="150px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <g>
                <circle cx="60" cy="50" r="4" fill="#3c4ddb">
                    <animate attributeName="cx" repeatCount="indefinite" dur="1.0526315789473684s" values="95;35"
                        keyTimes="0;1" begin="-0.6365000000000001s"></animate>
                    <animate attributeName="fill-opacity" repeatCount="indefinite" dur="1.0526315789473684s"
                        values="0;1;1" keyTimes="0;0.2;1" begin="-0.6365000000000001s"></animate>
                </circle>
                <circle cx="60" cy="50" r="4" fill="#3c4ddb">
                    <animate attributeName="cx" repeatCount="indefinite" dur="1.0526315789473684s" values="95;35"
                        keyTimes="0;1" begin="-0.31350000000000006s"></animate>
                    <animate attributeName="fill-opacity" repeatCount="indefinite" dur="1.0526315789473684s"
                        values="0;1;1" keyTimes="0;0.2;1" begin="-0.31350000000000006s"></animate>
                </circle>
                <circle cx="60" cy="50" r="4" fill="#3c4ddb">
                    <animate attributeName="cx" repeatCount="indefinite" dur="1.0526315789473684s" values="95;35"
                        keyTimes="0;1" begin="0s"></animate>
                    <animate attributeName="fill-opacity" repeatCount="indefinite" dur="1.0526315789473684s"
                        values="0;1;1" keyTimes="0;0.2;1" begin="0s"></animate>
                </circle>
            </g>
            <g transform="translate(-15 0)">
                <path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#3c4ddb" transform="rotate(90 50 50)"></path>
                <path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#3c4ddb">
                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite"
                        dur="1.0526315789473684s" values="0 50 50;45 50 50;0 50 50" keyTimes="0;0.5;1">
                    </animateTransform>
                </path>
                <path d="M50 50L20 50A30 30 0 0 1 80 50Z" fill="#3c4ddb">
                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite"
                        dur="1.0526315789473684s" values="0 50 50;-45 50 50;0 50 50" keyTimes="0;0.5;1">
                    </animateTransform>
                </path>
            </g>
        </svg>

    </div>
</div>
