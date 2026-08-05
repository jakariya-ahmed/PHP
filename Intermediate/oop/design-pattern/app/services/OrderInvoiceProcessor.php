<?php 
namespace App\Services;

class OrderInvoiceProcessor {
    public function __construct(
        private readonly InvoiceCalculateService $calculate,
        private readonly InvoicePdfService $pdfGenerate,
        private readonly InvoiceStorageService $invoiceStore, 
    ) {}


    public function process (array $orderData): void {
        $totalAmount = $this->calculate->calculateTotal($orderData);
        $pdfContent = $this->pdfGenerate->pdfGenerator($orderData);
        $this->invoiceStore->savePdf($orderData['id'], $pdfContent);

    } 

}