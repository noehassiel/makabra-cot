@extends('layouts.main')

@section('content')
    <section class="hero">
        <img src="{{ asset('img/back.jpg') }}">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7">
                    <h1>Proposal</h1>
                </div>
                <div class="col-md-4 offset-md-1">
                    <p>Todo proyecto tiene potencial de crecimiento, tu página puede ser más de lo que empezó y estoy aquí
                        para lograr ese objetivo contigo.
                        Ofrezco soluciones de desarrollo web personalizadas y eficientes, utilizando las últimas tecnologías
                        para garantizar la máxima calidad y rendimiento.</p>
                </div>
                <div class="col-md-12 pb-2">
                    <hr>
                    <div class="row justify-content-between">
                        <div class="col-md-4 row">
                            <div class="col-6">
                                <h5>Cliente:</h5>
                                <p>Derch</p>
                            </div>
                            <div class="col-6">
                                <h5>Fecha:</h5>
                                <p>10/03/2023</p>
                            </div>
                        </div>
                        <div class="col-md-4 row">
                            <div class="col-6">
                                <h5>Por:</h5>
                                <p>Noé Hassiel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dark-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7 offset-md-4">
                    <h1>You know me</h1>
                    <p>Mi misión es crear, diseñar y desarrollar productos útiles, originales y valiosos., entender las
                        tareas del cliente, y ofrecer la solución más relevante y ser un agente de cambio y crecimiento para
                        su empresa.</p>
                    <p>Siempre quise crear cosas nuevas, experiencias únicas, incursionar en el desarrollo web cambió muchas
                        cosas para mí, y desde entonces trato de llevar mi trabajo a nuevos horizontes con cada proyecto,
                        siempre anteponiendo la calidad.</p>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>email</h6>
                            <h4><a href="javascript:void(0)" class="text-white">hello@noehassiel.com</a></h4>
                        </div>
                        <div class="col-md-6">
                            <h6>phone</h6>
                            <h4><a href="javascript:void(0)" class="text-white">+52 (472) 111 8348</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <div class="col-md-7">
                    <h2>Project Brief</h2>
                    <h3>Visión General</h3>
                    <p>Proporcionar una plataforma fácil de usar para la creación y gestión de contenido en línea.</p>
                    <p>El sistema CMS incluirá herramientas para crear y publicar contenido y gestionar usuarios y permisos.
                    </p>
                    <p>Funcionalidades clave:
                    <ul>
                        <li>
                            <p>Creación y publicación de contenido: El sistema permitirá a los usuarios crear y publicar
                                contenido
                                en diferentes formatos, como texto e imágenes.</p>
                        </li>
                        <li>
                            <p>Formulario de Contacto para clientes potenciales.</p>
                        </li>
                        <li>
                            <h4>Posibles extras:</h4>
                            <ol>
                                <li>Publicar vacantes con descriptivas del puesto dentro la página</li>
                                <li>Blog con categorías de publicaciones</li>
                            </ol>
                        </li>
                    </ul>
                    </p>
                    <p>El enfoque del sitio será dirigirse a los administradores de una manera efectiva y realizar una buena
                        organización de contenido a través de
                        un ambiente digital óptimo para dicha conversión.</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h3>Soluciones</h3>
                    <p>El sistema CMS se desarrollará utilizando una combinación de tecnologías, incluyendo HTML, CSS,
                        JavaScript, PHP y una base de datos relacional.</p>
                    <p>El proyecto se dividirá en varias fases, incluyendo la planificación, el diseño, el desarrollo, la
                        prueba y la implementación.</p>
                    <p>Utilizaremos las mejores prácticas de UX/UI para crear una interfaz digital intuitiva,
                        nuestro enfoque orientado a los detalles en la gestión de proyectos, asegurará la ejecución óptima
                        de los entregables con una excelente experiencia para el cliente.</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h3>Por Definir</h3>
                    <p>Los requerimientos técnicos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <h2>Etapas</h2>
                <div class="col-md-12 mb-5">
                    <div class="row">
                        <div class="col-md-2 timeline-bar text-center">
                            <h6>PREP</h6>
                            <div class="bar"></div>
                            <p>1-2 Días</p>
                        </div>
                        <div class="col-md-4 timeline-bar text-center">
                            <h6>Desarrollo</h6>
                            <div class="bar"></div>
                            <p>1 Semanas</p>
                        </div>
                        <div class="col-md-4 timeline-bar text-center">
                            <h6>Implementación</h6>
                            <div class="bar"></div>
                            <p>1 Semanas</p>
                        </div>
                        <div class="col-md-2 timeline-bar text-center">
                            <h6>Testing</h6>
                            <div class="bar"></div>
                            <p>1-2 Días</p>
                        </div>
                    </div>
                    <h5 class="mt-4">Tiempo Estimado: 2 Semanas</h5>
                </div>

                <div class="col-md-3">
                    <h3>Preparación</h3>
                </div>
                <div class="col-md-9">
                    <p>Cada proyecto comienza con un taller para clientes. La reunión incluye a todos los miembros del
                        equipo central que trabajarán en el proyecto.
                        Ésta es una oportunidad para que todos los miembros discutan el alcance y los requerimientos
                        específicos del proyecto y hagan preguntas. De esta manera se asegura que todos los miembros del
                        equipo comprendan la visión y que el alcance esté claramente definido
                        Una vez que el alcance del proyecto esté claramente definido, investigaremos el contexto de la
                        empresa y de sus usuarios finales, realizando una auditoría que nos permita conocer el mercado y los
                        clientes que interactúan, con el objetivo de diseñar los productos centralizados en el consumidor
                        final. </p>
                    <p>Se hará en conjunto un documento de requerimientos técnicos el cual nos explicará como será el
                        funcionamiento del sistema paso por paso. Una vez terminado se entregará al cliente y este tendrá
                        que hacer una revisión del documento y firmarlo para avanzar con el proceso.</p>
                    <p>Este documento nos ayudará para cumplir todos los linemientos establecidos en el sistema y conocer el
                        producto mínimo viable.</p>

                    <small class="text-danger">*En caso de que el cliente requiera otro módulo o funcionamiento fuera del
                        documento de
                        requerimientos técnicos, se tendrá que cotizar aparte y aplazar los tiempos de entrega.</small>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3>Desarrollo</h3>
                </div>
                <div class="col-md-9">
                    <p>La fase de desarrollo en un proyecto de CMS hecho con Laravel es la etapa en la que se construye el
                        sistema CMS y se implementan las funcionalidades clave. Durante esta fase, se realizan las
                        siguientes actividades:</p>
                    <ul>
                        <li>
                            <p>Diseño de la arquitectura: Se diseña la arquitectura del sistema CMS, incluyendo la
                                estructura de la base de datos, las relaciones entre las tablas y la integración con otras
                                tecnologías.</p>
                        </li>
                        <li>
                            <p>Desarrollo de las funcionalidades: Se desarrollan las funcionalidades clave, incluyendo la
                                creación y publicación de contenido y la gestión de usuarios y permisos</p>
                        </li>
                        <li>
                            <p>Integración con Laravel: Se integran las funcionalidades con la plataforma Laravel,
                                utilizando sus herramientas y funcionalidades para construir un sistema CMS eficiente y
                                escalable.</p>
                        </li>
                        <li>
                            <p>Pruebas unitarias: Se realizan pruebas unitarias para asegurarse de que cada una de las
                                funcionalidades funcione correctamente.</p>
                        </li>
                        <li>
                            <p>Desarrollo de la interfaz de usuario: Se desarrolla la interfaz de usuario para el sistema
                                CMS, utilizando HTML, CSS y JavaScript para asegurarse de que sea fácil de usar y atractiva
                                para los usuarios.</p>
                        </li>
                    </ul>
                    <p>En resumen, la fase de desarrollo en un proyecto de CMS hecho con Laravel es la fase clave en la que
                        se construye el sistema y se integran sus funcionalidades clave con la plataforma Laravel. Esta fase
                        es esencial para garantizar un sistema CMS funcional y escalable.</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3>Testing</h3>
                </div>
                <div class="col-md-9">
                    <p>En la etapa de pruebas realizadas por el cliente, se espera que el cliente evalúe el sistema CMS y lo
                        pruebe para asegurarse de que funcione de manera satisfactoria y cumpla con sus requisitos. Durante
                        esta etapa, se realizan las siguientes actividades:</p>
                    <ul>
                        <li>
                            <p>Evaluación: El cliente evalúa el sistema CMS para asegurarse de que cumpla con sus requisitos
                                y esperanzas.</p>
                        </li>
                        <li>
                            <p>Pruebas funcionales: El cliente realiza pruebas funcionales en el sistema CMS para asegurarse
                                de que funcione de manera adecuada y cumpla con los requisitos específicos.</p>
                        </li>
                        <li>
                            <p>Pruebas de usuario: El cliente realiza pruebas de usuario para asegurarse de que el sistema
                                CMS sea fácil de usar y satisfactorio para sus usuarios finales.</p>
                        </li>
                        <li>
                            <p>Notificaiones de errores: El cliente realizará un listado de todos los errores o mejoras que
                                se pueden hacer en el sistema para así irlos solucionando a la par y tener con más rapidez
                                el sistema listo.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-3">
                    <h3 style="font-size:3vw">Implementación</h3>
                </div>
                <div class="col-md-9">
                    <p>La fase de implementación es una de las fases más importantes en un proyecto de CMS, ya que es el
                        momento en que el sistema se pone en marcha y comienza a utilizarse por los usuarios finales.
                        Durante esta fase, se realizan las siguientes actividades:</p>
                    <ul>
                        <li>
                            <p>Configuración del sistema: Se instala y configura el software CMS en el servidor, incluyendo
                                la conexión a la base de datos y la configuración de los servidores de correo electrónico y
                                de seguridad.</p>
                        </li>
                        <li>
                            <p>Integración de los datos: Se importan los datos existentes a la nueva plataforma, incluyendo
                                la información de los usuarios, el contenido y las configuraciones.</p>
                        </li>
                        <li>
                            <p>Pruebas y verificación: Se realizan pruebas exhaustivas para asegurarse de que el sistema
                                esté funcionando correctamente y cumpla con los requisitos de los usuarios.</p>
                        </li>
                        <li>
                            <p>Capacitación de los usuarios: Se proporciona capacitación a los usuarios finales para que
                                puedan utilizar el sistema CMS eficientemente.</p>
                        </li>
                        <li>
                            <p>Puesta en marcha: Una vez que se han realizado todas las pruebas y verificaciones, se pone en
                                marcha el sistema CMS y se hace un seguimiento de su rendimiento.</p>
                        </li>
                        <li>
                            <p>Soporte post-implementación: Se proporciona soporte post-implementación a los usuarios para
                                resolver cualquier problema que surja con el uso del sistema CMS.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

            </div>
        </div>
    </section>

    <section class="white-s section">
        <div class="container-fluid">
            <div class="row px-3">
                <h2>Presupuesto y Términos + Condiciones</h2>
                <hr>
                <div class="col-md-5 mb-5"
                    style="background-image: url({{ asset('img/d2.jpg') }}); background-repeat: no-repeat;
