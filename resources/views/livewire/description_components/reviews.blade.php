<div x-show="activeTab === 'reviews'" class="animate-fade-in space-y-10">
    <livewire:description.rating-slider 
        :restaurantId="$restaurant->id" 
    />
    
    <livewire:description.latest_reviews :restaurantId="$restaurant->id"/>
</div>
