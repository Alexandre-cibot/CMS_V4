<?php
namespace Model;

/**
 * Class Pagerepository
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package Model
 */
class PageRepository
{

    /**
     * @var \PDO
     */
    private $PDO;

    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @param int $id
     */
    public function getSlug($slug)
    {
        $sql = "
        SELECT 
          `id`,
          `slug`,
          `span`,
          `body`,
          `title`,
          `img`,
          `span_class`
        FROM 
          `page` 
        WHERE 
          `slug` = :slug
        ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    /**
     * @return array liste des slugs et titles de toutes les pages
     */
    public function findAll()
    {
        $sql = "
        SELECT 
          `id`, 
          `slug`,
          `span`,
          `body`,
          `title`,
          `img`,
          `span_class`
        FROM 
          `page` 
        ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findById($id){
        $sql = "
        SELECT
           `id`,
          `slug`,
          `span`,
          `body`,
          `title`,
          `img`,
          `span_class`
        FROM
          `page`
        WHERE
          `id` = :id
        ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function updatePage($id){

        $sql = "
        UPDATE `page`
        SET
          `slug` = :slug,
          `span` = :span ,
          `body` = :body,
          `title` = :title,
          `img` = :img,
          `span_class` = :span_class
         WHERE
        `id` = :id
        ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':slug', $_POST['slug']);
        $stmt->bindParam(':span', $_POST['span']);
        $stmt->bindParam(':body', $_POST['body']);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':span_class', $_POST['span_class']);
        $stmt->execute();
    }

    public function createPage(){

        $sql = "
        INSERT INTO `page`
        (
          `slug`,
          `span`,
          `body`,
          `title`,
          `img`,
          `span_class`
          )
        VALUES (:slug, :span, :body, :title, :img, :span_class)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug', $_POST['slug']);
        $stmt->bindParam(':span', $_POST['span']);
        $stmt->bindParam(':body', $_POST['body']);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':span_class', $_POST['span_class']);
        $stmt->execute();
    }

    public function deletePage($id){
        $sql = "
        DELETE FROM `page` WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}