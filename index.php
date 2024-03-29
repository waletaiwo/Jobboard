<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/homepage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Popular jobs in '. $job->getCategory($category)->name;
} else {
    $template->title = "All Popular listed Jobs";
    $template->jobs = $job->getAllJobs();
}



$template->categories = $job->getCategories();

echo $template;