@include ('admin.includes.admin-navigation-header')




    <div class="users-important-section">

                    
        <div class="users-table-on-browser">
            <div class="head-table--">
                <h3 class="table-head">User Messages</h3>
            </div>
            <table>
                <tr>
                    <th>User Name</th>
                    <th class="message-itself-on-table">Message</th>
                    <th class="action-btn-table head-action">Action</th>
                </tr>
                <tr>
                    <td>Joe Moses</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Doloribus, ad! Saepe repellendus id vitae quae sit, error... 
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores numquam vero, culpa,
                        <br>
                        <a href="" style="margin-top: 10px;">Read More</a>
                        <a href="" style="margin-top: 10px;">Reply</a>
                    </td>
                    <td class="action-btn-table">
                        <button class="reply-table-btn">Reply</button>
                        <button class="read-table-btn">Read</button>
                        <button class="delete-table-btn">Delete</button>
                    </td>
                </tr>
            </table>
        </div>

    </div>


@include ('admin.includes.admin-custom-contents')

@include ('admin.includes.admin-footer')

