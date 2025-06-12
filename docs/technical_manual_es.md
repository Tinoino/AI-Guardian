# Manual Técnico - AI Guardian

Esta documentación describe la estructura del plugin y cómo ampliarlo.

## Estructura de Carpetas

- `ai-guardian.php` - Archivo principal del plugin.
- `includes/` - Clases PHP para la lógica del plugin.
- `admin/` - Archivos relacionados con el panel de administración (por crear).
- `assets/` - Recursos estáticos (JS, CSS).
- `languages/` - Archivos de traducción.
- `tests/` - Pruebas automatizadas con PHPUnit.

## Extensibilidad

El plugin está preparado para integrar módulos adicionales a través de clases dentro de `includes/` y hooks de WordPress.
