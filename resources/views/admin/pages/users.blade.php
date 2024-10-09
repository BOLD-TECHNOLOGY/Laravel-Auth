@include ('admin.includes.admin-navigation-header')







    <div class="users-important-section">

                    
        <div class="users-table-on-browser">
            <div class="head-table--">
                <h3 class="table-head">System Users</h3>
            </div>
            <table>
                <tr>
                    <th>User Name</th>
                    <th>User Type</th>
                    <th class="for-mail--">Email Address</th>
                    <th class="action-btn-table head-action">Action</th>
                </tr>

                @foreach($users as $user)

                    <tr>
                        <td id="is-user">{{ $user->name }}</td>
                        <td id="is-user">{{ $user->role }}</td>
                        <td class="for-mail--">{{ $user->email }}</td>

                        <td class="action-btn-table" id="special-user-btn">

                            <div class="action-section-form">
                                <form action="{{ route('admin.users.change-role') }}" method="post" class="form-action--">
                                    @csrf
    
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
    
                                    <select name="role" id="role">
                                        <option value="" selected disabled>Change Role</option>
    
                                        <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                                        <option value="user" @if($user->role == 'user') selected @endif>User</option>
                                        <option value="custom" @if($user->role == 'custom') selected @endif>Custom</option>
                                    </select>
                                    <button type="submit">Change</button>
                                </form>
    
                                <form action="/admin/users/delete-user" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
    
                                    <button type="submit" class="delete-table-btn" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </div>

                        </td>
                    </tr>

                @endforeach
                
            </table>
        </div>

    </div>


    @include ('admin.includes.admin-custom-contents')

    @include ('admin.includes.admin-footer')

