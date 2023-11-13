
---procedimiento insertar usuarios
DELIMITER //
CREATE PROCEDURE sp_insert_user(
    IN p_email VARCHAR(50),
    IN p_usuario VARCHAR(50),
    IN p_password VARCHAR(50)
)
BEGIN
    INSERT INTO tb_usuario(email, usuario, password) VALUES(p_email, p_usuario, p_password);
END //
DELIMITER 

---registros usuarios
call sp_insert_user('alenkanorabuena@gmail.com','alenora','ale2004');
call sp_insert_user('maricielomartinez@gmail.com','marimar','mari2003');
call sp_insert_user('adrianquispe@gmail.com','adrianquis','adrian2002');
call sp_insert_user('jorgevenegas@gmail.com','jorgevene','jorge2003');

---procedimiento insertar rostros
DELIMITER //
CREATE PROCEDURE sp_insert_rostro(
in p_rostro varchar(50),
in p_caracteristicas varchar(500),
in p_descripcion varchar(500)
)
BEGIN
    INSERT INTO tb_rostro(rostro, caracteristicas, descripcion ) VALUES(p_rostro, p_caracteristicas, p_descripcion);
END //
DELIMITER ;


-- Registro de rostros
CALL sp_insert_rostro(
    'Redondo',
    'La longitud y la anchura del rostro son casi iguales. Las líneas de la mandíbula y la frente son suaves y redondeadas.',
    'Frente ligeramente más ancha que la barbilla, pómulos prominentes. Busca estilos que alarguen visualmente el rostro, como peinados con capas y gafas angulares.'
);

CALL sp_insert_rostro(
    'Cuadrado',
    'La frente, las mejillas y la mandíbula tienen dimensiones similares. La mandíbula es angular.',
    'Frente amplia, pómulos pronunciados, mandíbula cuadrada. Busca peinados que suavicen las líneas angulares, como capas suaves y ondas. Gafas redondas pueden equilibrar las líneas.'
);

CALL sp_insert_rostro(
    'Ovalado',
    'La longitud del rostro es aproximadamente 1.5 veces la anchura. La frente es ligeramente más ancha que la mandíbula. Este tipo de rostro se considera versátil y suele adaptarse bien a una variedad de estilos.',
    'Frente ligeramente más ancha que la barbilla, pómulos prominentes. Busca estilos que alarguen visualmente el rostro, como peinados con capas y gafas angulares.'
);

CALL sp_insert_rostro(
    'Rectangular',
    'La longitud del rostro es mayor que la anchura. La mandíbula puede ser cuadrada o angular.',
    'Frente amplia, pómulos pronunciados, mandíbula cuadrada. Busca peinados que suavicen las líneas angulares, como capas suaves y ondas. Gafas redondas pueden equilibrar las líneas.'
);

CALL sp_insert_rostro(
    'Triangular',
    'La frente es más ancha que la mandíbula. La forma se estrecha hacia la barbilla.',
    'Frente más amplia que la mandíbula, mandíbula afilada. Busca peinados que añadan volumen en la mandíbula y gafas que equilibren la frente.'
);


--procedimiento de insertar cortes
DELIMITER //
CREATE PROCEDURE sp_insert_cortes(
  IN p_nombre_corte varchar(50),
  IN p_descripcion varchar(500),
  IN p_imagen blob,
  IN p_precio double,
  IN p_id_rostro int
)
 BEGIN
 INSERT INTO tb_cortes(nombre_corte, descripcion, imagen,precio, id_rostro) VALUES(p_nombre_corte, p_descripcion, p_imagen, p_precio,p_id_rostro);
 END //
