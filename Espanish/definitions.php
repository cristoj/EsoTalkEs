<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Espanish"] = array(
	"locale" => "es-ES",
	"name" => "Espanish",
	"description" => "Paquete de idiomas español.",
	"version" => ESOTALK_VERSION,
	"author" => "esoTalk Team",
	"authorEmail" => "support@esotalk.org",
	"authorURL" => "http://esotalk.org",
	"license" => "GPLv2"
);


// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j-m-Y, G:i"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "ayer";
$definitions["%d days ago"] = "hace %d días";
$definitions["%d hour ago"] = "hace 1 hora";
$definitions["%d hours ago"] = "hace %d horas";
$definitions["%d minute ago"] = "hace 1 minuto";
$definitions["%d minutes ago"] = "hace %d minutos";
$definitions["%d month ago"] = "hace 1 mes";
$definitions["%d months ago"] = "hace %d meses";
$definitions["%d second ago"] = "hace 1 segundo";
$definitions["%d seconds ago"] = "hace %d segundos";
$definitions["%d week ago"] = "la semana pasada";
$definitions["%d weeks ago"] = "hace %d semanas";
$definitions["%d year ago"] = "últmo año";
$definitions["%d years ago"] = "hace %d años";

$definitions["%s and %s"] = "%s y %s";
$definitions["%s can view this conversation."] = "%s puedes ver esta conversación.";
$definitions["%s changed %s's group to %s."] = "%s cambiado %s's grupo a %s.";
$definitions["%s changed your group to %s."] = "%s cambiado tu grupo to %s.";
$definitions["%s conversation"] = "%s conversación";
$definitions["%s conversations"] = "%s conversación";
$definitions["%s invited you to %s."] = "%s te ha invitado a %s.";
$definitions["%s joined the forum."] = "%s accedio a la aplicación.";
$definitions["%s post"] = "%s comentario";
$definitions["%s posted %s"] = "%s comentado %s";
$definitions["%s posted in %s."] = "%s comentado en %s.";
$definitions["%s posts"] = "%s comentarios";
$definitions["%s reply"] = "%s respuesta";
$definitions["%s replies"] = "%s respuesta";
$definitions["%s Settings"] = "%s Configuraciones";
$definitions["%s started the conversation %s."] = "%s iniciada la conversación %s.";
$definitions["%s tagged you in a post."] = "%s te ha mencionado en un comentario.";
$definitions["%s will be able to view this conversation."] = "%s podrá ver tus conversaciones.";
$definitions["%s will be able to:"] = "%s podrá:";

$definitions["A new version of esoTalk (%s) is available."] = "Una nueva versión de esoTalk (%s) está disopnible.";
$definitions["a private conversation"] = "una conversación privada";
$definitions["Access the administrator control panel."] = "Acceso al panel de control del administrador.";
$definitions["Account type"] = "Tipo de cuenta";
$definitions["Activate"] = "Activado";
$definitions["Activity"] = "Actividad";
$definitions["Add"] = "Añadir";
$definitions["Administration"] = "Administración";
$definitions["Administrator email"] = "Email del administrador";
$definitions["Administrator password"] = "Contraseña  del administrador";
$definitions["Administrator username"] = "Nombre del administrador";
$definitions["Advanced options"] = "Opciones avanzadas";
$definitions["All Channels"] = "Todos los canales";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Todavía no tienes cuenta? <a href='%s' class='link-login'>Entra!</a>";
$definitions["Appearance"] = "Apariencia";
$definitions["Automatically star conversations that I reply to"] = "Seguir automáticamente conversciones en las que he participado en algún momento";
$definitions["Logo"] = "Logo";

$definitions["Back to channels"] = "Volver a los canales";
$definitions["Back to conversation"] = "Volver a las conversaciones";
$definitions["Back to member"] = "Volver a página de usuario";
$definitions["Back to members"] = "Volver a página de usuarios";
$definitions["Back to search"] = "Volver a la página de búsqueda";
$definitions["Base URL"] = "Base URL";
$definitions["Bold"] = "Negrita";
$definitions["By %s"] = "Por %s";

