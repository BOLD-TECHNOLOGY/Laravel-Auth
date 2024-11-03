@include ('admin.includes.admin-navigation-header')



    <div class="profile-section-all-users">
        <div class="profile-details-sec-o">
            <h1 class="profile-detail-header">User profile details</h1>
            <p class="profile-desc">View your profile details and update then <span><b><i>(Optional)</i></b></span></p>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form action="{{ route('adminprofile.update') }}" method="post">
                @csrf
                @method('patch')

                <div class="form-input">
                    <div class="form-input-inputs">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" :value="old('name', $user->name)" required autofocus autocomplete="name" >
                    </div>
                    <div class="form-input-inputs">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" :value="old('email', $user->email)" required autocomplete="username" >
                    </div>
                </div>
                
                <input type="submit" value="SAVE">
            </form>
        </div>
        <div class="profile-password-manager">
            <h1 class="profile-detail-header">Update password</h1>
            <p class="profile-desc">View your password and update</p>

            <form action="{{ route('adminprofile.updatePassword') }}" method="post">
                @csrf
                @method('put')

                <div class="form-input">
                    <div class="form-input-inputs">
                        <label for="name">Old password</label>
                        <input type="password" name="password"  placeholder="" >
                    </div>
                    <div class="form-input-inputs">
                        <label for="name">New password</label>
                        <input type="password" name="new-password"  placeholder="" >
                    </div>
                    <div class="form-input-inputs">
                        <label for="name">Confirm new password</label>
                        <input type="password" name="confirm-password"  placeholder="" >
                    </div>
                </div>
                
                <input type="submit" value="UPDATE">
            </form>
        </div>
        <div class="profile-delete-1">
            <h1 class="profile-detail-header">Delete profile</h1>
            <p class="profile-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deserunt voluptates asperiores perspiciatis nihil aspernatur animi omnis ut quia placeat quidem molestias culpa mollitia velit eveniet, incidunt ducimus sed ab!</p>
            
            <form action="{{ route('adminprofile.delete') }}" method="post">
                @csrf
                @method('delete')

                <input type="submit" value="DELETE PROFILE">
            </form>
        </div>
    </div>



@include ('admin.includes.admin-custom-contents')

@include ('admin.includes.admin-footer')

