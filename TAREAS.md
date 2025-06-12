# Plan de Trabajo - AI Guardian

Esta lista describe los próximos pasos para completar el plugin.

## Fase MVP

1. Crear la rama `develop` y mantener `main` para producción.
2. Implementar un dashboard básico en React o PHP.
3. Preparar estructura para integrar proveedores de IA (OpenAI, HuggingFace).
4. Añadir sincronización de datos con WPScan y CVE (básico).
5. Configurar PHPUnit y pruebas de integración.
6. Incluir GitHub Actions para CI con phplint y PHPUnit.

## Fase Beta

1. Añadir escáner de seguridad estático (detección simple de patrones de código).
2. Integrar un WAF externo (Cloudflare o ModSecurity).
3. Soporte Multisite.
4. Sistema de notificaciones y logs forenses.

## Lanzamiento

1. Optimización de rendimiento con cache Redis/Memcached.
2. Sistema de actualizaciones automáticas.
3. Documentación completa y demo data con WP-CLI.
