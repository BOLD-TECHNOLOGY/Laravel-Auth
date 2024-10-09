@include ('admin.includes.admin-navigation-header')




    <div class="users-important-section--">

        <h1>Create Your Post</h1>

        <div class="posts-admin-form-created-by-joe-moses">
            <div class="posts-form-itself--">
                <form class="posts-form-container--" method="post" enctype="multipart/form-data">
                    <div class="posts-form-group--">
                        <label for="image">Image (512x512px):</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="posts-form-group--">
                        <label for="image">Post Category</label>
                        <select name="role" id="role">
                            <option value="" selected disabled>Select Category</option>
                            <option value="Admin">Custom to be added</option>
                        </select>
                    </div>
                    <div class="posts-form-group--">
                        <label for="heading">Heading (Max 50 characters):</label>
                        <input type="text" id="heading" name="heading" maxlength="50" required>
                    </div>
                    <div class="posts-form-group--">
                        <label for="description">Summary Description (2 lines):</label>
                        <textarea id="description" name="description" rows="2" required></textarea>
                    </div>
                    <div class="posts-form-group--">
                        <label for="content">All Content:</label>
                        <textarea id="content" name="content" required></textarea>
                    </div>
                    <button type="submit">Submit Post</button>
                </form>
            </div>
            <div class="posts-notes">
                <h1><span>!!</span> - Important Note </h1>
                <p>Image should be 512x512 pixels for best quality.</p>
                <p>Heading should be concise and informative, under 50 characters.</p>
                <p>Summary description should be a short paragraph of two lines summarizing your content.</p>
            </div>
        </div>
            
    
    </div>


@include ('admin.includes.admin-custom-contents')

@include ('admin.includes.admin-footer')
    
    
    

