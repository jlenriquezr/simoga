<?php

/* * *************************************************************************
 * File          : messages.php
 * Last Modified : 28-11-2012
 * Author        : Division de Sistema - ULADECH
 *
 * Constantes para mensajes. Los mensajes se pueden mostrar directamente con la 
 * funcion alert de javascript.
 *
 * ************************************************************************** */

#Mensajes Comunes 
define('MSG_0000', 'Error en la transacción. No se realizó ninguna operación.');
define('MSG_0001', 'No se puede asignar. Se ha encontrado que el alumno ya tiene asignado beneficios en ese semestre.');
define('MSG_0002', 'No se actualizaron los datos, verifique si existe el registro.');
define('MSG_0003', 'No se eliminaron los datos, verifique si existe el registro.');
define('MSG_0004', 'Se ha autorizado el registro correctamente.');
define('MSG_0005', 'Se ha rechazado el registro correctamente.');
define('MSG_0006', 'La fecha de inicio debe ser mayor a la ultima fecha de termino.');
define('MSG_0007', 'Se ha enviado el registro correctamente.');
define('MSG_0008', '¿Desea enviar el registro?');
define('MSG_0009', 'No puede eliminar el registro debido a que tiene registros asociados, elimine los registros asociados para completar la operación.');
define('MSG_0010', 'No se puede agregar el documento porque el proveedor no tiene una cuenta bancaria predeterminada.');
define('MSG_1000', 'A ocurrido un error inesperado. Consulte con el Administrador del Sistema.');
define('MSG_1001', 'Se guardaron los datos correctamente.');
define('MSG_1002', 'Se actualizaron los datos correctamente.');
define('MSG_1003', 'El proceso se ejecutó correctamente.');
define('MSG_1004', 'Se ha eliminado el registro correctamente.');
define('MSG_1005', 'Se ha anulado el registro correctamente.');
define('MSG_1006', 'Campo requerido.');
define('MSG_1007', 'Debe proporcionar todos los datos antes de actualizar.');
define('MSG_1008', 'No puede eliminar el registro debido a que estan siendo utilizado en otras operaciones.');
define('MSG_1009', '¿Desea imprimir?.');
define('MSG_1010', 'El registro no existe.');
define('MSG_1011', 'No se encontraron registros.');
define('MSG_1012', 'El documento no existe.');
define('MSG_1013', 'El código no existe.');
define('MSG_1015', 'Por favor, corrija.');
define('MSG_1016', '¿Está seguro de guardar los datos?');
define('MSG_1017', '¿Está seguro de actualizar los datos?');
define('MSG_1018', '¿Está seguro de eliminar el registro?');
define('MSG_1019', '¿Está seguro de anular el registro?');
define('MSG_1020', '¿Está seguro de quitar el registro?');
define('MSG_1021', 'El registro ya existe.');
define('MSG_1022', '¿Desea solicitar autorización del registro?');
define('MSG_1023', 'No puede editar el registro debido a que estan siendo utilizado en otras operaciones.');
define('MSG_1024', '¿Está seguro de dar de baja?');
define('MSG_1025', '¿Está seguro de agregar el registro?');
define('MSG_1026', 'El código ya existe.');
define('MSG_1027', '¿Está seguro de rechazar el registro?');
define('MSG_1028', 'Se ha rechazado el registro.');
define('MSG_1029', '¿Está seguro de autorizar el registro?');
define('MSG_1030', 'El documento está anulado.');
define('MSG_1031', 'El documento tiene registros asociados. Anule o elimine los registros asociados para completar la operación.');
define('MSG_1032', 'Se ha desactivado el registro correctamente.'); # antes era MSG_1029
define('MSG_1033', 'No se permiten caracteres extraños.');
define('MSG_1034', 'Editar Registro');
define('MSG_1035', 'Eliminar Registro');
define('MSG_1036', 'Se ha replicado los datos satisfactoriamente.');
define('MSG_1037', 'Los datos a replicar se encuentra registrado.');
define('MSG_1038', 'El comprobante ya fue registrado.');
define('MSG_1039', '¿Está seguro de cambiar el estado del registro?');
define('MSG_1040', 'El estado del registro se ha cambiado correctamente.');
define('MSG_1041', 'El período seleccionado ya se encuentra registrado.');
define('MSG_1042', 'La opción ya se encuentra registrada en la Categoría.');
define('MSG_1043', '¿Desea desbloquear la cotización Nro. ');
define('MSG_1044', 'Esta Cotización ya tiene un pedido y no puede ser desbloqueado');
define('MSG_1045', 'La cotización fue desbloqueada correctamente');

