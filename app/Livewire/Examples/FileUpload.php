<?php

namespace App\Livewire\Examples;

use App\Models\FileUpload as ModelsFileUpload;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    #[Title('File Upload')]

    #[Rule('required')]
    public $name;

    #[Rule('file|mimes:pdf,doc,docx|max:2048')]
    public $file;

    public $path;

    public $downloads;

    public function mount()
    {
        $this->downloads = ModelsFileUpload::all();
    }

    public function saveFile()
    {
        $this->validate();
        $this->path = $this->file->store('files'); // this will store the file in the folder named files and store the path in the path var.
        ModelsFileUpload::create([
            'name' => $this->name,
            'path' => $this->path
        ]);

        session()->flash('status', 'File Uploaded');
        $this->redirect('fileUpload', navigate: true);
    }

    public function downloadFile(ModelsFileUpload $file)
    {
        if (Storage::disk('local')->exists($file->path)) {
            session()->flash('status', 'File is downloading');
            return Storage::download($file->path, $file->name);
        }
        session()->flash('status', 'File not found');
    }
    public function render()
    {
        return view('livewire.examples.file-upload');
    }
}