$definitions["Can suspend/unsuspend members"] = "Puedes vetar/aceptar usuarios";
$definitions["Cancel"] = "Cancelar";
$definitions["Change %s's Permissions"] = "CAmbiar los permisos de %s";
$definitions["Change avatar"] = "Cambiar logo";
$definitions["Change channel"] = "Cambiar canal";
$definitions["Change name"] = "Cambiar nombre";
$definitions["Change Password or Email"] = "Cambiar contraseña o email";
$definitions["Change password"] = "Cambiar contraseña";
$definitions["Change permissions"] = "Cambiar permisos";
$definitions["Change"] = "Cambiar";
$definitions["Channel description"] = "Descripción del canal";
$definitions["Channel List"] = "Lista de canales";
$definitions["Channel title"] = "Título del canal";
$definitions["Channel slug"] = "Canal slug";
$definitions["Channels"] = "Canales";
$definitions["Choose a secure password of at least %s characters"] = "Elije una contrasela segura de al menos %s caracteres";
$definitions["Choose what people will see when they first visit your forum."] = "Elije qué verá la gente cuando hagan su primera visita a la aplicación.";
$definitions["Click on a member's name to remove them."] = "Haz click en los nombres de usuario para eliminarlos.";
$definitions["Close registration"] = "Cerrar registro";
$definitions["Confirm password"] = "Confirma la contraseña";
$definitions["Context"] = "Contexto";
$definitions["Controls"] = "Controles";
$definitions["Conversation"] = "Conversación";
$definitions["Conversations participated in"] = "Participado en conversaciones";
$definitions["Conversations started"] = "Conversaciones iniciadas";
$definitions["Conversations"] = "Conversaciones";
$definitions["Copy permissions from"] = "Copiando permisos desde";
$definitions["Create Channel"] = "Crear canal";
$definitions["Create Group"] = "Crear grupo";
$definitions["Create Member"] = "Crear miembros";
$definitions["Customize how users can become members of your forum."] = "Configurar como los visitantes pueden convertirse en miembros de tu foro.";
$definitions["Dashboard"] = "Escritorio";
$definitions["Default forum language"] = "Lenguaje predeterminado";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Borrar</strong> todas las conversciones para siempre.";
$definitions["Delete Channel"] = "Borrar canal";
$definitions["Delete conversation"] = "Borrar conversaciones";
$definitions["Delete member"] = "Borrar miembro";
$definitions["Delete Member"] = "Borrar Miembro";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Eliminar este comentario del usuario.</strong> Todos los comentarios de este usuario será marcados como borrados, pero podrán ser reconstruídos manuelmente.";
$definitions["Delete"] = "Borrar";
$definitions["Deleted %s by %s"] = "Borrado %s por %s";
$definitions["Disable"] = "No activado";
$definitions["Discard Draft"] = "Descartar borrador";
$definitions["Edit Channel"] = "Editar canal";
$definitions["Edit Group"] = "Editar grupo";
$definitions["Edit member groups"] = "Editar grupos de usuarios";
$definitions["Edit your profile"] = "Editar tu perfil";
$definitions["Edit"] = "Editar";
$definitions["Edited %s by %s"] = "Editado %s por %s";
$definitions["Email me when I'm added to a private conversation"] = "Enviarme un mail cuando sea añadido a una conversación privada";
$definitions["Email me when someone posts in a conversation I have starred"] = "Enviarme un mail cuando alguien comente en una canversación a la que siga";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Activado";
$definitions["Enter a conversation title"] = "Introduzca un título a la conversación";
$definitions["Error"] = "Error";
$definitions["esoTalk version"] = "esoTalk version";
$definitions["Everyone"] = "Todo el mundo";
$definitions["Fatal Error"] = "Uh oh! Haay un error...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "Filtrar por nombre o grupo...";
$definitions["Filter conversations..."] = "Filtrar conversaciones...";
$definitions["Find this post"] = "Encontrar este comentario";
$definitions["First posted"] = "Primer comentario";
$definitions["Forgot Password"] = "Contraseña olvidada";
$definitions["Forum header"] = "Cabecera de la aplicación";
$definitions["Forum language"] = "Idioma de la aplicación";
$definitions["Forum Settings"] = "Configuraciones";
$definitions["Forum Statistics"] = "Estadísticas";
$definitions["Forum title"] = "Título de la aplicación";
$definitions["forumDescription"] = "%s es una aplicación de comentarios %s, y %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Darle a este grupo de moderadores permiso para todos los canales existentes";
$definitions["Global permissions"] = "Permisos globales";
$definitions["Go to top"] = "Ir a la parte superior";
$definitions["Group name"] = "Nombre del grupo";
$definitions["group.administrator"] = "Administrador";
$definitions["group.administrator.plural"] = "Administradores";
$definitions["group.guest"] = "Invitado";
$definitions["group.guest.plural"] = "Invitados";
$definitions["group.member"] = "Usuario";
$definitions["group.member.plural"] = "Usuario";
$definitions["group.Moderator"] = "Moderador";
$definitions["group.Moderator.plural"] = "Moderador";
$definitions["group.suspended"] = "Suspendido";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Los grupos pueden ser usados para categorizar usuarios y darles ciertos privilegios.";
$definitions["Groups"] = "Grupos";

