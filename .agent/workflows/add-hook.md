---
description: Add a new hook to a WHMCS module
---

1. Open `modules/[addons|servers]/[ModuleName]/hooks.php`
2. Add the hook registration:
   ```php
   add_hook('[HookName]', 1, function($vars) {
       // Logic here or call a class method
   });
   ```
3. If logic is complex, create a new class/method in `Lib/` (for Addons) or `class/` (for Servers) and call it from the hook.
4. Ensure `!defined("WHMCS")` check is at the top of the file.
