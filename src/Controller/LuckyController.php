<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max, LoggerInterface $logger)
    {
        $logger->info('We are logging!');
        $number = random_int(0, $max);
        $url = $this->generateUrl('app_lucky_number', ['max' => 10]);
        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}