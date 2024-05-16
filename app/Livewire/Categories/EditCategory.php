<?php

namespace App\Livewire\Categories;

use App\Models\Categories;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class EditCategory extends ModalComponent
{
    public Categories $category;

    #[Validate(['required', 'min:3', 'max:255'])]
    public $name;

    public function mount(Categories $category): void
    {
        $this->name = $category->name;
    }

    public function update()
    {
        $this->category->update([
            'name' => $this->name,
        ]);

        $this->closeModal();

        session()->flash('status', 'Category successfully updated.');

        return $this->redirect('/dashboard/category');
    }

    public function render()
    {
        return view('livewire.categories.edit-category', [
            'category' => $this->category
        ]);
    }
}
