<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ChallengeTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_challenge_validate_json(): void
    {
        $this->assertTrue($this->validateJson('./storage/app/private/email_numbers.json'));
        $this->assertTrue($this->validateJson('./storage/app/private/email_names.json'));
    }

    private function validateJson($path): bool
    {
        try {
            $jsonString = file_get_contents($path);

            // Attempt to decode the JSON string
            $data = json_decode($jsonString, true);
    
            // Check if the decoding was successful
            if (json_last_error() !== JSON_ERROR_NONE) {
                return false;
            }

            return true;
        } catch (\Exception $e) {
            echo "JSON validation failed: " . $e->getMessage();
            return false;
        }
    }
}
