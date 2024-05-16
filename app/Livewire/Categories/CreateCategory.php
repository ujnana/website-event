<?php

namespace App\Livewire\Categories;


use App\Models\Categories;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class CreateCategory extends ModalComponent
{
    #[Validate(['required', 'min:3', 'max:255'])]
    public $name = '';

    public function save()
    {
        $this->validate();

        Categories::create([
            'name' => $this->name,
        ]);

        $this->closeModal();

        session()->flash('status', 'Category successfully created.');

        return $this->redirect('/dashboard/category');
    }

    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
