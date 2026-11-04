# Konu: Hafta 1 - Git ve GitHub

## Araştırma
**Git Nedir?**
Kod yazarken yaptığımız her değişikliği adım adım kaydeden, eski sürümlere dönmemizi sağlayan yerel bir versiyon kontrol sistemidir.

**GitHub Nedir?**
Git kullanarak kaydettiğimiz projeleri internet üzerinde bulutta tutmamızı, farklı bilgisayarlardan erişmemizi ve diğer geliştiricilerle paylaşmamızı sağlayan bir web platformudur.

**Git ve GitHub Arasındaki Fark**
Git bizim bilgisayarımızda çalışan bir araçtır (internetsiz de çalışır); GitHub ise Git ile oluşturulan depoları (repository) barındıran bir sunucu hizmetidir.

**Kavramlar:**
* **Repository:** Projenin tüm kodlarının, dosyalarının ve geçmişinin tutulduğu ana depodur.
* **Commit:** Projede yapılan bir değişikliğin, bir açıklama mesajıyla birlikte tarihe not düşülerek kaydedilmesidir.
* **Branch:** Ana projeyi bozmadan yeni özellikler kodlamak veya hata çözmek için açılan yan dallardır.
* **Merge:** Farklı bir branch (yan dal) üzerinde yapılan çalışmaların ana projeye (main branch) birleştirilmesidir.
* **Clone:** GitHub üzerindeki hazır bir repository'nin tüm geçmişiyle birlikte kendi bilgisayarımıza indirilmesidir.
* **Pull:** Bizden başka birinin veya başka bir cihazdan yapılan güncellemelerin uzak sunucudan kendi bilgisayarımıza çekilmesidir.
* **Push:** Kendi bilgisayarımızda yaptığımız yeni commit'lerin uzak sunucuya (GitHub'a) gönderilmesidir.
* **.gitignore Dosyasının Amacı:** Veritabanı şifreleri, log dosyaları veya devasa boyutlu kütüphane klasörleri (örn. vendor) gibi GitHub'a yüklenmesini istemediğimiz dosyaları filtreler.

## Sektörde Kullanımı
Yazılım sektöründe Git ve GitHub, büyük ekiplerin aynı proje üzerinde dosyalar çakışmadan eşzamanlı çalışabilmesi için kullanılır. Ayrıca CI/CD (Sürekli Entegrasyon) süreçlerinde kodların canlı sunuculara hatasız ve otomatik olarak aktarılmasında en temel yapı taşıdır.

## İncelediğim Projeler
Kendi projemi de PHP ve Laravel ile geliştirdiğim için bu ekosistemdeki projeleri inceledim.

**1. Filament**
* **GitHub Adresi:** https://github.com/filamentphp/filament
* **Programlama Dili & Framework:** PHP / Laravel
* **Projenin Amacı:** Laravel için çok hızlı ve şık yönetim (admin) panelleri oluşturmak.
* **Commit Sayısı:** Yaklaşık 12.000+
* **Contributor Sayısı:** 700+
* **Klasör Yapısı:** Klasik MVC yapısının dışında `packages`, `bin` ve `stubs` gibi geniş çaplı eklenti klasörlerinden oluşuyor.
* **README Yapısı:** Görsel ağırlıklı, hızlı başlangıç komutları ve dokümantasyon yönlendirmeleri içeriyor.

**2. BookStack**
* **GitHub Adresi:** https://github.com/BookStackApp/BookStack
* **Programlama Dili & Framework:** PHP / Laravel
* **Projenin Amacı:** Şirketlerin kendi iç dokümantasyonlarını oluşturabilecekleri wiki tarzı bir platform sağlamak.
* **Commit Sayısı:** Yaklaşık 7.500+
* **Contributor Sayısı:** 250+
* **Klasör Yapısı:** Tam bir Laravel projesi gibi `app`, `routes`, `resources` ve `public` yapısına sahip.
* **README Yapısı:** Projenin ekran görüntüleri, özellikleri, kurulum adımları ve lisans bilgileri yer alıyor.

**3. Flarum**
* **GitHub Adresi:** https://github.com/flarum/flarum
* **Programlama Dili & Framework:** PHP / Laravel bileşenleri ve Mithril.js
* **Projenin Amacı:** Modern, hızlı ve genişletilebilir bir açık kaynak forum yazılımı sunmak.
* **Commit Sayısı:** Yaklaşık 9.000+
* **Contributor Sayısı:** 180+
* **Klasör Yapısı:** Core (çekirdek) bileşenleri ile frontend ve backend dosyaları ayrı klasörlerde (`src`, `js`, `views`) modüler olarak tutuluyor.
* **README Yapısı:** Topluluk kuralları, destekleyen sponsorlar ve kurulum rehberi barındırıyor.

## Yaptığım Uygulama
Kendi geliştirmekte olduğum **Oto Pusula** araç takip projesinin temel dosyalarını adım adım GitHub'a yükledim. Kodları tek seferde atmak yerine ana sayfa (`index.php`), header, footer ve veritabanı bağlantısı (`baglan.php`) gibi dosyaları parça parça, 5 farklı ve anlamlı mesajla commit'leyerek profesyonel bir commit geçmişi oluşturdum. Ayrıca `.gitignore` dosyası oluşturarak `database.sqlite` veritabanı dosyamın buluta yüklenmesini başarıyla engelledim.

## Karşılaştığım Problemler
Kodları GitHub'a göndermek için `git push -u origin main` komutunu çalıştırdığımda `error: src refspec main does not match any` hatası aldım. Yaptığım araştırma sonucunda, bilgisayarımdaki yerel dalın (branch) adının eski standart olan `master` olarak kaldığını, GitHub'ın ise varsayılan olarak `main` beklediğini fark ettim.

## Öğrendiklerim
Karşılaştığım sorunu çözmek için `git branch -M main` komutunu kullanarak yerel dalımın adını main olarak güncellemeyi öğrendim. Ayrıca kodları klasöre yığmak yerine parça parça commit'lemenin projenin gelişim sürecini ne kadar okunabilir kıldığını tecrübe ettim.

## Kaynaklar
* Git Resmi Dokümantasyonu (git-scm.com)
* GitHub Guides ve Laravel dökümanları
* Kendi deneme yanılma ve problem çözme süreçlerim