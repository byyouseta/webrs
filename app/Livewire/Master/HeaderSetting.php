<?php

namespace App\Livewire\Master;

use App\Models\Language;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class HeaderSetting extends Component
{
    use WithFileUploads;

    public $logo;
    public $currentLogo;
    public $hospital_name;
    public $location;
    public $maps_url;
    public $contact_center;
    public $spgdt_number;
    public $hero_tagline_id;
    public $hero_tagline_en;

    public function mount()
    {
        $this->hospital_name =
            Setting::where(
                'key',
                'hospital_name'
            )->value('value');

        $this->location =
            Setting::where(
                'key',
                'location'
            )->value('value');

        $this->maps_url =
            Setting::where(
                'key',
                'maps_url'
            )->value('value');

        $this->contact_center =
            Setting::where(
                'key',
                'contact_center'
            )->value('value');

        $this->spgdt_number =
            Setting::where(
                'key',
                'spgdt_number'
            )->value('value');

        $this->currentLogo =
            Setting::where(
                'key',
                'hospital_logo'
            )->value('value');
        $this->hero_tagline_id =
            Setting::where(
                'key',
                'hero_tagline_id'
            )->value('value');

        $this->hero_tagline_en =
            Setting::where(
                'key',
                'hero_tagline_en'
            )->value('value');
    }

    public function save()
    {
        $this->validate([

            'hospital_name' => 'required',
            'contact_center' => 'required',
            'spgdt_number' => 'required'

        ]);

        $logoPath = $this->currentLogo;

        if ($this->logo) {

            $logoPath =
                $this->logo->store(
                    'settings',
                    'public'
                );
        }

        $settings = [

            'hospital_name' => $this->hospital_name,
            'location' => $this->location,
            'maps_url' => $this->maps_url,
            'contact_center' => $this->contact_center,
            'spgdt_number' => $this->spgdt_number,
            'hospital_logo' => $logoPath,
            'hero_tagline_id' => $this->hero_tagline_id,
            'hero_tagline_en' => $this->hero_tagline_en

        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        Session::flash(
            'success',
            'Header berhasil disimpan'
        );
    }

    public function render()
    {
        return view('livewire.master.header-setting');
    }
}
