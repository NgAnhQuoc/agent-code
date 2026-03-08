---
description: Identify and fix common UI and Smarty errors in WHMCS templates
---

1. **Build Check**: Run `yarn dev` in the template directory (`templates/vietnixv3` or `templates/orderforms/vietnix_orderforms_v3`).
   - If Webpack/Tailwind errors occur, fix the CSS or configuration issues reported in the terminal.
2. **Smarty Syntax Scan**: Search for unmatched braces or problematic characters in `.tpl` files.
   - Common fix: Wrap `<script>` and `<style>` content in `{literal}...{/literal}`.
3. **Variable Verification**: Check if used variables (e.g., `{$my_custom_var}`) are actually passed from the PHP controller.
4. **Visual Inspection (Manual)**:
   - Check mobile layout (Responsive).
   - Check if assets (JS/CSS) are loading correctly (Status 200).
   - Check breadcrumbs and navigation consistency.
5. **Log Check**: Check WHMCS Activity Log and PHP Error Log for any Smarty-specific exceptions.
