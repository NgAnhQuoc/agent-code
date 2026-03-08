---
description: Add a new background task (Cron Job) to WHMCS
---

1. Navigate to the `crons/` directory.
2. Create a new PHP file (e.g., `custom_cleanup.php`).
3. Use the following skeleton to ensure it integrates with WHMCS:
   ```php
   <?php
   require_once __DIR__ . '/../init.php'; // Required to load WHMCS environment
   
   use WHMCS\Database\Capsule;

   // Your background logic here
   echo "Running custom background task...\n";
   
   // logActivity("Custom Cron Job executed");
   ```
4. If this is a long-running task, ensure it handles timeouts and memory limits appropriately.
5. Add the script to your server's crontab or use a task runner if available.
