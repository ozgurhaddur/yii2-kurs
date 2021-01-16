# yii2-kurs
# Modülün Amacı
Bir kurs platformunda alınacak ders notlarının kaydedilmesi hedeflenmektedir.Bu hedef doğrultusunda tablo üzerinde dolduracağanız bilgilerden sonra dilediğiniz işlemi gerçekleştirebilirsiniz.
# Modül üzerinde yapılabilecek temel işlemler:
Kurs kaydı oluşturabilirsiniz.

Oluşturulan kurs kaydına kursun ders notunuzu ekleyebilirsiniz.

Oluşturduğunuz kurs kaydının ders notunu silebilirsiniz.

Sildiğiniz ders notlarına erişebilmek için çöp kutusu platformu aracıılğıyla tekrar erişebilirsiniz.

Main Page adlı anasayfada tablonun id kısmından kullanıcı ismine ve doğrudan alınan ders notunun içeriğine erişebilirsiniz.
# Modül Kurulumu
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

# Temel Modül Görselleri
##### *Temel Olarak Modül Tablosu*
![Kurs](https://user-images.githubusercontent.com/73740709/104808996-1bd0ab00-57fb-11eb-87ca-084da328093e.png)
##### *Modülde Kayıt İşlemi*
![kayıt resmi](https://github.com/ozgurhaddur/yii2-kurs/blob/master/Create%20Kurs.png)
##### *Modülde Deleted Tablosu*
![deleted resmi](https://github.com/ozgurhaddur/yii2-kurs/blob/master/Deleted.png)
