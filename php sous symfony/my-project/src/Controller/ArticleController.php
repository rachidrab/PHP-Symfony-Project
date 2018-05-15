<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;


class ArticleController extends Controller
{

	/**
     * @Route("/article/getAll", name="Liste des articles")
     */
    public function getAll()
    {
        
    	$articles = $this->getDoctrine()
				         ->getRepository(Article::class)
				         ->findAll();
        return $this->render('liste.html.twig',['articles' => $articles]);
    }

    /**
     * @Route("/article/json/getAll", name="Liste json articles")
     */
    public function getAllJson()
    {
        
        $articles = $this->getDoctrine()
                         ->getRepository(Article::class)
                         ->findAll();
        

       return $this->json($articles);
    }

    /**
     * @Route("/article/getArticle/{id}", name="Détails article")
     */
    public function getArticle($id)
    {
        
    	$article = $this->getDoctrine()
				        ->getRepository(Article::class)
				        ->findById($id);

		$articles = $this->getDoctrine()
				         ->getRepository(Article::class)
				         ->findAll();
        return $this->render('details.html.twig',['article' => $article,'articles' => $articles]);
    }

	/**
     * @Route("/article/json/getArticle/{id}", name="article json")
     */
    public function getArticleJson($id){
    	$article = $this->getDoctrine()
				        ->getRepository(Article::class)
				        ->findById($id);
		return $this->json($article);
    }

    
    
}