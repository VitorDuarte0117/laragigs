@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
            </h3>

            <div class="text-xl font-bold  mb-4">
                <i class="fa-solid fa-location-dot"></i>
            </div>
        </div>
    </div>
</x-card>
