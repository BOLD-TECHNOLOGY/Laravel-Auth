@include ('admin.includes.admin-navigation-header')





    <div class="users-important-section">

                    
        <div class="users-table-on-browser">
            <div class="head-table--">
                <h3 class="table-head">Website Subscribers</h3>
                <div class="notification-button-send message">
                    <button onclick="myFunction()" class="notify-subscribers">Notify All</button>
                    <div id="notification-form-popup" class="notification-form-popup">
                        <h4>SEND MESSAGE TO ALL SUBSCRIBERS</h4>
                        <form action="" method="post">
                            <label for="notification">Message</label>
                            <input type="text">
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
            <table>
                <tr>
                    <th>Subscriber Name</th>
                    <th class="for-mail--">Email Address</th>
                    <th class="action-btn-table head-action">Action</th>
                </tr>
                <tr>
                    <td>Joe Moses</td>
                    <td class="for-mail--">joe@example.com</td>
                    <td class="action-btn-table">
                        <button class="reply-table-btn">Notify</button>
                        <button class="delete-table-btn">Delete</button>
                    </td>
                </tr>
            </table>
        </div>

    </div>


@include ('admin.includes.admin-custom-contents')

@include ('admin.includes.admin-footer')

