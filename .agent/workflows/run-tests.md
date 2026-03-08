---
description: Run PHPUnit tests for the current module
---

1. Ensure you are in the module's root directory.
2. Ensure `vendor/` is installed (`composer install`).
3. Run the following command:
   ```bash
   ./vendor/bin/phpunit tests
   ```
4. If a specific test file is needed:
   ```bash
   ./vendor/bin/phpunit tests/MySpecificTest.php
   ```
