<?php

namespace App\Livewire\Users;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public $user;

    public function mount(User $user): void
    {
        $this->user = $user;
    }

    public function delete()
    {
        $this->user->delete();
        $this->closeModal();
        session()->flash('danger', __('User deleted successfully.'));

        return $this->redirect('/dashboard/users');
    }
    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public function render()
    {
        return view('livewire.users.delete-user');
    }
}