$definitions["Header"] = "Cabecera";
$definitions["Home page"] = "Página de inicio";
$definitions["HTML is allowed."] = "Se permite código HTML.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Si te encuentras con cualquier otro problema o simplemente quiere un poco de ayuda con la instalación, no dude en pedir ayuda en el foro <a href='%s'>Ayuda</a>";
$definitions["Install esoTalk"] = "Instalar EsoTalk";
$definitions["Install My Forum"] = "Instalar mi sistema de comentarios";
$definitions["Installed Languages"] = "Idiomas instalados";
$definitions["Installed Plugins"] = "Pluggins instalados";
$definitions["Installed Skins"] = "Interfaz instalada";
$definitions["Installed skins"] = "Interfaces instalada";
$definitions["is %s"] = "es %s";

$definitions["Jump to last"] = "Ir al último";
$definitions["Jump to unread"] = "Ir a los no leídos";
$definitions["just now"] = "recién";

$definitions["<strong><strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author.."] = "<strong>Mantén los comentarios de este usuario.</strong> todos sus comentarios permanecerán intactos, pero se mostrarán [deleted] para el autor.";

$definitions["label.draft"] = "Borrador";
$definitions["label.locked"] = "Cerrado";
$definitions["label.muted"] = "Silenciado";
$definitions["label.private"] = "Privado";
$definitions["label.sticky"] = "Sticky";
$definitions["Labels"] = "Etiquetas";
$definitions["Last active %s"] = "Última vez activo %s";
$definitions["Latest News"] = "Últimas noticias";
$definitions["Loading..."] = "Cargando...";
$definitions["Lock"] = "Cerrado";
$definitions["Log In"] = "Entrar";
$definitions["Log Out"] = "Salir";

$definitions["Manage Groups"] = "Configurar grupos";
$definitions["Manage Languages"] = "Configurar idiomas";
$definitions["Mark as read"] = "Marcar como leído";
$definitions["Mark all as read"] = "Marcar todo como leído";
$definitions["Maximum size of %s. %s."] = "Tamaño máximo de %s. %s.";
$definitions["Member groups"] = "Grupos de usuario";
$definitions["Member List"] = "Lista de usuario";
$definitions["Members Allowed to View this Conversation"] = "Usuario con permiso para ver esta conversación.";
$definitions["Members Online"] = "Usuarios online";
$definitions["Members"] = "Usuarios";
$definitions["Mobile skin"] = "Interfaz móvil";
$definitions["Moderate"] = "Moderar";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Mover</strong> conversaciones al siguiente canal:";
$definitions["Mute conversation"] = "Silenciar conversaciones";
$definitions["MySQL database"] = "Base de datos MySQL";
$definitions["MySQL host address"] = "Dirección del host de MySQL";
$definitions["MySQL password"] = "Contraseña de MySQL";
$definitions["MySQL queries"] = "Consultas MySQL";
$definitions["MySQL table prefix"] = "Prefijo de las tablas de MySQL";
$definitions["MySQL username"] = "Nombre de usuario de MySQL";
$definitions["MySQL version"] = "Version de MySQL";

$definitions["Name"] = "Nombre";
$definitions["never"] = "nunca";
$definitions["New Conversation"] = "Nueva conversación";
$definitions["New conversations in the past week"] = "Nuevas conversaciones en la semana pasada";
$definitions["New email"] = "Nuevo mail";
$definitions["New members in the past week"] = "Nuevos usuarios en la semana pasada";
$definitions["New password"] = "Nueva contraseña";
$definitions["New posts in the past week"] = "Nuevo comentario en la semana pasada";
$definitions["New username"] = "Nuevo nombre de usuario";
$definitions["Next Step"] = "Siguiente paso";
$definitions["Next"] = "Siguiente";
$definitions["No preview"] = "No previsualización";
$definitions["No"] = "No";
$definitions["Notifications"] = "Notificaciones";
$definitions["Now"] = "Ahora";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Registro abierto";
$definitions["optional"] = "opcional";
$definitions["Order By:"] = "Ordenar por:";
$definitions["Original Post"] = "Comentario original";

$definitions["Page Not Found"] = "Página no encontrada";
$definitions["Password"] = "Contraseña";
$definitions["PHP version"] = "versión de PHP";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Responde";
$definitions["Post count"] = "Número de comentarios";
$definitions["Posts"] = "Comentarios";
$definitions["Preview"] = "Previsualización";
$definitions["Previous"] = "Anterior";

$definitions["quote"] = "Citar";

$definitions["Read more"] = "Leer más";
$definitions["Recent posts"] = "Comentarios recientes";
$definitions["Recover Password"] = "Recuperar contraseña";
$definitions["Registration"] = "Registro";
$definitions["Remove avatar"] = "Eliminar logo";
$definitions["Rename Member"] = "Renombrar al usuario";
$definitions["Reply"] = "Respuesta";
$definitions["Report a bug"] = "Reporta un fallo";
$definitions["Require users to confirm their email address"] = "Requerir a los usuarios confirmación de sus emails";
$definitions["restore"] = "restaurar";

