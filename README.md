# yii2-kurs
# Modülün Amacı
Bir kurs platformunda alınacak ders notlarının kaydedilmesi hedeflenmektedir.Bu hedef doğrultusunda tablo üzerinde dolduracağanız bilgilerden sonra dilediğiniz işlemi gerçekleştirebilirsiniz.
# Modül Üzerinde Yapılabilecek Temel İşlemler
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
# Modülün Altyapısı
### *Migration İşlemi*
Modül içerisinde iki adet tablo vardır.Tablolardan biri oluşturulan kursun kullanıcı bilgilerini diğeri ise silinen kurs bilgilerinin yanı sıra kurs notlarını da tutmaktadır.Kurs ve deleted, tabloların isimleri olmak üzere beş adet değişkenleri vardır ve değişkenler aynıdır.

![image](https://user-images.githubusercontent.com/73740709/104809633-afa47600-57ff-11eb-85c7-74328f761be8.png)

# Temel Modül Görselleri
##### *Temel Olarak Modül Tablosu*
![Kurs](https://user-images.githubusercontent.com/73740709/104808996-1bd0ab00-57fb-11eb-87ca-084da328093e.png)
##### *Modülde Kayıt İşlemi*
![Create Kurs](https://user-images.githubusercontent.com/73740709/104809017-49b5ef80-57fb-11eb-9bc0-0dd7f127be43.png)
##### *Modülde Deleted Tablosu*
![Deleted](https://user-images.githubusercontent.com/73740709/104809053-81249c00-57fb-11eb-87bd-cb59f1e52c20.png)
