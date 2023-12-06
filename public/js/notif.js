const transactionResult = [
    'Transaksi telah berhasil, terima kasih atas kepercayaan Anda',
    'Transaksi sedang dalam proses, kami akan menghubungi Anda setelah proses selesai',
    'Transaksi gagal, silahkan coba lagi',
];

let resultIndex = 0;

function updateResult() {
    const resultDiv = document.getElementById('result');
    resultDiv.textContent = transactionResult[resultIndex];
    resultIndex = (resultIndex + 1) % transactionResult.length;
}

updateResult();
setInterval(updateResult, 5000);
