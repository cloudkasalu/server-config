<?php
namespace controllers;
use classes\DatabaseTable;
 class VisitorController{

    private $pdo;

    public function __construct($pdo){
       $this->pdo = $pdo;
    }

    public function home(){
        $title = 'Homepage';

        $pagesTable = new DatabaseTable($this->pdo,'pages','id');
        $aboutSection = [];
        $teamSection = [];
        $serviceSection = [];
        $services = [];

        $query = 'SELECT  * from `pages`  as `page`  INNER JOIN `sections` ON 
        `page`.`content`= `page_id` 
        left JOIN `about_us` ON `sections`.`content_id` = `about_us`.`section_id` 
        left JOIN `team` ON `sections`.`content_id` = `team`.`section_id`
        
        left JOIN `services_section` ON `sections`.`content_id` = `services_section`.`section_id` 
        left JOIN `services` ON `sections`.`content_id` = `services`.`section_id` 
        ';

        $result = $pagesTable->findAll($query);

        foreach ($result as $row) {
            $aboutSection[] = array(
                'title' => $row['title'], 
                'paragraph' => $row['paragraph'],
                'image' => $row['image'],
                'contact_title' => $row['contact_title'],
                'contact_details' => $row['contact_details']
            );

            $teamSection[] = array(
                'member_name' => $row['member_name'], 
                'member_position' => $row['member_position'],
                'profile_image' => $row['profile_image'],
                'profile_image_caption' => $row['profile_image_caption']
            );
        }
        
        return ['template' => '/visitor/home.html.php', 'title' => $title, 'variables'=>[
            'aboutSection' => $aboutSection,
            'teamSection' => $teamSection
        ]];
    }
    public function about(){
        $title = 'About Us';

        $aboutSectionTable = new DatabaseTable($this->pdo,'about_us','id');

        $query = 'SELECT  * FROM `pages`  AS `page`  INNER JOIN `sections` ON 
        `page`.`content`= `page_id` 
        LEFT JOIN `about_us` ON `sections`.`content_id` = `about_us`.`section_id` 
        LEFT JOIN `team` ON `sections`.`content_id` = `team`.`section_id` WHERE `page`.`page_name` = "about"';

        $result = $aboutSectionTable->findAll($query);

        $aboutSection = [];
        $teamSection = [];

        foreach ($result as $row) {
            $aboutSection[] = array(
                'title' => $row['title'], 
                'paragraph' => $row['paragraph'],
                'image' => $row['image'],
                'contact_title' => $row['contact_title'],
                'contact_details' => $row['contact_details']
            );

            $teamSection[] = array(
                'member_name' => $row['member_name'], 
                'member_position' => $row['member_position'],
                'profile_image' => $row['profile_image'],
                'profile_image_caption' => $row['profile_image_caption']
            );
        }

        return ['template' => 'visitor/about.html.php', 'title' => $title, 'variables'=>[
            'aboutSection' => $aboutSection,
            'teamSection' => $teamSection
        ]];
    }
    public function services(){
        $title = 'Services';

        $servicesTable = new DatabaseTable($this->pdo,'services','id');

        $query = 'SELECT  * FROM `pages`  AS `page`  INNER JOIN `sections` ON 
        `page`.`content`= `page_id` 
        LEFT JOIN `services_section` ON `sections`.`content_id` = `services_section`.`section_id` 
        LEFT JOIN `services` ON `sections`.`content_id` = `services`.`section_id` WHERE `page`.`page_name` = "services"';

        $result = $servicesTable->findAll($query);

        $serviceSection = [];
        $services = [];


        foreach ($result as $row) {
            $serviceSection[] = array(
                'section_title' => $row['section_title'], 
                'section_paragraph' => $row['section_paragraph'],
                'section_image' => $row['section_image'],
                'section_image_caption' => $row['section_image_caption'],
                'vision' => $row['vision'],
                'goal' => $row['goal']
            );

            $services[] = array(
                'service_title' => $row['service_title'], 
                'service_icon' => $row['service_icon'],
                'service_description' => $row['service_description'],
                'service_icon_caption' => $row['service_icon_caption']
            );
        }


        return ['template' => 'visitor/services.html.php', 'title' => $title, 'variables'=>[
            'serviceSection' => $serviceSection,
            'services' => $services
        ]];
    }
    public function portfolio(...$route){

        $api = array_shift($route);
        if($api === "projects"){

            $portfolioTable = new DatabaseTable($this->pdo,'portfolio','id');
            $works = [];
            $result =$portfolioTable->findAll();

            foreach($result as $row){

        
                $works[] = array(
                    'id' => $row['id'],
                    'image'=> array(
                        'src'=>  base64_encode($row['project_image']),
                        'alt'=> $row['project_image_caption']
                    ),
                    'description' => $row['project_description']
                ); 
            }
            header('Content-Type: application/json');

            exit (json_encode($works));
        }

        $title = 'Portfolio';
        return ['template' => 'visitor/portfolio.html.php', 'title' => $title];
    }
    public function blog(){
        $title = 'Blog';
        return ['template' => 'visitor/blog.html.php', 'title' => $title];
    }
    public function contact(){
        $title = 'Contact Us';
        return ['template' => 'visitor/blog.html.php', 'title' => $title];
    }
}