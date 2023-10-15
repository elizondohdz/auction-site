<x-layout>
    <x-item-filter></x-item-filter>

    <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
        @forelse ($items as $item)
            <x-item-card :name="$item->name" :location="$item->location" 
                         :endsat="Carbon\Carbon::parse($item->ends_at)->diffForHumans()" :image="$item->image_path"
                         :condition="$item->condition" :bid="$item->starting_bid"></x-item-card>
        @empty
            
        @endforelse
    </div>
</x-layout>