define('MSG_1090', 'El número de documento ya existe.');
define('MSG_1091', 'Registro eliminado de Clientes, pero no sus datos de persona.');
define('MSG_1092', 'No puede editar la descripción porque ya existe.');
define('MSG_1093', '¿Está seguro de desactivar el registro?');
define('MSG_1094', 'El número de cédula no es válido.');
define('MSG_1095', 'Un proceso pendiente está impidiendo terminar la operación. Vuelva a intentar.');


#Mensajes Archivos
define('MSG_1100', 'El tipo de archivo no es correcto.');
define('MSG_1101', 'El formato de archivo no es válido.');
define('MSG_1102', 'Se subió el archivo correctamente.');
define('MSG_1103', 'Se ha importado el archivo correctamente.');
define('MSG_1104', 'Se ha exportado el archivo correctamente.');
define('MSG_1105', 'Se ha generado el archivo correctamente.');
define('MSG_1106', 'El archivo no existe.');
define('MSG_1107', 'El archivo ya existe.');

#Mensajes de Autenticacion
define('MSG_1200', 'La cuenta no es correcta.');
define('MSG_1201', 'El usuario no existe.');
define('MSG_1202', 'La contraseña no es correcta.');
define('MSG_1203', 'Ingrese los datos de la cuenta.');
define('MSG_1204', 'Ingrese el usuario.');
define('MSG_1205', 'Ingrese la contraseña.');
define('MSG_1206', 'La cuenta está inhabilitada.');
define('MSG_1207', 'La cuenta está inhabilitada temporalmente.');
define('MSG_1208', 'La cuenta ha sido inhabilitada.');
define('MSG_1209', 'Por razones de seguridad la cuenta ha sido inhabilitada.');

#Mensajes de Cobranzas
define('MSG_1300', 'Se ha asignado el beneficio correctamente.');
define('MSG_1301', 'Se ha asignado el beneficio correctamente; sin embargo no se ha podido recalcular los compromisos. Por favor revise la cuenta corriente del alumno.');
define('MSG_1302', 'No pueder asignar el beneficio debido a que el alumno ya tiene un beneficio en este semestre.');
define('MSG_1304', 'Imposible guardar, ya existe el costo para estos créditos.'); #interfazCategoriaCosto.php
define('MSG_1305', 'Imposible guardar, el crédito inicial debe ser consecutivo al ultimo crédito guardado.'); #interfazCategoriaCosto.php
define('MSG_1306', 'Imposible guardar, los créditos ya existen para este grupo de alumnos.'); #interfazCategoriaCosto.php
define('MSG_1307', 'Imposible guardar, el concepto ya existe en la lista.'); #interfazCategoriaCosto.php
define('MSG_1308', 'Imposible copiar los costos debido a que el destino ya cuenta con costos, revise los costos del destino.'); #interfazCategoriaCosto.php
define('MSG_1309', 'El comprobante de venta ya se encuentra en otro compromiso.');
define('MSG_1310', 'La fecha de prorroga no puede ser menor que la fecha de vencimiento y la fecha actual.');
define('MSG_1311', 'La fecha de vencimiento ya existe en otra cuota.');
define('MSG_1312', 'Se agrego el concepto correctamente.');
define('MSG_1313', 'Aún no se han pre-establecido los conceptos para matriculas en parametros.');
define('MSG_1314', 'Imposible guardar, la escala de pago para la carrera ya existe.');
define('MSG_1315', 'La contraseña ingresada no es correcta, imposible continuar con el proceso.');
define('MSG_1316', 'No se ha definido el valor de afectación para la matrícula extemporánea.');
define('MSG_1317', 'Se está intentando registrar una fecha de vencimiento que ya existe.');
define('MSG_1318', 'Las escalas de costos se han duplicado satisfactoriamente.');
define('MSG_1319', 'No es posible duplicar las escalas de costos en el destino porque ya existen.');

define('MSG_1400', 'Matrícula habilitada correctamente.'); #interfazHabilitarMatricula.php
define('MSG_1401', 'No es necesario habilitar la matrícula para este alumno porque no tiene deuda pendiente.'); #interfazHabilitarMatricula.php
define('MSG_1402', 'El alumno ya esta habilitado en el semestre.'); #interfazHabilitarMatricula.php
define('MSG_1403', 'No es posible registrar la equivalencia, solo esta permitidos 2x1');



