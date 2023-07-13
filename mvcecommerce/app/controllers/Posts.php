<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->findAllPosts();

        $data = [
            'posts' => $posts,
        ];
        // var_dump($data);
        $this->view('posts/index', $data);
    }

    public function viewproducts($id){
         $post = $this->postModel->findPostById($id);

        $data = [
           'post' => $post,
        ];
        // var_dump($data);
        $this->view('posts/viewproducts', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'user_id' => '',
            'title' => '',
            'body' => '',
            'image' => '',
            'price' => '',
            'titleError' => '',
            'bodyError' => '',
            'imageError' => '',
            'priceError' => ''
        ];

        if((isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')) { 

            $output_dir = PUBROOT . '/img/uploads'; //Path for file upload
            $ImageName = str_replace(' ', '-', strtolower($_FILES['image']['name']));
            $ImageType = $_FILES['image']['type']; //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.', '', $ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            // $NewImageName = $ImageName . '-' . time() . '-' . $ImageExt;

            $NewImageName = $ImageName . '-' . time() . '.' . $ImageExt; // <---- change to period (.)

            $ret[$NewImageName] = $output_dir . $NewImageName;
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $output_dir . "/" . $NewImageName)) {
                exit('An error has occured while trying to upload your files. Please try again.');
            } else {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'image' => $NewImageName,
                'price' => trim($_POST['price']),
                'titleError' => '',
                'bodyError' => '',
                'imageError' => '',
                'priceError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'The product name cannot be empty';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'The description cannot be empty';
            }

            if(empty($data['image'])) {
                $data['imageError'] = 'Please upload an image';
            }

            if(empty($data['price'])) {
                $data['priceError'] = 'The price cannot be empty';
            }

            if (empty($data['titleError']) && empty($data['bodyError']) && empty($data['priceError']) && empty($data['imageError'])) {
                if ($this->postModel->addPost($data)) {
                    header("Location: " . URLROOT . "/posts");
                } else {
                    die("Something went wrong, please try again!");
                }
            } 
            // else {
            //     $this->view('posts/create', $data);
            // }

        }
      }

        $this->view('posts/create', $data);
    }

    public function update($id) {

        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'user_id' => '',
            'title' => '',
            'body' => '',
            'image' => '',
            'price' => '',
            'titleError' => '',
            'bodyError' => '',
            'imageError' => '',
            'priceError' => ''
        ];

        if((isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')) {
            
            $output_dir = PUBROOT . '/img/uploads'; //Path for file upload
            $ImageName = str_replace(' ', '-', strtolower($_FILES['image']['name']));
            $ImageType = $_FILES['image']['type']; //"image/png", image/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.', '', $ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            // $NewImageName = $ImageName . '-' . time() . '-' . $ImageExt;

            $NewImageName = $ImageName . '-' . time() . '.' . $ImageExt; // <---- change to period (.)

            $ret[$NewImageName] = $output_dir . $NewImageName;
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $output_dir . "/" . $NewImageName)) {
                exit('An error has occured while trying to upload your files. Please try again.');
            } else {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'image' => $NewImageName,
                'price' => trim($_POST['price']),
                'titleError' => '',
                'bodyError' => '',
                'imageError' => '',
                'priceError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }

            if(empty($data['image'])) {
                $data['imageError'] = 'The image cannot be empty';
            }

            if(empty($data['price'])) {
                $data['priceError'] = 'The price cannot be empty';
            }

            if($data['title'] == $this->postModel->findPostById($id)->title) {
                $data['titleError'] == 'At least change the title!';
            }

            if($data['body'] == $this->postModel->findPostById($id)->body) {
                $data['bodyError'] == 'At least change the body!';
            }

            if($data['price'] == $this->postModel->findPostById($id)->price) {
                $data['priceError'] == 'At least change the price!';
            }

            if (empty($data['titleError']) && empty($data['bodyError']) && empty($data['priceError']) && empty($data['imageError'])) {
                if ($this->postModel->updatePost($data)) {
                    header("Location: " . URLROOT . "/posts");
                } else {
                    die("Something went wrong, please try again!");
                }
            } 
            // else {
            //     $this->view('posts/update', $data);
            // }
        }

      }
        $this->view('posts/update', $data);
    }

    public function delete($id) {

        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'image' => '',
            'price' => '',
            'titleError' => '',
            'bodyError' => '',
            'imageError' => '',
            'priceError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->postModel->deletePost($id)) {
                    header("Location: " . URLROOT . "/posts");
            } else {
               die('Something went wrong!');
            }
        }
    }
}

