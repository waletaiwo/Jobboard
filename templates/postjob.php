<?php include "inc/header.php"; ?>

<!-- POSTJOB FORM START -->

<section class="post-job">
    <div class="container">
    <div class="post-job-header">
       <h1>Post a new job</h1>
    </div>
    <div class="post-job-form-container">
        <form method="POST" action="create.php" class="post-job-form">
            <div class="form-control">
                <label>Company</label>
                <input type="text" placeholder="" class="form-input" name="company">
            </div>
            <div class="form-control">
                <label>Category</label>
                <select type="text" name="category_id" placeholder="" class="form-input" >
                    <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endforeach; ?>  
                </select>
            </div>
            <div class="form-control">
                <label>Job Title</label>
                <input type="text" placeholder="" class="form-input" name="job_title">
            </div>
            <div class="form-control">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div class="form-control">
                <label>Location</label>
                <input type="text" placeholder="" class="form-input" name="location">
            </div>
            <div class="form-control">
                <label>Salary</label>
                <input type="text" placeholder="" class="form-input" name="salary">
            </div>
            <div class="form-control">
                <label>Contact User</label>
                <input type="text" placeholder="" class="form-input" name="contact_user">
            </div>
            <div class="form-control">
                <label>Contact Email</label>
                <input type="text" placeholder="" class="form-input" name="contact_email" >
            </div>
            <div class="form-control">
                <button type="submit" name="submit" class="btn">Post Job</button>
            </div>
        </form>
    </div>
    </div>
</section>


<?php include "inc/footer.php"; ?>
