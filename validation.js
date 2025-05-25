// Vue.js kontrolü
new Vue({
  el: '#app',
  data: {
    adsoyad: '',
    email: '',
    telefon: '',
    mesaj: '',
    hata: ''
  },
  methods: {
    vueKontrol() {
      this.hata = '';
      if (!this.adsoyad || !this.email || !this.telefon || !this.mesaj) {
        this.hata = "Tüm alanları doldurun.";
        return;
      }
      if (!/^[\w-.]+@([\w-]+\.)+[\w-]{2,4}$/.test(this.email)) {
        this.hata = "Geçerli bir e-mail girin.";
        return;
      }
      if (!/^\d+$/.test(this.telefon)) {
        this.hata = "Telefon sadece rakamlardan oluşmalıdır.";
        return;
      }

      // Başka sayfaya yönlendirme ve veri taşıma
      const params = new URLSearchParams({
        adsoyad: this.adsoyad,
        email: this.email,
        telefon: this.telefon,
        mesaj: this.mesaj
      });
      window.location.href = 'sonuc.html?' + params.toString();
    }
  }
});

// JavaScript kontrolü
function jsKontrol() {
  const adsoyad = document.getElementById("adsoyad").value;
  const email = document.getElementById("email").value;
  const telefon = document.getElementById("telefon").value;
  const mesaj = document.getElementById("mesaj").value;

  if (!adsoyad || !email || !telefon || !mesaj) {
    alert("Tüm alanları doldurun.");
    return;
  }

  if (!/^[\w-.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
    alert("Geçerli bir e-mail girin.");
    return;
  }

  if (!/^\d+$/.test(telefon)) {
    alert("Telefon sadece rakamlardan oluşmalıdır.");
    return;
  }

  const params = new URLSearchParams({
    adsoyad, email, telefon, mesaj
  });

  window.location.href = 'sonuc.html?' + params.toString();
}