<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeletePost extends ModalComponent
{
    public $post;

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    public function delete()
    {
        $this->post->delete();
        if (isset($this->post->thumbnail)){
            Storage::disk(public_path('uploads/thumbnails/'))->delete($this->post->thumbnail);
        }

        session()->flash('danger', __('Article deleted successfully.'));
        $this->closeModal();

        return $this->redirect('/dashboard/post');
    }

    public static function modalMaxWidth(): string
    {
        return 'md';
    }
    public function render()
    {
        return view('livewire.posts.delete-post');
    }
}
