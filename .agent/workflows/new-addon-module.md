---
description: Create a new WHMCS Addon Module skeleton
---

1. Create a new directory under `modules/addons/[ModuleName]`
2. Create `[ModuleName].php` with standard Addon functions:
   - `[ModuleName]_config()`
   - `[ModuleName]_activate()`
   - `[ModuleName]_deactivate()`
   - `[ModuleName]_output($vars)`
   - `[ModuleName]_clientarea($vars)`
3. Create `composer.json` with PSR-4 autoloading:
   ```json
   {
       "autoload": {
           "psr-4": {
               "VMW\\": ""
           }
       }
   }
   ```
4. Create directory structure (Vietnix MVC pattern):
   - `Model/`
   - `Api/`
   - `Lib/`
   - `templates/`
5. Create `hooks.php`.
6. Create `package.json` for asset building.
7. Run `yarn install` and `yarn dev` to build assets.
8. Run `composer dump-autoload`.
