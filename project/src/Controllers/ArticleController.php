<?php
namespace src\Controllers;
use src\View\View;
use src\Services\Db;
use src\Models\Articles\Article;


class ArticleController {
    private $view;
    private $db;
    public function __construct() {
        $this->view = new View;
        $this->db = Db::getInstance();
    }

    public function index() {
        $articles = Article::findAll();
        $this->view->renderHtml('article/index', ['articles'=>$articles]);
    }

    public function show($id) {
        $article = Article::getById($id);
        if ($article == []) {
            $this->view->renderHtml('error/404', [], 404);
            return;
        }
        $this->view->renderHtml('article/show', ['article'=>$article]);
    }
}