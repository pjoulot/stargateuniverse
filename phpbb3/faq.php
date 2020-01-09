<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr" xml:lang="fr">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" type="image/x-icon" href="http://stargateuniverse.lndo.site/wp-content/themes/church_40/images/favicon.ico" />
<style type="text/css">
<!--
#ombre {
	height: 15px;
	width: 960px;
}
-->
</style>
<title>Stargate Universe &bull; Foire aux questions (Questions posées fréquemment)</title>

<link rel="stylesheet" href="./styles/polyethylene/theme/stylesheet.css" type="text/css" />

<script type="text/javascript">
// <![CDATA[

function popup(url, width, height, name)
{
if (!name)
{
name = '_popup';
}

window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
return false;
}

function jumpto()
{
var page = prompt('Entrer le numéro de page où vous souhaitez aller.:', '');
var perpage = '';
var base_url = '';

if (page !== null && !isNaN(page) && page > 0)
{
document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * perpage);
}
}

/**
* Find a member
*/
function find_username(url)
{
popup(url, 760, 570, '_usersearch');
return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
var parent = document.getElementById(id);
if (!parent)
{
eval('parent = document.' + id);
}

if (!parent)
{
return;
}

var rb = parent.getElementsByTagName('input');

for (var r = 0; r < rb.length; r++)
{
if (rb[r].name.substr(0, name.length) == name)
{
rb[r].checked = state;
}
}
}


// ]]>
</script>
</head>
<body class="ltr">

<a id="wrapheader" name="wrapheader" accesskey="t"></a>

<div id="kontener">
<div id="header"></div>
<div id="ombre"></div>
<div id="publicite" style="text-align:center;margin-bottom:5px"><script type="text/javascript"><!--
google_ad_client = "pub-1317041983120128";
/* StargateUniverse.Fr Publicité Forum Header */
google_ad_slot = "4340228536";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div id="content">
<div id="menu">
  <span class="left"><a href="http://stargateuniverse.lndo.site">RETOUR A LA PAGE D'ACCUEIL</a>&nbsp;&nbsp;
  </span>
  <span class="right">
  <a href="./faq.php">FAQ</a>
    </span>
</div>
<span class="left">Dernière visite le Mer 3 Avr 2013 23:56</span>
<span class="right">Nous sommes le Mer 3 Avr 2013 23:56</span>


<br style="clear: both;" />

<p class="breadcrumbs">
<img src="./styles/polyethylene/theme/images/bread.png" alt="" />
<a href="http://stargateuniverse.lndo.site/phpbb3/">Index du forum</a></p>
<br />
<a name="faqtop"></a>

