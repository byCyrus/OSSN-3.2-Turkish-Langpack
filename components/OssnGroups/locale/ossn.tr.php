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
    'groups' => 'Gruplar',
    'add:group' => 'Grup kur',
    'requests' => 'İstekler',

    'members' => 'Üyeler',
    'member:add:error' => 'Yanlış birşeyler oldu! Lütfen daha sonra tekrar deneyin.',
    'member:added' => 'Üyelik talebi onaylandı!',

    'member:request:deleted' => 'Üyelik talebi reddedildi!',
    'member:request:delete:fail' => 'Üyelik talebi reddedilemedi! Lütfen daha sonra tekrar deneyin.',
    'membership:cancel:succes' => 'Üyelik talebi iptal edildi!',
    'membership:cancel:fail' => 'Üyelik talebi iptal edilemedi! Lütfen daha sonra tekrar deneyin.',

    'group:added' => 'Grubunuz başarıyla oluşturuldu!',
    'group:add:fail' => 'Grup oluşturulamadı! Lütfen daha sonra tekrar deneyin.',

    'memebership:sent' => 'İstek başarıyla gönderildi!',
    'memebership:sent:fail' => 'İstek gönderme başarısız oldu! Lütfen daha sonra tekrar deneyin.',

    'group:updated' => 'Grup güncellendi!',
    'group:update:fail' => 'Grup güncellenemedi! Lütfen daha sonra tekrar deneyin.',

    'group:name' => 'Grup Adı',
    'group:desc' => 'Grup Açıklaması',
    'privacy:group:public' => 'Herkes bu grubu ve gönderileri görebilir. Sadece üyeler gönderi ekleyebilir.',
    'privacy:group:close' => 'Herkes bu grubu görebilir. Sadece üyeler gönderileri görebilir ve yeni gönderi ekleyebilir.',

    'group:memb:remove' => 'Sil',
    'leave:group' => 'Gruptan Ayrıl',
    'join:group' => 'Gruba Katıl',
    'total:members' => 'Toplan Üye',
    'group:members' => "Üye Sayısı (%s)",
    'view:all' => 'Hepsini Gör',
    'member:requests' => 'İstekler (%s)',
    'about:group' => 'Grup Hakkında',
    'cancel:membership' => 'Üyelik İptali',

    'no:requests' => 'İstek Yok',
    'approve' => 'Onayla',
    'decline' => 'Reddet',
    'search:groups' => 'Gruplarda Ara',

    'close:group:notice' => 'Gönderileri, fotoğrafları ve yorumları görebilmek için bu gruba katıl.',
    'closed:group' => 'Grup Kapatıldı',
    'group:admin' => 'Yönetici',
	
	'title:access:private:group' => 'Grup gönderisi',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s adlı kullanıcı %s grubuna katılmak istiyor',
	'ossn:group:by' => 'Kurucusu:',
	
	'group:deleted' => 'Grup ve grup içeriği silindi',
	'group:delete:fail' => 'Grup silinemedi',	
);
ossn_register_languages('tr', $turk); 