DELIMITER ;
--registros de rostros redondos
call sp_insert_cortes('Pompadour','¡Presentamos el corte Pompadour, la declaración de estilo que redefine la elegancia y la sofisticación en cada mechón! Conquista el mundo con tu look audaz y atrevido, impulsado por la atemporalidad del Pompadour.','C:\xampp\htdocs\imagenes\pompadour.jpg',20.00,1);
call sp_insert_cortes('Blow Out Fade','¡Descubre la revolución en estilo con nuestro espectacular "Blowout Fade"! Este corte de pelo de última moda no solo es un servicio, ¡es una experiencia de transformación que elevará tu estilo a nuevas alturas!','C:\xampp\htdocs\imagenes\blowoutfade.jpg',25.00,1);
call sp_insert_cortes('Quiff','¡Presentamos el corte Quiff, la máxima expresión de estilo y audacia! Prepara tu cabello para un viaje al siguiente nivel de elegancia y distinción con este corte que desafía los límites de la moda. Imagina un estilo que fusiona la actitud rebelde con la sofisticación moderna: eso es el Quiff.','C:\xampp\htdocs\imagenes\quiff.jpg',30.00,1);
call sp_insert_cortes('French crop','¡Introducimos el corte French Crop, la epítome de la elegancia sin esfuerzo y el estilo contemporáneo! Prepárate para una experiencia de corte que combina la sofisticación parisina con la practicidad moderna, todo en un solo look.','C:\xampp\htdocs\imagenes\frenchcrop.jpg',27.00,1);
call sp_insert_cortes('Bro flow','¡Descubre el corte Bro Flow, la fusión perfecta de frescura y actitud relajada que redefine la masculinidad con un toque moderno! Este corte no solo es un estilo; es una declaración de autenticidad y confianza que refleja tu personalidad vibrante.','C:\xampp\htdocs\imagenes\broflow.jpg',25.00,1);
--registros de rostros cuadrados

call sp_insert_cortes('Crew cut','¡Presentamos el corte Crew Cut, la expresión máxima de elegancia y versatilidad en el mundo del estilo masculino! Prepárate para descubrir un corte que combina la sofisticación clásica con un toque contemporáneo, diseñado para aquellos que buscan un look pulido y sin complicaciones.','C:\xampp\htdocs\imagenes\crewcut.webp',30.00,2);
call sp_insert_cortes('Taper fade','¡Haz una declaración de estilo audaz con nuestro increíble "Taper Fade"! Sumérgete en la elegancia y la versatilidad de este corte de cabello de última moda, diseñado para destacar tu individualidad con un toque de sofisticación.','C:\xampp\htdocs\imagenes\taperfade.jpg',30.00,2);
call sp_insert_cortes('Buzz cut','¡Bienvenido al mundo del corte Buzz Cut, la esencia misma de la audacia y la simplicidad! Descubre la elegancia sin esfuerzo y la confianza que viene con este estilo atemporal y versátil, diseñado para aquellos que valoran la comodidad sin sacrificar el estilo.','C:\xampp\htdocs\imagenes\buzzcut.jpg',30.00,2);
call sp_insert_cortes('Comb over','No te conformes con lo común, elige la distinción. El corte Comb Over es la personificación de la elegancia atemporal con un toque moderno. Descubre el equilibrio entre lo clásico y lo contemporáneo con el Comb Over.','C:\xampp\htdocs\imagenes\combover.webp',30.00,2);
call sp_insert_cortes('Spiky','¡Introducing el corte Spiky, la expresión definitiva de rebeldía y estilo audaz! Prepárate para llevar tu look al siguiente nivel con este corte que grita confianza y actitud, diseñado para aquellos que buscan destacar en cualquier multitud.','C:\xampp\htdocs\imagenes\spiky.webp',30.00,2);

--registros de rostros ovalado