$definitions["Save Changes"] = "Guardar los cambios";
$definitions["Save Draft"] = "Guardar borrador";
$definitions["Search conversations..."] = "Buscar conversación...";
$definitions["Search within this conversation..."] = "Buscar dentro de esta conversación...";
$definitions["Search"] = "Búsqueda";
$definitions["See the private conversations I've had with %s"] = "Ver las conversaciones privadas que tuve con %s";
$definitions["Settings"] = "Configuraciones";
$definitions["Show an image in the header"] = "Mostrar una imagen en la cabecera";
$definitions["Show matching posts"] = "Mostrar comentarios coincidentes";
$definitions["Show the channel list by default"] = "Mostrar la lista del canal por defecto";
$definitions["Show the conversation list by default"] = "Mostrar la lista de la conversación por defecto";
$definitions["Show the forum title in the header"] = "Mostrar el título de la aplicación en la cabecera";
$definitions["Sign Up"] = "Registrarse";
$definitions["Skins"] = "Interfaz";
$definitions["Specify Setup Information"] = "Información del sistema";
$definitions["Star to receive notifications"] = "Seguir para recibir notificaciones";
$definitions["Starred"] = "Siguiendo";
$definitions["Start a conversation"] = "Iniciar una conversasción";
$definitions["Start a private conversation with %s"] = "Iniciar una conversación privada con %s";
$definitions["Start Conversation"] = "Iniciar una conversación";
$definitions["Starting a conversation"] = "Iniciando una conversación";
$definitions["Statistics"] = "Estadísticas";
$definitions["statistic.conversation.plural"] = "%s conversaciones";
$definitions["statistic.conversation"] = "%s conversaciones";
$definitions["statistic.member.plural"] = "%s usuarios";
$definitions["statistic.member"] = "%s usuarios";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s comentarios";
$definitions["statistic.post"] = "%s comentarios";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribed"] = "Suscrito";
$definitions["Subscription"] = "Suscripción";
$definitions["Suspend member"] = "Usuario suspendido";
$definitions["Suspend members."] = "Usuarios suspendidos.";
$definitions["Suspend"] = "Suspender";

$definitions["Uninstall"] = "Desinstar";
$definitions["Unlock"] = "Reabrir";
$definitions["Unmute conversation"] = "Desilenciar conversación";
$definitions["Unstarred"] = "Sin seguir";
$definitions["Unsticky"] = "Sin sticky";
$definitions["Unsubscribe new users by default"] = "Cancelar la suscripción de nuevos usuarios por defecto";
$definitions["Unsubscribed"] = "No suscritos";
$definitions["Unsuspend member"] = "Usuario reactivado";
$definitions["Unsuspend"] = "Reactivar";
$definitions["Untitled conversation"] = "Conversación sin título";
$definitions["Upgrade esoTalk"] = "Actualizar EsoTalk";
$definitions["Use for mobile"] = "Uso para móviles";
$definitions["Use friendly URLs"] = "Usar URLs amigables";
$definitions["Used to verify your account and subscribe to conversations"] = "Usado para verificar tu cuenta y suscribirte a las conversaciones";
$definitions["Username"] = "Nombre de usuario";

$definitions["View %s's profile"] = "Ver el perfil de %s";
$definitions["View all notifications"] = "Ver todas las notificaciones";
$definitions["View more"] = "Ver máas";
$definitions["View your profile"] = "Ver tu perfil";
$definitions["View"] = "Ver";
$definitions["Viewing: %s"] = "Viendo: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> de %s comentarios";

$definitions["Warning"] = "Uh oh, algo está fallando!";
$definitions["Write a reply..."] = "Escribe una respuesta...";

$definitions["Yes"] = "si";
$definitions["You can manage channel-specific permissions on the channels page."] = "Puedes configurar los permisos específicos del canal en la página de los canales.";
$definitions["Your current password"] = "Tu contraseña actual";


