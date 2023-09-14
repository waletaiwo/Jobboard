<?php include "inc/header.php"; ?>


<!-- Hero Section -->
<div class="hero">
  <div class="container">
    <h1>The easiest way to get your new job</h1>
    <p>Find jobs, Employment and career opportunities</p>

  </div>
</div>
<!-- End Hero Section -->

 <!-- Job Section Start -->


 <div class="job-category">
  <div class="container">
    <div class="job-list-title">
      <h2>Filter Jobs By Categories</h2>
    </div>
  <div class="job-category-form">
      <form method="GET" action="index.php" class="form">
        <select name="category" >
          <option value="0">Choose Category</option>
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
          <?php endforeach; ?>  
        </select>
        <button type="submit">Find job</button>
        <!-- <input  value="Find job"> -->
      </form>
    </div> 
  </div>
 </div>

 

<section class="job-list">
  <div class="container">
    <div class="job-list-title">
      <h6>Trending Jobs</h6>
      <h2><?php echo $title; ?></h2>
    </div>

    <div class='job-list-grid-container'>
    <?php foreach($jobs as $job): ?>
      <div class="job-list-grid">
        <div class="ab-left">
        <?php echo $job->salary; ?>
        </div>
        <div class="ab-right">
          <span class="job-theme-lc"><?php echo $job->location; ?></span>
        </div>
        <div class="job-grid-caption">
        <h3><?php echo $job->job_title; ?></h3>
        </div>
        <div class="job-grid-thumb">
        <h4><?php echo $job->company; ?></h4>
        </div>
       
      </div>
    <?php endforeach; ?>
    </div>

  </div>


 
</section>





<?php include "inc/footer.php"; ?>

