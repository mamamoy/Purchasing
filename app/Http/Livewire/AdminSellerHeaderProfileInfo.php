<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminSellerHeaderProfileInfo extends Component
{
    public $admin;
    public $seller;

    public $listener = [
        'updateAdminSellerHeaderInfo' => '$refresh'
    ];

    public function mount(){
        if (Auth::guard('admin')->check()){
            $this->admin = Admin::findOrFail(auth()->id());
        }
    }

    public function render()
    {
        return view('livewire.admin-seller-header-profile-info');
    }
}
