// Modul untuk validasi input
class InputValidator {
  // Konstruktor untuk inisialisasi pesan kesalahan
  constructor() {
    this.errors = [];
  }

  // Method untuk validasi nama
  validateName(name) {
    if (name.trim() === "") {
      this.errors.push("Nama harus diisi.");
    }
  }

  // Method untuk validasi email
  validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      this.errors.push("Format email tidak valid.");
    }
  }

  // Method untuk validasi nomor telepon
  validateNumber(number) {
    if (isNaN(number) || number <= 0) {
      this.errors.push("Nomor harus berupa angka positif.");
    }
  }
}

// Kode untuk menangani form submit
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman form bawaan HTML

    // Mengambil nilai dari input
    const name = form.querySelector('input[placeholder="Name"]').value;
    const email = form.querySelector('input[placeholder="Email"]').value;
    const number = form.querySelector('input[placeholder="Number"]').value;

    // Membuat instance dari kelas InputValidator
    const validator = new InputValidator();

    // Melakukan validasi input
    validator.validateName(name);
    validator.validateEmail(email);
    validator.validateNumber(number);

    // Menampilkan pesan kesalahan jika ada
    if (validator.errors.length > 0) {
      alert("Terjadi kesalahan:\n" + validator.errors.join("\n"));
    } else {
      alert("Form berhasil dikirim!");
      form.reset(); // Mereset form setelah pengiriman berhasil
    }
  });
});
