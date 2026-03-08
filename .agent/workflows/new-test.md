---
description: Create a new PHPUnit test for a module
---

1. Create a `tests/` directory in your module folder if it doesn't exist.
2. Create a test file named `[ComponentName]Test.php`.
3. Use the following template:
   ```php
   <?php
   use PHPUnit\Framework\TestCase;
   use VMWS\Lib\MyClass; // Adjust namespace

   class MyClassTest extends TestCase {
       protected function setUp(): void {
           // Initialize mocks if needed
       }

       public function testSomething() {
           $this->assertTrue(true);
       }
   }
   ```
4. Update `composer.json` to include `phpunit/phpunit` in `require-dev`.
5. Run `composer update` to install PHPUnit.
