<?php


namespace App\Controller;

use App\Model\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BookController extends AbstractController
{
    public function getBookAction(): Response {
        $book = new Book(1, 'Necronomicon', '978-2-35294-675-5', '2');

        return $this->json($book);
    }
}