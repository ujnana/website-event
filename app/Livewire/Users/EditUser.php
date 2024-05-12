<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class EditUser extends ModalComponent
{
    public User $user;

    #[Validate(['required', 'min:3', 'max:255'])]
    public $name = '';

    #[Validate(['required', 'email', 'max:254'])]
    public $email = '';

    #[Validate('required')]
    public $role = '';

    #[Validate('same:password')]
    public $password = '';

    public $confirm_password = '';

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->getRoleNames()[0];
        $this->password = $user->password;
    }

    public function update()
    {
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        $this->user->syncRoles($this->role);
        $this->closeModal();

        session()->flash('status', 'User successfully created.');

        return $this->redirect('/dashboard/users');
    }

    public function render()
    {
        return view('livewire.users.edit-user', [
            'roles' => Role::all()->pluck('name', 'id')->toArray(),
            'user' => $this->user
        ]);
    }
}
