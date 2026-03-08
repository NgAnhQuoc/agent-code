---
description: Add a new global hook to WHMCS
---

1. Navigate to `includes/hooks/`.
2. Create a new PHP file with a descriptive name, prefixed with `vietnix_` (e.g., `vietnix_auto_invoice.php`).
3. Start the file with the standard WHMCS security check:
   ```php
   <?php
   if (!defined("WHMCS")) {
       die("This file cannot be accessed directly");
   }
   ```
4. Register your hook:
   ```php
   add_hook('[HookPoint]', 1, function($vars) {
       // Your global logic here
   });
   ```
5. If the logic is extensive, consider placing it in a separate class under `includes/classes/` (if you've created one) and calling it from the hook.