// Messages.
$definitions["message.404"] = "Lo sentimos, ha ocurrido un fallo y no se puede mostrar la página intente retroceder y clickear en otro enlace";
$definitions["message.ajaxDisconnected"] = "Ha sido imposible comunicarse con el servidor. Espera unos segundos y <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>vuelve a intentarlo</a>, o <a href='' onclick='window.location.reload();return false'>actualiza la página</a>.";
$definitions["message.ajaxRequestPending"] = "Todavía estamos procesando tus datos! Si sales de esta página usted puedes perder todos los cambios recientes que has realizado, así que espere unos segundos, ¿ok?";
$definitions["message.avatarError"] = "Hubo un problema al subir tu logo. Asegúrete de que estás utilizando un tipo de imagen válida (como. jpg,. png, o gif.) Y el archivo no es muy, muy grande.";
$definitions["message.cannotDeleteLastChannel"] = "¡Espera!, ¡No puedes borrar este canal! Tienes conversaciones abiertas.";
$definitions["message.changesSaved"] = "Tus cambios se han guardado corerctamente.";
$definitions["message.channelsHelp"] = "Los canales sirven para categorizar las conversaciones en la aplicación. Puedes crear tanto canales como necesites, y ordenarlos pinchando y arrastrando.";
$definitions["message.channelSlugTaken"] = "Esto ya está en uso por otro canal.";
$definitions["message.confirmDelete"] = "¿Estás seguro de que quieres borrar esto? No podrás recuperarlo.";
$definitions["message.confirmDiscardReply"] = "No has guardado este mensaje en tu borrador. ¿Quieres eliminarlo de todas formas?";
$definitions["message.confirmEmail"] = "Antes de que puedsa comenzar a utilizar tu recién creada cuenta, tendrás que confirmar tu dirección de correo electrónico. En el siguiente minuto o dos deberías recibir un mensaje de correo electrónico que contiene un enlace para activar tu cuenta.";
$definitions["message.confirmLeave"] = "¡no has guardado el comentario que se estaba editando! Si sales de esta página, perderás todos los cambios que has hecho. ¿Quieres hacerlo?";
$definitions["message.connectionError"] = "La aplicación no ha podido conectarse a la Base de datos, este fue el error:<br/>%s";
$definitions["message.conversationDeleted"] = "La conversasción fue borrada. ¿Está ok?";
$definitions["message.conversationNotFound"] = "Por alguna razón esta conversación no es visible. Lo más probable es que haya sido borrada? O a lo mejor es una conversación privada, en cuyo casio tendrías que ser invitado a participar para poder verla.";
$definitions["message.cookieAuthenticationTheft"] = "Por razones de seguridad, no se pudo iniciar sesión con tu cookie de recuerdo de sesión. Inicia sesión manualmente.";
$definitions["message.deleteChannelHelp"] = "Si se elimina este canal, no habrá manera de recuperarlo. Todas las conversaciones en este canal puede ser trasladado a otro de tu elección.";
$definitions["message.emailConfirmed"] = "Tu cuenta ha sido validada y ahora puedes comenzar a participar en las conversaciones. ¿Por qué no empezar <a href='".URL("conversation/start")."'>una </ a> ahora mismo?";
$definitions["message.emailDoesntExist"] = "Este email no está registrado. Por favor revísa este campo?";
$definitions["message.emailNotYetConfirmed"] = "¡Necesitas confirmar tu correo electrónico antes de iniciar la sesión! Si tú no recibiste el email de confirmación,  <a href='%s'>haz clic aquí</ a> para vovler a pedir la solicitud.";
$definitions["message.emailTaken"] = "¡Ya hay un usuario con este email!";
$definitions["message.empty"] = "Usted debe llenar este campo.";
$definitions["message.emptyPost"] = "Si , probablemente deberías escribir algo en tu mensaje.";
$definitions["message.emptyTitle"] = "El título de tu conversación no puede estar en blanco. La razón es que este título será un link.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>EsoTalk está instalado.</strong><br/><small>Para reinstalar EsoTalk, Tienes que eliminar <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "Una nueva versión de la aplicación, %s, está disponible.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "Se recomienda tener siempre la última versión de EsoTalk instalado para reducir el riesgo de seguridad. Y bueno, podría haber algunas novedades interesantes";
$definitions["message.esoTalkUpToDate"] = "Tu versión de la aplicación es la última disponible.";
$definitions["message.esoTalkUpToDateHelp"] = "Soy un pobre estudiante universitario que ha dedicado cientos de horas en desarrollo EsoTalk. Si te gusta, por favor, considera donar <a href='%s'  target='_blank'>algo</ a>.";
$definitions["message.fatalError"] = "<p>EsoTalk ha encontrado un error que está haciendo imposible lo que estás intentando haciendo.Aquí hay algunas cosas que usted puede intentar:</ p> \ n <ul>\n<ul><li><strong> <a href='%1\$s'>Inténtalo de nuevo</a></strong></ li>\n<li> Si usted es el administrador de la aplicación, entonces usted puede conseguir <strong> ayuda en  <a href='%2\$s'> esoTalk sitio web</a></strong></li>\n\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>EsoTalk ha encontrado un error que está haciendo imposible lo que estás intentando haciendo.Aquí hay algunas cosas que usted puede intentar:</ p>: \n<ul>\n<li><p>Inténtelo de nuevo.</p></li>\n<li><p>Ir hacia atrás y ver sus opciones</strong> En particular, asegúrese de que su base de datos. es la correcta.</p></li>\n <li><p>Obtenga ayuda. </ strong> Ir al foro <a href='%s'> apoyo esoTalk </a> y la búsqueda para ver si alguien más está teniendo el mismo problema que tú. Si no es así, iniciar una nueva conversación acerca de su problema, incluyendo los detalles de error de abajo. </P></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>EsoTalk ha encontrado un error que está haciendo imposible lo que estás intentando haciendo.Aquí hay algunas cosas que usted puede intentar:</ p>: \n<ul>\n<li><p>Inténtelo de nuevo.</p></li>\n<li><p>Ir hacia atrás y ver sus opciones</strong> En particular, asegúrese de que su base de datos. es la correcta.</p></li>\n <li><p>Obtenga ayuda. </ strong> Ir al foro <a href='%s'> apoyo esoTalk </a> y la búsqueda para ver si alguien más está teniendo el mismo problema que tú. Si no es así, iniciar una nueva conversación acerca de su problema, incluyendo los detalles de error de abajo. </P></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Algo salió mal y el archivo que has seleccionado no pueden cargar. Tal vez sea demasiado grande, o no esté en el formato correcto?";
$definitions["message.fileUploadFailedMove"] = "El archivo que has subido no se puede copiar a su destino. Por favor, póngase en contacto con el administrador del foro.";
$definitions["message.fileUploadNotImage"] = "El archivo que has subido no es una imagen en un formato aceptable.";
$definitions["message.fileUploadTooBig"] = "El archivo seleccionado no se pudo cargar porque es demasiado grande.";
$definitions["message.forgotPasswordHelp"] = "¿Te olvidasted e tu contraseña? No te preocupes, esto sucede muy a menudo. Simplemente introduce tu dirección de correo electrónico y le enviaremos instrucciones sobre cómo configurar una nueva.";
$definitions["message.fulltextKeywordWarning"] = "Ten en cuenta que las palabras clave tienen que tener al menos 4 caracteres de longitud.";
$definitions["message.gambitsHelp"] = "Gambits son frases que describen lo que usted está buscando. Haga clic en un Gambit para insertarlo en el campo de búsqueda. Haga <strong>doble</strong> clic en un Gambits para buscar de inmediato por ella. Palabras clave de búsqueda también funcionan!";
$definitions["message.gdNotEnabledWarning"] = "La extensión <strong>GD</ strong> no está habilitada. <br/><small>Esto es necesario para cambiar el tamaño y guardar avatares. Informa al  administrador para instalar / activarla. </small>";
$definitions["message.greaterMySQLVersionRequired"] = "Usted debe tener <strong> MySQL 4 o superior </ strong> instalado y el <a href='http://php.net/manual/en/mysql.installation.php'  target='_blank'> MySQL extensión activada en PHP </ a>. <br/> <small> Por favor, instalar / actualizar estos dos requisitos o solicitar que su anfitrión o el administrador de instalarlos. </ small>";
$definitions["message.greaterPHPVersionRequired"] = "El servidor debe tener <strong> PHP 5.0.0 o superior </ strong> instalado para ejecutar esoTalk. <br/> <small> Favor, actualice su instalación de PHP o solicitar que su anfitrión o el administrador de actualizar el servidor. </ Small>";
$definitions["message.incorrectLogin"] = "Sus datos de acceso son incorrectos.";
$definitions["message.incorrectPassword"] = "La contraseña es incorrecta.";
$definitions["message.installerAdminHelp"] = "esoTalk utilizará la siguiente información para configurar su cuenta de administrador de la aplicación";
$definitions["message.installerFilesNotWritable"] = "EsoTalk no puede escribir en los siguientes archivos y carpetas: <strong>%s</strong><br/><small> Para resolver esto, debes ir a estos archivos y carpetas en tu cliente de FTP y <strong> chmod </strong> a <strong> 777 </ strong>.</ small>";
$definitions["message.installerMySQLHelp"] = "EsoTalk necesita tener acceso a una base de datos MySQL para almacenar todos los datos de tu aplicación, como las conversaciones y mensajes. Si no está seguro de alguno de estos detalles, es posible que deba preguntar a su proveedor de hosting.";
$definitions["message.installerWelcome"] = "<p>Bienvenido al instalador EsoTalk! Necesitamos unos pocos detalles de tu parte para que podamos instalar tu aplicación. </p>\n<p> Si usted tiene cualquier problema, busque ayuda en el soporte <a href='%s'>EsoTalk foro</ a>.</ p>";
$definitions["message.invalidChannel"] = "Has seleccionado un canal no válido!";
$definitions["message.invalidEmail"] = "Parece que este mail no es válido...";
$definitions["message.invalidUsername"] = "Tienes que elegir un nombre de usuario que tenga entre 3 y 20 caracteres alfanuméricos.";
$definitions["message.javascriptRequired"] = "Por favor activa JavaScript, es imprescindible para el buen funcionamiento de la aplicación.";
$definitions["message.languageUninstalled"] = "El lenguaje está instalado.";
$definitions["message.locked"] = "No puedes responder porque esta conversación está cerrada.";
$definitions["message.loginToParticipate"] = "Para iniciar una conversasción o responder al comentario por favor introduce tus datos de acceso.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Entra</a> o <a href='%2\$s' class='link-join'>regístrate</a> para responder";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Entra</a> para ver algunos canales o conversaciones que pueden estar ocultos para los no usuarios.";
$definitions["message.memberNotFound"] = "No hay ningún usuario con ese nombre.";
$definitions["message.memberNoPermissionView"] = "Este usuario no puede participar porque no tiene suficientes permisos para entrar en el canal de esta conversación.";
$definitions["message.nameTaken"] = "El nombre que has introducido ya está en uso por otro usuario.";
$definitions["message.newSearchResults"] = "No ha habido nueva actividad que haya afectado a los resultados de búsqueda. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s no ha hecho nada en este foro todavía!";
$definitions["message.noMembersOnline"] = "No hay miembros online.";
$definitions["message.noNotifications"] = "No tienes notificaciones.";
$definitions["message.noPermission"] = "No tienes permisos para realizar esta acción.";
$definitions["message.noPermissionToReplyInChannel"] = "No tienes permisos para responder en este canal.";
$definitions["message.noPluginsInstalled"] = "No hay ningún plugin instalado.";
$definitions["message.noSearchResults"] = "No se ha encontrado conversaciones para esta búsqueda.";
$definitions["message.noSearchResultsMembers"] = "No se han encontrado usuarios para esta búsqueda.";
$definitions["message.noSearchResultsPosts"] = "No se ha encontrado comentarios para esta búsqueda.";
$definitions["message.noSkinsInstalled"] = "No hay interfaces instaladas.";
$definitions["message.notWritable"] = "<code>%s</code> is not editable. Prueba <code>chmod</code> <code>777</code>, o si no existiera, <code>chmod</code> en su carpeta superior.";
$definitions["message.pageNotFound"] = "La página que está buscando no se ha encontrado.";
$definitions["message.passwordChanged"] = "Tu contraseña ha sido actualizada. Ahora puedes entrar.";
$definitions["message.passwordEmailSent"] = "Ok, te hemos enviado un correo electrónico con un enlace para restablecer tu contraseña. Revisa tu carpeta de correo no deseado si no recibes dentro del próximo minuto o dos.";
$definitions["message.passwordsDontMatch"] = "No se ha encontrado la contraseña introducida.";
$definitions["message.passwordTooShort"] = "Tu contraseña es demasiado corta.";
$definitions["message.pluginCannotBeEnabled"] = "El plugin <em>%s</em> no se ha podido activar: %s";
$definitions["message.pluginDependencyNotMet"] = "Para activar este plugin, tienes que tener la version %s  %s instalada y activada.";
$definitions["message.pluginUninstalled"] = "El plugin ha sido desintalado.";
$definitions["message.postNotFound"] = "El comentario que estás buscando no se ha encontrado.";
$definitions["message.postTooLong"] = "Tu comentario es demasiado largo. El máximo de caracteres permitidos son %s.";
$definitions["message.preInstallErrors"] = "Existen estos errores en la configuración de EsoTalk. Tienen que ser resueltos antes de poder continuar con la instalación.";
$definitions["message.preInstallWarnings"] = "Existen estos errores en la configuración de EsoTalk. Puedes continuar con la instalación esoTalk sin resolver, pero algunas funciones de  EsoTalk pueden ser limitadas.";
$definitions["message.reduceNumberOfGambits"] = "Reduce el número de Gambits o palabras claves para conseguir un menor número de coincidencias en la búsqueda.";
$definitions["message.registerGlobalsWarning"] = "<strong>register_globals</strong> de PHP está habilitada. <br/> <small> Mientras EsoTalk puede funcionar con esta configuración, se recomienda que se desactive para aumentar la seguridad y para evitar que EsoTalk tenga problemas de funcionamiento.</small>";
$definitions["message.registrationClosed"] = "El reguistro para esta aplicación no esta abierta para el público, se necesita invitación.";
$definitions["message.removeDirectoryWarning"] = "Parece que no has eliminado la carpeta <code>%s</code> que tye hemos recomendado. Esta recomendación es sólo para aseguratse de que los hackers no pueden hacer nada malo.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> está activado.<br/><small>Esto puede causar problemas con Esotalk, pero puedes continuar si no quieres desactivarlo.</small>";
$definitions["message.searchAllConversations"] = "Intenta buscar este término a través de todas las conversaciones.";
$definitions["message.setNewPassword"] = "Escribe tu nueva contraseña";
$definitions["message.skinUninstalled"] = "La interfaz ha sido instalada.";
$definitions["message.suspended"] = "Un moderador ha <strong>suspendido</strong> tu cuenta. Pídele al administrador que te la restituya";
$definitions["message.suspendMemberHelp"] = "La suspensión de %s les impidedirán responder a las conversaciones, iniciar conversaciones, y visualización de conversaciones privadas. Ellos efectivamente tienen los mismos permisos que un no usuario.";
$definitions["message.tablePrefixConflict"] = "El programa de instalación ha detectado que hay otra instalación de EsoTalk en la misma base de datos MySQL con el mismo prefijo en la tabla. <br/> Para sobreescribir esta instalación de EsoTalk, haga clic en 'Instalar mi Foro' de nuevo. <strong> Todos los datos se perderán. </strong> <br/> Si desea crear otra instalación EsoTalk junto a la ya existente, <strong> cambia el prefijo de la tabla </ strong>.";
$definitions["message.unsuspendMemberHelp"] = "Reactivando %s les permitirá participar en conversaciones en este foro de nuevo.";
$definitions["message.upgradeSuccessful"] = "EsoTalk ha sido actualizado correctamente.";
$definitions["message.waitToReply"] = "Debe esperar unos segundos %s entre el inicio o en respuesta a las conversaciones.";
$definitions["message.waitToSearch"] = "Parece que estás tratando de llevar a cabo demasiadas búsquedas. Espera unos segundos %s y vuelve a intentarlo.";


