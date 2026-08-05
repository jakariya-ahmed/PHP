<?php 
namespace App\Repositories;

use App\Database\DatabaseConnection;
use PDO;

class InvoiceRepository {
    private PDO $db;

    public function __construct() 
    {
        $this->db = DatabaseConnection::getInstance();
    }

    public function saveInvoice(int $orderId, float $amount, string $pdfUrl): void 
    {
        $stmt = $this->db->prepare(
            "INSERT INTO invoices (order_id, total_amount, pdf_url) VALUES (?, ?, ?)"
        );
        $stmt -> execute($orderId, $amount, $pdfUrl);
    } 

}