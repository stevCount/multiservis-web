<!doctype html>
<html lang="en">

<head>
    <?php
        include './vistas/complementos/header.html';
    ?>
</head>

<body>

    <div class="div-logo text-center">
        <div class="container">
            <img src="assets/img/logo.png" alt="Logo" class="img-inicio animate__animated animate__backInUp">
        </div>
    </div>

    <?php
        include './vistas/complementos/nav/navbar.html';
    ?>

    <div class="content">

        <section class="pqr">
            <form action="/PQRMovil/PQR/Radicar" id="form-Radicar" method="post" novalidate="novalidate">    <div id="divMain" class="container">
                <input data-val="true" data-val-number="The field idModel must be a number." data-val-required="The idModel field is required." id="idModel" name="idModel" type="hidden" value="805594">
                <input id="ReversionPagosElec_IdReversionPago" name="ReversionPagosElec.IdReversionPago" type="hidden" value="919151">
                <input id="Facebook" name="Facebook" type="hidden" value="">
                <input id="Segmento" name="Segmento" type="hidden" value="MOVIL">
                <input id="Evidente_MotivosAValidar" name="Evidente.MotivosAValidar" type="hidden" value=",240,273,">
                <input data-val="true" data-val-number="The field EsValido must be a number." data-val-required="The EsValido field is required." id="Evidente_EsValido" name="Evidente.EsValido" type="hidden" value="0">
                <input id="PqrAbierta" name="PqrAbierta" type="hidden" value="">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 ">
                        <div class="tituloUno">
                            <b>Multiservis te escucha</b>
                        </div>
                        <p class="parrafoInicial">
                            Es importante para nosotros atender tus solicitudes
                        </p>
                        <hr>
                        <div id="divSelector" style="display: none;" class="row form-group">
                            <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-6 col-sm-push-3 col-xs-12">
                                <div style="display:inline-block; text-align:center;">
                                    <img src="/PQRMovil/Content/images/Selecciona tu producto.png" class="img-responsive">
                                    <img class="btnSelector img-responsive" id="btnSelectorMovil" src="/PQRMovil/Content/images/movil.png">
                                    <img class="btnSelector img-responsive" id="btnSelectorIntMov" src="/PQRMovil/Content/images/internetMovil.png">
                                    <img class="btnSelector img-responsive" style="display: none;" id="btnSelectorFija" src="/PQRMovil/Content/images/fijo.png">
                                    <img class="btnSelector img-responsive" style="display: none;" id="btnSelectorInternet" src="/PQRMovil/Content/images/internet.png">
                                    <img class="btnSelector img-responsive" style="display: none;" id="btnSelectorTv" src="/PQRMovil/Content/images/clarotv.png">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div id="divDatosMain" class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-9 col-sm-push-2 col-xs-12" style="">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="control-label col-lg-3 col-md-3 col-sm-3" style="font-weight:bolder;">
                                            <label for="SelectedClaimTypeId" style="font-weight: bolder;">*Solicitud:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <select class="form-control" data-val="true" data-val-required="Seleccione un Tipo" id="SelectedClaimTypeId" name="SelectedClaimTypeId"><option value="">Seleccione</option><option value="1">Petición</option><option value="2">Queja / Reclamo</option><option value="4">Recurso de reposición</option><option value="3">Recurso de reposición y en subsidio de apelación</option></select>
                                            <span class="field-validation-valid labelsError" data-valmsg-for="SelectedClaimTypeId" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group" id="divBusquedaPQR" style="display: none;">
                                        <div id="divBusquedaPQR" class="col-lg-7 col-lg-push-4 col-md-7 col-md-push-4 col-sm-8 col-sm-push-3 col-xs-12">
                                            <div class="alert alert-danger" style="margin-bottom:2px; text-align: justify;">
                                                Sr usuario si su solicitud corresponde a un recurso de reposición o recurso de reposición en subsidio apelación, y no recuerda el número de radicación de su petición o queja, lo invitamos a que consulte sus peticiones o quejas <a href="#" id="lnkConsulta">aquí</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-3 col-md-3 col-sm-3" style="font-weight:bolder;">
                                            <label for="SelectedReasonType" style="font-weight: bolder;">*Motivo:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <select class="form-control" data-val="true" data-val-required="Seleccione un Motivo" id="SelectedReasonType" name="SelectedReasonType" disabled="disabled"><option value="">Seleccione</option>
        </select>
                                            <span class="field-validation-valid labelsError" data-valmsg-for="SelectedReasonType" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-3 col-md-3 col-sm-3" style="font-weight:bolder;">
                                            <label for="SelectedDocumentType" style="font-weight: bolder;">*Tipo Documento:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <select class="form-control" data-val="true" data-val-required="Seleccione un Tipo de Doc." id="SelectedDocumentType" name="SelectedDocumentType"><option value="">Seleccione</option><option value="1">Cédula de ciudadanía </option><option value="4">Cédula de extranjería</option><option value="2">Nit</option><option value="3">Pasaporte</option></select>
                                            <span class="field-validation-valid labelsError" data-valmsg-for="SelectedDocumentType" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-3 col-md-3 col-sm-3" style="font-weight:bolder;">
                                            <label for="PQR_DocumentNumber" style="font-weight: bolder;">*Número de Documento:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <input maxlength="10" class="form-control" data-val="true" data-val-length="50 caracteres máximo" data-val-length-max="50" data-val-regex="Caracteres inválidos" data-val-regex-pattern="^[0-9]+$" data-val-required="Documento es requerido" id="PQR_DocumentNumber" name="PQR.DocumentNumber" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="PQR.DocumentNumber" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div id="divRowNumeroCun" style="">
                                        <div class="form-group">
                                            <div class="control-label col-lg-3 col-md-3 col-sm-3" style="font-weight:bolder;">
                                                <label for="NumeroCUN" style="font-weight: bolder;">Descripcion:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <textarea name="" id="" cols="80" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <div style="text-align:center">
                                            <input type="button" class="btn btn-danger" style="background-color:#EF3829; color:white" value="Enviar" id="btnValidacionCliente">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div id="divDatosAdic" class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-9 col-sm-push-2 col-xs-12" style="display:none;">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="tituloDos">
                                                Datos Adicionales
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="PQR_CompanyName" style="font-weight: bolder;">*PQR dirijida a:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" id="PQR_CompanyName" name="PQR.CompanyName" type="text" value="COMCEL S.A." disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="PQR_ApplicantFirstName" style="font-weight: bolder;">*Nombre Solicitante o Razón de la Empresa:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" data-val="true" data-val-length="50 caracteres máximo" data-val-length-max="50" data-val-regex="Caracteres inválidos" data-val-regex-pattern="^[a-zA-Z áéíóúñÁÉÍÓÚÑ]+$" data-val-required="El Nombre es requerido" id="PQR_ApplicantFirstName" name="PQR.ApplicantFirstName" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="PQR.ApplicantFirstName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="PQR_ApplicantLastName" style="font-weight: bolder;">*Apellido Solicitante:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" data-val="true" data-val-length="50 caracteres máximo" data-val-length-max="50" data-val-regex="Caracteres inválidos" data-val-regex-pattern="^[a-zA-Z áéíóúñÁÉÍÓÚÑ]+$" data-val-required="El Apellido es requerido" id="PQR_ApplicantLastName" name="PQR.ApplicantLastName" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="PQR.ApplicantLastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="PQR_EmailAddress" style="font-weight: bolder;">*Correo Electrónico para brindar respuesta:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" data-val="true" data-val-length="100 caracteres máximo" data-val-length-max="100" data-val-regex="Introduzca un e-mail válido" data-val-regex-pattern="/w+([-+.']/w+)*@/w+([-.]/w+)*/./w+([-.]/w+)*" data-val-required="El Correo es requerido" id="PQR_EmailAddress" maxlength="100" name="PQR.EmailAddress" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="PQR.EmailAddress" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="ConfirmationEmail" style="font-weight: bolder;">*Confirmar Correo:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" data-val="true" data-val-regex="Introduzca un e-mail válido" data-val-regex-pattern="/w+([-+.']/w+)*@/w+([-.]/w+)*/./w+([-.]/w+)*" data-val-required="Confirmar el correo" id="ConfirmationEmail" name="ConfirmationEmail" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="ConfirmationEmail" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                            <label for="PhoneNumber" style="font-weight: bolder;">Número de Teléfono de Contacto del peticionario o recurrente:</label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <input class="form-control" data-val="true" data-val-regex="Caracteres inválidos" data-val-regex-pattern="^[0-9]+$" id="PhoneNumber" maxlength="10" name="PhoneNumber" type="text" value="">
                                            <span class="field-validation-valid labelsError" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                                <label for="PQR_ClaimObject" style="font-weight: bolder;">*Objeto de la petición, queja / reclamo o recurso:</label>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-8">
                                                <textarea class="form-control" cols="45" data-val="true" data-val-length="3000 caracteres máximo" data-val-length-max="3000" data-val-required="Los objetos de la solicitud son requeridos" id="PQR_ClaimObject" maxlength="3000" name="PQR.ClaimObject" rows="5"></textarea>
                                                <label id="lblConteoObjeto" class="smallInputTextAddress">Quedan 3000 caracteres</label>
                                                <span class="field-validation-valid labelsError" data-valmsg-for="PQR.ClaimObject" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="control-label col-lg-5 col-md-5 col-sm-3" style="font-weight:bolder;">
                                                <label for="PQR_ClaimEvents" style="font-weight: bolder;">*Hechos en que se fundamenta la petición, queja / reclamo o recurso:</label>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-8">
                                                <textarea class="form-control" cols="45" data-val="true" data-val-length="3000 caracteres máximo" data-val-length-max="3000" data-val-required="Los hechos de la solicitud son requeridos" id="PQR_ClaimEvents" maxlength="3000" name="PQR.ClaimEvents" rows="5"></textarea>
                                                <label id="lblConteoHechos" class="smallInputTextAddress">Quedan 3000 caracteres</label>
                                                <span class="field-validation-valid labelsError" data-valmsg-for="PQR.ClaimEvents" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="divRevPagosElect" style="display:none;">
                            <div class="row form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    • Por medio del presente formulario, me permito solicitar a COMCEL S.A., la reversión del pago <select id="ReversionPagosElec_TipoReversion" name="ReversionPagosElec.TipoReversion"><option value="">Seleccione</option>
        <option value="2">Parcial</option>
        <option value="1">Total</option>
        </select> o de obligaciones periódicas, de los siguientes Bienes y/o servicios <input id="ReversionPagosElec_Servicio" maxlength="50" name="ReversionPagosElec.Servicio" type="text" value="">, conforme a lo dispuesto en el Decreto 587 de 2016, de los siguientes términos.
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <div id="divValidacionTotal" class="labelsError" style="display:none;text-align:center">
                                        <ul style="list-style:none;"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        
                        <div class="row">
                            <div id="divAdjuntarArchivos" class="col-lg-10 col-lg-push-1 col-md-12 col-md-push-0 col-sm-9 col-sm-push-2 col-xs-12" style="display:none;">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="tituloDos">
                                            Adjuntar Archivos
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div id="divParrafoAddFija" style="display: none;">
                                                <p style="text-align:justify">
                                                    Solo puede anexar archivos con extensión jpg, gif, png, doc, docx, pdf o ZIP y cada archivo no debe superar los 2MB. Les solicitamos nombrar sus archivos sin caracteres especiales tales como (*, -, +, &amp;, %, #, ( ), " ", /...) para dar respuestas oportunas a sus solicitudes.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="divParrafoAddMovil">
                                                <p style="text-align:justify">
                                                    Solo puede anexar archivos con extensión jpg, gif, png y cada archivo no debe superar los 2MB. Les solicitamos nombrar sus archivos sin caracteres especiales tales como (*, -, +, &amp;, %, #, ( ), " ", /...) para dar respuestas oportunas a sus solicitudes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" style="display:none;" id="archive" name="files[]" multiple="">
                                        <div class="col-lg-10 col-lg-push-1">
                                            <div class="control-label col-lg-3 col-lg-push-1 col-md-3 col-md-push-2 col-sm-5 col-xs-12">
                                                <input type="button" id="btnOpenSelectFile" class="btn btn-danger" style="background-color:#EF3829; color:white" value="Agregar Documentos...">
                                            </div>
                                            <div class="control-label col-lg-4 col-lg-push-1 col-md-4 col-md-push-2 col-sm-7 col-xs-12">
                                                <input type="text" id="txtSelectedFiles" class="form-control" value="Seleccione..." disabled="disabled">
                                            </div>
                                            <div class="control-label col-lg-2 col-lg-push-2 col-md-2 col-md-push-2 col-sm-2 col-sm-push-4 col-xs-12">
                                                <input type="button" value="Adjuntar" class="btn btn-danger" style="background-color:#EF3829; color:white" id="btnAdjuntar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="table table-responsive">
                                            <div id="divDocsAdjuntos">
                                                <table id="tblDocumenbtos" class="table table-responsive"></table>
                                            </div>
                                            <div id="divErrorDocs" style="display:none;">
                                                <div id="divTextoDocError" class="alert alert-danger"></div>
                                            </div>
                                            <div id="divDocstandar" style="display:block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12" style="text-align:center;">
                                <div id="divBotonEnviar" style="display:none;">
                                    <input type="button" class="btn btn-danger" style="background-color:#EF3829; color:white" id="btnEnviar" value="ENVIAR">
                                </div>
                            </div>
                        </div>
                    </div> <!-- div col -->
                </div> <!--div row-->
            </div> <!--divMain-->
        </form>
        </section>

    </div>

    <?php
        include './vistas/complementos/footer.html';
    ?>
</body>

</html>