<?php

namespace App\Livewire\School;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\School;

class SchoolCreate extends Component
{
    #[Validate('required|min:5|max:255')]
    public $name = '';

    #[Validate('required|min:5|max:255')]
    public $andress = '';

    #[Validate('required|min:5|max:255')]
    public $city = '';

    #[Validate('required|min:5|max:255')]
    public $state = '';

    #[Validate('required|min:5|max:9')]
    public $zip = '';

    #[Validate('min:5|max:20')]
    public $cnpj = '';

    #[Validate('min:5|max:20')]
    public $phone = '';

    #[Validate('min:5|max:255|email')]
    public $email = '';

    public function render()
    {
        return view('livewire.school.school-create');
    }

    public function save() {
        $school = $this->validate();

        School::create($school);

        $this->reset();
    }
}
