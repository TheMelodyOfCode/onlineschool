<?php
/** Die Index.php ist der Hauptausgangspunkt unserer Website.
 * Darum wird die Session mit der super globalen $_Session hier gestartet
 * So das wir von überall darauf Zugriff haben. */
session_start();
require_once "init.php";
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump(session_id());
// session_destroy();


    /** Hier instanziiert der Container uns den Router 
     * so das wir Zugriff auf dessen Funktionen haben */
    $router = $container->build("router");

    /** Path_info erhalten wir immer dann wenn wir keinen
     *  Parameter übergeben haben , so wie bei der Startseite.
     *  wenn also path_info gesetzt ist speichern wir dies und 
     *  ansonsten wenn wenn request_uri gestzt ist wird das gespeichert*/
    if (isset($_SERVER["PATH_INFO"])) {
        $request = $_SERVER["PATH_INFO"];
    } else {
        $request = $_SERVER["REQUEST_URI"];
    }


    if ($request == "/onlineschool/"){
        $router->add("articleController", "home");
    }
    
    /** Hier wird immer der Controller übergeben und die enthaltene Funktion 
     * die genausso benannt ist wie die webpage im views */
    #-----------------------------------------------------
    # Login, Register & Logout 
    elseif ($request == "/Register"){
        $router->add("registerController", "register");
    }
    elseif ($request == "/Login"){
        $router->add("loginController", "loginpage");
    }
    elseif ($request == "/Logout"){
        $router->add("logoutController", "logout");
    }
    #-----------------------------------------------------
    #Users
    elseif ($request == "/Users" ){
        $router->add("userController","getAllStudents");
    }
    elseif ($request == "/Users=user"){
        $router->add("userController", "userprofile");
    }   
    elseif ($request == "/Users/userlink") {
        $router->add("userController", "userprofile");
    } 
    elseif ($request == "/Profile") {
        $router->add("userController", "singleProfileView");
    } 
    elseif ($request == "/Users/userprofile") {
        $router->add("userController", "updateUserProfile");
    } 
    elseif ($request == "/LearningArea") {
        $router->add("articleController", "checkMembership");
    } 
    #-----------------------------------------------------
    #Teachers
    elseif ($request == "/Teachers") {
        $router->add("dashboardController", "teacherProfile");
    } 

    #-----------------------------------------------------
    # Articles and Update Articles for teachers
    elseif ($request == "/Freelearning") {
        $router->add("articleController", "freeLearning");
    } 
    elseif ($request == "/Prolearning") {
        $router->add("articleController", "proLearning");
    } 
    elseif ($request == "/Enterprise") {
        $router->add("articleController", "enterpriseLearning");
    } 

    elseif ($request == "/UpdateFreelearning") {
        $router->add("articleController", "updateFreelearning");
    } 
    elseif ($request == "/UpdateProlearning") {
        $router->add("articleController", "updateProlearning");
    } 
    elseif ($request == "/UpdateEnterprise") {
        $router->add("articleController", "updateEnterprise");
    } 



    #-----------------------------------------------------
    # User Dashboard nach Login
    elseif ($request == "/Dashboard"){
        $router->add("dashboardController", "userDashboard");
    }


    #-----------------------------------------------------
    # Documents for Teachers
    elseif ($request == "/TeacherDocs"){
        $router->add("documentController", "allDocumentsForTeachers");
    }
    #-----------------------------------------------------
    # Documents
    elseif ($request == "/Documents"){
        $router->add("documentController", "allDocuments");
    }
    elseif ($request == "/Document=Settings"){
        $router->add("documentController", "documentsettings");
    }

    #-----------------------------------------------------

    # Documents AJAX
    /** Diese Route wird im Browser NICHT geladen! Diese Route ist nur für AJAX!
     * AJAX greift auf die Route zu und führt dann den Code aus. */
    elseif ($request == "/Document-newDocument"){
        # erst wird die Funktion ausgeführt
        $router->add("documentController", "ajaxNewDocumentFunction");
        # danach die Funktion für den render - der View
        $router->add("documentController", "ajaxPageDocument");
    } 
    elseif ($request == "/Document-Update"){
        # erst die Funktion
        $router->add("documentController", "ajaxUpdateDocumentFunction");
        # dann der View
        $router->add("documentController", "ajaxDisplaySingleDocumentSettingsPage");
    }
    elseif ($request == "/Document-Delete"){
        # erst die Funktion
        $router->add("documentController", "ajaxDeleteDocumentFunction");
        // # dann der View
        $router->add("documentController", "ajaxPageDocument");
    }

    #-----------------------------------------------------
        # Photoalbum Dashboard nach Login
        elseif ($request == "/Photoalbum"){
            $router->add("photoalbumController", "albumByUserid");
        }
        elseif ($request == "/Album=Settings"){
            $router->add("photoalbumController", "albumsettings");
        }
        elseif ($request == "/Gallery"){
            $router->add("photoalbumController", "allAlbums");
        }
    #-----------------------------------------------------
    # Photoalbum AJAX
    /** Diese Route wird im Browser NICHT geladen! Diese Route ist nur für AJAX!
     * AJAX greift auf die Route zu und führtdann den Code aus. */
    elseif ($request == "/Album-newAlbum"){
        # erst die Funktion
        $router->add("photoalbumController", "ajaxNewAlbumFunction");
        # dann der View
        $router->add("photoalbumController", "ajaxPagePhotoAlbum");
    } 
    elseif ($request == "/Album-Update"){
        # erst die Funktion
        $router->add("photoalbumController", "ajaxUpdateAlbumFunktion");
        # dann der View
        $router->add("photoalbumController", "ajaxDisplaySingleAlbumSettingsPage");
    }
    elseif ($request == "/Photo-Delete"){
        # erst die Funktion
        $router->add("photoalbumController", "ajaxDeletePhoto");
        // # dann der View
        $router->add("photoalbumController", "ajaxPagePhotoAlbum");
    }
    #-----------------------------------------------------
    #Error-Page
     else {
        $router->add("errorController", "errorpage");
    }

 
    // var_dump($_SERVER);
    // var_dump($request);
    ?>


