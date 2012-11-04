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
"A screen name was created for you using these values: %s. That screen name is banned on this site. You will either need to alter the contents of one of the values you provided or contact the site administrator for help.",

"bad_screen_name" =>
"A screen name was created for you using these values: %s. Screen names must be unique. You will either need to alter the contents of one of the values you provided or contact the site administrator for help.",

"banned_username" =>
"The username you submitted has been banned from the site.",

"invalid_member_group"			=>
"The indicated member group is invalid. Please contact customer support.",

"wrong_reg_mode" =>
"The form you submitted allows you to register for the site at the time of your submission. However, the site does not allow for immediate registrations. Please contact the webmaster and let them know about this error message.",



//----------------------------------------
//	Language for Keys
//----------------------------------------

"back"			 =>
"Back",

"key_created"	 =>
"Key Created",

"key_expiration"	 =>
"Key Expiration",

"key_expiration_subtext"	 =>
"Number of days after sending a person a key/inviation that it expires, default is 7 days.",

"key_success"	 =>
"The Registration Keys were successfully created and emailed.",

"key_required"	 =>
"A valid invitation key is required before joining this website. Please obtain a key.",

"key_incorrect"	 =>
"The invitation key that you entered is not valid. Invitation keys expire after %s day(s). Please try again.",

"key_email_match_required"		=>
"The email address submitted did not match the key to which it was matched. Please go back and try again.",

"template_not_found"			=>
"The specified invitation template could not be found.",

"you_are_invited_to_join"=>
"You are invited to join",

//----------------------------------------
//	Language for Search
//----------------------------------------

"search_path_error" =>
"There was template specified to show search results.",

"search_not_allowed"			=>
"You are not currently allowed to search.",

"search_time_not_expired"		=>
"You are only allowed to search every %x seconds.",

"page"			 =>
"Page",

"of"			 =>
"of",


//----------------------------------------
//	Language for Delete Account
//----------------------------------------

'user_delete_confirm'			=>
"Please confirm that you want to permanently delete this account and all associated content.",

//----------------------------------------
//	Forgotten Username Email
//----------------------------------------

'forgotten_username_sent' =>
"An email with your forgotten username has been sent.",

'forgotten_username_subject' =>
"Forgotten Username",

'user_forgot_username_message' =>
"Forgot Username Email Message",

'user_forgot_username_message_subtext' =>
"Sends out a customized email with username details to the user that requested their username details to be sent via the User:Forgot_Username function.<br /><br />Available variables are: <b>{site_name}</b>, <b>{site_url}</b>, <b>{screen_name}</b>, <b>{email}</b>, <b>{username}</b>, <b>{member_id}</b>.",

//----------------------------------------
//	Language for Tab
//----------------------------------------

"no_matching_authors"			=>
"No matching authors were found.",

"no_author_id"	 =>
"No author id was provided.",

"author_not_assigned"			=>
"The author was not assigned to this entry.",

"successful_add" =>
"The author was added successfully.",

'remove' =>
"Remove",

'add' =>
"Add",

'loading_users' =>
'Loading User List',

/** --------------------------------------------
/**  Errors
/** --------------------------------------------*/

'disable_module_to_disable_extension' =>
"To disable this extension, you must disable its corresponding <a href='%url%'>module</a>.",

'enable_module_to_enable_extension' =>
"To enable this extension, you must install its corresponding <a href='%url%'>module</a>.",

'cp_jquery_requred' =>
"The 'jQuery for the Control Panel' extension must be <a href='%extensions_url%'>enabled</a> to use this module.",

/** --------------------------------------------
/**  Update Routine
/** --------------------------------------------*/

'update_user_module' =>
"Update the User Module",

'user_update_message' =>
"You have recently uploaded a new version of User, please click here to run the update script.",

'user_authors_publish_tab_label' => 
'Publish Tab Label',

'user_authors_instructions'		=> 
'You can customize the label of the user authors tab per weblog/channel using the fields below. 
If you prefer not to show the tab for a weblog, leave the respective field blank.',

//----------------------------------------
//	Language for Tab
//----------------------------------------

"browse_authors_instructions"	=>
"Browse for authors using the field. Click an author's name to add them to the entry.",

"choose_author_instructions"	=>
"Choose a authors from the user list.",

"assigned_authors_instructions"	=>
"Indicate the primary author using the radio button.",

"browse_authors" =>
"Browse Authors",

"assigned_authors" =>
"Assigned Authors",

"primary_author" =>
"Primary Author",

'choose_a_primary_author' =>
"Choose a Primary Author",

"user_authors_confirm_delete" =>
"Are you sure that you want to remove this person as one of the authors of the entry?",

'remove' =>
"Remove",

'add' =>
"Add",

'user_module_version' =>
"User",


// END
''=>''
);