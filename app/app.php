<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contacts.php";

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contacts::getAll()));
    });

    $app->post("/contacts", function() use ($app) {
        $contacts = new Contacts($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['location']);
        $contacts->save();
        return $app['twig']->render('view_contacts.html.twig', array('contacts' => $contacts));
    });

    $app->post("/clear", function() use ($app) {
        Contacts::deleteAll();
        return $app['twig']->render('clear_contacts.html.twig');
    });

    return $app;
?>
