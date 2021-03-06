<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultar Archivos</title>
    <link rel="stylesheet" href="CSS/estilosconsulta.css">
</head>
<body>
    <div class="container">
       <div class="formula">
           <h3>PMEJ= 0.15(PAD) + 0.6(CDD) + 0.25(DD)</h3>
           <p><span class="abrv">PAD=</span>Permanencia en Actividades de Docencia</p>
           <p><span class="abrv">CDD=</span>Calidad en el Desempeño de la Docencia</p>
           <p><span class="abrv">DD=</span>Dedicación a la Docencia</p>
       </div>
        <div class="titulo"><h2>PERMANENCIA EN LAS ACTIVIDADES DE DOCENCIA</h2></div>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>ACTIVIDAD</th>
                        <th>NÚMERO ARCHIVOS</th>
                        <th>PUNTOS</th>
                        <th>SUBTOTAL</th>
                        <th>PAD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>I.1</td>
                        <td>ANTIGÜEDAD COMO DOCENTE DE CARRERA DE TIEMPO COMPLETO EN EL IPN.</td>
                        <td name="numarchivos" class="numarchivos">1</td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>
                    </tr>
                    <tr>
                        <td>I.2</td>
                        <td>PRESEA JUAN DE DIOS BÁTIZ</td>
                        <td name="numarchivos" class="numarchivos">1</td>
                        <td name="puntos" class="puntos">300</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>
                    </tr>
                    <tr>
                        <td>I.3</td>
                        <td>MEDALLA IGNACIO MANUEL ALTAMIRANO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>
                    </tr>
                    <tr>
                        <td>I.4</td>
                        <td>PRESEA CARLOS VALLEJO MÁRQUEZ</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>



                    </tr>
                    <tr>
                        <td>I.5</td>
                        <td>DIPLOMA DE MAESTRO DECANO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">400</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>



                    </tr>
                    <tr>
                        <td>I.6</td>
                        <td>PRESEA RAFAEL RAMÍREZ</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">200</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="pad" class="pad">0</td>



                    </tr>
                    <tr class="total">
                        <td colspan="4">TOTAL</td>
                        <td name="totalsubtotal" id="totalsubtotalpad">0</td>
                        <td name="totalpad" id="totalpad">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="titulo"><h2>CALIDAD EN EL DESEMPEÑO DE LA DOCENCIA</h2></div>
        <div class="tabla">
            <table>
                <thead>
                   <tr>
                        <th>CÓDIGO</th>
                        <th>ACTIVIDAD</th>
                        <th>NÚMERO ARCHIVOS</th>
                        <th>PUNTOS</th>
                        <th>SUBTOTAL</th>
                        <th>CDD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="subtema">II.1</th>
                        <th colspan="5" class="subtema">CURSOS IMPARTIDOS (FRENTE A GRUPO) EN EL I.P.N.</th>
                    </tr>
                    <tr id="iniciocdd">
                        <td>II.1.1</td>
                        <td>ANTIGÜEDAD COMO DOCENTE DE CARRERA DE TIEMPO COMPLETO EN EL IPN.</td>
                        <td name="numarchivos" class="numarchivos">1</td>
                        <td name="puntos" class="puntos">0.83</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.1.2</td>
                        <td>LABORATORIO (NMS, NS Y POSGRADO)</td>
                        <td name="numarchivos" class="numarchivos">1</td>
                        <td name="puntos" class="puntos">0.5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.1.3</td>
                        <td>CLASE TEÓRICA – PRÁCTICA (NMS, NS Y POSGRADO)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">0.66</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.1.4</td>
                        <td>CLASE DE SEMINARIO, ESTANCIA O TRABAJO, IMPARTIDA EN LAS SECCIONES DE POSGRADO DEL I.P .N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">0.25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.1.5</td>
                        <td>RESULTADO DE LA EVALUACIÓN DEL DOCENTE FRENTE A GRUPO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.1.6</td>
                        <td>CURSOS POR EL SISTEMA ABIERTO DE ENSEÑANZA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">2.5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.2</th>
                        <th colspan="5" class="subtema">OTROS CURSOS Y/O ESTANCIAS DE ALUMNOS DE GRADUADOS EN EL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>II.2.1</td>
                        <td>FORMACIÓN DE PERSONAL O DE GRUPOS DE INVESTIGACIÓN (B.E.I.F.I.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.2.2</td>
                        <td>ADIESTRAMIENTO TÉCNICO O CURSOS DE CAPACITACIÓN CON RECONOCIMIENTO OFICIAL O REGISTRO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.2.3</td>
                        <td>CURSOS IMPARTIDOS PARA LA FORMACIÓN O ACTUALIZACIÓN DE PROFESORES CON RECONOCIMIENTO OFICIAL O REGISTRO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.3</th>
                        <th colspan="5" class="subtema">SEMINARIOS IMPARTIDOS EN EL PROPIO PLANTEL</th>
                    </tr>
                    <tr>
                        <td>II.3.1</td>
                        <td>NIVEL MEDIO SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.3.2</td>
                        <td>NIVEL LICENCIATURA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.3.3</td>
                        <td>NIVEL POSGRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.4</th>
                        <th colspan="5" class="subtema">DIRECTOR DE TESIS SUSTENTADAS EN EL I.P.N.</th>
                    </tr>
                       <tr>
                        <td>II.4.1</td>
                        <td>TESIS TRADICIONAL DE NIVEL MEDIO SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.4.2</td>
                        <td>TESIS TRADICIONAL DE NIVEL SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">80</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.4.3</td>
                        <td>MAESTRÍA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">250</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>

                    </tr>
                    <tr>
                        <td>II.4.4</td>
                        <td>DOCTORADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.4.5</td>
                        <td>ESPECIALIZACIÓN O DIPLOMADO CON TESINA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">70</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr class="espacio">  <!--Fila en blanco dentro de la tabla-->
                        <td colspan="6">Espacio</td>
                    </tr>
                    <tr>
                        <td>II.5</td>
                        <td>COORDINADOR DE SEMINARIOS DE TITULACIÓN EN EL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.6</td>
                        <td>DIRECTOR DE TESINAS PARA SEMINARIOS DE TITULACIÓN EN EL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.7</td>
                        <td>SINODAL DE EXAMEN PROFESIONAL (N.M.S. Y N.S.) EN EL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.8</td>
                        <td>SINODAL EN SISTEMAS DE TITULACIÓN POR SEMINARIO O EXAMEN GENERAL DE CONOCIMIENTOS EN EL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">3</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.9</td>
                        <td>SINODAL EN EXAMEN PREDOCTORAL O DE GRADO EN EL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.10</th>
                        <th colspan="5" class="subtema">LABORES DE ADMINISTRACIÓN EDUCATIVA EN EL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>II.10.1</td>
                        <td>DIRECTOR DE ESCUELA, CENTRO, UNIDAD O EQUIVALENTE</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.2</td>
                        <td>SUBDIRECTOR DE ESCUELA O JEFE DE LA SECCIÓN DE GRADUADOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">75</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.3</td>
                        <td>JEFE DE DEPARTAMENTO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.4</td>
                        <td>JEFE DE CARRERA O COORDINADOR DE POSGRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.5</td>
                        <td>SUBJEFE DE DEPARTAMENTO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.6</td>
                        <td>JEFE DE SECCIÓN</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.7</td>
                        <td>JEFE DE LABORATORIO O TALLER</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.8</td>
                        <td>SUBJEFE DE CARRERA O JEFE DE OFICINA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.9</td>
                        <td>JEFE DE SERVICIO SOCIAL DE LA ESCUELA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.10</td>
                        <td>JEFE DE SERVICIO SOCIAL DE CARRERA O ESPECIALIDAD</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.11</td>
                        <td>JEFE DE SERVICIO SOCIAL EN EL DEPARTAMENTO O SUBJEFE DE LABORATORIO O TALLER</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.12</td>
                        <td>PRESIDENTE O JEFE DE ACADEMIA DE ASIGNATURAS AFINES</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">40</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.10.13</td>
                        <td>PRESIDENTE DE ACADEMIA DE ASIGNATURA O MÓDULO O COORDINADOR DE ACADEMIA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.11</th>
                        <th colspan="5" class="subtema">FORMACIÓN ACADÉMICA</th>
                    </tr>
                    <tr>
                        <td>II.11.1</td>
                        <td>TÉCNICO A NIVEL MEDIO SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.11.2</td>
                        <td>LICENCIATURA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.12</th>
                        <th colspan="5" class="subtema">ESTUDIOS DE POSGRADO</th>
                    </tr>
                    <tr>
                        <td>II.12.1</td>
                        <td>ESPECIALIZACIÓN CON DIPLOMA Y TESINA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.2</td>
                        <td>ESPECIALIZACIÓN CON DIPLOMA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.3</td>
                        <td>MAESTRÍA CON GRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">400</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.4</td>
                        <td>DOCTORADO CON GRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">600</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.5</td>
                        <td>EXAMEN PREDOCTORAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">150</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.6</td>
                        <td>ESTUDIOS POSDOCTORALES TERMINADOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.12.7</td>
                        <td>ESTANCIAS DE INVESTIGACIÓN</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">5</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.13</th>
                        <th colspan="5" class="subtema">OTROS ESTUDIOS (CURSOS DE ACTUALIZACIÓN Y PROPEDÉUTICOS DE POSGRADO) DEL ÁREA CORRESPONDIENTE</th>
                    </tr>
                    <tr>
                        <td>II.13.1</td>
                        <td>CON EXAMEN</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.13.2</td>
                        <td>SIN EXAMEN</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.14</th>
                        <th colspan="5" class="subtema">PLANES Y PROGRAMAS DE ESTUDIO EN EL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>II.14.1</td>
                        <td>COORDINACIÓN EN LA ELABORACIÓN DE UN PLAN DE ESTUDIOS DE LA CARRERA O POSGRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.14.2</td>
                        <td>PARTICIPACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PLAN DE ESTUDIOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.14.3</td>
                        <td>COORDINACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PROGRAMA DE ESTUDIOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.14.4</td>
                        <td>PARTICIPACIÓN EN LA ELABORACIÓN O ACTUALIZACIÓN DE UN PROGRAMA DE ESTUDIOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.15</th>
                        <th colspan="5" class="subtema">ASESORÍAS DE ALUMNOS EN EL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>II.15.1</td>
                        <td>ASESORÍA DE ALUMNOS EN SERVICIO SOCIAL (SÓLO EN PROYECTOS ACADÉMICOS)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">2</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.15.2</td>
                        <td>ASESORÍA DE ESTUDIANTES PARTICIPANTES EN OLIMPIADAS DE LAS CIENCIAS O CONCURSOS DE SOFTWARE A NIVEL NACIONAL O CONCURSO PIERRE-FERMAT</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.15.3</td>
                        <td>COORDINACIÓN DE PROYECTOS QUE HAYAN CONDUCIDO A LA CREACIÓN DE EMPRESAS DE BASE TECNOLÓGICA (EMPRENDEDORES JUVENILES)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">II.16</th>
                        <th colspan="5" class="subtema">PROGRAMA INSTITUCIONAL DE TUTORÍAS ( A partir de Septiembre de 2002)</th>
                    </tr>
                    <tr>
                        <td>II.16.1</td>
                        <td>COORDINACIÓN DEL PROGRAMA INSTITUCIONAL DE TUTORÍAS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.16.2</td>
                        <td>TUTOR CON ATENCIÓN GRUPAL A ALUMNOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr>
                        <td>II.16.3</td>
                        <td>TUTOR CON ATENCIÓN INDIVIDUAL A ALUMNOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td> <!--Fila en blanco dentro de la tabla-->
                    </tr>
                    <tr>
                        <td>II.17</td>
                        <td>COORDINADOR DE DIPLOMADO EN FORMACIÓN Y ACTUALIZACIÓN DOCENTE PARA UN NUEVO MODELO EDUCATIVO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">150</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="cdd" class="cdd">0</td>



                    </tr>
                    <tr class="total">
                        <td colspan="4">TOTAL</td>
                        <td name="totalsubtotalcdd" id="totalsubtotalcdd">0</td>
                        <td name="totalcdd" id="totalcdd">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="titulo"><h2>DEDICACIÓN A LA DOCENCIA</h2></div>
        <div class="tabla">
            <table>
               <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>ACTIVIDAD</th>
                        <th>NÚMERO ARCHIVOS</th>
                        <th>PUNTOS</th>
                        <th>SUBTOTAL</th>
                        <th>DD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>III.1</td>
                        <td>APUNTES, CUADERNOS Y PROBLEMARIOS DEL CURSO COMPLETO, AVALADOS POR LA ACADEMIA (PUBLICADOS POR EL I.P.N. U OTRAS EDITORIALES)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.2</td>
                        <td>MANUAL DE PRÁCTICAS DE LABORATORIO, AVALADAS POR LA ACADEMIA Y QUE CUBRAN UN CURSO COMPLETO (PUBLICADAS POR EL I.P.N. U OTRAS EDITORIALES)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.3</td>
                        <td>ACTUALIZACIÓN DE APUNTES, MANUALES Y PROBLEMARIOS (PUBLICADOS POR EL I.P.N. U OTRAS EDITORIALES)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.4</td>
                        <td>BANCO DE REACTIVOS SOLICITADOS POR LA D.E.S. O LA D.E.M.S. QUE CUBRAN EL PROGRAMA COMPLETO DE LA ASIGNATURA CON 100 REACTIVOS COMO MÍNIMO E INÉDITOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">40</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.5</td>
                        <td>COLECCIÓN DE DIAPOSITIVAS O DIAPORAMAS QUE CUBRAN EL CURSO COMPLETO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.6</td>
                        <td>MATERIAL DIDÁCTICO PARA LAS COMUNIDADES COMO PARTE DE PROYECTOS INSTITUCIONALES</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.7</td>
                        <td>PARTICIPACIÓN EN PROGRAMAS DE RADIO, TELEVISIÓN O EN VIDEO CASSETTES, COMO GUIONISTA, CONDUCTOR O ASESOR ACADÉMICO O CIENTÍFICO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.8</td>
                        <td>PROTOTIPOS DE APOYO DIDÁCTICO AVALADOS POR LA ACADEMIA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.9</td>
                        <td>TRADUCCIONES PUBLICADAS DE LIBROS, ARTÍCULOS Y TRABAJOS TÉCNICOS (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.10</td>
                        <td>LIBROS ACADÉMICOS PUBLICADOS (CON NÚMERO DE EDICIÓN, NÚMERO DE IDENTIFICACIÓN INTERNACIONAL (ISBN) Y CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.10.1</td>
                        <td>POLILIBRO ACADÉMICO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.11</td>
                        <td>REEDICIÓN DE LIBROS ACADÉMICOS PUBLICADOS
                        (CON NÚMERO DE EDICIÓN, NÚMERO DE IDENTIFICACIÓN INTERNACIONAL (ISBN) Y CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.12</td>
                        <td>CONTRIBUCIÓN POR CAPÍTULO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">70</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.13</td>
                        <td>EVALUACIÓN TÉCNICA DE LIBROS ANTES DE PUBLICARSE</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.14</td>
                        <td>EVALUACIÓN TÉCNICA DE LIBROS DESPUÉS DE PUBLICADOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.15</th>
                        <th colspan="5" class="subtema">PUBLICACIONES Y DIVULGACIÓN CON CRÉDITO AL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>II.15.1</td>
                        <td>TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN NACIONAL CON ARBITRAJE</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">80</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>II.15.2</td>
                        <td>TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN NACIONAL SIN ARBITRAJE</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>II.15.3</td>
                        <td>TRABAJOS DE INVESTIGACIÓN PUBLICADOS EN REVISTAS DE DIFUSIÓN INTERNACIONAL CON ARBITRAJE (THOMSON REUTERS) Y EN REVISTAS NACIONALES INCLUIDAS EN EL PADRÓN DEL CONACYT</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">200</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td>
                    </tr>
                     <tr>
                        <td>III.16</td>
                        <td>PUBLICACIONES CIENTÍFICAS Y TECNOLÓGICAS EN BOLETINES INSTITUCIONALES (REGISTRADOS A TRAVÉS DEL ABOGADO GENERAL), ENSAYOS PUBLICADOS Y ARTÍCULOS DE DIVULGACIÓN SOBRE TEMAS DEL ÁREA O ESPECIALIDAD DEL BECARIO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.17</th>
                        <th colspan="5" class="subtema">TRABAJOS DE INVESTIGACIÓN PRESENTADOS EN CONGRESOS Y REUNIONES CON CRÉDITO AL I.P.N.</th>
                    </tr>
                    <tr>
                        <td>III.17.1</td>
                        <td>INSTITUCIONAL (SIN PONENCIA PUBLICADA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.2</td>
                        <td>INSTITUCIONAL (CON RESUMEN PUBLICADO EN MEMORIA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.3</td>
                        <td>INSTITUCIONAL (PUBLICADO EN EXTENSO)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.4</td>
                        <td>INSTITUCIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.5</td>
                        <td>NACIONAL (SIN PONENCIA PUBLICADA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.6</td>
                        <td>NACIONAL (CON RESUMEN PUBLICADO EN MEMORIA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.7</td>
                        <td>NACIONAL (PUBLICADO EN EXTENSO)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.8</td>
                        <td>NACIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.9</td>
                        <td>NACIONAL (ASISTENCIA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">2</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.10</td>
                        <td>INTERNACIONAL (SIN PONENCIA PUBLICADA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.11</td>
                        <td>INTERNACIONAL (CON RESUMEN PUBLICADO EN MEMORIA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.12</td>
                        <td>INTERNACIONAL (PUBLICADO EN EXTENSO)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.13</td>
                        <td>INTERNACIONAL, DERIVADO DE INVESTIGACIÓN CON REGISTRO EN LA S.I.P. Y PUBLICADO EN EXTENSO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">40</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.14</td>
                        <td>INTERNACIONAL (OTRO TIPO DE PARTICIPACIÓN: MODERADOR, RELATOR, ORGANIZADOR, EVALUADOR DE PONENCIAS, ETC.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.17.15</td>
                        <td>INTERNACIONAL (ASISTENCIA)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">3</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.18</th>
                        <th colspan="5" class="subtema">CICLOS DE CONFERENCIAS ACADÉMICAS (CONFERENCIAS DICTADAS)</th>
                    </tr>
                    <tr>
                        <td>III.18.1</td>
                        <td>CONFERENCIA NACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.18.2</td>
                        <td>CONFERENCIA INTERNACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">15</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.18.3</td>
                        <td>CONFERENCIA PROFESIOGRÁFICA O INSTITUCIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">10</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td>
                    </tr>
                    <tr>
                        <td>III.19</td>
                        <td>INFORME TÉCNICO FINAL DE INVESTIGACIÓN SATISFACTORIA, POR CONTRATO O POR CONVENIO INSTITUCIONAL (POR ENCARGO DE INSTANCIAS EXTERNAS)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.20</td>
                        <td>REGISTRO DE PATENTES (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">200</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.21</td>
                        <td>MARCAS O CERTIFICADOS DE INVENCIÓN (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.22</td>
                        <td>DESARROLLO DE PROCESOS INDUSTRIALES (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.23</td>
                        <td>DISEÑO Y SELECCIÓN DE EQUIPO PARA LA IMPLANTACIÓN DE INDUSTRIAS (CON CRÉDITO AL I.P .N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.24</td>
                        <td>DISEÑO DE PLANTAS PILOTO, PROTOTIPOS E INSTRUMENTOS (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                      <tr>
                        <td>III.25</td>
                        <td>CONSULTORÍA INDUSTRIAL O ASESORÍA A LAS COMUNIDADES, AVALADAS POR EL USUARIO (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">80</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.26</td>
                        <td>DESARROLLO DE TÉCNICAS AGRONÓMICAS, ADMINISTRATIVAS, ETC. (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.27</td>
                        <td>ADAPTACIÓN DE PROCESOS INDUSTRIALES (CON CRÉDITO AL I.P.N.)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.28</th>
                        <th colspan="5" class="subtema">DESARROLLO DE PROGRAMAS DE COMPUTACIÓN CON AVAL DEL USUARIO</th>
                    </tr>
                    <tr>
                        <td>III.28.1</td>
                        <td>DESARROLLO DE PROGRAMAS DE CÓMPUTO DE INVESTIGACIÓN O DIDÁCTICOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.28.2</td>
                        <td>ADAPTACIÓN DE PROGRAMAS DE CÓMPUTO DE INVESTIGACIÓN O DIDÁCTICOS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.29</th>
                        <th colspan="5" class="subtema">PARTICIPACIÓN DE DOCENCIA FUERA DEL I.P.N. POR CONVENIO (SIN CONTRAER COMPROMISOS LABORALES)</th>
                    </tr>
                    <tr>
                        <td>III.29.1</td>
                        <td>NIVEL MEDIO SUPERIOR O SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.29.2</td>
                        <td>NIVEL POSGRADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.29.3</th>
                        <th colspan="5" class="subtema">PARTICIPACIÓN DE DOCENCIA FUERA DEL I.P.N. POR CONVENIO (SIN CONTRAER COMPROMISOS LABORALES)</th>
                    </tr>
                    <tr>
                        <td>III.29.3.1</td>
                        <td>NIVEL MEDIO SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.29.3.2</td>
                        <td>NIVEL SUPERIOR</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.29.3.3</td>
                        <td>MAESTRÍA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.29.3.4</td>
                        <td>DOCTORADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.29.3.5</td>
                        <td>ESPECIALIZACIÓN O DIPLOMADO CON TESINA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">40</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td>
                    </tr>
                    <tr>
                        <td>III.30</td>
                        <td>DOMINIO DEL IDIOMA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.31</th>
                        <th colspan="5" class="subtema">MIEMBRO DEL JURADO PARA OBTENER PREMIOS ACADÉMICOS</th>
                    </tr>
                    <tr>
                        <td>III.31.1</td>
                        <td>MIEMBRO DE JURADO PARA PREMIOS INTERNACIONALES</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">100</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.31.2</td>
                        <td>MIEMBRO DE JURADO PARA PREMIOS NACIONALES</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.31.3</td>
                        <td>MIEMBRO DE JURADO PARA PREMIOS DE CATÁLOGO DE DISTINCIONES ACADÉMICAS</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">25</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td>
                    </tr>
                    <tr>
                        <td>III.32</td>
                        <td>SINODAL PARA EXAMEN DE OPOSICIÓN, POR PARTE DE LA ACADEMIA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">6</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.33</td>
                        <td>EVALUADOR DE PROYECTOS DE INVESTIGACIÓN (CONACYT, CONADE, S.I.P., CINVESTAV Y OTROS SIMILARES)</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.33.1</td>
                        <td>EVALUADOR DE E.D.D.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">500</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <th class="subtema">III.34</th>
                        <th colspan="5" class="subtema">ÁRBITRO DE REVISTAS DEL ÁREA DE LA ESPECIALIDAD DEL PROFESOR</th>
                    </tr>
                    <tr>
                        <td>III.34.1</td>
                        <td>CIRCULACIÓN NACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">30</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.34.2</td>
                        <td>CIRCULACIÓN INTERNACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">40</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                     <tr>
                        <th class="subtema">III.35</th>
                        <th colspan="5" class="subtema">DISTINCIONES ACADÉMICAS RECIBIDAS</th>
                    </tr>
                    <tr>
                        <td>III.35.1</td>
                        <td>PREMIO INTERNACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">3000</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.35.2</td>
                        <td>PREMIO NACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">1000</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="espacio">
                        <td colspan="6">Espacio</td>
                    </tr>
                    <tr>
                        <td>III.36</td>
                        <td>MIEMBRO DEL SISTEMA NACIONAL DE INVESTIGADORES</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.37</td>
                        <td>PROFESOR INVITADO POR UNA INSTITUCIÓN EDUCATIVA DIFERENTE DEL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">60</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.38</td>
                        <td>MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN SU LICENCIATURA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">400</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.39</td>
                        <td>MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN EL EXAMEN DE GRADO DE MAESTRÍA</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">400</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.40</td>
                        <td>MENCIÓN HONORÍFICA OBTENIDA POR EL DOCENTE EN EL DOCTORADO</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">600</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.41</td>
                        <td>COMISIONES ACADÉMICAS EN LAS ESCUELAS, CENTROS O UNIDADES DEL I.P.N.</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">20</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr>
                        <td>III.42</td>
                        <td>COMISIONES ACADÉMICAS A NIVEL INSTITUCIONAL Y NACIONAL</td>
                        <td name="numarchivos" class="numarchivos"></td>
                        <td name="puntos" class="puntos">50</td>
                        <td name="subtotal" class="subtotal">0</td>
                        <td name="dd" class="dd">0</td>



                    </tr>
                    <tr class="total">
                        <td colspan="4">TOTAL</td>
                        <td name="totalsubtotaldd" id="totalsubtotaldd">0</td>
                        <td name="totaldd" id="totaldd">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="boton">
            <input type="button" value="Finalizado">
        </div>
        <div class="boton"><input type="button" value="Terminado"></div>
    </div>
    <script src="JS/scripts.js"></script>
</body>
</html>
