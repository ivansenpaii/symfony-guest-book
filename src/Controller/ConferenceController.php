<?php

namespace App\Controller;

use Blackfire\Profile\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'homepage')]
    public function index(string $name = ''): Response
    {
       $great = '';
        if ($name) {
           $great = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
       }
       return new Response(<<<EOF
            <html lang="ru">
                <body>
                    $great
                    <<img src="/images/under-construction.gif" alt="Under construction">
                </body>
            </html>
            EOF
       );
    }
}
