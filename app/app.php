<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/result', function() use ($app) {
        $new_counter = new RepeatCounter;
        $text = $_GET['text'];
        $word = $_GET['word'];
        $result = $new_counter->countRepeats($text, $word);
        return $app['twig']->render('result.html.twig', array('result' => $result, 'text' => $text, 'word' => $word));
    });

    return $app;
?>