// Emails.
$definitions["email.confirmEmail.body"] = "Alguien (esperamos que seas tú!) se ha registrado asignado a la aplicación '%1\$s' con esta dirección de email.\n\nSi fuera tuya, sólo tienes que seguir el enlace para activar tu cuenta:\n%2\$s";
$definitions["email.confirmEmail.subject"] = "%1\$s, por favor confirma tu direcciónd e email";
$definitions["email.footer"] = "\n\n(Si no quieres recibir más emails de este tipo, <a href='%s'>haz click aquí</a>.)";
$definitions["email.forgotPassword.body"] = "Alquien (esperamos que seas tú!) ha solicitado ua petición de reenvío de contraseña en la aplicación '%1\$s'. Si no quieres cambiar la contraseña tan sólo ignora este email.\n\nSin embargo si quieres recuperar o cambiar tu contraseña, visita el siguiente enlace:\n%2\$s";
$definitions["email.forgotPassword.subject"] = "¿Olvidaste tu contraseña, %1\$s?";
$definitions["email.header"] = "Hola %s!\n\n";
$definitions["email.mention.body"] = "%1\$s Te mencionó en un comentario perteneciente a la conversasción  '%2\$s'.\n\nPara ver el comentario, sigue este link:\n%3\$s";
$definitions["email.mention.subject"] = "%1\$s te menciono en un post";
$definitions["email.privateAdd.body"] = "Has sido agregado a una conversación privada titulada '%1\$s'.\n\nPara ver esta conversación, sigue este link:\n%2\$s";
$definitions["email.privateAdd.subject"] = "Has sido agregado a una conversación privada";
$definitions["email.replyToStarred.body"] = "%1\$s ha respondido en una conversación que sigues: '%2\$s'.\n\nPara ver el nuevo comentario sigue este enlace:\n%3\$s";
$definitions["email.replyToStarred.subject"] = "Hay una nueva respuesta en: '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "autor:";
$definitions["gambit.contributor:"] = "contribución:";
$definitions["gambit.member"] = "usuario";
$definitions["gambit.myself"] = "mi mismo";
$definitions["gambit.draft"] = "borrador";
$definitions["gambit.has attachments"] = "tiene archivos adjuntos";
$definitions["gambit.locked"] = "cerrado";
$definitions["gambit.order by newest"] = "ordenado por más novedoso";
$definitions["gambit.order by replies"] = "ordenado por respuestas";
$definitions["gambit.private"] = "privado";
$definitions["gambit.random"] = "aleatorio";
$definitions["gambit.reverse"] = "atrás";
$definitions["gambit.starred"] = "seguido";
$definitions["gambit.muted"] = "mudo";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "Sin leer";
$definitions["gambit.more results"] = "más resultados";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "activo hoy"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "activo 1 día"; // what it actually evaluates to

$definitions["gambit.has replies"] = "tienes respuestas";
$definitions["gambit.has >0 replies"] = "tienes >0 respuestas";
$definitions["gambit.has >10 replies"] = "tienes >10 respuestas";

$definitions["gambit.has no replies"] = "tienes no respuestas";
$definitions["gambit.has 0 replies"] = "tienes 0 respuestas";

$definitions["gambit.dead"] = "muerto";
$definitions["gambit.active >30 day"] = "activo >30 ´dias";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "segundo";
$definitions["gambit.minute"] = "minuto";
$definitions["gambit.hour"] = "hora";
$definitions["gambit.day"] = "día";
$definitions["gambit.week"] = "semana";
$definitions["gambit.month"] = "mes";
$definitions["gambit.year"] = "año";
$definitions["gambit.last"] = "últimos"; // as in "active last 180 days"
$definitions["gambit.active"] = "activo"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";