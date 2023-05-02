<?php
namespace controllers;
use classes\DatabaseTable;

class AdminController{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function home(){
        $title = "Admin";

        return ['template'=> '/admin/home.html.php', 'title'=> $title];

    }

    public function about($variables = null){

        $sub_route = array_shift($variables);
        if( $sub_route === 'section'){
            $aboutSectionTable = new DatabaseTable($this->pdo,'about_us','id');
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                $values= [
                    'title' => $_POST['title'],
                    'paragraph' => $_POST['paragraph'],
                    'image' => file_get_contents($_FILES['image']['tmp_name']),
                    'contact_title' => $_POST['contactTitle'],
                    'contact_details' => $_POST['contactNumber'],
                    'id' => 1
                ];
    
                $aboutSection = $aboutSectionTable->update($values);
    
                http_response_code(301);
                header('Location: /dashboard');
    
            }else {
    
                $title = "Edit About Us Section";
                
                $aboutSection = $aboutSectionTable->findAll();
        
                return ['template'=> '/admin/about_section.html.php', 'title'=> $title, 'variables'=>[
                    'aboutSection'=> $aboutSection
                ]];
    
            }

        }else if($sub_route === 'team'){

            $aboutTeamTable = new DatabaseTable($this->pdo,'team','id');

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $values= [
                    'member_name' => $_POST['name'],
                    'member_position' => $_POST['position'],
                    'profile_image' => file_get_contents($_FILES['image']['tmp_name']),
                    'profile_image_caption' => $_POST['caption'],
                    'id' => $_POST['id']
                ];

                $aboutTeamTable->update($values);
    
                http_response_code(301);
                header('Location: /dashboard/about/team');

            
            }else{

                $id = array_shift($variables);
                if($id){
                    $title = "Edit Member";
                    $member = $aboutTeamTable->find('id',$id);
            
                    return ['template'=> '/admin/editTeam.html.php', 'title'=> $title, 'variables'=>[
                        'member'=> $member
                    ]];
                }

                $title = "View Team Members";
                
                $aboutTeam = $aboutTeamTable->findAll();
        
                return ['template'=> '/admin/viewTeam.html.php', 'title'=> $title, 'variables'=>[
                    'aboutTeam'=> $aboutTeam
                ]];

            }
        }

    }

    public function services ($variables){
        $sub_route = array_shift($variables);

        if($sub_route == "section"){
            $serviceSectionTable = new DatabaseTable($this->pdo,'services_section','id');
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                $values= [
                    'section_title' => $_POST['title'], 
                    'section_paragraph' => $_POST['paragraph'],
                    'section_image' => file_get_contents($_FILES['image']['tmp_name']),
                    'section_image_caption' => $_POST['caption'],
                    'vision' => $_POST['vision'],
                    'goal' => $_POST['goal'],
                    'id'=> 1
                ];
    
                $serviceSection = $serviceSectionTable->update($values);
    
                http_response_code(301);
                header('Location: /dashboard');
        }else{
                $title = "Edit Services Section";
                    
                $serviceSection = $serviceSectionTable->findAll();
        
                return ['template'=> '/admin/serviceSection.html.php', 'title'=> $title, 'variables'=>[
                    'serviceSection'=> $serviceSection
                ]];

        }
        }else if($sub_route === 'list'){

            $servicesTable = new DatabaseTable($this->pdo,'services','id');

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                if(isset($_POST['id'])){

                    $date = new \DateTime();
                    $values= [
                        'id' => $_POST['id'],
                        'service_title' => $_POST['name'],
                        'service_description' => $_POST['description'],
                        'service_icon' => file_get_contents($_FILES['image']['tmp_name']),
                        'service_icon_caption' => $_POST['caption'],
                        'date' => $date->format('Y-m-d H:i:s')

                    ];
    
                    $servicesTable->update($values);
                    http_response_code(301);
                    header('Location: /dashboard/services/list');
                }else{
                    $date = new \DateTime();
                    $values= [
                        'section_id' => 4,
                        'service_title' => $_POST['name'],
                        'service_description' => $_POST['description'],
                        'service_icon' => file_get_contents($_FILES['image']['tmp_name']),
                        'service_icon_caption' => $_POST['caption'],
                        'date' => $date->format('Y-m-d H:i:s')
                    ];
    
                    $servicesTable->insert($values);
                    http_response_code(301);
                    header('Location: /dashboard/services/list');

                }

            }else{

                $route = array_shift($variables);
                if($route === "edit"){
                    $id = array_shift($variables);

                    $title = "Edit Service";
                    $service = $servicesTable->find('id',$id);
            
                    return ['template'=> '/admin/editService.html.php', 'title'=> $title, 'variables'=>[
                        'service'=> $service
                    ]];
                }else if($route === "create"){
                    $title = "Create Service";
                    return ['template'=> '/admin/postService.html.php', 'title'=> $title];
                }

                $title = "View Services";
                
                $services = $servicesTable->findAll();
        
                return ['template'=> '/admin/viewServices.html.php', 'title'=> $title, 'variables'=>[
                    'services'=> $services
                ]];

            }
        }
    }

    public function portfolio($variables){
        $route = array_shift($variables);
        $portfolioTable = new DatabaseTable($this->pdo,'portfolio','id');

        if($route){

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                if(isset($_POST['id'])){

                    $values= [
                        'id' => $_POST['id'],
                        'project_name' => $_POST['name'],
                        'project_description' => $_POST['description'],
                        'project_image' => file_get_contents($_FILES['image']['tmp_name']),
                        'project_image_caption' => $_POST['caption'],

                    ];
    
                    $portfolioTable->update($values);
                    http_response_code(301);
                    header('Location: /dashboard/portfolio');
                }else{
                    $date = new \DateTime();
                    $values= [
                        'section_id' => 5,
                        'project_name' => $_POST['name'],
                        'project_description' => $_POST['description'],
                        'project_image' => file_get_contents($_FILES['image']['tmp_name']),
                        'project_image_caption' => $_POST['caption'],
                        'project_date' => $date->format('Y-m-d H:i:s')
                    ];
    
                    $portfolioTable->insert($values);
                    http_response_code(301);
                    header('Location: /dashboard/portfolio');

                }

            }else{

                if($route === "edit"){
                    $id = array_shift($variables);

                    echo $id;
                    $title = "Edit Project";
                    $project = $portfolioTable->find('id',$id);
            
                    return ['template'=> '/admin/editProject.html.php', 'title'=> $title, 'variables'=>[
                        'project'=> $project
                    ]];
                }else if($route === "post"){
                    $title = "Create Service";
                    return ['template'=> '/admin/postProject.html.php', 'title'=> $title];
                }


            }
        }else{

            $title = "View Projects";
                
            $projects = $portfolioTable->findAll();
    
            return ['template'=> '/admin/viewProjects.html.php', 'title'=> $title, 'variables'=>[
                'projects'=> $projects
            ]];
        }

    }

    public function blog($variables){
        $sub_route = array_shift($variables);

        $blogTable = new DatabaseTable($this->pdo,'blog','id');

        if($sub_route){

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                if(isset($_POST['id'])){

                    $date = new \DateTime();
                    $values= [
                        'id' => $_POST['id'],
                        'service_title' => $_POST['name'],
                        'service_description' => $_POST['description'],
                        'service_icon' => file_get_contents($_FILES['image']['tmp_name']),
                        'service_icon_caption' => $_POST['caption'],
                        'date' => $date->format('Y-m-d H:i:s')

                    ];
    
                    $blogTable->update($values);
                    http_response_code(301);
                    header('Location: /dashboard/portfolio');
                }else{
                    $date = new \DateTime();
                    $values= [
                        'section_id' => 4,
                        'service_title' => $_POST['name'],
                        'service_description' => $_POST['description'],
                        'service_icon' => file_get_contents($_FILES['image']['tmp_name']),
                        'service_icon_caption' => $_POST['caption'],
                        'date' => $date->format('Y-m-d H:i:s')
                    ];
    
                    $blogTable->insert($values);
                    http_response_code(301);
                    header('Location: /dashboard/portfolio');

                }

            }else{

                $route = array_shift($variables);
                if($route === "edit"){
                    $id = array_shift($variables);

                    $title = "Edit Article";
                    $article = $blogTable->find('id',$id);
            
                    return ['template'=> '/admin/editArticles.html.php', 'title'=> $title, 'variables'=>[
                        'article'=> $article
                    ]];
                }else if($route === "create"){
                    $title = "Create Service";
                    return ['template'=> '/admin/postArticle.html.php', 'title'=> $title];
                }


            }
        }else{

            $title = "View Article";
                
            $articles = $blogTable->findAll();
    
            return ['template'=> '/admin/viewArticles.html.php', 'title'=> $title, 'variables'=>[
                'articles'=> $articles
            ]];
        }

    }

}