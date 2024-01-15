document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen input tanggal
    const dateInput = document.querySelector('input[name="date"]');
  
    // Atur tanggal minimal menjadi tanggal hari ini
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = String(currentDate.getMonth() + 1).padStart(2, '0');
    const day = String(currentDate.getDate()).padStart(2, '0');
    const minDate = `${year}-${month}-${day}`;
    dateInput.setAttribute("min", minDate);
  
    // Fungsi untuk memastikan tanggal yang dipilih tidak boleh kurang dari tanggal hari ini
    function handleDateChange() {
      const selectedDate = new Date(dateInput.value);
      if (selectedDate < currentDate) {
        alert("Maaf, Anda tidak dapat memilih tanggal yang sudah lewat.");
        dateInput.value = minDate; // Setel ulang tanggal menjadi minimal jika dipilih tanggal yang sudah lewat
      }
    }
  
    // Tambahkan event listener untuk memantau perubahan tanggal
    dateInput.addEventListener("change", handleDateChange);
  });
