<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Clock.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_title_case", function() use($app) {
        $input_time = new Clock;
        $difference_in_degrees = $input_time->makeClockAngle($_GET['time']);
        return $app['twig']->render('angle_result.html.twig', array('result' => $difference_in_degrees));
    });

    return $app;
?>
