<?php 

  class Job {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    // Get All Jobs
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name as cname 
                    FROM jobs 
                    INNER JOIN categories 
                    ON jobs.category_id = categories.id 
                    ORDER By post_date DESC
                    ");
        // Assign Result set
        $results = $this->db->resultSet();

        return $results;
    }

     // Get Categories
     public function getCategories()
     {
         $this->db->query("SELECT * FROM  categories");
         // Assign Result set
         $results = $this->db->resultSet();

         return $results;
     }
 
     
    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name as cname FROM jobs 
                            INNER JOIN categories on jobs.category_id = categories.id                            
                            WHERE jobs.category_id = $category
                            ORDER By post_date DESC");
        // Assign Result set
        $results = $this->db->resultSet();

        return $results;
    }


    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM  categories WHERE id = :category_id");

        $this->db->bind(':category_id', $category_id);

        // Assign Result set
        return $this->db->single();
    }


    // Create Job
    public function create($data){
        // Insert Query
        $this->db->query("INSERT INTO jobs(category_id, job_title, company,
                  description, location, salary, contact_user, contact_email) VALUES
                  (:category_id, :job_title, :company,
                  :description, :location, :salary, :contact_user, :contact_email)");

       // bind data
       $this->db->bind(':category_id', $data['category_id']);
       $this->db->bind(':job_title', $data['job_title']);
       $this->db->bind(':company', $data['company']);
       $this->db->bind(':description', $data['description']);
       $this->db->bind(':location', $data['location']);
       $this->db->bind(':salary', $data['salary']);
       $this->db->bind(':contact_user', $data['contact_user']);
       $this->db->bind(':contact_email', $data['contact_email']);

       // Execute
       if ($this->db->execute()) {
           return true;
       } else {
           return false;
       }  
    }

  }