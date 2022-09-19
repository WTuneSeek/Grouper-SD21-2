<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="h-full w-full bg-slate-800">
        <x-navigation></x-navigation>
        <div class="chatContainer w-full h-full pt-44 p-16 lg:p-8 lg:pt-44">
            <div class="chatBackdrop w-full h-full bg-slate-200 p-4 lg:p-2">
                <div class="chatLine bg-slate-700 w-full h-full p-2 lg:p-1">
                    <div class="chatFront bg-slate-200 w-full h-full flex flex-col items-end justify-end lg:flex-row">
                        <div class="chatNavigation p-4 w-1/3 h-full bg-slate-200 border-r-4 border-solid border-slate-700 overflow-y-auto">
                            <div class="text-2xl font-bold pb-4">
                                <span>Connections</span>
                            </div>
                            <div class="chatConnections flex flex-col gap-y-4 font-bold">
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                                <x-chatConnection></x-chatConnection>
                            </div>
                            <div class="text-2xl font-bold py-4">
                                <span>Groups</span>
                            </div>
                        </div>
                        <div class="w-full p-8 overflow-y-auto">
                            <div class="text-2xl font-bold pb-4">
                                <span>Blog</span>
                            </div>
                            <div>
                                <x-chatBubbleLeft></x-chatBubbleLeft>
                                <x-chatBubbleRight></x-chatBubbleRight>
                                <x-chatBubbleLeft></x-chatBubbleLeft>
                                <x-chatBubbleLeft></x-chatBubbleLeft>
                                <x-chatBubbleRight></x-chatBubbleRight>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>