# Technical Manual - AI Guardian

This document describes the plugin structure and how to extend it.

## Folder Structure

- `ai-guardian.php` - Main plugin file.
- `includes/` - PHP classes with plugin logic.
- `admin/` - Admin related files (to be created).
- `assets/` - Static resources (JS, CSS).
- `languages/` - Translation files.
- `tests/` - PHPUnit automated tests.

## Extensibility

The plugin is prepared to integrate additional modules via classes under `includes/` and WordPress hooks.
