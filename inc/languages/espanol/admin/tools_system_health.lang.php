<?php
/**
 * MyBB 1.6 Spanish Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: tools_system_health.lang.php 5017 2013-04-29 20:48:15Z Anio_pke $
 */

$l['system_health'] = "Estado del sistema";
$l['system_health_desc'] = "Aquí puedes ver información del estado del sistema.";
$l['utf8_conversion'] = "Conversión UTF-8";
$l['utf8_conversion_desc'] = "Actualmente estás convirtiendo las tablas de la base de datos al formato UTF-8. Este proceso puede tardar varias horas dependiendo del tamaño de tu foro y de sus tablas. Cuando el proceso termine, regresarás a la página principal de la conversión UTF-8.";
$l['utf8_conversion_desc2'] = "Esta herramienta comprueba las tablas de la base de datos y se asegura que están en el formato UTF-8 y te permite convertirlas si no lo están.";

$l['convert_all'] = "Convertir todo";
$l['converting_to_utf8'] = "MyBB actualmente está convirtiendo la tabla \"{1}\" al formato UTF-8 desde la codificación {2}.";
$l['convert_to_utf8'] = "Convertir la tabla \"{1}\" al formato UTF-8 desde la codificación {2}.";
$l['convert_all_to_utf'] = "Convertir TODAS las tablas al formato UTF-8 desde la codificación {1}.";
$l['please_wait'] = "Por favor, espera...";
$l['converting_table'] = "Convertiendo la tabla:";
$l['convert_table'] = "Convertir tabla";
$l['convert_tables'] = "Convertir todas las tablas";
$l['convert_database_table'] = "Convertir tabla de la base de datos";
$l['convert_database_tables'] = "Convertir toda la base de datos";
$l['table'] = "Tabla";
$l['status'] = "Estado";
$l['convert_now'] = "Convertir ahora";
$l['totals'] = "Totales";
$l['attachments'] = "Adjuntos";
$l['total_database_size'] = "Tamaño total de la BD";
$l['attachment_space_used'] = "Espacio utilizado por adjuntos";
$l['total_cache_size'] = "Tamaño total de caché";
$l['estimated_attachment_bandwidth_usage'] = "Ancho de banda usado por adjuntos (Estimado)";
$l['max_upload_post_size'] = "Máx subida / Tamaño POST";
$l['average_attachment_size'] = "Tamaño medio de adjunto";
$l['stats'] = "Estadísticas";
$l['task'] = "Tarea";
$l['run_time'] = "Fecha de ejecución";
$l['next_3_tasks'] = "Próximas 3 tareas";
$l['backup_time'] = "Fecha de creación";
$l['no_backups'] = "Actualmente no hay ninguna copia de seguridad.";
$l['existing_db_backups'] = "Copias de seguridad existentes";
$l['writable'] = "Escritura";
$l['not_writable'] = "Sin escritura";
$l['please_chmod_777'] = "Por favor, CHMOD a 777.";
$l['chmod_info'] = "Por favor, cambia los ajustes CHMOD a los archivos o directorios especificados abajo. Para más información de como cambiar el CHMOD, ver";
$l['file'] = "Archivo";
$l['location'] = "Localización";
$l['settings_file'] = "Archivo de ajustes";
$l['config_file'] = "Archivo de configuración";
$l['file_upload_dir'] = "Directorio de subidas";
$l['avatar_upload_dir'] = "Directorio de avatares";
$l['language_files'] = "Archivos de idioma";
$l['backup_dir'] = "Directorio de copias de seguridad";
$l['cache_dir'] = "Directorio caché";
$l['themes_dir'] = "Directorio de los estilos";
$l['chmod_files_and_dirs'] = "CHMOD archivos y directorios";

$l['notice_process_long_time'] = "Este proceso puede llevar varias horas dependiendo del tamaño de tu foro y de sus tablas.";

$l['check_templates'] = "Revisar plantillas";
$l['check_templates_desc'] = "Revisa todas las plantillas instaladas en busca de problemas de seguridad conocidos.";
$l['check_templates_title'] = "Revisar seguridad de las plantillas";
$l['check_templates_info'] = "Este proceso revisará las plantillas instaladas en busca de problemas de seguridad que pudieran afectar tu foro y el servidor en el que funciona. Esto puede tomar un tiempo si has instalado muchos estilos.
<br /><br />Para iniciar el proceso, presiona el botón 'Proceder' que se muestra a continuación.";
$l['check_templates_info_desc'] = "Se encontraron problemas de seguridad conocidos en las plantillas mostradas a continuación. Por favor revísalas.";
$l['full_edit'] = "Edición completa";

$l['error_chmod'] = "de los archivos y directorios necesario no tiene los ajustes CHMOD requeridos.";
$l['error_invalid_table'] = "La tabla especificada no existe.";
$l['error_db_encoding_not_set'] = "Tu instalación actual de MyBB no tiene activada esta herramienta. Por favor, visita <a href=\"http://wiki.mybb.com/index.php/UTF8_Setup\">el wiki</a> para leer la información de como activarlo.";
$l['error_not_supported'] = "Tu motor de bases de datos no soporta la herramienta de conversión a UTF-8.";
$l['error_invalid_input'] = "Hubo un problema al revisar las plantillas. Por favor intenta de nuevo o contacta a MyBB Group para recibir ayuda.";
$l['error_master_templates_altered'] = "Las plantillas maestras han sido alteradas. Por favor contacta a MyBB Group para recibir ayuda sobre cómo modificarlas.";

$l['success_templates_checked'] = "Las plantillas han sido revisadas correctamente. No se encontraron problemas de seguridad.";
$l['success_all_tables_already_converted'] = "Todas las tablas se han convertido o ya están en el formato UTF-8.";
$l['success_table_converted'] = "La tabla seleccionada \"{1}\" se ha convertido a UTF-8 correctamente.";
$l['success_chmod'] = "Todos los archivos y directorios necesarios tienen los ajustes CHMOD correctos.";
?>