<div id="pagecontent">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th>Foire aux questions (Questions posées fréquemment)</th>
	</tr>
	<tr>
		<td class="row1">
					<span class="gen"><b>Problèmes d’identification et d’inscription</b></span><br />
							<span class="gen"><a class="postlink" href="#f00">Pourquoi ne puis-je pas me connecter?</a></span><br />
							<span class="gen"><a class="postlink" href="#f01">Pourquoi dois-je m’inscrire après tout?</a></span><br />
							<span class="gen"><a class="postlink" href="#f02">Pourquoi suis-je automatiquement déconnecté?</a></span><br />
							<span class="gen"><a class="postlink" href="#f03">Comment empêcher mon nom d’apparaître dans la liste des utilisateurs connectés?</a></span><br />
							<span class="gen"><a class="postlink" href="#f04">J’ai perdu mon mot de passe!</a></span><br />
							<span class="gen"><a class="postlink" href="#f05">Je suis enregistré mais je ne peux pas me connecter!</a></span><br />
							<span class="gen"><a class="postlink" href="#f06">Je me suis enregistré par le passé mais je ne peux plus me connecter?!</a></span><br />
							<span class="gen"><a class="postlink" href="#f07">Que signifie COPPA?</a></span><br />
							<span class="gen"><a class="postlink" href="#f08">Pourquoi ne puis-je pas m’inscrire?</a></span><br />
							<span class="gen"><a class="postlink" href="#f09">A quoi sert “Supprimer les cookies du forum”?</a></span><br />
						<br />
					<span class="gen"><b>Préférences et paramètres de l’utilisateur</b></span><br />
							<span class="gen"><a class="postlink" href="#f10">Comment modifier mes paramètres?</a></span><br />
							<span class="gen"><a class="postlink" href="#f11">Les heures ne sont pas correctes!</a></span><br />
							<span class="gen"><a class="postlink" href="#f12">J’ai changé mon fuseau horaire et l’heure est encore incorrecte!</a></span><br />
							<span class="gen"><a class="postlink" href="#f13">Ma langue n’est pas dans la liste!</a></span><br />
							<span class="gen"><a class="postlink" href="#f14">Comment afficher une image sous mon nom?</a></span><br />
							<span class="gen"><a class="postlink" href="#f15">Qu’est-ce que mon rang et comment le modifier?</a></span><br />
							<span class="gen"><a class="postlink" href="#f16">Lorsque je clique sur le lien <em>e-mail</em> d’un utilisateur, on me demande de me connecter?</a></span><br />
						<br />
					<span class="gen"><b>Problèmes liés aux envois de messages</b></span><br />
							<span class="gen"><a class="postlink" href="#f20">Comment poster dans un forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f21">Comment modifier ou supprimer un message?</a></span><br />
							<span class="gen"><a class="postlink" href="#f22">Comment ajouter une signature à mes messages?</a></span><br />
							<span class="gen"><a class="postlink" href="#f23">Comment créer un sondage?</a></span><br />
							<span class="gen"><a class="postlink" href="#f24">Pourquoi ne puis-je pas ajouter plus d’options à mon sondage?</a></span><br />
							<span class="gen"><a class="postlink" href="#f25">Comment modifier ou supprimer un sondage?</a></span><br />
							<span class="gen"><a class="postlink" href="#f26">Pourquoi ne puis-je pas accéder à un forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f27">Pourquoi ne puis-je pas joindre des fichiers à mon message?</a></span><br />
							<span class="gen"><a class="postlink" href="#f28">Pourquoi ai-je reçu un avertissement?</a></span><br />
							<span class="gen"><a class="postlink" href="#f29">Comment rapporter des messages à un modérateur?</a></span><br />
							<span class="gen"><a class="postlink" href="#f210">A quoi sert le bouton “Sauvegarder” dans la page de rédaction de message?</a></span><br />
							<span class="gen"><a class="postlink" href="#f211">Pourquoi mon message doit être validé?</a></span><br />
							<span class="gen"><a class="postlink" href="#f212">Comment remonter mon sujet?</a></span><br />
						<br />
					<span class="gen"><b>Mise en forme et types de sujet</b></span><br />
							<span class="gen"><a class="postlink" href="#f30">Que sont les BBCodes?</a></span><br />
							<span class="gen"><a class="postlink" href="#f31">Puis-je utiliser le HTML?</a></span><br />
							<span class="gen"><a class="postlink" href="#f32">Que sont les smileys?</a></span><br />
							<span class="gen"><a class="postlink" href="#f33">Puis-je publier des images?</a></span><br />
							<span class="gen"><a class="postlink" href="#f34">Que sont les annonces globales?</a></span><br />
							<span class="gen"><a class="postlink" href="#f35">Que sont les annonces?</a></span><br />
							<span class="gen"><a class="postlink" href="#f36">Que sont les post-it?</a></span><br />
							<span class="gen"><a class="postlink" href="#f37">Que sont les sujets verrouillés?</a></span><br />
							<span class="gen"><a class="postlink" href="#f38">Que sont les icônes de sujet?</a></span><br />
						<br />
					<span class="gen"><b>Niveaux d’utilisateurs et groupes</b></span><br />
							<span class="gen"><a class="postlink" href="#f40">Qui sont les administrateurs?</a></span><br />
							<span class="gen"><a class="postlink" href="#f41">Que sont les modérateurs?</a></span><br />
							<span class="gen"><a class="postlink" href="#f42">Que sont les groupes d’utilisateurs?</a></span><br />
							<span class="gen"><a class="postlink" href="#f43">Comment adhérer à un groupe d’utilisateurs?</a></span><br />
							<span class="gen"><a class="postlink" href="#f44">Comment devenir modérateur de groupe?</a></span><br />
							<span class="gen"><a class="postlink" href="#f45">Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente?</a></span><br />
							<span class="gen"><a class="postlink" href="#f46">Qu’est-ce qu’un “Groupe par défaut”?</a></span><br />
							<span class="gen"><a class="postlink" href="#f47">Qu’est-ce que le lien “L’équipe du forum”?</a></span><br />
						<br />
					<span class="gen"><b>Messagerie privée</b></span><br />
							<span class="gen"><a class="postlink" href="#f50">Je ne peux pas envoyer de messages privés!</a></span><br />
							<span class="gen"><a class="postlink" href="#f51">Je reçois sans arrêt des messages indésirables!</a></span><br />
							<span class="gen"><a class="postlink" href="#f52">J’ai reçu un e-mail ou un courrier abusif d’un utilisateur de ce forum!</a></span><br />
						<br />
					<span class="gen"><b>Amis et ignorés</b></span><br />
							<span class="gen"><a class="postlink" href="#f60">Que sont mes listes d’amis et d’ignorés?</a></span><br />
							<span class="gen"><a class="postlink" href="#f61">Comment puis-je ajouter/supprimer des utilisateurs de ma liste d’amis ou d’ignorés?</a></span><br />
						<br />
					<span class="gen"><b>Recherche dans les forums</b></span><br />
							<span class="gen"><a class="postlink" href="#f70">Comment rechercher dans les forums?</a></span><br />
							<span class="gen"><a class="postlink" href="#f71">Pourquoi ma recherche ne renvoie aucun résultat?</a></span><br />
							<span class="gen"><a class="postlink" href="#f72">Pourquoi ma recherche retourne une page blanche!?</a></span><br />
							<span class="gen"><a class="postlink" href="#f73">Comment rechercher des membres?</a></span><br />
							<span class="gen"><a class="postlink" href="#f74">Comment puis-je trouver mes propres messages et sujets?</a></span><br />
						<br />
					<span class="gen"><b>Surveillance des sujets et favoris</b></span><br />
							<span class="gen"><a class="postlink" href="#f80">Quelle est la différence entre les favoris et la surveillance?</a></span><br />
							<span class="gen"><a class="postlink" href="#f81">Comment surveiller des forums ou sujets particuliers?</a></span><br />
							<span class="gen"><a class="postlink" href="#f82">Comment puis-je supprimer mes surveillances de sujets?</a></span><br />
						<br />
					<span class="gen"><b>Fichiers joints</b></span><br />
							<span class="gen"><a class="postlink" href="#f90">Quels fichiers joints sont autorisés sur ce forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f91">Comment trouver tous mes fichiers joints?</a></span><br />
						<br />
					<span class="gen"><b>Concernant phpBB 3</b></span><br />
							<span class="gen"><a class="postlink" href="#f100">Qui sont les auteurs de ce forum?</a></span><br />
							<span class="gen"><a class="postlink" href="#f101">Pourquoi la fonctionnalité X n’est pas disponible?</a></span><br />
							<span class="gen"><a class="postlink" href="#f102">Qui contacter pour les abus ou les questions légales concernant ce forum?</a></span><br />
						<br />
				</td>
	</tr>
	<tr>
		<td class="cat">&nbsp;</td>
	</tr>
	</table>

	<br clear="all" />

			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Problèmes d’identification et d’inscription</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f00"></a><b>&#187; Pourquoi ne puis-je pas me connecter?</b></div>
				<div class="postbody">Plusieurs raisons peuvent expliquer cela. Premièrement, vérifiez que vos nom d’utilisateur et mot de passe sont corrects. S’ils le sont, contactez l’administrateur pour vérifier que vous n’avez pas été banni. Il est possible aussi que l’administrateur ait une erreur de configuration de son côté, et qu’il soit nécessaire de la corriger.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f01"></a><b>&#187; Pourquoi dois-je m’inscrire après tout?</b></div>
				<div class="postbody">Vous pouvez ne pas en avoir besoin mais l’administrateur peut décider si vous devez vous inscrire pour poster des messages. Par ailleurs, l’inscription vous permet de bénéficier de fonctionnalités supplémentaires inaccessibles aux visiteurs comme les avatars personnalisés, la messagerie privée, l’envoi d’e-mails aux autres membres, l’adhésion à des groupes, etc. L’inscription est rapide et vivement conseillée.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f02"></a><b>&#187; Pourquoi suis-je automatiquement déconnecté?</b></div>
				<div class="postbody">Si vous ne cochez pas la case <em>Me connecter automatiquement à chaque visite</em> lors de votre connexion, vous ne resterez connecté que pendant une durée déterminée. Cela empêche l’utilisation abusive de votre compte. Pour rester connecté, cochez cette case lors de la connexion. Ce n’est pas recommandé si vous utilisez un ordinateur public pour accéder au forum (bibliothèque, cybercafé, université, etc.). Si vous ne voyez pas cette case, cela signifie que l’administrateur a désactivé cette fonctionnalité.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f03"></a><b>&#187; Comment empêcher mon nom d’apparaître dans la liste des utilisateurs connectés?</b></div>
				<div class="postbody">Vous trouverez dans votre panneau de l’utilisateur, onglet “Préférences du forum”, l’option <em>Cacher mon statut en ligne</em>. Mettez cette option sur <samp>Oui</samp> ainsi seuls les administrateurs, les modérateurs et vous verrez votre nom dans la liste. Vous serez compté parmi les utilisateurs invisibles.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f04"></a><b>&#187; J’ai perdu mon mot de passe!</b></div>
				<div class="postbody">Pas de panique! Bien que votre mot de passe ne puisse pas être récupéré, il peut toutefois être réinitialisé. Pour cela, sur la page de connexion, cliquez sur <em>J’ai oublié mon mot de passe</em>. Suivez les instructions et vous devriez pouvoir à nouveau vous connecter.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f05"></a><b>&#187; Je suis enregistré mais je ne peux pas me connecter!</b></div>
				<div class="postbody">Vérifiez, en premier, vos nom d’utilisateur et mot de passe. S’ils sont corrects, il y a deux possibilités. Si la gestion COPPA est active et si vous avez indiqué avoir moins de 13 ans lors de l’inscription, vous devrez alors suivre les instructions reçues. Certains forums nécessitent que toute nouvelle inscription soit activée par vous-même ou par l’administrateur avant que vous puissiez vous connecter. Cette information est indiquée lors de l’inscription. Si vous avez reçu un e-mail, suivez ses instructions. Si vous n’avez pas reçu d’e-mail, il se peut que vous ayez fourni une adresse incorrecte ou que l’e-mail ait été traité par un filtre anti-spam. Si vous êtes sûr de l’adresse e-mail fournie, contactez l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f06"></a><b>&#187; Je me suis enregistré par le passé mais je ne peux plus me connecter?!</b></div>
				<div class="postbody">Commencez par vérifier vos nom d’utilisateur et mot de passe dans l’e-mail reçu lors de votre inscription et réessayez. Il est possible aussi que l’administrateur ait supprimé ou désactivé votre compte. En effet, il est courant de supprimer régulièrement les utilisateurs ne postant pas pour réduire la taille de la base de données. Si cela vous arrive, tentez de vous réinscrire et soyez plus investi dans le forum.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f07"></a><b>&#187; Que signifie COPPA?</b></div>
				<div class="postbody">COPPA (ou <em>Child Online Privacy and Protection Act</em> de 1998) est une loi aux Etats-Unis qui dit que les sites Internet pouvant recueillir des informations de mineurs de moins de 13 ans doivent obtenir le consentement <strong>écrit</strong> des parents (ou d’un tuteur légal) pour la collecte de ces informations permettant d’identifier un mineur de moins de 13 ans. Si vous n’êtes pas sûr que cela s’applique à vous, lorsque vous vous inscrivez, ou au site Internet auquel vous tentez de vous inscrire, demandez une assistance légale. Notez que l’équipe du forum ne peut pas fournir de conseil légal et ne saurait être contactée pour des questions légales de toute sorte, à l’exception de celles soulignées ci-dessous.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f08"></a><b>&#187; Pourquoi ne puis-je pas m’inscrire?</b></div>
				<div class="postbody">Il est possible que le propriétaire du site ait banni votre IP ou interdit le nom d’utilisateur que vous souhaitez utiliser. Le propriétaire du site peut également avoir désactivé l’inscription pour en empêcher de nouvelles. Contactez l’administrateur pour plus de renseignements.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f09"></a><b>&#187; A quoi sert “Supprimer les cookies du forum”?</b></div>
				<div class="postbody">Cela supprime tous les cookies créés par phpBB3 qui conservent votre identification et votre connexion au forum. Ils fournissent aussi des fonctionnalités telles que l’enregistrement du statut des messages, lu ou non-lu, si cela a été activé par l’administrateur. Si vous avez des problèmes de connexion/déconnexion, la suppression des cookies peut les corriger.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Préférences et paramètres de l’utilisateur</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f10"></a><b>&#187; Comment modifier mes paramètres?</b></div>
				<div class="postbody">Tous vos paramètres (si vous êtes inscrit) sont enregistrés dans notre base de données. Pour les modifier, visitez le lien <em>Panneau de l’utilisateur</em> (généralement affiché en haut de toutes les pages du forum). Cela vous permettra de modifier tous vos paramètres et préférences.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f11"></a><b>&#187; Les heures ne sont pas correctes!</b></div>
				<div class="postbody">Il est possible que l’heure affichée soit sur un fuseau horaire différent de celui dans lequel vous êtes. Dans ce cas, vous devez modifier vos préférences pour le fuseau horaire de votre zone (Londres, Paris, New York, Sydney, etc.) dans le panneau de l’utilisateur. Notez que la modification du fuseau horaire, comme la plupart des paramètres n’est accessible qu’aux utilisateurs enregistrés. Donc si vous n’êtes pas inscrit, c’est le bon moment pour le faire.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f12"></a><b>&#187; J’ai changé mon fuseau horaire et l’heure est encore incorrecte!</b></div>
				<div class="postbody">Si vous êtes sûr d’avoir correctement paramétré votre fuseau horaire et l’heure d’été, il se peut que le serveur ne soit pas à l’heure. Signalez ce problème à l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f13"></a><b>&#187; Ma langue n’est pas dans la liste!</b></div>
				<div class="postbody">La raison la plus probable est que l’administrateur n’a pas installé votre langue ou bien que personne n’a encore traduit phpBB3 dans votre langue. Essayez de demander à l’administrateur d’installer la langue désirée. Si elle n’existe pas, vous êtes alors libre de créer une nouvelle traduction. Vous trouverez plus d’informations sur le site du groupe phpBB (voir le lien en bas de page).</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f14"></a><b>&#187; Comment afficher une image sous mon nom?</b></div>
				<div class="postbody">Il peut y avoir deux images sous chaque nom d’utilisateur sur la page de consultation des messages. La première est associée à votre rang, généralement des étoiles ou des blocs indiquant votre nombre de messages ou votre statut sur le forum. La seconde, une image plus grande, connue sous le nom d’avatar est généralement unique et personnelle à chaque utilisateur. C’est à l’administrateur d’activer les avatars et de décider de la manière dont ils sont mis à disposition. Si vous ne pouvez pas utiliser d’avatar, c’est peut-être une décision de l’administrateur. Vous pouvez le contacter pour lui demander ses raisons.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f15"></a><b>&#187; Qu’est-ce que mon rang et comment le modifier?</b></div>
				<div class="postbody">Les rangs qui apparaissent sous le nom d’utilisateur indiquent le nombre de messages postés ou identifient certains utilisateurs tels que les modérateurs et administrateurs. En général, vous ne pouvez pas directement modifier l’intitulé d’un rang car il est paramétré par l’administrateur. Si vous abusez des forums en postant des messages dans le seul but d’augmenter votre rang, un modérateur ou un administrateur peut rabaisser votre compteur de messages.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f16"></a><b>&#187; Lorsque je clique sur le lien <em>e-mail</em> d’un utilisateur, on me demande de me connecter?</b></div>
				<div class="postbody">Seuls les utilisateurs enregistrés peuvent s’envoyer des e-mails via le formulaire intégré (si la fonction a été activée par l’administrateur). Ceci pour empêcher un usage abusif de la fonctionnalité par les invités.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Problèmes liés aux envois de messages</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f20"></a><b>&#187; Comment poster dans un forum?</b></div>
				<div class="postbody">Cliquez sur le bouton adéquat (Nouveau ou Répondre) sur la page du forum ou des sujets. Il se peut que vous ayez besoin d’être enregistré pour écrire un message. Une liste des options disponibles est affichée en bas des pages des forums et des sujets, exemple: Vous <strong>pouvez</strong> poster des nouveaux sujets, Vous <strong>pouvez</strong> participer aux votes, etc.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f21"></a><b>&#187; Comment modifier ou supprimer un message?</b></div>
				<div class="postbody">A moins d’être administrateur ou modérateur, vous ne pouvez modifier ou supprimer que vos propres messages. Vous pouvez modifier un message (quelquefois dans une durée limitée après sa publication) en cliquant sur le bouton <em>éditer</em> du message correspondant. Si quelqu’un a déjà répondu au message, un petit texte s’affichera en bas du message indiquant qu’il a été édité, le nombre de fois qu’il a été modifié ainsi que la date et l’heure de la dernière édition. Ce message n’apparaîtra pas si un modérateur ou un administrateur modifie le message, cependant ils ont la possibilité de laisser une note indiquant qu’ils ont modifié le message. Notez que les utilisateurs ne peuvent pas supprimer un message une fois que quelqu’un y a répondu.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f22"></a><b>&#187; Comment ajouter une signature à mes messages?</b></div>
				<div class="postbody">Vous devez d’abord créer une signature dans votre panneau de l’utilisateur. Une fois créée, vous pouvez cocher <em>Attacher sa signature</em> sur le formulaire de rédaction de message. Vous pouvez aussi ajouter la signature par défaut à tous vos messages en activant la case correspondante dans le panneau de l’utilisateur (onglet <em>Préférences du forum --> Modifier les préférences de message</em>). Par la suite, vous pourrez toujours empêcher une signature d’être ajoutée à un message en décochant la case <em>Attacher sa signature</em> dans le formulaire de rédaction de message.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f23"></a><b>&#187; Comment créer un sondage?</b></div>
				<div class="postbody">Il est facile de créer un sondage, lors de la publication d’un nouveau sujet ou la modification du premier message d’un sujet (si vous en avez les permissions), cliquez sur l’onglet <em>Sondage</em> sous la partie message (si vous ne le voyez pas, vous n’avez probablement pas le droit de créer des sondages). Saisissez le titre du sondage et au moins deux options possibles, entrez une option par ligne dans le champ des réponses. Vous pouvez aussi indiquer le nombre de réponses qu’un utilisateur peut choisir lors de son vote dans “Option(s) par l’utilisateur”, limiter la durée en jours du sondage (mettre “0” pour une durée illimitée) et enfin permettre aux utilisateurs de modifier leur vote.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f24"></a><b>&#187; Pourquoi ne puis-je pas ajouter plus d’options à mon sondage?</b></div>
				<div class="postbody">Le nombre d’options maximum par sondage est défini par l’administrateur. Si vous avez besoin de indiquer plus d’options, contactez-le.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f25"></a><b>&#187; Comment modifier ou supprimer un sondage?</b></div>
				<div class="postbody">Comme pour les messages, les sondages ne peuvent être modifiés que par l’auteur original, un modérateur ou un administrateur. Pour modifier un sondage, cliquez sur le bouton <em>éditer</em> du premier message du sujet (c’est toujours celui auquel est associé le sondage). Si personne n’a voté, l’auteur peut modifier une option ou supprimer le sondage. Autrement, seuls les modérateurs et les administrateurs peuvent le modifier ou le supprimer. Ceci pour empêcher le trucage en changeant les intitulés en cours de sondage.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f26"></a><b>&#187; Pourquoi ne puis-je pas accéder à un forum?</b></div>
				<div class="postbody">Certains forums peuvent être réservés à certains utilisateurs ou groupes. Pour les consulter, les lire, y poster, etc., vous devez avoir une permission spéciale. Seuls les modérateurs de groupes et les administrateurs peuvent accorder cet accès, vous devez donc les contacter.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f27"></a><b>&#187; Pourquoi ne puis-je pas joindre des fichiers à mon message?</b></div>
				<div class="postbody">La possibilité d’ajouter des fichiers joints peut être accordée par forum, par groupe, ou par utilisateur. L’administrateur peut ne pas avoir autorisé l’ajout de fichiers joints pour le forum dans lequel vous postez, ou peut-être que seul un groupe peut en joindre. Contactez l’administrateur si vous ne savez pas pourquoi vous ne pouvez pas ajouter de fichiers joints sur un forum.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f28"></a><b>&#187; Pourquoi ai-je reçu un avertissement?</b></div>
				<div class="postbody">Chaque administrateur a son propre ensemble de règles pour son site. Si vous avez dérogé à une règle, vous pouvez recevoir un avertissement. Notez que c’est la décision de l’administrateur, et que le groupe phpBB n’est pas concerné par les avertissements d’un site donné. Contactez l’administrateur si vous ne comprenez pas les raisons de votre avertissement.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f29"></a><b>&#187; Comment rapporter des messages à un modérateur?</b></div>
				<div class="postbody">Si l’administrateur l’a permis, allez sur le message à signaler et vous devriez voir un bouton pour rapporter le message. En cliquant dessus, vous accéderez aux étapes nécessaires pour ce faire.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f210"></a><b>&#187; A quoi sert le bouton “Sauvegarder” dans la page de rédaction de message?</b></div>
				<div class="postbody">Il vous permet d’enregistrer les messages à terminer pour les poster plus tard. Pour les recharger, allez dans le panneau de l’utilisateur (onglet <em>Aperçu --> Gestion des brouillons</em>).</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f211"></a><b>&#187; Pourquoi mon message doit être validé?</b></div>
				<div class="postbody">L’administrateur peut avoir décidé que le forum dans lequel vous postez nécessite la validation des messages. Il est possible aussi que l’administrateur vous ait placé dans un groupe dont les messages doivent être validés avant d’être affichés. Contactez l’administrateur pour plus d’informations.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f212"></a><b>&#187; Comment remonter mon sujet?</b></div>
				<div class="postbody">En cliquant sur le lien “Remonter le sujet” lors de sa consultation, vous pouvez <em>remonter</em> le sujet en haut du forum sur la première page. Par ailleurs, si vous ne voyez pas ce lien, cela signifie que la remontée de sujet est désactivée ou que l’intervalle de temps pour autoriser la remontée n’est pas atteint. Il est également possible de remonter un sujet simplement en y répondant. Néanmoins, assurez-vous de respecter les règles du forum en le faisant.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Mise en forme et types de sujet</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f30"></a><b>&#187; Que sont les BBCodes?</b></div>
				<div class="postbody">Le BBCode est une variante du HTML, offrant un large contrôle de mise en forme des éléments d’un message. L’administrateur peut décider si vous pouvez utiliser les BBCodes, vous pouvez aussi les désactiver dans chacun de vos messages en utilisant l’option appropriée du formulaire de rédaction de message. Le BBCode lui-même est similaire au style HTML, mais les balises sont incluses entre crochets [ et ] plutôt que &lt; et &gt;. Pour plus d’informations sur le BBCode, consultez le guide accessible depuis la page de rédaction de message.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f31"></a><b>&#187; Puis-je utiliser le HTML?</b></div>
				<div class="postbody">Non, il n’est pas possible de publier du HTML sur ce forum. La plupart des mises en forme permises par le HTML peuvent être appliquées avec les BBCodes.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f32"></a><b>&#187; Que sont les smileys?</b></div>
				<div class="postbody">Les smileys, ou émoticônes, sont de petites images utilisées pour exprimer des sentiments avec un code simple, exemple: :) signifie joyeux, :( signifie triste. La liste complète des smileys est visible sur la page de rédaction de message. Essayez toutefois de ne pas en abuser. Ils peuvent rapidement rendre un message illisible et un modérateur peut décider de les retirer ou simplement d’effacer le message. L’administrateur peut aussi avoir défini un nombre maximum de smileys par message.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f33"></a><b>&#187; Puis-je publier des images?</b></div>
				<div class="postbody">Oui, vous pouvez afficher des images dans vos messages. Par ailleurs, si l’administrateur a autorisé les fichiers joints, vous pouvez transférer une image sur le forum. Autrement, vous devez lier une image placée sur un serveur Web public, exemple: http://www.exemple.com/mon-image.gif. Vous ne pouvez pas lier des images de votre ordinateur (sauf si c’est un serveur Web public) ni des images placées derrière des mécanismes d’authentification, exemple: Boîtes e-mail Hotmail ou Yahoo!, sites protégés par un mot de passe, etc. Pour afficher l’image, utilisez la balise BBCode [img].</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f34"></a><b>&#187; Que sont les annonces globales?</b></div>
				<div class="postbody">Les annonces globales contiennent des informations importantes que vous devez lire dès que possible. Elles apparaissent en haut de chaque forum et dans votre panneau de l’utilisateur. La possibilité de publier des annonces globales dépend des permissions définies par l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f35"></a><b>&#187; Que sont les annonces?</b></div>
				<div class="postbody">Les annonces contiennent souvent des informations importantes concernant le forum que vous consultez et doivent être lues dès que possible. Les annonces apparaissent en haut de chaque page du forum dans lequel elles sont publiées. Comme pour les annonces globales, la possibilité de publier des annonces dépend des permissions définies par l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f36"></a><b>&#187; Que sont les post-it?</b></div>
				<div class="postbody">Un post-it apparaît en dessous des annonces sur la première page du forum dans lequel il a été publié. Il contient des informations relativement importantes et vous devez le consulter régulièrement. Comme pour les annonces et les annonces globales, la possibilité de publier des post-it dépend des permissions définies par l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f37"></a><b>&#187; Que sont les sujets verrouillés?</b></div>
				<div class="postbody">Vous ne pouvez plus répondre dans les sujets verrouillés et tout sondage y étant contenu est alors terminé. Les sujets peuvent être verrouillés pour différentes raisons par un modérateur ou un administrateur. Selon les permissions accordées par l’administrateur, vous pouvez ou non verrouiller vos propres sujets.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f38"></a><b>&#187; Que sont les icônes de sujet?</b></div>
				<div class="postbody">Les icônes de sujet sont des images qui peuvent être associées à des messages pour refléter leur contenu. La possibilité d’utiliser des icônes de sujet dépend des permissions définies par l’administrateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Niveaux d’utilisateurs et groupes</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f40"></a><b>&#187; Qui sont les administrateurs?</b></div>
				<div class="postbody">Les administrateurs sont les utilisateurs qui ont le plus haut niveau de contrôle sur tout le forum. Ils contrôlent tous les aspects du forum comme les permissions, le bannissement, la création de groupes d’utilisateurs ou de modérateurs, etc., selon les permissions que le fondateur du forum a attribuées aux autres administrateurs. Ils peuvent aussi avoir toutes les capacités de modération sur l’ensemble des forums, selon ce que le fondateur a autorisé.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f41"></a><b>&#187; Que sont les modérateurs?</b></div>
				<div class="postbody">Les modérateurs sont des utilisateurs (ou groupes d’utilisateurs) dont le travail consiste à vérifier au jour le jour le bon fonctionnement du forum. Ils ont le pouvoir de modifier ou supprimer des messages, de verrouiller, déverrouiller, déplacer, supprimer et diviser les sujets des forums qu’ils modèrent. Généralement, les modérateurs empêchent que les utilisateurs partent en <em>hors-sujet</em> ou publient du contenu abusif ou offensant.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f42"></a><b>&#187; Que sont les groupes d’utilisateurs?</b></div>
				<div class="postbody">Les groupes sont la manière pour les administrateurs de regrouper et gérer des utilisateurs. Chaque utilisateur peut appartenir à plusieurs groupes et chaque groupe peut avoir des permissions particulières. Cela fournit aux administrateurs une façon simple de modifier les permissions de plusieurs utilisateurs en une fois, telles que rendre plusieurs utilisateurs modérateurs d’un forum ou leur donner accès à un forum privé.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f43"></a><b>&#187; Comment adhérer à un groupe d’utilisateurs?</b></div>
				<div class="postbody">Pour adhérer à un groupe, cliquez sur le lien <em>Groupes d’utilisateurs</em> dans votre panneau de l’utilisateur, vous pouvez ensuite voir tous les groupes. Tous les groupes ne sont pas en <em>accès libre</em>. Certains peuvent nécessiter une validation, certains sont fermés et d’autres peuvent même être masqués. Si le groupe est ouvert, vous pouvez le rejoindre en cliquant sur le bouton approprié. Si le groupe requiert une validation, vous pouvez demander à le rejoindre en cliquant sur le bouton approprié. Un modérateur de groupe devra confirmer votre requête et pourra vous demander pourquoi vous voulez rejoindre le groupe. N’importunez pas le modérateur s’il annule votre requête, il a sûrement ses raisons.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f44"></a><b>&#187; Comment devenir modérateur de groupe?</b></div>
				<div class="postbody">Lorsque des groupes sont créés par l’administrateur, il leur est attribué un modérateur. Si vous désirez créer un groupe d’utilisateurs, contactez l’administrateur en premier lieu en lui envoyant un message privé.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f45"></a><b>&#187; Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente?</b></div>
				<div class="postbody">L’administrateur peut attribuer des couleurs aux membres d’un groupe pour les rendre facilement identifiables.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f46"></a><b>&#187; Qu’est-ce qu’un “Groupe par défaut”?</b></div>
				<div class="postbody">Si vous êtes membre de plus d’un groupe, celui par défaut est utilisé pour déterminer le rang et la couleur de groupe affichés par défaut. L’administrateur peut vous permettre de changer votre groupe par défaut via votre panneau de l’utilisateur.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f47"></a><b>&#187; Qu’est-ce que le lien “L’équipe du forum”?</b></div>
				<div class="postbody">Cette page donne la liste des membres de l’équipe du forum, y compris les administrateurs et modérateurs ainsi que d’autres détails tels que les forums qu’ils modèrent.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Messagerie privée</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f50"></a><b>&#187; Je ne peux pas envoyer de messages privés!</b></div>
				<div class="postbody">Il y a trois raisons pour cela: vous n’êtes pas enregistré et/ou connecté, l’administrateur a désactivé la messagerie privée sur l’ensemble du forum, ou l’administrateur vous a empêché d’envoyer des messages. Contactez l’administrateur pour plus d’informations.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f51"></a><b>&#187; Je reçois sans arrêt des messages indésirables!</b></div>
				<div class="postbody">Vous pouvez empêcher un utilisateur de vous envoyer des messages en utilisant les filtres de message dans les paramètres de votre messagerie privée. Si vous recevez des messages privés abusifs d’un utilisateur en particulier, informez l’administrateur. Ce dernier a la possibilité d’empêcher complètement un utilisateur d’envoyer des messages privés.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f52"></a><b>&#187; J’ai reçu un e-mail ou un courrier abusif d’un utilisateur de ce forum!</b></div>
				<div class="postbody">Le formulaire de courrier électronique du forum comprend des sécurités pour suivre les utilisateurs qui envoient de tels messages. Envoyez à l’administrateur une copie complète de l’e-mail reçu. Il est très important d’inclure les en-têtes (ils contiennent des informations sur l’expéditeur de l’e-mail). L’administrateur pourra alors prendre les mesures nécessaires.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Amis et ignorés</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f60"></a><b>&#187; Que sont mes listes d’amis et d’ignorés?</b></div>
				<div class="postbody">Vous pouvez utiliser ces listes pour organiser les autres membres du forum. Les membres ajoutés à votre liste d’amis seront affichés dans votre panneau de l’utilisateur pour un accès rapide, voir leur état de connexion et leur envoyer des messages privés. Selon les thèmes graphiques, leurs messages peuvent être mis en valeur. Si vous ajoutez un utilisateur à votre liste d’ignorés, tous ses messages seront masqués par défaut.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f61"></a><b>&#187; Comment puis-je ajouter/supprimer des utilisateurs de ma liste d’amis ou d’ignorés?</b></div>
				<div class="postbody">Vous pouvez ajouter des utilisateurs à votre liste de deux manières. Dans le profil de chaque membre, il y a un lien pour l’ajouter dans votre liste d’amis ou d’ignorés. Ou, depuis votre panneau de l’utilisateur, vous pouvez ajouter directement des membres en saisissant leur nom d’utilisateur. Vous pouvez également supprimer des utilisateurs de votre liste depuis cette même page.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Recherche dans les forums</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f70"></a><b>&#187; Comment rechercher dans les forums?</b></div>
				<div class="postbody">Saisissez un terme à rechercher dans la zone de recherche située en haut des pages d’index, de forums ou de sujets. La recherche avancée est accessible en cliquant sur le lien “Recherche avancée” disponible sur toutes les pages du forum. L’accès à la recherche peut dépendre des thèmes graphiques utilisés.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f71"></a><b>&#187; Pourquoi ma recherche ne renvoie aucun résultat?</b></div>
				<div class="postbody">Votre recherche est probablement trop vague ou comprend plusieurs termes courants non indexés par phpBB 3. Vous pouvez affiner votre recherche en utilisant les options disponibles dans la recherche avancée.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f72"></a><b>&#187; Pourquoi ma recherche retourne une page blanche!?</b></div>
				<div class="postbody">Votre recherche renvoie plus de résultats que ne peut gérer le serveur Web. Utilisez la “Recherche avancée” et soyez plus précis dans le choix des termes utilisés et des forums concernés par la recherche.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f73"></a><b>&#187; Comment rechercher des membres?</b></div>
				<div class="postbody">Allez sur la page “Membres”, cliquez sur le lien  “Rechercher un utilisateur” et remplissez les options nécessaires.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f74"></a><b>&#187; Comment puis-je trouver mes propres messages et sujets?</b></div>
				<div class="postbody">Vos messages peuvent être retrouvés en cliquant sur “Voir vos messages” dans le panneau de l’utilisateur ou via votre propre page de profil. Pour rechercher vos sujets, utilisez la page de recherche avancée et choisissez les paramètres appropriés.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Surveillance des sujets et favoris</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f80"></a><b>&#187; Quelle est la différence entre les favoris et la surveillance?</b></div>
				<div class="postbody">Les favoris dans phpBB 3 sont comme les favoris de votre navigateur. Vous n’êtes pas nécessairement averti des mises à jour, mais vous pouvez revenir plus tard sur le sujet. A l’inverse, la surveillance vous préviendra lorsqu’un sujet ou un forum sera mis à jour via votre choix de préférence.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f81"></a><b>&#187; Comment surveiller des forums ou sujets particuliers?</b></div>
				<div class="postbody">Pour surveiller un forum particulier, une fois entré sur celui-ci, cliquez sur le lien “Surveiller ce forum”. Pour surveiller un sujet, vous pouvez soit répondre à ce sujet et cocher la case du formulaire de rédaction de message pour le surveiller, soit cliquer sur le lien “Surveiller ce sujet” disponible en consultant le sujet lui-même.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f82"></a><b>&#187; Comment puis-je supprimer mes surveillances de sujets?</b></div>
				<div class="postbody">Pour supprimer vos surveillances, allez dans votre panneau de l’utilisateur (onglet <em>Aperçu --> Gestion des surveillances</em>) et suivez les instructions.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Fichiers joints</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f90"></a><b>&#187; Quels fichiers joints sont autorisés sur ce forum?</b></div>
				<div class="postbody">L’administrateur peut autoriser ou interdire certains types de fichiers joints. Si vous n’êtes pas sûr de ce qui est autorisé à être transféré, contactez l’administrateur pour plus d’informations.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f91"></a><b>&#187; Comment trouver tous mes fichiers joints?</b></div>
				<div class="postbody">Pour trouver la liste des fichiers joints que vous avez transférés, allez dans votre panneau de l’utilisateur puis <em>Gestion des fichiers joints</em>.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />
			<table class="tablebg" width="100%" cellspacing="1">
		<tr>
			<td class="cat" align="center"><h4>Concernant phpBB 3</h4></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f100"></a><b>&#187; Qui sont les auteurs de ce forum?</b></div>
				<div class="postbody">Ce logiciel (dans sa forme originale) est produit, distribué et son copyright est détenu par le <a href="http://www.phpbb.com/">Groupe phpBB</a>. Il est rendu accessible sous la Licence Publique Générale GNU et peut être distribué gratuitement. Consultez le lien pour plus d’informations.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row2" valign="top">
							<div class="postbody"><a name="f101"></a><b>&#187; Pourquoi la fonctionnalité X n’est pas disponible?</b></div>
				<div class="postbody">Ce programme a été écrit et mis sous licence par le Groupe phpBB. Si vous pensez qu’une fonctionnalité nécessite d’être ajoutée, visitez le site Internet phpbb.com et voyez ce que le Groupe phpBB en dit. N’envoyez pas de requêtes de fonctionnalités sur le forum de phpbb.com, le groupe utilise SourceForge pour gérer ces nouvelles requêtes. Lisez les forums pour voir leur position, s’ils en ont une, par rapport à cette fonctionnalité, et suivez la procédure donnée là-bas.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>

		<tr>
							<td class="row1" valign="top">
							<div class="postbody"><a name="f102"></a><b>&#187; Qui contacter pour les abus ou les questions légales concernant ce forum?</b></div>
				<div class="postbody">Contactez n’importe lequel des administrateurs de la liste “L’équipe du forum”. Si vous restez sans réponse alors prenez contact avec le propriétaire du domaine (en faisant une <a href="http://www.google.com/search?q=whois">recherche sur whois</a>) ou si un service gratuit est utilisé (exemple: Yahoo!, Free, f2s.com, etc.), avec le service de gestion ou des abus. Notez que le groupe phpBB <strong>n’a absolument aucun contrôle</strong> et ne peut être en aucune façon tenu pour responsable sur <em>comment</em>, <em>où</em> ou <em>par qui</em> ce forum est utilisé. Il est inutile de contacter le groupe phpBB pour toute question légale (cessions et désistements, responsabilité, propos diffamatoires, etc.) <strong>non directement liée</strong> au site Internet phpbb.com ou au logiciel phpBB lui-même. Si vous adressez un e-mail au groupe phpBB à propos de l’utilisation <strong>d’une tierce partie</strong> de ce logiciel vous devez vous attendre à une réponse très courte voire à aucune réponse du tout.</div>
				<p class="gensmall"><a href="#faqtop">Haut</a></p>
			</td>
		</tr>
		<tr>
			<td class="spacer" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
		</tr>
				</table>

		<br clear="all" />

</div>

<p class="breadcrumbs">
<img src="./styles/polyethylene/theme/images/bread.png" alt="" />
<a href="http://stargateuniverse.lndo.site/phpbb3/">Index du forum</a></p>
<br clear="all" />

<div align="right">	<form method="post" name="jumpbox" action="http://stargateuniverse.lndo.site/phpbb3/viewforum.php" onsubmit="if(document.jumpbox.f.value == -1){return false;}">

	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Aller à:</span>&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">

					<option value="-1">Sélectionner un forum</option>
		<option value="-1">------------------</option>			<option value="3">Dernières infos</option>
					<option value="4">&nbsp; &nbsp;News</option>
					<option value="5">&nbsp; &nbsp;Spoilers</option>
					<option value="6">&nbsp; &nbsp;Rumeurs</option>
					<option value="7">Ressources</option>
					<option value="8">&nbsp; &nbsp;Episodes saison 1</option>
					<option value="21">&nbsp; &nbsp;Episodes saison 2</option>
					<option value="9">&nbsp; &nbsp;Personnages / Acteurs</option>
					<option value="10">&nbsp; &nbsp;Dossiers</option>
					<option value="11">Médias</option>
					<option value="12">&nbsp; &nbsp;Musiques</option>
					<option value="13">Stargate Universe et ses visiteurs</option>
					<option value="14">&nbsp; &nbsp;Présentation des nouveaux inscrits</option>
					<option value="15">&nbsp; &nbsp;Le bar</option>
					<option value="16">&nbsp; &nbsp;Le site et ses problèmes techniques</option>
					<option value="17">&nbsp; &nbsp;Idées d'innovations</option>

		</select>&nbsp;<input class="btnlite" type="submit" value="Aller" /></td>
	</tr>
	</table>

	</form>
</div>

<div style="clear: both; height: 0;"></div>
<br/>
<div style="text-align:center">
<script type='text/javascript'><!--//<![CDATA[
	var m3_u = (location.protocol=='https:'?'https://cas.criteo.com/delivery/ajs.php':'http://cas.criteo.com/delivery/ajs.php');
	var m3_r = Math.floor(Math.random()*99999999999);
	if (!document.MAX_used) document.MAX_used = ',';
	document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
	document.write ("?nodis=1&amp;zoneid=8399");
	document.write ('&amp;cb=' + m3_r);
	if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
	document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
	document.write ("&amp;loc=" + escape(window.location));
	if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
	if (document.context) document.write ("&context=" + escape(document.context));
	if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
	document.write ("'><\/scr"+"ipt>");
//]]>--></script>
</div>
<br/>


<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

</div>
<div id="stopka">
<span id="theme">Theme designed by <a href="http://stylerbb.net/">stylerbb.net</a> & <a href="http://www.programosy.pl">programy</a> &copy; 2008</span><br />
Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
	<br />Traduction par: <a href="http://forums.phpbb-fr.com">phpBB-fr.com</a><br /><a href="http://www.phpbb-seo.com/" title="Optimisation du R&eacute;f&eacute;rencement"><img src="http://stargateuniverse.lndo.site/phpbb3/images/phpbb-seo.png" alt="phpBB SEO"/></a>	<br />Heures au format UTC 	</div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-349423-20");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
