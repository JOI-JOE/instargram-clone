@props([
   'source' => 'https://www.youtube.com/watch?v=IhyzIwZ7xxk&t=140s'
])

<div x-data="{videoModalIsOpen: false}">
            <video x-ref="video" class="w-full max-w-2xl rounded-md aspect-video" controls>
                <track default kind="captions" srclang="en" src="path to your .vtt file" />
                <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.webm" type="video/webm">
                <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
</div>
