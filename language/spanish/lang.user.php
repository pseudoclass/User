<?php

 /**
 * Solspace - User
 *
 * @package		Solspace:User
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2008-2012, Solspace, Inc.
 * @link		http://solspace.com/docs/addon/c/User/
 * @version		3.3.10
 * @filesource 	./system/expressionengine/third_party/user/language/spanish/
 */

$lang = $L = array(

//----------------------------------------
//	Required for MODULES page
//----------------------------------------

"user_module_name" =>
"Usuario",

"user_module_description"		=>
"Incluye la Funcionalidad de Plantillas EE en las Funciones Nativas de Miembros EE",

//----------------------------------------
//	Language for Content Wrapper
//----------------------------------------

"user"			 =>
"Usuario",

"documentation"	 =>
"Documentación en Línea",

"online_documentation"	 =>
"Documentación en Línea",

'user_preference' =>
"Preferencia",

'user_setting' =>
"Ajuste",

//----------------------------------------
//	Language for home
//----------------------------------------

"homepage"		 =>
"Página de Inicio",

//----------------------------------------
//	Language for Upgrade
//----------------------------------------

"upgrade"		 =>
"Actualizar",

"upgrade_now"	 =>
"¡Actualizar Ahora!",

"upgrade_message" =>
"Parece que ha instalado una versión nueva de Usuario. Recomendamos que inicie el script de actualización",

"update_successful"			=>
"El módulo ha sido actualizado con éxito.",

"update_failure"			=>
"Se ha detectado un error al intentar actualizar su módulo a la última versión.",

//----------------------------------------
//	Language for find member
//----------------------------------------

"reassign_ownership"			=>
"Reasignar Propietario",

"find_member"	 =>
"Encontrar Miembro",

'member_search' =>
"Buscar Miembro",

"find_members_text" =>
"Incluye un nombre de usuario, nombre de pantalla, o dirección de email abajo para encontrar un miembro.",

'find_entries_text_channel'	=>
"Buscar entradas, que NO estan asignados al miembro arriba, basándose en el título y el canal, para reasignarlos al miembro seleccionado.",

'find_entries_text_weblog'	=>
"Buscar entradas, que NO estan asignados al miembro arriba, basándose en el título y el weblog, para reasignarlos al miembro seleccionado.",

"name"			 =>
"Nombre",

'member_keywords' =>
"Buscar Miembros",

'entry_title_keywords' =>
"Título de Entrada",

'choose_member' =>
"Seleccionar Miembro",

'assign_to_member' =>
"Asignar a Miembro",

'channels' =>
"Canales",

"missing_name"	 =>
"Por favor incluye un nombre de usuario, nombre de pantalla, o dirección de email.",

"no_results"	 =>
"Su búsqueda no ha devuelto resultados. Por favor intente de nuevo.",

'choose_entries' =>
"Seleccionar Entradas",

"submit"		 =>
"Enviar",

"no_results_channel" =>
"Su búsqueda no ha devuelto resultados. Por favor intente de nuevo.",

//----------------------------------------
//	Language for find entries
//----------------------------------------

"select"		 =>
"Seleccionar",

"username"		 =>
"Nombre de Usuario",

"screen_name"	 =>
"Nombre de Pantalla",

"email"			 =>
"Email",

"entries"		 =>
"Entradas",

"find_entries"	 =>
"Buscar Entradas",

"title"			 =>
"Título",

"entry_id"		 =>
"ID de Entrada",

"entry_date"	 =>
"Fecha de Entrada",

"missing_title"	 =>
"Por favor incluye un título para su búsqueda.",

"missing_member" =>
"Por favor seleccione un miembro de la lista.",

"submit_name"	 =>
"Asignar las entradas seleccionadas a %name%.",

"no_entries_selected"			=>
"No hay entradas seleccionadas.",

"reassign_ownership_confirm"	=>
"Confirmar Cambio de Propietario",

"reassign_ownership_question_entry"	=>
"¿Esta seguro que quiere reasignar el propietario de %i% entradas a %name%?",

"reassign_ownership_question_entries"	=>
"¿Esta seguro que quiere reasignar el propietario de %i% entradas a %name%?",

"reassign"		 =>
"Reasignar",

"missing_member_id" =>
"No se encuentra el miembro a quien se esta reasignando como propietario.",

"entry_reassigned" =>
"1 entrada ha sido reasignada con éxito.",

"entries_reassigned"			=>
"%i% entradas han sido reasignadas con éxito.",

//----------------------------------------
//	Language for prefs
//----------------------------------------

"preferences"	 =>
"Preferencias",

"general_preferences"	 =>
"Preferencias Generales",

"multiple_authors"	 =>
"Autores Múltiples",

"email_notifications"	 =>
"Notificaciones por Email",

"email_is_username" =>
"Email es el Nombre de Usuario",

"email_is_username_subtext"		=>
"Seleccione sí en éste campo para obligar a que los nombres de usuario heredan su valor de la dirección de email del usuario.",

"category_groups" =>
"Grupos de Categorías",

"category_groups_subtext"			=>
"Seleccione los grupos de categorías a la derecha para indicar las categorías que pueden ser asignadas a usuarios al utilizar la prestación de Categorías de Usuarios.",

"missing_username" =>
"Por favor incluye un nombre de usuario.",

"username_change_not_allowed"	=>
"Su sitio no está configurado para permitir los cambios de nombres de usuario. La regla de 'email es el nombre de usuario' no es compatible con sus ajustes de sistema actuales. Los usuarios deben tener el derecho de cambiar sus nombres de usuario si sus nombres de usuario y sus direcciones de email son considerados como el mismo en el sitio.",

"screen_name_override"			=>
"Anulación de Nombre de Pantalla",

"screen_name_override_subtext"		=>
"Indica que campos personalizados de miembros deben ser utilizados para crear los nombres de pantalla. Separa los nombres de los campos con una barra '|'. Dejando este campo en blanco hará que la función de anulación de nombre de pantalla sea ignorada.",

"user_preferences_updated" =>
"Sus preferencias han sido actualizados.",

'welcome_email_subject'	 =>
"Asunto del Email de Bienvenida",

'welcome_email_content'	 =>
"Email de Bienvenida",

'welcome_email_content_subtext'	 =>
"Envía un email de bienvenida personalizada al usuario registrado al completar su registración. Si no desea que se envíe un email de bienvenida, deja éste área en blanco.<br/><br/>Los variables disponibles son: <b>{site_name}</b>, <b>{site_url}</b>, <b>{screen_name}</b>, <b>{email}</b>, <b>{username}</b>, <b>{member_id}</b>.",

'member_update'	 =>
"Actualizar Miembro",

'member_update_admin_notification_emails' =>
"Dirección(es) de Email de Notificación para el Administrador al Actualizar Perfiles",

'member_update_admin_notification_template' =>
"Mensaje de Notificación del Administrador al Actualizar un Perfil",

'member_update_admin_notification_template_subtext' =>
"Envía un email de notificación personalizado a las direcciones de email especificados arriba. Todos los variables de miembros están disponibles, más la pareja de variables <b>{changed}{/changed}</b> la cual habilita el <b>{name}</b> (nombre del campo) y <b>{value}</b> (el valor nuevo) de los variables. La pareja de variables {changed} mostrará los valores nuevos de los campos que están siendos modificados. También está disponible el variable <b>{update_date}</b> y formateo de fechas.",

//----------------------------------------
//	Language for Edit
//----------------------------------------

'user_successful_submission' =>
"¡Introducido con Éxito!",

"not_authorized" =>
"No esta autorizado para realizar éste acción.",

"cant_find_member" =>
"No se ha podido encontrar el miembro especificado.",

"incorrect_language"			=>
"Se ha seleccionado una idioma incorrecto.",

"super_admin_group_id"			=>
"¿Esta de broma no? ¿Realmente quiere cambiar su estado de grupo de miembros de Super Admin a otra? No podemos dejarle hacer eso aquí. Deberá hacerlo en el panel de control de EE.",

"current_password_required"		=>
"Para cambiar una contraseña, debe incluir su contraseña actual.",

"current_password_required_email"		=>
"Para cambiar una dirección de email, debe incluir su contraseña actual.",

"username_change_not_allowed"	=>
"Éste web no permite el cambio de nombres de usuario.",

"missing_fields" =>
"Los siguientes campos son obligatorios: <ul><li>%fields%</li></ul>",

"avatar_uploads_not_enabled"	=>
"La subida de avatares no está habilitado.",

"photo_uploads_not_enabled"		=>
"La subida de fotos de miembros no está habilitado.",

"sig_uploads_not_enabled"		=>
"La subida de imágenes de firma no está habilitado.",

"gd_required"	 =>
"La biblioteca de imagen GD es necesario para ésta acción. Por favor contacte con el soporte técnico.",

"image_max_size_exceeded"		=>
"El tamaño máximo para la subida de imágenes es %s. Por favor seleccione otro archivo más pequeño para subir.",

"missing_upload_path"			=>
"El directorio de subida para éste tipo de imágen está ausente o es incorrecto. Por favor contacte con el soporte técnico.",

"invalid_image_type"			=>
"El tipo de archivo de imagen que está intentando subir no está permitido.",

"password_changed" =>
"Ha cambiado su contraseña. Debe iniciar otra sesión con su contraseña nueva.",

"us"			 =>
"Estado Unidos",

"eu"			 =>
"Europeo",

"success"		 =>
"¡Éxito!",

"return"		 =>
"Volver",

//----------------------------------------
//	Language for group edit
//----------------------------------------

"incorrect_editable_group"		=>
"Ha indicado incorrectamente los grupos editables para éste función.",

"no_data"		 =>
"No se ha enviado datos.",

"member_list_error" =>
"Se ha detectado un error en la lista de miembros proporcionado.",

'member_group_updated' =>
"El Grupo de Miembros ha sido actualizado con éxito.",

//----------------------------------------
//	Language for Register
//----------------------------------------

"registration_not_enabled"		=>
"El registro de miembros nuevos no está permitido.",

"mbr_you_are_registered"		=>
"Ya está registrado y iniciado en una sesión.",

"prohibited_username" =>
"El nombre de usuario que ha proporcionado está prohibido en el sistema. Por favor elige otro nombre de usuario.",

"email_required" =>
"Se requiere una dirección de email para registrarse.",

"user_field_required"			=>
"Los siguientes campos de miembro son obligatorios:<ul>%s</ul>",

"captcha_required" =>
"Debe incluir el texto de la imagen captcha para registrarse.",

"mbr_terms_of_service_required"	=>
"La aceptación de los Términos de Servicio es obligatorio para registrarse.",

"banned_screen_name"			=>
"Un nombre de pantalla a sido generado para ti con estos valores: %s. Éste nombre de pantalla está prohibido en éste sitio. Debe alterar el contenido de los valores que ha introducido o contactar con el administrador de éste sito para ayuda.",

"bad_screen_name" =>
"Un nombre de pantalla a sido generado para ti con estos valores: %s. Los nombres de pantalla deben ser únicas. Debe alterar el contenido de los valores que ha introducido o contactar con el administrador de éste sito para ayuda.",

"banned_username" =>
"El nombre de usuario que ha introducido ha sido prohibido de éste sitio.",

"invalid_member_group"			=>
"El grupo de miembro indicado es inválido. Por favor contacte con soporte técnico.",

"wrong_reg_mode" =>
"El formulario que ha utilizado le permite registrarse automáticamente. Sin embargo, el sitio no permite los registros inmediatos. Por favor contacte con el webmaster para comunicarle éste error.",



//----------------------------------------
//	Language for Keys
//----------------------------------------

"back"			 =>
"Volver",

"key_created"	 =>
"Clave Creada",

"key_expiration"	 =>
"Caducidad de Clave",

"key_expiration_subtext"	 =>
"Número de días después de enviar una persona una clave/invitación en la que se caduca. El valor por defecto son 7 días.",

"key_success"	 =>
"Las Claves de Registración han sido creadas y enviadas con éxito.",

"key_required"	 =>
"Se requiere una clave de invitación válida para unirse a éste web. Por favor obtenga una clave.",

"key_incorrect"	 =>
"La clave de invitación que ha introducido no es válido. Las claves de invitación se caducan %s día(s). Por favor intente de nuevo.",

"key_email_match_required"		=>
"La dirección de email que ha introducido no coordina con la clave. Por favor regrese y intente de nuevo.",

"template_not_found"			=>
"No se ha podido encontrar la plantilla de invitación especificada.",

"you_are_invited_to_join"=>
"Está invitado a unirse",

//----------------------------------------
//	Language for Search
//----------------------------------------

"search_path_error" =>
"No se ha especificado una plantilla para mostrar los resultados de la búsqueda.",

"search_not_allowed"			=>
"Actialmente no está permitido realizar una búsqueda.",

"search_time_not_expired"		=>
"Solo está permitido realizar una búsqueda cada %x segundos.",

"page"			 =>
"Página",

"of"			 =>
"de",


//----------------------------------------
//	Language for Delete Account
//----------------------------------------

'user_delete_confirm'			=>
"Por favor confirme que desea eliminar permanentemente ésta cuenta y todo el contenido asociado con el.",

//----------------------------------------
//	Forgotten Username Email
//----------------------------------------

'forgotten_username_sent' =>
"Un email ha sido enviado con su nombre de usuario olvidado.",

'forgotten_username_subject' =>
"Nombre de Usuario Olvidado",

'user_forgot_username_message' =>
"Mensaje Email de Nombre de Usuario Olvidado",

'user_forgot_username_message_subtext' =>
"Envía un email personalizado con los detalles del usuario que ha pedido sus datos de acceso a través de la función User:Forgot_Username.<br/><br/>Los variables disponibles son: <b>{site_name}</b>, <b>{site_url}</b>, <b>{screen_name}</b>, <b>{email}</b>, <b>{username}</b>, <b>{member_id}</b>.",

//----------------------------------------
//	Language for Tab
//----------------------------------------

"no_matching_authors"			=>
"No se ha encontrado autores relacionados.",

"no_author_id"	 =>
"No se ha incluido un ID de autor.",

"author_not_assigned"			=>
"El autor no fue asignado a ésta entrada.",

"successful_add" =>
"El autor ha sido añadido con éxito.",

'remove' =>
"Eliminar",

'add' =>
"Añadir",

'loading_users' =>
'Cargando Lista de Usuarios',

/** --------------------------------------------
/**  Errors
/** --------------------------------------------*/

'disable_module_to_disable_extension' =>
"Para inhabilitar ésta extensión, debe inhabilitar su correspondiente <a href='%url%'>módulo</a>.",

'enable_module_to_enable_extension' =>
"Para habilitar ésta extensión, debe instalar su correspondiente <a href='%url%'>módulo</a>.",

'cp_jquery_requred' =>
"La extensión de 'jQuery para el Panel de Control' debe estar <a href='%extensions_url%'>habilitado</a> para utilizar éste módulo.",

/** --------------------------------------------
/**  Update Routine
/** --------------------------------------------*/

'update_user_module' =>
"Actualizar el Módulo Usuario",

'user_update_message' =>
"Recientemente ha subido una versión nueva de Usuario. Por favor haga clic aquí para iniciar el proceso de actualización.",

'user_authors_publish_tab_label' => 
'Etiqueta de Pestaña de Publicar',

'user_authors_instructions'		=> 
'Puede personalizar la etiqueta de la pestaña de autores por cada weblog/canal utilizando los campos abajo. Si prefiere no mostrar la pestaña para un weblog/canal, deja su campo respectivo en blanco.',

//----------------------------------------
//	Language for Tab
//----------------------------------------

"browse_authors_instructions"	=>
"Buscar autores utilizando éste campo. Haga click en el nombre de un autor para añadirle a la entrada.",

"choose_author_instructions"	=>
"Elige un autor de la lista de usuarios.",

"assigned_authors_instructions"	=>
"Indica el autor primario utilizando los botones de selección.",

"browse_authors" =>
"Buscar Autores",

"assigned_authors" =>
"Autores Asignados",

"primary_author" =>
"Autor Ppimario",

'choose_a_primary_author' =>
"Elige un autor primario",

"user_authors_confirm_delete" =>
"¿Esta seguro que quiere eliminar ésta persona como uno de los autores de la entrada?",

'remove' =>
"Eliminar",

'add' =>
"Añadir",

'user_module_version' =>
"Usuario",


// END
''=>''
);