#Mensajes de Contabilidad
define('MSG_3000', 'No se puede agregar el registro porque ya se generó el Voucher.');
define('MSG_3001', '¿Está seguro de guardar el Voucher?');
define('MSG_3002', 'No se puede guardar el voucher porque no se generó el Voucher.');
define('MSG_3003', 'No se puede guardar el voucher porque no se agregó una Cuenta por Pagar.');
define('MSG_3004', 'Se agregó el registro correctamente.');
define('MSG_3005', 'Se generó el voucher correctamente.');
define('MSG_3006', 'Se guardó el voucher correctamente.');
define('MSG_3007', 'No se puede agregar el registro porque está con una moneda distinta.');
define('MSG_3008', 'El telepago se generó correctamente.');
define('MSG_3009', 'El telepago ya existe para esa cuenta bancaria, tipo de planilla, mes y período.');
define('MSG_3010', 'No se puede anular el telepago porque ya está cancelado.');
define('MSG_3011', 'No se puede generar el telepago porque la planilla no esta cerrada para este tipo de planilla, mes y período.');
define('MSG_3012', 'No se puede generar el voucher porque la planilla no esta provisionada para este mes y período.');
define('MSG_3013', 'No se puede generar el telepago porque debe agregar como mínimo un documento.');
define('MSG_3014', '¿Está seguro de generar el Voucher?');
define('MSG_3015', '¿Está seguro de Eliminar la Planilla Actual?');
define('MSG_3016', 'Se realizó el proceso de apertura de planilla correctamente.');
define('MSG_3017', 'Se procesó la planilla correctamente.');
define('MSG_3018', 'Se eliminó la planilla correctamente.');
define('MSG_3019', 'La planilla del mes está CERRADA.');
define('MSG_3020', '¿Está seguro de limpiar la bandeja de Documentos Agregados?');
define('MSG_3040', 'Se realizó la Provisión Contable correctamente.');
define('MSG_3041', '¿Está seguro de Desglosar el registro?');
define('MSG_3042', 'Se autorizó los adelantos.');
define('MSG_3043', 'No se autorizó los adelanto.');
define('MSG_3044', 'No puede realizar la operación debido a que la cuenta bancaria en el período seleccionado está bloqueada.');
define('MSG_3045', '¿Está seguro de bloquear la(s) cuenta(s) seleccionada(s)?');
define('MSG_3046', '¿Está seguro de desbloquear la(s) cuenta(s) seleccionada(s)?');
define('MSG_3047', 'Cuenta(s) bloqueada(s) correctamente');
define('MSG_3048', 'Cuenta(s) desbloqueada(s) correctamente');
define('MSG_3049', 'Cuenta(s) actualizada(s) correctamente');
define('MSG_3050', 'Cuenta(s) migrada(s) correctamente');
define('MSG_3051', 'Ya existen Cuentas para el año seleccionado.');
define('MSG_3052', 'El asiento está descuadrado, por favor corrija el asiento para continuar.');
define('MSG_3053', 'Asiento guardado correctamente.');
define('MSG_3054', 'No se encontraron cambios en el asiento.');
define('MSG_3055', 'No puede realizar la operación debido a que el período seleccionado está bloqueado.');
define('MSG_3056', 'La serie y número ya se encuentran registrados.');
define('MSG_3057', 'El documento a Pagar tiene aplicado el Comprobante de Retencion del IGV.');

#Mensajes de RR.HH
define('MSG_4000', 'Se guardo la rotación con su nuevo cargo como principal y se inhabilitaron los cargos secundarios del trabajador.');
define('MSG_4001', 'No se puede Replicar en el nuevo periodo porque ya existen registros, tiene que eliminar todos los registros del nuevo periodo para continuar.');

#Mensajes de CRM
define('MSG_5001', 'No es posible agregar más postulantes, la capacidad del ambiente no lo permite.');
define('MSG_5002', 'Ya existe una respuesta marcada como Correcto.');
define('MSG_5003', 'El Número de Posición de la pregunta ya existe.');
define('MSG_5004', 'No es posible grabar la respuesta seleccionada, comunique al docente encargado.');
define('MSG_5005', '¿Está seguro de copiar el Examen?');
define('MSG_5006', 'Se realizó la copia correctamente.');
define('MSG_5007', 'Se Proceso la ficha óptica correctamente.');
define('MSG_5008', 'No se encontró en el servidor el archivo seleccionado.');
define('MSG_5009', 'El nuevo código de postulante ingresado no existe.');
define('MSG_5010', 'El nuevo código de postulante ya existe.');
define('MSG_5011', 'Se Proceso los Resultado correctamente.');
define('MSG_5012', 'Se Aplicó los Resultado correctamente.');
define('MSG_5013', 'No es posible agregar más preguntas;  la cantidad de preguntas sobrepasa a lo establecido por la sección.');
define('MSG_5014', 'No es posible agregar esta pregunta; El Puntaje de respuesta correcta sobrepasa a lo establecido por la sección.');
define('MSG_5015', 'No es posible eliminar esta pregunta, ya existen respuestas seleccionadas en esta pregunta.');
define('MSG_5016', 'No es posible guardar su respuesta ya que se venció el tiempo límite.');
define('MSG_5017', 'Tiene que seleccionar una Carrera Profesional.');
define('MSG_5018', 'Se Habilitó la Matrícula correctamente.');
define('MSG_5019', 'Ya existe esa respuesta.');
define('MSG_5020', 'No se puede eliminar el examen porque ya está asignado en una Fase.');
define('MSG_5021', 'No se puede eliminar el examen porque ya rindieron el examen.');
define('MSG_5022', 'No es posible registrar una calificación porque su configuración de fase es sin calificaciones.');
define('MSG_5023', 'No es posible Aplicar Resultados porque su configuración de fase es sin calificaciones.');
define('MSG_5024', 'No es posible agregar esta preguntas; No cuenta con opciones registradas.');
define('MSG_5025', 'No es posible cambiar de carrera; la nueva carrera seleccionada ya no está disponible en esta fase.');
define('MSG_5026', '¿Está seguro de registrar a:?');
define('MSG_5027', 'No es posible continuar, la cantidad de postulantes supera a la capacidad de los ambientes.');
define('MSG_5028', 'Se realizó la distribución de población correctamente.');
define('MSG_5029', 'Los datos enviados de este postulante ya no coinciden, se recomienda buscarlo nuevamente.');
define('MSG_5030', 'No se encontró configurada una Carrera para nivelación.');
define('MSG_5031', 'No se encontró configurada una Curricula para nivelación.');

