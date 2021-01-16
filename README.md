# yii2-kurs
# Modülün Amacı
Bir kurs platformunda alınacak ders notlarının kaydedilmesi hedeflenmektedir.Bu hedef doğrultusunda tablo üzerinde dolduracağanız bilgilerden sonra dilediğiniz işlemi gerçekleştirebilirsiniz.
# Modül üzerinde yapılabilecek temel işlemler:
Kurs kaydı oluşturabilirsiniz.

Oluşturulan kurs kaydına kursun ders notunuzu ekleyebilirsiniz.

Oluşturduğunuz kurs kaydının ders notunu silebilirsiniz.

Sildiğiniz ders notlarına erişebilmek için çöp kutusu platformu aracıılğıyla tekrar erişebilirsiniz.

Main Page adlı anasayfada tablonun id kısmından kullanıcı ismine ve doğrudan alınan ders notunun içeriğine erişebilirsiniz.
## Kurulum
Vagrantı aktifleştirmek amacıyla ssh komutu aracılığıyla vagrant sanal makinesine bağlanınız.Ardından /var/www/advanced komutunu giriniz.

`composer require --prefer-dist ozgurhaddur/yii2-kurs "dev-main"` komutunu girip modül kurulumuna başlayınız.

Yii projeninizin altında advanced\backend\config\main.php dosyası içerisine aşağıda verilen düzenlemeyi yapmanız gerekmektedir.

 ```
 'modules' => [
        'note' =>[
            'class' => 'ozgurhaddur\kurs\Module'
          
        ]

    ],
}
```
Migration işlemini aktifleştirmek amacıyla ssh komutu aracılığıyla modülde kullanılan tabloların kurulması için aşağıdaki komut ile migration işlemini yapmanız gerekmektedir.

`php yii migrate/up --migrationPath=@vendor/ozgurhaddur/yii2-kurs/src/migrations`

Migration işlemini de bitirdikten sonra aşağıda verilen linki tıklayarak yapılan kurs modülüne erişebilirsiniz.

http://advanced/backend/web/index.php?r=kurs/kurs/index adresinden modül anasayfasına ulaşabilirsiniz.
