<div>
    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">
                    <a wire:click.prevent="selectTab('personal_details')"
                        class="nav-link {{ $tab == 'personal_details' ? 'active' : '' }}" data-toggle="tab"
                        href="#personal_details" role="tab">Personal details</a>
                </li>
                <li class="nav-item">
                    <a wire:click.prevent="selectTab('update_password')"
                        class="nav-link {{ $tab == 'update_password' ? 'active' : '' }}" data-toggle="tab"
                        href="#update_password" role="tab">Update
                        password</a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Personal Detail Tab start -->
                <div class="tab-pane fade {{ $tab == 'personal_details' ? 'active show' : '' }}" id="personal_details"
                    role="tabpanel">
                    <div class="pd-20">
                        <form wire:submit.prevent='updateAdminPersonalDetails()'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" wire:model="name"
                                            placeholder="Enter full name" id="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" wire:model="email"
                                            placeholder="Enter email" id="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" wire:model="username"
                                            placeholder="Enter username" id="username">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary" id="sa-custom-position">Save changes</button>
                        </form>
                    </div>
                </div>
                <!-- Personal Detail Tab End -->
                <!-- Update Password Tab start -->
                <div class="tab-pane fade {{ $tab == 'update_password' ? 'active show' : '' }}" id="update_password"
                    role="tabpanel">
                    <div class="pd-20 profile-task-wrap">
                        ---Update password---
                    </div>
                </div>
                <!-- Update Password Tab End -->
            </div>
        </div>
    </div>
</div>