call sp_insert_cortes('High Fade','¡Bienvenido a la cima del estilo con nuestro exclusivo "High Fade"! Este corte de pelo redefine la elegancia con una fusión perfecta de audacia y precisión, llevando tu imagen a nuevas alturas de modernidad y distinción!.','C:\xampp\htdocs\imagenes\highfade.jpg',35.00,3);
call sp_insert_cortes('Brush Back','¡Presentamos el corte Brush Back, la manifestación de elegancia relajada y sofisticación moderna! Prepárate para un look que fusiona sin esfuerzo la frescura casual con un toque de refinamiento, diseñado para aquellos que buscan un estilo versátil y lleno de personalidad.','C:\xampp\htdocs\imagenes\brushback.webp',35.00, 3);
call sp_insert_cortes('Faux Hawk','¡Descubre el corte Faux Hawk, la fusión perfecta de rebeldía y elegancia que te llevará al centro de la atención! Prepárate para un look que combina la audacia del mohawk con la sofisticación moderna, diseñado para aquellos que buscan destacar con estilo y actitud.','C:\xampp\htdocs\imagenes\fauxhawk.jpg',35.00, 3);
call sp_insert_cortes('Undercut','¡Presentamos el corte Undercut, la definición de modernidad y estilo que transformará por completo tu apariencia! Prepárate para un look audaz que combina la frescura contemporánea con una actitud atrevida, diseñado para aquellos que buscan una declaración de moda sin igual.','C:\xampp\htdocs\imagenes\undercut.jpg',25.00,3);

--registros de rostros rectangular

call sp_insert_cortes('Low Fade',' ¡Descubre la revolución en cortes de cabello con nuestro espectacular "Low Fade"! Este corte vanguardista combina a la perfección estilo y versatilidad para ofrecerte una apariencia moderna y sofisticada.','C:\xampp\htdocs\imagenes\lowfade.jpg',40.00, 4);
call sp_insert_cortes('Slicked Back','¡Presentamos el corte Slicked Back, la epitome de la elegancia clásica y sofisticación moderna! Prepárate para un look atemporal que fusiona la distinción vintage con un toque contemporáneo, diseñado para aquellos que buscan un estilo pulido y lleno de clase.','C:\xampp\htdocs\imagenes\slickedback.jpg',40.00, 4);
call sp_insert_cortes('Caesar','Imagina un peinado que captura la esencia de la antigua Roma con un giro moderno. El corte Caesar no es simplemente un peinado; es una declaración de estilo que evoca la grandeza de la historia con un toque actual. Nuestros estilistas expertos han perfeccionado cada detalle para crear una apariencia que resalta tus rasgos faciales y emana confianza.','C:\xampp\htdocs\imagenes\caesar.jpg',40.00, 4);
call sp_insert_cortes('Degradado','¡Introducimos el corte de degradado, la manifestación de estilo y precisión en la peluquería moderna! Prepárate para un look que fusiona la técnica experta con la moda contemporánea, diseñado para aquellos que buscan una transición suave y dinámica entre longitudes de cabello.','C:\xampp\htdocs\imagenes\degradado.jpg',40.00, 4);

--registros de rostros triangular

call sp_insert_cortes('Moustache','¡Presentamos el estilo Moustache, la expresión máxima de masculinidad y carácter distintivo! Prepárate para un look que rinde homenaje a la elegancia clásica y añade un toque moderno a tu rostro, diseñado para aquellos que buscan destacar con un toque de sofisticación.','C:\xampp\htdocs\imagenes\moustache.jpg',50.00, 5);
call sp_insert_cortes('Beard','¡Presentamos el combo perfecto: el estilo Beard y Moustache, la expresión definitiva de masculinidad y distinción facial! Prepárate para un look que combina la robustez de una barba bien cuidada con la elegancia distintiva de un bigote, diseñado para aquellos que buscan destacar con un toque de sofisticación y carácter.','C:\xampp\htdocs\imagenes\beard.jpg',50.00, 5);
call sp_insert_cortes('Chin Strap','¡Presentamos el estilo Chin Strap, una declaración de moda audaz y definida para aquellos que buscan destacar con un toque distintivo! Prepárate para un look que destaca la mandíbula con una línea nítida y elegante, diseñado para resaltar la estructura facial con un toque moderno..','C:\xampp\htdocs\imagenes\chin.png',50.00, 5);
call sp_insert_cortes('Flequillo Largo','¡Presentamos el estilo Flequillo Largo, la fusión perfecta de juventud y elegancia desenfadada! Prepárate para un look que agrega un toque juguetón y moderno a tu apariencia, diseñado para aquellos que buscan un peinado que combine comodidad y estilo.','C:\xampp\htdocs\imagenes\flequillolargo.jpeg',50.00, 5);