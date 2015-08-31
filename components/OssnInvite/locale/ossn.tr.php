<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$turk = array(
	'com:ossn:invite' => 'Davet',			
	'com:ossn:invite:friends' => 'Arkadaşlarını Davet Et',
	'com:ossn:invite:friends:note' => 'Grubunuza arkadaşlarınızı davet etmek için e-posta adreslerini girin ve kısa bir davet mesajı yazın. Onlara davetinizi içeren bir e-posta göndereceğiz.',
	'com:ossn:invite:emails:note' => 'E-posta adresleri (virgül (,) ile ayır)',
	'com:ossn:invite:emails:placeholder' => 'ali@örnek.com, ayşe@örnek.com',
	'com:ossn:invite:message' => 'Davet Mesajı',
		
    	'com:ossn:invite:mail:subject' => '%s grubuna katılma daveti',	
    	'com:ossn:invite:mail:message' => '%s grubuna katılmanız için bir davet gönderildi. Gönderen kişi: %s. Mesajın içeriğini aşağıda görebilirsiniz:

%s

Gruba katılmak için alttaki linke tıklayın:

%s

Profil sayfası: %s
',	
	'com:ossn:invite:mail:message:default' => 'Merhaba,

Grubuma katılmanı istiyorum. Grubumun adı: %s.

Profil sayfası : %s

Saygılarımla.
%s',
	'com:ossn:invite:sent' => 'Arkadaşların davet edildi. Davet gönderilen: %s.',
	'com:ossn:invite:wrong:emails' => 'Şu adresler hatalı girilmiş: %s.',
	'com:ossn:invite:sent:failed' => 'Şu adreslere davet gönderilemedi: %s.',
	'com:ossn:invite:already:members' => 'Şu adresler zaten grubunuza üye: %s',
	'com:ossn:invite:empty:emails' => 'Lütfen en az 1 adet e-posta adresi girin',
);
ossn_register_languages('tr', $turk); 
