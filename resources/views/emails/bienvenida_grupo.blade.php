<!DOCTYPE html>

<head>
    <style type="text/css">
        .rollover:hover .rollover-first {
            max-height: 0px !important;
            display: none !important;
        }

        .rollover:hover .rollover-second {
            max-height: none !important;
            display: block !important;
        }

        .rollover span {
            font-size: 0px;
        }

        u+.body img~div div {
            display: none;
        }

        #outlook a {
            padding: 0;
        }

        span.MsoHyperlink,
        span.MsoHyperlinkFollowed {
            color: inherit;
            mso-style-priority: 99;
        }

        a.es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors],
        #MessageViewBody a {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        @media only screen and (max-width:600px) {
            .es-p-default {}

            *[class="gmail-fix"] {
                display: none !important
            }

            p,
            a {
                line-height: 150% !important
            }

            h1,
            h1 a {
                line-height: 120% !important
            }

            h2,
            h2 a {
                line-height: 120% !important
            }

            h3,
            h3 a {
                line-height: 120% !important
            }

            h4,
            h4 a {
                line-height: 120% !important
            }

            h5,
            h5 a {
                line-height: 120% !important
            }

            h6,
            h6 a {
                line-height: 120% !important
            }

            .es-header-body p {}

            .es-content-body p {}

            .es-footer-body p {}

            .es-infoblock p {}

            h1 {
                font-size: 36px !important;
                text-align: left
            }

            h2 {
                font-size: 26px !important;
                text-align: left
            }

            h3 {
                font-size: 20px !important;
                text-align: left
            }

            h4 {
                font-size: 24px !important;
                text-align: left
            }

            h5 {
                font-size: 20px !important;
                text-align: left
            }

            h6 {
                font-size: 16px !important;
                text-align: left
            }

            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 36px !important
            }

            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 26px !important
            }

            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 20px !important
            }

            .es-header-body h4 a,
            .es-content-body h4 a,
            .es-footer-body h4 a {
                font-size: 24px !important
            }

            .es-header-body h5 a,
            .es-content-body h5 a,
            .es-footer-body h5 a {
                font-size: 20px !important
            }

            .es-header-body h6 a,
            .es-content-body h6 a,
            .es-footer-body h6 a {
                font-size: 16px !important
            }

            .es-menu td a {
                font-size: 12px !important
            }

            .es-header-body p,
            .es-header-body a {
                font-size: 14px !important
            }

            .es-content-body p,
            .es-content-body a {
                font-size: 16px !important
            }

            .es-footer-body p,
            .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p,
            .es-infoblock a {
                font-size: 12px !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3,
            .es-m-txt-c h4,
            .es-m-txt-c h5,
            .es-m-txt-c h6 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3,
            .es-m-txt-r h4,
            .es-m-txt-r h5,
            .es-m-txt-r h6 {
                text-align: right !important
            }

            .es-m-txt-j,
            .es-m-txt-j h1,
            .es-m-txt-j h2,
            .es-m-txt-j h3,
            .es-m-txt-j h4,
            .es-m-txt-j h5,
            .es-m-txt-j h6 {
                text-align: justify !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3,
            .es-m-txt-l h4,
            .es-m-txt-l h5,
            .es-m-txt-l h6 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-m-txt-r .rollover:hover .rollover-second,
            .es-m-txt-c .rollover:hover .rollover-second,
            .es-m-txt-l .rollover:hover .rollover-second {
                display: inline !important
            }

            .es-m-txt-r .rollover span,
            .es-m-txt-c .rollover span,
            .es-m-txt-l .rollover span {
                line-height: 0 !important;
                font-size: 0 !important;
                display: block
            }

            .es-spacer {
                display: inline-table
            }

            a.es-button,
            button.es-button {
                font-size: 20px !important;
                padding: 10px 20px 10px 20px !important;
                line-height: 120% !important
            }

            a.es-button,
            button.es-button,
            .es-button-border {
                display: inline-block !important
            }

            .es-m-fw,
            .es-m-fw.es-fw,
            .es-m-fw .es-button {
                display: block !important
            }

            .es-m-il,
            .es-m-il .es-button,
            .es-social,
            .es-social td,
            .es-menu {
                display: inline-block !important
            }

            .es-adaptive table,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            .es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            .es-menu td {
                width: 1% !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            .h-auto {
                height: auto !important
            }
        }

        @media screen and (max-width:384px) {
            .mail-message-content {
                width: 414px !important
            }
        }
    </style>
</head>

<body class="body" style="width:100%;height:100%;padding:0;Margin:0">
    <div dir="ltr" class="es-wrapper-color" lang="es" style="background-color:#FAFAFA">
        <table width="100%" cellspacing="0" cellpadding="0" class="es-wrapper" role="none"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FAFAFA">
            <tr>
                <td valign="top" style="padding:0;Margin:0">
                    <table cellpadding="0" cellspacing="0" align="center" class="es-content" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
                        <tr>
                            <td align="center" class="es-info-area" style="padding:0;Margin:0">
                                <table align="center" cellpadding="0" cellspacing="0" bgcolor="#00000000"
                                    class="es-content-body"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                                    role="none">
                                    <tr>
                                        <td align="left" style="padding:20px;Margin:0">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center" class="es-infoblock"
                                                                    style="padding:0;Margin:0">
                                                                    <p
                                                                        style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;letter-spacing:0;color:#CCCCCC;font-size:12px;Margin-bottom:15px">
                                                                        <a target="_blank" href=""
                                                                            style="mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px">View
                                                                            online version</a>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" align="center" class="es-content" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <table bgcolor="#ffffff" align="center" cellpadding="0" cellspacing="0"
                                    class="es-content-body" role="none"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                                    <tr>
                                        <td align="left"
                                            style="Margin:0;padding-top:30px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;font-size:0"><img
                                                                        src="https://elfusgl.stripocdn.email/content/guids/CABINET_0ad29c7add08df7c310a70813b4cedefcd5d78ee7e54c426ca63ed536d962064/images/portada.png"
                                                                        alt="" width="560" class="adapt-img"
                                                                        style="display:block;font-size:14px;border:0;outline:none;text-decoration:none;border-radius:18px">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;padding-top:5px;padding-bottom:5px">
                                                                    <p
                                                                        style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                        Hola Administrador del grupo {{ $grupo->nombre }} </p>
                                                                    <p
                                                                        style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                        ¡Felicitaciones! Has creado exitosamente el
                                                                        grupo <strong> {{ $grupo->nombre }} </strong> para
                                                                        jugar al Amigo Secreto.</p>
                                                                    <p
                                                                        style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                        Para que tus amigos, familiares o compañeros de
                                                                        trabajo se unan al juego, simplemente comparte
                                                                        el siguiente enlace con ellos:</p>
                                                                    <p style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                        <strong> {{ $grupo->url_encrypt_group }} </strong>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px">
                                                                    <span class="es-button-border"
                                                                        style="border-style:solid;border-color:#5c68e2;background:#5c68e2;border-width:2px;display:inline-block;border-radius:5px;width:auto"><a
                                                                            href="{{ $grupo->url_encrypt_group }}"
                                                                            target="_blank" class="es-button"
                                                                            style="mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:20px;padding:10px 30px 10px 30px;display:inline-block;background:#5C68E2;border-radius:5px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:normal;font-style:normal;line-height:24px;width:auto;text-align:center;letter-spacing:0;mso-padding-alt:0;mso-border-alt:10px solid #5C68E2;padding-left:30px;padding-right:30px">Abrir
                                                                            grupo</a></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="padding:0;Margin:0;padding-right:20px;padding-left:20px;padding-top:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="center" valign="top"
                                                        style="padding:0;Margin:0;width:560px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:10px">
                                                                    <p class="es-m-txt-c"
                                                                        style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:26px;letter-spacing:0;color:#333333;font-size:26px;Margin-bottom:15px">
                                                                        <b> ¿Qué deben hacer los participantes? </b>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" class="esdev-adapt-off"
                                            style="Margin:0;padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px">
                                            <table cellpadding="0" cellspacing="0" class="esdev-mso-table"
                                                role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:560px">
                                                <tr>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:31px">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <h3
                                                                                    style="Margin:0;font-family:arial, 'helvetica neue', helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:bold;line-height:24px;color:#333333">
                                                                                    1️⃣</h3>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="es-m-w0" style="padding:0;Margin:0;width:20px"></td>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="right"
                                                            class="es-right" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:509px">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <p
                                                                                    style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                                    Ingresar al link que compartas.</p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" class="esdev-adapt-off"
                                            style="Margin:0;padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px">
                                            <table cellpadding="0" cellspacing="0" class="esdev-mso-table"
                                                role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:560px">
                                                <tr>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:31px">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <h3
                                                                                    style="Margin:0;font-family:arial, 'helvetica neue', helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:bold;line-height:24px;color:#333333">
                                                                                    2️⃣</h3>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="es-m-w0" style="padding:0;Margin:0;width:20px"></td>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="right"
                                                            class="es-right" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:509px">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <p
                                                                                    style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                                    Registrarse con su nombre, una
                                                                                    clave, y sus tres regalos deseados.
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" class="esdev-adapt-off"
                                            style="Margin:0;padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:30px">
                                            <table cellpadding="0" cellspacing="0" class="esdev-mso-table"
                                                role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:560px">
                                                <tr>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:31px">
                                                                    <table width="100%" cellpadding="0"
                                                                        cellspacing="0" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <h3
                                                                                    style="Margin:0;font-family:arial, 'helvetica neue', helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:bold;line-height:24px;color:#333333">
                                                                                    3️⃣</h3>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="es-m-w0" style="padding:0;Margin:0;width:20px"></td>
                                                    <td valign="top" class="esdev-mso-td"
                                                        style="padding:0;Margin:0">
                                                        <table cellpadding="0" cellspacing="0" align="right"
                                                            class="es-right" role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                            <tr>
                                                                <td align="left"
                                                                    style="padding:0;Margin:0;width:509px">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr>
                                                                            <td align="left"
                                                                                style="padding:0;Margin:0">
                                                                                <p
                                                                                    style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px;Margin-bottom:15px">
                                                                                    Esperar al sorteo que tú realizarás
                                                                                    para descubrir quién será su Amigo
                                                                                    Secreto.</p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" align="center" class="es-footer" role="none"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <table align="center" cellpadding="0" cellspacing="0" class="es-footer-body"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:640px"
                                    role="none">
                                    <tr>
                                        <td align="left"
                                            style="Margin:0;padding-right:20px;padding-bottom:20px;padding-left:20px;padding-top:20px">
                                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                    <td align="left" style="padding:0;Margin:0;width:600px">
                                                        <table width="100%" cellpadding="0" cellspacing="0"
                                                            role="none"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr>
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;display:none"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
