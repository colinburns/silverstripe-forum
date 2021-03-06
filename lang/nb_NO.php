<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package modules: forum
 * @subpackage i18n
 */

i18n::include_locale_file('modules: forum', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['']['LOGINTOUNSUBSCRIBE'] = 'For å melde deg av tråden, vennligst logg inn først.';
$lang['nb_NO']['']['MEMBERLIST'] = 'Medlemsliste';
$lang['nb_NO']['']['MODERATOR'] = 'Forum Moderator';
$lang['nb_NO']['']['MODERATORS'] = 'Moderatorer for dette forum';
$lang['nb_NO']['']['SEARCHBREADCRUMB'] = 'Søk';
$lang['nb_NO']['Forum']['ACCESSATTACH'] = 'Kan brukere legge ved filer?';
$lang['nb_NO']['Forum']['ACCESSPOST'] = 'Hvem kan skrive i forumet?';
$lang['nb_NO']['Forum']['ACCESSREAD'] = 'Hvem kan lese forumet?';
$lang['nb_NO']['Forum']['BBCODEHINT'] = 'Vis formatteringshjelp';
$lang['nb_NO']['Forum']['CREDENTIALS'] = 'Vennligst skriv inn brukernavn og passord for å få tilgang til forum.';
$lang['nb_NO']['Forum']['DEFAULTCATEGORY'] = 'Generell';
$lang['nb_NO']['Forum']['EDITPOST'] = 'Endre en melding';
$lang['nb_NO']['Forum']['FORUMCREATED'] = 'Forumside opprettet.';
$lang['nb_NO']['Forum']['FORUMHOLDERCREATED'] = 'Forumholder side opprettet.';
$lang['nb_NO']['Forum']['FORUMMONTHLYPOSTS'] = 'Foruminnlegg sortert etter måned';
$lang['nb_NO']['Forum']['FORUMSIGNUPS'] = 'Nye foruminnmeldinger etter måned ';
$lang['nb_NO']['Forum']['GROUPCREATED'] = 'Forum medlemsgruppe er opprettet';
$lang['nb_NO']['Forum']['LOGINAGAIN'] = 'Du er logget ut av forum. Hvis du ønsker å logge inn igjen, skriv inn brukernavn og passord under.';
$lang['nb_NO']['Forum']['LOGINALREADY'] = 'Jeg beklager, men du kan ikke få tilgang til forum før du er logget inn. Om du ønsker å logge inn som noen andre, gjør det under';
$lang['nb_NO']['Forum']['LOGINDEFAULT'] = 'Skriv inn epostadresse og passord for å vise dette forum.';
$lang['nb_NO']['Forum']['LOGINTOEDIT'] = 'Skriv inn din epostadresse og passord for å endre denne meldingen.';
$lang['nb_NO']['Forum']['LOGINTOEDITLOGGEDIN'] = 'Jeg beklager, men du kan ikke endre denne meldingen før du er logget inn. Du må enten være administrator eller forfatter for å endre meldingen.';
$lang['nb_NO']['Forum']['LOGINTOPOST'] = 'Du må logge inn før du kan skrive til forum. Vennligst se under.';
$lang['nb_NO']['Forum']['LOGINTOPOSTAGAIN'] = 'Du er logget ut av forum. Om du ønsker å logge inn igjen for å skrive i forum, skriv inn brukernavn og passord under.';
$lang['nb_NO']['Forum']['LOGINTOPOSTLOGGEDIN'] = 'Jeg beklager, men du kan ikke skrive i dette forum før du er logget inn. Om du ønsker å logge inn som noen andre, gjør det under. Om du er logget inn og du fortsatt ikke kan skrive i forum, så har du ikke korrekt tilgang til å skrive.';
$lang['nb_NO']['Forum']['NEWTOPIC'] = 'Start et nytt emne';
$lang['nb_NO']['Forum']['NO'] = 'Nei';
$lang['nb_NO']['Forum']['PLURALNAME'] = 'Forum';
$lang['nb_NO']['Forum']['POSTNOTFOUND'] = 'Denne meldingen finnes ikke å databasen. Vennligst gå tilbake til tråden du endret og prøv å endre meldingen igjen. Om denne feilen fortsetter, vennligst epost administrator.';
$lang['nb_NO']['Forum']['POSTTOTOPIC'] = 'Skriv melding til \'%s\' emne';
$lang['nb_NO']['Forum']['READANYONE'] = 'Alle';
$lang['nb_NO']['Forum']['READLIST'] = 'Bare disse menneskene';
$lang['nb_NO']['Forum']['READLOGGEDIN'] = 'Brukere som er logget inn';
$lang['nb_NO']['Forum']['READNOONE'] = 'Ingen. Gjør forumet til "kun lese"';
$lang['nb_NO']['Forum']['REFRECHTIME'] = 'Oppdater hver';
$lang['nb_NO']['Forum']['REFRESHFORUM'] = 'Oppdater dette forumet';
$lang['nb_NO']['Forum']['REMOVE'] = 'Fjern';
$lang['nb_NO']['Forum']['RSSFORUM'] = 'Send til \'%s\' forum';
$lang['nb_NO']['Forum']['RSSFORUMPOSTSTO'] = 'Forum melding til \'%s\'';
$lang['nb_NO']['Forum']['RSSFORUMS'] = 'Send til alle forum';
$lang['nb_NO']['Forum']['SECONDS'] = 'sekunder';
$lang['nb_NO']['Forum']['SINGULARNAME'] = 'Forum';
$lang['nb_NO']['Forum.ss'][''] = 'Gå til %s emne';
$lang['nb_NO']['Forum.ss']['ANNOUNCEMENTS'] = 'Annonseringer';
$lang['nb_NO']['Forum.ss']['BY'] = 'av ';
$lang['nb_NO']['Forum.ss']['CLICKTOUSER'] = 'Klikk her for å vise';
$lang['nb_NO']['Forum.ss']['GOTOFIRSTUNREAD'] = 'Gå til første uleste post i %s emne.';
$lang['nb_NO']['Forum.ss']['GOTOTHISTOPIC'] = 'Gå til %s emne';
$lang['nb_NO']['Forum.ss']['LASTPOST'] = 'Siste meldinger';
$lang['nb_NO']['Forum.ss']['NEWTOPIC'] = 'Klikk her for å starte nytt emne';
$lang['nb_NO']['Forum.ss']['NEWTOPICIMAGE'] = 'Start nytt emne';
$lang['nb_NO']['Forum.ss']['NEWTOPICTEXT'] = 'klikk her for å starte et nytt emne';
$lang['nb_NO']['Forum.ss']['NOTOPICS'] = 'Det er ingen emner i dette forum,';
$lang['nb_NO']['Forum.ss']['POSTS'] = 'Meldinger';
$lang['nb_NO']['Forum.ss']['PREVLNK'] = 'Forrige side';
$lang['nb_NO']['Forum.ss']['READONLYFORUM'] = 'Dette forum kan bare leses. Du kan ikke svare eller starte nye tråder.';
$lang['nb_NO']['Forum.ss']['TOPIC'] = 'Emne';
$lang['nb_NO']['Forum.ss']['TOPICS'] = 'Emne';
$lang['nb_NO']['Forum']['SUBSCRIBETOPIC'] = 'Meld deg på dette emne (Motta epostmelding når ett nytt svar er lagt til)';
$lang['nb_NO']['Forum']['TITLE'] = 'Generell diskusjon';
$lang['nb_NO']['Forum']['WELCOMEFORUM'] = 'Velkommen til forum module! Dette er en standard forum side. Du kan nå legge til emner.';
$lang['nb_NO']['Forum']['WELCOMEFORUMHOLDER'] = 'Velkommen til forum module. Dette er en standard forumholder side. Du kan noålegge til forum.';
$lang['nb_NO']['Forum']['WRONGPERMISSION'] = 'Du har ikke tilgang til å endre denne meldingen.';
$lang['nb_NO']['Forum']['YES'] = 'Ja';
$lang['nb_NO']['ForumAdmin']['ARCHIVED'] = 'arkiverte emner';
$lang['nb_NO']['ForumAdmin']['AWAITING'] = 'ventede emner';
$lang['nb_NO']['ForumAdmin']['FORUM'] = 'Forum:';
$lang['nb_NO']['ForumAdmin']['MODERATED'] = 'Modererte emner';
$lang['nb_NO']['ForumAdmin']['REJECTED'] = 'avviste emner';
$lang['nb_NO']['ForumAdmin_right.ss']['EDITPAGE'] = 'Endre side';
$lang['nb_NO']['ForumAdmin_right.ss']['WELCOME'] = 'Velkommen til %s! Vennligst klikk på en av inngangene på venstre side.';
$lang['nb_NO']['ForumCategory']['PLURALNAME'] = 'Forum Kategorier';
$lang['nb_NO']['ForumCategory']['SINGULARNAME'] = 'Forum Kategori';
$lang['nb_NO']['ForumFooter.ss']['CURRENTLYON'] = 'Pålogget nå:';
$lang['nb_NO']['ForumFooter.ss']['ISONLINE'] = 'er pålogget';
$lang['nb_NO']['ForumFooter.ss']['LATESTMEMBER'] = 'Velkommen til vårt nyeste medlem:';
$lang['nb_NO']['ForumFooter.ss']['NOONLINE'] = 'Ingen er pålogget.';
$lang['nb_NO']['ForumHeader.ss']['BY'] = 'av';
$lang['nb_NO']['ForumHeader.ss']['IN'] = 'i';
$lang['nb_NO']['ForumHeader.ss']['JUMPTO'] = 'Gå til:';
$lang['nb_NO']['ForumHeader.ss']['MEMBERS'] = 'medlemmer';
$lang['nb_NO']['ForumHeader.ss']['POSTS'] = 'Meldinger';
$lang['nb_NO']['ForumHeader.ss']['SEARCH'] = 'Søk:';
$lang['nb_NO']['ForumHeader.ss']['SEARCHBUTTON'] = 'Søk';
$lang['nb_NO']['ForumHeader.ss']['SELECT'] = 'Velg';
$lang['nb_NO']['ForumHeader.ss']['TOPICS'] = 'Emner';
$lang['nb_NO']['ForumHolder']['PLURALNAME'] = 'Forum Holdere';
$lang['nb_NO']['ForumHolder']['SEARCHEDFOR'] = 'Du søkte etter  \'%s\'.';
$lang['nb_NO']['ForumHolder']['SEARCHRESULTS'] = 'Søkeresultat';
$lang['nb_NO']['ForumHolder']['SINGULARNAME'] = 'Forum Holder';
$lang['nb_NO']['ForumHolder.ss']['FORUM'] = 'Forum';
$lang['nb_NO']['ForumHolder.ss']['FORUMS'] = 'Forum';
$lang['nb_NO']['ForumHolder.ss']['LASTPOST'] = 'Siste melding';
$lang['nb_NO']['ForumHolder.ss']['POSTS'] = 'Meldinger';
$lang['nb_NO']['ForumHolder.ss']['THREADS'] = 'Tråder';
$lang['nb_NO']['ForumHolder_List.ss']['GOTOLATEST'] = 'Gå til siste post i %s';
$lang['nb_NO']['ForumHolder_List.ss']['GOTOTHISTOPIC'] = 'Gå til %s emne';
$lang['nb_NO']['ForumHolder_search.ss'][''] = 'Gå til %s emne';
$lang['nb_NO']['ForumHolder_search.ss']['BY'] = 'av';
$lang['nb_NO']['ForumHolder_search.ss']['CLICKTOUSER'] = 'klikk her for å vise';
$lang['nb_NO']['ForumHolder_search.ss']['CLICKTOUSER2'] = '&#39;s profil';
$lang['nb_NO']['ForumHolder_search.ss']['NORESULTS'] = 'Det er ingen resultater for disse ord(ene)';
$lang['nb_NO']['ForumHolder_search.ss']['PAGE'] = 'Side:';
$lang['nb_NO']['ForumHolder_search.ss']['POST'] = 'Melding';
$lang['nb_NO']['ForumHolder_search.ss']['TOPIC'] = 'Emne';
$lang['nb_NO']['ForumLogin.ss']['LOGGEDINAS'] = 'Du er logget inn som';
$lang['nb_NO']['ForumLogin.ss']['LOGIN'] = 'Logg inn';
$lang['nb_NO']['ForumLogin.ss']['LOGINEXPLICATION'] = 'Klikk her for å logge inn';
$lang['nb_NO']['ForumLogin.ss']['LOGOUT'] = 'Logge ut';
$lang['nb_NO']['ForumLogin.ss']['LOGOUTEXPLICATION'] = 'Klikk her for å logge ut';
$lang['nb_NO']['ForumLogin.ss']['LOSTPASS'] = 'Glemt passord';
$lang['nb_NO']['ForumLogin.ss']['LOSTPASSEXPLICATION'] = 'Klikk her for å motta ditt passord';
$lang['nb_NO']['ForumLogin.ss']['OPENID'] = 'registrer med OpenID';
$lang['nb_NO']['ForumLogin.ss']['OPENIDDESC1'] = 'OpenID er et internett identifikasjonssystem som gir deg anledning til å logge deg på mange websider med en enkelt konto.';
$lang['nb_NO']['ForumLogin.ss']['OPENIDDESC2'] = 'Med OpenID, din ID blir en URL (f.eks. http://<strong>username</strong>.myopenid.com/). du kan få en fri OpenID f.eks fra <a href="http://www.myopenid.com">myopenid.com</a>.';
$lang['nb_NO']['ForumLogin.ss']['OPENIDDESC3'] = 'For mere informasjon besøk <a href="http://openid.net"> offisiell OpenID side.';
$lang['nb_NO']['ForumLogin.ss']['OPENIDEXPLICATION'] = 'Klikk her for å registrere med OpenID';
$lang['nb_NO']['ForumLogin.ss']['PROFILE'] = 'Profil';
$lang['nb_NO']['ForumLogin.ss']['PROFILEEXPLICATION'] = 'Klikk her for å endre din profil';
$lang['nb_NO']['ForumLogin.ss']['REGEXPLICATION'] = 'Klikk her for å registrere deg';
$lang['nb_NO']['ForumLogin.ss']['REGISTER'] = 'Registrer';
$lang['nb_NO']['ForumLogin.ss']['WHATOPENID'] = 'Hva er OpenID?';
$lang['nb_NO']['ForumLogin.ss']['WHATOPENIDUPPER'] = 'Hva er OpenID?';
$lang['nb_NO']['ForumMemberProfile']['AUTHENTICATIONFAILED'] = 'OpenID/i-navn autentifiseringen feilet.';
$lang['nb_NO']['ForumMemberProfile']['CANCELLEDVERIFICATION'] = 'Verifikasjonen ble avbrutt. Vennligst prøv igjen.';
$lang['nb_NO']['ForumMemberProfile']['EMAILEXISTS'] = 'Beklager men den epostadressen eksisterer allerede. Vennligst velg en annen.';
$lang['nb_NO']['ForumMemberProfile']['ENTEROPENID'] = 'Vennligst skriv inn din OpenID for å fortsette registrering';
$lang['nb_NO']['ForumMemberProfile']['FORUMREGTITLE'] = 'Forum Registrering';
$lang['nb_NO']['ForumMemberProfile']['FORUMUSERPROFILE'] = 'Forum brukerprofil';
$lang['nb_NO']['ForumMemberProfile']['FORUMUSERREGISTER'] = 'Forum registrering';
$lang['nb_NO']['ForumMemberProfile']['NICKNAMEEXISTS'] = 'Beklager, dette nicket eksisterer allerede. Vennligst velg et annet.';
$lang['nb_NO']['ForumMemberProfile']['OPENIDEXISTS'] = 'Beklager, men den OpenID eksisterer allerede. Vennligst velg en anne eller registrer uten OpenID.';
$lang['nb_NO']['ForumMemberProfile']['PASSNOTMATCH'] = 'Passordene må være i overenstemmelse med hverandre. Vennligst forsøk igjen.';
$lang['nb_NO']['ForumMemberProfile']['REGISTER'] = 'Register';
$lang['nb_NO']['ForumMemberProfile']['REGISTEROPENID'] = 'Registrer med OpenID';
$lang['nb_NO']['ForumMemberProfile']['SAVECHANGES'] = 'Lagre endringer';
$lang['nb_NO']['ForumMemberProfile']['UNEXPECTEDERROR'] = 'En uventet feil oppstod. Vennligst forsøk å registrer en gang til uten OpenID';
$lang['nb_NO']['ForumMemberProfile']['USERPROFILE'] = 'Brukerprofil';
$lang['nb_NO']['ForumMemberProfile']['WRONGPERMISSION'] = 'Du har ikke tilgang til å endre det medlemmet.';
$lang['nb_NO']['ForumMemberProfile_show.ss']['AVATAR'] = 'Avatar';
$lang['nb_NO']['ForumMemberProfile_show.ss']['COUNTRY'] = 'Land';
$lang['nb_NO']['ForumMemberProfile_show.ss']['EMAIL'] = 'Epost';
$lang['nb_NO']['ForumMemberProfile_show.ss']['FIRSTNAME'] = 'Fornavn';
$lang['nb_NO']['ForumMemberProfile_show.ss']['FORUMRANK'] = 'Forum rangering';
$lang['nb_NO']['ForumMemberProfile_show.ss']['LASTPOST'] = 'Siste melding %s';
$lang['nb_NO']['ForumMemberProfile_show.ss']['LATESTPOSTS'] = 'Siste meldinger';
$lang['nb_NO']['ForumMemberProfile_show.ss']['NICKNAME'] = 'Nick';
$lang['nb_NO']['ForumMemberProfile_show.ss']['NORANK'] = 'Ingen rangering';
$lang['nb_NO']['ForumMemberProfile_show.ss']['OCCUPATION'] = 'Yrke';
$lang['nb_NO']['ForumMemberProfile_show.ss']['POSTNO'] = 'Antall meldinger';
$lang['nb_NO']['ForumMemberProfile_show.ss']['PROFILE'] = 'Profil';
$lang['nb_NO']['ForumMemberProfile_show.ss']['SURNAME'] = 'Etternavn';
$lang['nb_NO']['ForumMemberProfile_show.ss']['USERSAVATAR'] = '&#39;s avatar';
$lang['nb_NO']['ForumMember_ForgotNicknameEmail.ss']['HI'] = 'Hei,';
$lang['nb_NO']['ForumMember_ForgotNicknameEmail.ss']['MESSAGE'] = 'Her er ditt brukernavn for <a href="home/">%s</a>.';
$lang['nb_NO']['ForumMember_ForgotNicknameEmail.ss']['USERNAME'] = 'Brukernavn:';
$lang['nb_NO']['ForumMember_TopicNotification.ss']['HI'] = 'Hei %s,';
$lang['nb_NO']['ForumMember_TopicNotification.ss']['NEWPOSTMESSAGE'] = 'En ny melding er lagt til emne du har meldt deg på.';
$lang['nb_NO']['ForumMember_TopicNotification.ss']['NOTIFICATIONMESSAGE'] = 'Du vil ikke motta tilleggsmelding før du besøker forumet igjen.';
$lang['nb_NO']['ForumMember_TopicNotification.ss']['REPLYLINK'] = 'Vis emne';
$lang['nb_NO']['ForumMember_TopicNotification.ss']['UNSUBSCRIBETEXT'] = 'Meld av dette emne';
$lang['nb_NO']['ForumRole']['ADMIN'] = 'Administrator';
$lang['nb_NO']['ForumRole']['ANONYMOUS'] = 'Anonym bruker';
$lang['nb_NO']['ForumRole']['AVATAR'] = 'Last opp avatar';
$lang['nb_NO']['ForumRole']['CANGRAVATAR'] = 'Om du bruker Gravatars så la denne være tom';
$lang['nb_NO']['ForumRole']['COMMEMBER'] = 'Forum medlem';
$lang['nb_NO']['ForumRole']['CONFIRMPASS'] = 'Bekreft passord';
$lang['nb_NO']['ForumRole']['COUNTRY'] = 'Land';
$lang['nb_NO']['ForumRole']['EMAIL'] = 'Epost';
$lang['nb_NO']['ForumRole']['FIRSTNAME'] = 'Fornavn';
$lang['nb_NO']['ForumRole']['MOD'] = 'Moderator';
$lang['nb_NO']['ForumRole']['NICKNAME'] = 'Nick';
$lang['nb_NO']['ForumRole']['OCCUPATION'] = 'Yrke';
$lang['nb_NO']['ForumRole']['OPENIDINAME'] = 'OpenID/i-name';
$lang['nb_NO']['ForumRole']['PASSOPTMESSAGE'] = 'Siden du har en OpenID eller et i-name passordet valgfritt. Om du skriver inn et, vil du også kunne logge inn med din epostadresse.';
$lang['nb_NO']['ForumRole']['PASSWORD'] = 'Passord';
$lang['nb_NO']['ForumRole']['PERSONAL'] = 'Personlige opplysninger';
$lang['nb_NO']['ForumRole']['RATING'] = 'Bruker poeng';
$lang['nb_NO']['ForumRole']['SURNAME'] = 'Etternavn';
$lang['nb_NO']['ForumRole']['TRANSFERSUCCEEDED'] = 'Dataoverføringen var vellykket. Men, for å fullføre den må du slette forummedlemstabell. For å gjøre dette, utfør spørringen "DROP TABLE \'ForumMember\'"';
$lang['nb_NO']['ForumRole']['USERDETAILS'] = 'Brukerdetaljer';
$lang['nb_NO']['Forum_editpost.ss']['AVAILABLEBB'] = 'Tilgjengelige BB Kode tagger';
$lang['nb_NO']['Forum_editpost.ss']['EXAMPLE'] = 'Eksempel';
$lang['nb_NO']['Forum_editpost.ss']['NOTLOGGEDINPOST'] = 'Om du ønsker å skrive en melding, vennligst <a href="Security/login" title="log in">logg inn</a> eller <a href="ForumMemberProfile/register" title="register">registrer</a> først.';
$lang['nb_NO']['Forum_reply.ss']['AVAILABLEBB'] = 'Tilgjengelige BB Kode tagger';
$lang['nb_NO']['Forum_reply.ss']['EXAMPLE'] = 'Eksempel';
$lang['nb_NO']['Forum_show.ss']['AUTHOR'] = 'Forfatter';
$lang['nb_NO']['Forum_show.ss']['CLICKGOTOEND'] = 'klikk her for å gå til slutten av meldingen';
$lang['nb_NO']['Forum_show.ss']['CLICKGOTOTOP'] = 'Klikk her for å gå til toppen av meldingen';
$lang['nb_NO']['Forum_show.ss']['CLICKREPLY'] = 'Klikk for å svare';
$lang['nb_NO']['Forum_show.ss']['CLICKSUBSCRIBE'] = 'Klikk her for å melde deg på dette emnet';
$lang['nb_NO']['Forum_show.ss']['CLICKUNSUBSCRIBE'] = 'Klikk her for å melde deg av dette emne';
$lang['nb_NO']['Forum_show.ss']['GOTOEND'] = 'Gå til slutten';
$lang['nb_NO']['Forum_show.ss']['GOTOTOP'] = 'Gå til toppen';
$lang['nb_NO']['Forum_show.ss']['NEXTLINK'] = 'Neste';
$lang['nb_NO']['Forum_show.ss']['NEXTTITLE'] = 'Vis neste side';
$lang['nb_NO']['Forum_show.ss']['PAGE'] = 'Side:';
$lang['nb_NO']['Forum_show.ss']['PREVLINK'] = 'Forrige';
$lang['nb_NO']['Forum_show.ss']['PREVTITLE'] = 'Vis forrige side';
$lang['nb_NO']['Forum_show.ss']['REPLY'] = 'Svar';
$lang['nb_NO']['Forum_show.ss']['SUBSCRIBE'] = 'Meld deg på';
$lang['nb_NO']['Forum_show.ss']['TOPIC'] = 'Emne:';
$lang['nb_NO']['Forum_show.ss']['UNSUBSCRIBE'] = 'Meld deg av';
$lang['nb_NO']['Forum_show.ss']['VIEWS'] = 'Visninger';
$lang['nb_NO']['Forum_starttopic.ss']['AVAILABLEBB'] = 'Tilgjengelige BB Kode tagger';
$lang['nb_NO']['Forum_starttopic.ss']['EXAMPLE'] = 'Eksempel';
$lang['nb_NO']['Post']['ACTIVEPOSTS'] = 'Aktiv melding';
$lang['nb_NO']['Post']['ARCHIVE'] = 'Arkiv';
$lang['nb_NO']['Post']['ARCHIVED'] = 'Arkivert';
$lang['nb_NO']['Post']['AUTHOR'] = 'Forfatter';
$lang['nb_NO']['Post']['AWAITING'] = 'Venter';
$lang['nb_NO']['Post']['AWAITINGPOSTS'] = 'Venter på meldinger';
$lang['nb_NO']['Post']['CONTENT'] = 'Innhold';
$lang['nb_NO']['Post']['CREATED'] = 'Opprettet';
$lang['nb_NO']['Post']['DELETE'] = 'slette';
$lang['nb_NO']['Post']['EDIT'] = 'endre';
$lang['nb_NO']['Post']['LASTEDIT'] = 'Sist endret';
$lang['nb_NO']['Post']['MAIN'] = 'Hoved';
$lang['nb_NO']['Post']['MODERATED'] = 'Moderert';
$lang['nb_NO']['Post']['PLURALNAME'] = 'Poster';
$lang['nb_NO']['Post']['POSTEDBY'] = 'Sendt av %s';
$lang['nb_NO']['Post']['POSTEDTO'] = 'Sende til: %s';
$lang['nb_NO']['Post']['POSTREPLIEDTO'] = 'Melding sendt til %s';
$lang['nb_NO']['Post']['REJECTED'] = 'Avvist';
$lang['nb_NO']['Post']['REJECTEDPOSTS'] = 'Avviste meldinger';
$lang['nb_NO']['Post']['REPLYLINK'] = 'Svar på post';
$lang['nb_NO']['Post']['RESPONSE'] = 'Sv: %s';
$lang['nb_NO']['Post']['SAVE'] = 'Lagre';
$lang['nb_NO']['Post']['SHOWLINK'] = 'Vis tråd';
$lang['nb_NO']['Post']['SINGULARNAME'] = 'Post';
$lang['nb_NO']['Post']['STATUS'] = 'Status';
$lang['nb_NO']['Post']['TITLE'] = 'Tittel';
$lang['nb_NO']['Post']['TOPICCREATED'] = 'Emne opprettet';
$lang['nb_NO']['Post']['TOPICDETAILS'] = 'Emne detaljer';
$lang['nb_NO']['Post']['TOPICINTERNALID'] = 'Emne intern ID';
$lang['nb_NO']['Post']['TOPICLASTEDIT'] = 'Emne sist endret';
$lang['nb_NO']['SinglePost.ss']['ATTACHED'] = 'Vedlagte filer';
$lang['nb_NO']['SinglePost.ss']['GOTOPROFILE'] = 'Gå til brukerprofil';
$lang['nb_NO']['SinglePost.ss']['LASTEDITED'] = 'Sist endret:';
$lang['nb_NO']['TopicListing.ss']['BY'] = 'av';
$lang['nb_NO']['TopicListing.ss']['CLICKTOUSER'] = 'Klikk her for å vise';
$lang['nb_NO']['TopicListing.ss']['GOTOFIRSTUNREAD'] = 'Gå til den første uleste posten i %s emne.';

?>