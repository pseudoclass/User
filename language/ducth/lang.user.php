<?php

 /**
 * Solspace - User
 *
 * @package		Solspace:User
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2008-2012, Solspace, Inc.
 * @link		http://solspace.com/docs/addon/c/User/
 * @version		3.3.10
 * @filesource 	./system/expressionengine/third_party/user/language/english/
 */

$lang = $L = array(

//----------------------------------------
//	Required for MODULES page
//----------------------------------------

"user_module_name" =>
"User",

"user_module_description"		=>
"Gebruik EE templatefunctionaliteit in de Ledenmodule",

//----------------------------------------
//	Language for Content Wrapper
//----------------------------------------

"user"			 =>
"User",

"documentation"	 =>
"Online documentatie",

"online_documentation"	 =>
"Online documentatie",

'user_preference' =>
"Voorkeur",

'user_setting' =>
"Instelling",

//----------------------------------------
//	Language for home
//----------------------------------------

"homepage"		 =>
"Homepage",

//----------------------------------------
//	Language for Upgrade
//----------------------------------------

"upgrade"		 =>
"Upgraden",

"upgrade_now"	 =>
"Nu upgraden!",

"upgrade_message" =>
"Je hebt een nieuwe versie van User geïnstalleerd. Je kan best het updatescript een keer laten lopen.",

"update_successful"			=>
"De update is geslaagd.",

"update_failure"			=>
"De update is mislukt.",

//----------------------------------------
//	Language for find member
//----------------------------------------

"reassign_ownership"			=>
"Eigenaarschap opnieuw toewijzen",

"find_member"	 =>
"Lid zoeken",

'member_search' =>
"Leden zoeken",

"find_members_text" =>
"Typ hieronder een gebruikersnaam, schermnaam of e-mailadres om een lid te vinden.",

'find_entries_text_channel'	=>
"Zoek berichten die NIET van het bovenstaande lid zijn, op basis van titel en kanaal, om ze opnieuw toe te wijzen aan het geselecteerde lid.",

'find_entries_text_weblog'	=>
"Zoek berichten die NIET van het bovenstaande lid zijn, op basis van titel en weblog, om ze opnieuw toe te wijzen aan het geselecteerde lid.",

"name"			 =>
"Naam",

'member_keywords' =>
"Leden zoeken",

'entry_title_keywords' =>
"Berichttitel",

'choose_member' =>
"Lies lid",

'assign_to_member' =>
"Wijs toe aan lid",

'channels' =>
"Kanalen",

"missing_name"	 =>
"Voer een gebruikernaam, schermnaam of e-mailadres in.",

"no_results"	 =>
"Niets gevonden. Probeer het opnieuw.",

'choose_entries' =>
"Kies berichten",

"submit"		 =>
"Verzenden",

"no_results_channel" =>
"Niets gevonden. Probeer het opnieuw.",

//----------------------------------------
//	Language for find entries
//----------------------------------------

"select"		 =>
"Selecteer",

"username"		 =>
"Gebruikersnaam",

"screen_name"	 =>
"Schermnaam",

"email"			 =>
"E-mailadres",

"entries"		 =>
"Berichten",

"find_entries"	 =>
"Berichten zoeken",

"title"			 =>
"Titel",

"entry_id"		 =>
"Bericht ID",

"entry_date"	 =>
"Invoerdatum",

"missing_title"	 =>
"Voer een titel in voor je zoekopdracht.",

"missing_member" =>
"Selecteer een lid in de lijst.",

"submit_name"	 =>
"Wijs geselecteerde berichten toe aan %name.",

"no_entries_selected"			=>
"Geen berichten geselecteerd.",

"reassign_ownership_confirm"	=>
"Bevestig wijziging van eigenaar",

"reassign_ownership_question_entry"	=>
"Ben je zeker dat je %i% berichten wil toewijzen aan to %name%?",

"reassign_ownership_question_entries"	=>
"Ben je zeker dat je %i% berichten wil toewijzen aan to %name%?",

"reassign"		 =>
"Toewijzen",

"missing_member_id" =>
"Het lid waar berichten aan moeten worden toegewezen, bestaat niet.",

"entry_reassigned" =>
"1 bericht is succesvol toegewezen.",

"entries_reassigned"			=>
"%i% berichten zijn succesvol toegewezen.",

//----------------------------------------
//	Language for prefs
//----------------------------------------

"preferences"	 =>
"Voorkeuren",

"general_preferences"	 =>
"Algemene voorkeuren",

"multiple_authors"	 =>
"Meerdere auteurs",

"email_notifications"	 =>
"E-mailwaarschuwingen",

"email_is_username" =>
"E-mailadres is gebruikersnaam",

"email_is_username_subtext"		=>
"Selecteer dit veld om de gebruikersnaam een afgeleide te laten zijn van het e-mailadres.",

"category_groups" =>
"Categoriegroepen",

"category_groups_subtext"			=>
"Selecteer rechts de categoriegroepen om aan te duiden aan welke categorieën gebruikers kunnen worden toegewezen als je de Gebruikerscategorieënfunctie gebruikt.",

"missing_username" =>
"Vul een gebruikersnaam in.",

"username_change_not_allowed"	=>
"Je siteinstellingen laten niet toe gebruikersnamen te wijzigen. De 'e-mailadres is gebruikersnaam'-functie is niet compatibel met je huidige instellingen. Gebruikers moeten toestemming hebben hun gebruikersnaam te wijzigen, als hun e-mailadres en gebruikersnaam dezelfde zijn.",

"screen_name_override"			=>
"Schermnaam overschrijven",

"screen_name_override_subtext"		=>
"Duid aan welke custom velden gebruikt moeten worden om de schermnaam te maken. Scheid velden met een verticaal streepje (|). Als je dit veld leeg laat, wordt deze functie genegeerd.",

"user_preferences_updated" =>
"Je voorkeuren zijn bijgewerkt.",

'welcome_email_subject'	 =>
"Onderwerp verwelkomingsmail",

'welcome_email_content'	 =>
"Verwelkomingsmail",

'welcome_email_content_subtext'	 =>
"Stuur een aangepaste verwelkomingsmail naar de gebruiker als de registratie voltooid is. Als je geen e-mail wil sturen, laat dat dit vak leeg.<br /><br />Beschikbare variabelen zijn: <b>{site_name}</b>, <b>{site_url}</b>, <b>{screen_name}</b>, <b>{email}</b>, <b>{username}</b>, <b>{member_id}</b>.",

'member_update'	 =>
"Leden updaten",

'member_update_admin_notification_emails' =>
"E-mailadressen voor administratornotificaties bij updaten van profielen",

'member_update_admin_notification_template' =>
"E-mailbericht voor administratornotificaties bij updaten van profielen",

'member_update_admin_notification_template_subtext' =>
"Stuurt een aangepaste e-mail naar de hierboven opgegeven e-mailadressen. Alle ledenvariabelen zijn beschikbaar, aangevuld met de <b>{changed}{/changed}</b> variabele, waarbinnen de <b>{name}</b> (van het veld) en <b>{value}</b> (de nieuwe waarde) gebruikt kunnen worden. De {changed} variabele toont de nieuwe waarden van de aangepaste velden. De <b>{update_date}</b> variabele en datumschrijfwijze zijn ook beschikbaar.",

//----------------------------------------
//	Language for Edit
//----------------------------------------

'user_successful_submission' =>
"Goed verzonden!",

"not_authorized" =>
"Je hebt geen toestemming om dit te doen.",

"cant_find_member" =>
"Dqt lid hebben we niet gevonden.",

"incorrect_language"			=>
"Er is een foute taal geselecteerd.",

"super_admin_group_id"			=>
"Maak je een grapje? Wil je echt je status veranderen van Super Admin in iets anders? Dat kunnen we je hier niet laten doen. Je zal dat via het ExpressionEngine Control Panel moeten doen.",

"current_password_required"		=>
"Om het wachtwoord te kunnen veranderen, moet je je huidige wachtwoord opgeven.",

"current_password_required_email"		=>
"Om je e-mailadres te kunnen veranderen, moet je je huidige wachtwoord opgeven.",

"username_change_not_allowed"	=>
"Je kan geen gebruikersnamen wijzigen op deze website.",

"missing_fields" =>
"De volgende velden zijn verplicht: <ul><li>%fields%</li></ul>",

"avatar_uploads_not_enabled"	=>
"Je kan geen avatars uploaden.",

"photo_uploads_not_enabled"		=>
"Je kan geen foto's uploaden.",

"sig_uploads_not_enabled"		=>
"Je kan geen afbeeldingen voor handtekeningen uploaden.",

"gd_required"	 =>
"GD Image is vereist om dit te kunnen doen. Contacteer de klantendienst.",

"image_max_size_exceeded"		=>
"Het maximale bestandformaat om afbeeldingen te uploaden is %s. Ga terug en kies een ander bestand om up te loaden.",

"missing_upload_path"			=>
"Het uploadpad voor dit type van afbeeldingen is niet ingevuld of fout. Contacteer de klantendienst.",

"invalid_image_type"			=>
"Het type afbeelding dat je probeert te uploaden is niet toegelaten.",

"password_changed" =>
"Je hebt je wachtwoord gewijzigd. Je zal opnieuw moeten inloggen met je nieuwe wachtwoord.",

"us"			 =>
"Verenigde Staten",

"eu"			 =>
"Europees",

"success"		 =>
"Gelukt!",

"return"		 =>
"Terug",

//----------------------------------------
//	Language for group edit
//----------------------------------------

"incorrect_editable_group"		=>
"Je hebt de bewerkbare groepen niet juist aangeduid voor deze functie.",

"no_data"		 =>
"Er is geen data verzonden.",

"member_list_error" =>
"Er zit een fout in de opgegeven ledenlijst.",

'member_group_updated' =>
"De ledengroep is goed geüpdateted.",

//----------------------------------------
//	Language for Register
//----------------------------------------

"registration_not_enabled"		=>
"Registraties zijn momenteel niet toegelaten.",

"mbr_you_are_registered"		=>
"Je bent al geregistreerd en ingelogd.",

"prohibited_username" =>
"De gebruikersnaam die je hebt opgegeven is niet toegelaten. Kies een andere gebruikersnaam.",

"email_required" =>
"Een e-mailadres is verplicht om je te kunnen registreren.",

"user_field_required"			=>
"De volgende velden zijn verplichte ledenvelden:<ul>%s</ul>",

"captcha_required" =>
"Een captcha afbeelding is verplicht om je te kunnen registreren.",

"mbr_terms_of_service_required"	=>
"Akkoord gaan met de voorwaarden is verplicht om je te kunnen registreren.",

"banned_screen_name"			=>
"Er is een schermnaam gemaakt op basis van deze waarden: %s. Die schermnaam is niet toegelaten op deze website. Je zal dus de inhoud van enkele velden moeten wijzigen, of de sitebeheerder moeten contacteren.",

"bad_screen_name" =>
"Er is een schermnaam gemaakt op basis van deze waarden: %s. Schermnamen moeten uniek zijn. Je zal dus de inhoud van enkele velden moeten wijzigen, of de sitebeheerder moeten contacteren.",

"banned_username" =>
"De gebruikersnaam die je hebt opgegeven is geband van deze website.",

"invalid_member_group"			=>
"De aangeduide ledengroep is ongeldig. Contacteer de klantendienst.",

"wrong_reg_mode" =>
"Het formulier dat je hebt verzonden laat het toe om je onmiddellijk te registreren. De site zelf laat dat echter niet toe. Contacteer de webmaster en licht hem in over deze foutmelding.",



//----------------------------------------
//	Language for Keys
//----------------------------------------

"back"			 =>
"Terug",

"key_created"	 =>
"Code aangemaakt",

"key_expiration"	 =>
"Code vervalt",

"key_expiration_subtext"	 =>
"Aantal dagen waarna de code vervalt, nadat er een code/uitnodiging is verzonden naar iemand. Standaard is 7 dagen.",

"key_success"	 =>
"De registratiecode is aangemaakt en gemaild.",

"key_required"	 =>
"Een geldige registratiecode is vereist om te kunnen registreren op deze website.",

"key_incorrect"	 =>
"De code die je hebt ingegeven is ongeldig. Activatiecodes vervallen na %s dag(en). Probeer het opnieuw.",

"key_email_match_required"		=>
"Het opgegeven e-mailadres komt niet overeen met de code die er aan is gekoppeld. Ga terug en probeer het opnieuw.",

"template_not_found"			=>
"De opgegeven uitnodigingstemplate kan niet gevonden worden.",

"you_are_invited_to_join"=>
"Je bent uitgenodigd je te registreren",

//----------------------------------------
//	Language for Search
//----------------------------------------

"search_path_error" =>
"Er is geen template opgegeven om zoekresultaten te tonen.",

"search_not_allowed"			=>
"Je hebt geen toestemming om te zoeken.",

"search_time_not_expired"		=>
"Je mag slechts een keer per %x seconden zoeken.",

"page"			 =>
"Pagina",

"of"			 =>
"van",


//----------------------------------------
//	Language for Delete Account
//----------------------------------------

'user_delete_confirm'			=>
"Bevestig dat je dit account en alle gelinkte inhoud permanent wil verwijderen.",

//----------------------------------------
//	Forgotten Username Email
//----------------------------------------

'forgotten_username_sent' =>
"Er is een e-mail gestuurd met daarin je gebruikersnaam.",

'forgotten_username_subject' =>
"Gebruikersnaam vergeten",

'user_forgot_username_message' =>
"Vergeten gebruikersnaam e-mailbericht",

'user_forgot_username_message_subtext' =>
"Stuurt een e-mail met details over de gebruikersnaam, naar de gebruiker die gevraagd heeft zijn gegevens opnieuw te versturen met de User:Forgot_Username functie.<br /><br />Beschikbare variabelen zijn: <b>{site_name}</b>, <b>{site_url}</b>, <b>{screen_name}</b>, <b>{email}</b>, <b>{username}</b>, <b>{member_id}</b>.",

//----------------------------------------
//	Language for Tab
//----------------------------------------

"no_matching_authors"			=>
"Er zijn geen auteurs gevonden.",

"no_author_id"	 =>
"Er is geen auteur-id opgegeven.",

"author_not_assigned"			=>
"De auteur is niet aan dit bericht toegewezen.",

"successful_add" =>
"De auteur is toegevoegd.",

'remove' =>
"Verwijder",

'add' =>
"Voeg toe",

'loading_users' =>
'Gebruikerslijst laden',

/** --------------------------------------------
/**  Errors
/** --------------------------------------------*/

'disable_module_to_disable_extension' =>
"Om deze extensie uit te schakelen, moet je de bijbehorende <a href='%url%'>module</a> uitschakelen.",

'enable_module_to_enable_extension' =>
"Om deze extensie in te schakelen, moet je de bijbehorende <a href='%url%'>module</a> inschakelen.",

'cp_jquery_requred' =>
"De 'jQuery for the Control Panel' extensie moet <a href='%extensions_url%'>ingeschakeld</a> zijn om deze module te kunnn gebruiken.",

/** --------------------------------------------
/**  Update Routine
/** --------------------------------------------*/

'update_user_module' =>
"User updaten",

'user_update_message' =>
"Je hebt een nieuwe versie van User geüploaded. Klik hier om het update script uit te voeren.",

'user_authors_publish_tab_label' => 
'Publish tab label',

'user_authors_instructions'		=> 
'Je kan het label van de auteurstab per channel wijzigen met de velden hieronder. Als je de tab niet wil tonen in een channel, laat dan het bijbehorende veld leeg.',

//----------------------------------------
//	Language for Tab
//----------------------------------------

"browse_authors_instructions"	=>
"Bekijk de auteurs met dit veld. Klik op een naam om de auteur toe te voegen aan het bericht.",

"choose_author_instructions"	=>
"Kies een auteur uit de gebruikerslijst.",

"assigned_authors_instructions"	=>
"Duid de hoofdauteur aan met het keuzerondje.",

"browse_authors" =>
"Bekijk auteurs",

"assigned_authors" =>
"Toegewezen auteurs",

"primary_author" =>
"Hoofdauteur",

'choose_a_primary_author' =>
"Kies een hoofdauteur",

"user_authors_confirm_delete" =>
"Ben je zeker dat je deze persoon wil verwijderen als auteur van dit bericht?",

'remove' =>
"Verwijder",

'add' =>
"Voeg toe",

'user_module_version' =>
"User",


// END
''=>''
);