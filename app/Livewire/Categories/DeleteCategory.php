<?php

namespace App\Livewire\Categories;

use App\Models\Categories;
use LivewireUI\Modal\ModalComponent;

class DeleteCategory extends ModalComponent
{
    public $category;

    public function mount(Categories $category): void
    {
        $this->category = $category;
    }

    public function delete()
    {
        $this->category->delete();
        session()->flash('danger', __('Category deleted successfully.'));
        $this->closeModal();

        return $this->redirect('/dashboard/category');
    }

    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public function render()
    {
        return view('livewire.categories.delete-category');
    }
}
