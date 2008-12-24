<?php 

setlocale(LC_TIME, 'ca_ES.UTF-8');

$translations = array(
	'General_Locale' => 'ca.UTF-8',
	'General_TranslatorName' => 'Isaac Sánchez Barrera',
	'General_TranslatorEmail' => 'isb1009@astronomipedia.es',
	'General_EnglishLanguageName' => 'Catalan',
	'General_OriginalLanguageName' => 'Català',
	'General_Unknown' => 'Desconegut',
	'General_Required' => '%s requerit',
	'General_Error' => 'Error',
	'General_Warning' => 'Avís',
	'General_BackToHomepage' => 'Torna a la pàgina principal de Piwik',
	'General_Yes' => 'Sí',
	'General_No' => 'No',
	'General_Delete' => 'Esborra',
	'General_Edit' => 'Edita',
	'General_Ok' => 'D\'acord',
	'General_Close' => 'Tanca',
	'General_Logout' => 'Surt',
	'General_Done' => 'Fet',
	'General_LoadingData' => 'Les dades s\'estan carregant&hellip;',
	'General_ErrorRequest' => 'Ups! Hi ha hagut un problema amb la sol&middot;licitud, torneu-ho a intentar.',
	'General_Next' => 'Seg&uuml;ent',
	'General_Previous' => 'Anterior',
	'General_Search' => 'Cerca',
	'General_Others' => 'Altres',
	'General_Table' => 'Taula',
	'General_Piechart' => 'Gràfic de sectors',
	'General_TagCloud' => 'Núvol d\'etiquetes',
	'General_VBarGraph' => 'Gràfic de barres',
	'General_Refresh' => 'Actualitza la pàgina',
	'General_ColumnNbUniqVisitors' => 'Visitants únics',
	'General_ColumnNbVisits' => 'Visites',
	'General_ColumnLabel' => 'Etiqueta',
	'General_Save' => 'Desa',
	'General_NoDataForGraph' => 'No hi ha dades...',
	'API_QuickDocumentation' => '<h2>Guia ràpida de l\'API</h2><p>Si no teniu dades per a avui, podeu <a href=\'misc/generateVisits.php\' target=\'_blank\'>generar-ne fent servir el Generador de visites</a>.</p><p><strong>Si voleu més informació, passeu-vos per la <a href=\'http://dev.piwik.org/trac/wiki/API\'>documentació oficial de l\'API (en anglès)</a> o les <a href=\'http://dev.piwik.org/trac/wiki/API/Reference\'>referències de l\'API</a>.</strong></p><h2>Autenticació de l\'usuari</h2><p><strong>Si voleu sol&middot;licitar les dades amb un script, una tasca (crontab), etc.</strong>, necessiteu afegir el paràmetre <code><u>&token_auth=%s</u></code> per a poder invocar les URLs de l\'API que necessiten autenticació.</p><p>Aquest <tt>token_auth</tt> és tan secret com el vostre usuari i contrassenya, <strong>no l\'heu de donar a ningú!</strong></p>',
	'API_LoadedAPIs' => 'S\'ha carregat correctament un total de %s API',
	'Actions_SubmenuPages' => 'Pàgines',
	'Actions_SubmenuOutlinks' => 'Enlla&ccedil;os externs',
	'Actions_SubmenuDownloads' => 'Descàrregues',
	'Dashboard_AddWidget' => 'Afegeix un giny&hellip;',
	'Dashboard_DeleteWidgetConfirm' => 'Realment voleu esborrar aquest giny?',
	'Dashboard_SelectWidget' => 'Escolliu el giny que voleu afegir a la consola',
	'Dashboard_AddPreviewedWidget' => 'Afegeix el giny previsualitzat a la consola',
	'Dashboard_WidgetPreview' => 'Previsualització del giny',
	'Dashboard_TitleWidgetInDashboard_js' => 'Aquest giny ja es troba a la consola',
	'Dashboard_TitleClickToAdd_js' => 'Feu clic per a afegir-lo a la consola',
	'Dashboard_LoadingPreview_js' => 'S\'està carregant la previsualització&hellip;',
	'Dashboard_LoadingWidget_js' => 'S\'està carregant el giny&hellip;',
	'Dashboard_WidgetNotFound_js' => 'Aquest giny no s\'ha trobat',
	'CoreHome_NoPrivileges' => 'Heu iniciat la sessió fent servir l\'usuari \'%s\', però sembla que no teniu cap permís configurat al Piwik.<br />Demaneu a l\'administrador que us doni permisos de \'vista\' a algun lloc web.',
	'CoreHome_JavascriptDisabled' => 'És necessari tenir el JavaScript actiu si voleu fer servir el Piwik dins la vista estàndard.<br />Tot i això, sembla que teniu el JavaScript desactivat o el vostre navegador no el suporta.<br />Per a fer servir la vista estàndard, canvieu la configuració del vostre navegador i activeu el JavaScript. Llavors, %1storneu a accedir a la pàgina%2s.<br />',
	'CoreHome_TableNoData' => 'No hi ha cap dada per a aquesta taula.',
	'CoreHome_CategoryNoData' => 'No hi ha dades en aquesta categoria. Proveu d\'<em>incloure tota la població</em>.',
	'CoreHome_ShowJSCode' => 'Mostra el codi JavaScript necessari',
	'CoreHome_IncludeAllPopulation_js' => 'Inclou tota la població',
	'CoreHome_ExcludeLowPopulation_js' => 'Exclou la població baixa',
	'CoreHome_PageOf_js' => '%s de %s',
	'CoreHome_Loading_js' => 'Les dades estan carregant&hellip;',
	'CoreHome_LocalizedDateFormat' => '%A, %d de %B de %Y',
	'CoreHome_PeriodDay' => 'Dia',
	'CoreHome_PeriodWeek' => 'Setmana',
	'CoreHome_PeriodMonth' => 'Mes',
	'CoreHome_PeriodYear' => 'Any',
	'CoreHome_DaySu_js' => 'dg',
	'CoreHome_DayMo_js' => 'dl',
	'CoreHome_DayTu_js' => 'dt',
	'CoreHome_DayWe_js' => 'dc',
	'CoreHome_DayTh_js' => 'dj',
	'CoreHome_DayFr_js' => 'dv',
	'CoreHome_DaySa_js' => 'ds',
	'CoreHome_MonthJanuary_js' => 'Gener',
	'CoreHome_MonthFebruary_js' => 'Febrer',
	'CoreHome_MonthMarch_js' => 'Mar&ccedil;',
	'CoreHome_MonthApril_js' => 'Abril',
	'CoreHome_MonthMay_js' => 'Maig',
	'CoreHome_MonthJune_js' => 'Juny',
	'CoreHome_MonthJuly_js' => 'Juliol',
	'CoreHome_MonthAugust_js' => 'Agost',
	'CoreHome_MonthSeptember_js' => 'Setembre',
	'CoreHome_MonthOctober_js' => 'Octubre',
	'CoreHome_MonthNovember_js' => 'Novembre',
	'CoreHome_MonthDecember_js' => 'Desembre',
	'Installation_Installation' => 'Instal&middot;lació',
	'Installation_InstallationStatus' => 'Estat de la instal&middot;lació',
	'Installation_PercentDone' => '%s%% fet',
	'Installation_NoConfigFound' => 'No s\'ha trobat el fitxer de configuració del Piwik i esteu intentant accedir una pàgina del Piwik.<br /><strong>&nbsp;&nbsp;&raquo;Podeu <a href=\'index.php\'>instal&middot;lar el Piwik ara</a></strong>.<br /><small>Si heu instal·lat el Piwik abans i teniu algunes taules a la vostra base de dades, no us preocupeu; podeu continuar fent servir les mateixes taules i les dades existents es conservaran!</small>',
	'Installation_MysqlSetup' => 'Configuració de la base de dades MySQL',
	'Installation_MysqlErrorConnect' => 'Hi ha hagut un error en l\'intent de connexió amb la base de dades.',
	'Installation_JsTag' => 'Etiqueta JavaScript',
	'Installation_JsTagHelp' => '<p>Si voleu comptar tots els visitants, heu d\'inserir el codi JavaScript a totes les pàgines.</p><p>No és necessari que estiguin fetes en PHP, el Piwik funcionarà a tots els tipus de pàgines (siguin HTML, ASP, Perl o qualsevol altre).</p><p>Aquí teniu el codi que heu d\'inserir: (copieu-lo i aferreu-lo a totes les pàgines)</p>',
	'Installation_Congratulations' => 'Felicitats',
	'Installation_CongratulationsHelp' => '<p>Felicitats! La instal&middot;lació del Piwik ha finalitzat.</p><p>Assegureu-vos que heu inserit el codi JavaScript a totes les pàgines, i espereu els vostres primers visitants!</p>',
	'Installation_GoToPiwik' => 'Vés al Piwik',
	'Installation_SetupWebsite' => 'Configura un lloc',
	'Installation_SetupWebsiteError' => 'Hi ha hagut un problema en el moment d\'afegir el lloc.',
	'Installation_GeneralSetup' => 'Configuració general',
	'Installation_GeneralSetupSuccess' => 'La configuració general ha estat un èxit',
	'Installation_SystemCheck' => 'Comprovació del sistema',
	'Installation_SystemCheckPhp' => 'Versió del PHP',
	'Installation_SystemCheckPdo' => 'Extensió Pdo',
	'Installation_SystemCheckPdoMysql' => 'Extensió Pdo_Mysql',
	'Installation_SystemCheckPdoError' => 'Necessiteu activar les extensions PDO i PDO_MYSQL al vostre fitxer php.ini',
	'Installation_SystemCheckPdoHelp' => 'Si teniu un servidor Windows, podeu afegir les línies següents al vostre php.ini %s<br /><br />Si teniu un servidor Linux, podeu compilar el PHP amb les opcions següents %s<br /><br />Podeu trobar més informació al <a style="color:red" href="http://php.net/pdo"lloc web de PHP</a>.',
	'Installation_SystemCheckPhpXml' => 'Extensió PHP-XML',
	'Installation_SystemCheckWriteDirs' => 'Directoris amb permisos d\'escriptura',
	'Installation_SystemCheckWriteDirsHelp' => 'Per a arreglar aquest error al vostre sistema Linux, proveu d\'entrar les ordres següents',
	'Installation_SystemCheckMemoryLimit' => 'Límit de memòria',
	'Installation_SystemCheckMemoryLimitHelp' => 'En un lloc web amb trànsit elevat, la creació de l\'arxiu pot necessitar més memòria de l\'acceptada actualment.<br />Feu una ullada al \'memory_limit\' del vostre fitxer php.ini si és necessari.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (gràfics)',
	'Installation_SystemCheckGDHelp' => 'Els gràfics petits no funcionaran.',
	'Installation_SystemCheckTimeLimit' => 'El set_time_limit() està permès.',
	'Installation_SystemCheckTimeLimitHelp' => 'En un lloc web amb trànsit elevat, la creació de l\'arxiu pot necessitar més temps de l\'acceptada actualment.<br />Feu una ullada al \'max_execution_time\' del vostre fitxer php.ini si és necessari.',
	'Installation_SystemCheckMail' => 'La funció mail() està permesa',
	'Installation_SystemCheckError' => 'Hi ha hagut un error i s\'ha d\'arreglar abans de que pugueu continuar.',
	'Installation_SystemCheckWarning' => 'El Piwik funcionarà amb normalitat, però algunes funcions potser no estaran disponibles',
	'Installation_Tables' => 'S\'estan creant les taules&hellip;',
	'Installation_TablesWarning' => 'Algunes <span id="linkToggle">taules del Piwik</span> ja estan instal&middot;lades a la base de dades',
	'Installation_TablesFound' => 'Aquestes taules s\'han trobat a la base de dades:',
	'Installation_TablesWarningHelp' => 'Podeu escollir entre fer servir les taules existents de la base de dades o fer una instal&middot;lació neta per a esborrar les dades existents a la base de dades.',
	'Installation_TablesReuse' => 'Fes servir les taules existents',
	'Installation_TablesDelete' => 'Esborra les taules existents',
	'Installation_TablesDeletedSuccess' => 'Les taules del Piwik existents s\'han esborrat amb èxit.',
	'Installation_TablesCreatedSuccess' => 'Les taules s\'han creat amb èxit!',
	'Installation_TablesDeleteConfirm' => 'Realment voleu esborrar les taules del Piwik existents en aquesta base de dades?',
	'Installation_Welcome' => 'Benvingut/da!',
	'Installation_WelcomeHelp' => '<p>El Piwik és un programari d\'anàlisi web de codi obert que facilita la presa d\'informació dels vostres visitants.</p><p>Aquest procés està dividit en %s passos fàcils i trigarà uns 5 minuts.</p>',
	'Login_PluginDescription' => 'Pàgina d\'inici de sessió, dóna les credencials als usuaris',
	'Login_LoginPasswordNotCorrect' => 'L\'usuari o la contrasenya no són correctes',
	'Login_Login' => 'Nom d\'usuari',
	'Login_Password' => 'Contrasenya',
	'Login_LoginOrEmail' => 'Nom d\'usuari o correu-e',
	'Login_LogIn' => 'Inicia la sessió',
	'Login_Logout' => 'Surt',
	'Login_LostYourPassword' => 'Heu perdut la contrasenya?',
	'Login_RemindPassword' => 'Recorda la contrasenya',
	'Login_PasswordReminder' => 'Si us plau, inseriu el vostre nom d\'usuari o el vostre correu-e. Rebreu una contrasenya nova al vostre correu-e.',
	'Login_InvalidUsernameEmail' => 'Aquest usuari i/o direcció de correu-e és invàlid.',
	'Login_MailTopicPasswordRecovery' => 'Recuperació de la contrasenya',
	'Login_MailBodyPasswordRecovery' => 'Hola %1s! La vostra nova contrasenya és %2s<br />Ara ja podeu iniciar la sessió a %3s',
	'Login_PasswordSent' => 'La contrasenya s\'acaba d\'enviar. Reviseu el vostre correu-e',
	'Login_ContactAdmin' => 'Possiblement sigui perquè el vostre proveïdor d\'allotjament ha desactivat la funció mail().<br />Contacteu amb l\'administrador del lloc.',
	'Login_MailPasswordRecoveryBody' => 'Hola %1s, \n\n La nova contrasenya que teniu és: %2s \n\n Ja podeu iniciar la vostra sessió a %3s',
	'CorePluginsAdmin_Plugins' => 'Connectors',
	'CorePluginsAdmin_Activated' => 'Actiu',
	'CorePluginsAdmin_ActivatedHelp' => 'Aquest connector no es pot desactivar',
	'CorePluginsAdmin_Deactivate' => 'Desactiva',
	'CorePluginsAdmin_Activate' => 'Activa',
	'CorePluginsAdmin_MenuPlugins' => 'Connectors',
	'Provider_WidgetProviders' => 'Proveïdors',
	'Provider_SubmenuLocationsProvider' => 'Localitzacions i proveïdors',
	'Referers_SearchEngines' => 'Cercadors',
	'Referers_Keywords' => 'Paraules clau',
	'Referers_DirectEntry' => 'Registre directe',
	'Referers_Websites' => 'Llocs web',
	'Referers_Newsletters' => 'Buttletins d\'informació',
	'Referers_Campaigns' => 'Campanyes',
	'Referers_Evolution' => 'Evolució durant el període',
	'Referers_Type' => 'Tipus de referent',
	'Referers_TypeDirectEntries' => 'Hi ha %s entrades directes',
	'Referers_TypeSearchEngines' => 'Hi ha %s visites provinents dels motors de cerca',
	'Referers_TypeWebsites' => 'Hi ha %s visites provinents d\'altres llocs',
	'Referers_TypeNewsletters' => 'Hi ha %s visites provinents de butlletins',
	'Referers_TypeCampaigns' => 'Hi ha %s visites provinents de campanyes',
	'Referers_Other' => 'Altres',
	'Referers_OtherDistinctSearchEngines' => 'Hi ha %s motors de cerca diferents',
	'Referers_OtherDistinctKeywords' => 'Hi ha %s paraules clau diferents',
	'Referers_OtherDistinctWebsites' => 'Hi ha %1s llocs web diferents (fent servir %2s URLs diferents)',
	'Referers_OtherDistinctCampaigns' => 'Hi ha %s campanyes diferents',
	'Referers_TagCloud' => 'Núvol d\'etiquetes',
	'Referers_SubmenuEvolution' => 'Evolució',
	'Referers_SubmenuSearchEngines' => 'Cercadors i paraules clau',
	'Referers_SubmenuWebsites' => 'Llocs web',
	'Referers_SubmenuCampaigns' => 'Campanyes',
	'Referers_WidgetKeywords' => 'Llistat de paraules clau',
	'Referers_WidgetCampaigns' => 'Llistat de campanyes',
	'Referers_WidgetExternalWebsites' => 'Llistat de llocs web externs',
	'Referers_WidgetSearchEngines' => 'Millors motors de cerca',
	'Referers_WidgetOverview' => 'Resum',
	'SitesManager_Sites' => 'Llocs',
	'SitesManager_JsCode' => 'Codi JavaScript',
	'SitesManager_JsCodeHelp' => 'Aquí teniu el codi JavaScript que heu d\'incloure a totes les pàgines',
	'SitesManager_ShowJsCode' => 'mostra el codi',
	'SitesManager_NoWebsites' => 'No teniu cap lloc que pugueu administrar',
	'SitesManager_AddSite' => 'Afegeix un lloc nou',
	'SitesManager_Id' => 'ID',
	'SitesManager_Name' => 'Nom',
	'SitesManager_Urls' => 'URLs',
	'SitesManager_MenuSites' => 'Llocs',
	'SitesManager_DeleteConfirm_js' => 'Realment voleu esborrar el lloc \'%s\'?',
	'SitesManager_ExceptionDeleteSite' => 'No és possible eliminar aquest lloc ja que és l\'únic configurat. Afegiu un altre lloc primer i, llavors, ja esborrareu aquest.',
	'SitesManager_ExceptionNoUrl' => 'Heu d\'especificar una URL com a mínim.',
	'SitesManager_ExceptionEmptyName' => 'El nom del lloc no pot estar buit.',
	'SitesManager_ExceptionInvalidUrl' => 'La URL \'%s\' no és vàlida.',
	'TranslationsAdmin_MenuTranslations' => 'Traduccions',
	'TranslationsAdmin_MenuLanguages' => 'Idiomes',
	'TranslationsAdmin_Plugin' => 'Connector',
	'TranslationsAdmin_Definition' => 'Definició',
	'TranslationsAdmin_DefaultString' => 'Original (anglès)',
	'TranslationsAdmin_TranslationString' => 'Traducció (idioma actual: %s)',
	'TranslationsAdmin_Translations' => 'Traduccions',
	'TranslationsAdmin_FixPermissions' => 'Si us plau, configureu bé els permisos dels fitxers',
	'TranslationsAdmin_AvailableLanguages' => 'Idiomes disponibles',
	'TranslationsAdmin_AddLanguage' => 'Afegeix un idioma',
	'TranslationsAdmin_LanguageCode' => 'Codi de l\'idioma',
	'TranslationsAdmin_Export' => 'Exporta un idioma',
	'TranslationsAdmin_Import' => 'Importa un idioma',
	'UserCountry_Country' => 'País',
	'UserCountry_Continent' => 'Continent',
	'UserCountry_DistinctCountries' => 'Hi ha %s pa&iuml;sos diferents',
	'UserCountry_SubmenuLocations' => 'Localització',
	'UserCountry_WidgetContinents' => 'Continents',
	'UserCountry_WidgetCountries' => 'Pa&iuml;sos',
	'UserCountry_country_ac' => 'Illes Ascensió',
	'UserCountry_country_ad' => 'Andorra',
	'UserCountry_country_ae' => 'Emirats Àrabs Units',
	'UserCountry_country_af' => 'Afganistan',
	'UserCountry_country_ag' => 'Antigua i Barbuda',
	'UserCountry_country_ai' => 'Anguilla',
	'UserCountry_country_al' => 'Albània',
	'UserCountry_country_am' => 'Armènia',
	'UserCountry_country_an' => 'Antilles Neerlandeses',
	'UserCountry_country_ao' => 'Angola',
	'UserCountry_country_aq' => 'Antàrtida',
	'UserCountry_country_ar' => 'Argentina',
	'UserCountry_country_as' => 'Samoa Nord-americana',
	'UserCountry_country_at' => 'Àustria',
	'UserCountry_country_au' => 'Austràlia',
	'UserCountry_country_aw' => 'Aruba',
	'UserCountry_country_az' => 'Azerbaidjan',
	'UserCountry_country_ba' => 'Bòsnia i Herzegovina',
	'UserCountry_country_bb' => 'Barbados',
	'UserCountry_country_bd' => 'Bangla Desh',
	'UserCountry_country_be' => 'Bèlgica',
	'UserCountry_country_bf' => 'Burkina Faso',
	'UserCountry_country_bg' => 'Bulgària',
	'UserCountry_country_bh' => 'Bahrain',
	'UserCountry_country_bi' => 'Burundi',
	'UserCountry_country_bj' => 'Benin',
	'UserCountry_country_bm' => 'Bermuda',
	'UserCountry_country_bn' => 'Brunei',
	'UserCountry_country_bo' => 'Bolívia',
	'UserCountry_country_br' => 'Brasil',
	'UserCountry_country_bs' => 'Bahames',
	'UserCountry_country_bt' => 'Bhutan',
	'UserCountry_country_bv' => 'Bouvet',
	'UserCountry_country_bw' => 'Botswana',
	'UserCountry_country_by' => 'Bielorússia',
	'UserCountry_country_bz' => 'Belize',
	'UserCountry_country_ca' => 'Canadà',
	'UserCountry_country_cc' => 'Illes Cocos',
	'UserCountry_country_cd' => 'República Democràtica del Congo',
	'UserCountry_country_cf' => 'República Centreafricana',
	'UserCountry_country_cg' => 'República del Congo',
	'UserCountry_country_ch' => 'Suïssa',
	'UserCountry_country_ci' => 'Costa d\'Ivori',
	'UserCountry_country_ck' => 'Illes Cook',
	'UserCountry_country_cl' => 'Xile',
	'UserCountry_country_cm' => 'Camerun',
	'UserCountry_country_cn' => 'Xina',
	'UserCountry_country_co' => 'Colòmbia',
	'UserCountry_country_cr' => 'Costa Rica',
	'UserCountry_country_cs' => 'Sèrbia i Montenegro',
	'UserCountry_country_cu' => 'Cuba',
	'UserCountry_country_cv' => 'Cap Verd',
	'UserCountry_country_cx' => 'Illa Christmas',
	'UserCountry_country_cy' => 'Xipre',
	'UserCountry_country_cz' => 'República Txeca',
	'UserCountry_country_de' => 'Alemanya',
	'UserCountry_country_dj' => 'Djibouti',
	'UserCountry_country_dk' => 'Dinamarca',
	'UserCountry_country_dm' => 'Dominica',
	'UserCountry_country_do' => 'República Dominicana',
	'UserCountry_country_dz' => 'Algèria',
	'UserCountry_country_ec' => 'Equador',
	'UserCountry_country_ee' => 'Estònia',
	'UserCountry_country_eg' => 'Egipte',
	'UserCountry_country_eh' => 'Sàhara Occidental',
	'UserCountry_country_er' => 'Eritrea',
	'UserCountry_country_es' => 'Espanya',
	'UserCountry_country_et' => 'Etiòpia',
	'UserCountry_country_fi' => 'Finlàndia',
	'UserCountry_country_fj' => 'Illes Fiji',
	'UserCountry_country_fk' => 'Illes Malvines',
	'UserCountry_country_fm' => 'Estats Federats de Micronèsia',
	'UserCountry_country_fo' => 'Illes Fèroe',
	'UserCountry_country_fr' => 'Fran&ccedil;a',
	'UserCountry_country_ga' => 'Gabon',
	'UserCountry_country_gd' => 'Grenada',
	'UserCountry_country_ge' => 'Geòrgia',
	'UserCountry_country_gf' => 'Guaiana Francesa',
	'UserCountry_country_gg' => 'Guernsey',
	'UserCountry_country_gh' => 'Ghana',
	'UserCountry_country_gi' => 'Gibraltar',
	'UserCountry_country_gl' => 'Grenlàndia',
	'UserCountry_country_gm' => 'Gàmbia',
	'UserCountry_country_gn' => 'Guinea',
	'UserCountry_country_gp' => 'Illa Guadalupe',
	'UserCountry_country_gq' => 'Guinea Ecuatorial',
	'UserCountry_country_gr' => 'Grècia',
	'UserCountry_country_gs' => 'Illes Geòrgia del Sud i Sandwich del Sud',
	'UserCountry_country_gt' => 'Guatemala',
	'UserCountry_country_gu' => 'Guam',
	'UserCountry_country_gw' => 'Guinea-Bissau',
	'UserCountry_country_gy' => 'Guyana',
	'UserCountry_country_hk' => 'Hong Kong',
	'UserCountry_country_hm' => 'Illes Heard i McDonald',
	'UserCountry_country_hn' => 'Hondures',
	'UserCountry_country_hr' => 'Croàcia',
	'UserCountry_country_ht' => 'Haití',
	'UserCountry_country_hu' => 'Hongria',
	'UserCountry_country_id' => 'Indonèsia',
	'UserCountry_country_ie' => 'Irlanda',
	'UserCountry_country_il' => 'Israel',
	'UserCountry_country_im' => 'Man (illa)',
	'UserCountry_country_in' => 'Índia',
	'UserCountry_country_io' => 'Territori Britànic de l\'Oceà Índic',
	'UserCountry_country_iq' => 'Iraq',
	'UserCountry_country_ir' => 'Iran',
	'UserCountry_country_is' => 'Islàndia',
	'UserCountry_country_it' => 'Itàlia',
	'UserCountry_country_je' => 'Jersey',
	'UserCountry_country_jm' => 'Jamaica',
	'UserCountry_country_jo' => 'Jordània',
	'UserCountry_country_jp' => 'Japó',
	'UserCountry_country_ke' => 'Kenya',
	'UserCountry_country_kg' => 'Kirguizistan',
	'UserCountry_country_kh' => 'Cambodja',
	'UserCountry_country_ki' => 'Kiribati',
	'UserCountry_country_km' => 'Comores',
	'UserCountry_country_kn' => 'Saint Kitts i Nevis',
	'UserCountry_country_kp' => 'Korea del Nord',
	'UserCountry_country_kr' => 'Corea del Sud',
	'UserCountry_country_kw' => 'Kuwait',
	'UserCountry_country_ky' => 'Illes Caiman',
	'UserCountry_country_kz' => 'Kazakhstan',
	'UserCountry_country_la' => 'Laos',
	'UserCountry_country_lb' => 'Líban',
	'UserCountry_country_lc' => 'Saint Lucia',
	'UserCountry_country_li' => 'Liechtenstein',
	'UserCountry_country_lk' => 'Sri Lanka',
	'UserCountry_country_lr' => 'Libèria',
	'UserCountry_country_ls' => 'Lesotho',
	'UserCountry_country_lt' => 'Lituània',
	'UserCountry_country_lu' => 'Luxemburg',
	'UserCountry_country_lv' => 'Letònia',
	'UserCountry_country_ly' => 'Líbia',
	'UserCountry_country_ma' => 'Marroc',
	'UserCountry_country_mc' => 'Mònaco',
	'UserCountry_country_md' => 'Moldàvia',
	'UserCountry_country_mg' => 'Madagascar',
	'UserCountry_country_mh' => 'Illes Marshall',
	'UserCountry_country_mk' => 'Macedònia',
	'UserCountry_country_ml' => 'Mañi',
	'UserCountry_country_mm' => 'Myanmar',
	'UserCountry_country_mn' => 'Mongòlia',
	'UserCountry_country_mo' => 'Macau',
	'UserCountry_country_mp' => 'Illes Mariannes Septentrionals',
	'UserCountry_country_mq' => 'Martinica',
	'UserCountry_country_mr' => 'Mauritània',
	'UserCountry_country_ms' => 'Montserrat',
	'UserCountry_country_mt' => 'Malta',
	'UserCountry_country_mu' => 'Maurici',
	'UserCountry_country_mv' => 'Maldives',
	'UserCountry_country_mw' => 'Malawi',
	'UserCountry_country_mx' => 'Mèxic',
	'UserCountry_country_my' => 'Malàisia',
	'UserCountry_country_mz' => 'Moçambic',
	'UserCountry_country_na' => 'Namíbia',
	'UserCountry_country_nc' => 'Nova Caledònia',
	'UserCountry_country_ne' => 'Níger',
	'UserCountry_country_nf' => 'Illa Norfolk',
	'UserCountry_country_ng' => 'Nigèria',
	'UserCountry_country_ni' => 'Nicaragua',
	'UserCountry_country_nl' => 'Pa&iuml;sos Baixos',
	'UserCountry_country_no' => 'Noruega',
	'UserCountry_country_np' => 'Nepal',
	'UserCountry_country_nr' => 'Nauru',
	'UserCountry_country_nu' => 'Niue',
	'UserCountry_country_nz' => 'Nova Zelanda',
	'UserCountry_country_om' => 'Oman',
	'UserCountry_country_pa' => 'Panamà',
	'UserCountry_country_pe' => 'Perú',
	'UserCountry_country_pf' => 'Polinèsia Francesa',
	'UserCountry_country_pg' => 'Papua Nova Guinea',
	'UserCountry_country_ph' => 'Filipines',
	'UserCountry_country_pk' => 'Pakistan',
	'UserCountry_country_pl' => 'Polònia',
	'UserCountry_country_pm' => 'Saint-Pierre i Miquelon',
	'UserCountry_country_pn' => 'Illes Pitcairn',
	'UserCountry_country_pr' => 'Puerto Rico',
	'UserCountry_country_ps' => 'Territori Palestí',
	'UserCountry_country_pt' => 'Portugal',
	'UserCountry_country_pw' => 'Palau',
	'UserCountry_country_py' => 'Paraguai',
	'UserCountry_country_qa' => 'Qatar',
	'UserCountry_country_re' => 'Illa de la Reunió',
	'UserCountry_country_ro' => 'Romania',
	'UserCountry_country_rw' => 'Rwanda',
	'UserCountry_country_sa' => 'Aràbia Saudita',
	'UserCountry_country_sb' => 'Illes Salomó',
	'UserCountry_country_sc' => 'Seychelles',
	'UserCountry_country_sd' => 'Sudan',
	'UserCountry_country_se' => 'Suècia',
	'UserCountry_country_sg' => 'Singapur',
	'UserCountry_country_sh' => 'Saint Helena',
	'UserCountry_country_si' => 'Eslovènia',
	'UserCountry_country_sj' => 'Svalbard',
	'UserCountry_country_sk' => 'Eslovàquia',
	'UserCountry_country_sl' => 'Sierra Leone',
	'UserCountry_country_sm' => 'San Marino',
	'UserCountry_country_sn' => 'Senegal',
	'UserCountry_country_so' => 'Somàlia',
	'UserCountry_country_sr' => 'Surinam',
	'UserCountry_country_st' => 'São Tomé i Príncipe',
	'UserCountry_country_su' => 'Antiga URSS',
	'UserCountry_country_sv' => 'El Salvador',
	'UserCountry_country_sy' => 'Síria',
	'UserCountry_country_sz' => 'Swazilàndia',
	'UserCountry_country_tc' => 'Illes Turks i Caicos',
	'UserCountry_country_td' => 'Txad',
	'UserCountry_country_tf' => 'Terres Australs i Antàrtiques Franceses',
	'UserCountry_country_tg' => 'Togo',
	'UserCountry_country_th' => 'Tailàndia',
	'UserCountry_country_tj' => 'Tadjikistan',
	'UserCountry_country_tk' => 'Tokelau',
	'UserCountry_country_tm' => 'Turkmenistan',
	'UserCountry_country_tn' => 'Tunísia',
	'UserCountry_country_to' => 'Tonga',
	'UserCountry_country_tp' => 'Timor Oriental',
	'UserCountry_country_tr' => 'Turquia',
	'UserCountry_country_tt' => 'Trinitat i Tobago',
	'UserCountry_country_tv' => 'Tuvalu',
	'UserCountry_country_tw' => 'Taiwan',
	'UserCountry_country_tz' => 'Tanzània',
	'UserCountry_country_ua' => 'Ucraïna',
	'UserCountry_country_ug' => 'Uganda',
	'UserCountry_country_uk' => 'Regne Unit',
	'UserCountry_country_gb' => 'Gran Bretanya',
	'UserCountry_country_um' => 'Illes Perifèriques Menors dels EUA',
	'UserCountry_country_us' => 'EUA',
	'UserCountry_country_uy' => 'Uruguai',
	'UserCountry_country_uz' => 'Uzbekistan',
	'UserCountry_country_va' => 'Ciutat del Vaticà',
	'UserCountry_country_vc' => 'Saint Vincent i les Grenadines',
	'UserCountry_country_ve' => 'Veneçuela',
	'UserCountry_country_vg' => 'Illes Verges Britàniques',
	'UserCountry_country_vi' => 'Illes Verges Americanes',
	'UserCountry_country_vn' => 'Vietnam',
	'UserCountry_country_vu' => 'Vanuatu',
	'UserCountry_country_wf' => 'Wallis i Futuna',
	'UserCountry_country_ws' => 'Samoa',
	'UserCountry_country_ye' => 'Iemen',
	'UserCountry_country_yt' => 'Mayotte',
	'UserCountry_country_yu' => 'Iugoslàvia',
	'UserCountry_country_za' => 'Sud-àfrica',
	'UserCountry_country_zm' => 'Zàmbia',
	'UserCountry_country_zr' => 'Zaire',
	'UserCountry_country_zw' => 'Zimbabwe',
	'UserCountry_continent_eur' => 'Europa',
	'UserCountry_continent_afr' => 'Àfrica',
	'UserCountry_continent_asi' => 'Àsia',
	'UserCountry_continent_ams' => 'Amèrica Central i del Sud',
	'UserCountry_continent_amn' => 'Amèrica del Nord',
	'UserCountry_continent_oce' => 'Oceania',
	'UserSettings_BrowserFamilies' => 'Motors dels navegadors',
	'UserSettings_Browsers' => 'Navegadors',
	'UserSettings_Plugins' => 'Connectors',
	'UserSettings_Configurations' => 'Configuracions',
	'UserSettings_OperatinsSystems' => 'Sistemes operatius',
	'UserSettings_Resolutions' => 'Resolucions',
	'UserSettings_WideScreen' => 'Pantalla panoràmica',
	'UserSettings_WidgetResolutions' => 'Resoulucions',
	'UserSettings_WidgetBrowsers' => 'Navegadors',
	'UserSettings_WidgetPlugins' => 'Llistat de connectors',
	'UserSettings_WidgetWidescreen' => 'Normal / panoràmica',
	'UserSettings_WidgetBrowserFamilies' => 'Navegadors per motor',
	'UserSettings_WidgetOperatingSystems' => 'Sistemes operatius',
	'UserSettings_WidgetGlobalVisitors' => 'Configuracions globals dels visitants',
	'UserSettings_SubmenuSettings' => 'Configuracions',
	'UsersManager_ManageAccess' => 'Gestiona els permisos',
	'UsersManager_Sites' => 'Llocs',
	'UsersManager_AllWebsites' => 'Tots els llocs',
	'UsersManager_ApplyToAllWebsites' => 'Aplica a tots els llocs',
	'UsersManager_User' => 'Usuari',
	'UsersManager_PrivNone' => 'Sense accés',
	'UsersManager_PrivView' => 'Vista',
	'UsersManager_PrivAdmin' => 'Administració',
	'UsersManager_ChangeAllConfirm' => 'Realment voleu canviar els permisos de \'%s\' a tots els llocs web?',
	'UsersManager_Login' => 'Nom d\'usuari',
	'UsersManager_Password' => 'Contrasenya',
	'UsersManager_Email' => 'Correu-e',
	'UsersManager_Alias' => 'Àlies',
	'UsersManager_Token' => 'token_auth',
	'UsersManager_Edit' => 'Edita',
	'UsersManager_AddUser' => 'Afegeix un usuari nou',
	'UsersManager_MenuUsers' => 'Usuaris',
	'UsersManager_DeleteConfirm_js' => 'Esteu segur que voleu eliminar l\'usuari %s?',
	'UsersManager_ExceptionLoginExists' => 'L\'usuari \'%s\' ja existeix.',
	'UsersManager_ExceptionEmailExists' => 'La direcció de correu-e \'%s\' ja està en un altre compte.',
	'UsersManager_ExceptionInvalidLogin' => 'El nom d\'usuari només pot contenir lletres, números o els caràcters \'_\' o \'-\' o \'.\'',
	'UsersManager_ExceptionInvalidPassword' => 'La contrasenya ha de tenir entre 6 i 26 caràcters.',
	'UsersManager_ExceptionInvalidEmail' => 'La direcció de correu-e no té un format vàlid.',
	'UsersManager_ExceptionDeleteDoesNotExist' => 'L\'usuari \'%s\' no existeix i, per tant, no es pot esborrar.',
	'UsersManager_ExceptionAdminAnonymous' => 'No podeu donar permisos d\'administració a l\'usuari \'anonymous\' (anònim).',
	'UsersManager_ExceptionEditAnonymous' => 'L\'usuari anònim no es pot editar o esborrar. El Piwik el fa servir per als usuaris que no han iniciat encara la sessió. Per exemple, podeu fer públiques les vostres estadístiques garantint el permís \'vista\' a l\'usuari \'anonymous\' (anònim).',
	'UsersManager_ExceptionUserDoesNotExist' => 'L\'usuari \'%s\' no existeix.',
	'UsersManager_ExceptionAccessValues' => 'El paràmetre permisos ha de tenir un dels següents valors: [ %s ]',
	'VisitFrequency_Evolution' => 'Evolució del període',
	'VisitFrequency_ReturnVisits' => 'Han tornat %s visites',
	'VisitFrequency_ReturnActions' => 'Les visites que han tornat han fet %s accions',
	'VisitFrequency_ReturnMaxActions' => 'Una visita que ha tornat ha fet un màxim de %s accions',
	'VisitFrequency_ReturnTotalTime' => '%s de temps que han fet servir les visites que han tornat',
	'VisitFrequency_ReturnBounces' => 'Una visita que ha tornat ha rebotat %s cops (ha abandonat el lloc després de veure només una pàgina)',
	'VisitFrequency_WidgetOverview' => 'Resum de la freq&uuml;ència',
	'VisitFrequency_WidgetGraphReturning' => 'Gràfic de les visites que han tornat',
	'VisitFrequency_SubmenuFrequency' => 'Freq&uuml;ència',
	'VisitTime_LocalTime' => 'Visites segons l\'hora local',
	'VisitTime_ServerTime' => 'Visites segons l\'hora del servidor',
	'VisitTime_WidgetLocalTime' => 'Visites segons l\'hora local',
	'VisitTime_WidgetServerTime' => 'Visites segons l\'hora del servidor',
	'VisitTime_SubmenuTimes' => 'Hores',
	'VisitTime_NHour' => '%sh',
	'VisitorInterest_VisitsPerDuration' => 'Visites segons la durada',
	'VisitorInterest_VisitsPerNbOfPages' => 'Visites segons el nombre de pàgines',
	'VisitorInterest_WidgetLengths' => 'Durada de les visites',
	'VisitorInterest_WidgetPages' => 'Pàgines per visita',
	'VisitorInterest_SubmenuFrequencyLoyalty' => 'Freqüència i lleialtat',
	'VisitorInterest_PlusXMin' => '%s min',
	'VisitorInterest_BetweenXYMinutes' => '%1s-%2s min',
	'VisitorInterest_OnePage' => '1 pàgina',
	'VisitorInterest_NPages' => '%s pàgines',
	'VisitorInterest_BetweenXYSeconds' => '%1s-%2ss',
	'VisitsSummary_NbVisits' => '%s visites',
	'VisitsSummary_NbUniqueVisitors' => '%s visitants únics',
	'VisitsSummary_NbActions' => '%s accions (pàgines vistes)',
	'VisitsSummary_TotalTime' => '%s de temps en total fet servir pels visitants',
	'VisitsSummary_MaxNbActions' => 'Hi ha %s accions màximes en una visita',
	'VisitsSummary_NbBounced' => '%s visitants han rebotat (han abandonat el lloc després de veure només una pàgina)',
	'VisitsSummary_Evolution' => 'Evolució dels 30 darrers %ss',
	'VisitsSummary_Report' => 'Informe',
	'VisitsSummary_GenerateTime' => 'S\'han trigat %s segons en generar la pàgina',
	'VisitsSummary_GenerateQueries' => 'S\'ha executat un total de %s consultes',
	'VisitsSummary_WidgetLastVisits' => 'Gràfic de les darreres visites',
	'VisitsSummary_WidgetVisits' => 'Resum de les visites',
	'VisitsSummary_WidgetLastVisitors' => 'Gràfic dels darrers visitants únics',
	'VisitsSummary_WidgetOverviewGraph' => 'Resum amb gràfic',
	'VisitsSummary_SubmenuOverview' => 'Resum',
	'General_Export' => 'Exporta',
	'General_Visitors' => 'Visitants',
	'General_NoDataForTagCloud' => 'No hi ha dades...',
	'General_PiwikIsACollaborativeProject' => '%s El Piwik %s és un projecte col&middot;laboratiu que encara està en fase Beta. %s Si voleu ajudar, si us plau %s contacteu-nos!%s.',
	'CorePluginsAdmin_PluginsManagement' => 'Gestina els connectors',
	'CorePluginsAdmin_MainDescription' => 'Els connectors augmenten la funcionalitat del Piwik. Un cop hi ha un connector instal&middot;lat, podeu activar-lo i desactivar-lo aquí.',
	'CorePluginsAdmin_Plugin' => 'Connector',
	'CorePluginsAdmin_Version' => 'Versió',
	'CorePluginsAdmin_Description' => 'Descripció',
	'CorePluginsAdmin_Status' => 'Estat',
	'CorePluginsAdmin_Action' => 'Acció',
	'CorePluginsAdmin_PluginHomepage' => 'Pàgina web',
	'CorePluginsAdmin_Active' => 'Actiu',
	'CorePluginsAdmin_Inactive' => 'Inactiu',
	'Actions_Actions' => 'Accions',
	'Dashboard_Dashboard' => 'Tauler',
	'Referers_Referers' => 'Referents',
	'UsersManager_UsersManagement' => 'Gestiona els usuaris',
	'UsersManager_UsersManagementMainDescription' => 'Creeu nous usuaris o actualitzeu els existents.
Podeu configurar els seus permisos a dalt.',
	'UsersManager_MainDescription' => 'Decidiu quin tipus d\'accés té cada usuari al Piwik. També podeu configurar tots els llocs web de cop.',
	'SitesManager_WebsitesManagement' => 'Gestiona els llocs',
	'SitesManager_MainDescription' => 'Els informes d\'anàlisi web necessiten llocs web! Afegiu, actualitzeu i esborreu-ne. Veieu també el codi JavaScript que heu d\'inserir a les pàgines',
	'DBStats_DatabaseUsage' => 'Ús de la base de dades',
	'DBStats_MainDescription' => 'El Piwik desa totes les anàlisis web la base de dades MySQL. Ara per ara, les taules del Piwik fan servir %s.',
	'DBStats_Table' => 'Taula',
	'DBStats_RowNumber' => 'Núm. fila',
	'DBStats_DataSize' => 'Grandària de les dades',
	'DBStats_IndexSize' => 'Grandària del l\'índex',
	'General_Website' => 'Lloc web',
	'CoreUpdater_UpdateTitle' => 'Actualització del Piwik',
	'CoreUpdater_UpdateRequired' => 'Hi ha una actualització necessària',
	'CoreUpdater_YourDatabaseIsOutOfDate' => 'La base de dades del Piwik és antiga i cal actualitzar-la abans de continuar.',
	'CoreUpdater_PiwikWillBeUpgradedToVersionX' => 'El Piwik s\'actualitzarà a la versió %s.',
	'CoreUpdater_TheFollowingPluginsWillBeUpgradedX' => 'Aquests connectors s\'actualitzaran: %s.',
	'CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient' => 'El procés d\'actualització pot durar una estona, tingueu paciència.',
	'CoreUpdater_UpgradePiwik' => 'Actualitza el Piwik',
	'CoreUpdater_HelpMessageContent' => 'Comproveu les %s PMF del Piwik (en anglès) %s, que intenten explicar els errors més comuns a l\'actualització. %s Pregunteu a l\'administrador del sistema, podria ajudar-vos amb l\'error, que sembla estar relacionat amb el servidor o la instal&middot;lació del MySQL.',
	'CoreUpdater_CriticalErrorDuringTheUpgradeProcess' => 'Hi ha hagut un error crític durant el procés d\'actualització:',
	'CoreUpdater_HelpMessageIntroductionWhenError' => 'El que hi ha a sobre és l\'error del nucli. Hauria d\'explicar la causa, però si necessiteu més ajuda, si us plau:',
	'CoreUpdater_HelpMessageIntroductionWhenWarning' => 'La actualització s\'ha completat amb èxit, però hi ha hagut alguns problemes durant el procés. Si us plau, llegiu les descripcions que hi ha a sobre per a saber més detalls. Si voleu més informació:',
	'CoreUpdater_UpgradeComplete' => 'S\'ha actualitzat amb èxit!',
	'CoreUpdater_WarningMessages' => 'Avisos:',
	'CoreUpdater_ErrorDuringPluginsUpdates' => 'Hi ha hagut errors en l\'actualització dels connectors',
	'CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins' => 'S\'han desactivat automàticament els connectors següents: %s',
	'CoreUpdater_PiwikHasBeenSuccessfullyUpgraded' => 'El Piwik s\'ha actualitzat amb èxit!',
	'CoreUpdater_ContinueToPiwik' => 'Vés cap al Piwik',
	'Installation_DatabaseCreatedSuccess' => 'La base de dades %s s\'ha creat correctament!',
	'Installation_ContinueToPiwik' => 'Vés cap al Piwik',
);