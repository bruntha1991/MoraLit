<?php

class SiteController extends Controller {

    public $layout = '/layouts/siteLayout';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
//    public function actionIndex() {
//        // renders the view file 'protected/views/site/index.php'
//        // using the default layout 'protected/views/layouts/main.php'
//        $this->render('index');
//    }
    public function actionAddSlide4() {
        echo "ff";

        $target_dir = 'assets/img/home_slider/';
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function actionAddSlide3() {
        echo "ff";

        $target_dir = 'assets/img/home_slider/';
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function actionAddSlide2() {
        echo "ff";

        $target_dir = 'assets/img/home_slider/';
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function actionAddSlides() {
        $target_dir = 'assets/img/home_slider/';
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $target_file_new = $target_dir . $_POST['slide'] . ".jpg";
        $response='';
//        $_FILES.getElementById("myFile").name = "newFileName";

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $response="File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $response= "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
//        if (file_exists($target_file)) {
//            echo "Sorry, file already exists.";
//            $uploadOk = 0;
//        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $response= "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $response= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $response= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_new)) {
                $response= "The file has been uploaded successfully.";
            } else {
                $response= "Sorry, there was an error uploading your file.";
            }
        }
        $this->redirect(array('site/index'));

//        $this->redirect('?r=admin/site/index',array('response'=>$response));
    }

    public function actionIndex() {
        $model = new Item;
        if (isset($_POST['Item'])) {
            $model->attributes = $_POST['Item'];
            echo 'ssssssssssssssssssssss';
            echo $model->attributes;
            $model->image = CUploadedFile::getInstance($model, 'image');
//            if($model->save())
//            {
//                $model->image->saveAs('path/to/localFile');
//                // redirect to success page
//            }

            $extension = $model->image->getExtensionName();
//            $slideNo=$model->getImageNo();
            echo "df";
            if ($model->validate()) {
                //The image is valid, you can save it
                $path = 'assets/img/home_slider/' . 'slide-1' . '.' . $extension;
                $model->image->saveAs($path);
            }
        }
        $this->render('index', array('model' => $model));
    }

    public function actionSlide_1() {
        $model = new Item;
        if (isset($_POST['Item'])) {
            $model->attributes = $_POST['Item'];
            $model->image = CUploadedFile::getInstance($model, 'image');
//            if($model->save())
//            {
//                $model->image->saveAs('path/to/localFile');
//                // redirect to success page
//            }

            $extension = $model->image->getExtensionName();
//            $slideNo=$model->getImageNo();
            echo "df";
            if ($model->validate()) {
                //The image is valid, you can save it
                $path = 'assets/img/home_slider/' . 'slide-1' . '.' . $extension;
                $model->image->saveAs($path);
            }
        }
        $this->render('index', array('model' => $model));
    }

    public function actionSlide_2() {
        $model = new Item;
//        if(isset($_POST['Item']))
        {
            $model->attributes = $_POST['Item'];

            $model->image = CUploadedFile::getInstance($model, 'image');
//            if($model->save())
//            {
//                $model->image->saveAs('path/to/localFile');
//                // redirect to success page
//            }

            $extension = $model->image->getExtensionName();
//            $slideNo=$model->getImageNo();
            echo "df";
            if ($model->validate()) {
                //The image is valid, you can save it
                $path = 'assets/img/home_slider/' . 'slide-2' . '.' . $extension;
                $model->image->saveAs($path);
            }
        }
        $this->render('index', array('model' => $model));
    }

    public function actionAboutuUs() {
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;



        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $type = User::model()->getType();
                echo $type;

                if (Yii::app()->user->isGuest) {
                    $this->render('index');
                } else if (User::model()->getType() == 'admin') {
                    $this->redirect(array('/admin'));
                }
            }
        }
        // display the login form 
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionViewAboutus() {
        $this->render('aboutus');
    }

    public function actionCrew() {
        $this->render('/crew');
    }

}
