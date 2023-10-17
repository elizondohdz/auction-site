<div class="flex flex-col ">
    <div {{ $attributes->class(['bg-white shadow-md  rounded-3xl p-4']) }} >
        <div class="flex-none lg:flex">
            {{ $slot }}              
        </div>
    </div>
</div>
