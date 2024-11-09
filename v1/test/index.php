<?php
include_once '../version1.php';

switch ($_method) {
    case 'GET':
        if ($_authorization === 'Bearer ciisa') {
            $data = array(
                array(
                    'id' => 1,
                    'nombre' => 'Consultoria digital',
                    'descripcion' => 'Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos.',
                    'activo' => true,
                ),
                array(
                    'id' => 2,
                    'nombre' => 'Soluciones multiexperiencia',
                    'descripcion' => 'Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización.',
                    'activo' => true,
                ),
                array(
                    'id' => 3,
                    'nombre' => 'Evolución de ecosistemas',
                    'descripcion' => 'Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia.',
                    'activo' => true,
                ),
                array(
                    'id' => 4,
                    'nombre' => 'Soluciones Low-Code',
                    'descripcion' => 'Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores.',
                    'activo' => true,
                ),
            );
            http_response_code(200);
            echo json_encode(['data' => $data]);
        } else {
            http_response_code(403);
            echo json_encode(['error' => 'Prohibido']);
        }
        break;
    default:
        http_response_code(501);
        echo json_encode(['error' => 'No implementado']);
        break;
}

?>