# 
# clinica odontologica - proveeduria
define('MSG_6001', 'Se ha generado satisfactoriamente la Nota de Salida'); 
define('MSG_6002', 'Se ha anulado la Nota de Salida'); 

#biblioteca
define('MSG_7001', 'No puede eliminar el registro debido a que esta asociado con el tipo de material.');
define('MSG_7002', '¿Está seguro de Duplicar el registro?');
define('MSG_7003', '¿Está seguro de Agrupar el registro?');
define('MSG_7004', 'No puede prestar, el local del material no le corresponde a su local asignado.');
define('MSG_7005', 'No puede prestar, el material no se encuentra en el Estante.');
define('MSG_7006', 'No puede prestar, mantiene sanciones pendiente.');
define('MSG_7007', 'No puede prestar, sobre pasa la cantidad de préstamos permitidos.');
define('MSG_7008', 'No puede prestar, no se encontraron reglas de préstamos configuradas para este tipo de material y tipo de persona.');
define('MSG_7009', 'No puede prestar, la Fecha Termino ingresada sobrepasa lo establecido en la reglas de préstamos configuradas para este tipo de material y tipo de persona.');
define('MSG_7010', 'Se realizó la devolución del material correctamente.');
define('MSG_7011', 'Se realizó la devolución del material correctamente y se generaron sanciones.');
define('MSG_7012', 'No puede realizar la devolución, no se encontraron reglas configuradas.');
define('MSG_7013', 'El Código de barra ingresado no se encuentra prestado.');
define('MSG_7014', '¿Está seguro de Registrar la Devolución?');
define('MSG_7015', 'Se finalizó correctamente el inventario');



define('MSG_8001', 'Al agregarse Ud. como participante, no debe seleccionar el check “Enviar Confirmación”');
define('MSG_8002', 'La fecha de inicio debe ser menor a la fecha fin.');
define('MSG_8003', 'La hora de inicio debe ser menor a la hora fin.');
define('MSG_8004', 'Se ha programado la atención correctamente.');
define('MSG_8005', 'La persona seleccionada ya está registrada en esta actividad.');
define('MSG_8006', 'El horario programado para esta atención se cruza con otra atención.');
define('MSG_8007', 'Para pasar a estado vigente, el registro debe estar activo y cerrado.');
define('MSG_8008', 'Para pasar a estado inactivo, el registro no debe estar vigente.');
define('MSG_8009', 'No se puede eliminar porque existen registros dependientes.');
define('MSG_8010', 'No se puede eliminar porque el registro se encuentra vigente.');
define('MSG_8011', 'No se puede eliminar porque la historia clinica se encuentra redactada.');
define('MSG_8012', '¿Está seguro de cerrar?  Si no ha guardado se puede perder los cambios.');
define('MSG_8013', 'Se terminó con la atención  correctamente.');
define('MSG_8014', 'Se rechazó  la atención  correctamente.');
define('MSG_8015', 'Se ha eliminado el archivo adjunto correctamente.');
define('MSG_8016', 'Ya existe un registro con la sede y el semestre seleccionado.');
define('MSG_8017', '¿Está seguro de Continuar?');
define('MSG_8018', 'No se puede eliminar porque existen modalidades asociadas.');


/**
 * toHTML()
 *           Sí desea mostrar el mensaje en la página, utilize ésta función para convertir 
 *           los caracteres especiales a su respectivo código HTML.
 * 
 */
function toHTML($string) {
    return htmlentities($string);
}
