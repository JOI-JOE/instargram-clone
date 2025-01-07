@props([
   'source' => 'https://penguinui.s3.amazonaws.com/component-assets/peng.webm'
])

<div x-data="{playing:false, muted:false}"
    class="relative h-full w-full m-auto"    
>

    <video x-ref="player" @play="playing=true" @pause="playing=false" class="h-full max-h-[500px] w-full">
        <source src="{{$source}}" type="video/mp4">
        Your browser does not support HTML video.
    </video>
    
    {{-- play --}}
    <div x-cloak x-show="!playing" @click="$refs.player.play()" class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill text-white w-16 h-16" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
        </svg>
    </div>

     {{-- pasuse button --}}
     <div x-show="playing" @click="$refs.player.pause()" class="absolute z-10 inset-0 flex items-center justify-center w-full h-full cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pause-fill text-white w-16 h-16" viewBox="0 0 16 16">
            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
        </svg>
     </div>


    {{-- mute --}}
    <div class="absolute bottom-2 right-2 bg-gray-900 text-white rounded-lg p-1 cursor-pointer">
        
        {{-- Mute --}}
        <div x-cloak x-show="!muted" @click="$refs.player.muted=true;muted=true"></div>

    </div>

</div>