background-size: cover;">
                </div>
                <div class="col-md-7 mb-5">
                    <h3>Presupuesto</h3>
                    <div class="table-price p-4">
                        <div class="title-table d-flex justify-content-between px-1 align-items-center">
                            <h4>Derch / CMS</h4>
                            <h4>10/Mar/2023</h4>
                        </div>
                        <hr>
                        <div class="d-block d-md-flex px-1 justify-content-between align-items-center mt-5">
                            <div>
                                <h5>Sitio Autoadministrable (CMS)</h5>
                                <ul>
                                    <li>
                                        <p>Requerimientos técnicos</p>
                                    </li>
                                    <li>
                                        <p>Diseño</p>
                                    </li>
                                    <li>
                                        <p>Desarrollo de Front y Back</p>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4>$ 8,000</h4>
                            </div>
                        </div>
                        <hr>
                        <ul>
                            <li>
                                <p>3 Pagos</p>
                                <ul>
                                    <li>
                                        <p>Primero: Depósito del 50% antes de iniciar el proyecto</p>
                                    </li>
                                    <li>
                                        <p>Segundo: Una vez terminada la fase de implementación</p>
                                    </li>
                                    <li>
                                        <p>Tercero: Una vez terminado el Testing para así entregar el proyecto en servidor
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 pe-5">
                    <h3>Términos + Condiciones</h3>
                    <ol>
                        <li>
                            <p>Si el proyecto no se completa dentro de los 45 días posteriores a la fecha estimada de
                                finalización del proyecto o debido a demoras del cliente en proporcionar comentarios,
                                activos, aprobaciones, contenido, dirección, etc., nos reservamos el derecho de discutir y
                                enviar una orden de cambio para acomodar gastos imprevistos debido a la extensión no
                                planificada del proyecto</p>
                        </li>
                        <li>
                            <p>Los plazos del proyecto varían según los tiempos de respuesta de los comentarios de los
                                clientes . Los plazos estimados proporcionados en este documento se basan en la suposición
                                de que el cliente proporcionará comentarios y aprobaciones dentro de una semana después de
                                cada entregable</p>
                        </li>
                        <li>
                            <p>La presente cotización está sujeta a cambios si los alcances del proyecto se modifican</p>
                        </li>
                        <li>
                            <p>La cotización tiene una vigencia de 1 mes a partir de la fecha indicada en este documento
                                para ser aceptada y se respete el precio</p>
                        </li>
                        <li>
                            <p>No esta incluido precios de:
                            <ul>
                                <li>Dominio</li>
                                <li>Servidor</li>
                                <li>Certificado de seguridad</li>
                                <li>Servidor para correos electrónicos</li>
                            </ul>
                            </p>
                        </li>
                        <li>
                            <p>Es necesario tener la infraestructura web apta para la funcionalidad del sitio. El cliente
                                proveerá de esta</p>
                        </li>
                        <li>
                            <p>El código es propiedad intelectual de @noehassiel</p>
                        </li>
                        <li>
                            <p>@noehassiel tendrá derecho a utilizar la imagen gráfica desarrollada únicamente para
                                portafolio de trabajo</p>
                        </li>
                        <li>
                            <p>El cliente deberá cumplir con sus tareas para que el sistema funcione manera optima y se
                                entregue en los tiempos pactados. </p>
                        </li>
                        <li>
                            <p>Las tareas de cliente son:
                            <ol>
                                <li>Leer, revisión, comentarios y aprobación de requerimientos técnicos.</li>
                                <li>Brindar todos los puntos necesarios de infraestructura web antes de iniciar el proyecto
                                </li>
                                <li>Realizar las pruebas del sistema y hacer listado de todos los errores o comentarios.
                                </li>
                            </ol>
                            </p>
                        </li>
                        <li>
                            <p>Una vez entregado el proyecto inicia la garantía de <strong>30 días </strong> donde se podrán
                                hacer cambios
                                (todos relacionados con funcionamiento y/o contenido, no funcionalidad. En caso de ser así
                                se cotizará aparte.). <strong> Después de los 30 días cualquier cambio se cobrará
                                    aparte.</strong></p>
                        </li>
                    </ol>
                </div>
                <div class="col-md-5 mb-5"
                    style="background-image: url({{ asset('img/download.jpg') }});background-repeat: no-repeat;
background-size: cover;">
                </div>
            </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header align-items-baseline">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Obten tu cotización</h1>
                        <p>Si quieres descargar la cotización ingresa la contraseña que se proporciono y tu correo para que
                            te llegue.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('send.email') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Nombre</label>
                            <input type="text" name="name" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="mb-1">Contraseña</label>
                            <input type="password" id="pass" name="password" class="form-control">
                        </div>

                        <button id="sub" class="btn btn-outline-light w-100" style="display: none"
                            type="submit">Obtener</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#pass').blur(function(e) {
                e.preventDefault();


                var password = $('#pass').val();

                var correct = 'WxjuZ2bqLTY9';

                if (password == correct) {

                    $('#sub').show();

                } else {
                    $("#pass").effect("shake");
                    $('#pass').val('');
                    $('#pass').css('border-color', 'red');
                    $('#pass').attr('placeholder', 'Esa no es eee, intenta de nuevo');
                }
            });
        });
    </script>
@endpush
