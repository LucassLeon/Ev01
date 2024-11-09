<?php
include_once '../version1.php';

switch ($_method) {
    case 'GET':
        if ($_authorization === 'Bearer ciisa') {
            $data = array(
                array(
                    'id' => 1,
                    'titulo' => 'Misión',
                    'descripcion' => 'Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad.',     
                ),
                array(
                    'id' => 2,
                    'titulo' => 'Visión',
                    'descripcion' => 'Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas',                  
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

