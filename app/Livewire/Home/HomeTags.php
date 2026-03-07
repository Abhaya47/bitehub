<?php

namespace App\Livewire\Home;

use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeTags extends Component
{
    public $tags;
    public $selectedTagId = null;

    public function mount()
    {
        $this->tags = Tag::query()->get();
    }

    #[On('tag-selected')]
    public function handleTagSelected($tagId)
    {
        $this->selectedTagId = ($this->selectedTagId == $tagId) ? null : $tagId;
    }

    public function selectTag($tagId)
    {
        $this->dispatch('tag-selected', tagId: $tagId);
    }

    public function render()
    {
        return view('livewire.home_components.home-tags');
    }
}
