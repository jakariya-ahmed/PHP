<?php 
namespace App\Services;
use Aws\S3\S3Client;
class InvoiceStorageService {
    public function __construct(
        private readonly S3Client $s3Client,
    ) {}
}
