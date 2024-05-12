<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class CreateUser extends ModalComponent
{
    #[Validate(['required', 'min:3', 'max:255'])]
    public $name = '';

    #[Validate(['required', 'email', 'max:254', 'unique:users,email'])]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';

    #[Validate('required')]
    public $role = '';

    #[Validate('required|same:password')]
    public $confirm_password = '';

    public $roles = [];

    public function mount()
    {
        $this->roles = Role::all()->pluck('name', 'id')->toArray();
    }

    public function save()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        $user->assignRole($this->role);

        $this->closeModal();

        session()->flash('status', 'User successfully created.');

        return $this->redirect('/dashboard/users');
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
        return view('livewire.users.create-user');
    }
}
