<?php

namespace App\Livewire;

use Livewire\Component;

class ItemsList extends Component
{
    public string $search = '';

    protected $perPage = 10;

    /**
     * Get items from the database
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getItems(): \Illuminate\Pagination\LengthAwarePaginator
    {
        $query = \App\Models\Item::query();

        if ($this->search) {
            $query->where('id', $this->search)
                ->orWhere('title', 'like', '%' . $this->search . '%')
                ->orWhere('notes', 'like', '%' . $this->search . '%');
        }

        return $query->paginate(10);
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render(): \Illuminate\View\View
    {
        $items = $this->getItems();

        return view('livewire.items-list', compact('items'));
    }
}
