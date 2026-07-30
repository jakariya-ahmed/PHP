<?php 
namespace App\Services;
class LoggerService {
    public function __construct(private readonly string $logFilePath) {}

    public function log(string $message): void {
        $formatted = sprintf("[%s] %s\n", date('Y-m-d H:i:s'), $message);
        file_put_contents($this->logFilePath, $formatted, FILE_APPEND);
    }

}