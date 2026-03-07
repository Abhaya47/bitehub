<div x-show="activeTab === 'reviews'" class="animate-fade-in space-y-10">
    <livewire:description.rating-slider 
        :restaurantId="$restaurant->id" 
        :averageRating="$averageRating" 
        :count="$totalReviews"
        :five="$ratingCounts[5]"
        :four="$ratingCounts[4]"
        :three="$ratingCounts[3]"
        :two="$ratingCounts[2]"
        :one="$ratingCounts[1]"
    />
    
    <livewire:description.latest_reviews :reviews="$reviews->toArray()"/>
</div>
