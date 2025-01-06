<div>
    {{--  Header  --}}
    <header class="md:hidden sticky top-0 bg-white">

        <div class="grid grid-cols-12 gap-2 items-center">

            <div class="col-span-3">
                <img src="{{asset('assets/logo.png')}}"  class="h-12 max-w-lg w-full" alt="logo">
                {{-- max-width : 32 rem --}}
            </div>

            <div class="col-span-8 justify-center px-2">
                <input type="text" placeholder="Search" class="border-0 outline-none w-full bg-gray-100 rounded-lg focus:ring-0 hover:ring-0">

            </div>

            <div class="col-span-1 flex justify-center">
                <a href="#">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </header>

    {{--  Main  --}}
    <main class="grid lg:grid-cols-12 gap-8 md:mt-10">

        <aside class="lg:col-span-8  h-[1000px]">
            {{-- Stories --}}
            <section>
                <ul class="flex overflow-x-auto scrollbar-hide items-center gap-2">
                    @for($i = 0; $i < 10; $i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">
                            <x-avatar story src="https://images7.alphacoders.com/129/thumb-1920-1294416.jpg" class="h-14 w-14"/>
                            <p class="text-xs font-medium truncate">{{fake()->name()}}</p>
                        </li>
                    @endfor
                </ul>
            </section>

            {{-- posts --}}
            <section class="mt-5 space-y-4 p-2">
                @if($posts)
                    @foreach($posts->take(10) as $post)
                        <livewire:post.item wire:key="post-{{$post->id}}" :post="$post"/>
                    @endforeach
                @endif
                <p class="font-bold flex justify-center">No posts</p>
            </section>

        </aside>

        <aside class="lg:col-span-4 hidden lg:block p-4">
            <div class="flex items-center gap-2">
                <x-avatar  src="https://gameriv.com/wp-content/uploads/2022/12/Fkpd6JDXoAA-_0g-1200x555.jpg" class="w-12 h-12"/>
                <h4 class="font-medium">{{fake()->name}}</h4>
            </div>
            {{-- Suggestion --}}
            <section class="mt-4">
                <h4 class="font-bold text-[#737373]">
                    Suggestion for you
                </h4>

                <ul class="my-2 space-y-3">
                    @for($i = 0; $i < 5; $i++)
                        <li class="flex items-center gap-3">
                            <x-avatar src="https://img.uhdpaper.com/wallpaper/soul-fighter-gwen-lol-skin-splash-art-298@1@l" class="w-12 h-12"/>

                            <div class="grid grid-cols-7 w-full gap-2">
                                <div class="col-span-5">
                                    <h5 class="font-semibold truncate text-sm">{{fake()->name}}</h5>
                                    <p class="text-sm truncate"> Followed by {{fake()->name}}</p>
                                </div>

                                <div class="col-span-2 flex text-right justify-end">
                                    <button class="font-bold text-blue-500 ml-auto ">Follow</button>
                                </div>

                            </div>
                        </li>
                    @endfor
                </ul>
            </section>

            {{--    App links        --}}
            <section class="mt-10">

                <ol class="flex gap-2 flex-wrap">

                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">About</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">Help</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">API</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">Jobs</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">Privacy</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">Terms</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">Locations</a></li>
                    <li class="text-xs text-[#737373] font-medium"><a href="" class="hover:underline">About</a></li>

                </ol>

                <h3 class="text-[#737373] mt-6 text-sm">@ 2024 LEAGUE OF LEGENDS</h3>
            </section>
        </aside>

    </main>
</div>
