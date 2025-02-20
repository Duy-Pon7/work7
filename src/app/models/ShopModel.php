<?php
require_once '../config/database.php';

class ShopModel {
    public function getProducts($type = '', $shop = '', $price = '', $rating = '', $status = '', $page = 1) {
        global $pdo;
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $sql = "SELECT * FROM product WHERE 1=1";
        $params = [];

        if (!empty($type)) {
            $sql .= " AND type = :type";
            $params[':type'] = $type;
        }
        if (!empty($shop)) {
            $sql .= " AND shop = :shop";
            $params[':shop'] = $shop;
        }
        if (!empty($price)) {
            if ($price === '300000+') {
                $sql .= " AND price >= :price_min";
                $params[':price_min'] = 300000;
            } else {
                $priceRange = explode('-', $price);
                if (count($priceRange) == 2) {
                    $sql .= " AND price BETWEEN :price_min AND :price_max";
                    $params[':price_min'] = $priceRange[0];
                    $params[':price_max'] = $priceRange[1];
                }
            }
        }
        if (!empty($rating)) {
            if ($rating == '5') {
                $sql .= " AND rating = :rating";
                $params[':rating'] = 5;
            } elseif ($rating == '4+') {
                $sql .= " AND rating >= :rating";
                $params[':rating'] = 4;
            } elseif ($rating == '3+') {
                $sql .= " AND rating >= :rating";
                $params[':rating'] = 3;
            }
        }
        if (!empty($status)) {
            $sql .= " AND status = :status";
            $params[':status'] = $status;
        }

        $sql .= " LIMIT :limit OFFSET :offset";
        
        $stmt = $pdo->prepare($sql);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countProducts($type = '', $shop = '', $price = '', $rating = '', $status = '') {
        global $pdo;
        $sql = "SELECT COUNT(*) FROM product WHERE 1=1";
        $params = [];

        if (!empty($type)) {
            $sql .= " AND type = :type";
            $params[':type'] = $type;
        }
        if (!empty($shop)) {
            $sql .= " AND shop = :shop";
            $params[':shop'] = $shop;
        }
        if (!empty($price)) {
            if ($price === '300000+') {
                $sql .= " AND price >= :price_min";
                $params[':price_min'] = 300000;
            } else {
                $priceRange = explode('-', $price);
                if (count($priceRange) == 2) {
                    $sql .= " AND price BETWEEN :price_min AND :price_max";
                    $params[':price_min'] = $priceRange[0];
                    $params[':price_max'] = $priceRange[1];
                }
            }
        }
        if (!empty($rating)) {
            if ($rating == '5') {
                $sql .= " AND rating = :rating";
                $params[':rating'] = 5;
            } elseif ($rating == '4+') {
                $sql .= " AND rating >= :rating";
                $params[':rating'] = 4;
            } elseif ($rating == '3+') {
                $sql .= " AND rating >= :rating";
                $params[':rating'] = 3;
            }
        }
        if (!empty($status)) {
            $sql .= " AND status = :status";
            $params[':status'] = $status;
        }

        $stmt = $pdo->prepare($sql);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
?>