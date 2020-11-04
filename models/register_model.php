<?php


class register_model extends Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function register_vol()
    {
        echo "starting";

        if (!empty($_POST)) {
            // Post data not empty insert a new record
            // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
            // Insert new record into the contacts table
            $stmt = $this->db->prepare('INSERT INTO `volunteer` (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$id, $name, $email, $phone, $title, $created]);
            // Output message
            echo 'Created Successfully!';
        }

        echo "end";
    }
}