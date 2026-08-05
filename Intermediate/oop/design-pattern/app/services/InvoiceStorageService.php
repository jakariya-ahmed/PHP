<?php 
namespace App\Services;
use Aws\S3\S3Client;

class InvoiceStorageService {
    public function __construct(
        private readonly S3Client $s3Client,
        private readonly string $bucketName,
    ) {}

    public function savePdf(int $orderId, string $pdfContent): string {
        $key = "invoice/order_{$orderId}.pdf";
        $this->s3Client->putObject([
            'Bucket' => $this->bucketName,
            'Key' => $key,
            'Body' => $pdfContent,
        ]);

        return $key;
        
    }
}
