---
description: Create a new WHMCS Server Module skeleton
---

1. Create a new directory under `modules/servers/[ModuleName]`
2. Create `[ModuleName].php` with standard WHMCS functions:
   - `[ModuleName]_MetaData()`
   - `[ModuleName]_ConfigOptions()`
   - `[ModuleName]_CreateAccount()`
   - `[ModuleName]_SuspendAccount()`
   - `[ModuleName]_UnsuspendAccount()`
   - `[ModuleName]_TerminateAccount()`
   - `[ModuleName]_ClientArea()`
3. Create `composer.json` with PSR-4 autoloading:
   ```json
   {
       "autoload": {
           "psr-4": {
               "VMWS\\": ""
           }
       }
   }
   ```
4. Create directory structure:
   - `class/`
   - `lib/`
   - `templates/`
   - `ajax/`
5. Create `hooks.php` if needed.
6. Create `package.json` for asset building.
7. Run `yarn install` and `yarn dev` to build assets.
8. Run `composer install` (if dependencies added) or `composer dump-autoload`.
